<div class="jumbotron bg-white text-dark">

    <h2>Colocar marca d'agua</h2>

    <form method="post" action="processa.php" enctype="multipart/form-data">

        <div class="form-group">
            <label>Titulo do Artigo</label>
            <input type="text" name="titulo_artigo" class="form-control">
        </div>

        </br>

        <div class="form-group">
            <label>Imagem</label>
            <input type="file" name="imagem" class="form-control">
        </div>

        </br>

        <div class="form-group">
            <label>Marca</label>
            <input type="file" name="marca" class="form-control">
        </div>

        </br>

        <div class="form-group">
            <input type="submit" value="cadastrar" class="btn btn-success">
        </div>

    </form>

</div>