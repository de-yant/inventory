<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10)
        ];

        DB::beginTransaction();
        try{
            $staff = User::create(array_merge([
                'email' => 'staff@mail.com',
                'name' =>'staff name',
                ], $default_user_value));

            $admin = User::create(array_merge([
                'email' => 'admin@mail.com',
                'name' =>'admin name',
                ], $default_user_value));

            $superadmin = User::create(array_merge([
                'email' => 'superadmin@mail.com',
                'name' =>'superadmin name',
                ], $default_user_value));

            $role_staff = Role::create(['name' => 'staff']);
            $role_admin = Role::create(['name' => 'admin']);
            $role_superadmin = Role::create(['name' => 'superadmin']);

            $permission = Permission::create(['name' => 'create role']);
            $permission = Permission::create(['name' => 'read role']);
            $permission = Permission::create(['name' => 'update role']);
            $permission = Permission::create(['name' => 'delete role']);

            $staff->assignRole('staff');
            $admin->assignRole('admin');
            $superadmin->assignRole('superadmin');

            DB::commit();
        } catch(\Throwable $th){
            DB::rollBack();
        }



    }
}
