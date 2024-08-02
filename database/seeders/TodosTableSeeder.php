<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo; // Ensure this line is correct

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todo::factory()->count(10)->create();
    }
}
