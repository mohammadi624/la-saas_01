<?php
    $panel = $sazehCtx->panel();
    $pcfg = config('sazeh.panels.'.$panel, []);
    $ws = $sazehCtx->workspace();
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<title><?php echo $__env->yieldContent('title', 'داشبورد'); ?> — <?php echo e(config('app.name')); ?></title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css">
<?php echo $__env->make('sazeh::partials.styles', ['color' => $pcfg['color'] ?? null, 'sidebar' => $pcfg['sidebar'] ?? null], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->yieldPushContent('head'); ?>
</head>
<body>
<div class="app">
    <aside class="side" id="side">
        <div class="brand"><span class="logo"><?php echo \Sazeh\Core\Support\Icons::svg($panel === 'workspace' ? 'globe' : 'shield'); ?></span>
            <div><?php echo e($ws?->name ?? ($pcfg['title'] ?? config('app.name'))); ?><small><?php echo e(auth()->user()->name); ?> · <?php echo e($sazehCtx->role()?->title); ?></small>
                <?php if($ws && ! $sazehCtx->isWorkspaceOwner()): ?><small>زیرمجموعهٔ <?php echo e($pcfg['owner_label'] ?? 'مالک'); ?>: <?php echo e($ws->owner?->name); ?></small><?php endif; ?>
            </div></div>
        <?php if($sazehMenu): ?>
            <?php echo $__env->make('sazeh::partials.menu', ['items' => $sazehMenu], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php else: ?>
            <p class="small" style="color:#f3b8bb;padding:8px">هیچ آیتم منویی برای شما فعال نیست.</p>
        <?php endif; ?>
    </aside>
    <div class="main">
        <div class="top">
            <button class="btn hamb" type="button" onclick="document.getElementById('side').classList.toggle('open')" aria-label="منو"><?php echo \Sazeh\Core\Support\Icons::svg('menu'); ?></button>
            <span class="sp"></span>
            <?php if($sazehContexts->count() > 1): ?>
                <form method="post" action="<?php echo e(route('sazeh.context.select')); ?>" class="row"><?php echo csrf_field(); ?>
                    <span class="small muted">بخش:</span>
                    <select name="context" onchange="this.form.submit()">
                        <?php $__currentLoopData = $sazehContexts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($c['key']); ?>" <?php if($c['key'] === $sazehCtx->key()): echo 'selected'; endif; ?>><?php echo e($c['title']); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </form>
            <?php endif; ?>
            <span class="btn sm" style="cursor:default"><?php echo \Sazeh\Core\Support\Icons::svg('users'); ?> <?php echo e(auth()->user()->name); ?></span>
            <form method="post" action="<?php echo e(route('sazeh.logout')); ?>"><?php echo csrf_field(); ?><button class="btn sm"><?php echo \Sazeh\Core\Support\Icons::svg('logout'); ?> خروج</button></form>
        </div>
        <div class="content">
            <?php if($ws && $ws->status !== 'active'): ?>
                <div class="alert <?php echo e($ws->status === 'suspended' ? 'no' : 'warn'); ?>">
                    <?php echo e(['grace' => 'مهلت پرداخت: اشتراک به‌زودی منقضی می‌شود.', 'read_only' => 'حالت فقط‌خواندنی: مشاهده آزاد است ولی ثبت و ویرایش ممکن نیست.', 'suspended' => 'اشتراک این فضا معلق است؛ فقط صفحات پرداخت باز است.'][$ws->status] ?? ''); ?>

                </div>
            <?php endif; ?>
            <?php if (! empty(trim($__env->yieldContent('heading')))): ?><div class="page-hd"><h1><?php echo $__env->yieldContent('heading'); ?></h1></div><?php endif; ?>
            <?php echo $__env->make('sazeh::partials.flash', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</div>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH D:\lara\la-saas\resources\views/vendor/sazeh/layouts/dashboard.blade.php ENDPATH**/ ?>