<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Membuat Role Admin
        $adminRole = new Role();
        $adminRole->name ="admin";
        $adminRole->display_name="Admin";
        $adminRole->save();

        //Membuat Role Member
        $memberRole = new Role();
        $memberRole->name ="member";
        $memberRole->display_name="Member";
        $memberRole->save();

        //Membauat Sample Admin
        $admin = new User();
        $admin->name='Admin';
        $admin->email='admin@laravel.com';
        $admin->password=bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        //Membuat Sample Member
        $member = new User();
        $member->name='Sample Member';
        $member->email='member@laravel.com';
        $member->password=bcrypt('rahasia');
        $member->save();
        $member->attachRole($memberRole);
    }
}
