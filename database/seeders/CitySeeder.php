<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    protected $records = [
        1 => [
            'name' => 'hisar',
        ],
        2 => [
            'name' => 'ludhiana',
        ],
        3 => [
            'name' => 'mohali',
        ],
        4 => [
            'name' => 'delhi',
        ],
        5 => [
            'name' => 'noida',
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect($this->records)->each(fn($value, $key) => City::updateOrCreate(['id' => $key], $value));
    }
}
