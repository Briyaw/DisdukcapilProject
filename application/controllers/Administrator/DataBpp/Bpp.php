<?php
class Bpp extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('Administrator/M_bpp');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
			
		if($this->input->post() == NULL){
			$data = array(
				'title' => 'Data Buku Pokok Pemakaman',
				'bpp' => $this->M_bpp->getBpp()
			);
		}
		else{
			$from_date = $this->input->post('from_date');
			$to_date = $this->input->post('to_date');
			
			// Convert dates to proper format
            $from_date = date('Y-m-d', strtotime($from_date));
            $to_date = date('Y-m-d', strtotime($to_date));

			$data = array(
				'title' => 'Data Buku Pokok Pemakaman',
				'bpp' => $this->M_bpp->getDateBpp($from_date, $to_date)
			);
		}
		
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/bpp/index', $data);
		$this->load->view('layout/footer', $data);
	}


	public function detail($id)
	{
		$id = $this->input->get('id');
		$data = array(
			'title' => 'Detail Data Buku Pokok Pemakaman | ' . $id,
			'id'   => $id,
			'detail'    => $this->M_bpp->getDetail($id)
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/bpp/detail', $data);
		$this->load->view('layout/footer', $data);
	}

	
}
