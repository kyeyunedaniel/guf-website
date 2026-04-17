@extends('layouts.app')

@section('title', 'Vision & Mission | GUF Agency Ltd')
@section('description', 'Vision, mission, core values, and objective of GUF Agency Ltd corporate insurance advisory services.')

@section('content')

<section class="page-hero">
    <div class="container page-hero-grid">
        <div>
            <div class="chip"><i class="fa-solid fa-compass"></i> Strategic Focus</div>
            <h1>Vision, Mission &amp; Core Values</h1>
            <p class="lead">Our strategy is centered on effective service delivery, unbiased advisory, and long-term client protection across Uganda.</p>
            <div class="btn-row">
                <a href="{{ route('services') }}" class="btn btn-primary btn-lg">View Services</a>
                <a href="{{ route('contact') }}" class="btn btn-ghost-light btn-lg">Contact Us</a>
            </div>
        </div>
        <div>
            <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Business team strategy meeting" loading="lazy">
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="grid-2" style="gap:2rem;">
            <article class="card">
                <div class="icon-box"><i class="fa-solid fa-eye"></i></div>
                <h3>Vision</h3>
                <div class="divider"></div>
                <p style="font-size:1.05rem;line-height:1.7;">To be the most effective and efficient corporate insurance agents in customer satisfaction in Uganda.</p>
            </article>
            <article class="card">
                <div class="icon-box"><i class="fa-solid fa-rocket"></i></div>
                <h3>Mission</h3>
                <div class="divider"></div>
                <p style="font-size:1.05rem;line-height:1.7;">To attract, train, and identify customer corporate insurance needs, delivering solutions that create lasting peace of mind.</p>
            </article>
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container">
        <div class="section-header text-center">
            <div class="chip"><i class="fa-solid fa-star"></i> What We Stand For</div>
            <h2>Our Core Values</h2>
            <div class="divider divider-center"></div>
        </div>
        <div class="grid-3">
            <div class="value-card">
                <div class="value-icon"><i class="fa-solid fa-users"></i></div>
                <div class="value-name">Teamwork</div>
            </div>
            <div class="value-card">
                <div class="value-icon"><i class="fa-solid fa-shield-check"></i></div>
                <div class="value-name">Reliability</div>
            </div>
            <div class="value-card">
                <div class="value-icon"><i class="fa-solid fa-bolt"></i></div>
                <div class="value-name">Efficiency</div>
            </div>
            <div class="value-card">
                <div class="value-icon"><i class="fa-solid fa-heart"></i></div>
                <div class="value-name">Passion</div>
            </div>
            <div class="value-card">
                <div class="value-icon"><i class="fa-solid fa-handshake"></i></div>
                <div class="value-name">People</div>
            </div>
            <div class="value-card">
                <div class="value-icon"><i class="fa-solid fa-chart-line"></i></div>
                <div class="value-name">Performance</div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="grid-2" style="gap:2rem;align-items:start;">
            <article class="card">
                <div class="icon-box"><i class="fa-solid fa-bullseye"></i></div>
                <h3>Primary Objective</h3>
                <div class="divider"></div>
                <p>To provide unbiased advice and guidance, ensuring our clients receive optimal corporate insurance coverage and value. We evaluate, compare, and recommend without allegiance to any single insurer.</p>
            </article>
            <article class="card">
                <div class="icon-box"><i class="fa-solid fa-arrows-left-right"></i></div>
                <h3>Our Role as Agents</h3>
                <div class="divider"></div>
                <p>As corporate insurance agents, we act as intermediaries between our clients and insurance providers. We represent your interests — not the insurer's — ensuring the best coverage at the best terms available.</p>
            </article>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container cta-inner">
        <h2>Let Us Put Our Values to Work for You</h2>
        <p>Contact us to understand how our client-first philosophy translates into practical insurance solutions for your business.</p>
        <div class="btn-row">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane"></i> Get in Touch</a>
            <a href="{{ route('services') }}" class="btn btn-ghost-light btn-lg">Our Services</a>
        </div>
    </div>
</section>

@endsection
