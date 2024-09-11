@extends('backend.layouts.master')
@section('title')
    editStudent
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
                        <h5 class="card-title">Admission update Form</h5>

                        <form action="{{ route('students.update', $student->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}" placeholder="Enter Name">
                            </div>
                        
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email', $student->email) }}" placeholder="Enter Email">
                            </div>
                        
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" name="address" class="form-control" value="{{ old('address', $student->address) }}" placeholder="Enter Address">
                            </div>
                        
                            <div class="form-group">
                                <label for="father_name">Father Name:</label>
                                <input type="text" name="father_name" class="form-control" value="{{ old('father_name', $student->father_name) }}" placeholder="Enter Father's Name">
                            </div>
                        
                            <div class="form-group">
                                <label for="mother_name">Mother Name:</label>
                                <input type="text" name="mother_name" class="form-control" value="{{ old('mother_name', $student->mother_name) }}" placeholder="Enter Mother's Name">
                            </div>
                        
                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <select name="gender" class="form-control">
                                    <option value="Male" {{ old('gender', $student->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ old('gender', $student->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                    <option value="Other" {{ old('gender', $student->gender) == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                        
                            <div class="form-group">
                                <label for="age">Age:</label>
                                <input type="number" name="age" class="form-control" value="{{ old('age', $student->age) }}" placeholder="Enter Age">
                            </div>
                        
                            <div class="form-group">
                                <label for="contact">Contact:</label>
                                <input type="text" name="contact" class="form-control" value="{{ old('contact', $student->contact) }}" placeholder="Enter Contact Number">
                            </div>
                        
                            <div class="form-group">
                                <label for="department">Department:</label>
                                <input type="text" name="department" class="form-control" value="{{ old('department', $student->department) }}" placeholder="Enter Department">
                            </div>
                        
                            <div class="form-group">
                                <label for="class">Class:</label>
                                <input type="text" name="class" class="form-control" value="{{ old('class', $student->class) }}" placeholder="Enter Class">
                            </div>
                        
                            <button type="submit" class="btn btn-primary">Update Student</button>
                        </form>
    
</div>
</div>

</div>


</div>
</section>

</main><!-- End #main -->
@endsection
