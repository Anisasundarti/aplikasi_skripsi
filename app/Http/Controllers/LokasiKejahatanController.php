<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLokasiKejahatanRequest;
use App\Http\Requests\UpdateLokasiKejahatanRequest;
use App\Repositories\LokasiKejahatanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LokasiKejahatanController extends AppBaseController
{
    /** @var  LokasiKejahatanRepository */
    private $lokasiKejahatanRepository;

    public function __construct(LokasiKejahatanRepository $lokasiKejahatanRepo)
    {
        $this->lokasiKejahatanRepository = $lokasiKejahatanRepo;
    }

    /**
     * Display a listing of the LokasiKejahatan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $lokasiKejahatans = $this->lokasiKejahatanRepository->all();

        return view('lokasi_kejahatans.index')
            ->with('lokasiKejahatans', $lokasiKejahatans);
    }

    /**
     * Show the form for creating a new LokasiKejahatan.
     *
     * @return Response
     */
    public function create()
    {
        return view('lokasi_kejahatans.create');
    }

    /**
     * Store a newly created LokasiKejahatan in storage.
     *
     * @param CreateLokasiKejahatanRequest $request
     *
     * @return Response
     */
    public function store(CreateLokasiKejahatanRequest $request)
    {
        $input = $request->all();

        $lokasiKejahatan = $this->lokasiKejahatanRepository->create($input);

        Flash::success('Lokasi Kejahatan saved successfully.');

        return redirect(route('lokasiKejahatans.index'));
    }

    /**
     * Display the specified LokasiKejahatan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lokasiKejahatan = $this->lokasiKejahatanRepository->find($id);

        if (empty($lokasiKejahatan)) {
            Flash::error('Lokasi Kejahatan not found');

            return redirect(route('lokasiKejahatans.index'));
        }

        return view('lokasi_kejahatans.show')->with('lokasiKejahatan', $lokasiKejahatan);
    }

    /**
     * Show the form for editing the specified LokasiKejahatan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lokasiKejahatan = $this->lokasiKejahatanRepository->find($id);

        if (empty($lokasiKejahatan)) {
            Flash::error('Lokasi Kejahatan not found');

            return redirect(route('lokasiKejahatans.index'));
        }

        return view('lokasi_kejahatans.edit')->with('lokasiKejahatan', $lokasiKejahatan);
    }

    /**
     * Update the specified LokasiKejahatan in storage.
     *
     * @param int $id
     * @param UpdateLokasiKejahatanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLokasiKejahatanRequest $request)
    {
        $lokasiKejahatan = $this->lokasiKejahatanRepository->find($id);

        if (empty($lokasiKejahatan)) {
            Flash::error('Lokasi Kejahatan not found');

            return redirect(route('lokasiKejahatans.index'));
        }

        $lokasiKejahatan = $this->lokasiKejahatanRepository->update($request->all(), $id);

        Flash::success('Lokasi Kejahatan updated successfully.');

        return redirect(route('lokasiKejahatans.index'));
    }

    /**
     * Remove the specified LokasiKejahatan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lokasiKejahatan = $this->lokasiKejahatanRepository->find($id);

        if (empty($lokasiKejahatan)) {
            Flash::error('Lokasi Kejahatan not found');

            return redirect(route('lokasiKejahatans.index'));
        }

        $this->lokasiKejahatanRepository->delete($id);

        Flash::success('Lokasi Kejahatan deleted successfully.');

        return redirect(route('lokasiKejahatans.index'));
    }
}
