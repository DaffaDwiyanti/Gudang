<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesuplierRequest;
use App\Http\Requests\UpdatesuplierRequest;
use App\Repositories\suplierRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class suplierController extends AppBaseController
{
    /** @var  suplierRepository */
    private $suplierRepository;

    public function __construct(suplierRepository $suplierRepo)
    {
        $this->suplierRepository = $suplierRepo;
    }

    /**
     * Display a listing of the suplier.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $supliers = $this->suplierRepository->all();

        return view('supliers.index')
            ->with('supliers', $supliers);
    }

    /**
     * Show the form for creating a new suplier.
     *
     * @return Response
     */
    public function create()
    {
        return view('supliers.create');
    }

    /**
     * Store a newly created suplier in storage.
     *
     * @param CreatesuplierRequest $request
     *
     * @return Response
     */
    public function store(CreatesuplierRequest $request)
    {
        $input = $request->all();

        $suplier = $this->suplierRepository->create($input);

        Flash::success('Suplier saved successfully.');

        return redirect(route('supliers.index'));
    }

    /**
     * Display the specified suplier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $suplier = $this->suplierRepository->find($id);

        if (empty($suplier)) {
            Flash::error('Suplier not found');

            return redirect(route('supliers.index'));
        }

        return view('supliers.show')->with('suplier', $suplier);
    }

    /**
     * Show the form for editing the specified suplier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $suplier = $this->suplierRepository->find($id);

        if (empty($suplier)) {
            Flash::error('Suplier not found');

            return redirect(route('supliers.index'));
        }

        return view('supliers.edit')->with('suplier', $suplier);
    }

    /**
     * Update the specified suplier in storage.
     *
     * @param int $id
     * @param UpdatesuplierRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesuplierRequest $request)
    {
        $suplier = $this->suplierRepository->find($id);

        if (empty($suplier)) {
            Flash::error('Suplier not found');

            return redirect(route('supliers.index'));
        }

        $suplier = $this->suplierRepository->update($request->all(), $id);

        Flash::success('Suplier updated successfully.');

        return redirect(route('supliers.index'));
    }

    /**
     * Remove the specified suplier from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $suplier = $this->suplierRepository->find($id);

        if (empty($suplier)) {
            Flash::error('Suplier not found');

            return redirect(route('supliers.index'));
        }

        $this->suplierRepository->delete($id);

        Flash::success('Suplier deleted successfully.');

        return redirect(route('supliers.index'));
    }
}
