@extends('layouts.app')

@section('title', 'GreenSpark')

    <style>
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.15) !important; 
        }

        .hover-lift:hover {
            transform: translateY(-8px); 
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.5) !important; 
        }

        .hero-banner {
            background-image: url('{{ asset("images/main-banner.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 80vh;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .hero-home {
            background: linear-gradient(180deg, rgba(25, 135, 84, 0.15) 0%, rgba(33, 37, 41, 0) 100%);
        }

        .section-curved {
            border-top-left-radius: 60px;
            border-top-right-radius: 60px;
            margin-top: -40px;
            position: relative;
            z-index: 2;
        }

        .tracking-wider {
            letter-spacing: 1px;
        }

        .hover-btn {
            transition: all 0.3s ease;
        }

        .hover-btn:hover {
            background-color: #198754 !important; 
            border-color: #198754 !important;
            color: #fff !important;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .section-curved {
                border-top-left-radius: 30px;
                border-top-right-radius: 30px;
                margin-top: -20px;
            }
        }
    </style>
@stack('styles')

@section('content')
    

    <section class="hero-home bg-dark text-white py-5 d-flex align-items-center mb-5">
        <div class="container">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="display-4 fw-bold mb-3 text-light text-center">Menyalakan Masa Depan Berkelanjutan</h1>
                <p class="lead opacity-75 mb-4 text-center text-light">GreenSpark menyediakan solusi energi terbarukan dan teknologi pintar. Mulai dari instalasi panel surya hingga manajemen energi berbasis IoT untuk membantu bisnis Anda tumbuh efisien dan ramah lingkungan.</p>
    
                <div class="d-flex gap-2">
                    <a href="{{ route('services') }}" class="btn btn-success">Lihat layanan kami</a>
                </div>
            </div>
        </div>
    </section>

    

    <section class="section-curved bg-white text-dark py-5">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="{{ asset('images/tim-discussion.jpg') }}" alt="Tim GreenSpark" class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover" style="max-height: 480px;">

                        <div class="position-absolute bottom-0 end-0 m-3 m-md-4 bg-warning-subtle text-dark p-3 p-md-4 rounded-4 shadow border border-warning-subtle" style="max-width: 200px;">
                            <h2 class="fw-bold mb-0 text-success">12+</h2>
                            <p class="small text-muted mb-0 fw-semibold">tahun mendampingi bisnis</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="bg-warning d-inline-block" style="width: 20px; height: 2px;"></span>
                        <span class="text-uppercase fw-bold text-muted small tracking-wider">TENTANG KAMI</span>
                    </div>

                    <h2 class="display-6 fw-bold mb-4 text-dark" style="line-height: 1.3;">
                        Keahlian yang kuat, pendekatan yang tetap manusiawi.
                    </h2>

                    <p class="text-secondary lead fs-6 mb-4" style="line-height: 1.7;">
                        GreenSpark adalah mitra jasa profesional yang menggabungkan wawasan strategis, pengalaman lintas industri, dan kolaborasi dekat. Kami hadir bukan dengan jawaban generik, tetapi solusi energi yang sesuai konteks Anda.
                    </p>

                    <hr class="my-4 text-muted opacity-25">

                    <div class="row g-2 mb-4 text-secondary small fw-medium">
                        <div class="col-auto me-3">
                            <i class="bi bi-check2 text-success me-1 fs-5"></i> Berbasis data
                        </div>
                        <div class="col-auto me-3">
                            <i class="bi bi-check2 text-success me-1 fs-5"></i> Kolaboratif
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-check2 text-success me-1 fs-5"></i> Berorientasi hasil
                        </div>
                    </div>

                    <a href="{{ route('about') }}" class="btn btn-outline-dark rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2 hover-btn">Kenali Kami</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark text-dark text-center">
        <div class="container py-4 text-center">
            <h2 class="fw-bold mb-4 text-white">Layanan Unggulan</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card bg-dark text-white p-3 border-secondary h-100 hover-lift">
                        <div class="card-body">
                            <h3 class="card-title fw-bold text-success">Konsultasi & Perencanaan Energi</h3>
                            <p class="card-text opacity-75">Membantu klien menghitung kebutuhan listrik, ROI, dan desain sistem panel surya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-dark text-white p-3 border-secondary h-100 hover-lift">
                        <div class="card-body">
                            <h3 class="card-title fw-bold text-success">Maintenance & Monitoring</h3>
                            <p class="card-text opacity-75">Jasa perawatan berkala, pembersihan panel, dan pengecekan performa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-dark text-white p-3 border-secondary h-100 hover-lift">
                        <div class="card-body">
                            <h3 class="card-title fw-bold text-success">Green Building Solutions</h3>
                            <p class="card-text opacity-75">Paket efisiensi energi lain: lampu hemat energi, sistem pendingin ramah lingkungan.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="text-white py-5" style="background-color: #176B87;">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <span class="bg-warning d-inline-block" style="width: 20px; height: 2px;"></span>
                    <span class="text-uppercase fw-bold text-white small tracking-wider">CARA KAMI BEKERJA</span>
                </div>

                <div class="col-lg-6">
                    <h2 class="display-6 fw-bold mb-4 text-white" style="line-height: 1.3;">
                        Terstruktur, transparan, dan selalu bersama Anda.
                    </h2>
                </div>

                <div class="col-lg-4 offset-lg-2">
                    <p class="text-white lead fs-6 mb-4 align-items-center" style="line-height: 1.7;">
                        Proses sederhana yang menjaga momentum sekaligus memberi ruang untuk belajar dan beradaptasi.
                    </p>
                </div>
            </div>

            <hr class="my-4 text-muted opacity-25">

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <span class="text-warning fw-semibold small d-block mb-2">01</span>
                    <h3 class="fw-bold text-white h5 mb-2">Memahami</h3>
                    <p class="text-white small mb-0">
                        Kami mendengar tujuan, tantangan, dan konteks bisnis Anda.
                    </p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <span class="text-warning fw-semibold small d-block mb-2">02</span>
                    <h3 class="fw-bold text-white h5 mb-2">Merancang</h3>
                    <p class="text-white small mb-0">
                        Kami menyusun solusi praktis dengan indikator keberhasilan yang jelas.
                    </p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <span class="text-warning fw-semibold small d-block mb-2">03</span>
                    <h3 class="fw-bold text-white h5 mb-2">Menjalankan</h3>
                    <p class="text-white small mb-0">
                        Tim gabungan bekerja cepat, transparan, dan terukur.                  
                    </p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <span class="text-warning fw-semibold small d-block mb-2">04</span>
                    <h3 class="fw-bold text-white h5 mb-2">Menguatkan</h3>
                    <p class="text-white small mb-0">
                        Kami memastikan perubahan bertahan melalui transfer kapabilitas.
                    </p>
                </div>
            </div>
        </div>

    </section>

    <section class="py-5 bg-white text-dark text-center">
        <div class="container">
            <h2 class="fw-bold mb-3 text-dark">Siap Bertransisi ke Energi Hijau?</h2>
            <p class="lead mb-4">Konsultasikan kebutuhan energi perusahaan Anda bersama ahli kami.</p>
            <a href="{{ route('contact') }}" class="btn btn-success btn-lg">Hubungi Kami Hari Ini</a>
        </div>
    </section>
@endsection