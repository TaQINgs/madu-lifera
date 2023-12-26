<?php

namespace App\Models;

use CodeIgniter\Model;

class ResellerModel extends Model
{
    protected $table = 'tabelreseller';
    protected $id = 'id_res';
    protected $allowedFields = ['id_res', 'nama_res', 'nama_toko', 'prov', 'kota_kab', 'kec', 'no_hp', 'nama_bank', 'no_rek'];
}
