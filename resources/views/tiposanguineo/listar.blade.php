@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><a href="{{url('/')}}">Voltar</a></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th>#</th>
                                <th>Descrição</th>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->descricao}}</td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection