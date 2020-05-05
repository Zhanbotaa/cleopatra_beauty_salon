@extends('layouts.frontend')

@section('title')
	Contact

@endsection


@section('content')
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootst.." integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootst.." integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css..">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.." integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstr.." integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="jquery-3.4.1.min.js"></script>

<script >
$(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});
</script>

</br>
</br>
</head>
</br>
</br>
<!— Grid row —>
<div class="row">

<!— Grid column —>
<div class="col-md-12 d-flex justify-content-center mb-5">

 <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">Все</button>
<button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Макияж</button>
<button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Прически</button>


</div>
<!— Grid column —>

</div>
<!— Grid row —>

<!— Grid row —>
<div class="gallery" id="gallery">

<!— Grid column —>
<div class="mb-3 pics animation all 2">
<img class="img-fluid" src="{{asset('frontend/image/hair.jpg')}}" alt="Card image cap">
</div>
<!— Grid column —>

<!— Grid column —>
<div class="mb-3 pics animation all 1">
<img class="img-fluid" src="{{asset('frontend/image/22.jpg')}}" alt="Card image cap">
</div>
<!— Grid column —>

<!— Grid column —>

<!— Grid column —>

<!— Grid column —>
<div class="mb-3 pics animation all 2">
<img class="img-fluid" src="{{asset('frontend/image/23.jpg')}}" alt="Card image cap">
</div>
<!— Grid column —>

<!— Grid column —>
<div class="mb-3 pics animation all 2">
<img class="img-fluid" src="{{asset('frontend/image/res.jpg')}}" alt="Card image cap">
</div>
<!— Grid column —>

<!— Grid column —>
<div class="mb-3 pics animation all 1">
<img class="img-fluid" src="{{asset('frontend/image/mac.jpg')}}" alt="Card image cap">
</div>
<!— Grid column —>

</div>

</br>
<!— Grid row —>
<div class="gallery" id="gallery">

<!— Grid column —>
<div class="mb-3 pics animation all 2">
<img class="img-fluid" src="{{asset('frontend/image/nail2.jpg')}}"alt="Card image cap">
</div>
<!— Grid column —>

<!— Grid column —>
<div class="mb-3 pics animation all 1">
<img class="img-fluid" src="{{asset('frontend/image/mac2.jpg')}}" alt="Card image cap">
</div>
<!— Grid column —>

<!— Grid column —>
<div class="mb-3 pics animation all 1">
<img class="img-fluid" src="{{asset('frontend/image/hair2.jpg')}}"alt="Card image cap">
</div>
<!— Grid column —>

<!— Grid column —>
<div class="mb-3 pics animation all 2">
<img class="img-fluid" src="{{asset('frontend/image/24.jpg')}}" alt="Card image cap">
</div>
<!— Grid column —>

<!— Grid column —>
<div class="mb-3 pics animation all 2">
<img class="img-fluid" src="{{asset('frontend/image/bro.jpg')}}" alt="Card image cap">
</div>
<!— Grid column —>

<!— Grid column —>
<div class="mb-3
 
pics animation all 1">
<img class="img-fluid" src="{{asset('frontend/image/25.jpg')}}" alt="Card image cap">
</div>
<!— Grid column —>

</div>
<!— Grid row —>

<style>
.gallery {
-webkit-column-count: 3;
-moz-column-count: 3;
column-count: 3;
-webkit-column-width: 33%;
-moz-column-width: 33%;
column-width: 33%; }
.gallery .pics {
-webkit-transition: all 350ms ease;
transition: all 350ms ease; }
.gallery .animation {
-webkit-transform: scale(1);
-ms-transform: scale(1);
transform: scale(1); }

max-width: 450px {
.gallery {
-webkit-column-count: 1;
-moz-column-count: 1;
column-count: 1;
-webkit-column-width: 100%;
-moz-column-width: 100%;
column-width: 100%;
}
}

max-width: 400px {
.btn.filter {
padding-left: 1.1rem;
padding-right: 1.1rem;
}
}

.photo_our{
font-family: 'Bangers', cursive;
}
</style>



@section('scripts')
	

@endsection
