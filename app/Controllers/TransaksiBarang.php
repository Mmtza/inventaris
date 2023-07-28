<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransaksiBarang_model;
use Dompdf\Dompdf;

class TransaksiBarang extends BaseController
{
    public function index()
    {
        $model = new TransaksiBarang_model();
        $data['transaksiBarang'] = $model->getTransaksiBarang();
        return view('transaksi/transaksiBarang', $data);
    }

    public function cetak()
    {
        $model = new TransaksiBarang_model();
        $data['transaksiBarang'] = $model->getTransaksiBarang();

        $html = view('transaksi/laporan_pdf', $data);

        $dompdf = new Dompdf();

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'potrait');

        $dompdf->render();
        $dompdf->stream('transaksi-barang.pdf');
    }
}