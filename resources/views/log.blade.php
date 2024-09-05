

@extends('layout')
@section('page-content')
    <div class="line"></div>
    <div class="color">
        <div class="forma">
            <div class="form-container ">
                <form class="form-log container @if($errors->any()) {{'from--invalid' }} @endif " action="{{route('log')}}" method="post">
                    @csrf
                    <div class="text">
                        <h1>Авторизация</h1>
                        <div class="form__item @error('email')form__item--invalid @enderror @error('password')form__item--invalid @enderror">
                        <input type="email" name="email"  placeholder="Ваш email" id="email" />
                            @error('email')
                            <span class="form__error">Неправильный email</span>
                            @enderror
                        <input type="password" name="password"  placeholder="Ваш пароль" id="password" />
                            @error('password')
                            <span class="abc">Неправильные данные</span>
                            @enderror
                        <a class="forgotten" href="{{route('forgot')}}">Забыли пароль?</a><br>
                            <div class="from__item @error('auth_error') form__item-invalid @enderror ">
                                @error('auth_error')
                                <li class="abc">{{$message}}</li>
                                @enderror
                            </div>
                        <button>Вход</button>
                        </div>
                    </div>
                </form>
            </div>
            <img class="overlay-container" src="/img/2.jpg" alt="lore">
        </div>
    </div>
    </div>
    <div class="line"></div>
@endsection
