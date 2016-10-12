@extends('main')

@section('title', '| Homepage')



@section('stylesheets')
  <link rel="stylesheet" type="text/css" href="styles.css">
@endsection

@section('content')
    <div class="row">
    <div class="col-md-12">
    <div class="jumbotron">
  <h1>Welcome to My Blog!</h1>
  <p class="lead">Thank you so much for visiting. This is my test webside built with Laravel.Please read my Popular Post!</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
</div> <!-- end of header .row -->

<div class="row">
<div class ="col-md-8">

@foreach($posts as $post)

<div class ="post">
<h3>{{ $post-> title}}</h3>
<p>{{ substr($post->body, 0, 300)}} {{ strlen($post->body) > 300 ? "..." : " "}}</p>
<a href="#" class="btn btn-primary">Read more</a>
</div>

<hr>

@endforeach




</div>
<div class = "col-md-3 col-md-offset=1">
<h2>Sidebar</h2>
</div>

<hr>


@endsection

@section('scripts')
<script>
confirm ('I loaded up som JS');
</script>
@endsection