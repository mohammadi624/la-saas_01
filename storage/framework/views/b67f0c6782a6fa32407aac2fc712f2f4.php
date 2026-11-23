<?php $__env->startSection('title', 'ورود'); ?>
<?php $__env->startSection('content'); ?>
<?php ($tab = request('tab') === 'otp' && config('sazeh.login.otp') ? 'otp' : 'password'); ?>
<h1>ورود به داشبورد</h1>
<p class="desc">یک صفحهٔ ورود برای همهٔ کاربران؛ هر کس به صفحهٔ نقش خودش می‌رود.</p>
<?php if(config('sazeh.login.otp')): ?>
<div class="tabs"><a href="<?php echo e(route('sazeh.login')); ?>" class="<?php echo e($tab === 'password' ? 'on' : ''); ?>">رمز عبور</a><a href="<?php echo e(route('sazeh.login', ['tab' => 'otp'])); ?>" class="<?php echo e($tab === 'otp' ? 'on' : ''); ?>">کد پیامکی</a></div>
<?php endif; ?>
<?php echo $__env->make('sazeh::partials.flash', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php if($tab === 'password'): ?>
<form method="post" action="<?php echo e(route('sazeh.login.password')); ?>"><?php echo csrf_field(); ?>
    <label class="f"><span>ایمیل، موبایل یا نام کاربری</span><input type="text" name="identifier" value="<?php echo e(old('identifier')); ?>" autocomplete="username" dir="auto" required autofocus></label>
    <label class="f"><span>رمز عبور</span><input type="password" name="password" autocomplete="current-password" dir="ltr" required></label>
    <label class="row small" style="margin-bottom:10px"><input type="checkbox" name="remember" value="1"> مرا به خاطر بسپار</label>
    <button class="btn pri">ورود</button>
</form>
<?php else: ?>
<form method="post" action="<?php echo e(route('sazeh.login.otp')); ?>"><?php echo csrf_field(); ?>
    <label class="f"><span>شمارهٔ موبایل</span><input type="tel" name="mobile" value="<?php echo e(old('mobile')); ?>" dir="ltr" inputmode="tel" placeholder="09xxxxxxxxx" required autofocus></label>
    <button class="btn pri">ارسال کد</button>
</form>
<?php endif; ?>
<?php if(config('sazeh.registration.mode') === 'public'): ?>
<p class="small muted" style="text-align:center;margin:14px 0 0">حساب ندارید؟ <a href="<?php echo e(route('sazeh.register')); ?>">ثبت‌نام</a></p>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sazeh::layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\lara\la-saas\resources\views/vendor/sazeh/auth/login.blade.php ENDPATH**/ ?>