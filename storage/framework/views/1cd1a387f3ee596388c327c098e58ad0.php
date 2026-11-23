<?php $__currentLoopData = $nodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $m = $n['model'];
        $x = $meta[$m->id] ?? ['badges' => [], 'audience' => null, 'page' => null];
        $aud = $x['audience'];
        $totalRoles = count($roleTitles);
    ?>
    <div>
        <div class="tnode <?php echo e($selected?->id == $m->id ? 'sel' : ''); ?> <?php echo e($m->is_active ? '' : 'off'); ?> <?php echo e($m->type === 'group' ? 'grp' : ''); ?>">
            <span class="tico"><?php echo \Sazeh\Core\Support\Icons::svg($m->icon); ?></span>
            <a class="tmain" href="<?php echo e(route('sazeh.platform.menus', ['panel' => $panel, 'item' => $m->id])); ?>">
                <div class="tt">
                    <?php echo e($m->title); ?>

                    <?php if(in_array('new', $x['badges'], true)): ?><span class="b b-new">جدید</span><?php endif; ?>
                    <?php if(in_array('missing', $x['badges'], true)): ?><span class="b b-no">فایل موجود نیست</span><?php endif; ?>
                    <?php if(in_array('no_target', $x['badges'], true)): ?><span class="b b-warn">بدون مقصد</span><?php endif; ?>
                    <?php if (! ($m->is_active)): ?><span class="b b-mut">غیرفعال</span><?php endif; ?>
                    <?php if($m->is_system): ?><span class="b b-pri">سیستمی</span><?php endif; ?>
                </div>
                <div class="ts">
                    <span><?php echo e($typeLabels[$m->type] ?? $m->type); ?></span>
                    <?php if($m->type === 'page' && $m->route): ?>
                        · <code><?php echo e($x['page'] && \Illuminate\Support\Facades\Route::has($m->route) ? route($m->route, [], false) : $m->route); ?></code>
                    <?php elseif($m->type === 'external'): ?>
                        · <code><?php echo e($m->url); ?></code>
                    <?php elseif($m->type === 'html'): ?>
                        · <code><?php echo e($m->htmlPage?->original_name ?? '—'); ?></code>
                    <?php endif; ?>
                    <?php if($aud !== null): ?>
                        · <span class="chips">
                            <?php if($aud === []): ?><span class="chip none">هیچ نقشی</span>
                            <?php elseif(count($aud) === $totalRoles): ?><span class="chip all">همهٔ نقش‌ها</span>
                            <?php else: ?>
                                <?php $__currentLoopData = array_slice($aud, 0, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><span class="chip"><?php echo e($roleTitles[$rid] ?? '#'.$rid); ?></span><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php if(count($aud) > 3): ?><span class="chip">+<?php echo e(\Sazeh\Core\Support\Jalali::digits(count($aud) - 3)); ?></span><?php endif; ?>
                            <?php endif; ?>
                        </span>
                    <?php endif; ?>
                </div>
            </a>
            <span class="tacts">
                <?php if (! ($m->is_system)): ?>
                <form method="post" action="<?php echo e(route('sazeh.platform.menus.toggle', $m)); ?>"><?php echo csrf_field(); ?><button class="ibtn" title="<?php echo e($m->is_active ? 'غیرفعال کن' : 'فعال کن'); ?>"><?php echo \Sazeh\Core\Support\Icons::svg($m->is_active ? 'pause' : 'play'); ?></button></form>
                <?php endif; ?>
                <?php $__currentLoopData = ['up' => ['up', 'بالا'], 'down' => ['down', 'پایین'], 'in' => ['indent', 'زیرمجموعهٔ گروه قبلی'], 'out' => ['outdent', 'یک سطح بیرون']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dir => [$ic, $tip]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form method="post" action="<?php echo e(route('sazeh.platform.menus.move', $m)); ?>"><?php echo csrf_field(); ?><input type="hidden" name="dir" value="<?php echo e($dir); ?>"><button class="ibtn" title="<?php echo e($tip); ?>"><?php echo \Sazeh\Core\Support\Icons::svg($ic); ?></button></form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </span>
        </div>
        <?php if($n['children']): ?><div class="tkids"><?php echo $__env->make('sazeh::platform.partials.menu-node', ['nodes' => $n['children']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?></div><?php endif; ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\lara\la-saas\resources\views/vendor/sazeh/platform/partials/menu-node.blade.php ENDPATH**/ ?>