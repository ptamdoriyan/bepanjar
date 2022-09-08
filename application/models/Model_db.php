<?php

class Model_db extends CI_Model
{

    public function getalldatakelurahan()
    {
        return $this->db->get('tb_radius_biaya')->result_array();
    }

    public function getdatakelurahan($idkecamatan)
    {
        return $this->db->get_where('tb_radius_biaya', ['district_id' => $idkecamatan])->result_array();
    }
}
