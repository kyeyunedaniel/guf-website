@extends('layouts.app')

@section('title', 'Partners | GUF Agency Ltd')
@section('description', 'GUF Agency Ltd is an authorised agent of Mayfair Insurance Uganda, providing independent corporate insurance advisory services.')

@section('content')

<section class="page-hero">
    <div class="container page-hero-grid">
        <div>
            <div class="chip"><i class="fa-solid fa-handshake"></i> Insurance Partners</div>
            <h1>Our Insurance Partner</h1>
            <p class="lead">GUF Agency Ltd is an authorised corporate insurance agent of Mayfair Insurance Uganda — a trusted insurer committed to customer satisfaction and innovative products.</p>
            <div class="btn-row">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane"></i> Get a Quote</a>
                <a href="{{ route('products') }}" class="btn btn-ghost-light btn-lg">View Products</a>
            </div>
        </div>
        <div>
            <img src="https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Insurance partnership agreement handshake" loading="lazy">
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="banner-card" style="max-width:780px;margin:0 auto;">
            <div class="partner-badge"><i class="fa-solid fa-building-columns"></i></div>
            <h3 style="margin:.5rem 0 .6rem;">Mayfair Insurance Uganda</h3>
            <p style="color:rgba(255,255,255,.8);margin-bottom:1.5rem;">A regulated insurer committed to innovative products, consistent service delivery, and sustainable customer satisfaction in Uganda.</p>
            <a href="{{ route('contact') }}" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Enquire Now</a>
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container">
        <div class="grid-2" style="gap:2rem;align-items:start;">
            <div>
                <div class="chip"><i class="fa-solid fa-scale-balanced"></i> Our Position</div>
                <h2>Independent Advisory, Not Tied to One Insurer</h2>
                <div class="divider"></div>
                <p>While we are an authorised agent of Mayfair Insurance Uganda, GUF Agency's advisory mandate extends beyond one provider. We evaluate the full market to identify the most suitable insurer and coverage for each client's specific needs.</p>
                <ul class="list-check" style="margin-top:1rem;">
                    <li><i class="fa-solid fa-check"></i>Unbiased product comparison and recommendation</li>
                    <li><i class="fa-solid fa-check"></i>Access to competitive pricing across markets</li>
                    <li><i class="fa-solid fa-check"></i>Negotiated terms and favourable conditions</li>
                    <li><i class="fa-solid fa-check"></i>Claims advocacy regardless of insurer</li>
                </ul>
            </div>
            <article class="card">
                <div class="icon-box"><i class="fa-solid fa-certificate"></i></div>
                <h3>Why Partner with Mayfair?</h3>
                <div class="divider"></div>
                <ul class="list-check">
                    <li><i class="fa-solid fa-check"></i>IRA-regulated insurer operating in Uganda</li>
                    <li><i class="fa-solid fa-check"></i>Wide range of corporate and personal products</li>
                    <li><i class="fa-solid fa-check"></i>Reputation for consistent claims settlement</li>
                    <li><i class="fa-solid fa-check"></i>Strong financial stability and compliance</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container cta-inner">
        <h2>Access Market-Leading Coverage Through GUF Agency</h2>
        <p>Let us connect you with the right insurance partner for your business needs.</p>
        <div class="btn-row">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane"></i> Get in Touch</a>
            <a href="{{ route('services') }}" class="btn btn-ghost-light btn-lg">Our Services</a>
        </div>
    </div>
</section>

@endsection
