<?php

namespace App\Modules\Panels;

use App\Modules\Panels\Models\Panel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Sazeh\Core\Audit\AuditLogger;

class PanelController extends Controller
{
    public function __construct(private readonly AuditLogger $audit)
    {
    }

    public function index(Request $request): View
    {
        $q = trim((string) $request->query('q'));
        $status = $request->query('status');

        $panels = Panel::query()
            ->when($q !== '', fn ($w) => $w->where(fn ($x) => $x->where('title', 'like', "%{$q}%")->orWhere('code', 'like', "%{$q}%")))
            ->when($status === 'active', fn ($w) => $w->where('is_active', true))
            ->when($status === 'inactive', fn ($w) => $w->where('is_active', false))
            ->orderBy('sort')->orderBy('id')
            ->paginate(20)->withQueryString();

        return view('panels::index', [
            'panels' => $panels,
            'q' => $q,
            'status' => $status,
            'canManage' => $request->user()->can('panels.manage'),
            'counts' => ['all' => Panel::count(), 'active' => Panel::active()->count()],
        ]);
    }

    public function create(): View
    {
        return view('panels::form', ['panel' => new Panel(['is_active' => true, 'sort' => (int) Panel::max('sort') + 1])]);
    }

    public function store(PanelRequest $request): RedirectResponse
    {
        $panel = new Panel($request->validated());
        $panel->forceFill(['created_by' => $request->user()->getKey(), 'updated_by' => $request->user()->getKey()])->save();
        $this->audit->log('panel.created', $panel, ['code' => $panel->code]);

        return redirect()->route('panels.index')->with('success', "پنل «{$panel->title}» ساخته شد.");
    }

    public function edit(Panel $panel): View
    {
        return view('panels::form', ['panel' => $panel]);
    }

    public function update(PanelRequest $request, Panel $panel): RedirectResponse
    {
        $panel->fill($request->validated());
        $changed = array_keys($panel->getDirty());
        $panel->forceFill(['updated_by' => $request->user()->getKey()])->save();
        $this->audit->log('panel.updated', $panel, ['fields' => $changed]);

        return redirect()->route('panels.index')->with('success', "پنل «{$panel->title}» ذخیره شد.");
    }

    public function toggle(Request $request, Panel $panel): RedirectResponse
    {
        $panel->forceFill(['is_active' => ! $panel->is_active, 'updated_by' => $request->user()->getKey()])->save();
        $this->audit->log('panel.toggled', $panel, ['active' => $panel->is_active]);

        return back()->with('success', $panel->is_active ? 'پنل فعال شد.' : 'پنل غیرفعال شد.');
    }

    public function destroy(Panel $panel): RedirectResponse
    {
        $panel->delete(); // حذف نرم: سابقه باقی می‌ماند
        $this->audit->log('panel.deleted', $panel, ['code' => $panel->code]);

        return redirect()->route('panels.index')->with('success', "پنل «{$panel->title}» حذف شد.");
    }
}
