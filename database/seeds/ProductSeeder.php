<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $arrNama = ['fentanil', 'hidromorfon', 'kodein', 'morfin', 'oksikodon', 'petidin', 'sufentanil', 'asam mefenamat', 
        'ibuprofen*', 'ketoprofen', 'ketorolak', 'metamizol', 'natrium diklofenak', 'parasetamol', 'alopurinol', 'kolkisin',
        'probenesid', 'amitriptilin', 'gabapentin', 'karbamazepin', 'bupivakain', 'bupivakain heavy', 'etil klorida', 'lidokain',
        'ropivakain', 'deksmedetomidin', 'desfluran', 'halotan', 'isofluran', 'ketamin', 'nitrogen oksida', 'oksigen', 'propofol'];
        // $arrDes = [''];
        $counter = 0;
        for ($i=1; $i <= 11; $i++) { 
            for ($j=0; $j < 3; $j++) { 
                DB::table('product')->insert([
                    'nama' => $arrNama[$counter],
                    'deskripsi' => Str::random(50),
                    'categori_id' => $i,
                ]);
                $counter += 1;
            }
        }
    }
}
