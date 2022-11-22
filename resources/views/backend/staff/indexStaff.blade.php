@extends('backend.layouts.main')
@section('content')

<div class="card-body">

    <a href="{{route('staff.create')}}" style="padding-top: 50px">
        <button type="button" class="btn btn-block btn-success" style="background: lightgreen">Add</button>
        <p class="mb-10"></p>
    </a>

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
                        <tr role="row" style="background: rgb(222, 188, 237)">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">
                                Name</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending">E-mail</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Phone</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Position</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Image</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending"></th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data as $info )


                        <tr role="row" class="odd">
                            <td class="sorting_1">{{$info->name}}</td>
                            <td>{{$info->email}}</td>
                            <td>{{$info->phone}}</td>
                            <td>{{$info->position}}</td>
                            <td><img src="{{asset('images/'.$info->image)}}" width="60px" height="50px">                             
                            </td>
                            {{-- <td>
                                <a class="btn btn-app" href="{{route('staff.create')}}">

                                        <i class="fas fa-users"></i> Add
                                    </a>
                            </td> --}}
                            <td>
                                    <a class="btn btn-app" href="{{route('staff.edit', $info->id)}}" style="background:#fed8b1; position: center">
                                        <i class="fas fa-edit"></i> Edit
                                    </a> 
                            </td>
                            <td>
                                <form action="{{route('staff.destroy', $info->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button class="btn btn-app" style="background: #ffcccb">
                                        <i class="fas fa-delete"></i><b> Delete <b>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
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

                {{$data->links()}}
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