<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class ManagementUserController extends Controller  
{    
    public function index(){
   $nama="Arvita Agus Kurniasari";
   $pelajaran=["Algoritma & Pemrograman","kalkulus","Pemrograman Web"];
   return view ('home',compact('nama','pelajaran'));
    }
    public function create(){
        return "Method ini digunakan menampilkan form untuk menambah data";
    }
    public function store(Request $request){
        return "Method ini untuk menciptakan datauser yang baru";
    }
    public function show($id){
        return "Method ini untuk mengambil satu data user dengan id" . $id;
    }
    public function edit($id){
        return "Method ini untuk menampilkan form untuk mengubah data edit dengan id" . $id;
    }
    public function update(Request $request, $id){
        return "Method ini untuk mengubah data user dengan id". $id;
    }
    public function destroy($id){
        return "Method untuk menghapus data user dengan id". $id;
    }
}