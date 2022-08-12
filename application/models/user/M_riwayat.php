<?php
    class M_riwayat extends CI_Model
    {
		public function getRiwayat()
        {
            $this->db->order_by("id_riwayat", "desc");
            $query = $this->db->get('tb_riwayat');
            return $query;
        }

		// Hapus
		public function hapus($where, $table)
        {
            $this->db->delete($table, $where);
        }
    }
