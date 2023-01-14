<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kategori;
class PenggunaController extends Controller
{
        public function tampilHalamanInputdata(){
            $tes = "Halo ini variabel dari PenggunaController";

            return view('beranda.inputdata',compact('tes') );
        }
        public function tampilHalamanHapusdata(){
            $tes = "Halo ini variabel dari PenggunaController";

            return view('beranda.hapusdata',compact('tes') );
        }
        public function tampilHalamanSimpandata(){
            $tes = "Halo ini variabel dari PenggunaController";

            return view('beranda.simpandata',compact('tes') );
        }
        public function editPengguna($id){
            $varUsr = User::findOrFail($id);
            return view('beranda.editdata',compact('varUsr') );
        }

        public function tampilHalamanDatapengguna(){
            $user = User::where('delstatus', '=', 1)->latest()->get();

            return view('beranda.DataPengguna',compact('user') );
        }

        public function simpanPengguna(Request $request){
            User::create([
                'name'=>$request->name,
                'level'=>'user',
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
            ]);
            return redirect('DataPengguna');
        }

        public function simpanPerubahan(Request $request, $id){
            if ($request->password) {
                $varUsr = User::findOrFail($id);
                $data = [
                    'name'=>$request->name,
                    'level'=>'user',
                    'email'=>$request->email,
                    'password'=>bcrypt($request->password),
                ];
                $varUsr->update($data);
                return redirect('DataPengguna');
            }else{
                return back();
            };
        }

        public function hapusPengguna($id){
            $varUsr = User::findOrFail($id);
            $data = ['delstatus' => false,];
            $varUsr->update($data);
            return redirect('DataPengguna');
        }
        public function tampilHalamanKategori(){
            $Kategori = Kategori::where('delstatus','=', 1)->latest()->get();

            return view('beranda.Kategori', compact('Kategori') );
        }

        public function tambahKategori(){

            return view('beranda.tambah-kategori');
        }

        public function simpanKategori(Request $request){
            Kategori::create([
                'namakategori'=>$request->namakategori,
                'total'=>$request->total,
                'delstatus'=> 1,
            ]);
            return redirect('Kategori');
        }

        public function editKategori($id){
            $varUsr = Kategori::findOrFail($id);
            return view('beranda.edit-kategori',compact('varUsr') );
        }

        public function perubahanKategori(Request $request, $id){
            $varUsr = Kategori::findOrFail($id);
            $data = [
                'namakategori'=>$request->namakategori,
                'total'=>$request->total,
                'delstatus'=> 1,
            ];
            $varUsr->update($data);
            return redirect('Kategori');

        }

        public function HapusKategori($id){
            $kategori = kategori::FindOrFail($id);
            $data=['delstatus' => false,];
            $kategori->update($data);
            return redirect('Kategori');
        }
}
