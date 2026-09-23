@extends('layouts.app')

@section('title', 'Our services - GreenSpark')

@push('styles')
    <style>
        .hero-banner {
            background-image: url('{{ asset("images/services-model.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 80vh;
        }

        .card-service {
            color: white;
            background-color: #161c18 !important;
            border: 1px solid rgba(25, 135, 84, 0.25) !important;
            transition: all 0.3s ease;
        }

        .card-service:hover {
            border-color: #198754 !important;
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(25, 135, 84, 0.2);
        }
    </style>
@endpush

@section('content')
    <section class="hero-services py-5">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <span class="bg-warning d-inline-block" style="width: 20px; height: 2px;"></span>
                    <span class="text-uppercase fw-bold text-white small tracking-wider">
                        OUR SERVICES
                    </span>
                </div>
                <div class="col-lg-6">
                    <h1 class="display-6 fw-bold mb-4 text-white fs-2">Kami menyediakan berbagai solusi untuk bisnis anda.</h1>
                </div>

                <div class="col-lg-4 offset-lg-2">
                    <p class="text-white lead fs-6 mb-4 align-items-center" style="line-height: 1.7;">
                        GreenSpark bersedia membantu bisnis anda untuk berkembang dan juga berusaha untuk terus memberikan solusi atau perencanaan yang dapat memberikan insight terhadap bisnis anda.
                    </p>
                </div>

                <hr class="my-4" style="color: white;">
            </div>
            
            <div class="container py-4">
                <div class="row g-4">

                    <div class="col-md-6 col-lg-4">
                        <div class="card card-service border-0 rounded-4 shadow-sm p-4 h-100 bg-dark-subtle">
                            <div class="card-header-custom pb-3 mb-3">
                                <h4 class="fw-bold fs-5 mb-0">Instalasi Panel Surya</h4>
                                <hr class="my-4" style="color: #00d644;">
                            </div>
                            <div class="card-body-custom d-flex flex-column justify-content-between h-100">
                                <p class="text-secondary small mb-4">
                                    Layanan instalasi sistem PLTS terintegrasi untuk bisnis dan tempat tinggal Anda secara efisien.
                                </p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-service border-0 rounded-4 shadow-sm p-4 h-100 bg-dark-subtle">
                            <div class="card-header-custom pb-3 mb-3">
                                <h4 class="fw-bold fs-5 mb-0">Smart Energy Management (IoT)</h4>
                                <hr class="my-4" style="color: #00d644;">
                            </div>
                            <div class="card-body-custom d-flex flex-column justify-content-between h-100">
                                <p class="text-secondary small mb-4">
                                    Sistem pemantauan penggunaan listrik secara real-time berbasis IoT untuk menghemat biaya operasional.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card card-service border-0 rounded-4 shadow-sm p-4 h-100">
                            <div class="card-header-custom pb-3 mb-3">
                                <h4 class="fw-bold fs-5 mb-0">Maintenance & Support</h4>
                                <hr class="my-4" style="color: #00d644;">
                            </div>
                            <div class="card-body-custom d-flex flex-column justify-content-between h-100">
                                <p class="text-secondary small mb-4">
                                    Perencanaan audit energi dan strategi efisiensi untuk memenuhi standar bangunan ramah lingkungan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card card-service border-0 rounded-4 shadow-sm p-4 h-100">
                            <div class="card-header-custom pb-3 mb-3">
                                <h4 class="fw-bold fs-5 mb-0">Hybrid Energy Solutions</h4>
                                <hr class="my-4" style="color: #00d644;">
                            </div>
                            <div class="card-body-custom d-flex flex-column justify-content-between h-100">
                                <p class="text-secondary small mb-4">
                                    Integrasi panel surya dengan jaringan listrik PLN, sehingga tetap stabil meski cuaca kurang mendukung.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card card-service border-0 rounded-4 shadow-sm p-4 h-100">
                            <div class="card-header-custom pb-3 mb-3">
                                <h4 class="fw-bold fs-5 mb-0">Battery & Storage Systems</h4>
                                <hr class="my-4" style="color: #00d644;">
                            </div>
                            <div class="card-body-custom d-flex flex-column justify-content-between h-100">
                                <p class="text-secondary small mb-4">
                                    Instalasi sistem penyimpanan energi (battery pack) agar listrik bisa dipakai di malam hari atau saat beban puncak.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card card-service border-0 rounded-4 shadow-sm p-4 h-100">
                            <div class="card-header-custom pb-3 mb-3">
                                <h4 class="fw-bold fs-5 mb-0">Smart Energy & IoT Solutions</h4>
                                <hr class="my-4" style="color: #00d644;">
                            </div>
                            <div class="card-body-custom d-flex flex-column justify-content-between h-100">
                                <p class="text-secondary small mb-4">
                                    GreenSpark menghadirkan solusi manajemen energi berbasis Internet of Things (IoT) yang memungkinkan Anda memantau konsumsi listrik secara real-time, mengoptimalkan penggunaan daya, dan mengurangi biaya operasional.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
            
        </div>
    </section>
@endsection
