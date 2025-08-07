<?php

namespace App\Models;

use CodeIgniter\Model;

class BorrowingModel extends Model
{
    protected $table = 'borrowings';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'book_id',
        'member_id',
        'borrow_date',
        'return_date',
        'status'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'borrow_date';
    protected $updatedField  = ''; // Tidak menggunakan updated_at untuk peminjaman

    /**
     * Mengambil semua data peminjaman dengan join ke tabel buku dan anggota
     */
    public function getBorrowingDetails()
    {
        return $this->select('borrowings.*, books.title as book_title, members.name as member_name')
            ->join('books', 'books.id = borrowings.book_id')
            ->join('members', 'members.id = borrowings.member_id')
            ->orderBy('borrowings.borrow_date', 'DESC')
            ->findAll();
    }
}
