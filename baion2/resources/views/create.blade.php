<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<title>Posts</title>
</head>
<body>
<h1 style="margin: 50px 50px">Them thông tin sinh vien</h1>
@if ($errors->any()) 
<div class="alert alert-danger"> 
    <ul> @foreach ($errors->all() as $error) 
        <li>{{ $error }}</li> 
        @endforeach 
    </ul> 
</div> 
@endif
<form action="{{ route('store') }}" method="POST" style="margin: 50px 50px">
        @csrf
        
    <label for="first_name" class="form-label">Ten ho sinh vien</label>
        <input type="text" class="form-control" id="first_name" name="first_name" required>
    </div>
    <label for="last_name" class="form-label">Ten dem sinh vien</label>
        <input type="text" class="form-control" id="last_name" name="last_name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" required>
    </div>
    
    <div class="mb-3">
        <label for="student_number" class="form-label">MSV</label>
        <input type="text" class="form-control" id="student_number" name="student_number" required>
    </div>
    
    <div class="mb-3">
        <label for="class_id" class="form-label">Ten lop</label>
        <select class="form-control" id="class_id" name="class_id" required>
            @foreach($classes as $class)
                <option value="{{ $class->id }}">{{ $class->class_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Trang thai</label>
        <select class="form-control" id="status" name="status" required>
                <option value="Trial">Trial</option>
                <option value="Enrolled">Enrolled</option>
                <option value="Dropped">Dropped</option>
        
        </select>
    </div>
    <div class="mb-3">
        <label for="date_of_birth" class="form-label">Ngay sinh</label>
        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>

    

</body>