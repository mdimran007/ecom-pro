<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PosController extends Controller
{
    public function pos()
    {
        $data['posActive'] = 'active';
        return view('admin.pos', $data);
    }
}
