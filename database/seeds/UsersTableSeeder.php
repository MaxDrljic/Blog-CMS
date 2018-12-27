<?php

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
        $user = App\User::create([
            'name'      => 'max drljic',
            'email'     => 'max@test.com',
            'password'  => bcrypt('password'),
            'admin'     => 1
        ]);

        App\Profile::create([
            'user_id'   => $user->id,
            'avatar'    => 'uploads/avatars/1.png',
            'about'     => 'Lorem ipsum dolor sit amet, est case denique ea, cu quem etiam sea. At est omnes tation, adhuc libris patrioque ea eum, cu corpora delectus inimicus qui.',
            'facebook'  => 'facebook.com',
            'youtube'   => 'youtube.com'
        ]);
    }
}
