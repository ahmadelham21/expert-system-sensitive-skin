<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Symptom;

class SymptomsTableSeeder extends Seeder
{
    public function run()
    {
        $symptoms = [
            ['code' => 'G01', 'name' => 'Kulit terasa perih', 'question' => 'Apakah kulit Anda terasa perih?'],
            ['code' => 'G02', 'name' => 'Kulit terlihat tipis', 'question' => 'Apakah kulit Anda terlihat tipis?'],
            ['code' => 'G03', 'name' => 'Kulit mudah merah', 'question' => 'Apakah kulit Anda mudah merah?'],
            ['code' => 'G04', 'name' => 'Kulit terasa gatal', 'question' => 'Apakah kulit Anda terasa gatal?'],
            ['code' => 'G05', 'name' => 'Sebagian kulit terlihat berminyak', 'question' => 'Apakah sebagian kulit Anda terlihat berminyak?'],
            ['code' => 'G06', 'name' => 'Muncul bintik-bintik atau benjolan-benjolan kecil ketika diraba', 'question' => 'Apakah muncul bintik-bintik atau benjolan-benjolan kecil ketika kulit Anda diraba?'],
            ['code' => 'G07', 'name' => 'Sebagian kulit terlihat kering', 'question' => 'Apakah sebagian kulit Anda terlihat kering?'],
            ['code' => 'G08', 'name' => 'Tekstur kulit kasar', 'question' => 'Apakah tekstur kulit Anda kasar?'],
            ['code' => 'G09', 'name' => 'Kulit tampak kerutan', 'question' => 'Apakah kulit Anda tampak kerutan?'],
            ['code' => 'G10', 'name' => 'Kulit tampak kusam', 'question' => 'Apakah kulit Anda tampak kusam?'],
            ['code' => 'G11', 'name' => 'Kulit terasa kencang dan ketarik terutama setelah cuci muka', 'question' => 'Apakah kulit Anda terasa kencang dan ketarik terutama setelah cuci muka?'],
            ['code' => 'G12', 'name' => 'Kulit mudah terkelupas', 'question' => 'Apakah kulit Anda mudah terkelupas?']
        ];

        foreach ($symptoms as $symptom) {
            Symptom::create($symptom);
        }
    }
}
