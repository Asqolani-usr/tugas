<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        // Di sini Anda bisa mengambil data dari berbagai model
        // untuk ditampilkan di dashboard.
        // Contoh:
        // $bookModel = new \App\Models\BookModel();
        // $data['total_books'] = $bookModel->countAllResults();

        return view('dashboard');
    }
}
