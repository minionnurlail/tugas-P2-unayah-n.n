<?php namespace App\Models;

use CodeIgniter\Model;

class DaerahModel extends Model
{
	/**
	 * table name
	 */
	protected $table ="daerah";
	
	/**
	 * allowed Field
	 */
	protected $allowedFields = [
		'id_daerah',
		'nama_daerah',
		'status'
	];
	
	 public function getDaerah()
	 {
		 return $this->findAll(); //select * from daerah
	 }
}