
<div class="content-wrapper">
	<section class="content-header">
		<h3 class="text-center"> 
			INDUSTRIAS DELMOR, S.A.
		</h3>
		<h4 class="text-center">
			<span id="nombreRpt">REGISTRO CONTROL DE PESO EN PROCESO (CPP)</span>
		</h4>
		<h4 class="text-center">
			<?php
				if(!$monit){
				}else{
					foreach ($monit as $key) {
						echo "ISO-HACCP-".$key["SIGLA"]."";
						echo '<div class="form-group has-feedback">
								<input type="hidden" id="idmonitoreo" class="form-control" value="'.$key["IDMONITOREO"].'">
							</div>';
					}
				}
			?>
		</h4>		
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="box box-danger">
			<div class="box-header with-border">
				<h3 class="box-title"></h3>
				<a class="btn-flat" href="javascript:history.back()">
					<i class="fa fa-arrow-circle-left fa-2x"></i>
				</a>
				<button class="pull-right btn btn-primary" id="btnGuardar">
					Guardar <i class="fa fa-save"></i>
				</button>				
			</div>
			<div class="box-body">
				<div>
					<div class="row">
						<div class="col-xs-12">
							<div class="col-xs-4 col-sm-3 col-md-2 col-lg-3">
								<div class="form-group">
									<label>Area</label>
									<select id="ddlAreas"  class="form-control select2" style="width: 100%;">
										<option></option>
										<?php 
											if(!$areas){
											}else{
												foreach ($areas as $key) {
													echo "
														<option value='".$key["IDAREA"]."'>".$key["AREA"]."</option>
													";
												}
											}
										?>
									</select>
								</div>
							</div>
							<div class="col-xs-8 col-sm-6 col-md-6 col-lg-4">
								<div class="form-group has-feedback">
									<label for="vigencia">Observacion general</label>
									<input autocomplete="off" type="text" id="observacionGeneral" value="" class="form-control" placeholder="Observaciones">
									<span class="fa fa-pencil form-control-feedback"></span>
								</div>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-2 col-lg-3">
								<div class="form-group has-feedback">
									<label for="vigencia">Fecha</label>
									<input autocomplete="off" type="text" id="fecha" class="form-control" placeholder="Fecha ingreso">
									<span class="fa fa-calendar form-control-feedback"></span>
								</div>
							</div>	
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-12">													
							<div class="col-xs-4 col-sm-4 col-md-6 col-lg-5">
									<div class="form-group has-feedback">
										<label>Nombre del producto</label><br>
										<select class="select js-data-example-ajax form-control" id="ddlprod"></select>
									</div>
							</div>
							<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2">
								<div class="form-group">
									<label>Peso Gr</label>
									<input disabled="true" autocomplete="off" type="text" id="pesoGr" class="form-control" placeholder="Peso Gramos">
								</div>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-2 col-lg-3">
								<div class="form-group has-feedback">
									<label for="">Lote</label>
									<input autofocus="" autocomplete="off" type="text" id="lote" value="" class="form-control col-xs-4" placeholder="Lote">
									<span class="fa fa-sort-alpha-desc form-control-feedback"></span>
								</div>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
								<div class="form-group ">
									<label for="">No Batch</label>
									<input autofocus="" autocomplete="off" type="text" id="batch" class="form-control" placeholder="Batch">
									<span class="fa fa-sort-alpha-desc form-control-feedback"></span>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12">							
							<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
								<div class="form-group has-feedback">
									<label for="">Tamaño Muestra</label>
									<select id="cmbTamaño" class="form-control select2" style="width: 100%;">
										<option></option>
										<?php 
											if(!$niveles){
											}else{
												foreach ($niveles as $key) {
													echo "
													<option value='".intval($key["Desde"]).'-'.intval($key["Hasta"])."'>".intval($key["Desde"]).'-'.intval($key["Hasta"])."</option>
													";
												}
											}
										?>
									</select>
								</div>
							</div>
							<div class="col-xs-8 col-sm-6 col-md-6 col-lg-3">
								<div class="form-group has-feedback">
									<label for="vigencia">Nivel Inspeccion</label>
									<select id="cmdNivel" class="form-control select2" style="width: 100%;">
										<option></option>
										<option value="I">I</option>
										<option value="II">II</option>
										<option value="III">III</option>
									</select>
								</div>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" value="" id="chkEspecial">
								  <label class="form-check-label" for="chkEspecial">
								    Nivel Especial
								  </label>
								</div>
							</div>							
							<div class="col-xs-8 col-sm-6 col-md-6 col-lg-3 especial invisible">
								<div class="form-group has-feedback">
									<label for="vigencia">Nivel Inspeccion Especial</label>
									<select id="cmdNivel2" class="form-control select2" style="width: 100%;">
										<option></option>										
										<option value="S1">S1</option>
										<option value="S2">S2</option>
										<option value="S3">S3</option>
										<option value="S4">S4</option>
									</select>
							</div>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
								<div class="form-group has-feedback">
									<label for="">Muestra</label>
									<input readonly="true" autocomplete="off" type="text" id="muestra" class="form-control">
									<span class="fa fa-truck form-control-feedback"></span>
								</div>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
								<div class="form-group has-feedback">
									<label for="">Peso</label>
									<input autocomplete="off" type="text" id="txtPeso" class="form-control">
									<span class="fa fa-truck form-control-feedback"></span>
								</div>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
								<div class="form-group has-feedback">
									<label for="">monitoreado por</label>
									<input readonly="" value="<?php echo $this->session->userdata("nombre")." ".$this->session->userdata("apellidos")?>" autocomplete="off" type="text" id="monituser" class="form-control bg-info" placeholder="monitoreado por">
									<span class="fa fa-user form-control-feedback"></span>
								</div>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
								<div class="form-group has-feedback">
									
									<button id="btnAdd" class="btn btn-primary"><i class="fa fa-plus"></i></button>
									
									<button id="btnDelete" class="btn btn-danger"><i class="fa fa-trash"></i></button>
								</div>
							</div>

						</div>
					</div>
				</div>
				<table class="table table-bordered table-condensed table-striped" id="tblDatos">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="text-center">Codigo</th>
							<th class="text-center">Descripción</th>
							<th class="text-center">Peso Original</th>
							<th class="text-center">Peso Gr</th>
							<th class="text-center">Diferencia</th>
						</tr>
					</thead>
					<tbody class="text-center">						
					</tbody>
				</table>
			</div>			
		</div>
	</section>
</div>

<div class="modal" id="loading" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content" style="background-color:transparent;box-shadow: none; border: none;margin-top: 26vh;">
			<div class="text-center">
				<img width="130px" src="<?php echo base_url()?>assets/img/loading.gif">
			</div>
		</div>
	</div>
</div>