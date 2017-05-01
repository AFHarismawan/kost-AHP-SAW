<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_kriteria extends CI_Model{  

    public function getData()
    {
        $data = $this->db->query('select * from data_kriteria');
        return $data->result_array();
    }

    public function getData6Kriteria()
    {
        $data = $this->db->query('select `id`, `nama`, `alamat`, `kos_ub`, `kos_makanan`, `fasilitas`, `kenyamanan`, `keamanan`, `harga`, `jenis_kelamin` from data_kriteria');
        return $data->result_array();
    }

    public function getData5Kriteria()
    {
        $data = $this->db->query('select `id`, `nama`, `alamat`, `kos_ub`, `fasilitas`, `kenyamanan`, `keamanan`, `harga`, `jenis_kelamin` from data_kriteria');
        return $data->result_array();
    }

    public function getData4Kriteria()
    {
        $data = $this->db->query('select `id`, `nama`, `alamat`, `kos_ub`, `kenyamanan`, `keamanan`, `harga`, `jenis_kelamin` from data_kriteria');
        return $data->result_array();
    }

    public function getData3Kriteria()
    {
        $data = $this->db->query('select `id`, `nama`, `alamat`, `kos_ub`, `kenyamanan`, `harga`, `jenis_kelamin` from data_kriteria');
        return $data->result_array();
    }

    public function getData2Kriteria()
    {
        $data = $this->db->query('select `id`, `nama`, `alamat`, `kos_ub`, `harga`, `jenis_kelamin` from data_kriteria');
        return $data->result_array();
    }

    public function getData1Kriteria()
    {
        $data = $this->db->query('select `id`, `nama`, `alamat`, `harga`, `jenis_kelamin` from data_kriteria');
        return $data->result_array();
    }

    function insertData($namatabel,$data){
   		$data = $this->db->insert($namatabel,$data);
   		return $data;
    }

    public function editData($where="")
    {
        $data = $this->db->query('select * from data_kriteria '.$where);
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

    public function getK1Max(){
        $sql = "select max(kos_ub) as max from data_kriteria";
        $query = $this->db->query($sql);
        $temp = $query->row_array();
        if(empty($temp["max"]))
            return 0;
        return $temp['max'];
    }

    public function getK2Max(){
        $sql = "select max(kos_makanan) as max from data_kriteria";
        $query = $this->db->query($sql);
        $temp = $query->row_array();
        if(empty($temp["max"]))
            return 0;
        return $temp['max'];
    }

    public function getK3Max(){
        $sql = "select max(kos_jalan) as max from data_kriteria";
        $query = $this->db->query($sql);
        $temp = $query->row_array();
        if(empty($temp["max"]))
            return 0;
        return $temp['max'];
    }

    public function getK4Max(){
        $sql = "select max(fasilitas) as max from data_kriteria";
        $query = $this->db->query($sql);
        $temp = $query->row_array();
        if(empty($temp["max"]))
            return 0;
        return $temp['max'];
    }

    public function getK5Max(){
        $sql = "select max(kenyamanan) as max from data_kriteria";
        $query = $this->db->query($sql);
        $temp = $query->row_array();
        if(empty($temp["max"]))
            return 0;
        return $temp['max'];
    }

    public function getK6Max(){
        $sql = "select max(keamanan) as max from data_kriteria";
        $query = $this->db->query($sql);
        $temp = $query->row_array();
        if(empty($temp["max"]))
            return 0;
        return $temp['max'];
    }

    public function getK7Max(){
        $sql = "select max(harga) as max from data_kriteria";
        $query = $this->db->query($sql);
        $temp = $query->row_array();
        if(empty($temp["max"]))
            return 0;
        return $temp['max'];
    }   
}
?>