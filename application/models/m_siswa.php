<?php 
class M_siswa extends CI_Model{
    public function get_data_siswa(){
        return $this->db->get('tb_siswa')->result_array();
    }

    public function insert_data($data){
        $this->db->insert('tb_siswa', $data);
    }   

    public function delete_data($where){
        $this->db->where($where);
        $this->db->delete('tb_siswa');
    }

    public function get_data_by_id($id){
        return $this->db->get_where('tb_siswa', ['id' => $id])->row_array();
    }

    public function update_data($data, $id){
        $this->db->where('id', $id);
        $this->db->update('tb_siswa', $data);
    }
}
?>  