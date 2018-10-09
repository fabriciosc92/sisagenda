<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Itens Laboratorio Edit</h3>
            </div>
			<?php echo form_open('itens_laboratorio/edit/'.$itens_laboratorio['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="chk_projeto" value="1" <?php echo ($itens_laboratorio['chk_projeto']==1 ? 'checked="checked"' : ''); ?> id='chk_projeto' />
							<label for="chk_projeto" class="control-label">Chk Projeto</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="laboratorio_id" class="control-label">Laboratorio Id</label>
						<div class="form-group">
							<input type="text" name="laboratorio_id" value="<?php echo ($this->input->post('laboratorio_id') ? $this->input->post('laboratorio_id') : $itens_laboratorio['laboratorio_id']); ?>" class="form-control" id="laboratorio_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="qtd_maquinas" class="control-label">Qtd Maquinas</label>
						<div class="form-group">
							<input type="text" name="qtd_maquinas" value="<?php echo ($this->input->post('qtd_maquinas') ? $this->input->post('qtd_maquinas') : $itens_laboratorio['qtd_maquinas']); ?>" class="form-control" id="qtd_maquinas" />
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