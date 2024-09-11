@extends('backend.layouts.master')
@section('title')
    createTeacher
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

                        <!-- General Form Elements -->
    <form action="{{ route('teachers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label for="number">Number:</label>
            <input type="text" name="number" class="form-control" placeholder="Enter Contact Number">
        </div>
        <div class="form-group">
            <label for="department">Department:</label>
            <input type="text" name="department" class="form-control" placeholder="Enter Department">
        </div>
        <div class="form-group">
            <label for="designation">Designation:</label>
            <input type="text" name="designation" class="form-control" placeholder="Enter Department">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>

</div>


</div>
</section>

</main><!-- End #main -->
@endsection
