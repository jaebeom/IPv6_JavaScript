---
extends: _layouts.master
title: News
pagination:
    collection: news
    perPage: 10
---
@section('content')
<div id="news-list">
    <div class="row d-flex justify-content-end">
    <div class="col-md-4">
        <div class="input-group" id="searchbox">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-search"></i>
                </span>
            </div>
            <input type="text" class="search" placeholder=" Search...">
        </div>
        <div id="hits"></div>
    </div>
</div>
<ul class="list list-unstyled">
    @foreach ($pagination->items as $item)
        @include('_components.news-item')
    @endforeach
</ul>
 <div class="row justify-content-md-center">
    <ul class="pagination">
        @foreach ($pagination->pages as $pageNumber => $path)
            <li><a href="{{ $page->baseUrl }}{{ $path }}"
                class="{{ $pagination->currentPage == $pageNumber ? 'selected' : '' }}">
                {{ $pageNumber }}
            </a></li>
        @endforeach
    </ul>
</div>
@endsection
@push('scripts')
<script src="{{ mix('js/search.js', 'assets/build') }}"></script>
@endpush
@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7.1.1/themes/reset-min.css" integrity="sha256-JQ2nnTmybhOWSjfV3sa8mG0ZVhTCcORER4cyXc5HL10=" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7.1.1/themes/algolia-min.css" integrity="sha256-nkldBwBn2NQqRL1mod7BqHsJ6cEOn6u/ln6F/lI4CFo=" crossorigin="anonymous">
@endpush