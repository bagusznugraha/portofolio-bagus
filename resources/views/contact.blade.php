@extends('layouts.main')

@section('content')
    <div class="bg-white p-5 rounded-3 shadow">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: var(--deep-olive);">Hubungi Saya</h2>
            <p class="text-muted">Silakan tinggalkan pesan atau hubungi saya melalui media sosial di bawah ini</p>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <h4 class="fw-bold mb-4" style="color: var(--sage-green);">Kirim Pesan</h4>
                
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-content form-control" id="name" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="email" placeholder="nama@email.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda di sini..." required></textarea>
                    </div>
                    <button type="button" class="btn text-white w-100" style="background-color: var(--deep-olive);" onclick="alert('Terima kasih! Pesan Anda berhasil dikirim (Simulasi).')">
                        Kirim Pesan
                    </button>
                </form>
            </div>

            <div class="col-md-6 mb-4 ps-md-5">
                <h4 class="fw-bold mb-4" style="color: var(--sage-green);">Info Kontak</h4>
                
                <div class="mb-4">
                    <h5>📍 Alamat</h5>
                    <p class="text-muted">Asahan, Indonesia</p>
                </div>

                <div class="mb-4">
                    <h5>📧 Email Kuliah</h5>
                    <p class="text-muted">bagus.240170117@mhs.unimal.ac.id</p>
                </div>

                <div class="mb-4">
                    <h5>🌐 Media Sosial</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><strong>GitHub:</strong> <a href="#" class="text-decoration-none" style="color: var(--deep-olive);">github.com/baguszaka</a></li>
                        <li class="mb-2"><strong>LinkedIn:</strong> <a href="#" class="text-decoration-none" style="color: var(--deep-olive);">linkedin.com/in/baguszaka</a></li>
                        <li class="mb-2"><strong>Instagram:</strong> <a href="#" class="text-decoration-none" style="color: var(--deep-olive);">@baguszaka_</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection