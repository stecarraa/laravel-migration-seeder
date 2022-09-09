@extends("layouts.mainContentLayout")

@section("main-content")

<ol>
    @forelse ($trains as $train)
    
   <li>
    The departure of train from : <strong>{{$train->where_from}} </strong> To :  <strong>{{$train->where_for}}</strong> is scheduled for : <strong>{{$train->departure}}</strong>
   </li>

@empty
    
    <p>No train found</p>

@endforelse
</ol>
@endsection