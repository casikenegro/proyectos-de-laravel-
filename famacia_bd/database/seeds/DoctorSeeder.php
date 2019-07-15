<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Doctor;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

 $category_id= DB::table('doctor_categories')->where('categories', 'Ninguno')->value('id');
Doctor::create([
       'name'=> 'Juan',
    'surname'=> 'Vega',
     'cedula'=> 1212313,
    'license'=> 123131,
      'doctor_category_id'=> $category_id,
      'Phone'=> 1331,
  ]);
  }

}
