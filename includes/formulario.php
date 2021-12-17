<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>
    
    <h2 class="mt-3">Cadastrar vaga</h2>
    <div>
    <form method="post">
        <div class="form-group">
            <label for="Título">Título</label>
            <input type="text" class="form-control" name="titulo">
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="descricao"></textarea>
        </div>

        <div class="form-group">
        <label>Status</label>
        <div style="margin-left: -25px;">
                
            <div class="form-check form-check-inline">
                <label class="form-control">
                    <input type="radio" name="ativo" value="s" checked>Ativo
                </label>
            </div>

            <div class="form-check form-check-inline">
                <label class="form-control">
                    <input type="radio" name="ativo" value="n">Inativo
                </label>
            </div>

        </div>
        </div>

        <div class="form-group mt-2">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
    </div>

</main>
