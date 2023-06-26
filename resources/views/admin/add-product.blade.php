<x-layout2>
<div class="tab-pane fade" tabindex="0" id="addproductpane">
    <div class="main-dashboard">
        <div class="logo d-flex justify-content-between p-3">
            <!-- <img src="../images/couture-logo.jpg" alt="Couture Logo" width="30" height="30"> -->
            <div class="add-product-heading px-3">
                <p><i class="fa-solid fa-plus text-warning"></i>Add Products</p>
            </div>        
        </div>
        <form id="addproductForm" action="/admin/add" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="p-3 d-flex align-items-center flex-column">
                <input type="text" name="itemtype" id="itemtype" class="form-control w-50 mb-3" placeholder="Item Type"value="{{old('itemtype')}}">
                <br>
                @error('itemtype')
                    <p style="color: red">{{$message}}</p>
                @enderror

                <input type="text" name="productname" id="productname" class="form-control w-50 mb-3" placeholder="Product Name" value="{{old('productname')}}">
                <br>
                @error('productname')
                    <p style="color: red">{{$message}}</p>
                @enderror

                <input type="text" name="price" id="price" class="form-control w-50 mb-3" placeholder="Product Price" value="{{old('price')}}">
                <br>
                @error('price')
                    <p style="color: red">{{$message}}</p>
                @enderror

                <input type="text" name="stock" id="stock" class="form-control w-50 mb-3" placeholder="Product Stocks" value="{{old('stock')}}">
                <br>
                @error('stock')
                    <p style="color: red">{{$message}}</p>
                @enderror
                
                <input type="file" name="image" id="image">
                <br>
            </div>
            <button type="submit">Add Product</button>
        </form>
    </div>
    <div class="add-product-heading px-3">
        <a href="/admin" style="text-decoration: none;">Back Dashboard</a>
    </div>
    <div class="table-container">
        <x-flash-message />
        <table id="dashboard-table">
            <thead>
                <tr>
                    <th>Item Type</th>
                    <th>Product Name</th>
                    <th>Stocks</th>
                    <th>Price</th>
                    <th>Date Created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="displayallProduct">
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->itemtype}}</td>
                    <td>{{$product->productname}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->created_at}}</td>
                    <td><button class="active"><a href="/admin/{{$product->id}}/edit-product" style="text-decoration: none; color:white">Edit</a></button>
                        <button class="blocked"><a href="/admin/{{$product->id}}/delete-product" style="text-decoration: none; color:white">Delete</a></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- End of dashboard table -->
    </div>
</div>
</x-layout2>