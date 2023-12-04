<?php

namespace App\Models;

use CodeIgniter\Model;

class temaModel extends Model
{
    
        function __construct()
        {
            $this->db = \Config\Database::connect();
        }
    
        function listarTemas()
        {
            $builder = $this->db->table('tbl_tema a');
    
            $builder->select(
                'a.tem_id,
                a.tem_tema'
            );
    
            $query = $builder->get();
            $resp = $query->getResultArray();
    
            return $resp;
        }
}