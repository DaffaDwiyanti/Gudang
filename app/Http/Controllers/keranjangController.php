<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatekeranjangRequest;
use App\Http\Requests\UpdatekeranjangRequest;
use App\Repositories\keranjangRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class keranjangController extends AppBaseController
{
    /** @var  keranjangRepository */
    private $keranjangRepository;

    public function __construct(keranjangRepository $keranjangRepo)
    {
        $this->keranjangRepository = $keranjangRepo;
    }

    /**
     * Display a listing of the keranjang.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $keranjangs = $this->keranjangRepository->all();

        return view('keranjangs.index')
            ->with('keranjangs', $keranjangs);
    }

    /**
     * Show the form for creating a new keranjang.
     *
     * @return Response
     */
    public function create()
    {
        return view('keranjangs.create');
    }

    /**
     * Store a newly created keranjang in storage.
     *
     * @param CreatekeranjangRequest $request
     *
     * @return Response
     */
    public function store(CreatekeranjangRequest $request)
    {
        $input = $request->all();

        $keranjang = $this->keranjangRepository->create($input);

        Flash::success('Keranjang saved successfully.');

        return redirect(route('keranjangs.index'));
    }

    /**
     * Display the specified keranjang.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $keranjang = $this->keranjangRepository->find($id);

        if (empty($keranjang)) {
            Flash::error('Keranjang not found');

            return redirect(route('keranjangs.index'));
        }

        return view('keranjangs.show')->with('keranjang', $keranjang);
    }

    /**
     * Show the form for editing the specified keranjang.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $keranjang = $this->keranjangRepository->find($id);

        if (empty($keranjang)) {
            Flash::error('Keranjang not found');

            return redirect(route('keranjangs.index'));
        }

        return view('keranjangs.edit')->with('keranjang', $keranjang);
    }

    /**
     * Update the specified keranjang in storage.
     *
     * @param int $id
     * @param UpdatekeranjangRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatekeranjangRequest $request)
    {
        $keranjang = $this->keranjangRepository->find($id);

        if (empty($keranjang)) {
            Flash::error('Keranjang not found');

            return redirect(route('keranjangs.index'));
        }

        $keranjang = $this->keranjangRepository->update($request->all(), $id);

        Flash::success('Keranjang updated successfully.');

        return redirect(route('keranjangs.index'));
    }

    /**
     * Remove the specified keranjang from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $keranjang = $this->keranjangRepository->find($id);

        if (empty($keranjang)) {
            Flash::error('Keranjang not found');

            return redirect(route('keranjangs.index'));
        }

        $this->keranjangRepository->delete($id);

        Flash::success('Keranjang deleted successfully.');

        return redirect(route('keranjangs.index'));
    }
}
