<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class StoreController
{
    protected $stores;
    public function __construct()
    {
        $this->stores = Cache::remember('stores', 3600, function () {
            return Store::all()->keyBy('id');
        });
    }

    public function index()
    {
        $store = $this->stores;

        return view('index', compact('store'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'business_time' => 'required|string',
            'latlng_mask' => 'required|string',
        ]);

        Store::create($request->all());
        Cache::forget('stores');
        return redirect()->route('index')->with('success', 'Store created successfully!');
    }

    public function edit(string $store)
    {
        $store = $this->stores->get($store);
        return view('edit', compact('store'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'business_time' => 'required|string',
            'latlng_mask' => 'required|string',
        ]);
        $store = $this->stores->get($id);
        $store->update($request->all());
        Cache::forget('stores');
        return redirect()->route('index')->with('success', 'Store updated successfully!');
    }
}
