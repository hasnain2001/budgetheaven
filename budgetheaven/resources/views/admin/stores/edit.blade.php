@extends('admin.master')
@section('title')
    Update
@endsection
@section('main-content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Store</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success alert-dismissable">
                    <i class="fa fa-ban"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>{{ session('success') }}</b>
                </div>
            @endif
            <form name="UpdateStore" id="UpdateStore" method="POST" enctype="multipart/form-data" action="{{ route('admin.store.update', $stores->id) }}">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Store Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $stores->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control" cols="30" rows="5" style="resize: none;" required>{{ $stores->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="url">URL <span class="text-danger">*</span></label>
                                    <input type="url" class="form-control" name="url" id="url" value="{{ $stores->url }} required">
                                </div>
                                <div class="form-group">
                                    <label for="destination_url">Destination URL <span class="text-danger">*</span></label>
                                    <input required type="url" class="form-control" name="destination_url" id="destination_url" value="{{ $stores->destination_url }} ">
                                </div>
                                <div class="form-group">
                                    <label for="category">Category <span class="text-danger">*</span></label>
                                    <select name="category" id="category" class="form-control">
                                        <option value="" disabled selected>{{ $stores->category }}</option>
                                        @foreach($categories as $category) 
                                            <option value="{{ $category->title }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                  <div class="form-group">
                                    <label for="name">Meta Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="name" >
                                </div>
                                <div class="form-group">
                                    <label for="meta_tag">Meta Tag <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="meta_tag" id="meta_tag" value="{{ $stores->meta_tag }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_keyword">Meta Keyword <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" value="{{ $stores->meta_keyword }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" class="form-control" cols="30" rows="5" style="resize: none;">{{ $stores->meta_description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="status">Status <span class="text-danger">*</span></label><br>
                                    <input type="radio" name="status" id="enable" {{ $stores->status == 'enable' ? 'checked' : '' }} value="enable">&nbsp;<label for="enable">Enable</label>
                                    <input type="radio" name="status" id="disable" {{ $stores->status == 'disable' ? 'checked' : '' }} value="disable">&nbsp;<label for="disable">Disable</label>
                                </div>
                                <div class="form-group">
                                    <label for="authentication">Authentication</label><br>
                                    <input type="checkbox" name="authentication" id="authentication" {{ $stores->authentication == 'top_stores' ? 'checked' : '' }} value="top_stores">&nbsp;<label for="authentication">Top Store</label>
                                </div>
                                <div class="form-group">
                                    <label for="network">Network <span class="text-danger">*</span></label>
                                    <select name="network" id="network" class="form-control">
                                        <option value="" disabled selected>{{ $stores->network }}</option>
                                        @foreach($networks as $network) 
                                            <option value="{{ $network->title }}">{{ $network->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="store_image">Store Image <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" name="store_image" id="store_image" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('admin.store') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection