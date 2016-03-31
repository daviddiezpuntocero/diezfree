@include('layouts.script.includes')
@include('layouts.script.subcategorias')
@extends('layouts.cabecera')
@section('content')


<script type="text/javascript">

		 $(document).ready(function()
		{
			$('#rangohora').hide();
			$('#rangocerrado').hide();
			$("input[name=presupuesto]").click(function () {    
			var valor= $('input:radio[name=presupuesto]:checked').val(); 
			
				if (valor=='1'){
					$('#rangocerrado').hide();
					$('#disabledSelect').hide();
					$('#rangohora').show();
					
				}
				if (valor=='2'){
					$('#rangohora').hide();
					$('#disabledSelect').hide();
					$('#rangocerrado').show();
				}
				if (valor=='3'){
					$('#rangohora').hide();
					$('#rangocerrado').hide();
					$('#disabledSelect').show();
				}
				$("input[name=ubicacion]").click(function () { 
				//document.getElementById("ubicacion").value=ubi;
				//var resu= $('input:radio[name=presupuesto]:checked').val(); 
				alert();
				}
		});
});


@if (old('presupuesto')=='1') 

 $(document).ready(function(){
	
	$('#rangocerrado').hide();
	$('#disabledSelect').hide();
	$('#rangohora').show()
});

@endif 
@if (old('presupuesto')=='2') 

 $(document).ready(function(){
	$('#rangohora').hide();
	$('#disabledSelect').hide();
	$('#rangocerrado').show()
});

@endif 




</script>


	
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
				<ol class="breadcrumb">
                    <li><a href="{{ url('/index') }}">Home</a>
                    </li>
                    <li class="active">Solicitar Presupuesto</li>
                </ol>
                <h1 class="page-header">Solicitar Presupuesto
                    <small><br>Realiza una descripción del trabajo a realizar y las habilidades que consideras necesarias para hacerlo</small>
                </h1>
                
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <!-- Blog Entries Column -->
				<div class="col-md-8">

                    <form role="form" method="POST" action="{{ url('/crear') }}" name="formulario">
						<input class="form-control" name="idusuario" type="hidden" value="{{ Auth::user()->id }}">
							
                        {!! csrf_field() !!}
						<div class="form-group{{ $errors->has('categoria') ? ' has-error' : '' }}">
						
							<label>Nombre</label>
							<input class="form-control" id="disabledInput" type="text" placeholder="{{ Auth::user()->username }}" disabled>
								
						</div>
						
						<div class="form-group{{ $errors->has('tituloproyecto') ? ' has-error' : '' }}">
                            <label class="control-label">Titulo del Proyecto</label>
                            
                                <input type="text" class="form-control" name="tituloproyecto" value="{{ old('tituloproyecto') }}">
                                @if ($errors->has('tituloproyecto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tituloproyecto') }}</strong>
                                    </span>
                                @endif
                        </div>
						
							
                        
						
						<div class="form-group{{ $errors->has('categorias') ? ' has-error' : '' }}">
								
							<label class="control-label">Categoria Proyecto</label>
							<select class="form-control" name="categorias" OnChange="cambiar();">
								@foreach ($categorias as $categorias)
									<option value="{{ $categorias->id }}">{{ $categorias->nombre }}</option>
								@endforeach
							</select>
							
						</div>
						
						
						<div class="form-group{{ $errors->has('subcategoria') ? ' has-error' : '' }}">
								
							<label class="control-label">
								SubCategoria
							</label>
							
								<select class="form-control" name="subcategoria">
								    <option value="Página Web" selected="selected">Página Web</option>
									<option value="Página Web + Aplicación Mobil">Página Web + Aplicación Mobil</option>
									<option value="Aplicación Movil">Aplicación Movil</option>
									<option value="Página E-commerce">Página E-commerce</option>
									<option value="CRM ERP Aplicaciones empresariles">CRM ERP Aplicaciones empresariles</option>
									<option value="WordPress, Joomla, CMS">WordPress, Joomla, CMS</option>
									<option value="Desarrollo de Juego">Desarrollo de Juego</option>
									<option value="Plataforma E-learning">Plataforma E-learning</option>
									<option value="Base de Datos">Base de Datos</option>
									<option value="Aplicación JAVA">Aplicación JAVA</option>
									<option value="Aplicación PHP">Aplicación PHP</option>
								</select>
						</div>  
						
						<div class="form-group{{ $errors->has('proveedor') ? ' has-error' : '' }}">
							<label class="control-label">
								Tipo de proveedor&nbsp; 
							</label>
                        </div>
								<div class="form-inline{{ $errors->has('proveedor') ? ' has-error' : '' }}">
									<label class="radio-inline">
									  <input type="radio" name="proveedor" value="1" @if (old('proveedor')=='1') checked="checked" @endif > Freelance
									</label>
									<label class="radio-inline">
									  <input type="radio" name="proveedor" value="2" @if (old('proveedor')=='2') checked="checked" @endif> Empresa
									</label>
									<label class="radio-inline">
									  <input type="radio" name="proveedor" value="3" @if (old('proveedor')=='3') checked="checked" @endif> Indiferente
									</label>
									
									@if ($errors->has('proveedor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('proveedor') }}</strong>
                                    </span>
									@endif
								</div>
								
                         <div class="form-group{{ $errors->has('ubicacion') ? ' has-error' : '' }}">
							<label class="control-label">
								Ubicación del proveedor&nbsp; 
							</label>
						</div>
                        
						<div class="form-inline{{ $errors->has('ubicacion') ? ' has-error' : '' }}">
									<p>
									
									<button type="button" name="ubicacion" class="btn btn-default btn-lg @if (old('ubicacion')=='1') active @else false  @endif" onclick="javascript:cargarUbicacion('1');"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Cualquier parte del mundo</button>
									&nbsp;
									<button type="button" name="ubicacion" class="btn btn-default btn-lg  @if (old('ubicacion')=='2') active @else false @endif" onclick="javascript:cargarUbicacion('2');"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Selecionar una ubicación en concreto</button>
									</p>
									
									
									
									@if ($errors->has('ubicacion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ubicacion') }}</strong>
                                    </span>
									@endif
						</div>
								
								

						<div class="form-group{{ $errors->has('presupuesto') ? ' has-error' : '' }}">
								<label class="control-label">
									¿Qué presupuesto tienes y qué modalidad de contratación prefieres?:								
								</label>
                        </div>
                        
						
								<div class="form-inline{{ $errors->has('presupuesto') ? ' has-error' : '' }}">
								
										<label class="radio-inline">
										  <input type="radio" name="presupuesto" id="presupuestoRadio1" value="1" @if (old('presupuesto')=='1') checked="checked" @endif > Precio por horas 
										</label>
										<label class="radio-inline">
										  <input type="radio" name="presupuesto" id="presupuestoRadio2" value="2" @if (old('presupuesto')=='2') checked="checked" @endif> Precio por proyecto
										</label>
										<label class="radio-inline">
										  <input type="radio" name="presupuesto" id="presupuestoRadio3" value="3" @if (old('presupuesto')=='3') checked="checked" @endif> Abierto
										</label>
										<label class="radio-inline">
										  <a class="ayuda" data-toggle="collapse" href="#collapseArea2" aria-expanded="false" aria-controls="collapseArea2">Ayuda</a> 
										</label>
										<br>
										@if ($errors->has('presupuesto'))
										<span class="help-block">
											<strong>{{ $errors->first('presupuesto') }}</strong>
										</span>
										@endif
										
										<div class="collapse" id="collapseArea2">
											<div class="well">
												 <h4>¿Sobre que base quieres que los proveedores realicen el presupuesto?</h4>
												<br><b>Precio por hora</b>. Esta es una modalidad flexible de contratación, pagarás en función de las horas que el proveedor dedique a tu proyecto. Puedes indicarnos el precio al que consideras pagar la hora.
												<br><b>Precio por proyecto</b>. Debes realizar una descripción detallada del proyecto para que el proveedor pueda hacer una estimación real de los trabajos a realizar. Puedes indicarnos el presupuesto total que tienes para el proyecto.
												<br><b>Abierto</b>. En esta modalidad no tienes un presupuesto cerrado o no quieres decidir en este momento, estás abierto a estudiar las propuestas que te realicen.   
											</div>
										</div>
								
								</div>
						<div class="form-group {{ $errors->has('rangohora') ? ' has-error' : '' }} {{ $errors->has('rangocerrado') ? ' has-error' : '' }}">
								<select class="form-control " id="disabledSelect" disabled>
									<option>&nbsp;</option>
								</select>
							    <select class="form-control" name="rangohora" id="rangohora">
									<option value="" selected="selected">Selecciona un rango de precio por horas</option>
								    <option value="-15"   @if (old('rangohora')=='-15') selected="selected" @endif>Menos 15 &#8364; hora</option>
									<option value="15-20" @if (old('rangohora')=='15-20') selected="selected" @endif>De 15 a 20 &#8364; hora</option>
									<option value="20-30" @if (old('rangohora')=='20-30') selected="selected" @endif>De 20 a 30 &#8364; hora</option>
									<option value="30-40" @if (old('rangohora')=='30-40') selected="selected" @endif>De 30 a 40 &#8364; hora</option>
									<option value="40-50" @if (old('rangohora')=='40-50') selected="selected" @endif>De 40 a 50 &#8364; hora</option>
									<option value="+50"   @if (old('rangohora')=='+50')   selected="selected" @endif>Más de 50 &#8364; hora</option>
								</select>
										@if ($errors->has('rangohora'))
										<span class="help-block">
											<strong>{{ $errors->first('rangohora') }}</strong>
										</span>
										@endif
								<select class="form-control" name="rangocerrado" id="rangocerrado">
								   <option value="" selected="selected">Selecciona un rango para el proyecto</option>
								    <option value="500-1000" @if (old('rangocerrado')=='500-1000') selected="selected" @endif>De 500 a 1.000 &#8364;</option>
									<option value="1000-2000" @if (old('rangocerrado')=='1000-2000') selected="selected" @endif>De 1.000 a 2.000 &#8364;</option>
									<option value="2000-4000" @if (old('rangocerrado')=='2000-4000') selected="selected" @endif>De 2.000 a 4.000 &#8364;</option>
									<option value="4000-6000" @if (old('rangocerrado')=='4000-6000') selected="selected" @endif>De 4.000 a 6.000 &#8364;</option>
									<option value="6000-10000"@if (old('rangocerrado')=='6000-10000') selected="selected" @endif>De 6.000 a 10.000 &#8364;</option>
									<option value="+10000" @if (old('rangocerrado')=='+10000') selected="selected" @endif>Más de 10.000 &#8364;</option>
								</select>
								@if ($errors->has('rangocerrado'))
										<span class="help-block">
											<strong>{{ $errors->first('rangocerrado') }}</strong>
										</span>
										@endif
							
						</div>						
						<div class="form-group{{ $errors->has('Descripcion') ? ' has-error' : '' }}">
                            <label class="control-label">Descripción del Proyecto</label>
                            
                                <textarea class="form-control" rows="8" name="Descripcion">{{ old('Descripcion') }}</textarea>
								
								@if ($errors->has('Descripcion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Descripcion') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group">
                           
                                <button type="submit" class="btn btn-primary">
								 <i class="fa fa-angle-right"></i> Enviar
                                    
                                </button>
                            
                        </div>
						<input type="hidden" id="ubicacion" name="ubicacion" value=@if (old('ubicacion')=='1') "1" @else "2" @endif>
                    </form>
               

                

				</div>
				

		

@include('layouts.sidebar1')          
@include('layouts.footer')
@endsection
