<?php

class Model_radius extends CI_Model
{

    public function getdatakelurahan($idkecamatan)
    {
        return $this->db->get_where('tb_radius_biaya', ['district_id' => $idkecamatan])->result_array();
    }
}
