@extends('layouts.nav')

@section('content')

    <table style="border: 1px solid;">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $value)
                <tr>
                    <td> {{$value->id}} </td>
                    <td> {{$value->name}} </td>
                </tr>
            @endforeach
        </tbody>

    </table>

@endsection
