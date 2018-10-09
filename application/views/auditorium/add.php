<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Auditorium Add</h3>
            </div>
            <?php echo form_open('auditorium/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="usuario_id" class="control-label">Usuario Id</label>
						<div class="form-group">
							<input type="text" name="usuario_id" value="<?php echo $this->input->post('usuario_id'); ?>" class="form-control" id="usuario_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="acao" class="control-label">Acao</label>
						<div class="form-group">
							<input type="text" name="acao" value="<?php echo $this->input->post('acao'); ?>" class="form-control" id="acao" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dt_acao" class="control-label">Dt Acao</label>
						<div class="form-group">
							<input type="text" name="dt_acao" value="<?php echo $this->input->post('dt_acao'); ?>" class="form-control" id="dt_acao" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="reserva_id" class="control-label">Reserva Id</label>
						<div class="form-group">
							<input type="text" name="reserva_id" value="<?php echo $this->input->post('reserva_id'); ?>" class="form-control" id="reserva_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="laboratorio_id" class="control-label">Laboratorio Id</label>
						<div class="form-group">
							<input type="text" name="laboratorio_id" value="<?php echo $this->input->post('laboratorio_id'); ?>" class="form-control" id="laboratorio_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="campus_id" class="control-label">Campus Id</label>
						<div class="form-group">
							<input type="text" name="campus_id" value="<?php echo $this->input->post('campus_id'); ?>" class="form-control" id="campus_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="itens_laboratorio_id" class="control-label">Itens Laboratorio Id</label>
						<div class="form-group">
							<input type="text" name="itens_laboratorio_id" value="<?php echo $this->input->post('itens_laboratorio_id'); ?>" class="form-control" id="itens_laboratorio_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ref_anterior" class="control-label">Ref Anterior</label>
						<div class="form-group">
							<textarea name="ref_anterior" class="form-control" id="ref_anterior"><?php echo $this->input->post('ref_anterior'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>