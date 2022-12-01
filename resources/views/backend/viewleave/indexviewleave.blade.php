@extends('backend.userLayouts.Umain')

@section('content')

    <div class="card-body">

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

                        </thead>
                        <tbody>
                            @if (count($data) > 0)
                                @foreach ($data as $info)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{  $info->staff->user->name }}</td>
                                        <td>{{ $info->staff->user->email }}</td>
                                        <td>{{ $info->leave_type }}</td>
                                        <td>{{ $info->start_leave }}</td>
                                        <td>{{ $info->end_leave }}</td>
                                        <td>{{ $info->leave_reason }}</td>


                                        {{-- <td>
                                <form action="{{route('leave.destroy', $info->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button class="btn btn-app">
                                        <i class="fas fa-delete"></i> Delete
                                    </button>
                                </form>
                            </td> --}}


                                    </tr>
                                @endforeach
                            @else
                                <td valign="top" colspan="7" style="text-align: center;">
                                    {{ 'No data available in table' }}</td>
                            @endif


                        </tbody>
                        <tfoot>

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
