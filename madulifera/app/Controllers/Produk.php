<?php

namespace App\Controllers;

use App\Models\MaduModel;
use CodeIgniter\HTTP\Files\UploadedFile;

class Produk extends BaseController
{
    protected $MaduModel;

    public function __construct()
    {
        $this->MaduModel = new MaduModel;
    }

    public function index()
    {
        $all = $this->MaduModel->findAll();
        $data = [
            'produk' => $all
        ];
        return view('halaman/produk/allProduk', $data);
    }
    public function tambahProduk()
    {
        if (!$this->validate(
            [
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama produk harus diisi'
                    ]
                ],
                'ukuran' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Ukuran produk harus diisi'
                    ]
                ],
                'harga' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harga produk harus diisi'
                    ]
                ],
                'gambar' => [
                    'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran max 1mb',
                        'is_image' => 'Yang anda pilih bukan gambar',
                        'mime_in' => 'Yang anda pilih bukan gambar'
                    ]
                ]
            ]
        )) {
            return redirect()->to('produk/tambah')->withInput();
        } else {
            $fileGambar = $this->request->getFile('gambar');


            if ($fileGambar->getError() == 4) {

                $namaGambar = 'default.jpg';
            } else {
                $namaGambar = $fileGambar->getName();
                $fileGambar->move('img', $namaGambar);
            }
            $this->MaduModel->save([
                'nama_madu' => $this->request->getVar('nama'),
                'ukuran' => $this->request->getVar('ukuran'),
                'harga' => $this->request->getVar('harga'),
                'gambar' => $namaGambar

            ]);
            return redirect()->to('/produk');
        }
    }
    public function updateProduk()
    {
        if (!$this->validate(
            [
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama produk harus diisi'
                    ]
                ],
                'ukuran' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Ukuran produk harus diisi'
                    ]
                ],
                'harga_cust' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harga produk untuk customer harus diisi'
                    ]
                ],
                'harga_res' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harga produk untuk customer harus diisi'
                    ]
                ],
                'gambar' => [
                    'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran max 1mb',
                        'is_image' => 'Yang anda pilih bukan gambar',
                        'mime_in' => 'Yang anda pilih bukan gambar'
                    ]
                ]
            ]
        )) {
            return redirect()->to('produk/tambah')->withInput();
        } else {
            $fileGambar = $this->request->getFile('gambar');

            if ($fileGambar->getError() == 4) {
                $namaGambar = $this->request->getVar('gambarLama');
            } else {
                $namaGambar = $fileGambar->getRandomName();
                $fileGambar->move('img', $namaGambar);
                //hapus file lama
                unlink('img/' . $this->request->getVar('gambarLama'));
            }

            $fileGambar = $this->request->getFile('gambar');
            $this->MaduModel->replace([
                'id_madu' => $this->request->getVar('id'),
                'nama_madu' => $this->request->getVar('nama'),
                'ukuran' => $this->request->getVar('ukuran'),
                'harga_cust' => $this->request->getVar('harga_cust'),
                'harga_res' => $this->request->getVar('harga_res'),
                'gambar' => $namaGambar
            ]);
            $all = $this->MaduModel->findAll();
            $data = [
                'produk' => $all
            ];
            return view('halaman/produk/allProduk', $data);
        }
    }

    public function deleteProduk($id)
    {
        $produk = $this->MaduModel->where('id_madu', $id)->first();
        if ($produk['gambar'] != 'default.jpg') {
            unlink('img/' . $produk['gambar']);
        }

        $this->MaduModel->where('id_madu', $id);
        $this->MaduModel->delete();
        $all = $this->MaduModel->findAll();
        $data = [
            'produk' => $all
        ];
        return view('halaman/produk/allProduk', $data);
    }
}
