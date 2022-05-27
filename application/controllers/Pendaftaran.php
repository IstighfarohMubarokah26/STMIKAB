<?php
class Pendaftaran extends CI_Controller {
    function index() {
        $this->load->model('Pendaftaranmodel');
        
        $Pendaftaranmodel['mahasiswa'] = $this->Pendaftaranmodel->getmahasiswa();
        
        $this->load->view('datapendaftaran', $Pendaftaranmodel);

    }

    function tambah() {
        $this->load->view('tambah');  
    }

    function proses_tambah () {
        $this->load->model('Pendaftaranmodel');

        $Pendaftaranmodel['NIP'] = $this->input->post('NIP');
        $Pendaftaranmodel['Nama_Lengkap'] = $this->input->post('Nama_Lengkap');
        $Pendaftaranmodel['Nama_Panggilan'] = $this->input->post('Nama_Panggilan');
        $Pendaftaranmodel['TTL'] = $this->input->post('TTL');
        $Pendaftaranmodel['Alamat'] = $this->input->post('Alamat');
        $Pendaftaranmodel['No_HP'] = $this->input->post('No_HP');
        $Pendaftaranmodel['Agama'] = $this->input->post('Agama');
        $Pendaftaranmodel['Sekolah'] = $this->input->post('Sekolah');
        $Pendaftaranmodel['Jurusan'] = $this->input->post('Jurusan');
        $Pendaftaranmodel['Facebook'] = $this->input->post('Facebook');
        
        $simpan = $this->Pendaftaranmodel->add($Pendaftaranmodel);

        if ($simpan) {
            redirect('Pendaftaran/index');
        }
    }
}
?>