@extends('layout/admin')

@section('title', 'Shoppers - My Admin Dashboard')

@section('contentTitle', 'Home Page')

@section('content')
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
        <h2>Section title</h2>
        <div class="table-responsive mb-5">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th>#</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
                </tr>
                <tr>
                <td>1,002</td>
                <td>amet</td>
                <td>consectetur</td>
                <td>adipiscing</td>
                <td>elit</td>
                </tr>
                <tr>
                <td>1,003</td>
                <td>Integer</td>
                <td>nec</td>
                <td>odio</td>
                <td>Praesent</td>
                </tr>
                <tr>
                <td>1,004</td>
                <td>dapibus</td>
                <td>diam</td>
                <td>Sed</td>
                <td>nisi</td>
                </tr>
            </tbody>
            </table>
        </div>
@endsection
