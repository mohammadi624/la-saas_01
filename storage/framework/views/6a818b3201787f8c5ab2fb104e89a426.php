<?php $__env->startSection('title', 'مدیریت منوها'); ?>
<?php $__env->startPush('head'); ?>
<style>
.mb-head{display:flex;gap:14px;align-items:flex-end;flex-wrap:wrap;margin-bottom:16px}
.mb-head h1{font-size:21px;margin:0}.mb-head p{margin:2px 0 0;color:var(--muted);font-size:13px}
.seg{display:inline-flex;background:#e9edf5;border-radius:12px;padding:4px;margin-inline-start:auto}
.seg a{display:flex;gap:7px;align-items:center;padding:6px 14px;border-radius:9px;color:var(--muted);text-decoration:none;font-weight:600;font-size:13px}
.seg a.on{background:#fff;color:var(--ink);box-shadow:0 1px 4px rgba(16,24,40,.1)}
.kpis{display:grid;grid-template-columns:repeat(4,1fr);gap:12px;margin-bottom:16px}
.kpi{background:#fff;border:1px solid var(--line);border-radius:14px;padding:12px 14px;display:flex;gap:12px;align-items:center}
.kpi .ico{width:38px;height:38px;border-radius:11px;display:grid;place-items:center;flex:none}
.kpi b{display:block;font-size:19px;line-height:1.3}.kpi span{color:var(--muted);font-size:12px}
.kpi.k1 .ico{background:var(--pri2);color:#3157c8}.kpi.k2 .ico{background:var(--oks);color:var(--ok)}
.kpi.k3 .ico{background:#f3ecff;color:#7a3fd1}.kpi.k4 .ico{background:var(--warns);color:var(--warn)}
.mb{display:grid;grid-template-columns:minmax(0,7fr) minmax(0,5fr);gap:16px;align-items:start}
.panel-card{background:#fff;border:1px solid var(--line);border-radius:16px;overflow:hidden;margin-bottom:16px}
.panel-card>.ph{display:flex;gap:10px;align-items:center;padding:14px 16px;border-bottom:1px solid var(--line)}
.panel-card>.ph h2{font-size:15px;margin:0}.panel-card>.ph p{margin:0;color:var(--muted);font-size:12px}
.panel-card>.ph .sp{margin-inline-start:auto;display:flex;gap:6px}
.panel-card>.pb{padding:12px 14px}
.tnode{display:flex;gap:10px;align-items:center;padding:9px 10px;border:1px solid var(--line);border-radius:12px;margin:6px 0;background:#fff;transition:border-color .15s,box-shadow .15s}
.tnode:hover{border-color:#c9d3e6}
.tnode.sel{border-color:var(--pri);box-shadow:0 0 0 3px #e3e9fd}
.tnode.off .tmain{opacity:.55}
.tnode .tico{width:34px;height:34px;border-radius:10px;display:grid;place-items:center;background:#f2f5fa;color:#43506b;flex:none}
.tnode.grp .tico{background:var(--pri2);color:#3157c8}
.tmain{min-width:0;flex:1;text-decoration:none;color:inherit}
.tmain .tt{display:flex;gap:6px;align-items:center;flex-wrap:wrap;font-weight:600}
.tmain .ts{display:flex;gap:6px;align-items:center;flex-wrap:wrap;font-size:11.5px;color:var(--muted);margin-top:1px}
.tmain .ts code{font-size:11px}
.chips{display:flex;gap:4px;flex-wrap:wrap}
.chip{font-size:11px;border-radius:99px;padding:0 8px;background:#f1f4f9;color:#475370;white-space:nowrap}
.chip.all{background:var(--oks);color:var(--ok)}.chip.none{background:var(--nos);color:var(--no)}
.b-new{background:#f3ecff;color:#7a3fd1}
.tacts{display:flex;gap:2px;opacity:.35;transition:opacity .15s}.tnode:hover .tacts,.tnode.sel .tacts{opacity:1}
.tacts form{display:inline}
.ibtn{width:28px;height:28px;border:1px solid transparent;border-radius:8px;background:none;display:grid;place-items:center;cursor:pointer;color:#55627d}
.ibtn:hover{background:#f1f4f9;border-color:var(--line)}.ibtn .ic{width:16px;height:16px}
.tkids{margin-inline-start:22px;padding-inline-start:12px;border-inline-start:2px dashed #dfe4ee}
.empty{text-align:center;color:var(--muted);padding:26px 10px}
.empty .ic{width:34px;height:34px;color:#b3bdd0}
.prow{display:flex;gap:10px;align-items:center;padding:8px 4px;border-bottom:1px solid #eef1f6}
.prow:last-child{border-bottom:0}
.prow .pt{flex:1;min-width:0}.prow .pt b{font-weight:600}.prow .pt div{font-size:11.5px;color:var(--muted)}
/* editor */
.ed{position:sticky;top:64px}
.sec{padding:14px 16px;border-bottom:1px solid var(--line)}.sec:last-child{border-bottom:0}
.sec h3{font-size:13px;margin:0 0 10px;color:#33405e;display:flex;gap:6px;align-items:center}
.sec h3 .n{width:20px;height:20px;border-radius:6px;background:var(--pri2);color:#3157c8;display:grid;place-items:center;font-size:11px}
.two{display:grid;grid-template-columns:1fr 150px;gap:10px}
.types{display:grid;grid-template-columns:repeat(4,1fr);gap:8px}
.types label{border:1px solid var(--line);border-radius:12px;padding:9px 6px;text-align:center;cursor:pointer;font-size:12px;color:#4b5873;display:flex;flex-direction:column;align-items:center;gap:4px;transition:all .15s}
.types input{display:none}
.types label:has(input:checked){border-color:var(--pri);background:var(--pri2);color:#2443a8;font-weight:600}
.types .ic{width:20px;height:20px}
.tg[hidden]{display:none!important}
.drop{border:1.5px dashed #cfd7e6;border-radius:12px;padding:12px;background:#fafbfe;font-size:12.5px}
.roles{display:grid;grid-template-columns:1fr 1fr;gap:8px}
.rl{display:flex;gap:8px;align-items:center;border:1px solid var(--line);border-radius:11px;padding:8px 10px;cursor:pointer;transition:all .15s}
.rl:has(input:checked){border-color:#9fd5bd;background:#f2fbf6}
.rl:has(input:disabled){cursor:not-allowed;opacity:.85}
.rl input{accent-color:var(--ok);width:16px;height:16px}
.rl small{display:block;color:var(--muted);font-size:11px;line-height:1.5}
.mode{border-radius:11px;padding:8px 11px;font-size:12px;margin-bottom:10px;display:flex;gap:8px}
.mode .ic{width:16px;height:16px;flex:none;margin-top:3px}
.mode.grant{background:var(--oks);color:#0d6b4c}.mode.filter{background:var(--pri2);color:#2b4597}.mode.lock{background:var(--warns);color:var(--warn)}
.summary{font-size:12px;color:var(--muted);margin-top:8px}
.switch{display:flex;gap:10px;align-items:center;cursor:pointer}
.switch input{display:none}
.switch i{width:40px;height:22px;border-radius:99px;background:#cfd6e3;position:relative;transition:background .15s;flex:none}
.switch i::after{content:"";position:absolute;top:3px;right:3px;width:16px;height:16px;border-radius:50%;background:#fff;transition:right .15s;box-shadow:0 1px 2px rgba(0,0,0,.2)}
.switch input:checked+i{background:var(--ok)}.switch input:checked+i::after{right:21px}
.edfoot{display:flex;gap:8px;align-items:center;padding:12px 16px;background:#fafbfd;border-top:1px solid var(--line)}
.edfoot .btn.pri{padding:7px 22px;font-weight:700}
details.adv summary{cursor:pointer;color:var(--muted);font-size:12.5px}
.trash-row{display:flex;gap:8px;align-items:center;font-size:12.5px;padding:5px 0}
@media (max-width:1100px){.mb{grid-template-columns:1fr}.ed{position:static}.kpis{grid-template-columns:1fr 1fr}}
@media (max-width:560px){.types{grid-template-columns:1fr 1fr}.roles{grid-template-columns:1fr}.two{grid-template-columns:1fr}}
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<?php
    $roleTitles = $roles->pluck('title', 'id');
    $typeLabels = ['page' => 'صفحه', 'html' => 'HTML', 'group' => 'گروه', 'external' => 'لینک'];
?>

<div class="mb-head">
    <div>
        <h1>مدیریت منوها</h1>
        <p>صفحه را انتخاب کنید، نقش‌ها را تیک بزنید، فعال کنید؛ دسترسی خودکار تنظیم می‌شود.</p>
    </div>
    <nav class="seg">
        <a class="<?php echo e($panel === 'platform' ? 'on' : ''); ?>" href="<?php echo e(route('sazeh.platform.menus', ['panel' => 'platform'])); ?>"><?php echo \Sazeh\Core\Support\Icons::svg('shield'); ?> <?php echo e(config('sazeh.panels.platform.title', 'پنل مالک سایت')); ?></a>
        <a class="<?php echo e($panel === 'workspace' ? 'on' : ''); ?>" href="<?php echo e(route('sazeh.platform.menus', ['panel' => 'workspace'])); ?>"><?php echo \Sazeh\Core\Support\Icons::svg('globe'); ?> <?php echo e(config('sazeh.panels.workspace.title', 'پنل خریدار اشتراک')); ?></a>
    </nav>
</div>

<div class="kpis">
    <div class="kpi k1"><span class="ico"><?php echo \Sazeh\Core\Support\Icons::svg('menu'); ?></span><div><b><?php echo e($stats['total']); ?></b><span>آیتم منو</span></div></div>
    <div class="kpi k2"><span class="ico"><?php echo \Sazeh\Core\Support\Icons::svg('check'); ?></span><div><b><?php echo e($stats['active']); ?></b><span>فعال</span></div></div>
    <div class="kpi k3"><span class="ico"><?php echo \Sazeh\Core\Support\Icons::svg('spark'); ?></span><div><b><?php echo e($stats['new']); ?></b><span>صفحهٔ جدید (منتظر فعال‌سازی)</span></div></div>
    <div class="kpi k4"><span class="ico"><?php echo \Sazeh\Core\Support\Icons::svg('alert'); ?></span><div><b><?php echo e($stats['broken']); ?></b><span>نیاز به بررسی</span></div></div>
</div>

<div class="mb">
<div>
    
    <div class="panel-card">
        <div class="ph">
            <div><h2>درخت منو</h2><p>حداکثر ۳ سطح · فقط «گروه» زیرمنو دارد</p></div>
            <div class="sp">
                <form method="post" action="<?php echo e(route('sazeh.platform.menus.store')); ?>"><?php echo csrf_field(); ?><input type="hidden" name="panel" value="<?php echo e($panel); ?>"><button class="btn pri sm"><?php echo \Sazeh\Core\Support\Icons::svg('plus'); ?> آیتم</button></form>
                <form method="post" action="<?php echo e(route('sazeh.platform.menus.store')); ?>"><?php echo csrf_field(); ?><input type="hidden" name="panel" value="<?php echo e($panel); ?>"><input type="hidden" name="type" value="group"><button class="btn sm"><?php echo \Sazeh\Core\Support\Icons::svg('folder'); ?> گروه</button></form>
            </div>
        </div>
        <div class="pb">
            <?php if($tree): ?>
                <?php echo $__env->make('sazeh::platform.partials.menu-node', ['nodes' => $tree], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php else: ?>
                <div class="empty"><?php echo \Sazeh\Core\Support\Icons::svg('menu'); ?><div>هنوز آیتمی نیست؛ از «صفحه‌های بدون منو» یکی اضافه کنید.</div></div>
            <?php endif; ?>
        </div>
    </div>

    
    <div class="panel-card">
        <div class="ph">
            <div><h2>صفحه‌های بدون منو</h2><p>صفحه‌های ثبت‌شده‌ای که هنوز در این منو نیستند. صفحه‌های فایلی بدون منو برای هیچ‌کس باز نمی‌شوند.</p></div>
        </div>
        <div class="pb">
            <?php $__empty_1 = true; $__currentLoopData = $unlinked; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="prow">
                    <span class="tico" style="width:30px;height:30px;border-radius:9px;display:grid;place-items:center;background:#f2f5fa"><?php echo \Sazeh\Core\Support\Icons::svg($p['module'] === 'pages' ? 'file' : 'box'); ?></span>
                    <div class="pt"><b><?php echo e($p['title']); ?></b>
                        <div><code><?php echo e($p['url']); ?></code> · <?php echo e($modules[$p['module']] ?? $p['module']); ?>

                            <?php if($p['permission']): ?> · <span class="chip"><?php echo e($p['permission']); ?></span><?php else: ?> · <span class="chip all">بدون مجوز</span><?php endif; ?>
                        </div></div>
                    <form method="post" action="<?php echo e(route('sazeh.platform.menus.store')); ?>"><?php echo csrf_field(); ?>
                        <input type="hidden" name="panel" value="<?php echo e($panel); ?>"><input type="hidden" name="route" value="<?php echo e($p['route']); ?>">
                        <button class="btn sm"><?php echo \Sazeh\Core\Support\Icons::svg('plus'); ?> افزودن به منو</button></form>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="empty" style="padding:14px"><?php echo \Sazeh\Core\Support\Icons::svg('check'); ?><div>همهٔ صفحه‌ها در منو هستند.</div></div>
            <?php endif; ?>
        </div>
    </div>

    <?php if($trashed->isNotEmpty()): ?>
    <div class="panel-card">
        <div class="ph"><div><h2>حذف‌شده‌ها</h2><p>قابل بازیابی همراه با زیرمنوها</p></div></div>
        <div class="pb">
            <?php $__currentLoopData = $trashed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form method="post" action="<?php echo e(route('sazeh.platform.menus.restore', $t->id)); ?>" class="trash-row"><?php echo csrf_field(); ?>
                    <?php echo \Sazeh\Core\Support\Icons::svg($t->icon); ?> <span><?php echo e($t->title); ?></span><span class="muted small"><?php echo e(\Sazeh\Core\Support\Jalali::format($t->deleted_at)); ?></span>
                    <button class="btn sm" style="margin-inline-start:auto"><?php echo \Sazeh\Core\Support\Icons::svg('refresh'); ?> بازیابی</button></form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <?php endif; ?>
</div>


<div class="ed">
<?php if($selected): ?>
    <?php
        $selMeta = $meta[$selected->id] ?? ['badges' => [], 'audience' => null, 'page' => null];
        $pivot = $selected->roles->pluck('id')->all();
    ?>
    <div class="panel-card">
        <div class="ph">
            <span class="tico" style="width:36px;height:36px;border-radius:10px;display:grid;place-items:center;background:var(--pri2);color:#3157c8"><?php echo \Sazeh\Core\Support\Icons::svg($selected->icon); ?></span>
            <div><h2><?php echo e($selected->title); ?></h2><p><?php echo e($selected->is_system ? 'آیتم سیستمی — فقط عنوان و آیکون قابل تغییر است' : 'تغییرات بلافاصله در منوی کاربران اعمال می‌شود'); ?></p></div>
            <div class="sp">
                <?php if(in_array('missing', $selMeta['badges'], true)): ?><span class="b b-no">فایل موجود نیست</span><?php endif; ?>
                <?php if(in_array('new', $selMeta['badges'], true)): ?><span class="b b-new">جدید</span><?php endif; ?>
            </div>
        </div>

        <form method="post" action="<?php echo e(route('sazeh.platform.menus.update', $selected)); ?>" enctype="multipart/form-data" id="ed-form"><?php echo csrf_field(); ?> <?php echo method_field('put'); ?>
            <div class="sec">
                <h3><span class="n">۱</span>مشخصات</h3>
                <div class="two">
                    <label class="f"><span>عنوان در منو</span><input type="text" name="title" value="<?php echo e(old('title', $selected->title)); ?>" maxlength="80" required></label>
                    <label class="f"><span>آیکون</span><select name="icon"><?php $__currentLoopData = config('sazeh.menu_icons'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($ic); ?>" <?php if($selected->icon === $ic): echo 'selected'; endif; ?>><?php echo e($ic); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select></label>
                </div>
            </div>

            <?php if (! ($selected->is_system)): ?>
            <div class="sec">
                <h3><span class="n">۲</span>مقصد</h3>
                <div class="types">
                    <?php $__currentLoopData = ['page' => ['file', 'صفحه'], 'html' => ['edit', 'فایل HTML'], 'group' => ['folder', 'گروه'], 'external' => ['external', 'لینک خارجی']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => [$ic, $lb]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label><input type="radio" name="type" value="<?php echo e($k); ?>" <?php if(old('type', $selected->type) === $k): echo 'checked'; endif; ?>><?php echo \Sazeh\Core\Support\Icons::svg($ic); ?><?php echo e($lb); ?></label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div style="margin-top:12px">
                    <label class="f tg" data-for="page"><span>کدام صفحه؟</span>
                        <select name="route" id="ed-route">
                            <option value="" data-perm="">— انتخاب صفحه —</option>
                            <?php $__currentLoopData = $pagesByModule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mk => $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <optgroup label="<?php echo e($modules[$mk] ?? $mk); ?>">
                                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($p['route']); ?>" data-perm="<?php echo e($p['permission']); ?>" <?php if(old('route', $selected->route) === $p['route']): echo 'selected'; endif; ?>><?php echo e($p['title']); ?> — <?php echo e($p['url']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </optgroup>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </label>
                    <?php if($selected->type === 'page' && $selected->route && ! $pages->has($selected->route)): ?>
                        <div class="alert no tg" data-for="page">مقصد فعلی <code><?php echo e($selected->route); ?></code> دیگر وجود ندارد (فایل یا ماژولش حذف شده). صفحهٔ دیگری انتخاب کنید یا آیتم را حذف کنید.</div>
                    <?php endif; ?>
                    <div class="drop tg" data-for="html">
                        <?php if($selected->htmlPage): ?>
                            <div style="margin-bottom:6px">فایل فعلی: <code><?php echo e($selected->htmlPage->original_name); ?></code> (<?php echo e(number_format($selected->htmlPage->size / 1024, 1)); ?> KB)
                                <?php if($selected->is_active): ?> · <a href="<?php echo e(route('sazeh.'.$selected->panel.'.html', $selected->id)); ?>" target="_blank">پیش‌نمایش</a><?php endif; ?></div>
                        <?php endif; ?>
                        <input type="file" name="html_file" accept=".html,.htm,text/html">
                        <div class="muted small" style="margin-top:4px">حداکثر ۲ مگابایت؛ در قاب ایزوله نمایش داده می‌شود و هیچ کدی روی سرور اجرا نمی‌کند.</div>
                    </div>
                    <label class="f tg" data-for="external"><span>آدرس (فقط https و دامنه‌های مجاز)</span><input type="text" name="url" value="<?php echo e(old('url', $selected->url)); ?>" dir="ltr" placeholder="https://"></label>
                    <p class="muted small tg" data-for="group" style="margin:0">گروه فقط زیرمنوها را دسته‌بندی می‌کند؛ آیتم‌ها را با دکمهٔ ⇠ زیر آن ببرید. گروه بدون زیرمنوی قابل‌نمایش دیده نمی‌شود.</p>
                </div>
            </div>

            <div class="sec tg" data-for="page html external">
                <h3><span class="n">۳</span>چه نقش‌هایی دسترسی دارند؟</h3>
                <div class="mode" id="ed-mode"></div>
                <input type="hidden" name="access_present" value="1">
                <div class="roles">
                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label class="rl" data-role="<?php echo e($r->id); ?>" data-all="<?php echo e($r->grants_all ? 1 : 0); ?>">
                            <input type="checkbox" name="access[]" value="<?php echo e($r->id); ?>">
                            <span><?php echo e($r->title); ?><small><?php echo e($r->grants_all ? 'همهٔ دسترسی‌ها (همیشه)' : ($r->is_system ? 'نقش سیستمی' : 'نقش')); ?></small></span>
                        </label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="summary" id="ed-summary"></div>
                <details class="adv" style="margin-top:12px">
                    <summary>تنظیمات پیشرفته</summary>
                    <label class="f" style="margin-top:8px"><span>مجوز اضافه (علاوه بر مجوز خود صفحه)</span>
                        <select name="permission"><option value="">— ندارد —</option><?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($key); ?>" <?php if($selected->permission === $key): echo 'selected'; endif; ?>><?php echo e($p['label']); ?> (<?php echo e($key); ?>)</option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select></label>
                </details>
            </div>
            <?php else: ?>
                <input type="hidden" name="type" value="<?php echo e($selected->type); ?>">
            <?php endif; ?>

            <div class="edfoot">
                <?php if (! ($selected->is_system)): ?>
                    <label class="switch"><input type="hidden" name="is_active" value="0"><input type="checkbox" name="is_active" value="1" <?php if($selected->is_active): echo 'checked'; endif; ?>><i></i><span>فعال در منو</span></label>
                <?php endif; ?>
                <span style="margin-inline-start:auto"></span>
                <button class="btn pri"><?php echo \Sazeh\Core\Support\Icons::svg('check'); ?> ذخیره</button>
            </div>
        </form>
    </div>
    <?php if (! ($selected->is_system)): ?>
        <form method="post" action="<?php echo e(route('sazeh.platform.menus.destroy', $selected)); ?>" onsubmit="return confirm('این آیتم و زیرمنوهایش حذف شوند؟ (قابل بازیابی)')" style="text-align:center"><?php echo csrf_field(); ?> <?php echo method_field('delete'); ?>
            <button class="btn dng sm"><?php echo \Sazeh\Core\Support\Icons::svg('trash'); ?> حذف این آیتم</button></form>
    <?php endif; ?>

    <?php if (! ($selected->is_system)): ?>
    <?php $__env->startPush('scripts'); ?>
    <script>
    (() => {
        const rolePerms = <?php echo json_encode($rolePerms, 15, 512) ?>;
        const canGrant = <?php echo json_encode($canGrant, 15, 512) ?>;
        const pivot = <?php echo json_encode($pivot, 15, 512) ?>.map(Number);
        const savedRoute = <?php echo json_encode($selected->route, 15, 512) ?>;
        const form = document.getElementById('ed-form');
        const routeSel = document.getElementById('ed-route');
        const modeBox = document.getElementById('ed-mode');
        const summary = document.getElementById('ed-summary');
        const labels = [...form.querySelectorAll('.rl')];
        const ico = (n) => ({grant: '✓', filter: 'ⓘ', lock: '!'}[n]);

        const type = () => form.querySelector('input[name=type]:checked')?.value;
        const perm = () => type() === 'page' ? (routeSel.selectedOptions[0]?.dataset.perm || '') : '';

        function setChecks(initial) {
            const p = perm();
            const grant = p && canGrant;
            labels.forEach(l => {
                const id = Number(l.dataset.role), all = l.dataset.all === '1', cb = l.querySelector('input');
                if (grant) {
                    const has = rolePerms[id] === true || (Array.isArray(rolePerms[id]) && rolePerms[id].includes(p));
                    cb.disabled = all; cb.checked = all || has;
                } else {
                    cb.disabled = false;
                    if (initial) cb.checked = pivot.includes(id);
                }
            });
        }

        function render() {
            const t = type(), p = perm();
            form.querySelectorAll('.tg').forEach(el => el.hidden = !el.dataset.for.split(' ').includes(t));
            let cls, text;
            if (t === 'page' && !routeSel.value) { cls = 'filter'; text = 'ابتدا صفحه را انتخاب کنید.'; }
            else if (p && canGrant) { cls = 'grant'; text = 'تیک = دسترسی. با ذخیره، مجوز «' + p + '» به نقش‌های تیک‌خورده داده و از بقیه گرفته می‌شود.'; }
            else if (p) { cls = 'lock'; text = 'برای دادن دسترسی مجوز «مدیریت نقش‌ها» لازم است؛ تیک‌ها فقط نمایش را محدود می‌کنند.'; }
            else { cls = 'filter'; text = 'این مقصد مجوز جدا ندارد؛ تیک‌ها فقط تعیین می‌کنند چه نقش‌هایی آن را ببینند. هیچ تیک = همهٔ نقش‌ها.'; }
            modeBox.className = 'mode ' + cls;
            modeBox.innerHTML = '<b>' + ico(cls) + '</b><span>' + text + '</span>';
            const on = labels.filter(l => l.querySelector('input').checked).map(l => l.querySelector('span').firstChild.textContent.trim());
            summary.textContent = on.length ? 'می‌بینند: ' + on.join('، ') : (p && canGrant ? 'هیچ نقشی دسترسی ندارد.' : 'همهٔ نقش‌های این پنل می‌بینند.');
        }

        form.addEventListener('change', (e) => {
            if (e.target === routeSel || e.target.name === 'type') setChecks(false);
            render();
        });
        setChecks(true);
        render();
    })();
    </script>
    <?php $__env->stopPush(); ?>
    <?php endif; ?>
<?php else: ?>
    <div class="panel-card">
        <div class="empty" style="padding:40px 20px"><?php echo \Sazeh\Core\Support\Icons::svg('edit'); ?>
            <div style="font-weight:600;color:var(--ink);margin-top:6px">یک آیتم را انتخاب کنید</div>
            <div class="small">از درخت منو روی عنوان کلیک کنید، یا از «صفحه‌های بدون منو» صفحه‌ای را اضافه کنید.</div>
        </div>
    </div>
    <div class="panel-card"><div class="pb small" style="line-height:2.1">
        <b>سه قدم برای افزودن صفحه:</b>
        <ol style="margin:4px 0 0;padding-inline-start:18px">
            <li>صفحه را در «صفحه‌های بدون منو» پیدا کنید و «افزودن به منو» را بزنید.</li>
            <li>نقش‌هایی را که باید ببینند تیک بزنید.</li>
            <li>«فعال در منو» را روشن و ذخیره کنید.</li>
        </ol>
    </div></div>
<?php endif; ?>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sazeh::layouts.dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\lara\la-saas\resources\views/vendor/sazeh/platform/menus.blade.php ENDPATH**/ ?>