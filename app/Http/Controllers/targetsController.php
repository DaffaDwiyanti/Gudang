<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreatetargetRequest;
use App\Http\Requests\UpdatetargetRequest;
use App\Repositories\targetRepository;
use App\Http\Controllers\AppBaseController;

use App\Http\Requests\CreatebarangRequest;
use App\Http\Requests\UpdatebarangRequest;
use App\Repositories\barangRepository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Flash;
use Response;


class targetsController extends Controller
{

    private $barangRepository;
    private $targetRepository;

    public function __construct(targetRepository $targetRepo, barangRepository $barangRepo)
    
    {
        $this->barangRepository = $barangRepo;
        $this->targetRepository = $targetRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $targets = $this->targetRepository->all();

        return view('sales.tableP')->with('targets', $targets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('target.createP');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $target = $this->targetRepository->create($input);

        Flash::success('Target saved successfully.');

        return redirect(route('target.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $target = $this->targetRepository->find($id);

        if (empty($target)) {
            Flash::error('Target not found');

            return redirect(route('targets.index'));
        }

        return view('target.showP')->with('target', $target);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $target = $this->targetRepository->find($id);

        if (empty($target)) {
            Flash::error('Target not found');

            return redirect(route('targets.index'));
        }

        return view('target.editP')->with('target', $target);
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
        $target = $this->targetRepository->find($id);

        if (empty($target)) {
            Flash::error('Target not found');

            return redirect(route('target.index'));
        }

        $target = $this->targetRepository->update($request->all(), $id);

        Flash::success('Target updated successfully.');

        return redirect(route('target.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $target = $this->targetRepository->find($id);

        if (empty($target)) {
            Flash::error('Target not found');

            return redirect(route('target.index'));
        }

        $this->targetRepository->delete($id);

        Flash::success('Target deleted successfully.');

        return redirect(route('target.index'));
    }
}
