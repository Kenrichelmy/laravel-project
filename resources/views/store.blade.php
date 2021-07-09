


@extends('base')

@section('description')

@foreach ($store as $storing)
 <div class="list-group">
  <a href="{{ route('store.show',['id'=>$storing->id]) }}" class="list-group-item list-group-item-action">{{ $storing->title }}</a>

</div> 


@endforeach

@endsection
