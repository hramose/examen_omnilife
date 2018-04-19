<h1>Crea un usuario</h1>

<form method="post" action="{{ route('empresarios.store') }}">
  {!! csrf_field() !!}

  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <label> Codigo <input type="text" name='codigo'  value=''> </label> <br>
  <label> Razon Social <input type="text" name='razon_social' value=''> </label> <br>
  <label> Nombre <input type="text" name='nombre' value=''> </label> <br>
  <label> País <input type="text" name='pais' value=''> </label> <br>
  <label> Estado <input type="text" name='estado' value=''> </label> <br>
  <label> Ciudad <input type="text" name='ciudad' value=''> </label> <br>
  <label> Teléfono <input type="text" name='telefono' value=''> </label> <br>
  <label> Correo <input type="text" name='correo' value=''> </label> <br>


  <input type="submit" value="Crear usuario"></input>
</form>
