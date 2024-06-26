<?php

namespace App\Http\Controllers;

use App\Models\Symptom;
use Illuminate\Http\Request;

class SymptomController extends Controller
{
    public function index()
    {
        $symptoms = Symptom::all();
        return view('symptoms.index', compact('symptoms'));
    }

    public function create()
    {
        return view('symptoms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:10',
            'name' => 'required|string|max:255',
            'question' => 'required|string',
        ]);

        Symptom::create($request->all());

        return redirect()->route('symptoms.index')
                         ->with('success', 'Symptom created successfully.');
    }

    public function show(Symptom $symptom)
    {
        return view('symptoms.show', compact('symptom'));
    }

    public function edit(Symptom $symptom)
    {
        return view('symptoms.edit', compact('symptom'));
    }

    public function update(Request $request, Symptom $symptom)
    {
        $request->validate([
            'code' => 'required|string|max:10',
            'name' => 'required|string|max:255',
            'question' => 'required|string',
        ]);

        $symptom->update($request->all());

        return redirect()->route('symptoms.index')
                         ->with('success', 'Symptom updated successfully.');
    }

    public function destroy(Symptom $symptom)
    {
        $symptom->delete();

        return redirect()->route('symptoms.index')
                         ->with('success', 'Symptom deleted successfully.');
    }
    public function search(Request $request){
        $search = $request->get('search');
        $symptoms = Symptom::where('name','like','%'.$search.'%')->paginate(5);
        return view('symptoms.index',compact('symptoms'));
    }
}