@extends('layout.master')
@section('title', 'Live-view')
@section('body')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Transactions</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Data List</a>
                            </li>
                            <li class="breadcrumb-item active">Transactions
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
                    <th>supplier_id</th>
                    <th>date</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                </tr> 
            </thead>
            <tbody>
            @foreach($data as $list)
                <tr>
                    <td>{{$list->id}}</td>
                    <td>{{$list->supplier_id}}</td>
                    <td class="product-name">{{$list->date}}</td>
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