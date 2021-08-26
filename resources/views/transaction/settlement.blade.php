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

                                        <div class="table-responsive">
                                            <table class="table table-striped dataex-html5-selectors">
                                                <thead>
                                                    <tr>
                                                        <th>All Transactions</th>
                                                        <th>Pending ammount</th>

                                                    </tr>
                                                </thead> <tbody>
            @foreach($data as $list)
                <tr>
                    <td>{{$list->id}}</td>
                    <td>{{$list->supplier_id}}</td>


                </tr>
                @endforeach
                </tbody>
                                                <tfoot>

                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

@endsection
