<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şifre Değiştir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: #f4f4f9;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background: linear-gradient(to right, #43cea2, #185a9d);
            color: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .navbar .navbar-brand {
            color: #fff;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            height: 50px;
            width: auto;
            margin-right: 10px;
            display: inline-block;
        }

        .navbar-nav .nav-link {
            color: #fff;
            transition: background 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .dropdown-menu {
            background: linear-gradient(to right, #43cea2, #185a9d);
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            border: none;
        }

        .dropdown-item {
            color: #fff;
            transition: background 0.3s ease;
        }

        .dropdown-item:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .dropdown-divider {
            border-color: rgba(255, 255, 255, 0.5);
        }

        .form-container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
            margin: 50px auto;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 1.8rem;
            color: #333;
        }

        .form-container p {
            margin-bottom: 20px;
            font-size: 0.9rem;
            color: #666;
        }

        .form-container .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-container .form-group label {
            display: block;
            font-size: 0.9rem;
            margin-bottom: 5px;
            color: #333;
        }

        .form-container .form-group input {
            width: 100%;
            padding: 10px 15px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        .form-container .form-group input:focus {
            border-color: #43cea2;
            outline: none;
            box-shadow: 0 0 5px rgba(67, 206, 162, 0.3);
        }

        .form-container button {
            background: #43cea2;
            color: #fff;
            border: none;
            padding: 10px 15px;
            width: 100%;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .form-container button:hover {
            background: #185a9d;
        }

        .form-container .feedback {
            margin-top: 10px;
            font-size: 0.9rem;
            color: #43cea2;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="securityDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Güvenlik
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="securityDropdown">
                            <li><a class="dropdown-item" href="{{ route('password.change') }}">Şifre Değiştir</a></li>
                            <li><a class="dropdown-item" href="/login">Çıkış</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="personnelDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Personel İşleri
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="personnelDropdown">
                            <li><a class="dropdown-item" href="#">Kullanıcı Listesi</a></li>
                            <li><a class="dropdown-item" href="#">Kullanıcı Ekle</a></li>
                            <li><a class="dropdown-item" href="#">Görev Listesi</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="form-container">
        <h2>Şifre Değiştir</h2>
        <p>Lütfen mevcut ve yeni şifrenizi giriniz.</p>

        <!-- Hata ve Başarı Mesajlarını Göster -->
        @if(session('success'))
            <div class="feedback">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="feedback" style="color: red;">
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        <!-- Form Başlangıcı -->
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="current_password">Mevcut Şifre</label>
                <input type="password" id="current_password" name="current_password" placeholder="Mevcut şifrenizi girin" required>
            </div>
            <div class="form-group">
                <label for="new_password">Yeni Şifre</label>
                <input type="password" id="new_password" name="new_password" placeholder="Yeni şifrenizi girin" required>
            </div>
            <div class="form-group">
                <label for="new_password_confirmation">Yeni Şifre (Tekrar)</label>
                <input type="password" id="new_password_confirmation" name="new_password_confirmation" placeholder="Yeni şifreyi tekrar girin" required>
            </div>
            <button type="submit">Şifreyi Güncelle</button>
        </form>
    </div>
</body>
</html>
