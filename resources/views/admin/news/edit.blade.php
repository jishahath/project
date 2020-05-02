@extends('layouts.admin')
@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit News</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit News</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <form method="post" action="{{route('admin.news.update', $news->id) }}" enctype="multipart/form-data">
        {{ method_field('PUT') }}{{csrf_field()}}
        <input type="hidden" name="_token" value="{{csrf_token() }}">
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Title</label>
                    <div class="col-md-6"><input type="text" name="title" class="form-control" value="{{$news->title }}"></div>
                    <div class="clearfix"></div>
                </div>
            </div> 

            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Author</label>
                    <div class="col-md-6"><input type="text" name="author" class="form-control" value="{{$news->author }}"></div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Image</label>
                    <div class="col-md-9"><input type="file" name="image"></div>
                    <div class="clearfix"></div>
                    @if($news->image)
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                    <img src="{{asset('storage/news/'.$news->image) }}" style="width:150px;">
                    </div>
                    <div class="clearfix"></div>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Description</label>
                    <div class="col-md-6"><input type="text" name="description" class="form-control" value="{{$news->description }}"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info" value="Save">
            </div>
        </form>
    </div>
</section>

@endsection