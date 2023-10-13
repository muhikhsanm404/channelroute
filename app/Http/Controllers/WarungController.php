<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarungController extends Controller
{
    public function index()
    {
        return 'Ini adalah function index dari halaman WarungController';
    }

    public function makan($id)
    {
        return 'Ini adalah nama makanan nya : ' . $id;
    }
}
