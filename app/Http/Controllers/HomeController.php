<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DetailTransaksi;
use Illuminate\Http\Request;
use App\Http\Middleware\IsAdmin;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', IsAdmin::class]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $detail_transaksi = DetailTransaksi::all();
        return view('home', compact('detail_transaksi'));
    }

    public function show($id)
    {
        $user = User::FindOrFail($id);
        return view('user.show', compact('user'));
    }
}
