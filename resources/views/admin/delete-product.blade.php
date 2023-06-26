<x-layout2>
    <form id="addproductForm" action="/admin/{{$product->id}}/delete" method="POST"> 
        @csrf
        @method('DELETE')
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
        <button type="submit">Delete</button>
    </form>
</x-layout2>