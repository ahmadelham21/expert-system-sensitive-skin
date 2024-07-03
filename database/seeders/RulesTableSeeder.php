<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rule;

class RulesTableSeeder extends Seeder
{
    public function run()
    {
        $rules = [
            [
                'conditions' => ['G01', 'G02', 'G03', 'G04', 'G12'],
                'disease_id' => 1
            ],
            [
                'conditions' => ['G08', 'G10', 'G05', 'G06'],
                'disease_id' => 2
            ],
            [
                'conditions' => ['G03', 'G04', 'G07', 'G08'],
                'disease_id' => 3
            ],
            [
                'conditions' => ['G09', 'G10', 'G11', 'G12'],
                'disease_id' => 4
            ]
        ];

        foreach ($rules as $rule) {
            Rule::create($rule);
        }
    }
}
