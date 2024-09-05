<?php $__env->startSection('page-content'); ?>
    <div class="line"></div>
    <div class="color">
        <div class="forma">
            <div class="form-container ">
                <form <?php if($errors->any()): ?><?php echo e('form--invalid'); ?><?php endif; ?>
                action="<?php echo e(route('register')); ?>"
              method="post"
              autocomplete="off">
                    <?php echo csrf_field(); ?>
                    <div class="text">
                        <h1>Регистрация</h1>
                        <input type="name" type="name" name="name"  placeholder="Ваше имя" required />
                        <input type="email" type="text" name="email" placeholder="Введите свой email" required />
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="form__error">Введите свой email</span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <input type="password" type="text" name="password"  placeholder="Придумайте пароль" required />
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="form__error">Придумайте пароль</span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
                        <button>Зарегистрироваться</button>
                    </div>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <div class="text1">
                            <h1>Добро пожаловать!</h1>
                            <p>Чтобы оставаться на связи с нами, пожалуйста, войдите в систему с вашей личной информацией</p>
                            <form action="<?php echo e(route('log-page')); ?>" >
                                <button class="butlog">Авторизация</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="line"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\rabota\resources\views/register.blade.php ENDPATH**/ ?>