<main class="card m-4 p-5">
    <h1 class="text ">Libros</h1>
    <!-- tabla con libros dinamica-->
    <table class="table table-striped table-hover">
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
    <form action="<?php echo base_url() . '../buscar' ?>" method="POST">
        <div class="mb-3">
            <label for="codigo" class="form-label">Codigo: </label>
            <input type="text" class="form-control" id="codigo" name="codigo">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

</main>