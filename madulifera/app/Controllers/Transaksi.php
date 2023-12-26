<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\MaduModel;
use PhpParser\Node\Expr\Cast\String_;

class Transaksi extends BaseController
{
    protected $TransaksiModel, $MaduModel;

    public function __construct()
    {
        $this->TransaksiModel = new TransaksiModel();
        $this->MaduModel = new MaduModel();
    }

    public function index()
    {
        $all = $this->TransaksiModel->findAll();
        $data = [
            'transaksi' => $all
        ];
        return view('halaman/transaksi/allTransaksi', $data);
    }

    public function tambah()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Customer harus diisi'
                ]
            ],
            'pembeli' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Pembelian harus diisi'
                ]
            ],
            'pembelian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Pembelian harus diisi'
                ]
            ],
            'jumlah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jumlah Pembelian harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('transaksi/tambah')->withInput();
        } else {
            $id_madu = $this->request->getVar('idmadu');
            $pembeli = $this->request->getVar('pembeli');
            $banyak = $this->request->getVar('jumlah');

            if ($pembeli == 'Reseller') {
                $barang = $this->MaduModel->select('harga_res')->where('id_madu', $id_madu)->get()->getResultArray();
                $harga = (int)$barang[0]['harga_res'] * (int)$banyak;
            } else {
                $barang = $this->MaduModel->select('harga_cust')->where('id_madu', $id_madu)->get()->getResultArray();
                $harga = (int)$barang[0]['harga_cust'] * (int)$banyak;
            }
            $this->TransaksiModel->save([
                'nama_customer' => $this->request->getVar('nama'),
                'pembeli' => $pembeli,
                'jenis_pembelian' => $this->request->getVar('pembelian'),
                'banyak' => $banyak,
                'total_harga' => $harga,
                'id_madu' => $id_madu
            ]);
            return redirect()->to('/transaksi');
        }
    }

    public function Ubah()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Customer harus diisi'
                ]
            ],
            'pembeli' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Pembelian harus diisi'
                ]
            ],
            'pembelian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Pembelian harus diisi'
                ]
            ],
            'jumlah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jumlah Pembelian harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('transaksi/update-data')->withInput();
        } else {
            $id_madu = $this->request->getVar('idmadu');
            $pembeli = $this->request->getVar('pembeli');
            $banyak = $this->request->getVar('jumlah');

            if ($pembeli == 'Reseller') {
                $barang = $this->MaduModel->select('harga_res')->where('id_madu', $id_madu)->get()->getResultArray();
                $harga = (int)$barang[0]['harga_res'] * (int)$banyak;
            } else {
                $barang = $this->MaduModel->select('harga_cust')->where('id_madu', $id_madu)->get()->getResultArray();
                $harga = (int)$barang[0]['harga_cust'] * (int)$banyak;
            }
            $this->TransaksiModel->replace([
                'id_transaksi' => $this->request->getVar('id'),
                'nama_customer' => $this->request->getVar('nama'),
                'pembeli' => $pembeli,
                'jenis_pembelian' => $this->request->getVar('pembelian'),
                'banyak' => $banyak,
                'total_harga' => $harga,
                'id_madu' => $id_madu
            ]);
            $all = $this->TransaksiModel->findAll();
            $data = [
                'transaksi' => $all
            ];
            return view('halaman/transaksi/allTransaksi', $data);
        }
    }

    public function Hapus($id)
    {
        $this->TransaksiModel->where('id_transaksi', $id);
        $this->TransaksiModel->delete();
        return redirect()->to('/transaksi');
    }
}
