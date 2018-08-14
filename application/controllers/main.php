<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

    function __construct() {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('main');
    }

    public function load_belanja() {
        $this->load->database();
        $data['belanja'] = $this->db->get('belanja')->result();
        $this->load->view('view_belanja', $data);
    }

    public function insert_belanja() {

        if (isset($_POST['button_insert_belanja'])) {
            $this->load->database();
            $dataInput = array('kode_Belanja' => $this->input->post('kode_belanja'),
                'kode_pemesanan' => $this->input->post('select_pemesanan'),
                'namaBahan' => $this->input->post('nama_bahan'),
                'hargaSatuan' => $this->input->post('harga_satuan'),
                'jumlahPembelian' => $this->input->post('jumlah_pembelian'),
                'totalharga' => $this->input->post('total_harga'),
            );
            $this->db->insert('belanja', $dataInput);
            redirect('main/load_belanja');
        }
        $data['belanja'] = $this->db->get('pemesanan')->result();
        $this->load->view('insert_belanja', $data);

    }

    public function action_edit_belanja($id = "") {
            $this->load->database();
            $dataInput = array('kode_Belanja' => $this->input->post('kode_belanja'),
                'kode_pemesanan' => $this->input->post('select_pemesanan'),
                'namaBahan' => $this->input->post('nama_bahan'),
                'hargaSatuan' => $this->input->post('harga_satuan'),
                'jumlahPembelian' => $this->input->post('jumlah_pembelian'),
                'totalharga' => $this->input->post('total_harga'),
            );
            $this->db->where('kode_Belanja', $id);
            $this->db->update('belanja', $dataInput);

            redirect('main/load_belanja');
}

    public function edit_belanja($id = "") {
        $this->load->database();
        $this->db->where('kode_Belanja', $id);
        $data['belanja'] = $this->db->get('belanja')->result();
        $data['pemesanan'] = $this->db->get('pemesanan')->result();
        $this->load->view('edit_belanja', $data);
    }

    public function delete_belanja($id ="") {
        $this->load->database();
        $this->db->where('kode_belanja', $id);
        $this->db->delete('belanja');
        redirect('main/load_belanja');
    }

    public function load_karyawan() {

        $data['karyawan'] = $this->db->get('karyawan')->result();
        $this->load->view('view_karyawan', $data);
    }

    public function insert_karyawan() {
        if (isset($_POST['button_insert_karyawan'])) {
            $this->load->database();
            $dataInput = array('kode_karyawan' => $this->input->post('kode_karyawan'),
                'nama_karyawan' => $this->input->post('nama_karyawan'),
                'gender' => $this->input->post('jenis_kelamin'),
                'alamat_karyawan' => $this->input->post('alamat_karyawan'),
                'gaji_karyawan' => $this->input->post('gaji_karyawan'),
                'no_KTP' => $this->input->post('nomor_ktp'),
                'no_telp' => $this->input->post('nomor_telepon'),
                'tgl_gajian' => $this->input->post('tanggal_gajian'),
            );
            $this->db->insert('karyawan', $dataInput);
            redirect('main/load_karyawan');
        }
        $this->load->view('insert_karyawan');
    }

    public function action_edit_karyawan($id="") {

            $this->load->database();
            $dataInput = array('kode_karyawan' => $this->input->post('kode_karyawan'),
                'nama_karyawan' => $this->input->post('nama_karyawan'),
                'gender' => $this->input->post('jenis_kelamin'),
                'alamat_karyawan' => $this->input->post('alamat_karyawan'),
                'gaji_karyawan' => $this->input->post('gaji_karyawan'),
                'no_KTP' => $this->input->post('nomor_ktp'),
                'no_telp' => $this->input->post('nomor_telepon'),
                'tgl_gajian' => $this->input->post('tanggal_gajian'));
                $this->db->where('kode_karyawan',$id);
                $this->db->update('karyawan', $dataInput);
                redirect('main/load_karyawan');}

      public function edit_karyawan($id="") {

        $this->load->database();
        $this->db->where('kode_karyawan', $id);
        $data['karyawan'] = $this->db->get('karyawan')->result();
        $this->load->view('edit_karyawan',$data);
    }

    public function delete_karyawan($id = "") {
        $this->load->database();
        $this->db->where('kode_karyawan', $id);
        $this->db->delete('karyawan');
        redirect('main/load_karyawan');
    }

    public function load_kas() {
        $data['kas'] = $this->db->get('kas')->result();
        $this->load->view('view_kas', $data);
    }

    public function insert_kas() {
        if (isset($_POST['button_insert_kas'])) {
            $this->load->database();
            $dataInput = array('Tgl_KAS' => $this->input->post('tanggal_kas'),
                'Kas_Masuk' => $this->input->post('kas_masuk'),
                'Kas_Akhir' => $this->input->post('kas_akhir'),
                'Kas_Keluar' => $this->input->post('kas_keluar'),
                'Ket_Pengeluaran' => $this->input->post('keterangan_pengeluaran'),
            );
            $this->db->insert('kas', $dataInput);
            redirect('main/load_kas');
        }
        $this->load->view('insert_kas');
    }

    public function action_edit_kas($id = "") {

            $this->load->database();
            $dataInput = array('Tgl_KAS' => $this->input->post('tanggal_kas'),
                'Kas_Masuk' => $this->input->post('kas_masuk'),
                'Kas_Akhir' => $this->input->post('kas_akhir'),
                'Kas_Keluar' => $this->input->post('kas_keluar'),
                'Ket_Pengeluaran' => $this->input->post('keterangan_pengeluaran'),
            );
            $this->db->where('Tgl_KAS', $id);
            $this->db->update('kas', $dataInput);
            redirect('main/load_kas');
        }
        public function edit_kas($id = "") {

        $this->load->database();
        $this->db->where('Tgl_KAS', $id);
        $data['kas'] = $this->db->get('kas')->result();
        $this->load->view('edit_kas', $data);

    }

    public function delete_kas($id = "") {
        $this->load->database();
        $this->db->where('Tgl_KAS', $id);
        $this->db->delete('kas');
        redirect('main/load_kas');
        ;
    }

    public function load_member() {
        $data['member'] = $this->db->get('member')->result();
        $this->load->view('view_member', $data);
    }



    public function insert_member() {
        if (isset($_POST['button_insert_member'])) {
            $this->load->database();
            $dataInput = array('Kd_Member' => $this->input->post('kode_member'),
                'Nama_Member' => $this->input->post('nama_member'),
                'No_KTP' => $this->input->post('no_ktp'),
                'Alamat' => $this->input->post('alamat'),
                'JenKel' => $this->input->post('jenis_kelamin'),
                'No_Telp' => $this->input->post('nomor_telepon'),
            );
            $this->db->insert('member', $dataInput);
            redirect('main/load_member');
        }
        $this->load->view('insert_member');
    }
    public function action_edit_member($id ="") {
            $this->load->database();
            $dataInput = array('Kd_Member' => $this->input->post('kode_member'),
                'Nama_Member' => $this->input->post('nama_member'),
                'No_KTP' => $this->input->post('no_ktp'),
                'Alamat' => $this->input->post('alamat'),
                'JenKel' => $this->input->post('jenis_kelamin'),
                'No_Telp' => $this->input->post('nomor_telepon'));

            $this->db->where('Kd_Member',$id);
            $this->db->update('member', $dataInput);
            redirect('main/load_member');
        }
