<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //roles
        Permission::create([
            'name' => 'lista roles',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver roles',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar roles',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar roles',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'registrar roles',
            'guard_name' => 'web',
        ]);
        //permisos
        Permission::create([
            'name' => 'lista permisos',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver permisos',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar permisos',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar permisos',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'registrar permisos',
            'guard_name' => 'web',
        ]);
        //usuarios
        Permission::create([
            'name' => 'registrar usuarios',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'lista usuarios',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver usuarios',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar usuarios',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar usuarios',
            'guard_name' => 'web',
        ]);

        //Institutos
        Permission::create([
            'name' => 'registrar institutos',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'lista institutos',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver institutos',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar institutos',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar institutos',
            'guard_name' => 'web',
        ]);

        //Carreras
        Permission::create([
            'name' => 'registrar carreras',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'lista carreras',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver carreras',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar carreras',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar carreras',
            'guard_name' => 'web',
        ]);


        //Estudiantes
        Permission::create([
            'name' => 'registrar estudiantes',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'lista estudiantes',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver estudiantes',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar estudiantes',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar estudiantes',
            'guard_name' => 'web',
        ]);


        
       

        //Admin
        $admin = Role::create(['name' => 'Administrador']);

    
        
        $user = User::find(1); //Italo Morales
        $user->assignRole('Administrador');
    }
}
