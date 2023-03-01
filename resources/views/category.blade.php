@extends('master')

@section('title','Категория'.$category->name)

@section('content')
<main class="main">
    <div class="wrap">
        <h1>
            {{$category->name}}

        </h1>
        <p>
            {{$category->description}}
        </p>
    </div>
</main>
@endsection
