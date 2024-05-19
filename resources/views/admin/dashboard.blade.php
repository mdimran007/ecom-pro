@extends('admin.layouts.app')
@push('title')
        {{__("Dashboard")}}
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Product</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="productName">Product Name</label>
                                        <input type="text" class="form-control" id="productName" placeholder="Product Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="productName">Product Unit</label>
                                        <input type="text" class="form-control" id="productName" placeholder="kg,litter,pieces">
                                    </div>

                                    <div class="form-group">
                                        <label for="productName">Product Unit Value</label>
                                        <input type="number" class="form-control" id="productName" min="1" placeholder="0">
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                        <!-- /.card -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
