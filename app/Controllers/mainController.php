<?php namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\featureModel;
use CodeIgniter\Controller;

class mainController extends Controller
{
    private $BeritaModel;
    private $featureModel;

    public function __construct() {
        $this->BeritaModel = new BeritaModel();
        $this->featureModel = new featureModel();

    }
    public function main() {
        $data['berita'] = $this->BeritaModel->orderBy('waktu', 'DESC')->findAll();
        $data['feature'] = $this->featureModel->orderBy('time', 'DESC')->limit(4)->findAll();
        return view('main_page', $data);
    }
    public function baru() {
        $data['berita'] = $this->BeritaModel->orderBy('waktu', 'DESC')->paginate(5);
        $data['pager'] = $this->BeritaModel->pager;
        return view('beritaBaru_page', $data);
    }
    public function review() {
        return view('review_page');
    }
    public function subscribe() {
        return view('subscribe_page');
    }
    public function detail($id) {
        $data['berita'] = $this->BeritaModel->find($id);
        $data['trending'] = $this->BeritaModel->orderBy('waktu', 'DESC')->limit(3)->findAll();
        return view('detail_page', $data);
    }
}