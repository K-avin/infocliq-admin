<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Employee::factory(10)->create();
        DB::table('employee')->insert([
            'first_name'    => 'Kabilraj',
            'last_name'     => 'Selvanantham',
            'nic_number'    => '982580978V',
            'mobile_number' => '+94776213839',
            'provence'      => 'Northen',
            'district'      => 'Vavuniya',
            'city'          => 'Puliyankulam',
            'address'       => 'A9 road no:23',
            'gender'        => 'Male',
            'image'         => 'imgEmployee/JXLKigEP_400x400.jpg',
            'status'        => 'Single',
            'date_of_birth' => '14-09-1998',
            'designation'      => 'Software Developer',
            'department'    => 'IT',
            'employment_status' => 'Full time',
            'start_date'    => '15-09-2020',
            'salary'        => '40.000',
            'bank'          => 'Comercial',
            'branch'        => 'vavuniya main branch',
            'account_name'  => 'Kabilraj Selvanantham',
            'account_number'=> '00808787',
        ]);
    }
}
