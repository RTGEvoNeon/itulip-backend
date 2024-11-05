<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить сорт</title>
</head>

<body>
    <h1>Добавить новый сорт</h1>
    <form action="{{ route('sorts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Название:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <button type="submit">Добавить сорт</button>
    </form>
    <a href="{{ route('sorts.index') }}">Назад к списку сортов</a>
</body>

</html>