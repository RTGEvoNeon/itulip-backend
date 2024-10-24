<!-- <!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список сортов</title>
</head>

<body>
    <h1>Список сортов</h1>
    <a href="{{ route('sorts.create') }}">Добавить новый сорт</a>

    @if ($sorts->isEmpty())
    <p>Сортов нет.</p>
    @else
    <ul>
        @foreach ($sorts as $sort)
        <li>
            <h2>{{ $sort->title }}</h2>
            <img src="{{ asset('storage/' . $sort->image) }}" style="width: 70px;" alt="{{ $sort->title }}">


            <p>Цвет: {{ $sort->color }}</p>
            <a href="{{ route('sorts.edit', $sort) }}">Редактировать</a>
            <form action="{{ route('sorts.destroy', $sort) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить</button>
            </form>
        </li>
        <li>
            <p>Цена: {{ $sort->price }}</p>
        </li>
        @endforeach
    </ul>
    @endif
</body>

</html> -->

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список Сортов</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Подключение стилей, если используете CSS -->
</head>

<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Список Сортов</h1>

        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Название</th>
                    <th class="border border-gray-300 px-4 py-2">Цена</th>
                    <th class="border border-gray-300 px-4 py-2">Изображение</th>
                    <th class="border border-gray-300 px-4 py-2">Цвет</th>
                    <th class="border border-gray-300 px-4 py-2">Продано</th>
                    <th class="border border-gray-300 px-4 py-2">Умерло</th>
                    <th class="border border-gray-300 px-4 py-2">Собрано</th>
                    <th class="border border-gray-300 px-4 py-2">Посажено</th>
                    <th class="border border-gray-300 px-4 py-2"></th>
                    <th class="border border-gray-300 px-4 py-2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sorts as $sort)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $sort->title }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $sort->price }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        @if($sort->image)
                        <img src="{{ asset('storage/' . $sort->image) }}" style="width: 50px;" alt="{{ $sort->title }}" class="w-16 h-16 object-cover">
                        @else
                        <span>Нет изображения</span>
                        @endif
                    </td>
                    <td class="border border-gray-300 px-4 py-2">{{ $sort->color }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $sort->sold }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $sort->died }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $sort->collected }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $sort->planted }}</td>
                    <td><a href="{{ route('sorts.edit', $sort) }}">Редактировать</a></td>
                    <td><form action="{{ route('sorts.destroy', $sort) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить</button>
            </form>
            </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('sorts.create') }}">Добавить новый сорт</a>
    </div>
</body>

</html>