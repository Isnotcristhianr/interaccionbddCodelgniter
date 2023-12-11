<main class="card m-4 p-5">
    <h1 class="text ">Libros</h1>
    <!-- tabla con libros dinamica-->
    <table class="table table-striped table-hover" id="tbl1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Tema</th>
                <th scope="col">Codigo</th>
                <th scope="col">Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libros as $l) { ?>
                <tr>
                    <th scope="row"><?php echo $l['lib_id']; ?></th>
                    <td><?php echo $l['lib_titulo']; ?></td>
                    <td><?php echo $l['tem_tema']; ?></td>
                    <td><?php echo $l['lib_codigo']; ?></td>
                    <td><?php echo $l['lib_precio']; ?></td>


                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Buscador de libro por codigo -->
    <form action="<?php echo base_url() . '/buscar' ?>" method="POST">
        <div class="mb-3">
            <label for="codigo" class="form-label">Codigo: </label>
            <input type="text" class="form-control" id="codigo" name="codigo">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

    <!-- ListBox dinámico muestra tema-->
    <div class="mb-3">
        <label for="tema" class="form-label">Tema: </label>
        <select class="form-select" id="tema" name="tema">
            <option value="0">Seleccione un tema</option>
            <?php foreach ($temas as $t) { ?>
                <option value="<?php echo $t['tem_id']; ?>"><?php echo $t['tem_tema']; ?></option>
            <?php } ?>
        </select>
    </div>

    <div id="salida"></div>

    <!-- tabla del inner join se muestra tema y libro relacionado -->
    <table class="table table-striped table-hover" id="tabla">
        <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
               
        </tbody>
    </table>

    <!-- Incluir jQuery antes de cualquier otro script que lo utilice -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        /* ajax seleciono tema muestro div tema */
        $(document).ready(function() {
            $('#tema').change(function() {
                var tema = $('#tema').val();
                console.log(tema);

                $.ajax({
                    url: "<?php echo base_url() . 'obtenerLibros' ?>",
                    method: "POST",
                    data: {
                        tema: tema,
                    },
                    success: function(data) {
                        $('#salida').html(data);
                        console.log(data);

                        /* colocar datos en la tabla */
                        $tabla = $('#tabla');
                        $tabla.find('tbody').empty();
                        $tabla.find('tbody').append(data
                        ,
                        '<tr><td><input type="text" class="form-control" id="titulo" name="titulo"></td><td><button type="button" class="btn btn-primary" id="actualizar">Actualizar</button></td></tr>'
                        
                        );



                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });

            });
        });
    </script>

    <!-- js -->

    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <!-- DataTable -->
    <script>
        $(document).ready(function() {
            $('#tbl1').DataTable();
        });
    </script>

    <!-- Script para obtener tema y mostrar libros -->
    <!--   <script src="<?php echo base_url() . './assets/js/scripts.js' ?>"></script> -->
</main>