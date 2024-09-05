<?php

?>

<?php $__env->startSection('page-content'); ?>
    <div class="line"></div>
    <div class="color">
        <div class="forma">
            <div class="form-container ">
                <form class="form-log container <?php if($errors->any()): ?> <?php echo e('from--invalid'); ?> <?php endif; ?> "
                      action="<?php echo e(route('profile')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="text">
                        <h1>Ваши данные:</h1>
                        <div class="form__item <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>form__item--invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <input type="name" type="text" name="name" placeholder="Ваше имя"
                                   value="<?php echo e(Auth::user()->name); ?>" required/>
                            <input type="file" name="image">
                            <button>Сохранить данные</button>
                        </div>
                    </div>
                </form>
                <img class="overlay-container" src="/photos/<?php echo e(Auth::user()->image); ?>.jpg" alt="">
            </div>
        </div>
    </div>
    </div>
    <div class="line"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\rabota\resources\views/profile.blade.php ENDPATH**/ ?>