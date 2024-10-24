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
        <div>
            <label for="image">Изображение:</label>
            <input type="file" name="image" id="image">
        </div>
        <div>
            <label for="price">Цена:</label>
            <input type="number" name="price" id="price" step="0.01">
        </div>
        <div>
            <label for="color">Цвет:</label>
            <input type="text" name="color" id="color">
        </div>
        <button type="submit">Добавить сорт</button>
    </form>
    <a href="{{ route('sorts.index') }}">Назад к списку сортов</a>
</body>

</html>