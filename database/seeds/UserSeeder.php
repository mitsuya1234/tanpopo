<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    factory(User::class)->create([
		    'name'=>'情報太郎',
		    'gakuseki'=>'123456',
		    'email'=>'test@test.test',
		    'email_verified_at'=>now(),
		    'password'=>Hash::make('password'),
		    'zyusyo'=>'島根県松江市',
	    ]);
		    
    }
}
