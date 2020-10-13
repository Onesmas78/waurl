@extends('layouts.frontend')

@section('css_class', 'frontend home')

@section('content')

<div class="container home pt-5">
<main role="main" class="inner cover">
  <h1 class="cover-heading">Brief description.</h1>
  <p class="lead">A collective way for WhatsApp groups to market products on their WhatsApp status and WhatsApp business account. Group members would uniformly broadcast a business on their status and also catalogue the business on their WhatsApp business account. The ideal WhatsApp target groups are community youth based WhatsApp groups but not limited to. </p>

  <h1 class="cover-heading">Value proposition.</h1>

  <p class="lead">According to Statista in 2019, Q1, 500 million WhatsApp users viewed their status in a single day and 2 billion is the current number of monthly active users yet WhatsApp is private and not in the business of advertising. WhatsApp Classifieds will offer simple advertising solution to small medium sized to corporate businesses. </p>

  <p class="lead">WhatsApp Classifieds is a community youth based project partnering with different community institutions to help offer an income for its participants from online WhatsApp advertising. </p>

  <p class="lead  text-center">
  <a href="{{ route('login') }}" class="btn btn-lg btn-secondary">@lang('Join Us')</a>
  </p>
</main>
</div>



@endsection