<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetargetRequest;
use App\Http\Requests\UpdatetargetRequest;
use App\Repositories\targetRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Perhitungan;
use Flash;
use Response;
use Mockery\CountValidator\Exception;

class targetController extends AppBaseController
{
    /** @var  targetRepository */
    private $targetRepository;

    public function __construct(targetRepository $targetRepo)
    {
        $this->targetRepository = $targetRepo;
    }

    /**
     * Display a listing of the target.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $targets = $this->targetRepository->all();

        return view('targets.index')
            ->with('targets', $targets);
    }

    /**
     * Show the form for creating a new target.
     *
     * @return Response
     */
    public function create()
    {

        return view('targets.create');
    }

    /**
     * Store a newly created target in storage.
     *
     * @param CreatetargetRequest $request
     *
     * @return Response
     */
    public function store(CreatetargetRequest $request)
    {
        $input = $request->all();

        $target = $this->targetRepository->create($input);

        Flash::success('Target saved successfully.');

        return redirect(route('targets.index'));
    }

    /**
     * Display the specified target.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $target = $this->targetRepository->find($id);

        if (empty($target)) {
            Flash::error('Target not found');

            return redirect(route('targets.index'));
        }

        return view('targets.show')->with('target', $target);
    }

    /**
     * Show the form for editing the specified target.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $target = $this->targetRepository->find($id);

        if (empty($target)) {
            Flash::error('Target not found');

            return redirect(route('targets.index'));
        }

        return view('targets.edit')->with('target', $target);
    }

    /**
     * Update the specified target in storage.
     *
     * @param int $id
     * @param UpdatetargetRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetargetRequest $request)
    {
        $target = $this->targetRepository->find($id);

        if (empty($target)) {
            Flash::error('Target not found');

            return redirect(route('targets.index'));
        }

        $target = $this->targetRepository->update($request->all(), $id);

        Flash::success('Target updated successfully.');

        return redirect(route('targets.index'));
    }

    /**
     * Remove the specified target from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $target = $this->targetRepository->find($id);

        if (empty($target)) {
            Flash::error('Target not found');

            return redirect(route('targets.index'));
        }

        $this->targetRepository->delete($id);

        Flash::success('Target deleted successfully.');

        return redirect(route('targets.index'));
    }
}
