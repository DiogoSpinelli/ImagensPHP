
<div class="jumbotron bg-white text-dark">

    <h2> Redimensionar Imagem </h2>

    <form method="post" enctype="multipart/form-data" action="processa2.php">

        <div class="form-group">
            <label>Imagem</label>
            <input type="file" name="imagem" class="form-control">
        </div>

</br>

        <div class="form-group">
            <label>Dimensões</label>
            <input type="number" name="number" class="form-control">
        </div>

        </br>

        <div class="form-group">
            <button name="redimensionar" class="btn btn-success">Redimensionar</button>
        </div>

    </form>

</div>