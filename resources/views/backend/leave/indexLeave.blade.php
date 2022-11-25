{{-- @extends('backend.userLayouts.Umain')

@section('content')
    <div class="card-box mb-30">
        <div class="pd-20">
            <h2 class="text-blue h4">ALL LEAVES</h2>
        </div>
        <div class="pb-20">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline"
                            id="DataTables_Table_0" role="grid">
                            <thead>
                                <tr role="row">
                                    <th class="table-plus sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1"
                                        aria-label="LEAVE TYPE: activate to sort column ascending">LEAVE TYPE</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="DATE FROM: activate to sort column ascending">DATE FROM
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="DATE TO: activate to sort column ascending">DATE TO</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="NO. OF DAYS: activate to sort column descending"
                                        aria-sort="ascending">NO. OF DAYS</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="HOD STATUS: activate to sort column ascending">HOD STATUS
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="REG. STATUS: activate to sort column ascending">REG.
                                        STATUS</th>
                                    <th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="ACTION">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr role="row" class="odd">



                                    <td tabindex="0" class="">Casual Leave</td>
                                    <td>2021-05-12</td>
                                    <td>2021-05-02</td>
                                    <td class="sorting_1">3</td>
                                    <td> <span style="color: green">Approved</span>

                                    </td>
                                    <td> <span style="color: green">Approved</span>

                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a title="VIEW" href="view_leave.php?edit=13" data-color="#265ed7"
                                                style="color: rgb(38, 94, 215);"><i class="icon-copy dw dw-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td tabindex="0" class="">Casual Leave</td>
                                    <td>05-05-2021</td>
                                    <td>02-05-2021</td>
                                    <td class="sorting_1">4</td>
                                    <td> <span style="color: green">Approved</span>

                                    </td>
                                    <td> <span style="color: green">Approved</span>

                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a title="VIEW" href="view_leave.php?edit=16" data-color="#265ed7"
                                                style="color: rgb(38, 94, 215);"><i class="icon-copy dw dw-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="">Casual Leave</td>
                                    <td>15-05-2021</td>
                                    <td>11-05-2021</td>
                                    <td class="sorting_1">5</td>
                                    <td> <span style="color: green">Approved</span>

                                    </td>
                                    <td> <span style="color: green">Approved</span>

                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a title="VIEW" href="view_leave.php?edit=17" data-color="#265ed7"
                                                style="color: rgb(38, 94, 215);"><i class="icon-copy dw dw-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td tabindex="0" class="">Medical Leave</td>
                                    <td>21-11-2022</td>
                                    <td>10-11-2022</td>
                                    <td class="sorting_1">12</td>
                                    <td> <span style="color: blue">Pending</span>

                                    </td>
                                    <td> <span style="color: blue">Pending</span>

                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a title="VIEW" href="view_leave.php?edit=18" data-color="#265ed7"
                                                style="color: rgb(38, 94, 215);"><i class="icon-copy dw dw-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5"></div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                    <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0"
                                        class="page-link"><i class="ion-chevron-left"></i></a></li>
                                <li class="paginate_button page-item active"><a href="#"
                                        aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"
                                        class="page-link">1</a></li>
                                <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a
                                        href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0"
                                        class="page-link"><i class="ion-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@extends('backend.userLayouts.Umain')
@section('content')
    <div class="card-body" style="padding-top: 50px">

        <a href="{{ route('leave.create') }}">
            <button type="button" class="btn btn-block btn-success" style="background: lightgreen"><b>Add<b></button>
        </a>

        <p class="mb-10"></p>

        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                        aria-describedby="example2_info">
                        <thead>
                            {{-- 'name', 'email', 'leave_Type', 'start_Leave', 'end_Leave', 'leave_Reason' --}}
                            <tr role="row" style="background: rgb(222, 188, 237)">
                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                    colspan="1" aria-label="Rendering engine: activate to sort column descending"
                                    aria-sort="ascending">
                                    Name</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending">E-mail</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending">Type of Leave</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending">Initial Date</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Engine version: activate to sort column ascending">End Date</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Engine version: activate to sort column ascending">Reason for leave</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($data) > 0)
                                @foreach ($data as $info)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $info->name }}</td>
                                        <td>{{ $info->email }}</td>
                                        <td>{{ $info->leave_type }}</td>
                                        <td>{{ $info->start_leave }}</td>
                                        <td>{{ $info->end_leave }}</td>
                                        <td>{{ $info->leave_reason }}</td>


                                        <td>
                                            <form action="{{ route('leave.destroy', $info->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-app" style="background: #ffcccb">
                                                    <i class="fas fa-delete"></i> <b>Delete<b>
                                                </button>
                                            </form>
                                        </td>

                                        {{--
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">Gecko</td>
                            <td>Firefox 1.5</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">Gecko</td>
                            <td>Firefox 2.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">Gecko</td>
                            <td>Firefox 3.0</td>
                            <td>Win 2k+ / OSX.3+</td>
                            <td>1.9</td>
                            <td>A</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">Gecko</td>
                            <td>Camino 1.0</td>
                            <td>OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">Gecko</td>
                            <td>Camino 1.5</td>
                            <td>OSX.3+</td>
                            <td>1.8</td>
                            <td>A</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">Gecko</td>
                            <td>Netscape 7.2</td>
                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                            <td>1.7</td>
                            <td>A</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">Gecko</td>
                            <td>Netscape Browser 8</td>
                            <td>Win 98SE+</td>
                            <td>1.7</td>
                            <td>A</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">Gecko</td>
                            <td>Netscape Navigator 9</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                        </tr>
                        <tr role="row" class="even"> --}}
                                        {{-- <td class="sorting_1">Gecko</td>
                            <td>Mozilla 1.0</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td>1</td>
                            <td>A</td> --}}
                                    </tr>
                                @endforeach
                            @else
                                <td valign="top" colspan="7" style="text-align: center;">
                                    {{ 'No data available in table' }}</td>
                            @endif


                        </tbody>
                        <tfoot>
                            {{-- <tr>
                            <th rowspan="1" colspan="1">Rendering engine</th>
                            <th rowspan="1" colspan="1">Browser</th>
                            <th rowspan="1" colspan="1">Platform(s)</th>
                            <th rowspan="1" colspan="1">Engine version</th>
                            <th rowspan="1" colspan="1">CSS grade</th>
                        </tr> --}}
                        </tfoot>
                    </table>


                    {{ $data->links() }}
                </div>
            </div>
            <div class="row">
                {{-- <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57
                    entries</div>
            </div> --}}
                {{-- <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#"
                                aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                        </li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="example2"
                                data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2"
                                tabindex="0" class="page-link">2</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3"
                                tabindex="0" class="page-link">3</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4"
                                tabindex="0" class="page-link">4</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5"
                                tabindex="0" class="page-link">5</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6"
                                tabindex="0" class="page-link">6</a></li>
                        <li class="paginate_button page-item next" id="example2_next"><a href="#"
                                aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div> --}}
            </div>
        </div>
    </div>
@endsection
