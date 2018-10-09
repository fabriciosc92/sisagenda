<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Reserva Edit</h3>
            </div>
			<?php echo form_open('reserva/edit/'.$reserva['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="usuario_id" class="control-label">Usuario Id</label>
						<div class="form-group">
							<input type="text" name="usuario_id" value="<?php echo ($this->input->post('usuario_id') ? $this->input->post('usuario_id') : $reserva['usuario_id']); ?>" class="form-control" id="usuario_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="laboratorio_id" class="control-label">Laboratorio Id</label>
						<div class="form-group">
							<input type="text" name="laboratorio_id" value="<?php echo ($this->input->post('laboratorio_id') ? $this->input->post('laboratorio_id') : $reserva['laboratorio_id']); ?>" class="form-control" id="laboratorio_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="responsavel" class="control-label">Responsavel</label>
						<div class="form-group">
							<input type="text" name="responsavel" value="<?php echo ($this->input->post('responsavel') ? $this->input->post('responsavel') : $reserva['responsavel']); ?>" class="form-control" id="responsavel" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dt_inicio" class="control-label">Dt Inicio</label>
						<div class="form-group">
							<input type="text" name="dt_inicio" value="<?php echo ($this->input->post('dt_inicio') ? $this->input->post('dt_inicio') : $reserva['dt_inicio']); ?>" class="form-control" id="dt_inicio" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dt_fim" class="control-label">Dt Fim</label>
						<div class="form-group">
							<input type="text" name="dt_fim" value="<?php echo ($this->input->post('dt_fim') ? $this->input->post('dt_fim') : $reserva['dt_fim']); ?>" class="form-control" id="dt_fim" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dt_solicitacao" class="control-label">Dt Solicitacao</label>
						<div class="form-group">
							<input type="text" name="dt_solicitacao" value="<?php echo ($this->input->post('dt_solicitacao') ? $this->input->post('dt_solicitacao') : $reserva['dt_solicitacao']); ?>" class="form-control" id="dt_solicitacao" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dt_aprovacao" class="control-label">Dt Aprovacao</label>
						<div class="form-group">
							<input type="text" name="dt_aprovacao" value="<?php echo ($this->input->post('dt_aprovacao') ? $this->input->post('dt_aprovacao') : $reserva['dt_aprovacao']); ?>" class="form-control" id="dt_aprovacao" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $reserva['status']); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="observacao" class="control-label">Observacao</label>
						<div class="form-group">
							<textarea name="observacao" class="form-control" id="observacao"><?php echo ($this->input->post('observacao') ? $this->input->post('observacao') : $reserva['observacao']); ?></textarea>
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