<?php
require APPPATH . 'libraries/REST_Controller.php';     

class Monitoring extends REST_Controller {    

    public function __construct() {

      header('Access-Control-Allow-Origin: *');

      header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

       parent::__construct();

       $this->load->database();

       $this->load->model("user/M_monitoring");

    }

    public function index_get(){
        $record = $this->db->query("SELECT * FROM tb_riwayat ORDER BY id_riwayat ASC")->result();
        if (count($record) > 0) {
            foreach ($record as $k) {
                $suhu[] = $k->suhu;
                $tanggal[] = $k->tanggal;
            }
        } else {
            $suhu[] = "-";
            $tanggal[] = "-";
        }

        $data['message'] = "Berhasil Get Data";
        $data['suhu'] = json_encode($suhu);
        $data['date'] = json_encode($tanggal);

        $this->response($data, 200);      
    }

    public function index_post(){
        $suhu       = $_POST['suhu'];
        $kelembaban = $_POST['kelembaban'];
        $kipas      = $_POST['kipas'];   
        $lampu      = $_POST['lampu'];
        $pelembab   = $_POST['pelembab'];

        //update ke tabel sensor
        $DataUpdate = array(
            'suhu'          => $suhu,
            'kelembaban'    => $kelembaban,
            'kipas'         => $kipas,
            'lampu'         => $lampu,
            'pelembab'      => $pelembab
        );

        //update data
        $update = $this->db->insert('tb_riwayat', $DataUpdate);

        $data['message'] = "Berhasil Insert Data";
        $this->response($data, 200);
        
    }
}
