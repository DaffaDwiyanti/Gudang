<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJenisMasukRequest;
use App\Http\Requests\UpdateJenisMasukRequest;
use App\Repositories\JenisMasukRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class JenisMasukController extends AppBaseController
{
    /** @var  JenisMasukRepository */
    private $jenisMasukRepository;

    public function __construct(JenisMasukRepository $jenisMasukRepo)
    {
        $this->jenisMasukRepository = $jenisMasukRepo;
    }

    /**
     * Display a listing of the JenisMasuk.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $jenisMasuks = $this->jenisMasukRepository->all();

        return view('jenis_masuks.index')
            ->with('jenisMasuks', $jenisMasuks);
    }

    /**
     * Show the form for creating a new JenisMasuk.
     *
     * @return Response
     */
    public function create()
    {
        return view('jenis_masuks.create');
    }

    /**
     * Store a newly created JenisMasuk in storage.
     *
     * @param CreateJenisMasukRequest $request
     *
     * @return Response
     */
    public function store(CreateJenisMasukRequest $request)
    {
        $input = $request->all();

        $jenisMasuk = $this->jenisMasukRepository->create($input);

        Flash::success('Jenis Masuk saved successfully.');

        return redirect(route('jenisMasuks.index'));
    }

    /**
     * Display the specified JenisMasuk.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jenisMasuk = $this->jenisMasukRepository->find($id);

        if (empty($jenisMasuk)) {
            Flash::error('Jenis Masuk not found');

            return redirect(route('jenisMasuks.index'));
        }

        return view('jenis_masuks.show')->with('jenisMasuk', $jenisMasuk);
    }

    /**
     * Show the form for editing the specified JenisMasuk.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jenisMasuk = $this->jenisMasukRepository->find($id);

        if (empty($jenisMasuk)) {
            Flash::error('Jenis Masuk not found');

            return redirect(route('jenisMasuks.index'));
        }

        return view('jenis_masuks.edit')->with('jenisMasuk', $jenisMasuk);
    }

    /**
     * Update the specified JenisMasuk in storage.
     *
     * @param int $id
     * @param UpdateJenisMasukRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJenisMasukRequest $request)
    {
        $jenisMasuk = $this->jenisMasukRepository->find($id);

        if (empty($jenisMasuk)) {
            Flash::error('Jenis Masuk not found');

            return redirect(route('jenisMasuks.index'));
        }

        $jenisMasuk = $this->jenisMasukRepository->update($request->all(), $id);

        Flash::success('Jenis Masuk updated successfully.');

        return redirect(route('jenisMasuks.index'));
    }

    /**
     * Remove the specified JenisMasuk from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jenisMasuk = $this->jenisMasukRepository->find($id);

        if (empty($jenisMasuk)) {
            Flash::error('Jenis Masuk not found');

            return redirect(route('jenisMasuks.index'));
        }

        $this->jenisMasukRepository->delete($id);

        Flash::success('Jenis Masuk deleted successfully.');

        return redirect(route('jenisMasuks.index'));
    }
}
