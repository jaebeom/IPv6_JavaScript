<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="topnav">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a href="/index.html"><img src="/imgs/logo_transparent.png" alt="IPv6 Ready Logo" class="nav-logo"></a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{ $page->is_active('index') }}" href="/index.html">Home</a>
            </li>
            <li class="nav-item {{ $page->is_active('about') }}">
                <a class="nav-link" href="/about.html">About</a>
            </li>
            <li class="nav-item {{ $page->is_active('apply') }}">
                <a class="nav-link" href="/apply.html">Apply</a>
            </li>
            <li class="nav-item {{ $page->is_active('resources') }}">
                <a class="nav-link" href="/resources.html">Resources</a>
            </li>
            <li class="nav-item {{ $page->is_active('news') }}">
                <a class="nav-link" href="/news.html">News</a>
            </li>
            <li class="nav-item {{ $page->is_active('faq') }}">
                <a class="nav-link" href="/faq.html">FAQ</a>
            </li>
            <li class="nav-item {{ $page->is_active('contact') }}">
                <a class="nav-link" href="/contact.html">Contact</a>
            </li>
            <li>
                <a class="nav-link" href= "https://www.ipv6ready.org/db/index.php/public/?o=4">Approved Products</a>
            </li>
        </ul>
    </div>
</nav>
