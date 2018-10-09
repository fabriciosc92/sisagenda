<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Disciplina Edit</h3>
            </div>
			<?php echo form_open('disciplina/edit/'.$disciplina['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="disciplina" class="control-label">Disciplina</label>
						<div class="form-group">
							<input type="text" name="disciplina" value="<?php echo ($this->input->post('disciplina') ? $this->input->post('disciplina') : $disciplina['disciplina']); ?>" class="form-control" id="disciplina" />
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