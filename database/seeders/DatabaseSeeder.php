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
            'email'         =>'kavin@infocliq.com',
            'status'        => 'Single',
            'date_of_birth' => '14-09-1998',
            'designation'   => 'Software Developer',
            'department'    => 'IT',
            'employment_status' => 'Full time',
            'start_date'    => '15-09-2020',
            'salary'        => '35000',
            'bank'          => 'Comercial',
            'branch'        => 'vavuniya main branch',
            'account_name'  => 'Kabilraj Selvanantham',
            'account_number'=> '00808787',
            'created_at' => '2022-01-24 02:35:56',
            'updated_at' => '2022-01-24 02:35:56',
        ]);

        DB::table('users')->insert([
            'name'    => 'Kavin',
            'email'     => 'kavin@infocliq.com',
            'role'    => 'Developer',
            'password' => '12345678',
            'created_at' => '2022-01-24 02:35:56',
            'updated_at' => '2022-01-24 02:35:56',
        ]);

        DB::table('project')->insert([
            'client_name'       => 'Kabilraj',
            'mobile'            => '0776546564',
            'company_name'      => 'infocliq',
            'address'           => 'vavuniya puliyankulam',
            'client_description'=> 'This is kabilraj from vavuniya this project for his own company management purpose.',
            'project_name'      => 'infocliq-admin',
            'due_date'          => '2022-01-30',
            'total_cost'        => '70000',
            'total_hours'       => '4200',
            'status'            => 'pending',
            'doc_link'          => 'https://docs.google.com/spreadsheets/d/1_N0fSaDhgRSqq7qVJgZzpGhjBJ6PVCi9JaY6zYS60pg/edit?usp=sharing',
            'developers'        => json_encode(["Kabilraj", "Thasmilan", "Nithusan"]),
            'project_description'=> 'This project infocliq project management system',
        ]);
    }
}
