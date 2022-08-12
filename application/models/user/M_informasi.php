<?php
    class M_informasi extends CI_Model
    {

		public function getHasil()
        {
			$this->db->where('id_hasil', 'DESC');
            return $this->db->get('tb_hasil');
        }
    }