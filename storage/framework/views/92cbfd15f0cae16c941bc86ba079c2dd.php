<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $__env->yieldContent('title', 'ورود'); ?> — <?php echo e(config('app.name')); ?></title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css">
<?php echo $__env->make('sazeh::partials.styles', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>
<body>
<div class="auth"><div class="auth-card">
    <div class="brand" style="justify-content:center;border:0;color:var(--ink)"><span class="logo" style="color:#fff"><?php echo \Sazeh\Core\Support\Icons::svg('shield'); ?></span></div>
    <?php echo $__env->yieldContent('content'); ?>
</div></div>
</body>
</html>
<?php /**PATH D:\lara\la-saas\resources\views/vendor/sazeh/layouts/auth.blade.php ENDPATH**/ ?>