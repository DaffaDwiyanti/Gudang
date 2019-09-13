<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemasukDetailRequest;
use App\Http\Requests\UpdatemasukDetailRequest;
use App\Repositories\masukDetailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\barang;

use Flash;
use Response;

class masukDetailController extends AppBaseController
{
    /** @var  masukDetailRepository */
    private $masukDetailRepository;

    public function __construct(masukDetailRepository $masukDetailRepo)
    {
        $this->masukDetailRepository = $masukDetailRepo;
    }

    /**
     * Display a listing of the masukDetail.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $masukDetails = $this->masukDetailRepository->all();

        return view('masuk_details.index')
            ->with('masukDetails', $masukDetails);
    }

    /**
     * Show the form for creating a new masukDetail.
     *
     * @return Response
     */
    public function create()
    {
        return view('masuk_details.create');
    }

    /**
     * Store a newly created masukDetail in storage.
     *
     * @param CreatemasukDetailRequest $request
     *
     * @return Response
     */
    public function store(CreatemasukDetailRequest $request)
    {

        $input = $request->all();

        $masukDetail = $this->masukDetailRepository->create($input);

        $barang = barang::find($request->id_barang);
        $barang->stok = $barang->stok + $request->quantitas;
        $barang->save();
        

        Flash::success("Masuk Detail saved successfully.");

        return redirect(route('masukDetails.index'));
    }

    /**
     * Display the specified masukDetail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $masukDetail = $this->masukDetailRepository->find($id);

        if (empty($masukDetail)) {
            Flash::error('Masuk Detail not found');

            return redirect(route('masukDetails.index'));
        }

        return view('masuk_details.show')->with('masukDetail', $masukDetail);
    }

    /**
     * Show the form for editing the specified masukDetail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $masukDetail = $this->masukDetailRepository->find($id);

        if (empty($masukDetail)) {
            Flash::error('Masuk Detail not found');

            return redirect(route('masukDetails.index'));
        }

        return view('masuk_details.edit')->with('masukDetail', $masukDetail);
    }

    /**
     * Update the specified masukDetail in storage.
     *
     * @param int $id
     * @param UpdatemasukDetailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemasukDetailRequest $request)
    {
        $masukDetail = $this->masukDetailRepository->find($id);

        if (empty($masukDetail)) {
            Flash::error('Masuk Detail not found');

            return redirect(route('masukDetails.index'));
        }

        $masukDetail = $this->masukDetailRepository->update($request->all(), $id);

        Flash::success('Masuk Detail updated successfully.');

        return redirect(route('masukDetails.index'));
    }

    /**
     * Remove the specified masukDetail from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $masukDetail = $this->masukDetailRepository->find($id);

        if (empty($masukDetail)) {
            Flash::error('Masuk Detail not found');

            return redirect(route('masukDetails.index'));
        }

        $this->masukDetailRepository->delete($id);

        Flash::success('Masuk Detail deleted successfully.');

        return redirect(route('masukDetails.index'));
    }
}
