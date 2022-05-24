@extends('layout.template')
@section('title', 'Home')


@section('content')
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-color: darkred;"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="{{asset('images/adit-riki.jpg')}}" alt="Image"/></a></div>
          <div class="h2 title">Muhamad Rizki Aditya</div>
          <p class="category text-white">IT Support Technician, Network Engineer</p>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="https://www.linkedin.com/in/muhamad-rizki-aditya-09a957209" target="_blank" rel="tooltip" title="My LinkedIn"><i class="fa fa-linkedin"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="https://t.me/adityaiz" target="_blank" rel="tooltip" title="My Telegram"><i class="fa fa-telegram"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="https://www.instagram.com/aditya.iz/" target="_blank" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection