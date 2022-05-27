<?php

class Pendaftaranmodel extends CI_Model {
    function getmahasiswa() {
        $mhs = $this->db->get('mahasiswa');

        return $mhs->result_array();
        
    }

    function add($Pendaftaranmodel) {
      return $this->db->insert('mahasiswa', $Pendaftaranmodel);
    }
}
?>