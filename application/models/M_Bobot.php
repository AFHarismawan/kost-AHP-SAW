<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_Bobot extends CI_Model{  

    public function getData()
    {
        $data = $this->db->query('select * from data_bobot');
        return $data->result_array();
    }

    function insertData($namatabel,$data){
   		$data = $this->db->insert($namatabel,$data);
   		return $data;
    }
    
    function deleteTable($namatabel){
                $this->db->empty_table($namatabel);
    }

    public function editData($where="")
    {
        $data = $this->db->query('select * from data_bobot'.$where);
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