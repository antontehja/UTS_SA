<?php

namespace App\Repositories;

use App\kontak;

interface kontakInterface {
    public function create($nama, $telepon, $email, $alamat);
    public function all();
    public function get($id);
    public function update($id, $nama, $telepon, $email, $alamat);
    public function delete($id);
}

?>