<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symptom;
use App\Models\Rule;
use App\Models\Disease;
use Illuminate\Support\Facades\Log;

class ExpertSystemController extends Controller
{
    public function index()
    {
        $symptoms = Symptom::all();
        return view('expert-system.question', compact('symptoms'));
    }

    public function diagnose(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required|string|min:2',
            'age' => 'required|integer|min:1',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'email' => 'required|email',
        ]);

        $conditions = $request->input('conditions', []);
        $facts = [];

        // Mengumpulkan hanya kondisi yang memiliki nilai "yes"
        foreach ($conditions as $key => $value) {
            if ($value == 'yes') {
                $facts[] = $key;
            }
        }

        $rules = Rule::all();
        $inferences = [];

        $factsSet = collect($facts);

        $newInferenceAdded = true;
        while ($newInferenceAdded) {
            $newInferenceAdded = false;

            foreach ($rules as $rule) {
                // Asumsikan kondisi sudah berupa array
                $ruleConditions = is_string($rule->conditions) ? json_decode($rule->conditions, true) : $rule->conditions;

                if (is_array($ruleConditions)) {
                    $ruleConditions = collect($ruleConditions);

                    if ($factsSet->intersect($ruleConditions)->count() == $ruleConditions->count() && !$factsSet->contains($rule->disease_id)) {
                        $factsSet->push($rule->disease_id);
                        $inferences[] = $rule->disease_id;
                        $newInferenceAdded = true;
                    }
                } else {
                    // Jika $ruleConditions bukan array, log atau tangani error
                    Log::error('Invalid rule conditions format for rule ID: ' . $rule->id);
                }
            }
        }

        // Mengambil data penyakit berdasarkan id yang terinferensi
        $diseases = Disease::whereIn('id', $inferences)->get();

        return view('expert-system.result', [
            'diseases' => $diseases,
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
        ]);
    }
}