<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Radius extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('model_radius', 'radius');
    }

    public function kelurahan_get()
    {
        $idkecamatan = $this->get('idkecamatan');
        $datakelurahan = $this->radius->getdatakelurahan($idkecamatan);
        $this->response($datakelurahan, 200);
    }
}
