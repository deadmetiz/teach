@extends('layout')
@section('page-content')
    @if(\Illuminate\Support\Facades\Auth::user())
        @if(\Illuminate\Support\Facades\Auth::user()->role_id == 3)
            <form action="{{route('create_new_course')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="text">
                    <textarea name="coursename" class="areadesc">Название раздела</textarea>
                    <textarea name="coursedescription" class="areadesc">Заголовок раздела</textarea>
                    <textarea name="coursetext" class="areatext">Содержание описание</textarea>
                    <textarea name="courselanguage" class="areadesc">Язык курса(писать в формате C++, HTML, Python, js)</textarea>
                    <button>Создать</button>
                </div>
            </form>
        @else
        @endif
    @else
    @endif

@endsection
