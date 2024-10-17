<?php
class BppDesa extends CI_Controller
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
			$kecamatan = $this->session->userdata('kecamatan');
			$data = array(
				'title' => 'Data Buku Pokok Pemakaman',
				'bpp' => $this->M_bpp->getKecBpp($kecamatan)
			);

		}
		else{
			$from_date = $this->input->post('from_date');
			$to_date = $this->input->post('to_date');
			$des = $this->input->post('des');
			// Convert dates to proper format
            $from_date = date('Y-m-d', strtotime($from_date));
            $to_date = date('Y-m-d', strtotime($to_date));

			$kecamatan = $this->session->userdata('kecamatan');
			$data = array(
				'title' => 'Data Buku Pokok Pemakaman',
				'bpp' => $this->M_bpp->getDateKecBpp($from_date, $to_date, $kecamatan, $des)
			);
		}

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/bppdesa/index', $data);
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

	public function cetak()
    {
		if(($this->input->get('from_date') == NULL) && ($this->input->get('to_date') == NULL)){
			$data = array(
				'title' => 'Cetak Surat Keterangan Kematian',
				'data'  => $this->M_bpp->cetakBpp()
			);
		}	
		else{
			$from_date = $this->input->get('from_date');
			$to_date = $this->input->get('to_date');
			$des = $this->input->get('des');
			$kecamatan = $this->session->userdata('kecamatan');		
			$data = array(
				'title' => 'Cetak Surat Keterangan Kematian',
				'data' => $this->M_bpp->cetakDateBpp($from_date, $to_date, $kecamatan, $des)
			);

		}
        $this->load->view('administrator/bpp/print.php', $data);
    }
}
