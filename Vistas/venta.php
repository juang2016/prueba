
<div class="container" style="margin-top: 20px;" id="pagot">
	<div class="row">
		<div class="col-md-12">
			
			<div class="card">
				  <div class="card-body">
					<form id="pago" method="post" class="pago">
				    <div class="row">
				    	<div class="col-md-6">
                          
                          <div class="card">
                          	<div class="card-body">
                          		<h3> Datos personales</h3>
                          			<br>
                          		<div class="form-group">
					              <label for="nombre" class="control-label">Nombre completo</label>
					              	<input type="text" class="form-control" name="nombre" id="nombre">
				                </div>
				                <div class="form-group">
					              <label for="apellido">Apellidos completos</label>
					              	<input type="text" class="form-control" name="apellido" id="apellido">
				                </div>
				                <div class="form-group">
					              <label for="email">correo electronico</label>
					              	<input type="text" class="form-control" name="email" id="email">
				                </div>
				                <div class="form-group">
					              <label for="telefono">Teléfono</label>
					              	<input type="text" class="form-control" name="telefono" id="telefono" maxlength="10"
					                minlength="7"
					                data-bv-stringlength-message="El telefono debe tener entre 7 o 10 caracteres">
				                </div>

									<div class="row">
			                			<div class="col-md-6">	
                                            <div class="form-group">
								              <label for="tipodoc">Tipo documento</label>
								              	 <select class="form-control" name="tipodoc">
								              	 	<option value="CC">CC</option>
								              	 	<option value="CI">CI</option>
								              	 	<option value="RG">RG</option>
								              	 	<option value="DNI">DNI</option>
								              	 	<option value="DUI">DUI</option>
								              	 	<option value="	DPI">DPI</option>
								              	 	<option value="TDI">TDI</option>
								              	 	<option value="CURP">CURP</option>
								              	 	<option value="CIP">CIP</option>
								              	 	<option value="CIC/CI">CIC/CI</option>
								              	 	<option value="CIE">CIE</option>
								              	 </select>
							                </div>
					                	</div>
					                	<div class="col-md-6">
                                            <div class="form-group">
								              <label for="documento">Documento</label>
								              	<input type="text" class="form-control  col-md-8" name="documento" id="documento">
							                </div>
					                		</div>
					                	</div>
			                          	</div>
			                          </div>
			      
							    	</div>
							    	<div class="col-md-6">
							    		<div class="card">
							    			<div class="card-body">
							    				<h3> Datos de la compra</h3>
			                          			<br>

			                          			<div class="form-group">
			                          				<label for="produc">Referencia</label>
			                          			<select class="form-control" id="produc" name="produc">
			                          				<option>seleccione un producto</option>
			                          			<?php 
                                                  $valor = null;
									              $productos = ControladorProductos::ctrTreProdustcos($valor);
									              foreach ($productos as $key => $value) {
									              	echo '<option>'.$value["Referencia"].'</option>';
									              }
									          
									           ?>

                                                </select>
									           </div>
									           <input type="hidden" name="precio" id="precio">

									            <div class="form-group">
									              <label for="descripcion">Descripcion</label>
									              	<input type="text" class="form-control" name="descripcion" id="descripcion">

									              	<input type="hidden" name="" id="valoruni">
								                </div>
								                <div class="form-group">
								                	<div class="row">
								                		<div class="col-md-6">
								                			<label for="cantidad">Cantidad</label>
									              				<input type="text" class="form-control" name="cantidad" id="cantidad" value="1" onkeyup ="totalizar();">
								                		</div>
								                		<div class="col-md-6">
								                			<label for="stotal">Subtotal</label>
									              				<input type="text" class="form-control" name="stotal" id="stotal" disabled>
								                		</div>
								                	</div>
								                </div>
								                <div class="form-group">
								                	<div class="row">
								                		<div class="col-md-6">
								                			<label for="direccion">Dirección</label>
									              				<input type="text" class="form-control" name="direccion" id="direccion">
								                		</div>
								                		<div class="col-md-6">
								                			<label for="iva">iva</label>
									              				<input type="text" class="form-control" name="iva" id="iva" value="19">
								                		</div>
								                	</div>
								                </div>
								                <div class="form-group">
								                	<div class="row">
								                		<div class="col-md-6">
								                			<label for="total">Total</label>
									              				<input type="text" class="form-control" name="total" id="total" disabled>
									              				<input type="hidden" id="tot" name="tot">
								                		</div>
								                		<div class="col-md-6">
								                			<label for="moneda">Moneda</label>
									              				<select class="form-control  col-md-8" name="moneda">
												              	 	<option value="USD">USD</option>
												              	 	<option value="EUR">EUR</option>
												              	 	<option value="COP">COP</option>
												              	 </select>
								                		</div>
								                	</div>
								                </div>
										    	</div>
							    			</div>
							    		</div>
							    	</div>

							    	<?php 
                                        $pagar = new ControladorVenta();
                                        $pagar->ctrRealizaPago();
							    	 ?>
							    	 <button type="submit" class="btn btn-primary" id="btnpagar" style="margin-top: 5px">Pagar en línea</button>
							    	</form> 
							
							    </div>
							  </div>
						</div>
					</div>
				</div>
