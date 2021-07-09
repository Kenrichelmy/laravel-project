
@extends('base')                                                              @section('contenu')


<div class="container">

<div class="col-sm-8">
      <h2>{{ $show->title }}</h2>
      <h5>Title description, Dec 7, 2017</h5>

<div class="container">
<img class="mx-auto d-block" src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuec
taoIC3Eg2NmcMj1gw4i2FLV6Fb3wyDFtdZ3i_sldmxN2he&s" alt="Card image">
</div>
      <br>
      <p> {{ $show->content }} </p>


<a href="/downloadstore" class="btn btn-primary btn-block">Telecharger</a>

</div>
      <br>

@endsection
