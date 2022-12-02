@extends('backend.layouts.main')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form onsubmit="phonenumber(phone)" role="form" action="{{route('staff.update', $data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" value="{{ $data->user->name }}" class="form-control" id="exampleInputEmail1" placeholder="Enter name" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="text" name="email" value="{{$data->user->email}}" class="form-control" id="exampleInputPassword1" placeholder="Email" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone</label>
                <input type="text" id="phone" name="phone" value="{{$data->phone}}" class="form-control" placeholder="Phone">
            </div>
            {{-- <div class="form-group">
                <label for="exampleInputPassword1">Position</label>
                <input type="text" name="position" value="{{$data->position}}" class="form-control" id="exampleInputPassword1" placeholder="Position">
            </div> --}}

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="select_position">Select Position</label>
                        <select onselect="alert('hi')" name="select_position" class="custom-select form-control" required="true" autocomplete="off">
                            <option selected disabled>Select Position</option>
                            <option value="Intern">Intern</option>
                            <option value="Executive">Executive</option>
                            <option value="Manager">Manager</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="allocated_leave">Allocated Leave</label>
                        <input type="text" name="allocated_leave" class="form-control" id="allocated_leave" placeholder="Allocated Leave">
                    </div>
                </div>
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
            <button type="submit" class="btn btn-primary"  >Submit</button>
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