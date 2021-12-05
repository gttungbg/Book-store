<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run ()
    {
        $admin = [
            'name'           => 'Admin',
            'email'          => 'admin@gmail.com',
            'password'       => '$2y$10$/ICMIJNKwoCLeBXVCPIUquMP6yBVKG1FRsiHFq4ICzwXc/4PvC7KS',
            'remember_token' => null,
        ];

        Admin::insert($admin);
    }
}
