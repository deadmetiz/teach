<?php $__env->startSection('page-content'); ?>
    <div class="section-intro">

        <div class="intro">
            <div class="intro-img-box">
                <img class="intro-img" src="/img/1.png" alt="lore">
            </div>
            <div class="intro-text-box">
                <h1 class="heading-primary">
                    Начни здесь и сейчас!
                </h1>
                <p class="intro-description">
                    Не нужно откладывать своё обучение, когда уже можешь научиться программировать и создавать сайты.
                </p>
                <?php if(\Illuminate\Support\Facades\Auth::user()): ?>
                <a href="<?php echo e(route('course-page')); ?>" class="main-nav-link nav-cta">Перейти к курсам</a>
                <?php else: ?>
                <a href="<?php echo e(route('log-page')); ?>" class="main-nav-link nav-cta">Начать учиться</a>
                <?php endif; ?>
            </div>
        </div>

    </div>
    <div class="section-how">
        <div class="container grid grid--2-cols grid--center-v">
            <div class="step-text-box">
                <h3 class="heading-tertiary">Доступность</h3>
                <p class="step-description">
                    Учитесь с любым графиком из любой точки мира
                </p>
            </div>
            <div class="step-img-box">
                <img class="step-img" src="/img/3.png" alt="!">
            </div>
            <div class="step-img-box">
                <img class="step-img" src="/img/4.png" alt="!">
            </div>
            <div class="step-text-box">
                <h3 class="heading-tertiary">Практика</h3>
                <p class="step-description">
                    Выполняйте тесты, практические задания и закрепляйте знания
                </p>
            </div>
            <div class="step-text-box">
                <h3 class="heading-tertiary">Актуальность курсов</h3>
                <p class="step-description">
                    Курсы разработаны на основе актуального опыта и современных реалий
                </p>
            </div>
            <div class="step-img-box">
                <img class="step-img" src="/img/5.png" alt="!">
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\rabota\resources\views/index.blade.php ENDPATH**/ ?>