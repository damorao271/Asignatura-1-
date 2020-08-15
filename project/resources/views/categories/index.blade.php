<h1>Categories</h1>

  @if (count($categories) > 0 )
    <ul>
      @foreach ($categories as $category)
      <a href="/categories/{{$category->id}}">
      
        <li>{{$category->title}}</li>
      
      @endforeach
    </ul>
      
  @else
    <h5>No categories avaliable</h5>  
  @endif

{{-- @endsection --}}

