<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel; // Menggunakan model yang sudah ada

class BookController extends BaseController
{
    protected $bookModel;

    public function __construct()
    {
        $this->bookModel = new BukuModel();
    }

    public function index()
    {
        $data['books'] = $this->bookModel->findAll();
        return view('books/index', $data);
    }

    public function new()
    {
        return view('books/create');
    }

    public function create()
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'author' => $this->request->getPost('author'),
            'publisher' => $this->request->getPost('publisher'),
            'year' => $this->request->getPost('year'),
        ];

        $this->bookModel->insert($data);
        return redirect()->to('books')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['book'] = $this->bookModel->find($id);
        return view('books/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'author' => $this->request->getPost('author'),
            'publisher' => $this->request->getPost('publisher'),
            'year' => $this->request->getPost('year'),
        ];

        $this->bookModel->update($id, $data);
        return redirect()->to('books')->with('success', 'Data buku berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->bookModel->delete($id);
        return redirect()->to('books')->with('success', 'Buku berhasil dihapus.');
    }
}
