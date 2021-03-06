@extends('layout')

@section('content')
<div class="container">
    <h1>List of users</h1>
    <table class="table table-striped">
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>
                        @if ($user->id !== Auth::id())
                            <form action = "{{ route('users.destroy', $user) }}" method = "post">
                                @csrf
                                @method('delete')

                                <button class = "btn btn-danger">Удалить</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
