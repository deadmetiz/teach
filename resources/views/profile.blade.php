<?php

?>
@extends('layout')
@section('page-content')
    <div class="line"></div>
    <div class="color">
        <div class="forma">
            <div class="form-container ">
                <form class="form-log container @if($errors->any()) {{'from--invalid' }} @endif "
                      action="{{route('profile')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="text">
                        <h1>Ваши данные:</h1>
                        <div class="form__item @error('email')form__item--invalid @enderror">
                            <input type="name" type="text" name="name" placeholder="Ваше имя"
                                   value="{{Auth::user()->name}}" required/>
                            <input type="file" name="image">
                            <button>Сохранить данные</button>
                        </div>
                    </div>
                </form>
                <img class="overlay-container" src="/photos/{{Auth::user()->image}}.jpg" alt="">
            </div>
        </div>
    </div>
    </div>
    <div class="line"></div>
@endsection
