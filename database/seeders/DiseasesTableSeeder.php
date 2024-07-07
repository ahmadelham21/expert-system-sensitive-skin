<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Disease;

class DiseasesTableSeeder extends Seeder
{
    public function run()
    {
        $diseases = [
            [
                'code' => 'P01',
                'name' => 'Iritasi',
                'description' => 'Iritasi merupakan suatu peradangan atau reaksi menyakitkan terhadap alergi atau kerusakan lapisan sel. Penyebabnya bisa karena bahan kimia dalam produk kecantikan tertentu, kandungan yang bersifat iritan, sinar matahari, polusi udara serta debu.',
                'solution' => 'Gunakan pelembab wajah yang mengandung panthenol dan ceramides untuk menenangkan serta memperbaiki kulit yang iritasi dan gunakan krim atau lotion calamine untuk meredakan rasa gatal. Usahakan untuk tidak menggaruk kulit yang teriritasi agar tidak bertambah parah. Pilihlah produk kecantikan yang bebas pewangi, bebas paraben, yang berlabel hipoalergenik dan pilih pembersih wajah yang berbahan lembut dan alami. Selalu gunakan sunscreen setiap hari di pagi dan siang hari dengan minimal SPF 30 agar kulit terlindung dari paparan sinar matahari.',
                'image' => 'images/Gambar Iritasi.jpeg'
            ],
            [
                'code' => 'P02',
                'name' => 'Bruntusan',
                'description' => 'Bruntusan merupakan keadaan penyakit kulit yang permukaan kulitnya terasa kasar dan tidak rata dan jika diraba, bruntusan terasa seperti bintik-bintik kecil yang menonjol pada kulit. Penyebabnya bisa di sebabkan oleh banyak hal seperti komedo, wajah sensitif, dermatitis, millia, dan keratosis seboroik. Bruntusan dapat muncul pada bagian tubuh manapun selama bagian tubuh masih tertutupi kulit.',
                'solution' => 'Selalu menjaga kebersihan kulit wajah dengan mencuci muka 2 kali sehari menggunakan pembersih wajah yang berbahan lembut dan alami. Rutin melakukan eksfoliasi seminggu sekali atau dua kali untuk mengangkat sel kulit mati dan setelah eksfoliasi jangan lupa menggunakan pelembab. Batasi konsumsi makanan yang mengandung karbohidrat tinggi dan gula tambahan. Hindari stres berlebih.',
                'image' => 'images/Gambar Bruntusan.jpeg'        
            ],
            [
                'code' => 'P03',
                'name' => 'Ruam kulit',
                'description' => 'Ruam kulit adalah perubahan pada kulit berupa bercak kemerahan, bintil, atau luka lepuh akibat peradangan. Area kulit yang mengalami ruam juga bisa terasa gatal, mengelupas, atau seperti terbakar. Ruam kulit dapat disebabkan oleh gigitan serangga, penyakit, reaksi alergi, atau efek samping obat dan produk perawatan kulit.',
                'solution' => 'Hindari melakukan aktivitas yang banyak mengeluarkan keringat dan hindari terkena bahan-bahan yang dapat menyebabkan alergi, seperti sabun, kosmetik, pewangi, perhiasan, dan tanaman. Segera bersihkan kulit setelah terkena bahan-bahan penyebab alergi. Gunakan pelembab yang mengandung bahan calming seperti centela asiatica, panthenol, dan allantoin untuk meredakan kemerahan serta menenangkan kulit. Gunakan tabir surya atau sunscreen sebelum beraktifitas minimal spf 30.',
                'image' => 'images/Gambar Ruam kulit.jpeg'
            ],
            [
                'code' => 'P04',
                'name' => 'Dehidrasi kulit',
                'description' => 'Kulit dehidrasi merupakan kondisi di mana kulit tidak mendapatkan asupan cairan yang cukup. Penyebabnya bisa bermacam-macam, mulai dari kurang minum, gaya hidup yang tidak sehat, hingga pengaruh dari lingkungan sekitar. Salah satu ciri kulit dehidrasi yang paling umum adalah kulit terasa tertarik seusai mandi.',
                'solution' => 'Karena kulit dehidrasi tidak cukup mendapatkan asupan cairan yang cukup oleh sebab itu, penuhi kebutuhan cairan dengan minum air putih 1,5 hingga 2 liter per harinya. Gunakan sabun wajah yang berbahan ringan dan lembut, pastikan sabun tidak mengandung alkohol serta pewangi agar mengurangi rasa tertarik saat mencuci wajah. Selalu gunakan pelembab wajah 2 kali sehari dan gunakan sunscreen sebelum melakukan aktivitas outdoor minimal spf 30.',
                'image' => 'images/Gambar dehidrasi kulit.jpeg'
            ]
        ];

        foreach ($diseases as $disease) {
            Disease::create($disease);
        }
    }
}