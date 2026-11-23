<div class="grid g2" style="gap:10px">
    <label class="f"><span>نام و نام خانوادگی</span><input type="text" name="name" value="<?php echo e(old('name')); ?>" maxlength="100"></label>
    <label class="f"><span>موبایل (شناسهٔ ورود)</span><input type="tel" name="mobile" value="<?php echo e(old('mobile')); ?>" dir="ltr" required placeholder="09xxxxxxxxx"></label>
    <label class="f"><span>ایمیل (اختیاری)</span><input type="email" name="email" value="<?php echo e(old('email')); ?>" dir="ltr"></label>
    <label class="f"><span>رمز اولیه (حداقل <?php echo e(config('sazeh.password_min')); ?> نویسه)</span><input type="text" name="password" dir="ltr" autocomplete="off"></label>
</div>
<p class="small muted" style="margin:0 0 10px">اگر این موبایل یا ایمیل قبلاً حساب داشته باشد، حساب تکراری ساخته نمی‌شود و همان شخص اضافه می‌شود (نام و رمز نادیده گرفته می‌شود).</p>
<?php /**PATH D:\lara\la-saas\resources\views/vendor/sazeh/partials/identity-fields.blade.php ENDPATH**/ ?>