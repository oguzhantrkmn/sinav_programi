<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sınav Takip Programı - Giriş</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('images/background.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100vh;
            padding: 0 10%;
            position: relative;
            z-index: 2;
        }

        .brand-section {
            color: #fff;
            animation: fadeIn 2s ease-in-out;
            text-align: left;
            max-width: 400px;
        }

        .brand-section img {
            width: 200px;
            margin-bottom: 20px;
        }

        .brand-section h1 {
            font-size: 2.5rem;
            margin: 0;
            line-height: 1.2;
        }

        .brand-section p {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        .login-box {
            background: linear-gradient(to right, #43cea2, #185a9d);
            color: #fff;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            animation: slideIn 1.5s ease-out;
            width: 400px;
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8rem;
            color: #fff;
            letter-spacing: 1px;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-control {
            padding: 15px 20px 15px 40px;
            width: 85%;
            border: none;
            border-radius: 8px;
            background: #ffffff;
            color: #333;
            font-size: 1rem;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(67, 206, 162, 0.8);
            transform: scale(1.02);
        }

        .form-control::placeholder {
            color: #aaa;
            font-style: italic;
        }

        .form-icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            font-size: 1.2rem;
            color: #43cea2;
        }

        .btn {
            background: #185a9d;
            border: none;
            padding: 15px;
            width: 100%;
            font-size: 1.2rem;
            border-radius: 8px;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #43cea2;
        }

        .footer {
            text-align: center;
            margin-top: 15px;
            color: #ccc;
            font-size: 0.9rem;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(100%);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="container">
        <!-- Left Brand Section -->
        <div class="brand-section">
            <!-- <img src="{{ asset('images/logo.png') }}" alt="Logo"> -->
            <h1>Zeymus Akademi</h1>
            <p>Geleceğe Teknolojiyle Hazırlanın</p>
        </div>
        <!-- Right Login Box -->
        <div class="login-box">
            <h2>Sınav Takip Programı</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <span class="form-icon">📧</span>
                    <input type="email" name="email" id="email" class="form-control" placeholder="E-Posta Adresi" required>
                </div>
                <div class="form-group">
                    <span class="form-icon">🔒</span>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Şifre" required>
                </div>
                <button type="submit" class="btn">Sisteme Giriş</button>
            </form>
            <div class="footer">
                <p>&copy; 2024 Zeymus Teknoloji. Tüm hakları saklıdır.</p>
            </div>
        </div>
    </div>
</body>
</html>
