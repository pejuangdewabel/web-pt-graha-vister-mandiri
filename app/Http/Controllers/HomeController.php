<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class HomeController extends Controller
{
    public function index(){    
        $jual = Property::where('status2', '1')->take(3)->latest()->get();
        $sewa = Property::where('status2', '2')->take(3)->latest()->get();

        $countJual = Property::where('status2','1')->count();
        $countsewa = Property::where('status2', '2')->count();

        return view('pages.home',[
            'jual' => $jual,
            'sewa' => $sewa,
            'countJual' => $countJual,
            'countsewa' => $countsewa
        ]);
    }

    public function about(){
        return view('pages.tentang');
    }

    public function dijual(){
        return view('pages.dijual');
    }

    public function disewakan()
    {
        return view('pages.disewakan');
    }

    public function dijualDetail($id){
        $detail = Property::where('slug', $id)->firstOrFail();         
        return view('pages.detailDijual',[
            'detail' => $detail
        ]);
    }

    public function disewakanDetail($id){
        $detail = Property::where('slug', $id)->firstOrFail();
        return view('pages.detailDisewakan',[
            'detail' => $detail
        ]);
    }    

    public function pencarian($id){
        $hasil = Property::where('kabkot', $id)->paginate(6);

        if($id == '1'){
            $k = 'Bandar Lampung';
        }elseif($id == '2'){
            $k = 'Lampung Selatan';
        }elseif($id == '3'){
            $k = 'Pesawaran';
        }
        return view('pages.pencarian',[
            'hasil' => $hasil,
            'wilayah' => $k
        ]);
    }

}
