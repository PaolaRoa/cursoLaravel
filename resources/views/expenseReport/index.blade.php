@extends('layouts.base')

@section('content')
    <div class="content">
        <h1>Reports</h1>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <a class= "btn btn-primary" href="/expense_reports/create">crear reporte</a>
                    </div>
                </div>
                <table>
                    @foreach($expenseReports as $expenseReport)
                        <tr>
                            <td>{{$expenseReport->title}}</td>
                        </tr>
                    @endforeach
                </table>


            </div>
        </div>
    </div>

@endsection





