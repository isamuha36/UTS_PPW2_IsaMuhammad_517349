<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;

class PemainConstroller extends Controller
{
    public function index()
    {
        $data_pemain = Pemain::all();

        return view('pemain', compact('data_pemain'));
    }
}
