<h1>Novo Ato</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>    
        @endforeach
    </ul>
@endif
<form action="{{ route('atos.insert') }}" method="post">
    @csrf
    <input type="text" name="ato" id="ato" placeholder="Ato" value="{{ old('ato') }}">
    <button type="submit">Salvar</button>
</form>