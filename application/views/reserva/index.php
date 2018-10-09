<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Reserva Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('reserva/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Usuario Id</th>
						<th>Laboratorio Id</th>
						<th>Responsavel</th>
						<th>Dt Inicio</th>
						<th>Dt Fim</th>
						<th>Dt Solicitacao</th>
						<th>Dt Aprovacao</th>
						<th>Status</th>
						<th>Observacao</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($reserva as $r){ ?>
                    <tr>
						<td><?php echo $r['id']; ?></td>
						<td><?php echo $r['usuario_id']; ?></td>
						<td><?php echo $r['laboratorio_id']; ?></td>
						<td><?php echo $r['responsavel']; ?></td>
						<td><?php echo $r['dt_inicio']; ?></td>
						<td><?php echo $r['dt_fim']; ?></td>
						<td><?php echo $r['dt_solicitacao']; ?></td>
						<td><?php echo $r['dt_aprovacao']; ?></td>
						<td><?php echo $r['status']; ?></td>
						<td><?php echo $r['observacao']; ?></td>
						<td>
                            <a href="<?php echo site_url('reserva/edit/'.$r['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('reserva/remove/'.$r['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
