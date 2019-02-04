@extends('layouts.app')

@section('content')
    @foreach($religiao as $religiao)
        <a href="#" class="float-right btn">Adicionar</a>
        <table class="table">
            <thead>
                <th>Nome</th>
                <th>Ação</th>
            </thead>
            <tbody class="table-striped">
                <tr>
                    <td class="col-9">{{$religiao->nome}}</td>
                    <td class="col-3">
                        <a href="religiao/{!! $religiao->religiao_id !!}/edit" class="btn">E</a>
                        <button href="religiao/{!! $religiao->religiao_id !!}/remove" class="btn">X</button>
                    </td>
                </tr>
            </tbody>

        </table>
    @endforeach
@endsection