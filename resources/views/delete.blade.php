<?php
    $arg = $_GET['to'];
?>
@extends('layout')
@section('page-content')
    @if(\Illuminate\Support\Facades\Auth::user())
        @if(\Illuminate\Support\Facades\Auth::user()->role_id == 3)
            <?php
                echo $arg;

            ?>
        @else
        @endif
    @else
    @endif
@endsection
