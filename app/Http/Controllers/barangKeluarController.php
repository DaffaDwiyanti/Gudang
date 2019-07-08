<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebarangKeluarRequest;
use App\Http\Requests\UpdatebarangKeluarRequest;
use App\Repositories\barangKeluarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class barangKeluarController extends AppBaseController
{
    /** @var  barangKeluarRepository */
    private $barangKeluarRepository;

    public function __construct(barangKeluarRepository $barangKeluarRepo)
    {
        $this->barangKeluarRepository = $barangKeluarRepo;
    }

    /**
     * Display a listing of the barangKeluar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $barangKeluars = $this->barangKeluarRepository->all();

        return view('barang_keluars.index')
            ->with('barangKeluars', $barangKeluars);
    }

    public function blanja(){
        return view('barang_keluars.keluar');
    }

    /**
     * Show the form for creating a new barangKeluar.
     *
     * @return Response
     */
    public function create()
    {
        return view('barang_keluars.create');
    }

    /**
     * Store a newly created barangKeluar in storage.
     *
     * @param CreatebarangKeluarRequest $request
     *
     * @return Response
     */
    public function store(CreatebarangKeluarRequest $request)
    {
        $input = $request->all();

        $barangKeluar = $this->barangKeluarRepository->create($input);

        Flash::success('Barang Keluar saved successfully.');

        return redirect(route('barangKeluars.index'));
    }

    /**
     * Display the specified barangKeluar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $barangKeluar = $this->barangKeluarRepository->find($id);

        if (empty($barangKeluar)) {
            Flash::error('Barang Keluar not found');

            return redirect(route('barangKeluars.index'));
        }

        return view('barang_keluars.show')->with('barangKeluar', $barangKeluar);
    }

    /**
     * Show the form for editing the specified barangKeluar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $barangKeluar = $this->barangKeluarRepository->find($id);

        if (empty($barangKeluar)) {
            Flash::error('Barang Keluar not found');

            return redirect(route('barangKeluars.index'));
        }

        return view('barang_keluars.edit')->with('barangKeluar', $barangKeluar);
    }

    /**
     * Update the specified barangKeluar in storage.
     *
     * @param int $id
     * @param UpdatebarangKeluarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebarangKeluarRequest $request)
    {
        $barangKeluar = $this->barangKeluarRepository->find($id);

        if (empty($barangKeluar)) {
            Flash::error('Barang Keluar not found');

            return redirect(route('barangKeluars.index'));
        }

        $barangKeluar = $this->barangKeluarRepository->update($request->all(), $id);

        Flash::success('Barang Keluar updated successfully.');

        return redirect(route('barangKeluars.index'));
    }

    /**
     * Remove the specified barangKeluar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $barangKeluar = $this->barangKeluarRepository->find($id);

        if (empty($barangKeluar)) {
            Flash::error('Barang Keluar not found');

            return redirect(route('barangKeluars.index'));
        }

        $this->barangKeluarRepository->delete($id);

        Flash::success('Barang Keluar deleted successfully.');

        return redirect(route('barangKeluars.index'));
    }
}
