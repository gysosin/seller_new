@extends('layout.master')
@section('title', 'dashboard')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/data-list-view.css')}}">
@section('body')

<section id="data-list-view" class="data-list-view-header">
    <!-- DataTable starts -->
    <div class="table-responsive">
        <table class="table data-list-view">
            <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>user_id</th>
                                        <th>product_id </th>
                                        <th>rating</th>
                                        <th>photos</th>
                                        <th>review</th>
                                        <th>created_at</th>
                                        <th>updated_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach($data as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->user_id}}</td>
                                        <td>{{$product->product_id}}</td>
                                        <td>{{$product->rating}}</td>
                                        <td>{{$product->photos}}</td>
                                        <td>{{$product->review}}</td>
                                        <td>
                                        <div class="chip chip-warning">
                                        <div class="chip-body">
                                           <div class="chip-text">{{$product->created_at}}</div>
                                          </div>
                                       </div>
                                         </td>
                                          <td>
                                         <div class="chip chip-warning">
                                           <div class="chip-body">
                                          <div class="chip-text">{{$product->updated_at}}</div>
                                         </div>
                                          </div>
                                           </td>
                                        
                                    </tr>

                                    @endforeach
                                </tbody>
                                
                            </table>
        </table>
    </div>
    <!-- DataTable ends -->


    <!-- add new sidebar ends -->
</section>


@section('js')
<script src="{{asset('/app-assets/js/scripts/ui/data-list-view.js')}}"></script>
<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->
@stop

@endsection()