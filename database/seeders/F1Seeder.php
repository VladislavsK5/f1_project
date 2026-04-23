<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class F1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        'McLaren' => [
            'base' => 'Woking, UK', 'points' => 833,
            'drivers' => [
                ['name' => 'Lando Norris', 'nat' => 'Great Britain', 'num' => 4, 'pts' => 423],
                ['name' => 'Oscar Piastri', 'nat' => 'Australia', 'num' => 81, 'pts' => 410],
            ]
        ],
        'RedBull Racing' => [
            'base' => 'Milton Keynes, UK', 'points' => 459,
            'drivers' => [
                ['name' => 'Max Verstappen', 'nat' => 'Netherlands', 'num' => 1, 'pts' => 421],
                ['name' => 'Liam Lawson', 'nat' => 'New Zealand', 'num' => 30, 'pts' => 38],
            ]
        ],
        'Mercedes' => [
            'base' => 'Brackley, UK', 'points' => 469,
            'drivers' => [
                ['name' => 'George Russell', 'nat' => 'Great Britain', 'num' => 63, 'pts' => 319],
                ['name' => 'Kimi Antonelli', 'nat' => 'Italia', 'num' => 12, 'pts' => 150],
            ]
        ],
        'Ferrari' => [
            'base' => 'Maranello, Italy', 'points' => 398,
            'drivers' => [
                ['name' => 'Charles Leclerc', 'nat' => 'Monaco', 'num' => 16, 'pts' => 242],
                ['name' => 'Lewis Hamilton', 'nat' => 'Great Britain', 'num' => 44, 'pts' => 156],
            ]
        ],
        'Williams' => [
            'base' => 'Grove, UK', 'points' => 137,
            'drivers' => [
                ['name' => 'Alexander Albon', 'nat' => 'Thailand', 'num' => 23, 'pts' => 73],
                ['name' => 'Carlos Sainz', 'nat' => 'Spain', 'num' => 55, 'pts' => 64],
            ]
        ],
        'Aston Martin' => [
            'base' => 'Silverstone, UK', 'points' => 89,
            'drivers' => [
                ['name' => 'Fernando Alonso', 'nat' => 'Spain', 'num' => 14, 'pts' => 56],
                ['name' => 'Lance Stroll', 'nat' => 'Canada', 'num' => 18, 'pts' => 33],
            ]
        ],
        'Kick Sauber' => [
            'base' => 'Hinwil, Switzerland', 'points' => 70,
            'drivers' => [
                ['name' => 'Nico Hulkenberg', 'nat' => 'Germany', 'num' => 27, 'pts' => 51],
                ['name' => 'Gabriel Bortoleto', 'nat' => 'Brazil', 'num' => 5, 'pts' => 19],
            ]
        ],
        'Racing Bulls' => [
            'base' => 'Faenza, Italy', 'points' => 84,
            'drivers' => [
                ['name' => 'Isack Hadjar', 'nat' => 'France', 'num' => 6, 'pts' => 51],
                ['name' => 'Yuki Tsunoda', 'nat' => 'Japan', 'num' => 22, 'pts' => 33],
            ]
        ],
        'HAAS' => [
            'base' => 'Kannapolis, USA', 'points' => 79,
            'drivers' => [
                ['name' => 'Oliver Bearman', 'nat' => 'Great Britain', 'num' => 50, 'pts' => 41],
                ['name' => 'Esteban Ocon', 'nat' => 'France', 'num' => 31, 'pts' => 38],
            ]
        ],
        'Alpine' => [
            'base' => 'Enstone, UK', 'points' => 22,
            'drivers' => [
                ['name' => 'Pierre Gasly', 'nat' => 'France', 'num' => 10, 'pts' => 22],
                ['name' => 'Franco Colapinto', 'nat' => 'Argentina', 'num' => 43, 'pts' => 0],
            ]
        ],
    ];

    foreach ($data as $teamName => $info) {
        $team = \App\Models\Team::create([
            'name' => $teamName,
            'base_location' => $info['base'],
            'points' => $info['points'],
        ]);

        foreach ($info['drivers'] as $d) {
            \App\Models\Driver::create([
                'name' => $d['name'],
                'nationality' => $d['nat'],
                'number' => $d['num'],
                'points' => $d['pts'],
                'team_id' => $team->id,
            ]);
        }
    }
    }
}
