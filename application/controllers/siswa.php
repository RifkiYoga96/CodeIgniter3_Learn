<?php 
/**
 * @property CI_Input $input
 * @property M_siswa $m_siswa
 */
class Siswa extends CI_Controller{
    public function index(){
		$data['siswa'] = $this->m_siswa->get_data_siswa();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('siswa',$data);
		$this->load->view('templates/footer');
	}

    public function tambah_aksi(){
        $data =[
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'tgl_lahir'=> $this->input->post('tgl_lahir'),
            'jurusan' => $this->input->post('jurusan')
        ];

        $this->m_siswa->insert_data($data);
        redirect('siswa/index');
    }
}
?>