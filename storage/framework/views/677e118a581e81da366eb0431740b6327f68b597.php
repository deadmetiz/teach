<?php $__env->startSection('page-content'); ?>
    <div class="line"></div>
    <div class="color">
        <div class="forma">
            <div class="form-container ">
                <form class="form-log container <?php if($errors->any()): ?> <?php echo e('from--invalid'); ?> <?php endif; ?> " action="<?php echo e(route('forgot')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="text">
                        <h1>Восстановление пароля</h1>
                        <div class="form__item <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>form__item--invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <input type="email" name="email"  placeholder="Ваш email" />
                            <button>Отправить код</button>
                        </div>
                    </div>
                    <img class="overlay-container" src="/img/9.jpg" alt="lore">
                </form>
            </div>
        </div>
    </div>
    <div class="line"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\rabota\resources\views/forgot.blade.php ENDPATH**/ ?>