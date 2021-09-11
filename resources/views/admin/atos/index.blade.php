@extends('admin.layouts.app')

@section('content')
<a href="{{ route ('atos.novo') }}">Criar Novo Ato</a>
<hr>
<h1>Atos</h1>

@if (session('criado'))
    <div>
        {{ session('criado') }}
    </div>
@endif

<form action="{{ route('atos.search') }}" method="post">
    @csrf
    <input type="text" name="filtro" placeholder="Pesquisar">
    <button type="submit">Buscar</button>
</form>

@foreach ($atos as $ato)
    <p>{{ $ato->ato }} [<a href="{{ route ('atos.show', $ato->id) }}">Ver</a>] -
        [<a href="{{ route ('atos.edit', $ato->id) }}">Editar</a>]
    </p>
@endforeach
<hr>
@if (isset($filters))
    {!! $atos->appends($filters)->links() !!}
@else
    {{ $atos->links() }}
@endif

@endsection