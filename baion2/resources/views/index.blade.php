@extends('layout.app')

@section('content')


</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Product</b></h2>
					</div>
					
					<div class="col-sm-6">
						<a href="{{ route('create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Them product</span></a>
												
					</div>
				</div>
			</div>
			@if(session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th> First Name </th>
						<th> Last Name </th>
                        <th>Email</th>
                        <th>MSV</th>
                        <th>Ten lop</th>
                        <th>Trang thai</th>
                        <th>Ngay sinh</th>
                        <th>Hành động</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->first_name }}</td>
                            <td>{{ $student->last_name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->student_number }}</td>
                            <td>{{ $student->class_name }}</td>
                            <td>{{ $student->status }}</td>
                            <td>{{ $student->date_of_birth }}</td>
                            
                            <td>
                                <a href="{{ route('edit', $student->id) }}" class="btn btn-primary">Sửa</a>
        
                                <!-- Nút xóa kèm modal xác nhận -->
        
                                
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $student->id }}">
                                    Xóa
                                </button>
        
                                <!-- Modal xác nhận xóa -->
                                <div class="modal fade" id="deleteModal{{ $student->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $student->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel{{ $student->id }}">Xác nhận xóa</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Bạn có chắc chắn muốn xóa sinh vien này không?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                                <form action="{{ route('destroy', $student->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
			</table>
			{{-- Phân trang nếu cần --}}
			<div class="d-flex justify-content-center">
				{{ $students->links('pagination::bootstrap-4') }}
			</div>
		</div>
	</div>        
</div>
<!-- Dẫn trực tiếp vào thư mục public/js --> 
 <script src="{{ asset('js/popper.min.js') }}"></script> 
 <script src="{{ asset('js/jquery.min.js') }}"></script>
</body>
@endsection