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
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name"
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
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="select_position">Select Position</label>
                            <select onchange="changeAllocatedValue()" id="select_position" name="select_position" class="custom-select form-control sel_1" required="true" autocomplete="off">
                                <option selected disabled>Select Position</option>
                                <option value="1">Intern</option>
                                <option value="2">Executive</option>
                                <option value="3">Manager</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="allocated_leave">Allocated Leave</label>
                            <input type="text" name="allocated_leave" class="form-control" id="allocated_leave" readonly placeholder="Allocated Leave">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label>Image</label>
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

    <script>
        changeAllocatedValue = () => {

            let positionValue = document.getElementById("select_position").value;

            console.log(positionValue);

            if(positionValue == 1)
            {
                document.getElementById("allocated_leave").value = "10";
            } else if (positionValue == 2) {
                document.getElementById("allocated_leave").value = "20";
            } else if (positionValue == 3) {
                document.getElementById("allocated_leave").value = "30";
            }
            // let select_position_variable = $("#select_position").val();

            // console.log(select_position_variable);

            // let positionValue = $("#select_position").val();

            // console.log(positionValue);

            // if(positionValue == 1)
            // {
            //     $("allocated_leave").val("10");
            // } else if (positionValue == 2) {
            //     $("allocated_leave").val("10");
            // } else if (positionValue == 3) {
            //     $("allocated_leave").val("10");
            // }
        }
    </script>
    
@endsection
