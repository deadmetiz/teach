<?php

?>

<?php $__env->startSection('page-content'); ?>
    <div class="color">
        <div class="theory">
            <?php if(\Illuminate\Support\Facades\Auth::user()): ?>
                <?php if(\Illuminate\Support\Facades\Auth::user()->role_id == 3): ?>
                    <form action="<?php echo e(route('hellohtml')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="text">
                            <h1 class="title"><?php echo e(DB::table('courses')->where('course_name', 'html')->value('course_description')); ?></h1>
                            <textarea name="coursedescription" class="areadesc">
                                <?php echo e(DB::table('courses')->where('course_name', 'html')->value('course_description')); ?>

                            </textarea>
                            <textarea name="coursetext" class="areatext">
                                <?php echo e(DB::table('courses')->where('course_name', 'html')->value('course_text')); ?>

                            </textarea>
                            <button>Сохранить данные</button>
                        </div>
                    </form>
                <?php else: ?>
                    <h1 class="title"><?php echo e(DB::table('courses')->where('course_name', 'html')->value('course_description')); ?></h1>
                    <a class="text">
                        <?php echo e(DB::table('courses')->where('course_name', 'html')->value('course_text')); ?>

                    </a>
                    <form action="<?php echo e(route('test1-page')); ?>" target="_self">
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\rabota\resources\views/teach.blade.php ENDPATH**/ ?>
