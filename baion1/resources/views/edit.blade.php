<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
<script src="bootstrap-5.0.2-dist/css/bootstrap.bundle.min.js"></script>
<title>Posts</title>
</head>
<store>

<h1 style="margin: 50px 50px">Cập nhật thông tin đồ án</h1>
@if ($errors->any()) 
<div class="alert alert-danger"> 
    <ul> @foreach ($errors->all() as $error) 
        <li>{{ $error }}</li> 
        @endforeach 
    </ul> 
</div> 
@endif
<form action="{{ route('update', $product->id) }}" method="POST" style="margin: 50px 50px">
    @csrf
    @method('PUT')
    <label for="name" class="form-label">Ten san pham</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Mo ta</label>
        <input type="text" class="form-control" id="description" name="description" required>
    </div>
    
    <div class="mb-3">
        <label for="price" class="form-label">Gia</label>
        <input type="text" class="form-control" id="price" name="price" required>
    </div>
    
    <div class="mb-3">
        <label for="store_id" class="form-label">Cua hang</label>
        <select class="form-control" id="store_id" name="store_id" required>
            @foreach($stores as $store)
                <option value="{{ $store->id }}">{{ $store->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>

</store