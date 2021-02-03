<?php
foreach ($dados as $dado) {
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pagina Serviços</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Pagina Serviços </a></li>
                            <li class="breadcrumb-item active">Detalhes do serviço:     </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <?php echo $dado['nome']; ?>
                    </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nome produto: </label>
                        <input type="" disabled="" value="<?php echo $dado['nome']; ?>" class="input-block-level"/>                    
                    </div>
                    <div class="form-group">
                        <label for="">Tipo produto: </label>
                        <input type="" disabled="" value="<?php echo $dado['tipo']; ?>" class="input-block-level"/>                    
                    </div>
                    <div class="form-group">
                        <label for="">Valor produto: </label>
                        <input type="" disabled="" value="<?php echo $dado['valor']; ?>" class="input-block-level"/>                    
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer ml-auto">
                    <a href="?pg=servicos" class="btn btn-warning btn-lg">Voltar</a>
                    <a href="?pg=servicos-editar&id=<?php echo $dado['id']; ?>" class="btn btn-success btn-lg">Editar                    
                    <span class="fa fa-edit"></span>
                    </a>
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php } ?>  