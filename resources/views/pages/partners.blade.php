@extends('layouts.app')
@section('title', 'Partners | GUF Agency Ltd')
@section('description', 'GUF Agency Ltd is an authorised agent of Mayfair Insurance Uganda, providing independent corporate insurance advisory services.')
@section('content')

<section class="page-hero-light">
    <div class="container">
        <div class="phl-grid">
            <div>
                <div class="chip" style="margin-bottom:1rem;"><i class="fa-solid fa-handshake"></i> Insurance Partners</div>
                <h1>Our Insurance Partner</h1>
                <p class="phl-lead">GUF Agency Ltd is an authorised corporate insurance agent of Mayfair Insurance Uganda — a trusted insurer committed to customer satisfaction and innovative products.</p>
                <div class="btn-row">
                    <a href="{{ route('contact') }}" class="btn-teal"><i class="fa-solid fa-paper-plane"></i> Get a Quote</a>
                    <a href="{{ route('products') }}" class="btn-outline-navy">View Products <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="phl-img">
                <img src="https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Insurance partnership" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="section section-white" style="padding:88px 0;">
    <div class="container">
        <div style="background:linear-gradient(135deg,#003380 0%,#0052CC 60%,#0070e0 100%);border-radius:24px;padding:3rem 2.5rem;text-align:center;color:#fff;max-width:780px;margin:0 auto 4rem;">
            <div style="width:64px;height:64px;background:rgba(255,255,255,.1);border:2px solid rgba(255,255,255,.25);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;font-size:1.5rem;">
                <i class="fa-solid fa-building-columns"></i>
            </div>
            <h3 style="color:#fff;font-size:1.75rem;margin-bottom:.6rem;">Mayfair Insurance Uganda</h3>
            <p style="color:rgba(255,255,255,.82);margin-bottom:1.5rem;line-height:1.7;">A regulated insurer committed to innovative products, consistent service delivery, and sustainable customer satisfaction in Uganda.</p>
            <a href="{{ route('contact') }}" class="btn-white"><i class="fa-solid fa-paper-plane"></i> Enquire Now</a>
        </div>

        <div class="grid-2" style="gap:3rem;align-items:start;">
            <div>
                <div class="chip" style="margin-bottom:1rem;"><i class="fa-solid fa-scale-balanced"></i> Our Position</div>
                <h2 style="font-size:2.1rem;color:#0d1f3c;margin-bottom:.5rem;">Independent Advisory, Not Tied to One Insurer</h2>
                <div class="divider"></div>
                <p style="color:#546e8a;font-size:.95rem;line-height:1.75;margin-bottom:.5rem;">While we are an authorised agent of Mayfair Insurance Uganda, GUF Agency's advisory mandate extends beyond one provider. We evaluate the full market to identify the most suitable insurer and coverage for each client's specific needs.</p>
                <ul class="check-list-teal">
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Unbiased product comparison and recommendation</li>
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Access to competitive pricing across markets</li>
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Negotiated terms and favourable conditions</li>
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Claims advocacy regardless of insurer</li>
                </ul>
            </div>
            <article style="background:#f7fbff;border:1.5px solid #e4eef8;border-radius:20px;padding:2rem;">
                <div class="icon-box"><i class="fa-solid fa-certificate"></i></div>
                <h3 style="color:#0d1f3c;margin-bottom:.5rem;">Why Partner with Mayfair?</h3>
                <div class="divider"></div>
                <ul class="check-list-teal" style="margin:0;">
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>IRA-regulated insurer operating in Uganda</li>
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Wide range of corporate and personal products</li>
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Reputation for consistent claims settlement</li>
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Strong financial stability and compliance</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<div class="cta-band">
    <h2>Access Market-Leading Coverage Through GUF Agency</h2>
    <p>Let us connect you with the right insurance partner for your business needs.</p>
    <div class="cta-band-actions">
        <a href="{{ route('contact') }}" class="btn-white"><i class="fa-solid fa-paper-plane"></i> Get in Touch</a>
        <a href="{{ route('services') }}" class="btn-outline-white">Our Services</a>
    </div>
</div>

@endsection
