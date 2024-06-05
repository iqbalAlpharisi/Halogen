<?php namespace App\Controllers;

use App\Models\featureModel;
use CodeIgniter\Controller;

class featureController extends Controller
{
    private $featureModel;

    public function __construct() {
        $this->featureModel = new featureModel();

    }

    public function feature() {
        $data['feature'] = $this->featureModel->findAll();
        return view('feature', $data);
    }

    public function create() {
        return view('create_feature');
    }

    public function store() {
        $file = $this->request->getFile('thumbnail');
        if ($file->isValid() && ! $file->hasMoved()) 
            {   $namathumbnail = $file->getRandomName();
                $file->move('IMG/feature', $namathumbnail);
            }
        $data = [
            'judul'=>$this->request->getPost('judul'),
            'desc'=>$this->request->getPost('desc'),
            'isi'=>$this->request->getPost('isi'),
            'thumbnail'=>$namathumbnail
        ];
        $this->featureModel->save($data);
        
        
        return redirect()->to('/admin/feature');
    }

    public function edit($id) {
        $data['feature'] = $this->featureModel->find($id);
        return view('edit_feature', $data);
    }

    public function update($id)
    {
        // Retrieve post data
        $postData = $this->request->getPost();
    
        // Initialize $namathumbnail
        $namathumbnail = null;
    
        // Retrieve the file
        $file = $this->request->getFile('thumbnail');
    
        // Check if a file was uploaded and is valid
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Fetch the existing image name from the database
            $existingData = $this->featureModel->find($id);
            $old_img_name = $existingData['thumbnail'];
    
            // Check if the old image exists and delete it
            if (file_exists('IMG/feature/' . $old_img_name)) {
                unlink('IMG/feature/' . $old_img_name);
            }
    
            // Generate a new random name for the new file and move it to the 'IMG' directory
            $namathumbnail = $file->getRandomName();
            $file->move('IMG/feature/', $namathumbnail);
    
            // Add the new filename to the post data
            $postData['thumbnail'] = $namathumbnail;
        }
    
        // Ensure the post data is an array
        if (!is_array($postData)) {
            $postData = (array) $postData;
        }
    
        // Update the database record with the new data
        $this->featureModel->update($id, $postData);
    
        // Redirect to the 'feature' page
        return redirect()->to('/admin/feature');
    }
    

    public function delete($id) {
        $this->featureModel->delete($id);
        return redirect()->to('/admin/feature');
    }


  
}