@extends('backend.layouts.main')

@section('content')
    <div class="card card-primary">
        <div class="card-header" style="background: rgb(173, 245, 255)">
            <h3 class="card-title" style="color: blue"><b>Add Staff <b></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form onsubmit="phonenumber(phone)" role="form" action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1"
                        placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" id="phone" name="phone" class="form-control" id="exampleInputPassword1"
                        placeholder="Phone">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Position</label>
                    <input type="text" name="position" class="form-control" id="exampleInputPassword1"
                        placeholder="Position">
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Image</label>
                    <div class="col-lg-10">
                        <input type="file" class="form-control h-auto" name="image">
                    </div>
                </div>

                {{-- <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div>
                </div>
            </div> --}}

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="background: lightgreen">Submit</button>
            </div>
        </form>
    </div>

    <script>
        function phonenumber(phone) {
            var phoneno = /^\d{10}$/;
            if (phone.value.match(phoneno)) {
                    return true;
                } else {
                    alert("Not a valid Phone Number");
                    event.preventDefault(); 
                    //    return false;
                   // $(selector).attr(attributeName);
                }
            }
    </script>
    
@endsection
