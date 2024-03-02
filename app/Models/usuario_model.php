<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;


class usuario_model extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey       = 'id';
    protected $allowedFields = ['usuario','clave','nombres'];
    
    public function execQuery($Query){
        $query = $this->db->query($Query);
        return $query->getNumRows() > 0?$query:false;
     }
  
    
    
    public function findById($id)
    {
       return $this->asArray()->where(['id' => $id])->first();
    }

    

    
   
}