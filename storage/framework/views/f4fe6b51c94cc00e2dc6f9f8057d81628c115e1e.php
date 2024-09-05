<footer class="footer">

    <div class="container grid grid--footer">
        <div class="logo-col">
            <a href="<?php echo e(route('main-page')); ?>" class="footer-logo">
                <img class="logo" src="public/img/logo.png" alt="lore"></a>

            <p class="copyright">
                Познавай-ка &copy; 2023.
            </p>
        </div>
        <div class="address-col">
            <p class="footer-heading">Наши контакты</p>
            <address class="contacts">
                <p class="address">Москва</p>
                <p>
                    <a>+79283472149</a>
                    <br>
                    <a>poznavaika@gmail.com</a>
                </p>
            </address>
        </div>
        <div class="nav-col">
            <p class="footer-heading">Аккаунт</p>
			<?php if(\Illuminate\Support\Facades\Auth::user()): ?>
				<ul class="footer-nav">
                <li><a href="<?php echo e(route('logout')); ?>">Выйти</a></li>
				</ul>
            <?php else: ?>
				<ul class="footer-nav">
                <li><a href="<?php echo e(route('register-page')); ?>">Создать аккаунт</a></li>
                <li><a href="<?php echo e(route('log-page')); ?>">Войти</a></li>
				</ul>
			<?php endif; ?>
          
        </div>
    </div>

</footer>
<?php /**PATH D:\OSPanel\domains\rabota\resources\views/components/footer.blade.php ENDPATH**/ ?>