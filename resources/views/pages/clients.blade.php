@extends('layouts.app')

@section('title', 'Clients | GUF Agency Ltd')
@section('description', 'GUF Agency Ltd serves businesses, NGOs, religious bodies, financial institutions, and corporations across Uganda.')

@section('content')

<section class="page-hero">
    <div class="container page-hero-grid">
        <div>
            <div class="chip"><i class="fa-solid fa-building-user"></i> Our Clients</div>
            <h1>Trusted by Businesses &amp; Institutions</h1>
            <p class="lead">We serve a diverse range of clients across Uganda — from corporations and NGOs to government bodies, financial institutions, and religious organisations.</p>
            <div class="btn-row">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane"></i> Become a Client</a>
                <a href="{{ route('services') }}" class="btn btn-ghost-light btn-lg">Our Services</a>
            </div>
        </div>
        <div>
            <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Business professionals in a meeting" loading="lazy">
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header text-center">
            <div class="chip"><i class="fa-solid fa-list-check"></i> Categories Served</div>
            <h2>Who We Work With</h2>
            <div class="divider divider-center"></div>
            <p class="lead">GUF Agency serves clients across industry sectors and institution types throughout Uganda.</p>
        </div>
        <div class="client-grid">
            <div class="client-tile"><i class="fa-solid fa-building"></i> Corporations &amp; Companies</div>
            <div class="client-tile"><i class="fa-solid fa-earth-africa"></i> International NGOs &amp; Non-profits</div>
            <div class="client-tile"><i class="fa-solid fa-landmark"></i> Government Bodies &amp; Parastatals</div>
            <div class="client-tile"><i class="fa-solid fa-university"></i> Financial Institutions</div>
            <div class="client-tile"><i class="fa-solid fa-hands-praying"></i> Religious Organisations</div>
            <div class="client-tile"><i class="fa-solid fa-truck-moving"></i> Logistics &amp; Distribution Firms</div>
            <div class="client-tile"><i class="fa-solid fa-helmet-safety"></i> Construction &amp; Engineering Companies</div>
            <div class="client-tile"><i class="fa-solid fa-shop"></i> SMEs &amp; Small Businesses</div>
            <div class="client-tile"><i class="fa-solid fa-seedling"></i> Agricultural Enterprises</div>
            <div class="client-tile"><i class="fa-solid fa-user-tie"></i> High-Value Individual Asset Owners</div>
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container">
        <div class="grid-2" style="gap:2rem;align-items:center;">
            <div>
                <div class="chip"><i class="fa-solid fa-star"></i> Our Track Record</div>
                <h2>Growing Client Base Since 2023</h2>
                <div class="divider"></div>
                <p>Since incorporation in 2023, GUF Agency has quickly established a reputation for excellence in the Ugandan insurance market. Our 10+ active clients trust us with their insurance program management, from policy placement through to claims advocacy.</p>
                <ul class="list-check" style="margin-top:1rem;">
                    <li><i class="fa-solid fa-check"></i>Dedicated account management for every client</li>
                    <li><i class="fa-solid fa-check"></i>Transparent reporting and renewal reminders</li>
                    <li><i class="fa-solid fa-check"></i>Responsive support for policy queries and claims</li>
                </ul>
            </div>
            <div class="grid-2" style="gap:1rem;">
                <div class="card" style="text-align:center;padding:1.75rem 1rem;">
                    <div style="font-size:2.5rem;font-weight:800;color:var(--brand);">10+</div>
                    <div style="font-size:.9rem;color:var(--t-muted);margin-top:.25rem;">Active Clients</div>
                </div>
                <div class="card" style="text-align:center;padding:1.75rem 1rem;">
                    <div style="font-size:2.5rem;font-weight:800;color:var(--brand);">14+</div>
                    <div style="font-size:.9rem;color:var(--t-muted);margin-top:.25rem;">Products Available</div>
                </div>
                <div class="card" style="text-align:center;padding:1.75rem 1rem;">
                    <div style="font-size:2.5rem;font-weight:800;color:var(--brand);">2023</div>
                    <div style="font-size:.9rem;color:var(--t-muted);margin-top:.25rem;">Year Incorporated</div>
                </div>
                <div class="card" style="text-align:center;padding:1.75rem 1rem;">
                    <div style="font-size:2.5rem;font-weight:800;color:var(--brand);">IRA</div>
                    <div style="font-size:.9rem;color:var(--t-muted);margin-top:.25rem;">Licensed &amp; Regulated</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container cta-inner">
        <h2>Join Our Growing Client Portfolio</h2>
        <p>Whether you're a business, institution, or organisation — we have a coverage solution designed for your needs.</p>
        <div class="btn-row">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane"></i> Get in Touch</a>
            <a href="{{ route('products') }}" class="btn btn-ghost-light btn-lg">Browse Products</a>
        </div>
    </div>
</section>

@endsection
