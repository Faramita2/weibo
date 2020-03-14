<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->times(50)->create();

        $user = User::find(1);
        $user->name = 'meow';
        $user->email = 'liuguozhu720@gmail.com';
        $user->password = bcrypt('meowmeow');
        $user->is_admin = true;
        $user->save();
    }
}
