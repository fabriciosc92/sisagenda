<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Disponibilidade Add</h3>
            </div>
            <?php echo form_open('disponibilidade/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="dt_inicio" class="control-label">Dt Inicio</label>
						<div class="form-group">
							<input type="text" name="dt_inicio" value="<?php echo $this->input->post('dt_inicio'); ?>" class="form-control" id="dt_inicio" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dt_fim" class="control-label">Dt Fim</label>
						<div class="form-group">
							<input type="text" name="dt_fim" value="<?php echo $this->input->post('dt_fim'); ?>" class="form-control" id="dt_fim" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="laboratorio_id" class="control-label">Laboratorio Id</label>
						<div class="form-group">
							<input type="text" name="laboratorio_id" value="<?php echo $this->input->post('laboratorio_id'); ?>" class="form-control" id="laboratorio_id" />
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