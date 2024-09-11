@extends('backend.layouts.master')
@section('title')
    edit teacher
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
<form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
    @csrf
    @method('PUT')

    {{-- Teacher Name --}}
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $teacher->name) }}" placeholder="Enter Name">
    </div>

    {{-- Teacher Email --}}
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $teacher->email) }}" placeholder="Enter Email">
    </div>

    {{-- Teacher Contact Number --}}
    <div class="form-group">
        <label for="number">Number:</label>
        <input type="text" name="number" class="form-control" value="{{ old('number', $teacher->number) }}" placeholder="Enter Contact Number">
    </div>

    {{-- Teacher Department --}}
    <div class="form-group">
        <label for="department">Department:</label>
        <input type="text" name="department" class="form-control" value="{{ old('department', $teacher->department) }}" placeholder="Enter Department">
    </div>

    {{-- Teacher Designation --}}
    <div class="form-group">
        <label for="designation">Designation:</label>
        <input type="text" name="designation" class="form-control" value="{{ old('designation', $teacher->designation) }}" placeholder="Enter Designation">
    </div>

    {{-- Submit Button --}}
    <button type="submit" class="btn btn-primary">Update</button>
</form>

    
</div>
</div>

</div>


</div>
</section>

</main><!-- End #main -->
@endsection
