@extends('layout')
@section('page-content')
    <div class="line"></div>
    <div class="color">
        <div class="forma">
            <div class="form-container ">
                <form class="form-log container @if($errors->any()) {{'from--invalid' }} @endif " action="{{route('forgotcode')}}" method="post">
                    @csrf
                    <div class="text">
                        <h1>Восстановление пароля</h1>
                        <div class="form__item @error('email')form__item--invalid @enderror">
                            <input type="email" name="email"  placeholder="Ваш email" />
                            <input type="password" name="password"  placeholder="Придумайте новый пароль" />
                            <input type="token" name="token"  placeholder="Код с почты" />
                            <form action="{{route('log-page')}}" >
                                <button>Подтвердить</button>
                            </form>
                        </div>
                    </div>
                    <img class="overlay-container" src="/img/9.jpg" alt="lore">
                </form>
            </div>
        </div>
    </div>
    <div class="line"></div>
@endsection
