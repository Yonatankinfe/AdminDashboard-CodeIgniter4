<?php


namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','Title', 'content', 'name', 'rate','hashed_id'];
    
}

?>
