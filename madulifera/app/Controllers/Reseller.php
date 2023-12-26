<?php

namespace App\Controllers;

use App\Models\ResellerModel;
use CodeIgniter\HTTP\Files\UploadedFile;

class Reseller extends BaseController
{
    protected $ResellerModel;

    public function __construct()
    {
        $this->ResellerModel = new ResellerModel;
    }

    public function index()
    {
        $all = $this->ResellerModel->findAll();
        $data = [
            'reseller' => $all
        ];
        return view('halaman/reseller/allReseller', $data);
    }

    public function tambahReseller()
    {
        if (!$this->validate(
            [
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama reseller harus diisi'
                    ]
                ],
                'namaToko' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Ukuran produk harus diisi'
                    ]
                ],
                'prov' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harga produk harus diisi'
                    ]
                ],
                'kota/kab' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harga produk harus diisi'
                    ]
                ],
                'noHp' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harga produk harus diisi'
                    ]
                ],
                'namaBank' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harga produk harus diisi'
                    ]
                ],
                'noRek' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harga produk harus diisi'
                    ]
                ]
            ]
        )) {
            return redirect()->to('reseller/tambah')->withInput();
        } else {
            $this->ResellerModel->save([
                'nama_res' => $this->request->getVar('nama'),
                'nama_toko' => $this->request->getVar('namaToko'),
                'prov' => $this->request->getVar('prov'),
                'kota_kab' => $this->request->getVar('kota/kab'),
                'kec' => $this->request->getVar('kec'),
                'no_hp' => $this->request->getVar('noHp'),
                'nama_bank' => $this->request->getVar('namaBank'),
                'no_rek' => $this->request->getVar('noRek')
            ]);
            return redirect()->to('/reseller');
        }
    }

    public function updateReseller()
    {
        if (!$this->validate(
            [
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama reseller harus diisi'
                    ]
                ],
                'namaToko' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Ukuran produk harus diisi'
                    ]
                ],
                'prov' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harga produk harus diisi'
                    ]
                ],
                'kota/kab' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harga produk harus diisi'
                    ]
                ],
                'noHp' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harga produk harus diisi'
                    ]
                ],
                'namaBank' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harga produk harus diisi'
                    ]
                ],
                'noRek' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harga produk harus diisi'
                    ]
                ]
            ]
        )) {
            return redirect()->to('reseller/tambah')->withInput();
        } else {
            $this->ResellerModel->replace([
                'id_res' => $this->request->getVar('id'),
                'nama_res' => $this->request->getVar('nama'),
                'nama_toko' => $this->request->getVar('namaToko'),
                'prov' => $this->request->getVar('prov'),
                'kota_kab' => $this->request->getVar('kota/kab'),
                'kec' => $this->request->getVar('kec'),
                'no_hp' => $this->request->getVar('noHp'),
                'nama_bank' => $this->request->getVar('namaBank'),
                'no_rek' => $this->request->getVar('noRek')
            ]);
            $all = $this->ResellerModel->findAll();
            $data = [
                'reseller' => $all
            ];
            return view('halaman/reseller/allReseller', $data);
        }
    }

    public function deleteReseller($id)
    {

        $this->ResellerModel->where('id_res', $id);
        $this->ResellerModel->delete();
        $all = $this->ResellerModel->findAll();
        $data = [
            'reseller' => $all
        ];
        return view('halaman/reseller/allReseller', $data);
    }
}
