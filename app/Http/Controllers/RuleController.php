<?php

// app/Http/Controllers/RuleController.php

namespace App\Http\Controllers;

use App\Models\Rule;
use App\Models\Symptom;
use App\Models\Disease;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    public function index()
    {
        $rules = Rule::with('disease')->get();
        return view('rules.index', compact('rules'));
    }

    public function create()
    {
        $symptoms = Symptom::all();
        $diseases = Disease::all();
        return view('rules.create', compact('symptoms', 'diseases'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'conditions' => 'required|array',
            'disease_id' => 'required|exists:diseases,id',
        ]);
        
        $conditions = implode(',', $request->conditions);

        Rule::create([
            'conditions' => json_encode($request->conditions),
            'disease_id' => $request->disease_id,
        ]);

        return redirect()->route('rules.index')->with('success', 'Rule created successfully.');
    }

    public function edit(Rule $rule)
    {
        $symptoms = Symptom::all();
        $diseases = Disease::all();
        return view('rules.edit', compact('rule', 'symptoms', 'diseases'));
    }

    public function update(Request $request, Rule $rule)
    {
        $request->validate([
            'conditions' => 'required|array',
            'disease_id' => 'required|exists:diseases,id',
        ]);

        $rule->update([
            'conditions' => json_encode($request->conditions),
            'disease_id' => $request->disease_id,
        ]);

        return redirect()->route('rules.index')->with('success', 'Rule updated successfully.');
    }

    public function destroy(Rule $rule)
    {
        $rule->delete();
        return redirect()->route('rules.index')->with('success', 'Rule deleted successfully.');
    }
}