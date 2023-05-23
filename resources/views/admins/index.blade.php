@extends('bar')

@section('main')

<div class="section" style="background-color: rgb(191,225,255); min-height:800px;">
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-center" style="background-color:#0C134F; color: #ffffff">
                        <h2>Admin</h2>
                    </div>
                    <div class="card-body rounded-2" style="height: fit-content; background-color: #ffffff">
                        <div id="carouselExampleCaptions" class="carousel slide">
                            <div class="container">
                                <a href="{{ route('admins.create') }}" class="btn btn-success">Add admin</a>
                                @if(session('success'))
                                <div class="alert alert-success mt-3">
                                    {{ session('success') }}
                                </div>
                                @endif

                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th>NIA</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($admins as $admin)
                                        <tr>
                                            <td>{{ $admin->NIA }}</td>
                                            <td>{{ $admin->name }}</td>
                                            <td>{{ $admin->email }}</td>
                                            <td>
                                                <a href="{{ route('admins.show', $admin) }}" class="btn btn-primary btn-sm">View</a>
                                                <a href="{{ route('admins.edit', $admin) }}" class="btn btn-secondary btn-sm">Edit</a>
                                                <form action="{{ route('admins.destroy', $admin) }}" method="POST" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4">No users found.</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
