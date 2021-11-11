@extends('personal.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Likes page</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item">Home</li>
                  </ol>
              </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="col-8 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Posts list.</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 500px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th colspan="2" class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td><a href="{{ route('admin.post.show', $post->id) }}" class="text-primary"> <i class="fas fa-eye"></i> </a></td>
                                    <td>
                                        <form action="{{ route('personal.liked.delete', $post->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fas fa-trash-alt text-danger" role="button"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
