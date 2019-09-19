<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebarangRequest;
use App\Http\Requests\UpdatebarangRequest;
use App\Repositories\barangRepository;

use App\Http\Requests\CreatebarangKeluarRequest;
use App\Http\Requests\UpdatebarangKeluarRequest;
use App\Repositories\barangKeluarRepository;

use App\Http\Requests\CreatebarangMasukRequest;
use App\Http\Requests\UpdatebarangMasukRequest;
use App\Repositories\barangMasukRepository;


use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;



class salesController extends Controller
{

    private $barangRepository;
    private $barangKeluarRepository;
    private $barangMasukRepository;
    public $flagP = "i";

    public function __construct(barangRepository $barangRepo, barangKeluarRepository $barangKeluarRepo, barangMasukRepository $barangMasukRepo)

    {
        $this->barangRepository = $barangRepo;
        $this->barangKeluarRepository = $barangKeluarRepo;
        $this->barangMasukRepository = $barangMasukRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grafik1 = DB::table('qw_resumeKeluar')->get();
        return view('sales.index')->with('grafik1',  $grafik1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salesEdit = $this->barangRepository->find($id);

        return view('sales.edit')->with('sales', $salesEdit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $salesUpdate = $this->barangRepository->find($id);

        $salesUpdate = $this->barangRepository->update($request->all(), $id);
        

        Flash::success('Sales updated successfully.');

        return redirect(route('sales.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salesDelete = $this->barangRepository->find($id);

        $this->barangRepository->delete($id);

        Flash::success('Sales deleted successfully.');

        return redirect(route('sales.index'));
    }
    
}
