@extends('layout')

@section('title', 'Search Results')

@section('extra-css')

@endsection

@section('content')

@component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Search</span>
@endcomponent

<div class="search-container container">
    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum exercitationem sequi velit dolor nam aliquam consectetur voluptatem labore odio modi tenetur, fugit maiores atque id, doloremque odit sint rem. Vero.</div>
</div> <!-- end search-container -->

@endsection