@extends('layouts.app')

@section('title', 'Home | GUF Agency Ltd')
@section('description', 'Your trusted corporate insurance partner in Uganda. IRA-licensed, client-first advisory and tailored insurance solutions for businesses.')

@section('content')

{{-- ═══════════════════════════════════════
     HERO — REFINED & DYNAMIC
═══════════════════════════════════════ --}}
<section class="hero-full" style="padding: 100px 0; position: relative; overflow: hidden;">
    <div class="hero-full__bg" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=2000&q=80'); filter: brightness(0.4);"></div>
    <div class="hero-full__overlay" style="background: linear-gradient(135deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 100%);"></div>
    
    <div class="container" style="position: relative; z-index: 5;">
        <div class="hero-full__inner" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 4rem; align-items: center;">
            <div>
                <div class="chip chip-light" style="backdrop-filter: blur(4px); background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); margin-bottom: 1.5rem;">
                    <i class="fa-solid fa-shield-halved" style="color: #ffd700;"></i>
                    IRA Licensed Corporate Insurance Agency
                </div>
                <h1 style="font-size: clamp(2.5rem, 5vw, 4rem); line-height: 1.1; margin-bottom: 1.5rem; font-weight: 800; color: #fff;">
                    Your Trusted <span style="color: var(--brand-lt); font-style: italic;">Corporate Insurance</span> Partner
                </h1>
                <p class="hero-lead" style="font-size: 1.25rem; color: rgba(255,255,255,0.9); max-width: 600px; margin-bottom: 2rem;">
                    Expert guidance and tailored insurance solutions to protect your business, assets, and future across Uganda.
                </p>
                
                <div class="hero-actions" style="display: flex; gap: 1rem; margin-bottom: 3rem;">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg" style="padding: 1rem 2rem; box-shadow: 0 10px 20px rgba(0,0,0,0.2);">
                        <i class="fa-solid fa-paper-plane"></i> Get a Free Quote
                    </a>
                    <a href="{{ route('about') }}" class="btn btn-ghost-light btn-lg" style="border: 2px solid rgba(255,255,255,0.3);">Learn About Us</a>
                </div>

                <div class="hero-trust" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; opacity: 0.8;">
                    <div class="trust-item"><i class="fa-solid fa-circle-check"></i><span>IRA Regulated</span></div>
                    <div class="trust-item"><i class="fa-solid fa-circle-check"></i><span>Fast Response</span></div>
                    <div class="trust-item"><i class="fa-solid fa-circle-check"></i><span>Client-First Advisory</span></div>
                    <div class="trust-item"><i class="fa-solid fa-circle-check"></i><span>Mayfair Partner</span></div>
                </div>
            </div>

            <div class="hero-imgs" style="position: relative; display: flex; align-items: center; justify-content: center;">
                <div class="hi-main" style="transform: perspective(1000px) rotateY(-10deg); border: 8px solid rgba(255,255,255,0.1); border-radius: var(--r-lg); overflow: hidden; box-shadow: var(--sh-lg);">
                    <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&fit=crop&w=900&q=80" alt="Corporate insurance" style="width: 100%; display: block;">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     STATS — MINIMALIST BAR
