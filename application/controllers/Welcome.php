<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		is_login();
	}
	public function index()
	{
		$data = array(
			'title'	=> 'Dashboard',
			'users'	=> $this->M_count->cUsers(),
			'warga'	=> $this->M_count->cWarga(),
			'psd'	=> $this->M_count->dPsd(),
			'sk'	=> $this->M_count->dPsk(),
			'kk'	=> $this->M_count->dPkk(),
			'skp'	=> $this->M_count->dPskp(),
			'sktm'	=> $this->M_count->dPsktm(),
			'sku'	=> $this->M_count->dPsku(),
			'mvskd'	=> $this->M_count->mvSkd(),
			'mvsk'	=> $this->M_count->mvSk(),
			'mvskk'	=> $this->M_count->mvSkk(),
			'mvskp'	=> $this->M_count->mvSkp(),
			'mvsktm' => $this->M_count->mvSktm(),
			'mvsku'	=> $this->M_count->mvSku(),
			'pdskd'	=> $this->M_count->pdSkd(),
			'pdsk'	=> $this->M_count->pdSk(),
			'pdskk'	=> $this->M_count->pdSkk(),
			'pdskp'	=> $this->M_count->pdSkp(),
			'pdsktm' => $this->M_count->pdSktm(),
			'pdsku'	=> $this->M_count->pdSku(),
			'ptskd'	=> $this->M_count->ptSkd(),
			'ptsk'	=> $this->M_count->ptSk(),
			'ptskk'	=> $this->M_count->ptSkk(),
			'ptskp'	=> $this->M_count->ptSkp(),
			'ptsktm' => $this->M_count->ptSktm(),
			'ptsku'	=> $this->M_count->ptSku(),
		);
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('layout/footer');
	}
}
