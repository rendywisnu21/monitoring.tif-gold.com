<?php
    class M_monitoring extends CI_Model
    {
        public function getDataSensor()
        {
            $this->db->select('*');
            $this->db->from('tb_riwayat');
            $this->db->order_by('id_riwayat', 'desc');
            $query = $this->db->get();
            return $query->row();
        }

        public function bacaSensor()
        {
            $this->db->select('*');
            $this->db->from('tb_riwayat');
            $this->db->order_by('id_riwayat', 'asc');
            $query = $this->db->get();
            return $query;
        }

        public function UpdateData($DataUpdate)
        {
            $this->db->insert('tb_riwayat', $DataUpdate);  
        }
        
        public function getDataKipas()
        {
            $this->db->select('kipas');
            $this->db->from('tb_riwayat');
            $this->db->order_by('id_riwayat', 'desc');
            $query = $this->db->get();
            return $query->row();
        }
    }
?>