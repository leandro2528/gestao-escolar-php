<div class="container">
    <form action="?page=salvar_nova_inscricao" method="POST">
        <input type="hidden" name="acao" value="cadastrar_inscricao">
        <div class="row mt-2">
            <div class="col-4">
                <div class="mb-2">
                    <label>Nome:</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="mb-2">
                    <label>Email:</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="mb-2">
                    <label>Número do BI:</label>
                    <input type="text" class="form-control" name="numero_bi">
                </div>
                <div class="mb-2">
                    <label>Naturalidade:</label>
                    <input type="text" class="form-control" name="naturalidade">
                </div>
            </div>
            <div class="col-4">
                <div class="mb-2">
                    <label>Apelido:</label>
                    <input type="text" class="form-control" name="apelido">
                </div>
                <div class="mb-2">
                    <label>Telefone:</label>
                    <input type="text" class="form-control" name="telefone">
                </div>
                <div class="mb-2">
                    <label>Estado Civil:</label>
                    <input type="text" class="form-control" name="estado_civil">
                </div>
                <div class="mb-2">
                    <label>Local de Residencia:</label>
                    <input type="text" class="form-control" name="local_residencia">
                </div>
            </div>
            <div class="col-4">
                <div class="mb-2">
                    <label>Sexo:</label>
                    <input type="text" class="form-control" name="sexo">
                </div>
                <div class="mb-2">
                    <label>data de Nascimento:</label>
                    <input type="date" class="form-control" name="data_nasc">
                </div>
                <div class="mb-2">
                    <label>Pais:</label>
                    <input type="text" class="form-control" name="pais">
                </div>
                <div class="mb-2">
                    <label>Classe:</label>
                    <input type="text" class="form-control" name="class">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="title-encarregados">
                <div class="fs-4">Encarregados da Educação</div>
            </div>
            <div class="form-encarregados-educacao d-flex justify-content-between mt-2 mb-2">
                <div class="mt-2">
                    <label>Nome do Pai:</label>
                    <input type="text" class="form-control" name="nome_pai">
                </div>
                <div class="mt-2">
                    <label>Nome da Mãe:</label>
                    <input type="text" class="form-control" name="nome_mae">
                </div>
                <div class="mt-2">
                    <label>Telefone(PAI/MÃE):</label>
                    <input type="text" class="form-control" name="telefone_pai_mae">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="title-dados-escola">
                <div class="fs-4">Dados da escola anterior</div>
            </div>
            <div class="form-dados-escola d-flex justify-content-between mt-2 mb-2">
                <div class="mt-2">
                    <label>Nome da Escola:</label>
                    <input type="text" class="form-control" name="nome_escola_ant">
                </div>
                <div class="mt-2">
                    <label>Ano em que estudou nessa Escola:</label>
                    <input type="text" class="form-control" name="ano_escola_ant">
                </div>
                <div class="mt-2">
                    <label>Classe Frequentada:</label>
                    <input type="text" class="form-control" name="class_escola_ant">
                </div>
                <div class="mt-2">
                    <label>Turma:</label>
                    <input type="text" class="form-control" name="turma_escola_ant">
                </div>
            </div>
        </div>
        
        <div class="row mt-2">
            <div class="btn-form-inscricoes d-flex justify-content-between mb-5">
                <a href="index.php" class="btn btn-secondary" href="">Voltar</a>
                <input type="submit"  class="btn btn-primary" value="Salvar Inscrição">
            </div>
        </div>
    </form>
</div>