@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <div class="wrapper">
        <section class="home" id="home" style="background-image: url('{{ asset('image/Background.png') }}');">
            <div class="content">
                <div class="text-section">
                    <h3 class="welcome-text">Selamat Datang</h3>
                    <h3 class="to-text">di</h3>
                    <h3 class="njajaners-text">N'JAJAN</h3>
                    <p>
                        "Tempat di mana kelezatan bertemu kenyamanan! Temukan pengalaman kuliner yang unik dengan pilihan makanan yang lezat, dan minuman yang segar. Segera coba kelezatan yang kami tawarkan!"</p>
                    <a href="{{ route('product') }}" class="btn order-btn py-4 px-5 ">Pesan Sekarang!</a>
                </div>

                <div class="logo-section">
                    <img src="{{ asset('image/logo.png')}}" alt="Logo" width="100%" height="auto">
                </div>
            </div>
        </section>

        <div class="superioritySection">
            <div class="container">
                <h1>
                    <span><b>Keunggulan</b></span>
                </h1>
                <div class="row gutters-40">
                    <div class="col-lg-4 col-sm-4 col-4">
                        <div class="product-box-layout4">
                            <div class="item-figure">
                                <img src="{{ asset('image/image1.webp')}}" alt="Category" width="100%" height="100%" />
                            </div>
                            <div class="item-content">
                                <h2 class="card-title">Inovasi Rasa yang Menggoda</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-4">
                        <div class="product-box-layout4">
                            <div class="item-figure">
                                <img src="{{ asset('image/image2.webp')}}" alt="Category" width="100%" height="100%" />
                            </div>
                            <div class="item-content">
                                <h2 class="card-title">Pilihan Menu Beragam</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-4">
                        <div class="product-box-layout4">
                            <div class="item-figure">
                                <img src="{{ asset('image/image3.webp')}}" alt="Category" width="100%" height="100%" />
                            </div>
                            <div class="item-content">
                                <h2 class="card-title">Pesan Online/Ambil di Tempat</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
