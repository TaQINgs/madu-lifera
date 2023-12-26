<?php

namespace App\Controllers;

use App\Models\TesmonModel;

class Testimoni extends BaseController
{
    protected $TesmonModel;

    public function __construct()
    {
        $this->TesmonModel = new TesmonModel();
    }

    public function index()
    {
        $all = $this->TesmonModel->findAll();
        $data = [
            'testimoni' => $all
        ];
        return view('halaman/testimoni/allTestimoni', $data);
    }

    public function tambahTestimoni()
    {
        if (!$this->validate(
            [
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
            return redirect()->to('testimoni/tambah')->withInput();
        } else {
            $fileGambar = $this->request->getFile('gambar');


            if ($fileGambar->getError() == 4) {

                $namaGambar = 'default.jpg';
            } else {
                $namaGambar = $fileGambar->getRandomName();
                $fileGambar->move('img', $namaGambar);
            }
        }
        $this->TesmonModel->save([
            'gambar' => $namaGambar

        ]);
        return redirect()->to('/testimoni');
    }


    public function deleteTestimoni($id)
    {
        $tesmon = $this->TesmonModel->where('id_tesmon', $id)->first();
        if ($tesmon['gambar'] != 'default.jpg') {
            unlink('img/' . $tesmon['gambar']);
        }

        $this->TesmonModel->where('id_tesmon', $id);
        $this->TesmonModel->delete();
        $all = $this->TesmonModel->findAll();
        $data = [
            'testimoni' => $all
        ];
        return view('halaman/testimoni/allTestimoni', $data);
    }
}
