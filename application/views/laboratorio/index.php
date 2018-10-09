<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laboratorio Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('laboratorio/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Projetor</th>
						<th>Aprovada</th>
						<th>Campus Id</th>
						<th>Nome</th>
						<th>Qtd Lugares</th>
						<th>Qtd Maquinas</th>
						<th>Descricao</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($laboratorio as $l){ ?>
                    <tr>
						<td><?php echo $l['id']; ?></td>
						<td><?php echo $l['projetor']; ?></td>
						<td><?php echo $l['aprovada']; ?></td>
						<td><?php echo $l['campus_id']; ?></td>
						<td><?php echo $l['nome']; ?></td>
						<td><?php echo $l['qtd_lugares']; ?></td>
						<td><?php echo $l['qtd_maquinas']; ?></td>
						<td><?php echo $l['descricao']; ?></td>
						<td>
                            <a href="<?php echo site_url('laboratorio/edit/'.$l['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('laboratorio/remove/'.$l['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
