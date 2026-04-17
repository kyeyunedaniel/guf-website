@extends('layouts.app')

@section('title', 'Leadership | GUF Agency Ltd')
@section('description', 'Statement by Muganga Lydia, Principal Officer at GUF Agency Ltd, on risk transfer and peace of mind.')

@section('content')

<section class="page-hero">
    <div class="container page-hero-grid">
        <div>
            <div class="chip"><i class="fa-solid fa-user-tie"></i> Leadership</div>
            <h1>Statement by the Principal Officer</h1>
            <p class="lead">At GUF Agency, we are committed to helping clients transfer risk to the right corporate insurance partner — so you can live and work with confidence.</p>
            <div class="btn-row">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane"></i> Get a Quote</a>
                <a href="{{ route('vision-mission') }}" class="btn btn-ghost-light btn-lg">Vision &amp; Mission</a>
            </div>
        </div>
        <div>
            <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=1200&q=80" alt="Muganga Lydia, Principal Officer at GUF Agency Ltd" loading="lazy">
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="leader-profile">
            <div>
                <img class="leader-avatar" src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=800&q=80" alt="Muganga Lydia, Principal Officer" loading="lazy">
            </div>
            <div>
                <div class="chip"><i class="fa-solid fa-quote-left"></i> Principal Officer's Statement</div>
                <h2>Muganga Lydia</h2>
                <p style="color:var(--brand);font-weight:600;margin-top:.25rem;">Principal Officer, GUF Agency Ltd</p>
                <div class="divider"></div>

                <blockquote class="quote-box">
                    Imagine a life free from worry. No concerns about protecting your home, business, or loved ones from unexpected events. No fear of financial loss or uncertainty.
                </blockquote>

                <p>At GUF Agency, we understand that worry is a natural response to life's uncertainties. However, we also know that it can be debilitating and hinder your ability to focus on what matters most.</p>

                <p>That is why we are committed to helping you transfer risk to the right corporate insurance partner. Our expertise and guidance will give you peace of mind, knowing that you are protected against life's unexpected twists and turns.</p>

                <p>Let us help you live without worry. Partner with us to secure your future and focus on what truly matters.</p>

                <div class="btn-row">
                    <a href="{{ route('contact') }}" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Talk to Our Team</a>
                    <a href="{{ route('about') }}" class="btn btn-outline">About GUF Agency</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container cta-inner">
        <h2>Ready to Protect What Matters?</h2>
        <p>Start the conversation with our team for unbiased, expert insurance guidance tailored to your situation.</p>
        <div class="btn-row">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane"></i> Get in Touch</a>
            <a href="{{ route('services') }}" class="btn btn-ghost-light btn-lg">View Our Services</a>
        </div>
    </div>
</section>

@endsection
