<?php
$c = $_GET['name'];
?>

<?php $__env->startSection('page-content'); ?>
    <div class="color">
        <div class="theory">
            <?php if(\Illuminate\Support\Facades\Auth::user()): ?>
                <?php if(\Illuminate\Support\Facades\Auth::user()->role_id == 3): ?>
                    <form action="<?php echo e(route('teach')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="text">
                            <input type="text" name="coursename" value="<?php echo e($c); ?>" readonly>
                            <textarea name="coursedescription" class="areadesc">
                                <?php echo e(DB::table('courses')->where('course_name', $c)->value('course_description')); ?>

                            </textarea>
                            <textarea name="coursetext" class="areatext">
                                <?php echo e(DB::table('courses')->where('course_name', $c)->value('course_text')); ?>

                            </textarea>
                            <input type="file" name="image">
                            <button>Сохранить данные</button>
                        </div>
                    </form>
                    <img src="/coursephoto/<?php echo e(htmlspecialchars($c)); ?>.jpg" alt="">
                    <form action="<?php echo e(route('delete')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="text" name="todel" value="<?php echo e($c); ?>" readonly>
                        <button>Удалить курс</button>
                    </form>
                <?php else: ?>
                    <h1 class="title"><?php echo e(DB::table('courses')->where('course_name', $c)->value('course_description')); ?></h1>
                    <a class="text">
                        <?php echo nl2br(e(DB::table('courses')->where('course_name', $c)->value('course_text'))); ?>

                    </a>
                    <img src="/coursephoto/<?php echo e(htmlspecialchars($c)); ?>.jpg" alt="">
                    <form action="<?php echo e(route('test1-page')); ?>">
                        <button>Пройти тест</button>
                    </form>
                <?php endif; ?>
            <?php else: ?>
                <a class="text">
                    Зарегистрируйтесь для доступа!
                </a>
            <?php endif; ?>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\rabota\resources\views/teach.blade.php ENDPATH**/ ?>