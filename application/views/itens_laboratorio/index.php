<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Itens Laboratorio Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('itens_laboratorio/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Chk Projeto</th>
						<th>Laboratorio Id</th>
						<th>Qtd Maquinas</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($itens_laboratorio as $i){ ?>
                    <tr>
						<td><?php echo $i['id']; ?></td>
						<td><?php echo $i['chk_projeto']; ?></td>
						<td><?php echo $i['laboratorio_id']; ?></td>
						<td><?php echo $i['qtd_maquinas']; ?></td>
						<td>
                            <a href="<?php echo site_url('itens_laboratorio/edit/'.$i['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('itens_laboratorio/remove/'.$i['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
