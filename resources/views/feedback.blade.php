<?php
use Illuminate\Support\Facades\DB;
$info = DB::table('feedback')->get();
$delr = route('deletefeedback');
$bra = csrf_token();
    ?>
@extends('layout')
@section('page-content')
    <div class="line"></div>
    <div class="color">
        <div class="formmm">
            <div class="container-form">
                @if(\Illuminate\Support\Facades\Auth::user())

                    @if(\Illuminate\Support\Facades\Auth::user()->role_id == 3)
                        <?php
                            foreach($info as $feedback){
                                echo "<a class='words'>Номер заявки: $feedback->id</a>";
                                echo "<a class='words'>Сообщение: $feedback->message</a>";
                                echo "<a class='words'>EMail пользователя: $feedback->email</a>";
                                echo "<a class='words'>Имя пользователя: $feedback->name</a>";
                                echo "
                                <form action='$delr' method='post' enctype='multipart/form-data' content='$bra'>
                    <input type='hidden' name='_token' value='$bra' />
                        <input class='dell' type='text' name='todel' value='$feedback->id' readonly>
                        <button class='knop'>Удалить заявку</button>
                    </form>";
                                echo "<a>---------------------------------</a>";
                            }
                            ?>


                    @else
                        <?php
                            $email = DB::table('users')->where('id', \Illuminate\Support\Facades\Auth::id())->value('email');
                            $name = DB::table('users')->where('id', \Illuminate\Support\Facades\Auth::id())->value('name');
                        ?>
                        <form action="{{route('feedback-post')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h1 class="words"><b>Здесь Вы можете задать интересующий Вас вопрос и мы с радостью ответим Вам. Также Вы всегда можете позвонить на горячую линию по номеру +79283472149.</b></h1>
                            <div class="column">
                                <input class="dell" type="text" name="name"  placeholder="Ваше имя" value="{{$name}}" required />
                                <input class="dell" type="text" name="email" placeholder="Введите свой email" value="{{$email}}" required />
                            </div>
                            <input class="size" type="text" name="text"  placeholder="Введите вопрос..." required>
                            <button class="send">Отправить</button>
                        </form>
                    @endif
                @else
                    <form action="{{route('feedback-post')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h1 class="words"><b>Здесь Вы можете задать интересующий Вас вопрос и мы с радостью ответим Вам. Также Вы всегда можете позвонить на горячую линию по номеру +79283472149.</b></h1>
                        <div class="column">
                            <input type="text" name="name"  placeholder="Ваше имя" required />
                            <input type="text" name="email" placeholder="Введите свой email" required />
                        </div>
                        <input class="size" type="text" name="text"  placeholder="Введите вопрос..." required />
                        <button class="send">Отправить</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
    <div class="line"></div>
@endsection
