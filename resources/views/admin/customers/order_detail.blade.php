@extends('layouts.backend')

@section ('header-css')
<link href="<?php echo url('/'); ?>/themes/metronic/theme/default/demo1/dist/assets/css/pages/invoices/invoice-2.css" rel="stylesheet" type="text/css" />
@endsection


@section('content')
<section class="order-summery--wrapper">
   <div class="container">
      <div class="row">
        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">

                    <h3 class="kt-portlet__head-title">
                        Order No.<br>
                        #{{ $order->order_no }}
                    </h3>

                </div>

                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Order Amount<br>
                        {{ $order->order_amount }}
                    </h3>
                    <div class="kt-portlet__head-wrapper"></div>
                </div>
            </div>
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-invoice-2">
                    <div class="kt-invoice__head" style="padding: 0px 0;">
                        <div class="kt-invoice__container">
                            <div class="kt-invoice__items" style="border-top:none; margin-top:0px">
                                <div class="kt-invoice__item">
                                    <span class="kt-invoice__subtitle">Shipping Address</span>
                                    <span class="kt-invoice__text">{{ $order->ship_name }}</span>
                                    <span class="kt-invoice__text">{{ $order->ship_mobile }}</span>
                                    <span class="kt-invoice__text">{{ $order->ship_address }}</span>
                                    <span class="kt-invoice__text">{{ $order->ship_pincode }}</span>
                                    <span class="kt-invoice__text">{{ $order->ship_landmark }}</span>
                                    <span class="kt-invoice__text">{{ $order->ship_state }}</span>
                                </div>
                                <div class="kt-invoice__item">

                                </div>
                                <div class="kt-invoice__item">
                                    <span class="kt-invoice__subtitle">Billing Address</span>
                                    <span class="kt-invoice__text">{{ $order->bill_name }}</span>
                                    <span class="kt-invoice__text">{{ $order->bill_mobile }}</span>
                                    <span class="kt-invoice__text">{{ $order->bill_address }}</span>
                                    <span class="kt-invoice__text">{{ $order->bill_pincode }}</span>
                                    <span class="kt-invoice__text">{{ $order->bill_landmark }}</span>
                                    <span class="kt-invoice__text">{{ $order->bill_state }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-invoice__body">
                        <div class="kt-invoice__container">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Item</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order->OrderRows as $OrderRow)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('storage/product/'.$OrderRow->product->product_image_primary->image) }}" width="50px">
                                            </td>
                                            <td>{{$OrderRow->product->name}}</td>
                                            <td>{{$OrderRow->quantity}}</td>
                                            <td>{{$OrderRow->price}}</td>
                                            <td class="kt-font-danger kt-font-lg">{{$OrderRow->amount}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="kt-invoice__footer">
                        <div class="kt-invoice__container">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ORDER NO.</th>
                                            <th>PAYMENT MODE</th>
                                            <th>TOTAL AMOUNT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $order->order_no }}</td>
                                            <td>{{ $order->payment_mode }}</td>
                                            <td class="kt-font-danger kt-font-xl kt-font-boldest">{{ $order->order_amount }}</td>
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
   </div>
</section>
@endsection
