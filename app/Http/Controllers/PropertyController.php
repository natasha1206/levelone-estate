<?php

namespace App\Http\Controllers;

use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::where('is_active', true)
            ->orderBy('order', 'asc')
            ->paginate(9);
        
        $featured = Property::where('is_active', true)
            ->where('is_featured', true)
            ->orderBy('order', 'asc')
            ->take(3)
            ->get();
        
        return view('properties.index', compact('properties', 'featured'));
    }

    public function show($slug)
    {
        $property = Property::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();
        
        return view('properties.show', compact('property'));
    }
}