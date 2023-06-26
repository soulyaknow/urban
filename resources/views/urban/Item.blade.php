<x-product-layout>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="container bootdey">
    <div class="col-md-3">
        <section class="panel">
            <div class="panel-body">
                <input type="text" placeholder="Keyword Search" class="form-control" />
            </div>
        </section>
        <section class="panel">
            <header class="panel-heading">
                Category
            </header>
            <div class="panel-body">
                <ul class="nav prod-cat">
                    <li>
                        <a href="#" class="active"><i class="fa fa-angle-right"></i> Dress</a>
                        <ul class="nav">
                            <li class="active"><a href="#">- Shirt</a></li>
                            <li><a href="#">- Pant</a></li>
                            <li><a href="#">- Shoes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Bags &amp; Purses</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Beauty</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Coat &amp; Jacket</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Jeans</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Jewellery</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Watches</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Accessories</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="col-md-9">
        <section class="panel">
            <div class="panel-body">
                <div class="pull-right">
                    <ul class="pagination pagination-sm pro-page-list">
                        <li><a href="/">Back</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="row product-list">
            <div class="col-md-4">
                @foreach ($products as $product)
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="{{$product->image ? asset('storage/'. $product->image) : asset('https://www.bootdey.com/image/250x220/FFB6C1/000000')}}" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>
                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">Product Name:{{$product->productname}}</a>
                        </h4>
                        <p class="stock">Stock:{{$product->stock}}</p>
                        <p class="price">Price:{{$product->price}}</p>
                        <span>Type:{{$product->itemtype}}</span>
                    </div>
                </section>
                @endforeach
            </div>
        </div>
    </div>
</div>
</x-product-layout>