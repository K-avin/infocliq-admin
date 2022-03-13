<?php

namespace Database\Seeders;
use DB;
use Illuminate\Support\Facades\Hash;

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
            'designation'   => 'Software Developer',
            'department'    => 'IT',
            'employment_status' => 'Full time',
            'start_date'    => '15-09-2020',
            'salary'        => '35000',
            'bank'          => 'Comercial',
            'branch'        => 'vavuniya main branch',
            'account_name'  => 'Kabilraj Selvanantham',
            'account_number'=> '00808787',
            'role'          => 'developer',
            'created_at' => '2022-01-24 02:35:56',
            'updated_at' => '2022-01-24 02:35:56',
        ]);

        DB::table('users')->insert(
            [
            'employee'    => '982580978V',
            'name'    => 'Kavin',
            'email'     => 'kavin@infocliq.com',
            'role'    => 'developer',
            'password' => Hash::make('12345678'),
            'created_at' => '2022-01-24 02:35:56',
            'updated_at' => '2022-01-24 02:35:56',
            ],
            [
            'employee'    => '982580979V',
            'name'    => 'Admin',
            'email'     => 'admin@infocliq.com',
            'role'    => 'hr',
            'password' => Hash::make('12345678'),
            'created_at' => '2022-01-24 02:35:56',
            'updated_at' => '2022-01-24 02:35:56',
            ]
        );

        DB::table('project')->insert(
            [
            'client_name'       => 'Kabilraj',
            'mobile'            => '0776546564',
            'company_name'      => 'infocliq',
            'address'           => 'vavuniya puliyankulam',
            'client_description'=> 'This is kabilraj from vavuniya this project for his own company management purpose.',
            'project_name'      => 'infocliq-admin',
            'start_date'        => '2022-23-30',
            'due_date'          => '2022-01-30',
            'total_cost'        => '70000',
            'total_hours'       => '4200',
            'status'            => 'pending',
            'doc_link'          => 'https://docs.google.com/spreadsheets/d/1_N0fSaDhgRSqq7qVJgZzpGhjBJ6PVCi9JaY6zYS60pg/edit?usp=sharing',
            'project_logo'      => 'imgEmployee/JXLKigEP_400x400.jpg',
            'developers'        => json_encode(["1", "2", "3"]),
            'project_description'=> 'This project infocliq project management system',
            ]);
            DB::table('project')->insert([
            'client_name'       => 'Kabilraj',
            'mobile'            => '0776546564',
            'company_name'      => 'infocliq',
            'address'           => 'vavuniya puliyankulam',
            'client_description'=> 'This is kabilraj from vavuniya this project for his own company management purpose.',
            'project_name'      => 'infocliq-admin',
            'start_date'        => '2022-01-30',
            'due_date'          => '2022-01-30',
            'total_cost'        => '70000',
            'total_hours'       => '4200',
            'status'            => 'pending',
            'doc_link'          => 'https://docs.google.com/spreadsheets/d/1_N0fSaDhgRSqq7qVJgZzpGhjBJ6PVCi9JaY6zYS60pg/edit?usp=sharing',
            'project_logo'      => 'imgEmployee/JXLKigEP_400x400.jpg',
            'developers'        => json_encode(["1", "3", "2"]),
            'project_description'=> 'This project infocliq project management system',
            ]);

        // Task Datas for develop
        DB::table('task')->insert(
            [
            'task_name'             => 'infocliq project management system',
            'description'   => 'Design navigation bar and login page in home page, login page create on home main banner',
            'task'                  => 'project task',
            'project_id'               => 1,
            'module'                => 2,
            'department'            => 'it',
            'task_type'             => 'development',
            'due_date'              => '28-01-2022',
            'assign'                => 1,
            'assign_to'             => 2,
            'duration_minutes'      => 67,
            'duration_hours'        => '1h 7m',
            'priority_level'        => 'medium',
            'points'                => 5,
            'attachment'            => 'imgEmployee/JXLKigEP_400x400.jpg',
            'note'                  => 'i can\'t complete today. because i work another project',
            'status'                => 'pending',
            ]);
        DB::table('task')->insert(
            [
            'task_name'             => 'infocliq project management system',
            'description'   => 'Design navigation bar and login page in home page, login page create on home main banner',
            'task'                  => 'project task',
            'project_id'               => 2,
            'module'                => 1,
            'department'            => 'it',
            'task_type'             => 'development',
            'due_date'              => '28-01-2022',
            'assign'                => 2,
            'assign_to'             => 1,
            'duration_minutes'      => 127,
            'duration_hours'        => '2h 7m',
            'priority_level'        => 'high',
            'points'                => 5,
            'attachment'            => 'imgEmployee/JXLKigEP_400x400.jpg',
            'note'                  => 'i can\'t complete today. because i work another project',
            'status'                => 'pending',
            ]);
        DB::table('task')->insert(
            [
            'task_name'             => 'infocliq project management system',
            'description'   => 'Design navigation bar and login page in home page, login page create on home main banner',
            'task'                  => 'project task',
            'project_id'               => 3,
            'module'                => 2,
            'department'            => 'it',
            'task_type'             => 'development',
            'due_date'              => '28-01-2022',
            'assign'                => 2,
            'assign_to'             => 1,
            'duration_minutes'      => 129,
            'duration_hours'        => '2h 9m',
            'priority_level'        => 'medium',
            'points'                => 5,
            'attachment'            => 'imgEmployee/JXLKigEP_400x400.jpg',
            'note'                  => 'i can\'t complete today. because i work another project',
            'status'                => 'pending',
            ]);
        DB::table('task')->insert(
            [
            'task_name'             => 'infocliq project management system',
            'description'   => 'Design navigation bar and login page in home page, login page create on home main banner',
            'task'                  => 'project task',
            'project_id'               => 3,
            'module'                => 2,
            'department'            => 'it',
            'task_type'             => 'development',
            'due_date'              => '28-01-2022',
            'assign'                => 2,
            'assign_to'             => 1,
            'duration_minutes'      => 129,
            'duration_hours'        => '2h 9m',
            'priority_level'        => 'high',
            'points'                => 5,
            'attachment'            => 'imgEmployee/JXLKigEP_400x400.jpg',
            'note'                  => 'i can\'t complete today. because i work another project',
            'status'                => 'pending',
            ]);
        DB::table('task')->insert(
            [
            'task_name'             => 'infocliq project management system',
            'description'   => 'Design navigation bar and login page in home page, login page create on home main banner',
            'task'                  => 'project task',
            'project_id'               => 3,
            'module'                => 2,
            'department'            => 'it',
            'task_type'             => 'development',
            'due_date'              => '28-01-2022',
            'assign'                => 2,
            'assign_to'             => 1,
            'duration_minutes'      => 129,
            'duration_hours'        => '2h 9m',
            'priority_level'        => 'low',
            'points'                => 5,
            'attachment'            => 'imgEmployee/JXLKigEP_400x400.jpg',
            'note'                  => 'i can\'t complete today. because i work another project',
            'status'                => 'pending',
            ]);
        // 
        DB::table('module')->insert(
            [
            'projectId'             => 2,
            'moduleName'            => 'M001-home-page',
            ],
            [
            'projectId'             => 2,
            'moduleName'            => 'M001-about-page',
            ],
            [
            'projectId'             => 2,
            'moduleName'            => 'M001-contact-page',
            ]
        );
    }
}
