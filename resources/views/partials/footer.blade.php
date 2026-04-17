<footer class="site-footer">
    <div class="footer-main">
        <div class="container footer-inner">

            <div>
                <a href="{{ route('home') }}" class="site-logo footer-logo" aria-label="GUF Agency Ltd – Home">
                    <img
                        src="{{ asset('images/branding/guf-logo.jpg') }}"
                        alt="GUF Agency Ltd"
                        class="site-logo-image site-logo-image--footer"
                        loading="lazy"
                    >
                </a>
                <p class="footer-tagline">Our Customers, Our Priority</p>
                <p class="footer-reg"><i class="fa-solid fa-certificate"></i> Licensed &amp; Regulated by IRA Uganda</p>
                <div class="footer-contact-list">
                    <a href="tel:+256772588426"><i class="fa-solid fa-phone"></i> +256 772 588 426</a>
                    <a href="tel:+256701588426"><i class="fa-solid fa-phone"></i> +256 701 588 426</a>
                    <a href="mailto:business@gufagency.com"><i class="fa-solid fa-envelope"></i> business@gufagency.com</a>
                    <span><i class="fa-solid fa-location-dot"></i> Plot 30 Conrad House, Jinja Road, Kampala</span>
                </div>
            </div>

            <div class="footer-links-col">
                <h4 class="footer-col-title">Company</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('leadership') }}">Leadership</a></li>
                    <li><a href="{{ route('vision-mission') }}">Vision &amp; Mission</a></li>
                    <li><a href="{{ route('clients') }}">Our Clients</a></li>
                </ul>
            </div>

            <div class="footer-links-col">
                <h4 class="footer-col-title">Services &amp; Products</h4>
                <ul>
                    <li><a href="{{ route('services') }}">Our Services</a></li>
                    <li><a href="{{ route('products') }}">Insurance Products</a></li>
                    <li><a href="{{ route('partners') }}">Partners</a></li>
                    <li><a href="{{ route('contact') }}">Get a Quote</a></li>
                </ul>
            </div>

            <div class="footer-links-col">
                <h4 class="footer-col-title">Legal &amp; Support</h4>
                <ul>
                    <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('cookie-policy') }}">Cookie Policy</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="footer-bar">
        <div class="container footer-bar-inner">
            <p>© {{ date('Y') }} GUF Agency Ltd. All rights reserved.</p>
            <div class="footer-legal-links">
                <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                <a href="{{ route('cookie-policy') }}">Cookie Policy</a>
            </div>
        </div>
    </div>
</footer>
