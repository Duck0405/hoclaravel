@extends('admin.layout.layout')
@section('title')
    
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Project Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">BLOG</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('update_article', ['id' => $article->id_post]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Sửa bài viết</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Tiêu đề bài viết -->
                            <div class="form-group">
                                <label for="inputName">Tiêu đề bài viết</label>
                                <input type="text" id="inputName"
                                    class="form-control @error('title') is-invalid @enderror" name="title"
                                    value="{{ old('title', $article->title_post) }}">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <!-- Nội dung bài viết -->
                            <div class="form-group">
                                <label for="inputDescription">Nội dung bài viết</label>
                                <textarea id="inputDescription" class="form-control @error('content') is-invalid @enderror" rows="4"
                                    name="content">{{ old('content', $article->content_post) }}</textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <!-- Tóm tắt bài viết -->
                            <div class="form-group">
                                <label for="inputSummary">Tóm tắt bài viết</label>
                                <textarea id="inputSummary" class="form-control @error('summary') is-invalid @enderror" rows="4"
                                    name="summary">{{ old('summary', $article->summary_post) }}</textarea>
                                @error('summary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <!-- Hình ảnh -->
                            <div class="form-group">
                                <label for="fileimg">Hình ảnh</label>
                                <div class="mb-3">
                                    <img src="{{ asset('storage/' . $article->image_post) }}" alt="Hình ảnh hiện tại" width="150">
                                </div>
                                <input type="file" id="fileimg" class="form-control @error('image') is-invalid @enderror"
                                    name="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <!-- Danh mục -->
                            <div class="form-group">
                                <label for="inputCategory">Danh mục</label>
                                <select id="inputCategory" name="id_category"
                                    class="form-control custom-select @error('id_category') is-invalid @enderror">
                                    <option disabled>Chọn danh mục</option>
                                    <option value="1" {{ old('id_category', $article->id_category) == 1 ? 'selected' : '' }}>
                                        Danh mục 1
                                    </option>
                                    <option value="2" {{ old('id_category', $article->id_category) == 2 ? 'selected' : '' }}>
                                        Danh mục 2
                                    </option>
                                    <option value="3" {{ old('id_category', $article->id_category) == 3 ? 'selected' : '' }}>
                                        Danh mục 3
                                    </option>
                                </select>
                                @error('id_category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <!-- Trạng thái -->
                            <div class="form-group">
                                <label for="inputStatus">Trạng thái</label>
                                <select id="inputStatus" name="status_post"
                                    class="form-control custom-select @error('status_post') is-invalid @enderror">
                                    <option value="1" {{ old('status_post', $article->status_post) == 1 ? 'selected' : '' }}>
                                        Kích hoạt
                                    </option>
                                    <option value="0" {{ old('status_post', $article->status_post) == 0 ? 'selected' : '' }}>
                                        Không kích hoạt
                                    </option>
                                </select>
                                @error('status_post')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Nút lưu -->
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('list_article') }}" class="btn btn-secondary">Hủy</a>
                    <button type="submit" class="btn btn-success float-right">Cập nhật bài viết</button>
                </div>
            </div>
        </section>
    </form>
    
    <!-- /.content -->
@endsection
