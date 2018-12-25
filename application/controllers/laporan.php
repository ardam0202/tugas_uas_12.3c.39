<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {

	public function __construct(){
		
		parent ::__construct();

		//load model
		$this->load->model('model_laporan'); 
		//$this->load->liblary('form_validation');

	}

	public function anggota()
	{
		$data = array(
						'title' 	=> 'Data Anggota',
						'anggota'	=> $this->model_laporan->get_all(),
					);
		$this->load->view('anggota', $data);
	}

	public function buku()
	{
		$data = array(
						'title' 	=> 'Data Buku',
						'buku'		=> $this->model_laporan->buku(),
					);
		$this->load->view('buku', $data);
	}

	public function member()
	{
		$data = array(
						'title' 	=> 'Data Member',
						'member'	=> $this->model_laporan->member(),
		);

		$this->load->view('member', $data);
	}

	public function pinjam()
	{
		$data = array(

			'title' 	=> 'Data Pinjam',
			'pinjam'	=> $this->model_laporan->pinjam(),

		);

		$this->load->view('pinjam', $data);
	}

	public function tambah_anggota()
	{
		$data = array(
			'title' 	=> 'Tambah Anggota'
		);
		$this->load->view('tambah_anggota', $data);
	}

	public function tambah_buku()
	{
		$data = array(
			'title' 	=> 'Tambah Buku'
		);
		$this->load->view('tambah_buku', $data);
	}

	public function simpan_buku()
	{
		$data = array(
			'kd_buku'     => $this->input->post("kd_buku"),
			'jd_buku'     => $this->input->post("jd_buku"),
			'pengarang'   => $this->input->post("pengarang"),
			'penerbit'    => $this->input->post("penerbit"),
			'stok'        => $this->input->post("stok"),
			'th_terbit'   => $this->input->post("th_terbit"),
			'id_kategori' => $this->input->post("id_kategori"),
			//'keterangan' 		=> $this->input->post("p"),
		);
		$this->model_laporan->simpan_buku($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			                                    </div>');
		//redirect
		redirect('laporan/buku');
	}

	public function simpan_anggota()
	{
		$data = array(
			'nadep' 			=> $this->input->post("nadep"),
			'nabel' 			=> $this->input->post("nabel"),
			'email' 			=> $this->input->post("email"),
			'notelpn' 			=> $this->input->post("notelpn"),
			//'keterangan' 		=> $this->input->post("p"),
		);
		$this->model_laporan->simpan_anggota($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			                                    </div>');
		//redirect
		redirect('laporan/anggota');
	}

	public function edit_anggota($noid)
	{
		$noid = $this->uri->segment(3);
		$data = array(
			'title' 	=> 'Edit Rekap Absen',
			'anggota' => $this->model_laporan->edit_anggota($noid)
		);
		$this->load->view('edit_anggota', $data);
	}

	public function update()
	{
		$id['noid'] = $this->input->post("noid");
		$data = array(
			'kodos' 			=> $this->input->post("kodos"),
			'nama_dosen' 		=> $this->input->post("nama_dosen"),
			'tanggal' 			=> $this->input->post("tanggal"),
			'time' 				=> $this->input->post("time"),
			'matkul' 			=> $this->input->post("matkul"),
			'paraf' 			=> $this->input->post("paraf"),
		);
		$this->model_laporan->update($data, $id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
			                                    </div>');
		//redirect
		redirect('laporan/anggota');
	}

	public function hapus_member($noid)
	{

		$id['noid'] = $this->uri->segment(3);
		
		$this->model_laporan->hapus_member($id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil dihapus.
			                                    </div>');
		//redirect
		redirect('laporan/member');
	}

	public function terima_member($noid)
	{
		$noid['noid'] = $this->uri->segment(3);
		$this->model_laporan->terima_member($noid);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! Data Member Sudah Masuk di Data Anggota.
			                                    </div>');
		//redirect
		redirect('laporan/member');

	}

	public function index()
	{
		$this->load->view('awal');
	}

	public function register()
	{
		$data['title'] = 'Form Registasi';
		
		$this->load->view('register');
	}

	public function regis()
	{
		$data = array(
			'nadep' 			=> $this->input->post("nadep"),
			'nabel' 			=> $this->input->post("nabel"),
			'email' 			=> $this->input->post("email"),
			'notelpn' 			=> $this->input->post("notelpn"),
			//'keterangan' 		=> $this->input->post("p"),
		);
		$this->model_laporan->regis($data);
		$this->session->set_flashdata('message', 'Success! Registrasi berhasil.');

		//redirect
		redirect('laporan/');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function proses()
	{
         $email = $this->input->post('email');
         $password = $this->input->post('password');
         
         if ($this->model_laporan->cek_login($email, $password)== TRUE)
         {
             redirect('laporan/anggota');
         }else{
              redirect('login');
         }
    }

    public function signup()
	{
		$this->load->view('signup');
	}

	function registeradm()
    {                     
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[100]');         
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmpassword', 'Confirmpassword', 'required|matches[password]');
        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
 
        if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('signup');
        }
        else
        {   
            $form_data = array(
                            'email' => set_value('email'),
                            'password' => set_value('password')
                        );
 
            if ($this->model_laporan->SaveForm($form_data) == TRUE) 
            {
                redirect('login');
            }
            else
            {
            redirect('laporan/signup');
            }
        }
 }

}
