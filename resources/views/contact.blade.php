@extends('layouts.app')
@section('title', 'Contact Us - GreenSpark')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
@push('styles')
    <style>
        :root {
            --brand-green: #198754;
            --brand-dark: #0f5132;
        }

        .hero-banner {
            background-image: url('{{ asset("images/banner-contact.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 80vh;
        }

        .hero-contact {
            background: linear-gradient(180deg, rgba(25, 135, 84, 0.15) 0%, rgba(33, 37, 41, 0) 100%);
        }

        .contact-card-dark {
            background-color: #1a231e !important;
            border: 1px solid rgba(32, 201, 151, 0.2) !important;
            color: #ffffff;
        }

        .contact-card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .form-control {
            background-color: #121714 !important;
            border: 1px solid #2d3831 !important;
            color: #ffffff;
            padding: 0.75rem 1rem;
        }

        .form-control:focus {
            border-color: #20c997 !important;
            box-shadow: 0 0 0 0.25rem rgba(32, 201, 151, 0.25) !important;
        }

        .form-control::placeholder {
            color: #6c757d;
        }

        .btn-brand {
            background-color: var(--brand-green);
            color: #fff;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .btn-brand:hover {
            background-color: var(--brand-dark);
            color: #fff;
            transform: translateY(-2px);
        }

        .icon-box {
            width: 48px;
            height: 48px;
            background-color: rgba(32, 201, 151, 0.12);
            color: #20c997;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
        }
    </style>
@endpush

@section('content')
    
    <section class="hero-contact text-white py-5 text-center">
        <div class="container py-4">
            <h1 class="fw-bold display-5">Hubungi GreenSpark</h1>
            <p class="lead opacity-75 mb-0">Mari berdiskusi tentang solusi energi terbarukan dan teknologi pintar untuk membantu bisnis Anda.</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">

                <div class="col-lg-4">
                    <div class="card contact-card-dark h-100 p-4">
                        <h4 class="fw-bold text-success mb-4">Informasi Kontak</h4>
                        
                        <div class="d-flex align-items-start mb-4">
                            <div class="icon-box me-3 flex-shrink-0">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Alamat Kantor</h6>
                                <p class="text-light small mb-0">GreenSpark HQ, Jl. Jendral Sudirman No. 45, Jakarta Selatan, 12190</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div class="icon-box me-3 flex-shrink-0">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Email</h6>
                                <p class="text-light small mb-0">contact@greenspark.co.id</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="d-flex align-items-start mb-4">
                            <div class="icon-box me-3 flex-shrink-0">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Telepon</h6>
                                <p class="text-light small mb-0">(021) 555-8901</p>
                            </div>
                        </div>

                        <hr class="my-3 text-light opacity-25">

                        <div>
                            <h6 class="fw-bold mb-2"><i class="bi bi-clock me-2 text-success"></i>Jam Operasional</h6>
                            <p class="text-light small mb-0">Senin - Jumat: 08.00 - 17.00 WIB</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card contact-card-dark p-4 p-md-5">
                        <h3 class="fw-bold text-success mb-2">Kirim Pesan</h3>
                        <p class="text-light mb-4">Isi formulir di bawah ini dan tim GreenSpark akan menghubungi Anda kembali segera.</p>

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mb-4" role="alert">
                                <i class="bi bi-check-circle-fill me-2 fs-5"></i>
                                <div>{{ session('success') }}</div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf

                            <div class="row g-3">
                                
                                <div class="col-md-6">
                                    <label for="name" class="form-label fw-semibold">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" 
                                           class="form-control form-control-lg @error('name') is-invalid @enderror" 
                                           id="name" 
                                           name="name" 
                                           value="{{ old('name') }}" 
                                           placeholder="Contoh: Budi Santoso" 
                                           required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                
                                <div class="col-md-6">
                                    <label for="email" class="form-label fw-semibold">Alamat Email <span class="text-danger">*</span></label>
                                    <input type="email" 
                                           class="form-control form-control-lg @error('email') is-invalid @enderror" 
                                           id="email" 
                                           name="email" 
                                           value="{{ old('email') }}" 
                                           placeholder="nama@perusahaan.com" 
                                           required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                
                                <div class="col-12">
                                    <label for="message" class="form-label fw-semibold">Pesan <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" 
                                              id="message" 
                                              name="message" 
                                              rows="5" 
                                              placeholder="Tuliskan pertanyaan atau kebutuhan layanan Anda..." 
                                              required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-brand w-100 fs-5">
                                        <i class="bi bi-send-fill me-2"></i>Kirim Pesan
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

    
@endsection