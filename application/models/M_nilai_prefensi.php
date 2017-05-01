<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_nilai_prefensi extends CI_Model{  

    public function getDataCowok()
    {
        $data = $this->db->query("select * from nilai_prefensi a left join data_kriteria b on a.id=b.id where b.jenis_kelamin = 'L' order by nilai_preferensi DESC");
        return $data->result_array();
    }

    public function getDataCewek()
    {
        $data = $this->db->query("select * from nilai_prefensi a left join data_kriteria b on a.id=b.id where b.jenis_kelamin = 'P' order by nilai_preferensi DESC");
        return $data->result_array();
    }

    public function getDataCampuran()
    {
        $data = $this->db->query("select * from nilai_prefensi a left join data_kriteria b on a.id=b.id order by nilai_preferensi DESC");
        return $data->result_array();
    }

    function insertData($namatabel,$data){
   		$data = $this->db->insert($namatabel,$data);
   		return $data;
    }

    public function editData($where="")
    {
        $data = $this->db->query('select * from nilai_prefensi '.$where);
        return $data->result_array();
    }

    public function updateData($namatabel,$data,$where)
    {
        $data = $this->db->update($namatabel,$data,$where);
        return $data;
    }

    public function deleteData($namatabel,$where)
    {
        $data = $this->db->delete($namatabel,$where);
        return $data;
    }   
}
?>