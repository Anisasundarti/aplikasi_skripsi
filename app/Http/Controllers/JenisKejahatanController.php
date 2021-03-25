<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJenisKejahatanRequest;
use App\Http\Requests\UpdateJenisKejahatanRequest;
use App\Repositories\JenisKejahatanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class JenisKejahatanController extends AppBaseController
{
    /** @var  JenisKejahatanRepository */
    private $jenisKejahatanRepository;

    public function __construct(JenisKejahatanRepository $jenisKejahatanRepo)
    {
        $this->jenisKejahatanRepository = $jenisKejahatanRepo;
    }

    /**
     * Display a listing of the JenisKejahatan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $jenisKejahatans = $this->jenisKejahatanRepository->all();
        $no =1;
        return view('jenis_kejahatans.index',compact('jenisKejahatans','no'));
            
    }

    /**
     * Show the form for creating a new JenisKejahatan.
     *
     * @return Response
     */
    public function create()
    {
        return view('jenis_kejahatans.create');
    }

    /**
     * Store a newly created JenisKejahatan in storage.
     *
     * @param CreateJenisKejahatanRequest $request
     *
     * @return Response
     */
    public function store(CreateJenisKejahatanRequest $request)
    {
        $input = $request->all();

        $jenisKejahatan = $this->jenisKejahatanRepository->create($input);

        Flash::success('Jenis Kejahatan saved successfully.');

        return redirect(route('jenisKejahatans.index'));
    }

    /**
     * Display the specified JenisKejahatan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jenisKejahatan = $this->jenisKejahatanRepository->find($id);

        if (empty($jenisKejahatan)) {
            Flash::error('Jenis Kejahatan not found');

            return redirect(route('jenisKejahatans.index'));
        }

        return view('jenis_kejahatans.show')->with('jenisKejahatan', $jenisKejahatan);
    }

    /**
     * Show the form for editing the specified JenisKejahatan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jenisKejahatan = $this->jenisKejahatanRepository->find($id);

        if (empty($jenisKejahatan)) {
            Flash::error('Jenis Kejahatan not found');

            return redirect(route('jenisKejahatans.index'));
        }

        return view('jenis_kejahatans.edit')->with('jenisKejahatan', $jenisKejahatan);
    }

    /**
     * Update the specified JenisKejahatan in storage.
     *
     * @param int $id
     * @param UpdateJenisKejahatanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJenisKejahatanRequest $request)
    {
        $jenisKejahatan = $this->jenisKejahatanRepository->find($id);

        if (empty($jenisKejahatan)) {
            Flash::error('Jenis Kejahatan not found');

            return redirect(route('jenisKejahatans.index'));
        }

        $jenisKejahatan = $this->jenisKejahatanRepository->update($request->all(), $id);

        Flash::success('Jenis Kejahatan updated successfully.');

        return redirect(route('jenisKejahatans.index'));
    }

    /**
     * Remove the specified JenisKejahatan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jenisKejahatan = $this->jenisKejahatanRepository->find($id);

        if (empty($jenisKejahatan)) {
            Flash::error('Jenis Kejahatan not found');

            return redirect(route('jenisKejahatans.index'));
        }

        $this->jenisKejahatanRepository->delete($id);

        Flash::success('Jenis Kejahatan deleted successfully.');

        return redirect(route('jenisKejahatans.index'));
    }
}
