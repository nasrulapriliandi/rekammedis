@extends('layouts.app')

@section('title', 'Beranda')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" height="350" src="assets/img/news/kaos1.jpg"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" height="350" src="assets/img/news/kaos2.jpg"
                                    alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" height="350" src="assets/img/news/kaos3.jpg"
                                    alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="card-header">
                    <h4>Best Products</h4>
                </div>
                <div class="card-body">
                    <div class="owl-carousel owl-theme" id="products-carousel">
                        <div class="row">
                            @foreach($produks as $item)
                                <div class="col-md-4">
                                    <div class="product-item pb-3">
                                        <div class="product-image">
                                            <img alt="image"
                                                src="{{ asset('storage/' . $item->gambar) }}"
                                                class="img-fluid">
                                        </div>

                                        <div class="product-details">
                                            <div class="product-name">{{ $item->nama }}</div>
                                            <div class="product-review">
                                                {{ $item->harga }}
                                            </div>

                                            <div class="product-cta">
                                                <a href="{{ route('produks.show', $item->id) }}"
                                                    class="btn btn-primary">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
