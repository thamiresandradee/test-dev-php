<div class="container">
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ basic-table ] start -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <form action="" method="POST">
                    
                        <div class="col-md-12">
                            <label for="status-select" class="form-group mx-sm-2">Ordenar Por</label>
                            <select id="tipopesq" name="tipopesq" class="custom-select" onchange="showHideData();">
                                <option value="SIGLA">SIGLA</option>
                                <option value="NOME">NOME</option>  
                            </select>
                        </div>
                        <br/>

                        <input type="hidden" id="ordenar" name="ordenar" value="1">

                        <div class="col-md-9">
                            <button type="submit" class="btn btn-success waves-effect waves-light mr-1">
                                Ordenar
                            </button>
                        </div>
                    
                    </form>

                </div>
                <div class="card-body table-border-style">
                
                    <form method="post" action="<?php echo base_url(); ?>export_csv/export">
                        <input type="hidden" id="pagina" name="pagina" value="paises">
                        <input type="hidden" id="tipopesq" name="tipopesq" value="<?php echo (isset($tipo) ? $tipo : '') ?>">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                <div class="col-md-6">
                                    <h3 class="panel-title" ><?php echo $titulo; ?></h3>
                                </div>
                                <div class="col-md-6" align="right">
                                    <input type="submit" name="export" class="btn btn-secondary btn-xs" value="Exportar .CSV" />
                                </div>
                             </div>
                        </div>
                        <br />
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sigla</th>
                                            <th>Nome</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($paises as $pais) : ?>
                                        <tr>
                                            <td><?php echo $pais->sigla; ?></td>
                                            <td><?php echo $pais->nome; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>