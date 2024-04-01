@extends('dashboard.adash')

@section('admin')
    <div>
        <table>
            <tr>
                <th>nom</th>
                <th>email</th>
                <th>role</th>
                <th>delete</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->roles }}</td>
                <td>
                    <form method="POST" action="{{ route('delete', $user->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
