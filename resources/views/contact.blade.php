<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - GreenSpark</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --brand-green: #198754;
            --brand-dark: #0f5132;
        }

        .bg-brand-gradient {
            background: linear-gradient(135deg, var(--brand-dark) 0%, var(--brand-green) 100%);
        }

        .contact-card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .form-control:focus {
            border-color: var(--brand-green);
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
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
            background-color: rgba(25, 135, 84, 0.1);
            color: var(--brand-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
        }
    </style>
</head>
<body class="bg-light">

    <section class="bg-brand-gradient text-white py-5 text-center">
        <div class="container py-4">
            <h1 class="fw-bold display-5">Hubungi GreenSpark</h1>
            <p class="lead opacity-75 mb-0">Mari berdiskusi tentang solusi energi terbarukan dan teknologi pintar untuk membantu bisnis Anda.</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">

                <div class="col-lg-4">
                    <div class="card contact-card h-100 p-4">
                        <h4 class="fw-bold text-success mb-4">Informasi Kontak</h4>
                        
                        <div class="d-flex align-items-start mb-4">
                            <div class="icon-box me-3 flex-shrink-0">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Alamat Kantor</h6>
                                <p class="text-muted small mb-0">GreenSpark HQ, Jl. Jendral Sudirman No. 45, Jakarta Selatan, 12190</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div class="icon-box me-3 flex-shrink-0">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Email</h6>
                                <p class="text-muted small mb-0">contact@greenspark.co.id</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="d-flex align-items-start mb-4">
                            <div class="icon-box me-3 flex-shrink-0">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Telepon</h6>
                                <p class="text-muted small mb-0">(021) 555-8901</p>
                            </div>
                        </div>

                        <hr class="my-3 text-muted opacity-25">

                        <div>
                            <h6 class="fw-bold mb-2"><i class="bi bi-clock me-2 text-success"></i>Jam Operasional</h6>
                            <p class="text-muted small mb-0">Senin - Jumat: 08.00 - 17.00 WIB</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card contact-card p-4 p-md-5">
                        <h3 class="fw-bold mb-2">Kirim Pesan</h3>
                        <p class="text-muted mb-4">Isi formulir di bawah ini dan tim GreenSpark akan menghubungi Anda kembali segera.</p>

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

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>
</html>