<?php

namespace App\Models;

use CodeIgniter\Model;

class MaduModel extends Model
{
    protected $table = 'tabelmadu';
    protected $id = 'id_madu';
    protected $allowedFields = ['id_madu', 'nama_madu', 'ukuran', 'harga_cust', 'harga_res', 'gambar'];
}
