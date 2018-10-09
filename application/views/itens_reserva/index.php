<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Itens Reserva Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('itens_reserva/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Reserva Id</th>
						<th>Chk Projeto</th>
						<th>Usuario Id</th>
						<th>Qtd Maquinas</th>
						<th>Observacao</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($itens_reserva as $i){ ?>
                    <tr>
						<td><?php echo $i['reserva_id']; ?></td>
						<td><?php echo $i['chk_projeto']; ?></td>
						<td><?php echo $i['usuario_id']; ?></td>
						<td><?php echo $i['qtd_maquinas']; ?></td>
						<td><?php echo $i['observacao']; ?></td>
						<td>
                            <a href="<?php echo site_url('itens_reserva/edit/'.$i['reserva_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('itens_reserva/remove/'.$i['reserva_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
