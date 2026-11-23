<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($item['type'] === 'group'): ?>
        <details class="mg" open>
            <summary><?php echo \Sazeh\Core\Support\Icons::svg($item['icon']); ?> <span><?php echo e($item['title']); ?></span></summary>
            <div class="sub"><?php echo $__env->make('sazeh::partials.menu', ['items' => $item['children']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?></div>
        </details>
    <?php elseif($item['type'] === 'html'): ?>
        <?php ($hr = 'sazeh.'.($item['panel'] ?? 'workspace').'.html'); ?>
        <a class="mi <?php echo e(request()->routeIs($hr) && (int) request()->route('item') === $item['id'] ? 'on' : ''); ?>" href="<?php echo e(route($hr, $item['id'])); ?>"><?php echo \Sazeh\Core\Support\Icons::svg($item['icon']); ?> <span><?php echo e($item['title']); ?></span></a>
    <?php elseif($item['type'] === 'external'): ?>
        <a class="mi" href="<?php echo e($item['url']); ?>" target="_blank" rel="noopener noreferrer"><?php echo \Sazeh\Core\Support\Icons::svg($item['icon']); ?> <span><?php echo e($item['title']); ?></span> <?php echo \Sazeh\Core\Support\Icons::svg('external'); ?></a>
    <?php else: ?>
        <?php ($active = request()->routeIs($item['route']) || request()->routeIs($item['route'].'.*')); ?>
        <a class="mi <?php echo e($active ? 'on' : ''); ?>" href="<?php echo e(route($item['route'])); ?>"><?php echo \Sazeh\Core\Support\Icons::svg($item['icon']); ?> <span><?php echo e($item['title']); ?></span></a>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\lara\la-saas\resources\views/vendor/sazeh/partials/menu.blade.php ENDPATH**/ ?>