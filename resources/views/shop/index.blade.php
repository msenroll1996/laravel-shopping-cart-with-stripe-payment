@extends('layouts.master')
@section('title')
    Shopping Cart
@endsection
@section('content')
    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2 >
            <strong>
                Hey! Welcome to Mahesh's Store
            </strong>
        </h2>
        <br>
        <a href="{{route('product.getProducts')}}"><button class="button large">View Products</button></a>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2>
            Mahesh&rsquo;s Latest Products
        </h2>
    </div>

    <!-- Latest SHirts -->
    <div class="row">
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="http://i.imgur.com/Mcw06Yt.png"/>
                    </a>
                </div>
                <a href="{{route('product.getProduct')}}">
                    <h3>
                        Kickin with Kraken Tee
                    </h3>
                </a>
                <h5>
                    $19.99
                </h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                </p>
            </div>
        </div>
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="http://i.imgur.com/Mcw06Yt.png"/>
                    </a>
                </div>
                <a href="#">
                    <h3>
                        Kickin with Kraken Tee
                    </h3>
                </a>
                <h5>
                    $19.99
                </h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                </p>
            </div>
        </div>
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="http://i.imgur.com/Mcw06Yt.png"/>
                    </a>
                </div>
                <a href="#">
                    <h3>
                        Kickin with Kraken Tee
                    </h3>
                </a>
                <h5>
                    $19.99
                </h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                </p>
            </div>
        </div>
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="http://i.imgur.com/Mcw06Yt.png"/>
                    </a>
                </div>
                <a href="#">
                    <h3>
                        Kickin with Kraken Tee
                    </h3>
                </a>
                <h5>
                    $19.99
                </h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                </p>
            </div>
        </div>
    </div>
    <br>
    {{--@if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            </div>
        </div>
     @endif
    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{$product->imagePath}}" class="image-responsive">
                    <div class="caption">
                        <h3>{{$product->title}}</h3>
                        <p class="description">{{$product->description}}</p>
                        <div class="clearfix">
                            <div class="price pull-left">${{$product->price}}</div>
                            <button id="{{$product->id}}" route="{{route('product.addToCart')}}" onclick = "add_to_cart({{$product->id}})" class="btn btn-success pull-right add-cart" >Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endforeach--}}
@endsection
{{--@section('scripts')
    <script type="text/javascript" src="{{asset('src/js/add-cart.js')}}"></script>
@endsection--}}
