<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use Config\Database;

class ListGroups extends BaseCommand
{
    protected $group       = 'shield';
    protected $name        = 'shield:list-groups-permissions';
    protected $description = 'Lists all groups and permissions in Shield';

    public function run(array $params)
    {
        $db = Database::connect();

        // Obtener y mostrar grupos
            $groups = $db->table('auth_groups_users')
            ->select('group')
            ->distinct()
            ->get()
            ->getResult();
        
        CLI::write('Groups:', 'green');
        foreach ($groups as $group) {
            CLI::write("- " . $group->group, 'yellow');
        }
        
        CLI::newLine();
        
        $permissions = $db->table('auth_permissions_users')
            ->select('permission')
            ->distinct()
            ->get()
            ->getResult();
        
        CLI::write('Permissions:', 'green');
        foreach ($permissions as $permission) {
            CLI::write("- " . $permission->permission, 'cyan');
        }
            
    }
}
