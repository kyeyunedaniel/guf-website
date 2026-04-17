@extends('layouts.app')

@section('title', 'About | GUF Agency Ltd')
@section('description', 'Learn about GUF Agency Ltd, a licensed corporate insurance agency incorporated in 2023 and IRA-regulated in Uganda.')

@section('content')

<section class="page-hero">
    <div class="container page-hero-grid">
        <div>
            <div class="chip"><i class="fa-solid fa-building"></i> About Us</div>
            <h1>Licensed Corporate Insurance Advisory</h1>
            <p class="lead">GUF Agency Ltd is a fully incorporated, IRA-licensed corporate insurance agency dedicated to delivering expert, unbiased advisory and end-to-end policy management across Uganda.</p>
            <div class="btn-row">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane"></i> Get a Quote</a>
                <a href="{{ route('services') }}" class="btn btn-ghost-light btn-lg">Our Services</a>
            </div>
        </div>
        <div>
            <img src="https://images.pexels.com/photos/3184357/pexels-photo-3184357.jpeg?auto=compress&cs=tinysrgb&w=1000" alt="GUF Agency Ltd professional consultation" loading="lazy">
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="grid-2" style="gap:2rem;align-items:start;">
            <article class="card">
                <div class="icon-box"><i class="fa-solid fa-landmark"></i></div>
                <h3>Company Overview</h3>
                <p>GUF Agency Ltd is a fully incorporated entity licensed and regulated by the Insurance Regulatory Authority of Uganda (IRA), operating under an insurance company. Incorporated in 2023 and duly registered under the Companies Act with certification from the Uganda Registration Service Bureau (URSB).</p>
                <p style="margin-bottom:0;">Our formal registration underscores our dedication to the highest standards of professionalism, integrity, transparency, and accountability.</p>
            </article>
            <article class="card">
                <div class="icon-box"><i class="fa-solid fa-scale-balanced"></i></div>
                <h3>Independent Advisory Role</h3>
                <p>As independent insurance agents, we work closely with each client to understand their unique risks and objectives. We provide unbiased advice on the best insurance companies and products to meet their specific needs.</p>
                <p style="margin-bottom:0;">Our extensive network of top-tier insurance providers and in-depth industry knowledge enable us to negotiate competitive rates and terms for optimal coverage and value.</p>
            </article>
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container">
        <div class="grid-2" style="gap:3rem;align-items:center;">
            <div>
                <div class="chip"><i class="fa-solid fa-users"></i> Our Approach</div>
                <h2>Client-First, Always</h2>
                <div class="divider"></div>
                <p>Our integrated approach delivers holistic solutions that protect our clients' interests. Our experienced team provides personalized service and expert advice for:</p>
                <ul class="list-check" style="margin-top:1rem;">
                    <li><i class="fa-solid fa-check"></i>Businesses and commercial enterprises</li>
                    <li><i class="fa-solid fa-check"></i>Organizations and corporate firms</li>
                    <li><i class="fa-solid fa-check"></i>Government bodies and parastatals</li>
                    <li><i class="fa-solid fa-check"></i>Individual high-value asset owners</li>
                </ul>
                <div class="btn-row">
                    <a href="{{ route('leadership') }}" class="btn btn-outline">Leadership Message</a>
                    <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
            <div class="grid-2" style="gap:1rem;">
                <div class="card card-brand" style="text-align:center;padding:1.5rem 1rem;">
                    <div style="font-size:2rem;margin-bottom:.5rem;"><i class="fa-solid fa-certificate" style="color:var(--brand-dk);"></i></div>
                    <div style="font-weight:700;color:var(--text);font-size:.95rem;">IRA Licensed</div>
                    <div style="font-size:.8rem;color:var(--t-muted);">Insurance Regulatory Authority</div>
                </div>
                <div class="card card-brand" style="text-align:center;padding:1.5rem 1rem;">
                    <div style="font-size:2rem;margin-bottom:.5rem;"><i class="fa-solid fa-building" style="color:var(--brand-dk);"></i></div>
                    <div style="font-weight:700;color:var(--text);font-size:.95rem;">URSB Certified</div>
                    <div style="font-size:.8rem;color:var(--t-muted);">Uganda Registration Service Bureau</div>
                </div>
                <div class="card card-brand" style="text-align:center;padding:1.5rem 1rem;">
                    <div style="font-size:2rem;margin-bottom:.5rem;"><i class="fa-solid fa-handshake" style="color:var(--brand-dk);"></i></div>
                    <div style="font-weight:700;color:var(--text);font-size:.95rem;">Independent</div>
                    <div style="font-size:.8rem;color:var(--t-muted);">Unbiased advisory always</div>
                </div>
                <div class="card card-brand" style="text-align:center;padding:1.5rem 1rem;">
                    <div style="font-size:2rem;margin-bottom:.5rem;"><i class="fa-solid fa-calendar-check" style="color:var(--brand-dk);"></i></div>
                    <div style="font-weight:700;color:var(--text);font-size:.95rem;">Since 2023</div>
                    <div style="font-size:.8rem;color:var(--t-muted);">Active in the Ugandan market</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container cta-inner">
        <h2>Ready to Work with a Licensed Insurance Expert?</h2>
        <p>Contact our team for a free consultation and tailored insurance review for your business.</p>
        <div class="btn-row">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane"></i> Get in Touch</a>
            <a href="{{ route('services') }}" class="btn btn-ghost-light btn-lg">View Services</a>
        </div>
    </div>
</section>

@endsection
