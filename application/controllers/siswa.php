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
		$this->load->view('siswa/siswa',$data);
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

    public function hapus_aksi(){
        if($this->input->post('id') == null){
            redirect('siswa/siswa/index');
        }
        $id = $this->input->post('id',TRUE);

        $where = ['id' => $id];
        $this->m_siswa->delete_data($where);
        redirect('siswa/index');
    }

    public function edit($id){
        $data['siswa'] = $this->m_siswa->get_data_by_id($id);
        
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('siswa/siswa_edit',$data);
		$this->load->view('templates/footer');
    }

    public function edit_aksi(){
        $id = $this->input->post('id', TRUE);
        $data = [
            'nama' => $this->input->post('nama', TRUE),
            'nim' => $this->input->post('nim', TRUE),
            'tgl_lahir'=> $this->input->post('tgl_lahir', TRUE),
            'jurusan' => $this->input->post('jurusan', TRUE)
        ];

        $this->m_siswa->update_data($data, $id);
        redirect('siswa/index');    
    }
}
?>