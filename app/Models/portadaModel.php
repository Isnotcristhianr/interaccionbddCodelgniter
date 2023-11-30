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

    /* libreria */
    public function librosModel(){
        $db= \Config\Database::connect();
        $builder =$db->table('tbl_libros a');
    
        $builder->select(
            'a.lib_id,
            a.lib_titulo,
            a.lib_codigo,
            a.lib_precio,
            a.lib_resumen,
            b.tem_tema'
        );

        $builder->join('tbl_tema b','a.tem_id=b.tem_id');
        
        $query=$builder->get();
        $resp= $query->getResultArray();
        return $resp;
    }

    public function buscarModel($codigo){
        $db= \Config\Database::connect();
        $builder =$db->table('tbl_libros a');
    
        $builder->select(
            'a.lib_id,
            a.lib_titulo,
            a.lib_codigo,
            a.lib_precio,
            a.lib_resumen,
            b.tem_tema'
        );

        $builder->join('tbl_tema b','a.tem_id=b.tem_id');
        
        $query=$builder->get();
        $resp= $query->getResultArray();
        return $resp;
    }
}