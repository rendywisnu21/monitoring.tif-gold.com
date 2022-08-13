<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_beranda extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		error_reporting(0);
		$this->load->model('user/M_monitoring');
	}

    public function index()
	{
		$data['title'] = 'Dashboard';
        
        $record = $this->db->query("SELECT * FROM tb_riwayat ORDER BY id_riwayat ASC")->result();
        if (count($record) > 0) {
            foreach ($record as $k) {
                $suhu[]     = $k->suhu;
                $tanggal[]  = $k->tanggal; 
            }
        } else {
            $suhu[] = "-";
            $tanggal[] = "-";
        }

        $data['suhu'] = json_encode($suhu);
        $data['date'] = json_encode($tanggal);
        
		$this->load->view('user/v_header', $data);
		$this->load->view('user/v_navbar');
		$this->load->view('user/v_sidebar');
		$this->load->view('user/v_beranda', $data);
		$this->load->view('user/v_footer');
	}
	
	public function bacasuhu()
    {
        $data['title'] = 'Status Ruangan Penyimpanan';
        $get = $this->db->query("SELECT MAX(id_riwayat) FROM tb_riwayat")->row_array();
        $satuan = 4;
        $id_akhir = $get['MAX(id_riwayat)'];
        $id_awal = $id_akhir - $satuan;
        $suhu = $this->db->query("SELECT suhu FROM tb_riwayat WHERE id_riwayat>='$id_awal' AND id_riwayat<='$id_akhir' ORDER BY id_riwayat ASC");
        $tanggal = $this->db->query("SELECT tanggal FROM tb_riwayat WHERE id_riwayat>='$id_awal' AND id_riwayat<='$id_akhir' ORDER BY id_riwayat ASC");
    
        if ($suhu->num_rows() > 0) {
            foreach ($suhu->result_array() as $k) {
                $der[] = $k['suhu'];
            }
        } else {
            $der[] = 0;
        }

        if ($tanggal->num_rows() > 0) {
            foreach ($tanggal->result_array() as $w) {
                $tang[] = $w['tanggal'];
            }
        } else {
            $tang[] = 0;
        }

        $data['derajat'] = $der;
        $data['date'] = $tang;
        $this->load->view('user/chart_suhu', $data);
    }

    public function bacakelembaban()
    {
        $data['title'] = 'Status Ruangan Penyimpanan';
        $get = $this->db->query("SELECT MAX(id_riwayat) FROM tb_riwayat")->row_array();
        $satuan = 4;
        $id_akhir = $get['MAX(id_riwayat)'];
        $id_awal = $id_akhir - $satuan;
        $kelembaban = $this->db->query("SELECT kelembaban FROM tb_riwayat WHERE id_riwayat>='$id_awal' AND id_riwayat<='$id_akhir' ORDER BY id_riwayat ASC");
        $tanggal = $this->db->query("SELECT tanggal FROM tb_riwayat WHERE id_riwayat>='$id_awal' AND id_riwayat<='$id_akhir' ORDER BY id_riwayat ASC");

        if ($kelembaban->num_rows() > 0) {
            foreach ($kelembaban->result_array() as $k) {
                $der[] = $k['kelembaban'];
            }
        } else {
            $der[] = 0;
        }
        if ($tanggal->num_rows() > 0) {
            foreach ($tanggal->result_array() as $w) {
                $tang[] = $w['tanggal'];
            }
        } else {
            $tang[] = 0;
        }

        $data['derajat'] = $der;
        $data['date'] = $tang;
        $this->load->view('user/chart_kelembaban', $data);
    }

    public function ceksuhu()
    {
        $data['title'] = 'Status Ruangan Penyimpanan';
        $recordSensor = $this->M_monitoring->getDataSensor();
        if ($recordSensor == NULL) {
            $data = array('data_sensor' => "-");
        } else {
            $data = array('data_sensor' => $recordSensor);
        }

        //Kirim ke tampilan ceksuhu
        $this->load->view('user/v_ceksuhu', $data);
    }

    public function cekkelembaban()
    {
        $data['title'] = 'Status Ruangan Penyimpanan';
        $recordSensor = $this->M_monitoring->getDataSensor();
        if ($recordSensor == null || $recordSensor == "") {
            $data = array('data_sensor' => "-");
        } else {
            $data = array('data_sensor' => $recordSensor);
        }

        //Kirim ke tampilan cekkelembaban
        $this->load->view('user/v_cekkelembaban', $data);
    }

    public function cekkipas()
    {
        $data['title'] = 'Status Ruangan Penyimpanan';
        $recordSensor = $this->M_monitoring->getDataSensor();
        if ($recordSensor == null || $recordSensor == "") {
            $data = array('data_sensor' => "-");
        } else {
            $data = array('data_sensor' => $recordSensor);
        }

        //Kirim ke tampilan cekkipas
        $this->load->view('user/v_cekkipas', $data);
    }

    public function ceklampu()
    {
        $data['title'] = 'Status Ruangan Penyimpanan';
        $recordSensor = $this->M_monitoring->getDataSensor();
        if ($recordSensor == null || $recordSensor == "") {
            $data = array('data_sensor' => "-");
        } else {
            $data = array('data_sensor' => $recordSensor);
        }

        //Kirim ke tampilan ceklampu
        $this->load->view('user/v_ceklampu', $data);
    }

    public function cekpelembab()
    {
        $data['title'] = 'Status Ruangan Penyimpanan';
        $recordSensor = $this->M_monitoring->getDataSensor();
        if ($recordSensor == null || $recordSensor == "") {
            $data = array('data_sensor' => "-");
        } else {
            $data = array('data_sensor' => $recordSensor);
        }

        //Kirim ke tampilan cekpelembab
        $this->load->view('user/v_cekpelembab', $data);
    }

    public function kirimdata()
    {
        $suhu = $_GET['suhu'];
        $kelembaban = $_GET['kelembaban'];
        $kipas = $_GET['kipas'];   
        $lampu = $_GET['lampu'];
        $pelembab = $_GET['pelembab'];

        //update ke tabel tb_riwayat
        $DataUpdate = array(
            'suhu' => $suhu,
            'kelembaban' => $kelembaban,
            'kipas' => $kipas,
            'lampu' => $lampu,
            'pelembab' => $pelembab
        );

        //update data
        $this->M_monitoring->UpdateData($DataUpdate);
    }
}
