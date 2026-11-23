<div class="card"><h2>چرا این صفحه پس از ورود باز شد؟</h2><p class="desc">ترتیب انتخاب صفحهٔ شروع بر اساس نقش شما:</p>
<ol class="trace" style="margin:0;padding-right:18px">
<?php $__currentLoopData = $trace; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="<?php echo e($t['status']); ?>"><b><?php echo e($t['label']); ?></b><?php if($t['target']): ?> <code><?php echo e($t['target']); ?></code><?php endif; ?> — <?php echo e($t['message']); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol></div>
<?php /**PATH D:\lara\la-saas\resources\views/vendor/sazeh/partials/trace.blade.php ENDPATH**/ ?>