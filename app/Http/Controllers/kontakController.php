<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kontak as kontakModel;
use App\Repositories\kontakInterface;
use App\Repositories\kontakRepository;
use App\Repositories\kontakLogRepository;

class kontakController extends Controller
{

    public function __construct(kontakRepository $repo) {
        $this->kontakRepo = $repo;
    }

    // list all Kontak
    public function index() {
        $kontak = $this->kontakRepo->all();
        return view('kontak.index', ['kontaks'=>$kontak]);
    }

    // add new form
    public function new_form() {
        return view('kontak.new');
    }

    // search data
    public function index_search(Request $request) {
        $kontaks = kontakModel::when($request->cari, function($query)use($request) {
            $query->where('nama', 'LIKE', "%{$request->cari}");
        })->get();

        return view('kontak.index', compact('kontaks'));
    }

    // save data
    public function save(Request $request) {
        $nama = $request->input('nama');
        $telepon = $request->input('telepon');
        $email = $request->input('email');
        $alamat = $request->input('alamat');
        $this->kontakRepo->create($nama, $telepon, $email, $alamat);
        return redirect(route('kontakIndex'));
    }

    // edit form
    public function edit_form($id) {
        $kontak = kontakModel::find($id);
        return view('kontak.edit', ['kontaks'=>$kontak]);
    }

    public function update(Request $request) {
        $kontak = new kontakModel;
        $kontak->nama = $request->nama;
        $kontak->telepon = $request->telepon;
        $kontak->email = $request->email;
        $kontak->alamat = $request->alamat;
        $this->kontakRepo->update($request->id,
                                    $request->nama,
                                    $request->telepon,
                                    $request->email,
                                    $request->alamat);
        return redirect('/kontak');
    }

    public function delete_form($id) {
        $this->kontakRepo->delete($id);
        return redirect('/kontak');
    }



}
