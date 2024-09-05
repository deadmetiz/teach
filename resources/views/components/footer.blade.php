<footer class="footer">

    <div class="container grid grid--footer">
        <div class="logo-col">
            <a href="{{route('main-page')}}" class="footer-logo">
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
			@if(\Illuminate\Support\Facades\Auth::user())
				<ul class="footer-nav">
                <li><a href="{{route('logout')}}">Выйти</a></li>
				</ul>
            @else
				<ul class="footer-nav">
                <li><a href="{{route('register-page')}}">Создать аккаунт</a></li>
                <li><a href="{{route('log-page')}}">Войти</a></li>
				</ul>
			@endif
          
        </div>
    </div>

</footer>
