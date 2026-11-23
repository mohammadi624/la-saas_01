<?php $__env->startSection('title', 'تعریف پنل'); ?>
<?php $__env->startSection('heading', 'تعریف پنل'); ?>
<?php $__env->startSection('content'); ?>
<?php ($J = \Sazeh\Core\Support\Jalali::class); ?>
<div class="grid g4" style="margin-bottom:16px">
    <div class="stat"><b><?php echo e($J::digits($counts['all'])); ?></b><span>کل پنل‌ها</span></div>
    <div class="stat"><b><?php echo e($J::digits($counts['active'])); ?></b><span>فعال (قابل فروش)</span></div>
    <div class="stat"><b><?php echo e($J::digits($counts['all'] - $counts['active'])); ?></b><span>غیرفعال</span></div>
    <div class="stat"><b><?php echo e($canManage ? 'مشاهده و ویرایش' : 'فقط مشاهده'); ?></b><span>دسترسی شما</span></div>
</div>

<div class="card">
    <div class="hd">
        <div><h2>پنل‌های تعریف‌شده</h2><p class="desc" style="margin:0">هر پنل یک بستهٔ قابل فروش به خریداران است.</p></div>
        <form method="get" class="row">
            <input type="text" name="q" value="<?php echo e($q); ?>" placeholder="جستجوی عنوان یا کد">
            <select name="status"><option value="">همه</option><option value="active" <?php if($status === 'active'): echo 'selected'; endif; ?>>فعال</option><option value="inactive" <?php if($status === 'inactive'): echo 'selected'; endif; ?>>غیرفعال</option></select>
            <button class="btn sm">فیلتر</button>
        </form>
        <?php if($canManage): ?><a class="btn pri" href="<?php echo e(route('panels.create')); ?>">+ پنل جدید</a><?php endif; ?>
    </div>

    <div class="tw"><table>
        <thead><tr><th>ترتیب</th><th>پنل</th><th>قیمت ماهانه</th><th>قیمت سالانه</th><th>کاربران</th><th>امکانات</th><th>وضعیت</th><?php if($canManage): ?><th></th><?php endif; ?></tr></thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $panels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($J::digits($p->sort)); ?></td>
                <td><b><?php echo e($p->title); ?></b> <code><?php echo e($p->code); ?></code>
                    <?php if($p->description): ?><div class="small muted"><?php echo e(\Illuminate\Support\Str::limit($p->description, 80)); ?></div><?php endif; ?></td>
                <td><?php echo e($J::money($p->price_monthly)); ?> <span class="small muted">تومان</span></td>
                <td><?php echo e($J::money($p->price_yearly)); ?> <span class="small muted">تومان</span>
                    <?php if($p->yearlyDiscount() > 0): ?><div><span class="b b-ok"><?php echo e($J::digits($p->yearlyDiscount())); ?>٪ تخفیف</span></div><?php endif; ?></td>
                <td><?php echo e($J::digits($p->usersLabel())); ?></td>
                <td class="small"><?php echo e($J::digits(count($p->features ?? []))); ?> مورد</td>
                <td><?php echo $p->is_active ? '<span class="b b-ok">فعال</span>' : '<span class="b b-mut">غیرفعال</span>'; ?></td>
                <?php if($canManage): ?>
                <td><div class="row">
                    <a class="btn sm" href="<?php echo e(route('panels.edit', $p)); ?>">ویرایش</a>
                    <form method="post" action="<?php echo e(route('panels.toggle', $p)); ?>"><?php echo csrf_field(); ?><button class="btn sm"><?php echo e($p->is_active ? 'غیرفعال' : 'فعال'); ?></button></form>
                    <form method="post" action="<?php echo e(route('panels.destroy', $p)); ?>" onsubmit="return confirm('پنل «<?php echo e($p->title); ?>» حذف شود؟')"><?php echo csrf_field(); ?> <?php echo method_field('delete'); ?><button class="btn sm dng">حذف</button></form>
                </div></td>
                <?php endif; ?>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr><td colspan="8" class="muted" style="text-align:center;padding:24px">هنوز پنلی تعریف نشده است.<?php if($canManage): ?> <a href="<?php echo e(route('panels.create')); ?>">اولین پنل را بسازید</a>.<?php endif; ?></td></tr>
        <?php endif; ?>
        </tbody>
    </table></div>
    <div class="pager"><?php echo e($panels->links()); ?></div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sazeh::layouts.dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\lara\la-saas\app\Modules\Panels/views/index.blade.php ENDPATH**/ ?>