<?php $__env->startSection('heading', 'داشبورد مدیریت'); ?>
<?php $__env->startSection('content'); ?>
<div class="grid g4" style="margin-bottom:16px">
<?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><div class="stat"><b><?php echo e(is_numeric($value) ? number_format($value) : $value); ?></b><span><?php echo e($label); ?></span></div><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="grid g2">
    <div class="card"><h2>خوش آمدید</h2><p class="desc">این داشبورد پایه است. ماژول‌های پروژه ابزارک‌ها و صفحه‌های خودشان را اضافه می‌کنند.</p>
        <ul style="margin:0;padding-right:18px"><li>منوی کناری فقط آیتم‌های نقش شما را نشان می‌دهد.</li><li>منوها از «تنظیمات سیستم › مدیریت منوها» قابل ویرایش‌اند.</li><li>صفحهٔ شروع هر نقش از «نقش‌ها و دسترسی‌ها» تنظیم می‌شود.</li></ul></div>
    <?php echo $__env->make('sazeh::partials.trace', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sazeh::layouts.dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\lara\la-saas\resources\views/vendor/sazeh/dashboard/platform.blade.php ENDPATH**/ ?>