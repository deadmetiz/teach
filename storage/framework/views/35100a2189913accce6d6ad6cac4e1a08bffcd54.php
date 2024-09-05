<?php
    $arg = $_GET['to'];
?>

<?php $__env->startSection('page-content'); ?>
    <a>hi</a>
    <?php if(\Illuminate\Support\Facades\Auth::user()): ?>
        <?php if(\Illuminate\Support\Facades\Auth::user()->role_id == 3): ?>
            <?php
                echo $arg;

            ?>
        <?php else: ?>
        <?php endif; ?>
    <?php else: ?>
    <?php endif; ?>
    <?php return redirect(route('course-page'));?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\rabota\resources\views/delete.blade.php ENDPATH**/ ?>