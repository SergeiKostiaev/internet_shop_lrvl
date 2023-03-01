@extends('master')

@section('title', 'Товар')

@section('content')
<main class="main">
    <div class="wrap">
        <section class="card_one">
            <h2>IPhone X Black 64 GB</h2>
            <h2>{{ $product }}</h2>
            <img class="card-img-top" src="../pic/iphoneX.jpg" alt="iphoneX">
            <p>Отличная версия iphone с памятью на 64Gb</p>
            <button id="cartCard">В корзину</button>
        </section>
    </div>
</main>
@endsection
