<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\Shield\Entities\User; // Entidad User de Shield
use CodeIgniter\Shield\Models\UserModel; // Modelo UserModel de Shield

class UserSeeder extends Seeder
{
    public function run()
    {
        $userModel = model(UserModel::class);

        // Crear dos usuarios nuevos con Shield
        $users = [
            [
                'email'    => 'antonio@example.com',
                'username' => 'Antonio',
                'password' => 'admin123', // Shield encripta automáticamente la contraseña
            ],
            [
                'email'    => 'marcos@example.com',
                'username' => 'Marcos',
                'password' => 'admin123',
            ]
        ];

        foreach ($users as $userData) {
            $user = new User($userData);
            $userModel->save($user);
        }
    }
}
