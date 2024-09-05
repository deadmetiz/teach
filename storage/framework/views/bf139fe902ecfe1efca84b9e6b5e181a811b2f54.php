<?php $__env->startSection('page-content'); ?>
    <div class="line"></div>
    <div class="color">
        <div class="forma">
            <div class="container-form ">
                <form>
                    <h1 class="words"><b>Здесь Вы можете задать интересующий Вас вопрос и мы с радостью ответим Вам. Также Вы всегда можете позвонить на горячую линию по номеру +79283472149.</b></h1>
                    <div class="column">
                        <input type="name" type="name" name="name"  placeholder="Ваше имя" required />
                        <input type="email" type="text" name="email" placeholder="Введите свой email" required />
                    </div>
                    <input class="size" type="text" name="text"  placeholder="Введите вопрос..." required>
                    <button class="send">Отправить</button>
                </form>
            </div>
        </div>
    </div>
    <div class="line"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\rabota\resources\views/feedback.blade.php ENDPATH**/ ?>