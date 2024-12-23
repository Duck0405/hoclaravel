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
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm bài viết</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    title="Collapse" fdprocessedid="l8wkth">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Tiêu đề bài viết</label>
                                <input type="text" id="inputName"
                                    class="form-control  @error('title') is-invalid @enderror"
                                    fdprocessedid="7fdlxo" name="title">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Nội dung bài viết</label>
                                <textarea id="inputDescription" class="form-control  @error('content') is-invalid @enderror" rows="4"
                                    name="content"></textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Tóm tắt bài viết</label>
                                <textarea id="inputDescription" class="form-control  @error('summary') is-invalid @enderror" rows="4"
                                    name="summary"></textarea>
                                @error('summary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Hình ảnh</label>
                                <input type="file" id="fileimg"
                                    class="form-control @error('image') is-invalid @enderror"
                                    fdprocessedid="7fdlxo" name="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="inputCategory">Danh mục</label>
                                <select id="inputCategory" name="id_category"
                                    class="form-control custom-select @error('id_category') is-invalid @enderror">
                                    <option selected disabled>Chọn danh mục</option>
                                    <option value="1">Danh mục 1</option>
                                    <option value="2">Danh mục 2</option>
                                    <option value="3">Danh mục 3</option>
                                </select>
                                @error('id_category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="form-group">
                                <label for="inputStatus">Kích hoạt</label>
                                <select id="inputStatus" name="status_post"
                                    class="form-control custom-select @error('status_post') is-invalid @enderror">
                                    <option selected value="1">Kích hoạt</option>
                                    <option value="0">Không kích hoạt</option>
                                </select>
                                @error('status_post')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Thêm bài viết" class="btn btn-success float-right"
                        fdprocessedid="0ea8sb">
                </div>
            </div>
        </section>
    </form>
    <!-- /.content -->
@endsection
