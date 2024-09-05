<?php

?>
<header class="header">
    <a href="<?php echo e(route('main-page')); ?>" class="header-logo">
        <img class="logo" src="public/img/logo.png" alt="lore">
    </a>
    <nav class="main-nav">
        <ul class="main-nav-list">
            <li><a class="main-nav-link" href="<?php echo e(route('course-page')); ?>">Курсы</a></li>
            <li><a class="main-nav-link" href="<?php echo e(route('feedback')); ?>">Обратная связь</a></li>
            <?php if(\Illuminate\Support\Facades\Auth::user()): ?>
            <div class="dropdown">
                <li><a class="main-nav-link" href="<?php echo e(route('profile-page')); ?>">

                        <img class="avatar" src="/photos/<?php echo e(Auth::user()->image); ?>.jpg" alt="">

                    </a>
                </li>
                 <div class="dropdown-content">
                     <li>
                     <a href="<?php echo e(route('logout')); ?>">
                         <img class="avatar1" src="/img/quit.png" alt="">
                     </a>
                     </li>
                 </div>
            </div>
            <?php else: ?>
            <li><a class="main-nav-link" href="<?php echo e(route('register-page')); ?>">Регистрация</a></li>
            <li><a class="main-nav-link" href="<?php echo e(route('log-page')); ?>">Авторизация</a></li>
            <?php endif; ?>
        </ul>

    </nav>
</header>
<?php /**PATH D:\OSPanel\domains\rabota\resources\views/components/header.blade.php ENDPATH**/ ?>