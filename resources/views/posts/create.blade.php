@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h2>Add New Post</h2>
                </div>
                <div class="row mb-3">
                    <label for="caption" class="col-md-4 col-form-label">Write your Blog</label>

                    <!-- <input id="caption"
                           type="text"
                         class="form-control @error('caption') is-invalid @enderror"
                           name="caption"
                         value="{{ old('caption') }}" required
                           autocomplete="caption" autofocus> -->
                    <textarea name="caption"
                              id="caption"
                              cols="30" rows="10"
                              class="form-control @error('caption') is-invalid @enderror"
                              value="{{ old('caption') }}" required
                              autocomplete="caption" autofocus>

                    </textarea>

                    @error('caption')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="d-flex row pt-3">
                    <div class="col-6">
                        <a href=""><button class="btn btn-primary" style="width: 140px;">Add New Blog</button></a>
                    </div>
                    <div class="col-6">
                        <a href=""><button class="btn btn-primary" style="width: 180px;">Schedule your Blog</button></a>
                    </div>
                </div>

            </div>
        </div>
    </form>

</div>
@endsection

