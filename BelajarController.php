<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function tampilHalamanSatu(){
        $tes = "Halo ini variabel dari BelajarController";

        return view('beranda.halaman1',compact('tes') );
    }

    public function tampilHalamanDua(){
        $tes = "Halo ini variabel dari BelajarController";

        return view('beranda.halaman2',compact('tes') );
    }

    public function tampilHalamanTiga(){
        $tes = "Halo ini variabel dari BelajarController";

        return view('beranda.halaman3',compact('tes') );
    }

    public function tampilHalamanEmpat(){
        $tes = "Halo ini variabel dari BelajarController";

        return view('beranda.halaman4',compact('tes') );
    }

    public function tampilHalamanLima(){
        $tes = "Halo ini variabel dari BelajarController";

        return view('beranda.halaman5',compact('tes') );
    }


}
