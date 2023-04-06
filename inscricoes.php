<div class="container">
    <div class="row bg-light p-3">
        <div class="col-6 fs-3">INSCRIÇÕES</div>
        <div class="col-6 d-flex justify-content-end">
            <a href="?page=nova-inscricao" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
            </a href="?page=nova-inscricao">
        </div>
    </div>

    <!-- CAMPO DE PESQUISA -->

    <div class="box-search d-flex mt-3">
        <input type="text" class="form-control" placeholder="Número do processo ou nome">
        <a href="" class="d-flex align-items-center ms-5 btn btn-success">
            Pesquisar
        </a>
    </div>

    <div class="fs-3">O Número do candidato é: A fazer</div>

</div>

<div class="container">
    <div class="row">
        <div class="col">
            <?php
            $sql = "SELECT * FROM inscricoes";

            $res = $conn->query($sql);

            $qtd = $res->num_rows;

            if ($qtd > 0) {
                print "<table class='table table-hover table-striped table-bordered'";
                    print "<tr>";
                        print "<thead class='bg-primary text-white'>";
                            print "<th>ID</th>";
                            print "<th>Nome</th>";
                            print "<th>Apelido</th>";
                            print "<th>Email</th>";
                            print "<th>Telefone</th>";
                            print "<th>Número do BI</th>";
                            print "<th>Sexo</th>";
                            print "<th>Classe</th>";
                            print "<th>Ações</th>";
                        print "</thead>";
                    print "</tr>";
                while ($row = $res->fetch_object()) {
                    print "<tr>";
                        print "<td>".$row->id."</td>";
                        print "<td>".$row->nome."</td>";
                        print "<td>".$row->apelido."</td>";
                        print "<td>".$row->email."</td>";
                        print "<td>".$row->telefone."</td>";
                        print "<td>".$row->numero_bi."</td>";
                        print "<td>".$row->sexo."</td>";
                        print "<td>".$row->classe."</td>";
                        print "<td>
                                    <button onclick=\"location.href='?page=editar_inscricoes&id=".$row->id."'\" class='btn btn-warning btn-sm' href=''> Editar </button>
                                    <button onclick=\"if(confirm('Realmente deseja excluir?')) {location='?page=salvar_nova_inscricao&acao=excluir&id=".$row->id."';}\" class='btn btn-danger btn-sm' href=''> Excluir </button>
                               </td>";
                    print "</tr>";
                }
                print "</table>";
            } else {
                print "<p class='alert alert-danger'> Não existe cadastro nessa base de dados </p>";
            }
            ?>
            
        </div>
    </div>
</div>
