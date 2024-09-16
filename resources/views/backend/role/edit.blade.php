@extends('backend.layouts.master')
@section('title')
    edit role
@endsection

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Elements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Elements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Admission Form</h5>

                 {{-- Teacher Edit Form --}}
                 <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value={{ $user['name'] }} required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            value={{ $user['email'] }} required>
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select name="role" type="role" id="role" class="form-control"
                            value={{ $user['role'] }} required>
                            <option value="">{{ $user['role'] }}</option>
                            <option value="admin" {{ $user->role == 'admin' ? 'admin' : 'user' }}>admin</option>
                            <option value="super admin" {{ $user->role == 'super admin' ? 'super admin' : 'user' }}>super admin</option>
                            <option value="doctor" {{ $user->role == 'doctor' ? 'doctor' : 'user' }}>doctor</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>
                </form>

</div>
</div>

</div>


</div>
</section>

</main><!-- End #main -->
@endsection
