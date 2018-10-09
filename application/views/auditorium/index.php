<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Auditoria Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('auditorium/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Usuario Id</th>
						<th>Acao</th>
						<th>Dt Acao</th>
						<th>Reserva Id</th>
						<th>Laboratorio Id</th>
						<th>Campus Id</th>
						<th>Itens Laboratorio Id</th>
						<th>Ref Anterior</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($auditoria as $a){ ?>
                    <tr>
						<td><?php echo $a['id']; ?></td>
						<td><?php echo $a['usuario_id']; ?></td>
						<td><?php echo $a['acao']; ?></td>
						<td><?php echo $a['dt_acao']; ?></td>
						<td><?php echo $a['reserva_id']; ?></td>
						<td><?php echo $a['laboratorio_id']; ?></td>
						<td><?php echo $a['campus_id']; ?></td>
						<td><?php echo $a['itens_laboratorio_id']; ?></td>
						<td><?php echo $a['ref_anterior']; ?></td>
						<td>
                            <a href="<?php echo site_url('auditorium/edit/'.$a['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('auditorium/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
