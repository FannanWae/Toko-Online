<?php

namespace App\Controllers;

class Toko extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->session = session();
    }
    public function index()
    {
        $barang = new \App\Models\BarangModel;
        $model = $barang->findAll();
        return view('toko/toko', [
            'model' => $model,
            'cart' => \Config\Services::cart(),
        ]);
    }
    public function cek()
    {
        $cart = \Config\Services::cart();
        $responses = $cart->contents();
        echo '<pre>';
        print_r($responses);
        echo '</pre>';
    }

    public function add()
    {
        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'      => $this->request->getPost('id'),
            'qty'     => 1,
            'price'   => $this->request->getPost('harga'),
            'name'    => $this->request->getPost('nama'),
            'options' => array(
                'gambar' => $this->request->getPost('gambar')
            )
        ));
        session()->setFlashdata('pesan', 'Barang dimasukan ke keranjang');
        return redirect()->to(site_url('toko/index'));
    }
    public function clear()
    {
        $cart = \Config\Services::cart();
        $cart->destroy();
    }
    public function keranjang()
    {
        return view('toko/keranjang', [
            'cart' => \Config\Services::cart(),
        ]);
    }

    public function del($rowid)
    {
        $cart = \Config\Services::cart();
        $cart->remove($rowid);
        return redirect()->to(site_url('toko/keranjang'));
    }
}
