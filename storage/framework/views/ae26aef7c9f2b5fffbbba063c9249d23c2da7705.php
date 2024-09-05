<?php $__env->startSection('page-content'); ?>
    <?php if(\Illuminate\Support\Facades\Auth::user()): ?>
        <?php if(\Illuminate\Support\Facades\Auth::user()->role_id == 3): ?>
            <form action="<?php echo e(route('create_new_course')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="text">
                    <textarea name="coursename" class="areadesc">Название раздела</textarea>
                    <textarea name="coursedescription" class="areadesc">Заголовок раздела</textarea>
                    <textarea name="coursetext" class="areatext">Содержание описание</textarea>
                    <textarea name="courselanguage" class="areadesc">Язык курса(писать в формате C++, HTML, Python, js)</textarea>
                    <button>Создать</button>
                </div>
            </form>
        <?php else: ?>
        <?php endif; ?>
    <?php else: ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\rabota\resources\views/create_new_course.blade.php ENDPATH**/ ?>