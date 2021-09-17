<div class="container">
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ basic-table ] start -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5><?php echo $titulo; ?></h5>                    
                </div>
            </div>
        </div>
    </div>
</div>
<br/>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Sigla</th>
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($paises as $pais) : ?>
                    <tr>
                        <td><?php echo $pais->sigla; ?></td>
                        <td><?php echo $pais->nome; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>