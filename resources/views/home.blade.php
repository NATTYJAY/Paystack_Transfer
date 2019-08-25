@extends('layouts.pay-contents')

@section('contentLoad')
<!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">


                <div class="row">

                    <div class="col-md-6 grid-margin">
                    <span style="cursor: pointer" class="bank_code" >
                        <div class="card">
                            <div class="card-body">
                               <!--  <i><h3 class="card-title mb-0">Start Transaction</h3></i> -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-inline-block pt-3">
                                        <div class="d-md-flex">
                                            <h2 class="mb-0">Make Transfer</h2>
                                            {{--<div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">--}}
                                                {{--<i class="icon-clock text-muted"></i>--}}
                                                {{--<small class=" ml-1 mb-0">Updated: 9:10am</small>--}}
                                            {{--</div>--}}
                                        </div>
                                        {{--<small class="text-gray">Raised from 89 orders.</small>--}}
                                    </div>
                                    <div class="d-inline-block">
                                        <div class="bg-success px-4 py-2 rounded">
                                            <i class="icon-layers text-white icon-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </span>

                    </div>

                    <div class="col-md-6 grid-margin">
                        <div class="card">
                            <div class="card-body">
                               <!--  <h4 class="card-title mb-0">Daily Order</h4> -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-inline-block pt-3">
                                        <div class="d-md-flex">
                                            <h2 class="mb-0">Transaction History</h2>
                                           <!--  <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                                <i class="icon-clock text-muted"></i>
                                                <small class="ml-1 mb-0">Updated: 05:42pm</small>
                                            </div> -->
                                        </div>
                                       <!--  <small class="text-gray">hey, let’s have lunch together</small> -->
                                    </div>
                                    <div class="d-inline-block">
                                        <div class="bg-warning px-4 py-2 rounded">
                                            <i class="icon-wallet text-white icon-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Customer's Details</h4>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Account Number</th>
                                        <th>Bank Name</th>
                                        <th>Pay</th>
                                    </tr>
                                    </thead>
                                    <tbody id="resultdisplay">
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../partials/_footer.html -->
            <footer class="footer">
                <div class="w-100 clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="#" target="_blank">Paystack Dev Test</a></span>
                     </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    @endsection


