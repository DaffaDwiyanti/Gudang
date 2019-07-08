<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebarangMasukRequest;
use App\Http\Requests\UpdatebarangMasukRequest;
use App\Repositories\barangMasukRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class barangMasukController extends AppBaseController
{
    /** @var  barangMasukRepository */
    private $barangMasukRepository;

    public function bmasuk(){
        $bmasuk = $this->barangMasukRepository->all();
        return view('barang_masuks.masuk')->with('bmasuk', $bmasuk);
    }

    public function __construct(barangMasukRepository $barangMasukRepo)
    {
        $this->barangMasukRepository = $barangMasukRepo;
    }

    /**
     * Display a listing of the barangMasuk.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $barangMasuks = $this->barangMasukRepository->all();

        return view('barang_masuks.index')
            ->with('barangMasuks', $barangMasuks);
    }

    /**
     * Show the form for creating a new barangMasuk.
     *
     * @return Response
     */
    public function create()
    {
        return view('barang_masuks.create');
    }

    /**
     * Store a newly created barangMasuk in storage.
     *
     * @param CreatebarangMasukRequest $request
     *
     * @return Response
     */
    public function store(CreatebarangMasukRequest $request)
    {
        $input = $request->all();

        $barangMasuk = $this->barangMasukRepository->create($input);

        Flash::success('Barang Masuk saved successfully.');

        return redirect(route('barangMasuks.index'));
    }

    /**
     * Display the specified barangMasuk.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $barangMasuk = $this->barangMasukRepository->find($id);

        if (empty($barangMasuk)) {
            Flash::error('Barang Masuk not found');

            return redirect(route('barangMasuks.index'));
        }

        return view('barang_masuks.show')->with('barangMasuk', $barangMasuk);
    }



    /**
     * Show the form for editing the specified barangMasuk.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $barangMasuk = $this->barangMasukRepository->find($id);

        if (empty($barangMasuk)) {
            Flash::error('Barang Masuk not found');

            return redirect(route('barangMasuks.index'));
        }

        return view('barang_masuks.edit')->with('barangMasuk', $barangMasuk);
    }

    /**
     * Update the specified barangMasuk in storage.
     *
     * @param int $id
     * @param UpdatebarangMasukRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebarangMasukRequest $request)
    {
        $barangMasuk = $this->barangMasukRepository->find($id);

        if (empty($barangMasuk)) {
            Flash::error('Barang Masuk not found');

            return redirect(route('barangMasuks.index'));
        }

        $barangMasuk = $this->barangMasukRepository->update($request->all(), $id);

        Flash::success('Barang Masuk updated successfully.');

        return redirect(route('barangMasuks.index'));
    }

    /**
     * Remove the specified barangMasuk from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $barangMasuk = $this->barangMasukRepository->find($id);

        if (empty($barangMasuk)) {
            Flash::error('Barang Masuk not found');

            return redirect(route('barangMasuks.index'));
        }

        $this->barangMasukRepository->delete($id);

        Flash::success('Barang Masuk deleted successfully.');

        return redirect(route('barangMasuks.index'));
    }
}
