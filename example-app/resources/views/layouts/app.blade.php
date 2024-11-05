<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сорта</title>
    <link rel="stylesheet" href="styles.css"> <!-- Подключите свой CSS-файл, если нужно -->
</head>
<body>
    <header>
        <h1>Добро пожаловать в систему учета сортов</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Главная</a></li>
                <li><a href="{{ url('/sorts') }}">Сорта</a></li>
                <li><a href="{{ url('/clients') }}">Клиенты</a></li>
                <li><a href="{{ url('/orders') }}">Заказы</a></li>
                <!-- Добавьте другие ссылки по необходимости -->
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') <!-- Здесь будет вставляться контент -->
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Ваша компания</p>
    </footer>
</body>
</html>
