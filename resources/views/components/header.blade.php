<?php

?>
<header class="header">
    <a href="{{route('main-page')}}" class="header-logo">
        <img class="logo" src="public/img/logo.png" alt="lore">
    </a>
    <nav class="main-nav">
        <ul class="main-nav-list">
            <li><a class="main-nav-link" href="{{route('course-page')}}">Курсы</a></li>
            <li><a class="main-nav-link" href="{{route('feedback')}}">Обратная связь</a></li>
            @if(\Illuminate\Support\Facades\Auth::user())
            <div class="dropdown">
                <li><a class="main-nav-link" href="{{route('profile-page')}}">

                        <img class="avatar" src="/photos/{{Auth::user()->image}}.jpg" alt="">

                    </a>
                </li>
                 <div class="dropdown-content">
                     <li>
                     <a href="{{route('logout')}}">
                         <img class="avatar1" src="/img/quit.png" alt="">
                     </a>
                     </li>
                 </div>
            </div>
            @else
            <li><a class="main-nav-link" href="{{route('register-page')}}">Регистрация</a></li>
            <li><a class="main-nav-link" href="{{route('log-page')}}">Авторизация</a></li>
            @endif
        </ul>

    </nav>
</header>
