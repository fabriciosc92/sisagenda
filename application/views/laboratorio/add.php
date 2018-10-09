<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Laboratorio Add</h3>
            </div>
            <?php echo form_open('laboratorio/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="projetor" value="1"  id="projetor" />
							<label for="projetor" class="control-label">Projetor</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="aprovada" value="1"  id="aprovada" />
							<label for="aprovada" class="control-label">Aprovada</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="campus_id" class="control-label">Campus Id</label>
						<div class="form-group">
							<input type="text" name="campus_id" value="<?php echo $this->input->post('campus_id'); ?>" class="form-control" id="campus_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nome" class="control-label">Nome</label>
						<div class="form-group">
							<input type="text" name="nome" value="<?php echo $this->input->post('nome'); ?>" class="form-control" id="nome" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="qtd_lugares" class="control-label">Qtd Lugares</label>
						<div class="form-group">
							<input type="text" name="qtd_lugares" value="<?php echo $this->input->post('qtd_lugares'); ?>" class="form-control" id="qtd_lugares" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="qtd_maquinas" class="control-label">Qtd Maquinas</label>
						<div class="form-group">
							<input type="text" name="qtd_maquinas" value="<?php echo $this->input->post('qtd_maquinas'); ?>" class="form-control" id="qtd_maquinas" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="descricao" class="control-label">Descricao</label>
						<div class="form-group">
							<textarea name="descricao" class="form-control" id="descricao"><?php echo $this->input->post('descricao'); ?></textarea>
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