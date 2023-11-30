<?php
namespace App\Models;
use CodeIgniter\Model;

class portadaModel extends Model{

    public function tituloModel(){
        $db= \Config\Database::connect();
        $builder =$db->table('tbl_portada a');

        $builder->select(
            'a.POR_TITULO'
        );
        $query=$builder->get();
        $resp= $query->getResultArray();
        return $resp;
    }

    public function contenidoModel(){
        $db= \Config\Database::connect();
        $builder =$db->table('tbl_contenido a');
    
        $builder->select(
            'a.con_contenido,
            b.tem_tema'
        );

        $builder->join('tbl_tema b','a.tem_id=b.tem_id');
        
        $query=$builder->get();
        $resp= $query->getResultArray();
        return $resp;
    }
}