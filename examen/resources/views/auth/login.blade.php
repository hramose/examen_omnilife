<h1>Login</h1>

<form method="POST" action="/login">
  {{ csrf_field() }}
  <input type="email" name="email" value="">
  <input type="password" name="password" value="">
  <input type="submit" value="Entrar">
</form>
