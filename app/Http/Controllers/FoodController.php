<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FoodController
{
    protected $foods;

    public function __construct()
    {
        $this->foods = Cache::remember('foods', 3600, function () {
            return Food::select('id', 'name', 'store_id', 'unit_price', 'desc')->get()->keyBy('id');
        });
    }

    public function index()
    {

    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'unit_price' => 'required|numeric',
            'desc' => 'nullable|string|max:255',
        ]);

        Food::create($request->all());
        Cache::forget('foods');
        return redirect()->route('food', ['id' => $request->input('store_id')])->with('success', 'Store created successfully!');
    }

    public function show(string $id)
    {
        $food = $this->foods->where('store_id', $id);
        return view('food', compact('food'));
    }

    public function edit(string $id)
    {
        $food = $this->foods->get($id);
        return view('edit', compact('food'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'unit_price' => 'required|numeric',
            'desc' => 'nullable|string|max:255',
        ]);
        $food = $this->foods->where('id', $id)->first();

        $food->update($request->all());
        Cache::forget('foods');

        return redirect()->route('food', ['id' => $food->store_id])->with('success', 'Store updated successfully!');
    }
}
