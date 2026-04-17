@extends('layouts.app')
@section('title', 'Leadership | GUF Agency Ltd')
@section('description', 'Statement by Muganga Lydia, Principal Officer at GUF Agency Ltd, on risk transfer and peace of mind.')
@section('content')

<section class="page-hero-light">
    <div class="container">
        <div class="phl-grid">
            <div>
                <div class="chip" style="margin-bottom:1rem;"><i class="fa-solid fa-user-tie"></i> Leadership</div>
                <h1>Statement by the Principal Officer</h1>
                <p class="phl-lead">At GUF Agency, we are committed to helping clients transfer risk to the right corporate insurance partner — so you can live and work with confidence.</p>
                <div class="btn-row">
                    <a href="{{ route('contact') }}" class="btn-teal"><i class="fa-solid fa-paper-plane"></i> Get a Quote</a>
                    <a href="{{ route('vision-mission') }}" class="btn-outline-navy">Vision &amp; Mission <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="phl-img">
                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=1200&q=80" alt="Muganga Lydia, Principal Officer" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="section section-white" style="padding:88px 0;">
    <div class="container">
        <div class="leader-profile">
            <div>
                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=800&q=80"
                     alt="Muganga Lydia" loading="lazy"
                     class="leader-avatar"
                     style="box-shadow:0 20px 60px rgba(0,30,80,.1);">
            </div>
            <div>
                <div class="chip" style="margin-bottom:1rem;"><i class="fa-solid fa-quote-left"></i> Principal Officer's Statement</div>
                <h2 style="font-size:2rem;color:#0d1f3c;margin-bottom:.25rem;">Muganga Lydia</h2>
                <p style="color:#00b4b4;font-weight:700;font-size:.95rem;margin-bottom:1.25rem;">Principal Officer, GUF Agency Ltd</p>
                <div class="divider"></div>

                <blockquote style="background:#eef4ff;border-left:4px solid var(--brand);padding:1.25rem 1.5rem;border-radius:0 12px 12px 0;margin:1.25rem 0;font-style:italic;color:#374f6b;line-height:1.75;font-size:1.05rem;">
                    Imagine a life free from worry. No concerns about protecting your home, business, or loved ones from unexpected events. No fear of financial loss or uncertainty.
                </blockquote>

                <p style="color:#546e8a;font-size:.95rem;line-height:1.75;margin-bottom:1rem;">At GUF Agency, we understand that worry is a natural response to life's uncertainties. However, we also know that it can be debilitating and hinder your ability to focus on what matters most.</p>
                <p style="color:#546e8a;font-size:.95rem;line-height:1.75;margin-bottom:1rem;">That is why we are committed to helping you transfer risk to the right corporate insurance partner. Our expertise and guidance will give you peace of mind, knowing that you are protected against life's unexpected twists and turns.</p>
                <p style="color:#546e8a;font-size:.95rem;line-height:1.75;margin-bottom:1.75rem;">Let us help you live without worry. Partner with us to secure your future and focus on what truly matters.</p>

                <div class="btn-row">
                    <a href="{{ route('contact') }}" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Talk to Our Team</a>
                    <a href="{{ route('about') }}" class="btn btn-outline">About GUF Agency</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="cta-band">
    <h2>Ready to Protect What Matters?</h2>
    <p>Start the conversation with our team for unbiased, expert insurance guidance tailored to your situation.</p>
    <div class="cta-band-actions">
        <a href="{{ route('contact') }}" class="btn-white"><i class="fa-solid fa-paper-plane"></i> Get in Touch</a>
        <a href="{{ route('services') }}" class="btn-outline-white">View Our Services</a>
    </div>
</div>

@endsection
