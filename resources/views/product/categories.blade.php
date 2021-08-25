@extends('layout.master')
@section('title', 'dashboard')
@section('body')
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
<style>
    .tgl {
        position: relative;
        display: inline-block;
        height: 20px;
        cursor: pointer;
    }

    .tgl>input {
        position: absolute;
        opacity: 0;
        z-index: -1;
        /* Put the input behind the label so it doesn't overlay text */
        visibility: hidden;
    }

    .tgl .tgl_body {
        width: 50px;
        height: 20px;
        background: white;
        border: 1px solid #dadde1;
        display: inline-block;
        position: relative;
        border-radius: 50px;
    }

    .tgl .tgl_switch {
        width: 20px;
        height: 20px;
        display: inline-block;
        background-color: white;
        position: absolute;
        left: -1px;
        top: -1px;
        border-radius: 50%;
        border: 1px solid #ccd0d6;
        -moz-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.13);
        -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.13);
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.13);
        -moz-transition: left 250ms cubic-bezier(0.34, 1.61, 0.7, 1), -moz-transform 250ms cubic-bezier(0.34, 1.61, 0.7, 1);
        -o-transition: left 250ms cubic-bezier(0.34, 1.61, 0.7, 1), -o-transform 250ms cubic-bezier(0.34, 1.61, 0.7, 1);
        -webkit-transition: left 250ms cubic-bezier(0.34, 1.61, 0.7, 1), -webkit-transform 250ms cubic-bezier(0.34, 1.61, 0.7, 1);
        transition: left 250ms cubic-bezier(0.34, 1.61, 0.7, 1), transform 250ms cubic-bezier(0.34, 1.61, 0.7, 1);
        z-index: 1;
    }

    .tgl .tgl_track {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        border-radius: 50px;
    }

    .tgl .tgl_bgd {
        position: absolute;
        right: -10px;
        top: 0;
        bottom: 0;
        width: 50px;
        -moz-transition: left 250ms cubic-bezier(0.34, 1.61, 0.7, 1), right 250ms cubic-bezier(0.34, 1.61, 0.7, 1);
        -o-transition: left 250ms cubic-bezier(0.34, 1.61, 0.7, 1), right 250ms cubic-bezier(0.34, 1.61, 0.7, 1);
        -webkit-transition: left 250ms cubic-bezier(0.34, 1.61, 0.7, 1), right 250ms cubic-bezier(0.34, 1.61, 0.7, 1);
        transition: left 250ms cubic-bezier(0.34, 1.61, 0.7, 1), right 250ms cubic-bezier(0.34, 1.61, 0.7, 1);
        background: #439fd8 url("http://petelada.com/images/toggle/tgl_check.png") center center no-repeat;
    }

    .tgl .tgl_bgd-negative {
        right: auto;
        left: -40px;
        background: white url("http://petelada.com/images/toggle/tgl_x.png") center center no-repeat;
    }

    .tgl:hover .tgl_switch {
        border-color: #b5bbc3;
        -moz-transform: scale(1.06);
        -ms-transform: scale(1.06);
        -webkit-transform: scale(1.06);
        transform: scale(1.06);
    }

    .tgl:active .tgl_switch {
        -moz-transform: scale(0.95);
        -ms-transform: scale(0.95);
        -webkit-transform: scale(0.95);
        transform: scale(0.95);
    }

    .tgl> :not(:checked)~.tgl_body>.tgl_switch {
        left: 30px;
    }

    .tgl> :not(:checked)~.tgl_body .tgl_bgd {
        right: -40px;
    }

    .tgl> :not(:checked)~.tgl_body .tgl_bgd.tgl_bgd-negative {
        right: auto;
        left: -10px;
    }
</style>
@section('body')

<section id="column-selectors">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All categoriess</h4>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <a href='categories_create'><button type="button" class="btn mb-1 btn-primary btn-lg btn-block waves-effect waves-light float-right">Add a categories</button></a>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">

                   
                    
                                  
                                 
                                
                                                         <div class="col-sm-6 col-12" data-select2-id="126">
                                                            <div class="text-bold-600 font-medium-2">
                                                                Unit
                                                            </div>
                                                            <div class="form-group" data-select2-id="125">
                                                                <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                                @foreach($data as $list)
                                           
                                                                 <option> {{$list->name}}</option>
                                          
                                                                 @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                   
                                      

                                   
                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Column selectors with Export Options and print table -->
@endsection