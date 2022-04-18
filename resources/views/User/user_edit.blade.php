@extends('layouts.dashboardapp')
@section('content')
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h2>{{ $user->name }}</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <select name="role" id="" class="form-control">
                        @foreach ($role as $roles)
                            <option value="{{ $roles->id }}">{{ $roles->name }}</option>
                        @endforeach
                    </select>
                    <br>
                    <button class="btn btn-primary"> Assign Roles</button>
                </form>
            </div>
        </div>
    </div>
@endsection