public function edit_member($id = "") {
        $this->load->database();
        $this->db->where('Kd_Member', $id);
        $data['member'] = $this->db->get('member')->result();
        $this->load->view('edit_member', $data);

    }
    public function delete_member($id = "") {
        $this->load->database();
        $this->db->where('Kd_Member', $id);
        $this->db->delete('member');
        redirect('main/load_member');
    }

    public function load_menu_makanan() {
        $data['menu_makanan'] = $this->db->get('menu_makanan')->result();
        $this->load->view('view_menu_makanan', $data);
    }

    public function insert_menu_makanan() {
        if (isset($_POST['button_insert_menu_makanan'])) {
            $this->load->database();
            $dataInput = array('Kd_MenuMakan' => $this->input->post('kode_menu_makanan'),
                'Nama_Menu' => $this->input->post('nama_menu_makanan'),
                'Harga' => $this->input->post('harga'),
            );
            $this->db->insert('menu_makanan', $dataInput);
            redirect('main/load_menu_makanan');
        }
        $this->load->view('insert_menu_makanan');
    }


    public function action_edit_menu_makanan($id = "") {

            $this->load->database();
            $dataInput = array('Kd_MenuMakan' => $this->input->post('kode_menu_makanan'),
                'Nama_Menu' => $this->input->post('nama_menu_makanan'),
                'Harga' => $this->input->post('harga'),
            );
            $this->db->where('Kd_MenuMakan', $id);
            $this->db->update('menu_makanan', $dataInput);
            redirect('main/load_menu_makanan');
        }
    public function edit_menu_makanan($id = "") {

        $this->load->database();
        $this->db->where('Kd_MenuMakan', $id);
        $data['menu_makanan'] = $this->db->get('menu_makanan')->result();
        $this->load->view('edit_menu_makanan',$data);
    }

    public function delete_menu_makanan($id = "") {
        $this->load->database();
        $this->db->where('Kd_MenuMakan', $id);
        $this->db->delete('menu_makanan');
        redirect('main/load_menu_makanan');
    }

    public function load_pemesanan() {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('menu_makanan', 'pemesanan.Kd_MenuMakan = menu_makanan.Kd_MenuMakan');
        $this->db->join('member', 'member.Kd_Member = pemesanan.Kd_Pembeli');
        $data['pemesanan'] = $this->db->get()->result();
        $this->load->view('view_pemesanan', $data);
    }

    public function insert_pemesanan() {
        if (isset($_POST['button_insert_pemesanan'])) {

            $this->load->database();
            $dataInput = array('Kd_Pemesanan' => $this->input->post('kode_pemesanan'),
                'Kd_Pembeli' => $this->input->post('select_pembeli'),
                'Kd_MenuMakan' => $this->input->post('select_menu_makanan'),
                'Tgl_Pemesanan' => $this->input->post('tanggal_pemesanan'),
                'Jumlah_Pesanan	' => $this->input->post('jumlah_pemesanan'),
                'Uang_Dibayar' => $this->input->post('uang_dibayar'),
                'Status_Bayar' => $this->input->post('status_pembayaran'),
                'Batas_Pelunasan' => $this->input->post('batas_pelunasan'),
                'Alamat_Tujuan' => $this->input->post('alamat_tujuan'),
            );
            $this->db->insert('pemesanan', $dataInput);
            redirect('main/load_pemesanan');
        }
        $data['member'] = $this->db->get('member')->result();
        $data['menu_makanan'] = $this->db->get('menu_makanan')->result();
        $this->load->view('insert_pemesanan',$data);
    }
    public function action_edit_pemesanan($id = "") {


            $this->load->database();
            $dataInput = array('Kd_Pemesanan'=> $this->input->post('kode_pemesanan'),
            'Kd_Pembeli' => $this->input->post('select_pembeli'),
            'Kd_MenuMakan' => $this->input->post('select_menu_makanan'),
                'Tgl_Pemesanan' => $this->input->post('tanggal_pemesanan'),
                'Jumlah_Pesanan	' => $this->input->post('jumlah_pemesanan'),
                'Uang_Dibayar' => $this->input->post('uang_dibayar'),
                'Status_Bayar' => $this->input->post('status_pembayaran'),
                'Batas_Pelunasan' => $this->input->post('batas_pelunasan'),
                'Alamat_Tujuan' => $this->input->post('alamat_tujuan'),
            );
            $this->db->where('Kd_Pemesanan', $id);
            $this->db->update('pemesanan', $dataInput);
            redirect('main/load_pemesanan');
        }
    public function edit_pemesanan($id = "") {
        $this->load->database();
        $data['member'] = $this->db->get('member')->result();
        $data['menu_makanan'] = $this->db->get('menu_makanan')->result();
            $this->db->where('Kd_Pemesanan', $id);
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('menu_makanan', 'pemesanan.Kd_MenuMakan = menu_makanan.Kd_MenuMakan');
        $this->db->join('member', 'member.Kd_Member = pemesanan.Kd_Pembeli');
              $data['pemesanan'] = $this->db->get('')->result();
        $this->load->view('edit_pemesanan', $data);

}


    public function delete_pemesanan($id = "") {
        $this->load->database();
        $this->db->where('Kd_Pemesanan', $id);
        $this->db->delete('pemesanan');
        redirect('main/load_pemesanan');
    }



}
