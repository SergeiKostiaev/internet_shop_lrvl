@extends('master')

@section('title', 'Все категории')

@section('content')
<main class="main">
    <div class="wrap">
        @foreach($categories as $category)
            <article class="cardCategoty">
                <a href="/{{ $category->code }}">
                    <img class="card-img-top" src="../pic/apple-iphone-x-pictures-5.png" alt="iphoneX">
                    <h2>{{ $category->name }}</h2>
                    <p>{{ $category->description }}</p>
                </a>
            </article>
        @endforeach

    </div>
</main>
@endsection


