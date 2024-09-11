@extends('backend.layouts.master')
@section('title')
    createStudent
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
    <form action="{{ route('students.store') }}" method="POST">
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
            <label for="address">Address:</label>
            <input type="text" name="address" class="form-control" placeholder="Enter Address">
        </div>
        <div class="form-group">
            <label for="father_name">Father Name:</label>
            <input type="text" name="father_name" class="form-control" placeholder="Enter Father's Name">
        </div>
        <div class="form-group">
            <label for="mother_name">Mother Name:</label>
            <input type="text" name="mother_name" class="form-control" placeholder="Enter Mother's Name">
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select name="gender" class="form-control">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="age" class="form-control" placeholder="Enter Age">
        </div>
        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" name="contact" class="form-control" placeholder="Enter Contact Number">
        </div>
        <div class="form-group">
            <label for="department">Department:</label>
            <input type="text" name="department" class="form-control" placeholder="Enter Department">
        </div>
        <div class="form-group">
            <label for="class">Class:</label>
            <input type="text" name="class" class="form-control" placeholder="Enter class">
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
