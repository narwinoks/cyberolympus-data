@extends('templates.main')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="container-fluid d-flex justify-content-between">
                    <div class="col-lg-3 pl-0">
                        <a href="#" class="noble-ui-logo d-block mt-3">X<span>PRESS</span></a>
                        <p class="mt-1 mb-1"><b>PT SUKA RAMAI</b></p>
                        <p>108,<br> Pandega Marta<br>Yogyakarta.</p>
                        <h5 class="mt-5 mb-2 text-muted">Invoice to :</h5>
                        <p>{{ $invoice->name }},<br> {{ $invoice->address }}<br>{{ $invoice->kota }}</p>
                    </div>
                    <div class="col-lg-3 pr-0">
                        <h4 class="font-weight-medium text-uppercase text-right mt-4 mb-2">invoice</h4>
                        <h6 class="text-right mb-5 pb-4">#{{ $invoice->invoice_id }}</h6>
                        <p class="text-right mb-1">Balance Due</p>
                        <h4 class="text-right font-weight-normal">{{ konversi_uang($invoice->payment_final) }}</h4>
                        <h6 class="mb-0 mt-3 text-right font-weight-normal mb-2"><span class="text-muted">Invoice Date
                                :</span> {{ $invoice->order_time }}</h6>
                        <h6 class="text-right font-weight-normal"><span class="text-muted">Due Date :</span>
                            {{ $invoice->delivery_date }}
                            <h6 class="text-right font-weight-normal"><span class="text-muted">Due Time :</span>
                                {{ $invoice->delivery_time }}
                            </h6>
                    </div>
                </div>
                <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                    <div class="table-responsive w-100">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Description</th>
                                    <th class="text-right">Quantity</th>
                                    <th class="text-right">Unit cost</th>
                                    <th class="text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoice->OrderDetail as $item)
                                    <tr class="text-right">
                                        <td class="text-left">{{ $loop->iteration }}</td>
                                        <td class="text-left">{{ $item->product->product_name }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ konversi_uang($item->price) }}</td>
                                        <td>{{ konversi_uang($item->total_price) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container-fluid mt-5 w-100">
                    <div class="row">
                        <div class="col-md-6 ml-auto">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Sub Total</td>
                                            <td class="text-right">{{ konversi_uang($invoice->payment_total) }}</td>
                                        </tr>
                                        <tr>
                                            <td>TAX</td>
                                            <td class="text-right">{{ konversi_uang($invoice->payment_discount) }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-800">Total</td>
                                            <td class="text-bold-800 text-right">
                                                {{ konversi_uang($invoice->payment_final) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
