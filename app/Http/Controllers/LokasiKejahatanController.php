<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLokasiKejahatanRequest;
use App\Http\Requests\UpdateLokasiKejahatanRequest;
use App\Repositories\LokasiKejahatanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\JenisKejahatan;
use App\Models\LokasiKejahatan;

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
        $no = 1;
        return view('lokasi_kejahatans.index',compact('lokasiKejahatans','no'));
    }

    /**
     * Show the form for creating a new LokasiKejahatan.
     *
     * @return Response
     */
    public function create()
    {
        $jenisKejahatan = JenisKejahatan::pluck('jenis_kejahatan', 'id');
        $id = JenisKejahatan::pluck('jenis_kejahatan', 'id');

        return view('lokasi_kejahatans.create',compact('jenisKejahatan','id'));
    }

    /**
     * Store a newly created LokasiKejahatan in storage.
     *
     * @param CreateLokasiKejahatanRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        // $lokasiKejahatan = $this->lokasiKejahatanRepository->create($input);

        // menyimpan data file yang diupload ke variabel $file
		$file_gambar = $request->file('gambar');
		echo $nama_file_gambar = time()."_".$file_gambar->getClientOriginalName();
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload_gambar = 'file_gambar';
		$file_gambar->move($tujuan_upload_gambar,$nama_file_gambar);

        $file_koordinat = $request->file('koordinat');
		echo $nama_file_koordinat = time()."_".$file_koordinat->getClientOriginalName();
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload_koordinat = 'file_koordinat';
		$file_koordinat->move($tujuan_upload_koordinat,$nama_file_koordinat);
 
		$lokasiKejahatan = new LokasiKejahatan;
        $lokasiKejahatan->id_jenis_kejahatan = $request->id_jenis_kejahatan;
        $lokasiKejahatan->alamat = $request->alamat;
        $lokasiKejahatan->gambar = $nama_file_gambar;
        $lokasiKejahatan->deskripsi = $request->deskripsi;
        $lokasiKejahatan->tahun_kejadian = $request->tahun_kejadian;
        $lokasiKejahatan->kelurahan = $request->kelurahan;
        $lokasiKejahatan->kecamatan = $request->kecamatan;
        $lokasiKejahatan->potensi_kerawanan = $request->potensi_kerawanan;
        $lokasiKejahatan->koordinat = $nama_file_koordinat;
        $lokasiKejahatan->save();
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
        $jenisKejahatan = JenisKejahatan::pluck('jenis_kejahatan', 'id');
        $id = JenisKejahatan::where('id',$lokasiKejahatan->id_jenis_kejahatan)->get();


        if (empty($lokasiKejahatan)) {
            Flash::error('Lokasi Kejahatan not found');

            return redirect(route('lokasiKejahatans.index'));
        }

        return view('lokasi_kejahatans.edit',compact('lokasiKejahatan','jenisKejahatan','id'));
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
