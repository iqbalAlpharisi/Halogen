<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use CodeIgniter\Controller;

class Home extends BaseController
{
    private $beritaModel;

    public function __construct()
    {
        // Instantiate the BeritaModel
        $this->beritaModel = new BeritaModel();
    }

    public function welcome(): string
    {
        // Retrieve only the latest 3 records using the BeritaModel
        $data['berita'] = $this->beritaModel->orderBy('waktu', 'DESC')->limit(3)->findAll();

        // Pass data to the view
        return view('welcome_message', $data);
    }
}
