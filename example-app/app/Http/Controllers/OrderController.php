<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'total_count' => 'required|numeric|min:0|max:999999.99',
            'price' => 'required|numeric|min:0|max:999.99',
            'total_price' => 'required|numeric|min:0|max:999999.99',
            'prepayment' => 'nullable|numeric|min:0|max:999999.99',
            'date' => 'required|date',
            'total_count_box' => 'required|integer|min:0',
            'box_price' => 'nullable|numeric|min:0|max:999.99',
        ]);

        $client = Client::firstOrCreate(['phone'=> $request->phone], []);

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
