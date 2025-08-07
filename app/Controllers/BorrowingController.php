<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BorrowingModel;
use App\Models\BukuModel;
use App\Models\MembersModel;

class BorrowingController extends BaseController
{
    protected $borrowingModel;

    public function __construct()
    {
        $this->borrowingModel = new BorrowingModel();
    }

    public function index()
    {
        $data['borrowings'] = $this->borrowingModel->getBorrowingDetails();
        return view('borrowings/index', $data);
    }

    public function create()
    {
        $bookModel = new BukuModel();
        $memberModel = new MembersModel();

        $data['books'] = $bookModel->findAll();
        $data['members'] = $memberModel->findAll();

        return view('borrowings/create', $data);
    }

    public function store()
    {
        $data = [
            'book_id' => $this->request->getPost('book_id'),
            'member_id' => $this->request->getPost('member_id'),
            'borrow_date' => $this->request->getPost('borrow_date'),
            'status' => 'borrowed',
        ];

        $this->borrowingModel->insert($data);
        return redirect()->to('borrowings')->with('success', 'Peminjaman berhasil dicatat.');
    }

    public function return($id)
    {
        $data = [
            'return_date' => date('Y-m-d'),
            'status' => 'returned',
        ];

        $this->borrowingModel->update($id, $data);
        return redirect()->to('borrowings')->with('success', 'Buku telah dikembalikan.');
    }
}
