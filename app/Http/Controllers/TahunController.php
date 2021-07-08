<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTahunRequest;
use App\Http\Requests\UpdateTahunRequest;
use App\Repositories\TahunRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TahunController extends AppBaseController
{
    /** @var  TahunRepository */
    private $tahunRepository;

    public function __construct(TahunRepository $tahunRepo)
    {
        $this->tahunRepository = $tahunRepo;
    }

    /**
     * Display a listing of the Tahun.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tahuns = $this->tahunRepository->all();

        return view('tahuns.index')
            ->with('tahuns', $tahuns);
    }

    /**
     * Show the form for creating a new Tahun.
     *
     * @return Response
     */
    public function create()
    {
        return view('tahuns.create');
    }

    /**
     * Store a newly created Tahun in storage.
     *
     * @param CreateTahunRequest $request
     *
     * @return Response
     */
    public function store(CreateTahunRequest $request)
    {
        $input = $request->all();

        $tahun = $this->tahunRepository->create($input);

        Flash::success('Tahun saved successfully.');

        return redirect(route('tahuns.index'));
    }

    /**
     * Display the specified Tahun.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tahun = $this->tahunRepository->find($id);

        if (empty($tahun)) {
            Flash::error('Tahun not found');

            return redirect(route('tahuns.index'));
        }

        return view('tahuns.show')->with('tahun', $tahun);
    }

    /**
     * Show the form for editing the specified Tahun.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tahun = $this->tahunRepository->find($id);

        if (empty($tahun)) {
            Flash::error('Tahun not found');

            return redirect(route('tahuns.index'));
        }

        return view('tahuns.edit')->with('tahun', $tahun);
    }

    /**
     * Update the specified Tahun in storage.
     *
     * @param int $id
     * @param UpdateTahunRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTahunRequest $request)
    {
        $tahun = $this->tahunRepository->find($id);

        if (empty($tahun)) {
            Flash::error('Tahun not found');

            return redirect(route('tahuns.index'));
        }

        $tahun = $this->tahunRepository->update($request->all(), $id);

        Flash::success('Tahun updated successfully.');

        return redirect(route('tahuns.index'));
    }

    /**
     * Remove the specified Tahun from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tahun = $this->tahunRepository->find($id);

        if (empty($tahun)) {
            Flash::error('Tahun not found');

            return redirect(route('tahuns.index'));
        }

        $this->tahunRepository->delete($id);

        Flash::success('Tahun deleted successfully.');

        return redirect(route('tahuns.index'));
    }
}
