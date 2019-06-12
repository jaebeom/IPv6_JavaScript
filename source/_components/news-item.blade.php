<li class="news-item" id="{{ $item->_meta->filename }}">
    <h3 class="news-title">{{ date('Y-m-d', $item->post_date) }} | {{ $item->title }}</h3>
    <hr>
    {!! $item->getContent() !!}
</li>