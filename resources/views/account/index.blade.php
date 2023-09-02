@extends('layouts.app')

@section('table')
    <table>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td>{{ $record->key }}</td>
                <td>{{ $record->name }}</td>
                <td>{{ $record->location }}</td>
                <td>
                    <a class="button" href="{{ url()->route('accounts.edit', $record->id) }}">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>

        <thead>
            <tr>
                <th>Key</th>
                <th>Name</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>
@endsection


@section('content')
    <div class="stage">
        <h1>{{ $page->title }}</h1>

        @yield('table')
    </div>
@endsection
