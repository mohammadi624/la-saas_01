<?php $__env->startSection('heading', 'فضاهای کاری'); ?>
<?php $__env->startSection('content'); ?>
<div class="grid g75">
<div class="card">
    <div class="hd"><div><h2>فضاهای کاری / خریداران</h2><p class="desc" style="margin:0">مدیر پلتفرم بدون عضویت به دادهٔ داخل فضاها دسترسی ندارد. تغییر وضعیت بلافاصله روی ورود اعضای آن فضا اثر دارد.</p></div>
        <form method="get" class="row"><input type="text" name="q" value="<?php echo e($q); ?>" placeholder="جستجو"><button class="btn sm">جستجو</button></form></div>
    <div class="tw"><table><thead><tr><th>فضای کاری</th><th>مالک</th><th>کاربران / ظرفیت</th><th>پلن</th><th>وضعیت</th></tr></thead><tbody>
    <?php $__currentLoopData = $workspaces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php ($seats = $ent->seats($w)); ?>
        <tr><td><b><?php echo e($w->name); ?></b> <code><?php echo e($w->slug); ?></code></td><td><?php echo e($w->owner?->name); ?><div class="small"><code><?php echo e($w->owner?->mobile); ?></code></div></td>
        <td><?php echo e($w->memberships_count); ?> / <?php echo e($seats->unlimited ? 'نامحدود' : $seats->limit); ?></td><td><?php echo e($w->plan?->title ?? '—'); ?></td>
        <td><form method="post" action="<?php echo e(route('sazeh.platform.workspaces.status', $w)); ?>"><?php echo csrf_field(); ?> <?php echo method_field('put'); ?><select name="status" onchange="this.form.submit()"><?php $__currentLoopData = \Sazeh\Core\Models\Workspace::STATUSES; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($k); ?>" <?php if($w->status === $k): echo 'selected'; endif; ?>><?php echo e($v); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select></form></td></tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody></table></div>
    <div class="pager"><?php echo e($workspaces->links()); ?></div>
</div>
<div class="card"><h2>خریدار / فضای کاری جدید</h2><p class="desc">یک فضای کاری ساخته می‌شود و این شخص مالک آن است. او کاربران خودش را از پنلش اضافه می‌کند.</p>
<form method="post" action="<?php echo e(route('sazeh.platform.workspaces.store')); ?>"><?php echo csrf_field(); ?>
    <div class="grid g2" style="gap:10px">
        <label class="f"><span>نام فضای کاری / سایت</span><input type="text" name="ws_name" value="<?php echo e(old('ws_name')); ?>" required></label>
        <label class="f"><span>نامک لاتین</span><input type="text" name="slug" value="<?php echo e(old('slug')); ?>" dir="ltr" required placeholder="my-shop"></label>
    </div>
    <?php if(config('sazeh.billing.enabled')): ?>
    <label class="f"><span>پلن</span><select name="plan_id"><option value="">—</option><?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($p->id); ?>"><?php echo e($p->title); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select></label>
    <?php endif; ?>
    <p class="small" style="margin:6px 0"><b>مالک:</b></p>
    <?php echo $__env->make('sazeh::partials.identity-fields', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <button class="btn pri">ساخت</button>
</form></div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sazeh::layouts.dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\lara\la-saas\resources\views/vendor/sazeh/platform/workspaces.blade.php ENDPATH**/ ?>