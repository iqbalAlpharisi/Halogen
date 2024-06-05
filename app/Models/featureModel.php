<?php 


namespace App\Models;

use CodeIgniter\Model;

class featureModel extends Model
{
    protected $table = 'feature';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'judul', 'desc', 'isi', 'thumbnail', 'date', 'time'];

}