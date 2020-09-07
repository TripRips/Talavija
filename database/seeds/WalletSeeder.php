<?php

use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->delete();

        DB::table('payments')->insert([
            'id' => 1,
            'tips' => 'Sods',
            'datums' => '9-07-2020',
            'summa' => 9.99,
            'merkis' => 'Salauza soliņu',
            'sanemejs' => 'Jānis Lielais',
        ]);


        DB::table('payments')->insert([
            'id' => 2,
            'tips' => 'Prēmija',
            'datums' => '7-07-2020',
            'summa' => 50,
            'merkis' => 'Labi padarīts darbs',
            'sanemejs' => 'Jānis Lielais',

        ]);
    }
}
