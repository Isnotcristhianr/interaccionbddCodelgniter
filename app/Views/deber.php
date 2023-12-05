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

    <!-- ListBox dinamico muestra tema-->
    <div class="mb-3">
        <form action="<?php echo base_url() . '/obtenerLibros' ?>" method="POST">
            <label for="tema" class="form-label">Tema: </label>
            <select class="form-select" id="tema" name="tema">
                <option value="0">Seleccione un tema</option>
                <?php foreach ($temas as $t) { ?>
                    <option value="<?php echo $t['tem_id']; ?>"><?php echo $t['tem_tema']; ?></option>
                <?php } ?>
            </select>
        </form>
    </div>
    <div id="salida"></div>
    <script>
        /* obtener tema y mostrar libros */
        $(document).ready(function() {
            $('#tema').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo base_url() . '/obtenerLibros' ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('#salida').html(data);
                    }
                });
            });
        });
    </script>

    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <!-- DataTable -->
    <script>
        $(document).ready(function() {
            $('#tbl1').DataTable();
        });
    </script>
</main>