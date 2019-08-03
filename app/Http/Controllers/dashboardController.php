<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebarangRequest;
use App\Http\Requests\UpdatebarangRequest;
use App\Repositories\barangRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use DB;
use Flash;
use Response;

class dashboardController extends AppBaseController
{
    function index()
    {
        $data = DB::table('barangs')
            ->select(
                DB::raw('namaBarang as namaBarang'),
                DB::raw('count(*) as number')
            )
            ->groupBy('namaBarang')
            ->get();
        $array[] = ['namaBarang', 'Number'];
        foreach ($data as $key => $value) {
            $array[++$key] = [$value->namaBarang, $value->number];
        }
        return view('dashboard')->with('status', json_encode($array));
    }
}
