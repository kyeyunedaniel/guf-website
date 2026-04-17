@extends('layouts.app')
@section('title', 'Services | GUF Agency Ltd')
@section('description', 'Corporate insurance selection, policy placement and management, and claims advocacy services by GUF Agency Ltd.')
@section('content')

<section class="page-hero-light">
    <div class="container">
        <div class="phl-grid">
            <div>
                <div class="chip" style="margin-bottom:1rem;"><i class="fa-solid fa-gear"></i> Service Offerings</div>
                <h1>Corporate Insurance Services</h1>
                <p class="phl-lead">GUF Agency provides cradle-to-grave corporate insurance solutions — from risk assessment through to claims advocacy — putting your interests first at every step.</p>
                <div class="btn-row">
                    <a href="{{ route('contact') }}" class="btn-teal"><i class="fa-solid fa-paper-plane"></i> Get a Quote</a>
                    <a href="{{ route('products') }}" class="btn-outline-navy">Insurance Products <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="phl-img">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1200&q=80" alt="Financial advisor discussing insurance" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="section section-white" style="padding:88px 0;">
    <div class="container">
        <div class="section-header text-center" style="margin-bottom:3rem;">
            <div class="chip" style="margin:0 auto .85rem;"><i class="fa-solid fa-list-check"></i> Core Services</div>
            <h2 style="color:#0d1f3c;">Our Three Core Service Areas</h2>
            <div class="divider divider-center"></div>
        </div>
        <div class="grid-3" style="gap:2rem;">
            @php
            $services = [
                ['magnifying-glass','Insurance Company Selection','We evaluate insurance providers across the market, selecting the most suitable based on coverage quality, premium pricing, financial strength, and historical claims performance.',['Market-wide provider comparison','Coverage adequacy assessment','Claims record evaluation']],
                ['clipboard-check','Policy Placement & Management','We facilitate policy placement and actively manage your corporate insurance program on your behalf, from inception through renewal.',['Policy documentation and placement','Renewal tracking and management','Coverage gap identification']],
                ['scale-balanced','Claims Advocacy','We provide expert claims advocacy services, representing your interests with the insurer to ensure fair, accurate, and prompt claims settlements.',['Claims submission support','Dispute resolution advisory','Settlement follow-up and tracking']],
            ];
            @endphp
            @foreach($services as $s)
            <article style="background:#f7fbff;border:1.5px solid #e4eef8;border-radius:20px;padding:2rem;transition:all .25s;" onmouseover="this.style.borderColor='var(--brand)';this.style.transform='translateY(-6px)';this.style.boxShadow='0 16px 40px rgba(0,30,80,.08)'" onmouseout="this.style.borderColor='#e4eef8';this.style.transform='none';this.style.boxShadow='none'">
                <div class="icon-box" style="margin-bottom:1rem;"><i class="fa-solid fa-{{ $s[0] }}"></i></div>
                <h3 style="color:#0d1f3c;margin-bottom:.75rem;">{{ $s[1] }}</h3>
                <p style="color:#546e8a;font-size:.92rem;line-height:1.75;margin-bottom:1rem;">{{ $s[2] }}</p>
                <ul class="check-list-teal" style="margin:0;">
                    @foreach($s[3] as $item)
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>{{ $item }}</li>
                    @endforeach
                </ul>
            </article>
            @endforeach
        </div>
    </div>
</section>

<section class="section section-light" style="padding:88px 0;">
    <div class="container">
        <div class="grid-2" style="gap:3rem;align-items:start;">
            <div>
                <div class="chip" style="margin-bottom:1rem;"><i class="fa-solid fa-trophy"></i> Client Benefits</div>
                <h2 style="font-size:2.1rem;color:#0d1f3c;margin-bottom:.5rem;">What You Gain from Working with GUF Agency</h2>
                <div class="divider"></div>
                <div class="grid-2" style="gap:1rem;margin-top:.5rem;">
                    @php $benefits=[['brain','Expert Guidance','Advice aligned with your specific risks and business needs.'],['tag','Competitive Pricing','Negotiated rates and favourable terms for best value.'],['user-tie','Personalised Service','Prompt attention and dedicated support throughout.'],['bolt','Efficiency','Smooth journey from quote to claim settlement.']]; @endphp
                    @foreach($benefits as $b)
                    <div style="background:#fff;border:1.5px solid #e4eef8;border-radius:14px;padding:1.25rem;">
                        <div class="icon-box" style="width:38px;height:38px;margin-bottom:.7rem;font-size:.9rem;"><i class="fa-solid fa-{{ $b[0] }}"></i></div>
                        <strong style="display:block;margin-bottom:.3rem;font-size:.92rem;color:#0d1f3c;">{{ $b[1] }}</strong>
                        <p style="font-size:.85rem;margin:0;color:#788fa8;">{{ $b[2] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div>
                <div class="chip" style="margin-bottom:1rem;"><i class="fa-solid fa-quote-left"></i> Our Philosophy</div>
                <h2 style="font-size:2.1rem;color:#0d1f3c;margin-bottom:.5rem;">Why Corporate Insurance Matters</h2>
                <div class="divider"></div>
                <blockquote style="background:#eef4ff;border-left:4px solid var(--brand);padding:1.25rem 1.5rem;border-radius:0 12px 12px 0;margin:1.25rem 0;font-style:italic;color:#374f6b;line-height:1.7;">"Security is mostly a superstition... Life is either a daring adventure, or nothing." — Helen Keller</blockquote>
                <ul class="check-list-teal">
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Our Customers Are Our Biggest Asset</li>
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Clear, transparent procedures and processes</li>
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Innovative products and reliable, consistent service</li>
                    <li><div class="ci"><i class="fa-solid fa-check"></i></div>Efficient claims and payment follow-up</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="cta-band">
    <h2>Start Your Coverage Journey Today</h2>
    <p>Get in touch for a free risk assessment and expert recommendation on the right coverage for your business.</p>
    <div class="cta-band-actions">
        <a href="{{ route('contact') }}" class="btn-white"><i class="fa-solid fa-paper-plane"></i> Request a Quote</a>
        <a href="{{ route('products') }}" class="btn-outline-white">View All Products</a>
    </div>
</div>

@endsection
