<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\tbl_contact_types;
use App\Models\tbl_user_contacts;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();




        tbl_contact_types::create([
            'contact_type_name' => 'WhatsApp',
        ]);

        tbl_user_contacts::create([
            'contact' => 'test@example.com',
            'password' => bcrypt('password'),
            'contact_type_id' => 1,
        ]);
    }
}
