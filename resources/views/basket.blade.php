{{--@extends('master')--}}

@section('title', 'Корзина')

@section('content')
    <main class="main">
        <div class="wrap">
            <p>Оформление заказа</p>
            <div class="panel">
                <table class="table tabel-striped">
                    <thead>
                    <tr>
                        <th>Название</th>
                        <th>Кол-во</th>
                        <th>Цена</th>
                        <th>Стоимость</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <a href="#">
                                <img class="card-img-top" src="../pic/iphoneX.jpg" alt="iphoneX">
                                Iphone X 64GB
                            </a>
                        </td>
                        <td><span class="badge">1</span>
                            <a href="#" type="button"></a>
                            <a href="#" type="button"></a>
                        </td>
                        <td>71990 руб.</td>
                        <td>71990 руб.</td>
                    </tr>
                    <tr>
                        <td colspan="3">Общая стоимость:</td>
                        <td>71990 руб.</td>
                    </tr>
                    </tbody>
                </table>
            </div>
{{--            @foreach($categories as $category)--}}
{{--                <article class="cardCategoty">--}}
{{--                    <a href="/{{ $category->code }}">--}}
{{--                        <img class="card-img-top" src="../pic/apple-iphone-x-pictures-5.png" alt="iphoneX">--}}
{{--                        <h2>{{ $category->name }}</h2>--}}
{{--                        <p>{{ $category->description }}</p>--}}
{{--                    </a>--}}
{{--                </article>--}}
    {{--@endforeach--}}

</div>
</main>
@endsection
