@extends('layouts.app')
@section('title', 'Vision & Mission | GUF Agency Ltd')
@section('description', 'Vision, mission, core values, and objective of GUF Agency Ltd corporate insurance advisory services.')
@section('content')

<section class="page-hero-light">
    <div class="container">
        <div class="phl-grid">
            <div>
                <div class="chip" style="margin-bottom:1rem;"><i class="fa-solid fa-compass"></i> Strategic Focus</div>
                <h1>Vision, Mission &amp; Core Values</h1>
                <p class="phl-lead">Our strategy is centred on effective service delivery, unbiased advisory, and long-term client protection across Uganda.</p>
                <div class="btn-row">
                    <a href="{{ route('services') }}" class="btn-teal">View Services</a>
                    <a href="{{ route('contact') }}" class="btn-outline-navy">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="phl-img">
                <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Business team strategy" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="section section-white" style="padding:88px 0;">
    <div class="container">
        <div class="grid-2" style="gap:2rem;margin-bottom:4rem;">
            <article style="background:#f7fbff;border:1.5px solid #e4eef8;border-radius:20px;padding:2.5rem;">
                <div class="icon-box"><i class="fa-solid fa-eye"></i></div>
                <h3 style="color:#0d1f3c;margin-bottom:.5rem;">Vision</h3>
                <div class="divider"></div>
                <p style="font-size:1.05rem;line-height:1.75;color:#546e8a;">To be the most effective and efficient corporate insurance agents in customer satisfaction in Uganda.</p>
            </article>
            <article style="background:#f7fbff;border:1.5px solid #e4eef8;border-radius:20px;padding:2.5rem;">
                <div class="icon-box"><i class="fa-solid fa-rocket"></i></div>
                <h3 style="color:#0d1f3c;margin-bottom:.5rem;">Mission</h3>
                <div class="divider"></div>
                <p style="font-size:1.05rem;line-height:1.75;color:#546e8a;">To attract, train, and identify customer corporate insurance needs, delivering solutions that create lasting peace of mind.</p>
            </article>
        </div>

        <div class="section-header text-center" style="margin-bottom:2.5rem;">
            <div class="chip" style="margin:0 auto .85rem;"><i class="fa-solid fa-star"></i> What We Stand For</div>
            <h2 style="color:#0d1f3c;">Our Core Values</h2>
            <div class="divider divider-center"></div>
        </div>
        <div class="grid-3" style="gap:1.5rem;margin-bottom:4rem;">
            @php $values=[['users','Teamwork'],['shield-check','Reliability'],['bolt','Efficiency'],['heart','Passion'],['handshake','People'],['chart-line','Performance']]; @endphp
            @foreach($values as $v)
            <div style="background:#fff;border:1.5px solid #e4eef8;border-radius:18px;padding:2rem 1.5rem;text-align:center;transition:all .25s;" onmouseover="this.style.borderColor='var(--brand)';this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 32px rgba(0,30,80,.08)'" onmouseout="this.style.borderColor='#e4eef8';this.style.transform='none';this.style.boxShadow='none'">
                <div style="width:56px;height:56px;background:#eef4ff;border-radius:14px;margin:0 auto 1rem;display:flex;align-items:center;justify-content:center;font-size:1.4rem;color:var(--brand);">
                    <i class="fa-solid fa-{{ $v[0] }}"></i>
                </div>
                <div style="font-weight:700;font-size:1rem;color:#0d1f3c;">{{ $v[1] }}</div>
            </div>
            @endforeach
        </div>

        <div class="grid-2" style="gap:2rem;">
            <article style="background:#f7fbff;border:1.5px solid #e4eef8;border-radius:20px;padding:2rem;">
                <div class="icon-box"><i class="fa-solid fa-bullseye"></i></div>
                <h3 style="color:#0d1f3c;margin-bottom:.5rem;">Primary Objective</h3>
                <div class="divider"></div>
                <p style="color:#546e8a;font-size:.95rem;line-height:1.75;margin:0;">To provide unbiased advice and guidance, ensuring our clients receive optimal corporate insurance coverage and value. We evaluate, compare, and recommend without allegiance to any single insurer.</p>
            </article>
            <article style="background:#f7fbff;border:1.5px solid #e4eef8;border-radius:20px;padding:2rem;">
                <div class="icon-box"><i class="fa-solid fa-arrows-left-right"></i></div>
                <h3 style="color:#0d1f3c;margin-bottom:.5rem;">Our Role as Agents</h3>
                <div class="divider"></div>
                <p style="color:#546e8a;font-size:.95rem;line-height:1.75;margin:0;">As corporate insurance agents, we act as intermediaries between our clients and insurance providers. We represent your interests — not the insurer's — ensuring the best coverage at the best terms available.</p>
            </article>
        </div>
    </div>
</section>

<div class="cta-band">
    <h2>Let Us Put Our Values to Work for You</h2>
    <p>Contact us to understand how our client-first philosophy translates into practical insurance solutions for your business.</p>
    <div class="cta-band-actions">
        <a href="{{ route('contact') }}" class="btn-white"><i class="fa-solid fa-paper-plane"></i> Get in Touch</a>
        <a href="{{ route('services') }}" class="btn-outline-white">Our Services</a>
    </div>
</div>

@endsection
