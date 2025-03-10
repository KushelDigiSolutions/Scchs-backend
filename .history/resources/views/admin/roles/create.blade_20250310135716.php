@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content content123">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12">
                        <div class="card card-outline6 card-outline card-primary mt-4">
                            <div class="card-header card-heading22 align-content-center">
                                <h5 class="mb-0">
                                    @isset($page_title)
                                        {{ $page_title }}
                                    @endisset
                                </h5>
                            </div>
                            <div class="card-body priter mt-4">
                                <div class="modal-body">
                                    <form class="form-example" action="{{ route('admin.roles.store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 form_div">
                                                <div class="form-group">
                                                    <label for="Name" class="form-label">Name</label>
                                                    <input id="Name" class="form-control" type="text" name="name"
                                                        required placeholder="Enter Role">
                                                </div>
                                                @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                         
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-sm fw-bold text-white save-btn" style="background-color:rgb(236, 105,31)">Save</button>

                    {{--
                                            class="btn btn-sm fw-bold text-white" style="background-color: #AB0635;"
                                            <a href="{{ route('admin.roles.create') }}"  class="btn btn-sm fw-bold text-white" style="background-color: #AB0635;">Add New Role</a>
                   --}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
