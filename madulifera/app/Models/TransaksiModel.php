<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'tabeltransaksi';
    protected $id = 'id_transaksi';
    protected $allowedFields = ['id_transaksi', 'nama_customer', 'pembeli', 'jenis_pembelian', 'tanggal_pembelian', 'banyak', 'total_harga', 'id_madu'];
}
