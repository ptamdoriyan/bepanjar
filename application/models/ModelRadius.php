<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modelradius extends CI_Model
{

    public function getdatakelurahan($idkecamatan)
    {
        return $this->db->get_where('tb_radius_biaya', ['district_id' => $idkecamatan])->result_array();
    }
}
