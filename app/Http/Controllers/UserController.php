<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        // insert 1 data
        // $insertData = [
        //         'name' => fake()->name,
        //         'email' => fake()->unique()->safeEmail,
        //         'password' => Hash::make('password'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        // ];
        // DB::table('users')->insert($insertData);

        // multiple insert table users
        // $insertData = [
        //     [
        //         'name' => fake()->name,
        //         'email' => fake()->unique()->safeEmail,
        //         'password' => Hash::make('password'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => fake()->name,
        //         'email' => fake()->unique()->safeEmail,
        //         'password' => Hash::make('password'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => fake()->name,
        //         'email' => fake()->unique()->safeEmail,
        //         'password' => Hash::make('password'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ];
        // DB::table('users')->insert($insertData);

        // update table users
        // DB::table('users')->where('id', 1)->update([
        //     'name' => 'Imron',
        //     'email' => 'imron@gmail.com'
        // ]);

        // delete table users
        // DB::table('users')->where('id', 1)->delete();
        // $users = DB::table('users')
        //     ->join('user_details', 'user_details.user_id', '=', 'users.id')
        //     ->get();

        return view('user.index', compact('users'));
    }
}
