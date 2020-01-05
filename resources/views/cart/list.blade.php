@extends ('layouts.front')

@section ('header-style')
<style>
    body.cart{
        position: relative;
    }
</style>
@endsection

@section ('content')
<section class="shopping-cart--wrapper">
    <div class="container-fluid">
       <div class="shopping-cart--grids">
          <!-- Left Cart Items -->
          <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
             <div class="shopping-cart--items">
                <!-- Shopping cart table -->
                <div class="table-responsive">
                    <?php $totalAmount = 0; ?>
                   <table class="table">
                      <thead>
                         <tr>
                            <th scope="col" class="border-0 bg-light">
                               <div class="p-2 px-3 text-uppercase">Product</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                               <div class="py-2 text-uppercase">Price</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                               <div class="py-2 text-uppercase">Quantity</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                               <div class="py-2 text-uppercase">Amount</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                               <div class="py-2 text-uppercase">Remove</div>
                            </th>
                         </tr>
                      </thead>
                      <tbody>
                         <!-- Product 01 -->
                         @foreach ($cartItems as $cartItem)
                         <tr>
                            <th scope="row" class="border-0">
                               <div class="p-2">
                                  <img src="{{ asset('storage/product/'.$cartItem->product->product_image_primary->image) }}" alt="" width="70">
                                  <div class="ml-3 d-inline-block align-middle">
                                     <h5>
                                        <a href="#" class="text-dark d-inline-block align-middle">
                                            {{ $cartItem->product->name }}
                                        </a>
                                     </h5>
                                     <!-- <span>Category: Salon</span> -->
                                  </div>
                               </div>
                            </th>
                            <td class="border-0 align-middle">
                                <strong><span>&#8377;</span>{{ $cartItem->product->sale_price }}</strong>
                            </td>
                            <td class="border-0 align-middle">
                                <strong>{{ $cartItem->quantity }}</strong>
                            </td>
                            <td class="border-0 align-middle">
                                <strong><span>&#8377;</span>{{ $cartItem->quantity*$cartItem->product->sale_price }}</strong>
                            </td>
                            <td class="border-0 align-middle">
                                <form action="{{ route('cartItemDelete',[$cartItem->product->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn text-dark"><i class="fa fa-trash"></i></button>
                                </form>
                                {{-- <a href="#" class="text-dark"><i class="fa fa-trash"></i></a> --}}
                            </td>
                            <?php $totalAmount += $cartItem->quantity*$cartItem->product->sale_price; ?>
                         </tr>
                         @endforeach
                         @foreach ($cookieCartItems as $key => $cartItem)
                         <tr>
                            <th scope="row" class="border-0">
                               <div class="p-2">
                                  <img src="{{ asset('storage/product/'.$cartItem['product']->product_image_primary->image) }}" alt="" width="70">
                                  <div class="ml-3 d-inline-block align-middle">
                                     <h5>
                                        <a href="#" class="text-dark d-inline-block align-middle">
                                            {{ $cartItem['product']->name }}
                                        </a>
                                     </h5>
                                     <!-- <span>Category: Salon</span> -->
                                  </div>
                               </div>
                            </th>
                            <td class="border-0 align-middle">
                                <strong><span>&#8377;</span>{{ $cartItem['product']->sale_price }}</strong>
                            </td>
                            <td class="border-0 align-middle">
                                <strong>{{ $cartItem['quantity'] }}</strong>
                            </td>
                            <td class="border-0 align-middle">
                                <strong><span>&#8377;</span>{{ $cartItem['quantity']*$cartItem['product']->sale_price }}</strong>
                            </td>
                            <td class="border-0 align-middle">
                                <form action="{{ route('cartItemDelete',[$cartItem['product']->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn text-dark"><i class="fa fa-trash"></i></button>
                                </form>
                                {{-- <a href="#" class="text-dark"><i class="fa fa-trash"></i></a> --}}
                            </td>
                            <?php $totalAmount += $cartItem['quantity']*$cartItem['product']->sale_price; ?>
                         </tr>
                         @endforeach

                      </tbody>
                   </table>
                </div>
             </div>
          </div>

          <!-- Right Cart Values -->
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
             <div class="shopping-cart--values">
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                   <div class="p-4">

                      <ul class="list-unstyled mb-4">
                        <li class="d-flex justify-content-between py-3 border-bottom">
                            <strong class="text-muted">Total Items </strong>
                            <strong>{{ $totalCartItems }}</strong>
                        </li>
                        <li class="d-flex justify-content-between py-3 border-bottom">
                            <strong class="text-muted">Order Total </strong>
                            <strong><span>&#8377;</span>{{$totalAmount}}</strong>
                        </li>

                      </ul>
                      <a href="{{ route('checkout') }}" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</section>
@endsection
