<?php
use Illuminate\Support\Facades\DB;
    ?>
@extends('layout')
@section('page-content')
    @if(\Illuminate\Support\Facades\Auth::user())
        @if(\Illuminate\Support\Facades\Auth::user()->role_id == 3)
            <div class="color">
            <div class="forma">
                <div class="from-container">
                    <div class="text">
                <form action="{{route('create_new_language')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <textarea name="languagename" class="areadef">Так будет выглядеть в выборе курса</textarea>
                    <textarea name="languagedescription" class="areadef">Описание языка</textarea>
                    <textarea name="language" class="areadef">Аббревиатура языка(пример C++, HTML, Python, js)</textarea>
                    <button>Создать</button>
                </form>
                    </div>
                    <?php
                    $abc = DB::table('language')->get();
                    foreach ($abc as $name) {
                        $a = $name->language;
                        echo "<a>$a</a>";
                    }
                    ?>
            </div>
            </div>
            </div>
        @else
        @endif
    @else
    @endif

@endsection
