@if (auth()->check())
  <a href="/logout"> Cerrar sesion de {{ auth()->user()->name }}</a>
@endif


<table border="1">
  <thead>
    <th>Codigo</th>
    <th>Razon Social</th>
    <th>Nombre</th>
    <th>Pais</th>
    <th>Estado</th>
    <th>Ciudad</th>
    <th>Telefono</th>
    <th>Correo</th>
    <th>Acciones</th>
  </thead>
  <tbody>
    @foreach ($empresarios as $empresario)
    <tr>
      <td> {{ $empresario->codigo}} </td>
      <td> {{ $empresario->razon_social}} </td>
      <td> {{ $empresario->nombre}} </td>
      <td> {{ $empresario->pais}} </td>
      <td> {{ $empresario->estado}} </td>
      <td> {{ $empresario->ciudad}} </td>
      <td> {{ $empresario->telefono}} </td>
      <td> {{ $empresario->correo}} </td>
       <td> <a href=""> Editar</a>
         <form style="display: inline; " method="post" action="{{ route('empresarios.destroy', $empresario->id) }}">
           {!! csrf_field() !!}
           {!! method_field('DELETE') !!}
           <button type="submit">Eliminar</button>
         </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
