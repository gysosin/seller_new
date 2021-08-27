@extends('layout.master')
@section('title')
@section('body')
<section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Settlement Report</h4><br><br>
                                </div><br><br>

                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                <form method="post" action="{{route('product.stock',[$productArr->id])}}">
                    @csrf
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Edit stock</label>
                                                    <input type="text" class="form-control" id="basicInput" placeholder="Stock" name="stock" value="{{$productArr->stock}}">
                                                </fieldset>
                                                <button type="submit" name="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light float-lg-right">Update Stock</button>
                                </form>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

@endsection


