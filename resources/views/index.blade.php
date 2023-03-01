@extends('master')


@section('content')
    <main class="main">
        <div class="wrap">
            <h1>Все товары</h1>
            <section class="cardsAll">
                <div class="card-deck">
                    @include('card')
                </div>
            </section>
        </div>
    </main>
@endsection('content')
