<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Barang_model");
        $this->load->library('form_validation');
    }

    public function daftar_barang()
    {
        $data["barang"] = $this->Barang_model->getAll();
        $this->load->view("admin/Barang/Daftar_barang", $data);
    }

    
    public function tambah_barang()
    {
        $barang = $this->Barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if ($validation->run()) {
            $barang->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/Barang/Tambah_barang");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/tbl_barang');
       
        $Barang = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["tbl_barang"] = $Barang_model->getById($id);
        if (!$data["tbl_barang"]) show_404();
        
        $this->load->view("admin/Barang/Edit_barang", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Barang_model->delete($id)) {
            redirect(site_url('admin/tbl_barang'));
        }
    }
}