<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebarangRequest;
use App\Http\Requests\UpdatebarangRequest;
use App\Repositories\barangRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\suplier;
use Flash;
use Response;

class barangController extends AppBaseController
{
    /** @var  barangRepository */
    private $barangRepository;

    public function __construct(barangRepository $barangRepo)
    {
        $this->barangRepository = $barangRepo;
    }

    /**
     * Display a listing of the barang.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $barangs = $this->barangRepository->all();

        return view('barangs.index')
             ->with('barangs', $barangs);
    }

    /**
     * Show the form for creating a new barang.
     *
     * @return Response
     */
    public function create()
    {
        $supliers = suplier::All();

        return view('barangs.create')
             ->with('supliers', $supliers);
    }

    /**
     * Store a newly created barang in storage.
     *
     * @param CreatebarangRequest $request
     *
     * @return Response
     */
    public function store(CreatebarangRequest $request)
    {
        $input = $request->all();

        $barang = $this->barangRepository->create($input);

        Flash::success('Barang saved successfully.');

        return redirect(route('barangs.index'));
    }

    /**solat
     * Display the specified barang.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $barang = $this->barangRepository->find($id);

        if (empty($barang)) {
            Flash::error('Barang not found');

            return redirect(route('barangs.index'));
        }

        return view('barangs.show')->with('barang', $barang);
    }

    /**
     * Show the form for editing the specified barang.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $barang = $this->barangRepository->find($id);
        $supliers = suplier::All();
        

        if (empty($barang)) {
            Flash::error('Barang not found');

            return redirect(route('barangs.index'));
        }

        return view('barangs.edit')->with('barang', $barang)
             ->with('supliers', $supliers);;
    }

    /**
     * Update the specified barang in storage.
     *
     * @param int $id
     * @param UpdatebarangRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebarangRequest $request)
    {
        $barang = $this->barangRepository->find($id);

        if (empty($barang)) {
            Flash::error('Barang not found');

            return redirect(route('barangs.index'));
        }

        $barang = $this->barangRepository->update($request->all(), $id);

        Flash::success('Barang updated successfully.');

        return redirect(route('barangs.index'));
    }

    /**
     * Remove the specified barang from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $barang = $this->barangRepository->find($id);

        if (empty($barang)) {
            Flash::error('Barang not found');

            return redirect(route('barangs.index'));
        }

        $this->barangRepository->delete($id);

        Flash::success('Barang deleted successfully.');

        return redirect(route('barangs.index'));
    }
}
