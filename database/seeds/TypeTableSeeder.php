<?php

use Illuminate\Database\Seeder;
use App\Type;
class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typemobil')->delete();

        Type::create(array(
          'nama'=>'Toyota Avanza',
          'jenis'=>'Mobil Keluarga',
          'kursi'=>8,
          'tarif'=>250000,
          'pic'=>'avanza.jpg'
        ));

        Type::create(array(
          'nama'=>'Suzuki Ertiga',
          'jenis'=>'Mobil Keluarga',
          'kursi'=>8,
          'tarif'=>230000,
          'pic'=>'ertiga.jpg'
        ));

        Type::create(array(
          'nama'=>'Daihatsu Xenia',
          'jenis'=>'Mobil Keluarga',
          'kursi'=>8,
          'tarif'=>200000,
          'pic'=>'xenia.jpg'
        ));

        Type::create(array(
          'nama'=>'Toyota Kijang Innova',
          'jenis'=>'Mobil Keluarga',
          'kursi'=>8,
          'tarif'=>500000,
          'pic'=>'innova.jpg'
        ));

        Type::create(array(
          'nama'=>'Honda Civic',
          'jenis'=>'Sedan',
          'kursi'=>5,
          'tarif'=>600000,
          'pic'=>'civic.jpg'
        ));
    }
}
