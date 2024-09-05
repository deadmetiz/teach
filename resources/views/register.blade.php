@extends('layout')
@section('page-content')
    <div class="line"></div>
    <div class="color">
        <div class="forma">
            <div class="form-container ">
                <form @if($errors->any()){{'form--invalid'}}@endif
                action="{{route('register')}}"
              method="post"
              autocomplete="off">
                    @csrf
                    <div class="form__item @error('name')form__item--invalid @enderror @error('email')form__item--invalid @enderror @error('password')form__item--invalid @enderror">
                        <h1>Регистрация</h1>
                        <input type="name" name="name"  placeholder="Ваше имя" />
                        @error('name')
                        <span class="form__error">Введите имя</span>
                        @enderror
                        <input type="text" name="email" placeholder="Введите свой email" />
                        @error('email')
                        <span class="form__error">Введите свой email</span>
                        @enderror
                        <input type="password" name="password"  placeholder="Придумайте пароль" />
                        @error('password')
                        <span class="form__error">Придумайте пароль</span>
                        @enderror
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
                            <form action="{{route('log-page')}}" >
                                <button class="butlog">Авторизация</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="line"></div>
@endsection
