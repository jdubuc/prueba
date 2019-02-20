@extends ('app')

@section ('content')
<div class=""></div>
  <div class="bg2"></div>
    <div class="profile">
      <div class="effect"></div>
	@if(isset($detalles))
      <header>
	            <h4>Detalles</h4>
	        </header>
	        
           @foreach ($detalles as $dtl)
              <th colspan="2" style="text-align: center;" >{{ $dtl->producto }} </th>
              <th colspan="2" style="text-align: center;" >{{ $dtl->cantidad }} </th>      
        	@endforeach
    </div>
    @else
      <header>
	            <h4>Genero Aceptado</h4>
	        </header>
            @foreach ($precio as $ql)
              <th colspan="2" style="text-align: center;" >{{ $ql->total }} </th>
              <th colspan="2" style="text-align: center;" >{{ $ql->categoria_id }} </th>       
        	@endforeach
    </div>
    @endif
          
 		
@stop