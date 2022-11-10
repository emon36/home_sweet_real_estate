@extends('admin.layouts.master')

@section('content')

    <div class="row">

        <div class="col-12  mt-3">
            <div class="card mb-md-0">
                <div class="card-body">
                    <div class="card-title">Create News</div>
                    <form class="form-horizontal" action="{{route('admin.news.store')}}"  method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="row mb-3">
                            <label for="inputName" class="col-3 col-form-label">Title</label>
                            <div class="col-9">
                                <input type="text" class="form-control  @error('title') is-invalid @enderror" id="inputName"  placeholder="Enter title" name="title" value="{{ old('title') }}">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                             </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-3 col-form-label">Short Description</label>
                            <div class="col-9">
                                <textarea id="summernote" cols="3" name="short_description" class="form-control  @error('short_description') is-invalid @enderror" ></textarea>
                                @error('short_description')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-3 col-form-label">Long Description</label>
                            <div class="col-9">
                                <textarea id="summernote1" cols="5" name="long_description" class="form-control @error('long_description') is-invalid @enderror" ></textarea>
                                @error('long_description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                     </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputFile" class="col-3 col-form-label">Feature Image</label>
                            <div class="col-9">
                                <div class="fallback">
                                    <input name="image" type="file" name="image" class="form-control @error('short_description') is-invalid @enderror" />
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                     </span>
                                    @enderror
                                </div>

                            </div>

                        </div>


                        <div class="justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

