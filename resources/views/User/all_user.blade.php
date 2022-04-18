@extends('layouts.dashboardapp')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 text-center">
                <div class="card">
                    <div class="card-header">
                        <h2>All User</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Serial No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">AssignRoles</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($user as $key => $userdata)
                                    <tr>
                                        <th>{{ ++$key }}</th>
                                        <td>{{ $userdata->name }}</td>
                                        <td>Admin</td>
                                        <td>


                                            <a href="{{ route('user.edit', $userdata->id) }}"
                                                class="btn btn-primary">AssignRoles</a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
