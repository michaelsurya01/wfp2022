<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrCategory = ['Analgesik Narkotik', 'Analgesik Non Narkotik', 'Antipirai', 'Nyeri Neuropatik','Anestetik Lokal'
        , 'Anestetik Umum dan Oksigen', 'Obat untuk Prosedur Pre Operatif', 'Antialergi dan Obat untuk Anafilaksis'
        , 'Khusus', 'Umum', 'Antiepilepsi - Antikonvulsi'];
        //
        foreach ($arrCategory as $data) {
            # code...
            DB::table('categori')->insert([
                'nama' => $data
            ]);
        }
    }
}
