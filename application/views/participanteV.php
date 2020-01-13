<?php $this->load->helper("ajax_participante") ?>

<button type="button" class="btn btn-success" id="nuePar">Nuevo</button>

<table border="2" class="table table-dark">
	<tr>
		<td>N°</td>
		<td>Participante</td>
		<td>Fuerza</td>
		<td>Sexo</td>
		<td>Procedencia</td>
		<td>Categoria</td>
		<td>Eliminar</td>
		<td>Editar</td>
		<tbody id="tabla_participante">
			
		</tbody>
	</tr>
	
</table>


<!-- Modal -->
	<div class="modal fade" id="modalBorrar" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" >Seguro que desea Eliminar?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Realmente desea Eliminar el Registro?</p>
				</div>
				<div class="modal-footer">
								<button type="button" class="btn btn-primary" id="btnBorrar">Si, Borrar</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		
				</div>
			</div>
		</div>
	</div>




<!-- Modal -->
	<div class="modal fade" id="participante" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" ></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<center>
					<form value="participante" id="formParticipante" method="POST">
						<input type="hidden" name="id_participante" id="id" value="0" >

						<td>Nombre</td>
						<input type="text" name="nombre_participante" id="nombre_participante">
						<br>
						<br>
							<td>Fuerza</td>
						<input type="text" name="fuerza" id="fuerza">
						<br>
						<br>

						<td>Sexo</td>
						<select name="sexo" id="sexo">
							<option value="">--Seleccione Sexo--</option>
						</select>
						<br>
						<br>
							<td>Procedencia</td>
						<select name="procedencia" id="procedencia">
							<option value="">--Seleccione Procedencia--</option>
						</select>
						<br>
						<br>
							<td>Categoria</td>
						<select name="categoria" id="categoria">
							<option value="">--Seleccione Categoria--</option>
						</select>
						<br>
						<br>

					</form>
					</center>
				</div>
				<div class="modal-footer">
								<button type="button" class="btn btn-primary" id="btnGuardar">Guardar</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		
				</div>
			</div>
		</div>
	</div>

