<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model{

    //mendefinisikan object private
    private $_table = "tbl_barang";

    //mendefinisikan object bersifat public

    public $KodeBarang;
    public $NamaBarang;
    public $DeskripsiBarang;
    public $HargaBarang;
    public $StockBarang;
    public $kodesuplier;

    //mendefinisikan aturan masukan data yang akan dimasukkan ke tabel
    public function rules ()
    {
        return [
            [   'field' => 'KodeBarang',
                'label'=>'Kode Barang',
                'rules'=>'required'],

            [   'field' => 'NamaBarang',
                'label'=>'Nama Barang',
                'rules'=>'required'],

            [   'field' => 'DeskripsiBarang',
                'label'=>'Deskripsi Barang',
                'rules'=>'required'],

            [   'field' => 'HargaBarang',
                'label'=>'Harga Barang',
                'rules'=>'numeric'],    

            [   'field' => 'StockBarang',
                'label'=>'Stock Barang',
                'rules'=>'numeric'],

            [   'field' => 'kodesuplier',
                'label'=>'Kode Suplier',
                'rules'=>'required']
        ];
        }

    //mengambil semua data pada tabel

    public function getAll ()
    {
        return $this->db->get($this->_table)->result(); 
    }   

    public function getById()
    {
        return $this->db->get_where($this->_table, ["KodeBarang"=>$id])->row();
    }

    function input_data($data,$table){
		$this->db->insert($table,$data);
    }

    //mengedit/mengubah data
    function edit_barang ($where,$table){
		return $this->db->get_where($table, $where);
	}

    function hapus_barang($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
    
}