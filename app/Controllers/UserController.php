<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    private $UserModel;

    public function __construct() {
        $this->userModel = new UserModel();

    }

    public function index() {
        $data['user'] = $this->userModel->findAll();
        return view('user', $data);
    }

    public function create() {
        return view('create_user');
    }

    public function store() {
        $data = $this->request->getPost();
        $this->userModel->save($data);
        return redirect()->to('/user');
    }

    public function edit($id) {
        $data['user'] = $this->userModel->find($id);
        return view('edit_user', $data);
    }

    public function update($id) {
        $data = $this->request->getPost();
        $this->userModel->update($id, $data);
        return redirect()->to('/user');
    }

    public function delete($id) {
        $this->userModel->delete($id);
        return redirect()->to('/user');
    }

  
}