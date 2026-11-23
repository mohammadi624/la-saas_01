<?php $__env->startSection('title', 'انتخاب بخش'); ?>
<?php $__env->startSection('content'); ?>
<h1>به کدام بخش وارد می‌شوید؟</h1>
<p class="desc"><?php echo e(auth()->user()->name); ?>، شما به چند بخش دسترسی دارید.</p>
<?php echo $__env->make('sazeh::partials.flash', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<form method="post" action="<?php echo e(route('sazeh.context.select')); ?>"><?php echo csrf_field(); ?>
<?php $__currentLoopData = $contexts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <button class="ctx" name="context" value="<?php echo e($c['key']); ?>" <?php if(! $c['ok']): echo 'disabled'; endif; ?>>
        <span class="logo" style="width:38px;height:38px;border-radius:10px;display:grid;place-items:center;background:#eef2ff;color:#3157c8"><?php echo \Sazeh\Core\Support\Icons::svg($c['panel'] === 'workspace' ? 'globe' : 'shield'); ?></span>
        <span style="flex:1"><b><?php echo e($c['title']); ?></b><span class="small muted" style="display:block"><?php echo e($c['role']->title); ?><?php echo e($c['ok'] ? '' : ' — '.$c['why']); ?></span></span>
    </button>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</form>
<form method="post" action="<?php echo e(route('sazeh.logout')); ?>" style="text-align:center;margin-top:10px"><?php echo csrf_field(); ?><button class="btn sm">خروج</button></form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sazeh::layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\lara\la-saas\resources\views/vendor/sazeh/auth/pick.blade.php ENDPATH**/ ?>