<h1>Crea un usuario</h1>

<form method="POST" action="{{ route('empresarios.store') }}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <label for="nombre"> Nombre
     <input type="text" name="nombre">
  </label>
  <label for="email"> Email
     <input type="email" name="email">
  </label>
  <label for="email"> Mensaje
     <input name="mensaje">
  </label>

  <input type="submit" value="Enviar">
</form>
