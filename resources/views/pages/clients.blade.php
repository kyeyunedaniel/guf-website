@extends('layouts.app')
@section('title', 'Clients | GUF Agency Ltd')
@section('description', 'GUF Agency Ltd serves businesses, NGOs, religious bodies, financial institutions, and corporations across Uganda.')
@section('content')

<section class="page-hero-light">
    <div class="container">
        <div class="phl-grid">
            <div>
                <div class="chip" style="margin-bottom:1rem;"><i class="fa-solid fa-building-user"></i> Our Clients</div>
                <h1>Trusted by Businesses &amp; Institutions</h1>
                <p class="phl-lead">We serve a diverse range of clients across Uganda — from corporations and NGOs to government bodies, financial institutions, and religious organisations.</p>
                <div class="btn-row">
                    <a href="{{ route('contact') }}" class="btn-teal"><i class="fa-solid fa-paper-plane"></i> Become a Client</a>
                    <a href="{{ route('services') }}" class="btn-outline-navy">Our Services <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="phl-img">
                <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Business professionals" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="section section-white" style="padding:88px 0;">
    <div class="container">
        <div class="section-header text-center" style="margin-bottom:3rem;">
            <div class="chip" style="margin:0 auto .85rem;"><i class="fa-solid fa-list-check"></i> Categories Served</div>
            <h2 style="color:#0d1f3c;">Who We Work With</h2>
            <div class="divider divider-center"></div>
            <p class="lead" style="color:#546e8a;">GUF Agency serves clients across industry sectors and institution types throughout Uganda.</p>
        </div>
        <div class="client-grid" style="margin-bottom:4rem;">
            @php $clients=[['building','Corporations & Companies'],['earth-africa','International NGOs & Non-profits'],['landmark','Government Bodies & Parastatals'],['university','Financial Institutions'],['hands-praying','Religious Organisations'],['truck-moving','Logistics & Distribution Firms'],['helmet-safety','Construction & Engineering Companies'],['shop','SMEs & Small Businesses'],['seedling','Agricultural Enterprises'],['user-tie','High-Value Individual Asset Owners']]; @endphp
            @foreach($clients as $c)
            <div class="client-tile">
                <i class="fa-solid fa-{{ $c[0] }}"></i> {{ $c[1] }}
            </div>
            @endforeach
        </div>

        <div class="grid-2" style="gap:3rem;align-items:center;">
            <div>
                <div class="chip" style="margin-bottom:1rem;"><i class="fa-solid fa-star"></i> Our Track Record</div>
                <h2 style="font-size:2.1rem;color:#0d1f3c;margin-bottom:.5rem;">Growing Client Base Since 2023</h2>
                <div class="divider"></div>
                <p style="color:#546e8a;font-size:.95rem;line-height:1.75;margin-bottom:.5rem;">Since incorporation in 2023, GUF Agency has quickly established a reputation for excellence in the Ugandan insurance market. Our 10+ active clients trust us with their insurance program management, from policy placement through to claims advocacy.</p>
                <ul class="check-list-teal">
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Dedicated account management for every client</li>
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Transparent reporting and renewal reminders</li>
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Responsive support for policy queries and claims</li>
                </ul>
            </div>
            <div class="grid-2" style="gap:1rem;">
                @php $metrics=[['10+','Active Clients'],['14+','Products Available'],['2023','Year Incorporated'],['IRA','Licensed & Regulated']]; @endphp
                @foreach($metrics as $m)
                <div style="background:#f7fbff;border:1.5px solid #e4eef8;border-radius:16px;padding:1.75rem 1rem;text-align:center;">
                    <div style="font-size:2.2rem;font-weight:800;color:var(--brand);line-height:1.1;">{{ $m[0] }}</div>
                    <div style="font-size:.82rem;color:#788fa8;margin-top:.25rem;font-weight:600;text-transform:uppercase;letter-spacing:.05em;">{{ $m[1] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<div class="cta-band">
    <h2>Join Our Growing Client Portfolio</h2>
    <p>Whether you're a business, institution, or organisation — we have a coverage solution designed for your needs.</p>
    <div class="cta-band-actions">
        <a href="{{ route('contact') }}" class="btn-white"><i class="fa-solid fa-paper-plane"></i> Get in Touch</a>
        <a href="{{ route('products') }}" class="btn-outline-white">Browse Products</a>
    </div>
</div>

@endsection
