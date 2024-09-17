<?php
class Pengantar_ktp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->Model('M_getData');
        $this->load->Model('M_surat');
    }

    public function index()
    {
        $data = array(
            'title' => 'Surat Pengantar KTP',
            'data'  => $this->M_getData->getDataId()
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('warga/surat/sktm/create', $data);
        $this->load->view('layout/footer', $data);
    }

    public function create()
    {
        $this->form_validation->set_rules('keperluan', 'Keperluan', 'required', array('required' => 'Keperluan permohonan harus diisi !'));

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Data tidak lengkap !');
            $this->index();
        } else {
            $keperluan = $this->input->post('keperluan');
            $file_kk = $_FILES['file_kk']['name'];
            $file_ktp = $_FILES['file_ktp']['name'];

            $date = date('Ymd-is');
            $d2 = trim($date);
            //acak nama gambar
            $extensi1 = explode('.', $file_kk);
            $extensi = strtolower(end($extensi1));
            $acak_angka =  rand(1, 999);
            $filekk = str_replace('', '', 'sktm-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

            $date = date('Ymd-is');
            $d2 = trim($date);
            //acak nama gambar
            $extensi1 = explode('.', $file_ktp);
            $extensi = strtolower(end($extensi1));
            $acak_angka =  rand(1, 999);
            $filektp = str_replace('', '', 'sktm-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);



            if ($file_kk == '' || $file_ktp == '') {
                $this->session->set_flashdata('error', 'File tidak lengkap !');
                redirect('sktm/create', 'refresh');
            } else {
                $noid = $this->M_getData->getSpktpId();
                $nomor  = sprintf("%03s", abs(floatval($noid['id']) + 1)) . '/' . 'SP-KTP' . '/' . date('m') . '/' . date('Y');
                $data = array(
                    'id_warga'  => $this->session->userdata('id_warga'),
                    'jenis_surat'   => 'SURAT PENGANTAR KTP',
                    'nomor_surat'   => 'SP-KTP/' . date('dmY') . '/' . $this->session->userdata('id_warga'),
                    'tanggal_surat' => date('d/m/Y'),
                    'tanggal_kadaluarsa'  => date('d/m/Y', strtotime('+1 month')),
                    'keperluan'     => $keperluan,
                    'file_kk'       => $filekk,
                    'file_ktp'      => $filektp,
                    'status'        => 'Menunggu Verifikasi',
                    'created_at'    => date('Y-m-d H:i:s')
                );

                $config['upload_path'] = './assets/file_kk/'; //folder penyimpanana gambar
                $config['file_name'] = $filekk;
                $config['allowed_types'] = 'jpeg|png|jpg|JPEG|PNG|JPG';
                $config['max_size'] = '3024';
                $config['remove_space'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('file_kk')) {
                    $this->session->set_flashdata('danger', $this->upload->display_errors());

                    redirect('sktm/buat-surat', 'refresh');
                } else {
                    $this->upload->data();
                }

                $config['upload_path'] = './assets/file_ktp/'; //folder penyimpanana gambar
                $config['file_name'] = $filektp;
                $config['allowed_types'] = 'jpeg|png|jpg|JPEG|PNG|JPG';
                $config['max_size'] = '3024';
                $config['remove_space'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('file_ktp')) {
                    $this->session->set_flashdata('danger', $this->upload->display_errors());

                    redirect('sktm/buat-surat', 'refresh');
                } else {
                    $this->upload->data();
                }
                $this->M_surat->sktm($data);
                $this->session->set_flashdata('success', 'Permohonan surat berhasil dibuat !');
                redirect('list-surat', 'refresh');
            }
        }
    }
}
