@csrf
<input type="text" name="name" placeholder="Nome:" value="{{ $user->name ?? old('name') }}">
<input type="email" name="email" placeholder="Email:" value="{{ $user->email ?? old('email') }}">
<input type="password" name="password" placeholder="Senha:">
<input type="text" name="funcao" placeholder="Função:" value="{{ $user->funcao ?? old('funcao') }}">
<br>
<input type="file" name= "image" value="{{ $user->image ?? old('image') }}">
<br>
<button type="submit">Enviar</button>
