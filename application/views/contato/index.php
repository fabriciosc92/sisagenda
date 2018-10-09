<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Contato Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('contato/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Usuario Id</th>
						<th>Tipo</th>
						<th>Ddd</th>
						<th>Numero</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($contato as $c){ ?>
                    <tr>
						<td><?php echo $c['id']; ?></td>
						<td><?php echo $c['usuario_id']; ?></td>
						<td><?php echo $c['tipo']; ?></td>
						<td><?php echo $c['ddd']; ?></td>
						<td><?php echo $c['numero']; ?></td>
						<td>
                            <a href="<?php echo site_url('contato/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('contato/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
