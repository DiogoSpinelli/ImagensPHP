
<div class="jumbotron bg-white text-dark">

    <h2> Aplicar filtro </h2>

    <form method="post" enctype="multipart/form-data" action="processa2.php">

        <div class="form-group">
            <label>Imagem</label>
            <input type="file" name="imagem" class="form-control">
        </div>

        </br>

        <div>
            <select name="time">
                <option value="negate">Negativo</option>
                <option value="grayscale">Preto e Branco</option>
                <option value="brightness">Iluminado</option>
                <option value="contrast">Contraste</option>
                <option value="colorize">Colorizado</option>
                <option value="edge_detect">Contornos</option>
                <option value="emboss">Embaçado</option>
                <option value="gaussian_blur">Desfoque</option>
                <option value="selective_blur">Desfoque Seletivo</option>
                <option value="mean_removal">Granulação</option>
                <option value="mean_smooth">Suave</option>
                <option value="pixelate">Pixelado</option>
                <option value="flip">Inverter</option>
            </select>
        </div>

        </br>

        <div class="form-group">
            <button name="filtro" class="btn btn-success">Aplicar</button>
        </div>

    </form>

</div>