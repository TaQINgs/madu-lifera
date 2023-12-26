<?php

namespace App\Controllers;

use \App\Models\MaduModel;
use \App\Models\TransaksiModel;
use \App\Models\TesmonModel;
use \App\Models\ResellerModel;

class Halaman extends BaseController
{
    protected $MaduModel, $TransaksiModel, $TesmonModel, $ResellerModel;
    public function __construct()
    {
        $this->MaduModel = new MaduModel();
        $this->TransaksiModel = new TransaksiModel();
        $this->TesmonModel = new TesmonModel();
        $this->ResellerModel = new ResellerModel();
    }
    public function index()
    {
        $produkAll = $this->MaduModel->select('count(id_madu) as jumlahData')->get()->getResultArray();
        $transaksiAll = $this->TransaksiModel->select('count(id_transaksi) as jumlahTrans, sum(total_harga) as jumlahUang')->get()->getResultArray();
        $data = [
            'produk' => $produkAll[0],
            'transaksi' => $transaksiAll[0]
        ];
        return view('halaman/index', $data);
    }

    // Transaksi

    public function halamanTambahTransaksi()
    {
        $all = $this->MaduModel->findAll();
        $data = [
            'validation' => \Config\Services::validation(),
            'produkAll' => $all
        ];
        return view('halaman/transaksi/tambahTransaksi', $data);
    }

    public function halamanUpdateTransaksi()
    {
        $all = $this->TransaksiModel->findAll();
        $data = [
            'transaksi' => $all
        ];
        return view('halaman/transaksi/updateTransaksi', $data);
    }

    public function halamanUpdateDataTransaksi($id)
    {
        $all = $this->TransaksiModel->select('*')->where('id_transaksi', $id)->get()->getResultArray();
        $madu = $this->MaduModel->findAll();
        $data = [
            'produk' => $all[0],
            'produkAll' => $madu,
            'validation' => \Config\Services::validation()
        ];
        return view('halaman/transaksi/updateDataTransaksi', $data);
    }

    //produk

    public function halamanTambahProduk()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('halaman/Produk/tambahProduk', $data);
    }

    public function halamanUpdateProduk()
    {
        $all = $this->MaduModel->findAll();
        $data = [
            'produk' => $all
        ];
        return view('halaman/Produk/updateProduk', $data);
    }

    public function halamanUpdateDataProduk($id)
    {
        $all = $this->MaduModel->select('*')->where('id_madu', $id)->get()->getResultArray();
        $data = [
            'produk' => $all[0],
            'validation' => \Config\Services::validation()
        ];
        return view('halaman/Produk/updateDataProduk', $data);
    }

    public function cari()
    {
        $katakunci = $this->request->getVar('cari');
        $produk = $this->MaduModel->select('*')->where("nama_madu like '%" . $katakunci . "%' or ukuran like '%" . $katakunci . "%' or harga_cust like '%" . $katakunci . "%' or harga_res like '%" . $katakunci . "%'")->get()->getresultarray();
        $transaksi = $this->TransaksiModel->select('*')->where("nama_customer like '%" . $katakunci . "%' or jenis_pembelian like '%" . $katakunci . "%'")->get()->getResultArray();
        $data = [
            'katakunci' => $katakunci,
            'produk' => $produk,
            'transaksi' => $transaksi
        ];
        return view('halaman/cari', $data);
    }

    //testimoni
    public function halamanTambahTestimoni()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('halaman/Testimoni/tambahTestimoni', $data);
    }
    public function halamanUpdateTestimoni()
    {
        $all = $this->TesmonModel->findAll();
        $data = [
            'testimoni' => $all
        ];
        return view('halaman/testimoni/updateTestimoni', $data);
    }

    public function halamanTambahReseller()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('halaman/reseller/tambahReseller', $data);
    }

    public function halamanUpdateReseller()
    {
        $all = $this->ResellerModel->findAll();
        $data = [
            'reseller' => $all
        ];
        return view('halaman/reseller/updateReseller', $data);
    }

    public function halamanUpdateDataReseller($id)
    {
        $all = $this->ResellerModel->select('*')->where('id_res', $id)->get()->getResultArray();
        $data = [
            'reseller' => $all[0],
            'validation' => \Config\Services::validation()
        ];
        return view('halaman/reseller/updateDataReseller', $data);
    }
}
