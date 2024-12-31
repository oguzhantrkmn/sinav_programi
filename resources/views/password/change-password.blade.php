<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şifre Değiştir</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background: #f4f4f9;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
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
