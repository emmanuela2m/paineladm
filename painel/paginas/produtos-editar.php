
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar produtos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Editar produtos</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Nome produto</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="?pg=produtos-editar" method="POST">
                            <?php foreach ($dados as $dado) { ?>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nome">Produto</label>
                                        <input type="text" name="nome" au value="<?php echo $dado['nome']; ?>" class="form-control" id="nome">
                                    </div>
                                    <div class="form-group">
                                        <label for="tipo">Tipo produto</label>
                                        <input type="text" value="<?php echo $dado['tipo']; ?>" name="tipo" class="form-control" id="tipo">
                                    </div>
                                    <div class="form-group">
                                        <label for="valor">Valor do produto em R$</label>
                                        <input type="text" value="<?php echo str_replace('.', ',', $dado['valor']); ?>" name="valor" class="form-control" id="valor">
                                    </div>
                                    <input type="hidden" value="<?php echo $dado['id']; ?>" name="id">
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-right">
                                    <a href="?pg=produtos" class="btn btn-warning"><span class="fa fa-arrow-circle-o-left"></span> Voltar </a>
                                    <button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Atualizar</button>
                                </div>
                            <?php } ?>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
