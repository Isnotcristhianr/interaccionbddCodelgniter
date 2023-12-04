<?php

namespace App\Models;

use CodeIgniter\Model;

class librosModel extends Model
{

    function buscarLibros()
    {
    }

    function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    function listarLibros()
    {
        $builder = $this->db->table('tbl_libros a');

        /* unir 3 tablas, 2 normales 1 intermedia */
        $builder->select(
            'a.lib_id,
            a.lib_titulo,
            a.lib_codigo,
            a.lib_precio,
            a.lib_resumen,
            b.tem_tema'
        );

        $builder->join('tbl_tema b', 'a.tem_id=b.tem_id');
        $builder->join('tbl_libt c', 'a.lib_id=c.lib_id');



        $query = $builder->get();
        $resp = $query->getResultArray();

        return $resp;
    }

    function buscarLibro($idTema)
    {
        $builder = $this->db->table('tbl_libt a');

        $builder->select(
            'b.lib_titulo,
            a.lib_codigo,'
        );

        $builder->join('tbl_tema b', 'a.tem_id=' . $idTema);
        $builder->join('tbl_libros c', 'a.lib_id=c.lib_id');

        $query = $builder->get();
        $resp = $query->getResultArray();

        return $resp;
    }

}
