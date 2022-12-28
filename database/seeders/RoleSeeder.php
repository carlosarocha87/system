<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role1= Role::create(['name' => 'admin']);
       $role2= Role::create(['name' => 'user']);


       $permission = Permission::create(['name' => 'compras.index'])->syncRoles([$role1,$role2]);
       $permission = Permission::create(['name' => 'facturas.index'])->assignRole($role1);
       $permission = Permission::create(['name' => 'facturas.actualizar'])->assignRole($role1);
       $permission = Permission::create(['name' => 'facturas.consultar'])->assignRole($role1);

       $permission = Permission::create(['name' => 'productos.create'])->assignRole($role1);

       $permission = Permission::create(['name' => 'productos.edit'])->assignRole($role1);

       $permission = Permission::create(['name' => 'productos.delete'])->assignRole($role1);
    }
}
