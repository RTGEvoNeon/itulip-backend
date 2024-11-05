@extends('layouts.app') <!-- Подключаем основной шаблон -->

@section('content')
<div>
    <h1>Сорта</h1>

    <!-- Кнопка добавления сорта -->
    <div style="margin-bottom: 20px;">
        <a href="{{ route('sorts.create') }}" style="text-decoration: none;">
            <button style="padding: 10px 15px; font-size: 16px; cursor: pointer;">Добавить сорт</button>
        </a>
    </div>

    <table border="1" cellpadding="5" cellspacing="0" style="width: 100%; text-align: left;">
        <thead>
            <tr>
                <th>Название сорта</th>
                <th>Остаток</th>
                <th>Заказано</th>
                <th>Посажено</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sorts as $sort) <!-- Перебираем массив сортов -->
            <tr>
                <td>{{ $sort->title }}</td> <!-- Название сорта -->
                <td>{{ $sort->collected }}</td> <!-- Остаток -->
                <td>{{ $sort->ordered }}</td> <!-- Заказано -->
                <td>{{ $sort->planted }}</td> <!-- Посажено -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
