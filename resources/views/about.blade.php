@extends('layouts.app')

@section('title', 'About Us - GreenSpark')

@push('styles')
    <style>
        .hero-banner {
            background-image: url('{{ asset("images/GreenSpark-model.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 80vh;
        }

        .hero-about {
            background: linear-gradient(180deg, rgba(25, 135, 84, 0.15) 0%, rgba(33, 37, 41, 0) 100%);
        }

        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.15) !important;
        }

        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.5) !important;
        }

        .card-vision {
            background: linear-gradient(135deg, #198754 0%, #146c43 100%);
        }
    </style>
@endpush

@section('content')
    <section class="hero-about py-5 text-white text-center">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <span class="badge bg-success-subtle text-success border border-success px-3 py-2 rounded-pill mb-3">
                        TENTANG GREENSPARK
                    </span>
                    <h1 class="display-4 fw-bold mb-3">Mendorong Transisi Energi Hijau</h1>
                    <p class="lead opacity-75 fs-5" style="line-height: 1.8;">
                        GreenSpark adalah perusahaan yang berfokus pada instalasi, manajemen energi cerdas, serta integrasi teknologi IoT untuk monitoring dan efisiensi. Dengan tim profesional yang berpengalaman, kami membantu bisnis dan rumah tangga beralih ke energi bersih yang hemat biaya dan ramah lingkungan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container text-center py-4">
            <h2 class="text-white fw-bold mb-5">GreenSpark Principles</h2>
            <div class="row g-5 justify-content-between">
                <div class="col-md-5">
                    <div class="card card-vision text-white p-4 p-md-5 border-0 rounded-4 shadow-lg hover-lift">
                        <div class="card-body text-center">
                            <h2 class="fw-bold mb-3">Berdaya dengan Energi Bersih</h2>
                            <p class="fs-5 opacity-90 mb-0" style="max-width: 750px; margin: 0 auto; line-height: 1.8;">
                                Kami percaya energi terbarukan adalah fondasi masa depan. Setiap panel surya yang kami pasang bukan sekadar teknologi, tetapi langkah nyata menuju dunia yang lebih hijau.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card card-vision text-white p-4 p-md-5 border-0 rounded-4 shadow-lg hover-lift">
                        <div class="card-body text-center">
                            <h2 class="fw-bold mb-3">Teknologi untuk Kehidupan</h2>
                            <p class="fs-5 opacity-90 mb-0" style="max-width: 750px; margin: 0 auto; line-height: 1.8;">
                                IoT dan sistem pintar bukan hanya perangkat, melainkan cara kami membantu Anda mengelola energi dengan lebih cerdas, efisien, dan transparan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card card-vision text-white p-4 p-md-5 border-0 rounded-4 shadow-lg hover-lift">
                        <div class="card-body text-center">
                            <h2 class="fw-bold mb-3">Ramah Lingkungan, Ramah Bisnis</h2>
                            <p class="fs-5 opacity-90 mb-0" style="max-width: 750px; margin: 0 auto; line-height: 1.8;">
                                Solusi kami dirancang agar bisnis Anda tumbuh tanpa mengorbankan bumi. Efisiensi energi berarti biaya lebih rendah dan dampak lingkungan lebih kecil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card card-vision text-white p-4 p-md-5 border-0 rounded-4 shadow-lg hover-lift">
                        <div class="card-body text-center">
                            <h2 class="fw-bold mb-3">Kolaborasi Adalah Kekuatan</h2>
                            <p class="fs-5 opacity-90 mb-0" style="max-width: 750px; margin: 0 auto; line-height: 1.8;">
                                Kami bekerja bersama klien, komunitas, dan mitra untuk menciptakan solusi yang relevan. Keberlanjutan hanya bisa dicapai dengan kerja sama.
                            </p>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>
@endsection