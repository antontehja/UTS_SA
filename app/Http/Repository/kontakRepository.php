<?php

namespace App\Repositories;

use App\kontak;

class kontakRepository implements kontakInterface {

    public function create($nama, $telepon, $email, $alamat) {
        $newKontak = new Kontak;
        $newKontak->nama = $nama;
        $newKontak->telepon = $telepon;
        $newKontak->email = $email;
        $newKontak->alamat = $alamat;
        $newKontak->save();
    }

    public function all() {
        return Kontak::all();
    }

    public function search($nama) {
        return Kontak::findOrFail($nama);
    }

    public function get($id) {
        return Kontak::findOrFail($id);
    }

    public function update($id, $nama, $telepon, $email, $alamat) {
        $newKontak = Kontak::find($id);
        $newKontak->nama = $nama;
        $newKontak->telepon = $telepon;
        $newKontak->email = $email;
        $newKontak->alamat = $alamat;
        $newKontak->save();
    }

    public function delete($id) {
        $newKontak = Kontak::findOrFail($id);
        $newKontak->delete();
    }


}

?>