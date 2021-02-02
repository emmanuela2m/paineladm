<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detalhes do produto - Página Contato do Painel Administrativo</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Contato-Vizualizar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <?php
            foreach ($dados as $dado) {
                echo $dado['nome'] . '<br>';
                echo $dado['email'] . '<br>';
                echo $dado['mensagem'] . '<br>';
            }
            ?>
            <hr>
            <a href="?pg=contato" class="btn btn-success">Voltar a lista de E-mail</a>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>