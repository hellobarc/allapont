<form class=" formperfil uk-form-horizontal " action="{{route('admin/tesis/tesis_cuotasCrear')}}" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="uk-margin uk-text-left">
		<label class="uk-form-label" for="form-horizontal-text">TÍTULO DE LA INVESTIGACIÓN: </label>
		
		<div class="uk-form-controls">
			<select id="verificar"  class="radfifth uk-select" name="tesis_name">
				@foreach ($tesis as $tesi)
					<option value="{{$tesi->id}}">{{$tesi->tesis_name}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="uk-margin uk-text-left">
		
		<label class="uk-form-label" for="form-horizontal-text">MONTO: </label>

		<div class="uk-form-controls">
			<input class="radfifth uk-input " id="" type="text" name="monto" value="" >
		</div>
			@if($errors->has('name'))
			<div class="uk-text-center">No puedes dejar este campo en blanco.</div>
			@endif
	</div>
	
	<hr>
	<p>AGREGA UNA FECHA DE VENCIMIENTO:</p>
	<div class="uk-margin uk-text-left">
		<label class="uk-form-label" for="form-horizontal-text">DÍA: </label>

		<div class="uk-form-controls">
			<select id="verificar"  class="radfifth uk-select" name="dia">
				<option >1</option>
				<option >2</option>
				<option >3</option>
				<option >4</option>
				<option >5</option>
				<option >6</option>
				<option >7</option>
				<option >8</option>
				<option >9</option>
				<option >10</option>
				<option >11</option>
				<option >12</option>
				<option >13</option>
				<option >14</option>
				<option >15</option>
				<option >16</option>
				<option >17</option>
				<option >18</option>
				<option >19</option>
				<option >20</option>
				<option >21</option>
				<option >22</option>
				<option >23</option>
				<option >24</option>
				<option >25</option>
				<option >26</option>
				<option >27</option>
				<option >28</option>
				<option >29</option>
				<option >30</option>
				<option >31</option>
			</select>
		</div>
	</div>

	<div class="uk-margin uk-text-left">
		<label class="uk-form-label" for="form-horizontal-text">MES: </label>
		<div class="uk-form-controls">
			<select id="verificar"  class="radfifth uk-select" name="mes">
				<option value="1">Enero</option>
				<option value="2">Febrero</option>
				<option value="3">Marzo</option>
				<option value="4">Abril</option>
				<option value="5">Mayo</option>
				<option value="6">Junio</option>
				<option value="7">Julio</option>
				<option value="8">Agosto</option>
				<option value="9">Septiembre</option>
				<option value="10">Octubre</option>
				<option value="11">Noviembre</option>
				<option value="12">Diciembre</option>
			</select>
		</div>
	</div>

	<div class="uk-margin uk-text-left">
		<label class="uk-form-label" for="form-horizontal-text">AÑO: </label>
		<div class="uk-form-controls">
			<select id="verificar"  class="radfifth uk-select" name="agno">
				<option>2019</option>
				<option>2020</option>
				<option>2021</option>
				<option>2022</option>
				<option>2023</option>
				<option>2024</option>
				<option>2025</option>
				<option>2026</option>
				<option>2027</option>
				<option>2028</option>
				<option>2029</option>
				<option>2030</option>
				<option>2031</option>
				<option>2032</option>
			</select>
		</div>
	</div>

	<button class="radfifth uk-align-center uk-button uk-button-default" onclick="return confirm('¿Estás seguro de que deseas crear esta cuota?');">Crear nueva Cuota</button> 

</form>	