<h1>Products</h1>

  @if (count($products) > 0 )
    <ul>
      @foreach ($products as $product)
      {{-- <a href="/{{$category->title}}"> --}}
      
        <li>{{$product->name}} </li>
      
      {{-- </a> --}}
      @endforeach
    </ul>
      
  @else
    <h5>No categories avaliable</h5>  
  @endif

{{-- @endsection --}}
