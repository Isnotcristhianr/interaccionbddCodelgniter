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

        //buscar libro por id
        function buscarLibro($id)
        {
            $builder = $this->db->table('tbl_libros a');
    
            $builder->select('c.lib_titulo');

            $builder->join('tbl_tema b', 'a.tem_id=b.tem_id');
            $builder->join('tbl_libros c', 'a.lib_id=c.lib_id');
            $builder->where('b.tem_id', $id);

            $query = $builder->get();
            $resp = $query->getResultArray();
    
            return $resp;
        }
}