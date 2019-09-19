<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJenisKeluarRequest;
use App\Http\Requests\UpdateJenisKeluarRequest;
use App\Repositories\JenisKeluarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class JenisKeluarController extends AppBaseController
{
    /** @var  JenisKeluarRepository */
    private $jenisKeluarRepository;

    public function __construct(JenisKeluarRepository $jenisKeluarRepo)
    {
        $this->jenisKeluarRepository = $jenisKeluarRepo;
    }

    /**
     * Display a listing of the JenisKeluar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $jenisKeluars = $this->jenisKeluarRepository->all();

        return view('jenis_keluars.index')
            ->with('jenisKeluars', $jenisKeluars);
    }

    /**
     * Show the form for creating a new JenisKeluar.
     *
     * @return Response
     */
    public function create()
    {
        return view('jenis_keluars.create');
    }

    /**
     * Store a newly created JenisKeluar in storage.
     *
     * @param CreateJenisKeluarRequest $request
     *
     * @return Response
     */
    public function store(CreateJenisKeluarRequest $request)
    {
        $input = $request->all();

        $jenisKeluar = $this->jenisKeluarRepository->create($input);

        Flash::success('Jenis Keluar saved successfully.');

        return redirect(route('jenisKeluars.index'));
    }

    /**
     * Display the specified JenisKeluar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jenisKeluar = $this->jenisKeluarRepository->find($id);

        if (empty($jenisKeluar)) {
            Flash::error('Jenis Keluar not found');

            return redirect(route('jenisKeluars.index'));
        }

        return view('jenis_keluars.show')->with('jenisKeluar', $jenisKeluar);
    }

    /**
     * Show the form for editing the specified JenisKeluar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jenisKeluar = $this->jenisKeluarRepository->find($id);

        if (empty($jenisKeluar)) {
            Flash::error('Jenis Keluar not found');

            return redirect(route('jenisKeluars.index'));
        }

        return view('jenis_keluars.edit')->with('jenisKeluar', $jenisKeluar);
    }

    /**
     * Update the specified JenisKeluar in storage.
     *
     * @param int $id
     * @param UpdateJenisKeluarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJenisKeluarRequest $request)
    {
        $jenisKeluar = $this->jenisKeluarRepository->find($id);

        if (empty($jenisKeluar)) {
            Flash::error('Jenis Keluar not found');

            return redirect(route('jenisKeluars.index'));
        }

        $jenisKeluar = $this->jenisKeluarRepository->update($request->all(), $id);

        Flash::success('Jenis Keluar updated successfully.');

        return redirect(route('jenisKeluars.index'));
    }

    /**
     * Remove the specified JenisKeluar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jenisKeluar = $this->jenisKeluarRepository->find($id);

        if (empty($jenisKeluar)) {
            Flash::error('Jenis Keluar not found');

            return redirect(route('jenisKeluars.index'));
        }

        $this->jenisKeluarRepository->delete($id);

        Flash::success('Jenis Keluar deleted successfully.');

        return redirect(route('jenisKeluars.index'));
    }
}
