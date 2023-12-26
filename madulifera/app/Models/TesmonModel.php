<?php

namespace App\Models;

use CodeIgniter\Model;

class TesmonModel extends Model
{
    protected $table = 'tabeltesmon';
    protected $id = 'id_tesmon';
    protected $allowedFields = ['id_madu', 'gambar'];
}
