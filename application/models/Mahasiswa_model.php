<?php

class Mahasiswa_model extends CI_Model {
    function retrieve()
    {
        $query = $this->db->get('mahasiswa');
        if($query->result()){
        foreach ($query->result() as $content) {
            $data[] = array(
                $content->NIP,
                $content->NamaLengkap,
                $content->NamaPanggilan,
                $content->TTL,
                $content->Alamat,
                $content->NomerHP,
                $content->Agama,
                $content->Sekolah,
                $content->Jurusan,
                $content->Facebook
            );
    }
    return $data;
} else {
    return FALSE;
}
}


function add($arg)
{
    $data = array (
        'NIP'             =>$arg[0],
        'Nama Lengkap'    =>$arg[1],
        'Nama Panggilan'  =>$arg[2],
        'TTL'             =>$arg[3],
        'Alamat'          =>$arg[4],
        'Nomer HP'        =>$arg[5],
        'Agama'           =>$arg[6],
        'Sekolah'         =>$arg[7],
        'Jurusan'         =>$arg[8],
        'Facebook'        =>$arg[9],
    );
    $this->db->insert('mahasiswa', $data);
}

function delete($id)
{
    $this->db->where('NIP', $id);
    $this->db->delete('mahasiswa');
}

function update($id, $form)
{
    $data = array(
        'NIP'             =>$form[0],
        'Nama Lengkap'    =>$form[1],
        'Nama Panggilan'  =>$form[2],
        'TTL'             =>$form[3],
        'Alamat'          =>$form[4],
        'Nomer HP'        =>$form[5],
        'Agama'           =>$form[6],
        'Sekolah'         =>$form[7],
        'Jurusan'         =>$form[8],
        'Facebook'        =>$form[9],
    );
    $this->db->where('NIP', $id);
    $this->db->update('mahasiswa', $data);

}

function getmahasiswa($id)
{
    $this->db->where('NIP', $id);
    $query = $this->db->get('mahasiswa');

    if($query->result()){
        foreach ($query->result() as $content) {
            $data = array(
                $content->NIP,
                $content->NamaLengkap,
                $content->NamaPanggilan,
                $content->TTL,
                $content->Alamat,
                $content->NomerHP,
                $content->Agama,
                $content->Sekolah,
                $content->Jurusan,
                $content->Facebook
            );
        }
        return $data;
    } else {
        return FALSE;
    }
} 
}

?>