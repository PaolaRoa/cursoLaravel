@extends('layouts.base')

@section('content')
    <div class="content">
        <h1>Delete Report</h1>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <a class= "btn btn-secondary" href="/expense_reports">regresar</a>
                    </div>
                </div>
                <div class="row">
           
                <!-- agrega un token -->
                    <form action="/expense_reports/{{$report->id}}" method="POST">
                    @csrf
                    @method('delete')
                            
                            <button class="btn btn-primary" type="submit">Delete</button>
                    </form>
                </div>
                


            </div>
        </div>
    </div>

@endsection





