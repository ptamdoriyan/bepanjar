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
        if ($idkecamatan) {
            $datakelurahan = $this->radius->getdatakelurahan($idkecamatan);
            if ($datakelurahan) {
                $this->response([
                    'status' => 'Success',
                    'data' => $datakelurahan
                ], 200);
            } else {
                $this->response([
                    'status' => 'Null',
                    'message' => 'Id Kelurahan tidak terdaftar'
                ], 200);
            }
        }
        if ($idkecamatan === null) {
            $datakelurahan = $this->radius->getalldatakelurahan();
            $this->response([
                'status' => 'Success',
                'data' => $datakelurahan
            ], 200);
        } else {
            $this->response([
                'status' => 'Error',
                'message' => 'API Error Callback'
            ], 404);
        }
    }
}
