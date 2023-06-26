<x-layout2>
    <div class="tab-pane fade" tabindex="0" id="addproductpane">
        <div class="main-dashboard">
            <div class="logo d-flex justify-content-between p-3">
                <!-- <img src="../images/couture-logo.jpg" alt="Couture Logo" width="30" height="30"> -->
                <div class="add-product-heading px-3">
                    <p><i class="fa-solid fa-plus text-warning"></i>Edit Products</p>
                </div>        
            </div>
            <form id="addproductForm" action="/admin/{{$product->id}}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="p-3 d-flex align-items-center flex-column">
                    <input type="text" name="itemtype" id="itemtype" class="form-control w-50 mb-3" placeholder="Item Type" value="{{$product->itemtype}}">
                    <br>
                    @error('itemtype')
                        <p style="color: red">{{$message}}</p>
                    @enderror
    
                    <input type="text" name="productname" id="productname" class="form-control w-50 mb-3" placeholder="Product Name" value="{{$product->productname}}">
                    <br>
                    @error('productname')
                        <p style="color: red">{{$message}}</p>
                    @enderror
    
                    <input type="text" name="price" id="price" class="form-control w-50 mb-3" placeholder="Product Price" value="{{$product->price}}">
                    <br>
                    @error('price')
                        <p style="color: red">{{$message}}</p>
                    @enderror
    
                    <input type="text" name="stock" id="stock" class="form-control w-50 mb-3" placeholder="Product Stocks" value="{{$product->stock}}">
                    <br>
                    @error('stock')
                        <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit">Save</button>
            </form>
        </div>
        <div class="add-product-heading px-3">
            <a href="/admin" style="text-decoration: none;">Back Dashboard</a>
        </div>
    </div>
</x-layout2>