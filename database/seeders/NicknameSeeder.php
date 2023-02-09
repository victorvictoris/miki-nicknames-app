<?php

namespace Database\Seeders;

use App\Models\Nickname;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NicknameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nickname::insert([
            [
                'name' => 'Mika',
                'description' => 'Kao što glasi naziv ove Mikine pesme: https://youtu.be/Qm9d5wAXW5c - YOU KICK ASS MIKI!!'
            ],
            [
                'name' => 'Mikaby',
                'description' => 'Meek-a-boo'
            ],
            [
                'name' => 'Mikac',
                'description' => 'Mikac - Pikac'
            ],
            [
                'name' => 'Mikady',
                'description' => 'Meek-a-doo (kao Peek-a-boo) (šta?)'
            ],
            [
                'name' => 'Mikiee',
                'description' => 'Ovo me podseća na ono kad smo onomad pričali kako će nas đavo dočekati u paklu: Ee Mikiee Ee Mikiee'
            ],
            [
                'name' => 'ahh',
                'description' => 'Mikah'
            ],
            [
                'name' => 'Mikaja',
                'description' => 'MikaJa Te Volim <3'
            ],
            [
                'name' => 'ala',
                'description' => 'MikALAL ti vera što si najbolja Miki na svetu!!!'
            ],
            [
                'name' => 'Mikana',
                'description' => '.'
            ],
            [
                'name' => 'Mikano',
                'description' => '.'
            ],
            [
                'name' => 'Miko',
                'description' => 'Miko<3'
            ],
            [
                'name' => 'Mikary',
                'description' => 'Mikary zvuči kao neko anime ime, zar ne?'
            ],
            [
                'name' => 'Mikas',
                'description' => 'Mikas podseća na Lukas - čisto uživanje!'
            ],
            [
                'name' => 'Mikaw',
                'description' => 'Aw, Mikaww!'
            ],
            [
                'name' => 'Mikatz',
                'description' => 'Mikatz - Pikatz'
            ]
        ]);
    }
}
