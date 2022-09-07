<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Radius extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Model_radius', 'radius');
    }

    public function index_get()
    {
        $idkecamatan = $this->get('idkecamatan');
        $datakelurahan = $this->radius->getdatakelurahan($idkecamatan);
        $this->response($datakelurahan, 200);
    }
}
