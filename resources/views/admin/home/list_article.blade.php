@extends('admin.layout.layout')

@section('title')
    
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Projects</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Projects</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                        title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                ID
                            </th>
                            <th style="width: 30%" class="text-center">
                                Tên bài viết
                            </th>
                            <th style="width: 20%">
                                Hình ảnh
                            </th>
                            <th>
                                Danh mục
                            </th>
                            <th style="width: 10%" class="text-center">
                                Trạng thái
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($info as $row)
                            <tr>
                                <td>
                                    {{ $row->id_post }}
                                </td>
                                <td class="text-center">
                                    <a href="#">
                                        {{ $row->title_post }}
                                    </a>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="" class="table-avatar"
                                                src="{{ asset('storage/' . $row->image_post) }}">
                                        </li>
                                    </ul>
                                </td>
                                <td class="project_progress">
                                    {{ $row->id_category }}
                                </td>
                                <td class="project-state">
                                    @if ($row->status_post == 1)
                                        <span class="badge badge-success">Kích hoạt</span>
                                    @else
                                        <span class="badge badge-danger">Chưa kích hoạt</span>
                                    @endif
                                </td>

                                <td class="project-actions text-right">
                                    {{-- <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder"></i> View
                                    </a> --}}
                                    <a class="btn btn-info btn-sm" href="{{ route('edit_article', ['id' => $row->id_post]) }}">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    <form action="{{ route('delete_article', ['id' => $row->id_post]) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này?')">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $info -> links() }}
            <!-- /.card-body -->
        </div>
        
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
