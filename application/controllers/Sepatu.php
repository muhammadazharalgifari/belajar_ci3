<?php
class Sepatu extends CI_Controller 
{

    public function index()
    {
        $this->load->view('view-form-sepatu');
    }

    public function form()
    {
        $merk = $this->input->post('merk');
        $jumlah = $this->input->post('jumlah');
        $harga_per_pasang = 0;
        $total_pembelian = 0;

        if ($merk == "Nike") {
            $harga_per_pasang = 375000;
        }
        else if ($merk == "Adidas") {
            $harga_per_pasang = 300000;
        }
        else if ($merk == "Kickers") {
            $harga_per_pasang = 250000;
        }
        else if ($merk == "Eiger") {
            $harga_per_pasang = 275000;
        }
        else if ($merk == "Bucherri") {
            $harga_per_pasang = 400000;
        }
        else {
            $harga_per_pasang = 0;
        }

        $total_pembelian = $harga_per_pasang * $jumlah;

        $data = [
            'nama' => $this->input->post('nama'),
            'nmrhp' => $this->input->post('nmrhp'),
            'merk' => $merk,
            'ukuran' => $this->input->post('ukuran'),
            'jumlah' => $jumlah,
            'harga_per_pasang' => $harga_per_pasang,
            'total_pembelian' => $total_pembelian
        ];
        
        $this->load->view('view-data-sepatu',$data);
    }
}