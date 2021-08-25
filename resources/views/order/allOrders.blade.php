@extends('layout.master')
@section('title', 'Live-view')
@section('body')

    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Order List</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Data List</a>
                            </li>
                            <li class="breadcrumb-item active">Order List
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrum-right">
                <div class="dropdown">
                    <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Data list view starts -->
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                           
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <p class="card-text"></p>
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                            <tr>
                                              
                                            <th>id</th>
                    <th>user_id</th>
                    <th>order_no</th>
                    <th>razorpay_id</th>
                    <th>date</th>
                    <th>payment_method</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $list)
                <tr>
                    <td>{{$list->id}}</td>
                    <td>{{$list->user_id}}</td>
                    <td class="product-name">{{$list->order_no}}</td>
                    <td>{{$list->razorpay_id}}</td>
                    <td>{{$list->date}}</td>
                    <td>{{$list->payment_method}}</td>
                    <td>
                        <div class="chip chip-warning">
                            <div class="chip-body">
                                <div class="chip-text">{{$list->created_at}}</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="chip chip-warning">
                            <div class="chip-body">
                                <div class="chip-text">{{$list->updated_at}}</div>
                            </div>
                        </div>
                    </td>
                    
                    <td>
                        <div class="dropdown dropright">
                            <button class="btn bg-gradient-primary dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton101" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Manage
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton101" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                <a class="dropdown-item" href='{{ url(orderview) }}'>View</a>
                                <a class="dropdown-item" href="#">Invoice</a>

                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                                          
                                        </tbody>
                                     
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Data list view end -->

    </div>
</div>

@endsection