═══════════════════════════════════════ --}}
<section class="stats-strip" style="background: #fff; border-bottom: 1px solid #eee; padding: 2rem 0;">
    <div class="container">
        <div class="stats-grid" style="display: flex; justify-content: space-between; align-items: center; text-align: center;">
            @php
                $stats = [
                    ['2023', 'Licensed Since'],
                    ['14+', 'Insurance Products'],
                    ['10+', 'Corporate Clients'],
                    ['IRA', 'Licensed & Regulated']
                ];
            @endphp
            @foreach($stats as $stat)
                <div class="stat-item" style="flex: 1; border-right: 1px solid #eee; last-child: border-none;">
                    <div class="stat-num" style="display: block; font-size: 2rem; font-weight: 800; color: var(--brand);">{{ $stat[0] }}</div>
                    <div class="stat-label" style="text-transform: uppercase; font-size: 0.75rem; letter-spacing: 1px; color: #666; font-weight: 600;">{{ $stat[1] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     ABOUT & SERVICES — BENTO STYLE
═══════════════════════════════════════ --}}
<section class="section" style="padding: 100px 0;">
    <div class="container">
        <div class="grid-2" style="align-items: center; gap: 5rem;">
            <div style="position: relative;">
                <div style="background: var(--brand-lt); width: 80%; height: 80%; position: absolute; top: -20px; left: -20px; z-index: -1; border-radius: var(--r-lg); opacity: 0.1;"></div>
                <img src="https://images.pexels.com/photos/3184357/pexels-photo-3184357.jpeg?auto=compress&cs=tinysrgb&w=1000" alt="GUF Agency" style="width:100%; height:480px; object-fit:cover; border-radius:var(--r-lg); box-shadow:var(--sh-lg);">
                <div class="card" style="position:absolute; bottom: 30px; right: -20px; padding: 1.5rem; background:#fff; border-radius: var(--r-md); box-shadow: var(--sh-lg); border-left: 5px solid var(--brand);">
                    <div style="font-size: 1.8rem; font-weight: 900; color: var(--brand);">IRA</div>
                    <div style="font-size: 0.9rem; font-weight: 700;">Certified Partner</div>
                </div>
            </div>
            <div>
                <div class="chip"><i class="fa-solid fa-building"></i> Who We Are</div>
                <h2 style="font-size: 2.5rem; margin-bottom: 1.5rem;">A Licensed Insurance Agency Built for <span style="color: var(--brand);">Corporate Uganda</span></h2>
                <p class="lead" style="color: #555; margin-bottom: 1.5rem;">GUF Agency Ltd is a fully incorporated, IRA-licensed corporate insurance agency dedicated to delivering expert, unbiased advisory.</p>
                <div style="display: grid; gap: 1rem; margin-bottom: 2rem;">
                    @foreach(['Incorporated under the Companies Act', 'Regulated by IRA Uganda', 'Independent advisory - client interests first', 'Partnered with Mayfair Insurance'] as $item)
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <div style="width: 24px; height: 24px; background: rgba(0,100,0,0.1); color: green; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.8rem;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <span style="font-weight: 500; color: #444;">{{ $item }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="btn-row">
                    <a href="{{ route('about') }}" class="btn btn-primary">About GUF Agency</a>
                    <a href="{{ route('leadership') }}" class="btn btn-outline">Leadership Message</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     HOW IT WORKS — 3 STEPS
═══════════════════════════════════════ --}}
<section class="section section-soft" style="padding: 80px 0;">
    <div class="container">
        <div class="section-header text-center reveal">
            <div class="chip"><i class="fa-solid fa-diagram-project"></i> Simple Process</div>
            <h2>How It Works</h2>
            <div class="divider divider-center"></div>
            <p class="lead">Getting the right coverage takes three simple steps with GUF Agency.</p>
        </div>
        <div class="grid-3" style="gap: 2.5rem; padding-top: 2.5rem;">
            <div class="step-card reveal reveal-delay-1">
                <div class="step-num">1</div>
                <div class="icon-box" style="margin-bottom: 1rem;"><i class="fa-solid fa-comments"></i></div>
                <h3>Tell Us Your Needs</h3>
                <p style="color: var(--gray-600); font-size: 0.9rem; line-height: 1.65;">Share your business details and risk exposures with our advisors — in person, by phone, or via our contact form.</p>
            </div>
            <div class="step-card reveal reveal-delay-2">
                <div class="step-num">2</div>
                <div class="icon-box" style="margin-bottom: 1rem;"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
                <h3>We Assess &amp; Advise</h3>
                <p style="color: var(--gray-600); font-size: 0.9rem; line-height: 1.65;">We evaluate your risks, compare insurers across the market, and recommend the most suitable and cost-effective coverage.</p>
            </div>
            <div class="step-card reveal reveal-delay-3">
                <div class="step-num">3</div>
                <div class="icon-box" style="margin-bottom: 1rem;"><i class="fa-solid fa-shield-halved"></i></div>
                <h3>Get Covered</h3>
                <p style="color: var(--gray-600); font-size: 0.9rem; line-height: 1.65;">We place your policy and manage it end-to-end — from documentation and renewals to claims advocacy.</p>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     PRODUCTS — MASONRY CARDS
