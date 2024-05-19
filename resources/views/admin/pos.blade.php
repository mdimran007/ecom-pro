@extends('admin.layouts.app')
@push('title')
        {{__("Dashboard")}}
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content pb-4">
            <div class="container-fluid">
                <div class="row">
                    <h3 class="text-center py-2 w-100">Product section</h3>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card p-2">
                                    <div class="mx-auto">
                                        <img src="{{asset('admin/dist/img/pro-1.jpg')}}" class="card-img-top" alt="img">
                                    </div>
                                    <div class="card-body">
                                        <span>Product name</span>
                                        <p class="card-text text-center"><strong>$68.90 </strong> <del>$80.00</del> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card p-2">
                                    <div class="mx-auto">
                                        <img src="{{asset('admin/dist/img/pro-2.jpg')}}" class="card-img-top" alt="img">
                                    </div>
                                    <div class="card-body">
                                        <span>Product name</span>
                                        <p class="card-text text-center"><strong>$68.90 </strong> <del>$80.00</del> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card p-2">
                                    <div class="mx-auto">
                                        <img src="{{asset('admin/dist/img/pro-3.jpg')}}" class="card-img-top" alt="img">
                                    </div>
                                    <div class="card-body">
                                        <span>Product name</span>
                                        <p class="card-text text-center"><strong>$68.90 </strong> <del>$80.00</del> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card p-2">
                                    <div class="mx-auto">
                                        <img src="{{asset('admin/dist/img/pro-4.jpg')}}" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <span>Product name</span>
                                        <p class="card-text text-center"><strong>$68.90 </strong> <del>$80.00</del> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card p-2">
                                    <div class="mx-auto">
                                        <img src="{{asset('admin/dist/img/pro-5.jpg')}}" class="card-img-top" alt="img">
                                    </div>
                                    <div class="card-body">
                                        <span>Product name</span>
                                        <p class="card-text text-center"><strong>$68.90 </strong> <del>$80.00</del> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card p-2">
                                    <div class="mx-auto">
                                        <img src="{{asset('admin/dist/img/pro-6.jpg')}}" class="card-img-top" alt="img">
                                    </div>
                                    <div class="card-body">
                                        <span>Product name</span>
                                        <p class="card-text text-center"><strong>$68.90 </strong> <del>$80.00</del> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card p-2">
                                    <div class="mx-auto">
                                        <img src="{{asset('admin/dist/img/pro-7.jpg')}}" class="card-img-top" alt="img">
                                    </div>
                                    <div class="card-body">
                                        <span>Product name</span>
                                        <p class="card-text text-center"><strong>$68.90 </strong> <del>$80.00</del> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card p-2">
                                    <div class="mx-auto">
                                        <img src="{{asset('admin/dist/img/pro-8.jpg')}}" class="card-img-top" alt="img">
                                    </div>
                                    <div class="card-body">
                                        <span>Product name</span>
                                        <p class="card-text text-center"><strong>$68.90 </strong> <del>$80.00</del> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border p-3 bg-light rounded">
                            <h5 class="pb-2">Billing Section</h5>
                            <div class="card p-2">
                                <table class="table table-hover border-bottom">
                                    <thead>
                                      <tr>
                                        <th class="border-top-0" scope="col">Item</th>
                                        <th class="border-top-0" scope="col">QTY</th>
                                        <th class="border-top-0" scope="col">Price</th>
                                        <th class="border-top-0" scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>
                                                <div class="d-flex">
                                                    <img src="{{asset('admin/dist/img/pro-1.jpg')}}" class="card-img-top w-50" alt="img">
                                                    <span>sfs</span>
                                                </div>
                                            </th>
                                            <td>
                                                <input class="w-75 form-control" type="text">
                                            </td>
                                            <td>50.00$</td>
                                            <td>
                                                <div class="text-right">
                                                    <a href="">
                                                        <i class="far fa-trash-alt text-danger"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <div class="d-flex">
                                                    <img src="{{asset('admin/dist/img/pro-1.jpg')}}" class="card-img-top w-50" alt="img">
                                                    <span>sfs</span>
                                                </div>
                                            </th>
                                            <td>
                                                <input class="w-75 form-control" type="text">
                                            </td>
                                            <td>50.00$</td>
                                            <td>
                                                <div class="text-right">
                                                    <a href="">
                                                        <i class="far fa-trash-alt text-danger"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <div class="d-flex">
                                                    <img src="{{asset('admin/dist/img/pro-1.jpg')}}" class="card-img-top w-50" alt="img">
                                                    <span>sfs</span>
                                                </div>
                                            </th>
                                            <td>
                                                <input class="w-75 form-control" type="text">
                                            </td>
                                            <td>50.00$</td>
                                            <td>
                                                <div class="text-right">
                                                    <a href="">
                                                        <i class="far fa-trash-alt text-danger"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="p-1">
                                    <div class="d-flex justify-content-between">
                                        <p>Sub Total: </p>
                                        55.00$
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p>Product Discount: </p>
                                        55.00$
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p>Tax: </p>
                                        55.00$
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p>Total: </p>
                                        55.00$
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
