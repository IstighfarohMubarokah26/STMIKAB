<h1><center> Data Pendaftaran Online </center> </h1>


<?php

class Table extends CI_Controller {
    

    function index() {
        $this->load->library('table') ;

        

        $template = array(
            'table_open'            =>'<table border="1" cellpadding="4" cellspacing="0">',
            'thead_open'            =>'<thead>',
            'thead_close'           =>'</thead>',

            'heading_row_start'     =>'<tr>',
            'heading_row_end'       =>'</tr>',
            'heading_cell_start'    =>'<th>',
            'heading_cell_end'      =>'</th>',

            'tbody_open'            =>'<tbody>',
            'tbody_end'             =>'</tbody>',

            'row_start'             =>'<tr>',
            'row_end'               =>'</tr>',
            'cell_start'            =>'<td>',
            'cell_end'              =>'</td>',

            'row_alt_start'         =>'<tr>',
            'row_alt_end'           =>'</tr>',
            'cell_alt_start'        =>'<td>',
            'cell_alt_end'          =>'</td>',

            'table_close'           =>'</table>'
        );
        $this->table->set_template($template);

        $this->table->set_heading(array('NIP', 'Nama Lengkap', 'Nama Panggilan', 'TTL', 'Alamat', 'Nomer_HP', 'Agama', 'Sekolah', 'Jurusan', 'Facebook'));
        
        $this->table->add_row(array('910901676', 'Istighfaroh Mubarokah', 'Isti', '2000-04-26', 'Jalan Srikaya SP 2 Timika Papua', '0821673991', 'Islam', 'STMIK Antar Bangsa', 'Sistem Informasi', 'Istifaroh'));
        
        echo $this->table->generate();

        

        //$this->load->database();
        //$query = $this->db->query('SELECT * FROM mahasiswa');
        //echo $this->table->generate($query);
    }
}

?>
