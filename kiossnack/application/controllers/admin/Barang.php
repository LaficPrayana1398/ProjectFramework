<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Barang_model");
        $this->load->helper("url");
    }

    public function daftar_barang()
    {
        $data["barang"] = $this->Barang_model->getAll();
        $this->load->view("admin/Barang/Daftar_barang", $data);
    }

    
    function tambah(){
		$this->load->view('admin/Barang/Tambah_barang');
	}
 
	function tambah_aksi(){
		$KodeBarang = $this->input->post('KodeBarang');
		$NamaBarang = $this->input->post('NamaBarang');
		$DeskripsiBarang = $this->input->post('DeskripsiBarang');
        $HargaBarang = $this->input->post('HargaBarang');
        $StockBarang = $this->input->post('StockBarang');
        $kodesuplier = $this->input->post('kodesuplier');
		$data = array(
			'KodeBarang' => $KodeBarang,
			'NamaBarang' => $NamaBarang,
            'DeskripsiBarang' => $DeskripsiBarang,
            'HargaBarang' => $HargaBarang,
            'StockBarang'=> $StockBarang,
            'kodesuplier'=> $kodesuplier
            );
            
		$this->Barang_model->input_data($data,'tbl_barang');
		redirect('admin/Barang/daftar_barang');
	}

    function edit($KodeBarang){
		$where = array('KodeBarang' => $KodeBarang);
		$data['barang'] = $this->Barang_model->edit_barang($where,'tbl_barang')->result();
		$this->load->view('admin/Barang/Edit_barang',$data);
	}

    function delete($KodeBarang){
		$where = array('KodeBarang' => $KodeBarang);
		$this->Barang_model->hapus_barang($where,'tbl_barang');
		redirect('admin/Barang/daftar_barang');
	}

}