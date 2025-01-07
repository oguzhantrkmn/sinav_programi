<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personel Ekle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Yeni Personel Ekle</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('personel.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="isim" class="form-label">İsim</label>
            <input type="text" name="isim" class="form-control" id="isim" required>
        </div>
        <div class="mb-3">
            <label for="soyisim" class="form-label">Soyisim</label>
            <input type="text" name="soyisim" class="form-control" id="soyisim" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="bolum" class="form-label">Bölüm</label>
            <input type="text" name="bolum" class="form-control" id="bolum" required>
        </div>
        <div class="mb-3">
            <label for="sifre" class="form-label">Şifre</label>
            <input type="password" name="sifre" class="form-control" id="sifre" required>
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
</div>
</body>
</html>
