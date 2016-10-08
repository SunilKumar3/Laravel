@extends('main')

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
<div class ="post">
<h3>Post Title</h3>
<p>Lorem ipsum dolor sit amet, justo metus morbi a est blandit urna, tortor integer rhoncus sed sit tortor, lectus ornare nullam ac, tortor metus amet ut nibh. Aliquam a sit mollis amet lorem, porta enim wisi nibh, vehicula odio ut proin. At eu, massa aliquam laoreet, neque amet per ullamcorper maecenas elit suspendisse.</p>
<a href="#" class="btn btn-primary">Read more</a>
</div>

<hr>


<div class ="post">
<h3>Post Title</h3>
<p>Lorem ipsum dolor sit amet, justo metus morbi a est blandit urna, tortor integer rhoncus sed sit tortor, lectus ornare nullam ac, tortor metus amet ut nibh. Aliquam a sit mollis amet lorem, porta enim wisi nibh, vehicula odio ut proin. At eu, massa aliquam laoreet, neque amet per ullamcorper maecenas elit suspendisse.</p>
<a href="#" class="btn btn-primary">Read more</a>
</div>

<hr>


<div class ="post">
<h3>Post Title</h3>
<p>Lorem ipsum dolor sit amet, justo metus morbi a est blandit urna, tortor integer rhoncus sed sit tortor, lectus ornare nullam ac, tortor metus amet ut nibh. Aliquam a sit mollis amet lorem, porta enim wisi nibh, vehicula odio ut proin. At eu, massa aliquam laoreet, neque amet per ullamcorper maecenas elit suspendisse.</p>
<a href="#" class="btn btn-primary">Read more</a>
</div>

<hr>

</div>
<div class = "col-md-3 col-md-offset=1">
<h2>Sidebar</h2>
</div>

<hr>


@endsection

    