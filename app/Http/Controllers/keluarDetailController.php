<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatekeluarDetailRequest;
use App\Http\Requests\UpdatekeluarDetailRequest;
use App\Repositories\keluarDetailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class keluarDetailController extends AppBaseController
{
    /** @var  keluarDetailRepository */
    private $keluarDetailRepository;

    public function __construct(keluarDetailRepository $keluarDetailRepo)
    {
        $this->keluarDetailRepository = $keluarDetailRepo;
    }

    /**
     * Display a listing of the keluarDetail.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $keluarDetails = $this->keluarDetailRepository->all();

        return view('keluar_details.index')
            ->with('keluarDetails', $keluarDetails);
    }

    /**
     * Show the form for creating a new keluarDetail.
     *
     * @return Response
     */
    public function create()
    {
        return view('keluar_details.create');
    }

    /**
     * Store a newly created keluarDetail in storage.
     *
     * @param CreatekeluarDetailRequest $request
     *
     * @return Response
     */
    public function store(CreatekeluarDetailRequest $request)
    {
        $input = $request->all();

        $keluarDetail = $this->keluarDetailRepository->create($input);

        Flash::success('Keluar Detail saved successfully.');

        return redirect(route('keluarDetails.index'));
    }

    /**
     * Display the specified keluarDetail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $keluarDetail = $this->keluarDetailRepository->find($id);

        if (empty($keluarDetail)) {
            Flash::error('Keluar Detail not found');

            return redirect(route('keluarDetails.index'));
        }

        return view('keluar_details.show')->with('keluarDetail', $keluarDetail);
    }

    /**
     * Show the form for editing the specified keluarDetail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $keluarDetail = $this->keluarDetailRepository->find($id);

        if (empty($keluarDetail)) {
            Flash::error('Keluar Detail not found');

            return redirect(route('keluarDetails.index'));
        }

        return view('keluar_details.edit')->with('keluarDetail', $keluarDetail);
    }

    /**
     * Update the specified keluarDetail in storage.
     *
     * @param int $id
     * @param UpdatekeluarDetailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatekeluarDetailRequest $request)
    {
        $keluarDetail = $this->keluarDetailRepository->find($id);

        if (empty($keluarDetail)) {
            Flash::error('Keluar Detail not found');

            return redirect(route('keluarDetails.index'));
        }

        $keluarDetail = $this->keluarDetailRepository->update($request->all(), $id);

        Flash::success('Keluar Detail updated successfully.');

        return redirect(route('keluarDetails.index'));
    }

    /**
     * Remove the specified keluarDetail from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $keluarDetail = $this->keluarDetailRepository->find($id);

        if (empty($keluarDetail)) {
            Flash::error('Keluar Detail not found');

            return redirect(route('keluarDetails.index'));
        }

        $this->keluarDetailRepository->delete($id);

        Flash::success('Keluar Detail deleted successfully.');

        return redirect(route('keluarDetails.index'));
    }
}
