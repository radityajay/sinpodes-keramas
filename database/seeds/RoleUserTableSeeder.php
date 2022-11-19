<?php

use App\Permission;
use App\Role;
use App\RolePermission;
use App\RoleUser;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create([
            'name' => 'Super Admin'
        ]);

        foreach (Permission::get() as $key => $value) {
            RolePermission::create([
                'role_id' => $roleAdmin->id,
                'permission_id' => $value->id
            ]);
        }

        RoleUser::create([
            'name' => 'Super Admin',
            'username' => 'admin',
            'email' => 'info@admin.co.id',
            'password' => bcrypt('password'),
            'role_id' => $roleAdmin->id,
            'is_default' => true
        ]);
    }
}
