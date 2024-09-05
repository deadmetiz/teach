<?php
use Illuminate\Support\Facades\DB;
$c = $_GET['name'];
$route = route('test-page');
$quest = DB::table('courses')->where('course_name', $c)->value('course_test');
$quest = json_decode($quest);
?>
@extends('layout')
@section('page-content')
    <div class="color">
        <div class="theory">
            @if(\Illuminate\Support\Facades\Auth::user())
                @if(\Illuminate\Support\Facades\Auth::user()->role_id == 3)

                    <form action="{{route('teach')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="text">
                            <input type="text" name="coursename" value="{{$c}}" readonly>
                            <textarea name="coursedescription" class="areadesc">{{DB::table('courses')->where('course_name', $c)->value('course_description')}}</textarea>
                            <textarea name="coursetext" class="areatext">{{DB::table('courses')->where('course_name', $c)->value('course_text')}}</textarea>
                            <input type="file" name="image">
                            <button>Сохранить данные</button>
                        </div>
                    </form>

                    <img src="/coursephoto/{{htmlspecialchars($c)}}.jpg" alt="">

                    <form action="{{route('delete')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input class="dell" type="text" name="todel" value="{{$c}}" readonly>
                        <button>Удалить курс</button>
                    </form>
                <a>Добавьте вопрос для теста ---</a>
                    <form action="{{route('newquest')}}" method="post" enctype="multipart/form-data" name="newquestion">
                        @csrf
                        <input class="dell" type="text" name="todel" value="{{$c}}" readonly>
                        <table>
                            <tr>
                                <td>Вопрос</td>
                                <td>
                                    <input name="question" type="text" value="Вопрос" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Варианты</td>
                                <td>
                                    <input name="ask1" type="text" value="1" required>
                                </td>
                                <td>
                                    <input name="ask2" type="text" value="2" required>
                                </td>
                                <td>
                                    <input name="ask3" type="text" value="3" required>
                                </td>
                                <td>
                                    <input name="ask4" type="text" value="4" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Правильный ответ</td>
                                <td>
                                    <select name="correct">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3" selected>3</option>
                                        <option value="4">4</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <button id="submit">Добавить!</button>
                    </form>
                    <?php
                        if($quest != NULL) {
                            foreach ($quest as $ab) {
                                echo "<a>Вопрос: $ab->question</a>";
                                for ($i = 0; $i < 4; $i++) {
                                    $viv = $ab->answers[$i];
                                    echo "Ответ: <a>$viv</a>";
                                }
                                echo "<a>Номер правильного: $ab->correct</a>";
                                echo "<a>---------</a>";
                            }
                        }
                        ?>
                @else
                    <h1 class="title">{{DB::table('courses')->where('course_name', $c)->value('course_description')}}</h1>
                    <a class="text">
                        {!! nl2br(e(DB::table('courses')->where('course_name', $c)->value('course_text'))) !!}
                    </a>
                    <img src="/coursephoto/{{htmlspecialchars($c)}}.jpg" alt="">
                    <a href="{{$route}}?name={{$c}}"><button>Пройти тест</button></a>

                @endif
            @else
                <a class="text">
                    Зарегистрируйтесь для доступа!
                </a>
            @endif
        </div>
    </div>
    </div>
@endsection
