<h1>Products</h1>

  @if (count($products) > 0 )
    <ul>
      @foreach ($products as $product)
      
      <li>{{$product->name}}</li>
      
      @endforeach
    </ul>
      <a href="/categories">Return</a>
    
  @else
    <h5>No categories avaliable</h5>  
  @endif

{{-- @endsection --}}

