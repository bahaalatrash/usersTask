@extends('layouts.app')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">user_name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($addresses as $address)
                <tr>
                    <th>{{ $address->id }}</th>
                    <td>{{ $address->name }}</td>
                    <td>{{ $address->user->name }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
