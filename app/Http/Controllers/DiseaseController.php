<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disease;

class DiseaseController extends Controller
{
    public function index()
    {
        $disease = Disease::all();
        return view('disease.index', compact('disease'));
    }

    public function create()
    {
        return view('disease.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:10',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'solution' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        $data = $request->only(['code', 'name', 'description', 'solution']);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        Disease::create($data);

        return redirect()->route('disease.index')
                         ->with('success', 'Disease created successfully.');
    }

    public function show(Disease $disease)
    {
        return view('disease.show', compact('disease'));
    }

    public function edit(Disease $disease)
    {
        return view('disease.edit', compact('disease'));
    }

    public function update(Request $request, Disease $disease)
    {
        $request->validate([
            'code' => 'required|string|max:10',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'solution' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        $data = $request->only(['code', 'name', 'description', 'solution']);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($disease->image) {
                \Storage::disk('public')->delete($disease->image);
            }

            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        $disease->update($data);

        return redirect()->route('disease.index')
                         ->with('success', 'Disease updated successfully.');
    }

    public function destroy(Disease $disease)
    {
        // Hapus gambar jika ada
        if ($disease->image) {
            \Storage::disk('public')->delete($disease->image);
        }

        $disease->delete();

        return redirect()->route('disease.index')
                         ->with('success', 'Disease deleted successfully.');
    }
}