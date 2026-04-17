<header class="site-header" id="siteHeader">
    <div class="container hdr-inner">

        <a href="{{ route('home') }}" class="site-logo" aria-label="GUF Agency Ltd – Home">
            <img
                src="{{ asset('images/branding/guf-logo.jpg') }}"
                alt="GUF Agency Ltd"
                class="site-logo-image"
                loading="eager"
            >
        </a>

        <nav class="primary-nav" id="primaryNav" aria-label="Primary navigation">
            @php
                $navLinks = [
                    ['name' => 'Home',     'route' => 'home'],
                    ['name' => 'About',    'route' => 'about'],
                    ['name' => 'Services', 'route' => 'services'],
                    ['name' => 'Products', 'route' => 'products'],
                    ['name' => 'Partners', 'route' => 'partners'],
                    ['name' => 'Clients',  'route' => 'clients'],
                    ['name' => 'Contact',  'route' => 'contact'],
                ];
            @endphp
            @foreach ($navLinks as $link)
                <a
                    href="{{ route($link['route']) }}"
                    class="nav-link{{ request()->routeIs($link['route']) ? ' is-active' : '' }}"
                >{{ $link['name'] }}</a>
            @endforeach
        </nav>

        <div class="hdr-end">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-sm">
                <i class="fa-solid fa-paper-plane"></i> Get a Quote
            </a>
            <button
                class="hamburger"
                id="hamburgerBtn"
                aria-label="Toggle navigation"
                aria-expanded="false"
                aria-controls="primaryNav"
            >
                <span></span><span></span><span></span>
            </button>
        </div>

    </div>
</header>

<script>
    (function () {
        var btn = document.getElementById('hamburgerBtn');
        var nav = document.getElementById('primaryNav');
        var hdr = document.getElementById('siteHeader');

        if (btn && nav) {
            btn.addEventListener('click', function () {
                var open = nav.classList.toggle('open');
                btn.classList.toggle('open', open);
                btn.setAttribute('aria-expanded', String(open));
            });
            document.addEventListener('click', function (e) {
                if (!hdr.contains(e.target)) {
                    nav.classList.remove('open');
                    btn.classList.remove('open');
                    btn.setAttribute('aria-expanded', 'false');
                }
            });
        }

        if (hdr) {
            function onScroll() { hdr.classList.toggle('scrolled', window.scrollY > 10); }
            window.addEventListener('scroll', onScroll, { passive: true });
            onScroll();
        }
    })();
</script>
