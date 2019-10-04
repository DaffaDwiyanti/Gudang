<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebarangRequest;
use App\Http\Requests\UpdatebarangRequest;
use App\Repositories\barangRepository;

use App\Http\Requests\CreatebarangKeluarRequest;
use App\Http\Requests\UpdatebarangKeluarRequest;
use App\Repositories\barangKeluarRepository;

use App\Http\Requests\CreatebarangMasukRequest;
use App\Http\Requests\UpdatebarangMasukRequest;
use App\Repositories\barangMasukRepository;


use App\Http\Controllers\AppBaseController; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

// use Darryldecode\Cart\Cart;
use Cart;
use Validator;

use App\Models\barang;
use App\Models\User;
use App\Models\masukDetail;
use App\Models\keluarDetail;
use Session;
use Flash;
use Response;


class gudangController extends Controller
{

    private $barangRepository;
    private $barangKeluarRepository;
    private $barangMasukRepository;
    public $flagP = "i";

    public function __construct(barangRepository $barangRepo, barangKeluarRepository $barangKeluarRepo,barangMasukRepository $barangMasukRepo)
    
    {
        $this->barangRepository = $barangRepo;
        $this->barangKeluarRepository = $barangKeluarRepo;
        $this->barangMasukRepository = $barangMasukRepo;
    }

    public function index(){
        // if($flagP == "i"){
            return view('gudang.index');
    //     }elseif($flagP == "b"){
    //         return view('gudang.barang');
    //     }elseif($flagP == "m"){
    //         return view('gudang.masuk');
    //     }elseif($flagP == "k"){
    //         return view('gudang.keluar');
    //     }else{
    //         return view('gudang.index');
    //     }
    }

    //---------------- BARANG MASUK & SUMMARY MASUK
    public function masuk(){
        $masuks = $this->barangMasukRepository->all();
        return view('gudang.masuk')->with('masuks', $masuks);
        $flagP == "m";
    }
    public function masukDetail($id){
        $details = DB::table('qw_resumeKeluar')->where('id_keluar', $id)->get();
        return view('gudang.masukDetail')->with('details', $details);
        
    }
    public function keluarDetail($id){
        $details = keluarDetail::where('id_keluar', $id)->get();
        return view('gudang.keluarDetail')->with('details', $details);
        
    }
    public function bmasuk(){
        $idmasuk = $this->barangMasukRepository->all();
        $barangs = $this->barangRepository->all();
        return view('gudang.bmasuk')
        ->with('barangs', $barangs)
        ->with('idmasuks', $idmasuk->count());

        return view('gudang.bmasuk')->with('datas' , $datas)->with('barangs', $barangs);
    }
    public function bmasukKranjang($id){

        $userId = Auth::user()->id;
        $datas = barang::where('id', $id)->first();
        Session::push('barang', $datas);

        $keranjang = Session::get('barang');
        return view('gudang.bmasuk')->with('keranjang', $keranjang);
    }
    

    
    //---------------- BARANG KELUAR & SUMMARY KELUAR
    public function keluar(){
        $keluars = $this->barangKeluarRepository->all();
        return view('gudang.keluar')->with('keluars', $keluars);
        $flagP == "k";
    }
    public function bkeluar(){
        $barangs = $this->barangRepository->all();
        return view('gudang.bkeluar')->with('barangs', $barangs);
    }

//--------------------BARANG----------------------------
    public function barang(){
        $barangs = $this->barangRepository->all();
        return view('gudang.barang')->with('barangs', $barangs);
        $flagP == "b";
    }
    public function barangHapus($id){

        $barang = $this->barangRepository->find($id);

        if (empty($barang)) {
            Flash::error('Barang not found');

            return redirect(route('gudang.index'));
        }

        $this->barangRepository->delete($id);

        Flash::success('Barang deleted successfully.');

        $flagP = "b";
        return Redirect::back()->with('message','Operation Successful !');
    }
    public function barangEdit($id)
    {

        $barang = $this->barangRepository->find($id);

        if (empty($barang)) {
            Flash::error('Barang not found');

            return redirect(route('barangs.index'));
        }

        return view('gudang.barangEdit')->with('barang', $barang);
    }

    
    public function store(Request $request)
    {
        $input = $request->all();

        $barang = $this->barangRepository->create($input);

        Flash::success('Barang saved successfully.');
        return Redirect::back()->with('message','Operation Successful !');


    }

    public function updateB($id, UpdatebarangRequest $request)
    {
        $barang = $this->barangRepository->find($id);

        if (empty($barang)) {
            Flash::error('Barang not found');

            return redirect(route('gudang.index'));
        }

        $barang = $this->barangRepository->update($request->all(), $id);

        Flash::success('Barang updated successfully.');

        return redirect(route('gudang'));
    }
}
