<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $admins = DB::table('admins')
            ->where('age', '>=', '30')
            ->orderBy('age', 'desc')
            ->get();

        // $admins = DB::table('admins')
        //     ->where('age', '>=', '30')
        //     ->where(function($q) {
        //         $q->where('name', 'Lionel Jacobson')
        //             ->orWhere('name', 'Leo Bode');
        //     })
        //     ->get();

        return view('admin.index', compact('admins'));
    }

    public function detail($id) {
        $admin = DB::table('admins')
            ->where('id', $id)
            ->first();

        return view('admin.detail', compact('admin'));
    }
}
