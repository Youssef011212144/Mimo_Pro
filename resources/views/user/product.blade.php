<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest Products</h2>
            <a href="products.html">login test <i class="fa fa-angle-right"></i></a>
          </div>

         
        </div>
        @foreach($data as $product)
    <div class="col-md-4">
        <div class="product-item">
            <img height="400px" width="200px" src="/productimage/{{ $product->image }}" alt="">
            <div class="down-content">
                <a href="#"><h4>{{ $product->title }}</h4></a>
                <h6 class="product-price">${{ $product->price }}</h6>
                <p>{{ $product->description }}</p>
                
                <form action="{{ url('addcart', $product->id) }}" method="post" class="add-to-cart-form" style="display: none;">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary minus-btn" type="button" data-product-id="{{ $product->id }}">-</button>
                        </div>
                        <input type="number" value="1" min="1" class="form-control quantity-input" name="quantity" data-product-id="{{ $product->id }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary plus-btn" type="button" data-product-id="{{ $product->id }}">+</button>
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach


        
    
              
          
<div  class="d-flex justify-content-center">
  {!! $data->links() !!}
</div>
      </div>
    </div>
  </div>