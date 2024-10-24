<?php

namespace App\Http\Controllers;

use App\Models\Sort;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SortController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sorts = Sort::all();
        return view('sorts.index', compact('sorts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sorts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Log::info('Store method called');
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'nullable|numeric|min:0',
            'color' => 'nullable|string',
        ]);

        $sort = new Sort();
        $sort->title = $request->input('title');
        $sort->price = $request->input('price');
        $sort->color = $request->input('color');

        // Обработка загруженного изображения
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public'); // Сохранение в папку public/images
            $sort->image = $path; // Сохранение пути к изображению в базе данных
        }

        $sort->save();
        return redirect()->route('sorts.index')->with('success', 'Сорт успешно добавлен!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $task = Sort::findOrFail($id);
        return view('show', compact('task'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sort $sort)
    {
        return view('sorts.edit', compact('sort'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sort $sort)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'nullable|numeric|min:0',
            'color' => 'nullable|string',
        ]);

        $sort->update($request->all());
        return redirect()->route('sorts.index')->with('success', 'Сорт успешно изменен.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sort $sort)
    {
        $sort->delete();
        return redirect()->route('sorts.index')->with('success', 'Сорт успешно удален.');
    }
}
