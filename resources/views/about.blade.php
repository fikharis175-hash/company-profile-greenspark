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

    <section class="py-5 bg-dark text-white">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="badge bg-success-subtle text-success border border-success px-3 py-2 rounded-pill mb-2">Prinsip Kami</span>
                <h2 class="display-6 fw-bold">Prinsip GreenSpark</h2>
                <p class="text-secondary">Prinsip yang menjadi fondasi dalam setiap solusi yang kami hadirkan.</p>
            </div>

            <div class="row g-4">

                <div class="col-md-6">
                    <div class="card h-100 bg-warning-subtle border-secondary rounded-4 p-4 hover-lift">
                        <div class="card-body p-2">
                            <h3 class="fw-bold text-dark mb-3">Berdaya dengan Energi Bersih</h3>
                            <p class="text-secondary mb-0" style="line-height: 1.7;">
                                Kami percaya energi terbarukan adalah fondasi masa depan. Setiap panel surya yang kami pasang bukan sekadar teknologi, tetapi langkah nyata menuju dunia yang lebih hijau.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 bg-success-subtle border-secondary rounded-4 p-4 hover-lift">
                        <div class="card-body p-2">
                            <h3 class="fw-bold text-dark mb-3">Teknologi untuk Kehidupan</h3>
                            <p class="text-secondary mb-0" style="line-height: 1.7;">
                                IoT dan sistem pintar bukan hanya perangkat, melainkan cara kami membantu Anda mengelola energi dengan lebih cerdas, efisien, dan transparan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 bg-danger-subtle border-secondary rounded-4 p-4 hover-lift">
                        <div class="card-body p-2">
                            <h3 class="fw-bold text-dark mb-3">Ramah Lingkungan, Ramah Bisnis</h3>
                            <p class="text-secondary mb-0" style="line-height: 1.7;">
                                Solusi kami dirancang agar bisnis Anda tumbuh tanpa mengorbankan bumi. Efisiensi energi berarti biaya lebih rendah dan dampak lingkungan lebih kecil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 bg-info-subtle border-secondary rounded-4 p-4 hover-lift">
                        <div class="card-body p-2">
                            <h3 class="fw-bold text-dark mb-3">Kolaborasi Adalah Kekuatan</h3>
                            <p class="text-secondary mb-0" style="line-height: 1.7;">
                                Kami bekerja bersama klien, komunitas, dan mitra untuk menciptakan solusi yang relevan. Keberlanjutan hanya bisa dicapai dengan kerja sama.
                            </p>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>
@endsection