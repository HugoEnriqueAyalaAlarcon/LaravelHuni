<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class RolesUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $User=User::create(
            ['name'=>'administrador',
             'email' => 'test@example.com',
             'password' =>bcrypt('admin') ,
            ]
        );
        $User->assignRole('admin');

        $User=User::create(
            ['name'=>'Maestro1',
             'email' => 'Maestro1@example.com',
             'password' =>bcrypt('Maestro1') ,
            ]
        );
        $User->assignRole('maestro');

        $User=User::create(
            ['name'=>'alumno',
             'email' => 'alumno@example.com',
             'password' =>bcrypt('alumno') ,
            ]
        );
        $User->assignRole('alumno');
    }
}
