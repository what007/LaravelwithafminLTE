@extends('backend.userLayouts.Umain')

@section('content')
    <div style="margin-left: 50px; margin-right: 50px;" class="pd-20 card-box mb-30">
        <div class="clearfix" style="padding-top: 50px;">
            <div class="pull-left">
                <h4 class="text-blue h4"><u>Staff Leave Form<u></h4>
                <p class="mb-10"></p>
            </div>
        </div>
        <div class="wizard-content">
            {{-- <form method="post" action=""> --}}
            <form role="form" action="{{ route('leave.store') }}" method="POST" enctype="multipart/form-data">
                @csrf



                <div class="row">
                    <div class="col-md-6 col-sm12">
                        <div class="form-group">
                            <label>Name </label>
                            <input name="name" type="text" class="form-control wizard-required" required="true"
                                value="{{ auth()->user()->name }}" disabled>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input name="email" type="text" class="form-control" required="true"
                                value="{{ auth()->user()->email }}" disabled>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Leave Type :</label>
                            <select name="leave_type" class="custom-select form-control" required="true" autocomplete="off">
                                <option value="">Select leave type...</option>

                                <option value="Unpaid Leave">Unpaid Leave</option>

                                <option value="Medical Leave">Medical Leave</option>

                                <option value="Annual Leave">Annual Leave</option>

                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Start Leave Date :</label>
                            <input id="date_from" onchange="setEndDate()" name="start_leave" type="date"
                                class="form-control" required="true" autocomplete="off=">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>End Leave Date :</label>
                            <input id="date_to" name="end_leave" type="date" class="form-control" required="true"
                                autocomplete="off">
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="form-group">
                            <label>Reason For Leave :</label>
                            <textarea id="textarea1" name="leave_reason" class="form-control" required="" length="150" maxlength="150"
                                autocomplete="off"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label style="font-size:16px;"><b></b></label>
                            <div class="modal-footer justify-content-center">
                                <button class="btn btn-primary" name="apply" id="apply"
                                    data-toggle="modal">Apply&nbsp;Leave</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <script>
        // $ (document).ready(function () {
        //   var minDate = new Date();
        //     $("#date_from").datepicker({
        //         showAnim: 'drop',
        //         numberOfMonth: 1,
        //         minDate: minDate,
        //         dateFormat: 'dd/mm/yy',
        //         onClose: function (selectedDate) {
        //             $ ("#date_to").datepicker("option", "minDate", "selectedDate")
        //         }
        //     });

        //     $("#date_to").datepicker({
        //         showAnim: 'drop',
        //         numberOfMonth: 1,
        //         minDate: minDate,
        //         dateFormat: 'dd/mm/yy',
        //         onClose: function (selectedDate) {
        //             $ ("#date_from").datepicker("option", "minDate", "selectedDate")
        //         }
        //     });
        // })

        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();

        if (dd < 10) {
            dd = '0' + dd;
        }

        if (mm < 10) {
            mm = '0' + mm;
        }

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("date_from").setAttribute("min", today);
        document.getElementById("date_to").setAttribute("min", today);

        function setEndDate() {
            var date_from_val = $("#date_from").val();
            //  alert(date_from_val);
            document.getElementById("date_to").setAttribute("min", date_from_val);
        }
    </script>
@endsection
