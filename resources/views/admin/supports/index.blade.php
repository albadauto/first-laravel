@extends('template/template')

@section('content')
    <h1>Listagem de suporte</h1>


    <table class="table">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Assunto</th>
            <th scope="col">Status</th>
            <th scope="col">Corpo</th>
        </tr>
        </thead>
        <tbody>
        @foreach($supports as $support)
            <tr>
                <th scope="row">
                    <a href="{{ url('supports/'. $support->id) }}">Verificar</a>
                    <a href="{{ route('supports.edit', $support->id) }}">Editar</a>
                </th>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
            </tr>
        @endforeach


        </tbody>
    </table>
    <hr>
    <div class="row">
        <div class="col text-center">
            <h1>Cadastro de suporte</h1>
        </div>
    </div>
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    <form action="{{ route("supports.insertSupport") }}" method="post">
        @csrf
        <input type="text" name="subject" id="" class="form-control" placeholder="Assunto"> <br/>
        <input type="text" name="body" id="" class="form-control" placeholder="Corpo">
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>

    </form>

    @if(session('success'))
        <div class="alert alert-success mt-5">
            {{ session('success') }}
        </div>
    @endif

@endsection
