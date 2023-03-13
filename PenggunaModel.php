<?php namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
	/**
	 * table name
	 */
	protected $table ="pengguna";
	
	/**
	 * allowed Field
	 */
	protected $allowedFields = [
		'id_pengguna',
		'nama',
		'email',
		'verifikasi'
	];
	
	 public function getPengguna()
	 {
		 return $this->findAll(); //select * from kategori
	 }
}