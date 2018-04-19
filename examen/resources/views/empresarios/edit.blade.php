<h1>Editar usuario</h1>

<form class="" action="{{ route('empresarios.update', $empresario->id) }}" method="post">
  <h1>Editar información de {{ $empresario->nombre }} </h1>

  {!! method_field('PUT') !!}
  {!! csrf_field() !!}

  <label> Codigo <input type="text" name='codigo'  value=' {{ $empresario->codigo }}'> </label> <br>
  <label> Razon Social <input type="text" name='razon_social' value=' {{ $empresario->razon_social }}'> </label> <br>
  <label> Nombre <input type="text" name='nombre' value=' {{ $empresario->nombre }}'> </label> <br>
  <label> País <input type="text" name='pais' value=' {{ $empresario->pais }}'> </label> <br>
  <label> Estado <input type="text" name='estado' value=' {{ $empresario->estado }}'> </label> <br>
  <label> Ciudad <input type="text" name='ciudad' value=' {{ $empresario->ciudad }}'> </label> <br>
  <label> Teléfono <input type="text" name='telefono' value=' {{ $empresario->telefono }}'> </label> <br>
  <label> Correo <input type="text" name='correo' value=' {{ $empresario->correo }}'> </label> <br>


  <button type="submit" name="button">Editar</button>
</form>
