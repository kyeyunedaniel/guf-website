@extends('layouts.app')
@section('title', 'About | GUF Agency Ltd')
@section('description', 'Learn about GUF Agency Ltd, a licensed corporate insurance agency incorporated in 2023 and IRA-regulated in Uganda.')
@section('content')

<section class="page-hero-light">
    <div class="container">
        <div class="phl-grid">
            <div>
                <div class="chip" style="margin-bottom:1rem;"><i class="fa-solid fa-building"></i> About Us</div>
                <h1>Licensed Corporate Insurance Advisory</h1>
                <p class="phl-lead">GUF Agency Ltd is a fully incorporated, IRA-licensed corporate insurance agency dedicated to delivering expert, unbiased advisory and end-to-end policy management across Uganda.</p>
                <div class="btn-row">
                    <a href="{{ route('contact') }}" class="btn-teal"><i class="fa-solid fa-paper-plane"></i> Get a Quote</a>
                    <a href="{{ route('services') }}" class="btn-outline-navy">Our Services <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="phl-img">
                <img src="{{ asset('images/illustrations/about-cartoon.svg') }}" alt="GUF Agency consultation cartoon illustration" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="section section-white" style="padding:80px 0;">
    <div class="container">
        <div class="grid-2" style="gap:2rem;align-items:start;">
            <article style="background:#f7fbff;border:1.5px solid #e4eef8;border-radius:20px;padding:2rem;">
                <div class="icon-box"><i class="fa-solid fa-landmark"></i></div>
                <h3 style="color:#0d1f3c;margin-bottom:.75rem;">Company Overview</h3>
                <p style="color:#546e8a;font-size:.95rem;line-height:1.75;">GUF Agency Ltd is a fully incorporated entity licensed and regulated by the Insurance Regulatory Authority of Uganda (IRA). Incorporated in 2023 and duly registered under the Companies Act with certification from the Uganda Registration Service Bureau (URSB).</p>
                <p style="color:#546e8a;font-size:.95rem;line-height:1.75;margin-bottom:0;">Our formal registration underscores our dedication to the highest standards of professionalism, integrity, transparency, and accountability.</p>
            </article>
            <article style="background:#f7fbff;border:1.5px solid #e4eef8;border-radius:20px;padding:2rem;">
                <div class="icon-box"><i class="fa-solid fa-scale-balanced"></i></div>
                <h3 style="color:#0d1f3c;margin-bottom:.75rem;">Independent Advisory Role</h3>
                <p style="color:#546e8a;font-size:.95rem;line-height:1.75;">As independent insurance agents, we work closely with each client to understand their unique risks and objectives. We provide unbiased advice on the best insurance companies and products to meet their specific needs.</p>
                <p style="color:#546e8a;font-size:.95rem;line-height:1.75;margin-bottom:0;">Our extensive network of top-tier insurance providers and in-depth industry knowledge enable us to negotiate competitive rates and terms for optimal coverage and value.</p>
            </article>
        </div>
    </div>
</section>

<section class="section section-light" style="padding:80px 0;">
    <div class="container">
        <div class="grid-2" style="gap:4rem;align-items:center;">
            <div>
                <div class="chip" style="margin-bottom:1rem;"><i class="fa-solid fa-users"></i> Our Approach</div>
                <h2 style="font-size:2.1rem;color:#0d1f3c;margin-bottom:.5rem;">Client-First, Always</h2>
                <div class="divider"></div>
                <p style="color:#546e8a;font-size:.95rem;line-height:1.75;margin-bottom:.5rem;">Our integrated approach delivers holistic solutions that protect our clients' interests. Our experienced team provides personalised service and expert advice for:</p>
                <ul class="check-list-teal">
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Businesses and commercial enterprises</li>
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Organizations and corporate firms</li>
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Government bodies and parastatals</li>
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Individual high-value asset owners</li>
                </ul>
                <div class="btn-row">
                    <a href="{{ route('leadership') }}" class="btn btn-outline">Leadership Message</a>
                    <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
            <div class="grid-2" style="gap:1rem;">
                @php $badges=[['certificate','IRA Licensed','Insurance Regulatory Authority'],['building','URSB Certified','Uganda Registration Service Bureau'],['handshake','Independent','Unbiased advisory always'],['calendar-check','Since 2023','Active in the Ugandan market']]; @endphp
                @foreach($badges as $b)
                <div style="background:#fff;border:1.5px solid #e4eef8;border-radius:16px;padding:1.5rem 1rem;text-align:center;">
                    <div style="font-size:1.75rem;margin-bottom:.5rem;color:var(--brand);"><i class="fa-solid fa-{{ $b[0] }}"></i></div>
                    <div style="font-weight:700;color:#0d1f3c;font-size:.95rem;">{{ $b[1] }}</div>
                    <div style="font-size:.78rem;color:#788fa8;margin-top:2px;">{{ $b[2] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<div class="cta-band">
    <h2>Ready to Work with a Licensed Insurance Expert?</h2>
    <p>Contact our team for a free consultation and tailored insurance review for your business.</p>
    <div class="cta-band-actions">
        <a href="{{ route('contact') }}" class="btn-white"><i class="fa-solid fa-paper-plane"></i> Get in Touch</a>
        <a href="{{ route('services') }}" class="btn-outline-white">View Services</a>
    </div>
</div>

@endsection
