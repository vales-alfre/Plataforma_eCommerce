<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;


class producto_model extends Model
{
    protected $table = 'producto';
    protected $primaryKey       = 'id';
    protected $allowedFields = ['idcategoria', 'idmarca', 'descripcion', 'precio', 'pvp', 'impuesto'];
    
   
    public function getListado()
    {
        $query = $this->db->query("SELECT Concat('r_',id) as dt_rowid, c.nombre_categoria as idcategoria, m.nombre_marca as idmarca, p.descripcion, precio, pvp, impuesto 
         FROM producto p, categorias c, marcas m where p.idcategoria = c.id_categoria and p.idmarca = m.id_marca  order by id;");
        return $query->getResultArray();
    }

    public function findById($id)
    {
       return $this->asArray()->where(['id' => $id])->first();
    }

    
    
   
}