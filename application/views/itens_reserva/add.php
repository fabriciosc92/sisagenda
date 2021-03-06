<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Itens Reserva Add</h3>
            </div>
            <?php echo form_open('itens_reserva/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="chk_projeto" value="1"  id="chk_projeto" />
							<label for="chk_projeto" class="control-label">Chk Projeto</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="usuario_id" class="control-label">Usuario Id</label>
						<div class="form-group">
							<input type="text" name="usuario_id" value="<?php echo $this->input->post('usuario_id'); ?>" class="form-control" id="usuario_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="qtd_maquinas" class="control-label">Qtd Maquinas</label>
						<div class="form-group">
							<input type="text" name="qtd_maquinas" value="<?php echo $this->input->post('qtd_maquinas'); ?>" class="form-control" id="qtd_maquinas" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="observacao" class="control-label">Observacao</label>
						<div class="form-group">
							<textarea name="observacao" class="form-control" id="observacao"><?php echo $this->input->post('observacao'); ?></textarea>
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