═══════════════════════════════════════ --}}
<section class="section section-soft" style="background: #f8fafc; padding: 100px 0;">
    <div class="container">
        <div class="section-header text-center reveal" style="margin-bottom: 4rem;">
            <div class="chip" style="margin: 0 auto 1rem;"><i class="fa-solid fa-umbrella"></i> Coverage Range</div>
            <h2 style="font-size: 2.5rem;">Featured Insurance Products</h2>
            <div class="divider divider-center"></div>
        </div>
        
        <div class="grid-3" style="gap: 2rem;">
            @php
                $products = [
                    ['Motor & Fleet', 'car', 'https://images.unsplash.com/photo-1560179707-f14e90ef3623?auto=format&fit=crop&w=900&q=80'],
                    ['Construction & Bonds', 'helmet-safety', 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=900&q=80'],
                    ['Liability & Assets', 'building-shield', 'https://images.pexels.com/photos/7238759/pexels-photo-7238759.jpeg?auto=compress&cs=tinysrgb&w=900']
                ];
            @endphp

            @foreach($products as $p)
            <article class="img-card reveal reveal-delay-{{ $loop->index + 1 }}" style="background: #fff; border-radius: var(--r-lg); overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                <div style="height: 200px; overflow: hidden; position: relative;">
                    <img src="{{ $p[2] }}" alt="{{ $p[0] }}" style="width: 100%; height: 100%; object-fit: cover;">
                    <div style="position: absolute; top: 15px; left: 15px; width: 40px; height: 40px; background: var(--brand); color: #fff; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">
                        <i class="fa-solid fa-{{ $p[1] }}"></i>
                    </div>
                </div>
                <div class="img-card-body" style="padding: 1.5rem;">
                    <h3 style="margin-bottom: 0.5rem; font-size: 1.25rem;">{{ $p[0] }}</h3>
                    <p style="font-size: 0.9rem; color: #666;">Tailored policies designed to mitigate specific corporate risks in the Ugandan market.</p>
                </div>
            </article>
            @endforeach
        </div>
        <div class="text-center" style="margin-top: 3rem;">
            <a href="{{ route('products') }}" class="btn btn-primary btn-lg">View All 14 Products</a>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     CTA — ENHANCED IMPACT
═══════════════════════════════════════ --}}
<section class="cta-section" style="background: var(--brand); padding: 80px 0; color: #fff; position: relative; border-radius: 30px; margin: 40px; text-align: center;">
    <div class="container cta-inner">
        <h2 style="font-size: 2.5rem; margin-bottom: 1rem; color: #fff;">Speak with a <span style="text-decoration: underline; text-decoration-color: var(--brand-lt);">Corporate Expert</span> Today</h2>
        <p style="font-size: 1.1rem; opacity: 0.9; max-width: 700px; margin: 0 auto 2.5rem;">
            Request a free risk assessment at your premises. Our team will identify your exposures and recommend the right coverage — no obligation.
        </p>
        <div class="btn-row" style="justify-content: center;">
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg" style="background: #fff; color: var(--brand); border: none;">
                <i class="fa-solid fa-paper-plane"></i> Get a Free Quote
            </a>
            <a href="{{ route('services') }}" class="btn btn-ghost-light btn-lg" style="border-color: rgba(255,255,255,0.4);">Explore Our Services</a>
        </div>
    </div>
</section>

@endsection