<?php
namespace App\Controllers;
use App\Models\KategoriModel;

class Kategori extends BaseController
{
	/**
	* index function
	*/
	public function index()
	{
		//model initialize
		$Kategoris = new KategoriModel (); //ambil data dari KM
		$pager = \Config\Services::pager();
		
		$data = array(
			'kategoris' => $Kategoris->paginate(2, 'kategori'),
			'pager' => $Kategoris->pager
		);
		
		
		return view('kategori', $data);
		
		
	}
}	