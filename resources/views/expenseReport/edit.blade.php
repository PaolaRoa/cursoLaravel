@extends('layouts.base')

@section('content')
    <div class="content">
        <h1>EDIT Report {{ $report->id }}</h1>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <a class= "btn btn-secondary" href="/expense_reports">regresar</a>
                    </div>
                </div>
                <div class="row">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>

                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- agrega un token -->
                    <form action="/expense_reports/{{ $report -> id}}" method="POST">
                    @csrf
                    <!--asi se cambia para que funcione el post como put -->
                    @method('put')
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text"class="form-control" id="title" name="title" placeholder="type a title">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
                


            </div>
        </div>
    </div>

@endsection





