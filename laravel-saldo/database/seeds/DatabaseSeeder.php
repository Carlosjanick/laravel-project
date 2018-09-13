<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Models\Role;
use App\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(usersTableSeeder::class);
         $this->call(PermissionSeeder::class);  //php artisan db:seed --class=PermissionSeeder

         //addiciona um utilizado Admin com o role admin contento todas as permissoes
         DB::table('users')->delete();
         //1) Create Admin Role
         $role = ['name' => 'admin', 'display_name' => 'Admin', 'description' => 'Full Permission'];
         $role = Role::create($role);
         //2) Set Role Permissions
         // Get all permission, swift through and attach them to the role
         $permission = Permission::get();
         foreach ($permission as $key => $value) {
             $role->attachPermission($value);
         }

         //3) Create Admin User
        $user = ['name' => 'Admin User', 'email' => 'sdmin@gmail.com', 'password' => Hash::make('123456')];
        $user = User::create($user);

         //4) Set User Role
         $user->attachRole($role);
    }
}
