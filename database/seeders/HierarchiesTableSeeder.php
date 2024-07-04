<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hierarchy;

class HierarchiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $ramesh = Hierarchy::create(['name' => 'Ramesh']);
        $deepu = Hierarchy::create(['name' => 'Deepu']);
        $prem = Hierarchy::create(['name' => 'Prem Chopra']);

        Hierarchy::create(['name' => 'Gaurav', 'parent_id' => $ramesh->id]);
        Hierarchy::create(['name' => 'Shalu', 'parent_id' => $ramesh->id]);

        $amit = Hierarchy::create(['name' => 'Amit', 'parent_id' => $deepu->id]);
        Hierarchy::create(['name' => 'Kapil', 'parent_id' => $deepu->id]);
        Hierarchy::create(['name' => 'Sham Lal', 'parent_id' => $amit->id]);
    }
}
