<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platform Yönetimi</title>
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

        .content {
            padding: 20px;
            color: #333;
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
                            <li><a class="dropdown-item" href="/personel/ekle">Kullanıcı Ekle</a></li>
                            <li><a class="dropdown-item" href="#">Görev Listesi</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <h2>Hoş Geldiniz!</h2>
        <p>Burada platform yönetimi ile ilgili içerikler yer alacak.</p>
    </div>
</body>
</html>
