<h1>Editar Ato <strong>{{ $atos->ato }}</strong></h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>    
        @endforeach
    </ul>
@endif
<form action="{{ route('atos.update', $atos->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="ato" id="ato" placeholder="Ato" value="{{ $atos->ato }}">
    <button type="submit">Salvar</button>
</form>