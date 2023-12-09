<!-- resources/views/auth/userlist/index.blade.php -->
@extends('layouts.app_user')

@section('content')

<style>
    body{
        background-color: #829EC2; 
    }
</style>
    <div class="container mt-3" style="cursor: default;">
        <h1 class="mb-4 text-center">User List</h1>

        <form action="{{ route('userlist.index') }}" method="GET" class="mb-4">
            <div class="row" style="cursor: default;">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search by username or email" value="{{ request('search') }}">
                        <button type="submit" name="search_submit" class="btn btn-outline-secondary">Search</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <select name="role_filter" class="form-select">
                            <option value="Dokter" {{ request('role_filter') === 'Dokter' ? 'selected' : '' }}>Dokter</option>
                            <option value="Apoteker" {{ request('role_filter') === 'Apoteker' ? 'selected' : '' }}>Apoteker</option>
                            <option value="Pasien" {{ request('role_filter') === 'Pasien' ? 'selected' : '' }}>Pasien</option>
                        </select>
                        <button type="submit" class="btn btn-outline-secondary">Filter</button>
                    </div>
                </div>
            </div>
        </form>

        @if(count($users) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <!-- <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td style="text-align: center; vertical-align: middle;">
                                <div class="d-flex justify-content-center align-items-center">
                                    @if ($user->role !== 'userprofile')
                                        <a href="{{ route('userlist.show', ['userId' => $user->id]) }}" class="btn1 btn-primary">View</a>
                                        <a href="{{ route('userlist.destroy', ['userId' => $user->id]) }}" class="btn1 btn-primary" method="post">Delete</a>
                                    @else
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody> -->
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td style="text-align: center; vertical-align: middle;">
                            <div class="d-flex justify-content-center align-items-center">
                                @if ($user->role !== 'userprofile')
                                <a href="{{ route('userlist.show', ['userId' => $user->id]) }}" class="btn btn-primary">View</a>
                                    <form action="{{ route('userlist.destroy', ['userId' => $user->id]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger ml-2" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                    </form>
                                @else
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        @else
            <p class="text-center">No users found.</p>
        @endif
    </div>
@endsection
