<?php 
/**
 * @property M_mhs $m_mhs
 */
class Mhs extends CI_Controller
{
    public function index(){
        $this->load->model('m_mhs');
        $data['mahasiswa'] = $this->m_mhs->get_data_mhs();

        $this->load->view('mahasiswa/v_mhs', $data);
    }
}
?>