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

        public function UpdateData($DataUpdate)
        {
            $this->db->insert('tb_riwayat', $DataUpdate);  
        }
        
    }