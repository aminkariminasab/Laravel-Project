@extends('layouts')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 mx-auto">
                <div class="jumbotron">
                    <div class="row text-center">
                        <div class="text-center col-12">
                            <h2>Form   <a style="font-size: 15px;" href="{{ route('json') }}">view json file</a> </h2>
                            <p>Json file saved at root with name: <a href="{{ url('products.json') }}">products.json</a></p>
                        </div>

                        <div class="text-center col-12">
                                @csrf
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Product name</th>
                                        <th>Quantity in stock</th>
                                        <th>Price per item</th>
                                        <th>Datetime submitted</th>
                                        <th>Total value number</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="table">
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mx-auto">
                <div class="jumbotron">
                    <div class="row text-center">
                        <div class="text-center col-12">
                            <form id="form" class="text-center" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Prouct name</label>
                                            <input type="text" name="name" class="form-control" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="price" class="form-control" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Count</label>
                                            <input type="number" name="count" class="form-control" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="save" class="btn btn-primary btn-lg"> Add
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
