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

use App\Models\barang;
use Flash;
use Response;


class gudangController extends Controller
{

    private $barangRepository;
    private $barangKeluarRepository;
    private $barangMasukRepository;

    public function __construct(barangRepository $barangRepo, barangKeluarRepository $barangKeluarRepo,barangMasukRepository $barangMasukRepo)
    {
        $this->barangRepository = $barangRepo;
        $this->barangKeluarRepository = $barangKeluarRepo;
        $this->barangMasukRepository = $barangMasukRepo;
    }

    public function index(){
        return view('gudang.index');
    }
    public function masuk(){
        $masuks = $this->barangMasukRepository->all();
        return view('gudang.masuk')->with('masuks', $masuks);
    }
    public function bmasuk(){
        $idmasuk = $this->barangMasukRepository->all();
        $barangs = $this->barangRepository->all();
        return view('gudang.bmasuk')
        ->with('barangs', $barangs)
        ->with('idmasuks', $idmasuk->count());
    }
    public function bmasukKranjang($id){

        $barang = barang::where('id', $id)->get();
        if ($barang) {
            // abort(404);
            echo $id;
            echo $barang->namaBarang;
            // return redirect('/gudang/bmassuk');
        }else{
            
        $kranjang = session()->get('kranjang');
        if (!$kranjang) {
            $kranjang =[
                $id =>[
                    "nama" => $barang->namaBarang,
                    "kuantitas" => 1,
                    "deskripsi" => $barang->deskripsi
            ]];
            session()->put('kranjang', $kranjang);
            return redirect('/gudang/bmasuk');

        }

        if (isset($cart[$id])) {
            $cart[$id]['kuantitas']++;
            session()->put('kranjang', $kranjang);
            return redirect('/gudang/bmasuk');
        }

        $kranjang[$id] = [
            "nama" => $barang->namaBarang,
            "kuantitas" => 1,
            "deskripsi" => $barang->deskripsi
        ];
        session()->put('kranjang', $kranjang);
        return redirect('/gudang/bmasuk');

        }


    }
    
    public function keluar(){
        $keluars = $this->barangKeluarRepository->all();
        return view('gudang.keluar')->with('keluars', $keluars);
    }
    public function bkeluar(){
        $barangs = $this->barangRepository->all();
        return view('gudang.bkeluar')->with('barangs', $barangs);
    }

    public function barang(){
        $barangs = $this->barangRepository->all();
        return view('gudang.barang')->with('barangs', $barangs);;
    }

    
    public function storeBarang(Request $request)
    {
        $input = $request->all();

        $barang = $this->barangRepository->create($input);

        Flash::success('Barang saved successfully.');
        return view('gudang.barang');

    }
}
