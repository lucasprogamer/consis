@extends('layouts.adminex')

@section('content')
<section class="panel">
    <header class="panel-heading">
        Detalhes
    </header>
    <div class="panel-body">
    @include('profiles.show_fields')

    <div class="form-group">
           <a href="{!! route('profiles.index') !!}" class="btn btn-danger">Voltar</a>
    </div>

    </div>
    </div>
@endsection
