<?php namespace App\Controllers;

use App\Models\BeritaModel;
use CodeIgniter\Controller;

class BeritaController extends Controller
{
    private $BeritaModel;

    public function __construct() {
        $this->BeritaModel = new BeritaModel();

    }

    public function berita() {
        $data['berita'] = $this->BeritaModel->findAll();
        return view('berita', $data);
    }

    public function create() {
        return view('create_berita');
    }

    public function store() {
        $file = $this->request->getFile('foto');
        if ($file->isValid() && ! $file->hasMoved()) 
            {   $namaFoto = $file->getRandomName();
                $file->move('IMG', $namaFoto);
            }
        $data = [
            'judul'=>$this->request->getPost('judul'),
            'berita'=>$this->request->getPost('berita'),
            'isi'=>$this->request->getPost('isi'),
            'foto'=>$namaFoto
        ];
        $this->BeritaModel->save($data);
        
        
        return redirect()->to('/admin');
    }

    public function edit($id) {
        $data['berita'] = $this->BeritaModel->find($id);
        return view('edit_berita', $data);
    }

    public function update($id)
    {
        // Retrieve post data
        $postData = $this->request->getPost();
    
        // Initialize $namaFoto
        $namaFoto = null;
    
        // Retrieve the file
        $file = $this->request->getFile('foto');
    
        // Check if a file was uploaded and is valid
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Fetch the existing image name from the database
            $existingData = $this->BeritaModel->find($id);
            $old_img_name = $existingData['foto'];
    
            // Check if the old image exists and delete it
            if (file_exists('IMG/' . $old_img_name)) {
                unlink('IMG/' . $old_img_name);
            }
    
            // Generate a new random name for the new file and move it to the 'IMG' directory
            $namaFoto = $file->getRandomName();
            $file->move('IMG', $namaFoto);
    
            // Add the new filename to the post data
            $postData['foto'] = $namaFoto;
        }
    
        // Ensure the post data is an array
        if (!is_array($postData)) {
            $postData = (array) $postData;
        }
    
        // Update the database record with the new data
        $this->BeritaModel->update($id, $postData);
    
        // Redirect to the 'berita' page
        return redirect()->to('/admin');
    }
    

    public function delete($id) {
        $this->BeritaModel->delete($id);
        return redirect()->to('/admin');
    }


  
}