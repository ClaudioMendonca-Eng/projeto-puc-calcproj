@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        <h3>Ops! Algo deu errado.</h3>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
