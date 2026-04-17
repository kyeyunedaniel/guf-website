@extends('layouts.app')

@section('title', 'Services | GUF Agency Ltd')
@section('description', 'Corporate insurance selection, policy placement and management, and claims advocacy services by GUF Agency Ltd.')

@section('content')

<section class="page-hero">
    <div class="container page-hero-grid">
        <div>
            <div class="chip"><i class="fa-solid fa-gear"></i> Service Offerings</div>
            <h1>Corporate Insurance Services</h1>
            <p class="lead">GUF Agency's mandate is to provide cradle-to-grave corporate insurance solutions — from risk assessment through to claims advocacy.</p>
            <div class="btn-row">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane"></i> Get a Quote</a>
                <a href="{{ route('products') }}" class="btn btn-ghost-light btn-lg">Insurance Products</a>
            </div>
        </div>
        <div>
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1200&q=80" alt="Financial advisor discussing insurance options" loading="lazy">
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header text-center">
            <div class="chip"><i class="fa-solid fa-list-check"></i> Core Services</div>
            <h2>Our Three Core Service Areas</h2>
            <div class="divider divider-center"></div>
        </div>
        <div class="grid-3">
            <article class="card">
                <div class="icon-box"><i class="fa-solid fa-magnifying-glass"></i></div>
                <h3>Insurance Company Selection</h3>
                <p>We evaluate insurance providers across the market, selecting the most suitable based on coverage quality, premium pricing, financial strength, and historical claims performance.</p>
                <ul class="list-check" style="margin-top:1rem;">
                    <li><i class="fa-solid fa-check"></i>Market-wide provider comparison</li>
                    <li><i class="fa-solid fa-check"></i>Coverage adequacy assessment</li>
                    <li><i class="fa-solid fa-check"></i>Claims record evaluation</li>
                </ul>
            </article>
            <article class="card">
                <div class="icon-box"><i class="fa-solid fa-clipboard-check"></i></div>
                <h3>Policy Placement &amp; Management</h3>
                <p>We facilitate policy placement and actively manage your corporate insurance program on your behalf, from inception through renewal.</p>
                <ul class="list-check" style="margin-top:1rem;">
                    <li><i class="fa-solid fa-check"></i>Policy documentation and placement</li>
                    <li><i class="fa-solid fa-check"></i>Renewal tracking and management</li>
                    <li><i class="fa-solid fa-check"></i>Coverage gap identification</li>
                </ul>
            </article>
            <article class="card">
                <div class="icon-box"><i class="fa-solid fa-scale-balanced"></i></div>
                <h3>Claims Advocacy</h3>
                <p>We provide expert claims advocacy services, representing your interests with the insurer to ensure fair, accurate, and prompt claims settlements.</p>
                <ul class="list-check" style="margin-top:1rem;">
                    <li><i class="fa-solid fa-check"></i>Claims submission support</li>
                    <li><i class="fa-solid fa-check"></i>Dispute resolution advisory</li>
                    <li><i class="fa-solid fa-check"></i>Settlement follow-up and tracking</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container">
        <div class="grid-2" style="gap:2.5rem;align-items:start;">
            <div>
                <div class="chip"><i class="fa-solid fa-trophy"></i> Client Benefits</div>
                <h2>What You Gain from Working with GUF Agency</h2>
                <div class="divider"></div>
                <div class="grid-2" style="gap:.85rem;margin-top:.5rem;">
                    <div class="card" style="padding:1.25rem;">
                        <div class="icon-box icon-box-sm" style="margin-bottom:.7rem;"><i class="fa-solid fa-brain"></i></div>
                        <strong style="display:block;margin-bottom:.3rem;font-size:.95rem;">Expert Guidance</strong>
                        <p style="font-size:.88rem;margin:0;">Advice aligned with your specific risks and business needs.</p>
                    </div>
                    <div class="card" style="padding:1.25rem;">
                        <div class="icon-box icon-box-sm" style="margin-bottom:.7rem;"><i class="fa-solid fa-tag"></i></div>
                        <strong style="display:block;margin-bottom:.3rem;font-size:.95rem;">Competitive Pricing</strong>
                        <p style="font-size:.88rem;margin:0;">Negotiated rates and favorable terms for best value.</p>
                    </div>
                    <div class="card" style="padding:1.25rem;">
                        <div class="icon-box icon-box-sm" style="margin-bottom:.7rem;"><i class="fa-solid fa-user-tie"></i></div>
                        <strong style="display:block;margin-bottom:.3rem;font-size:.95rem;">Personalized Service</strong>
                        <p style="font-size:.88rem;margin:0;">Prompt attention and dedicated support throughout.</p>
                    </div>
                    <div class="card" style="padding:1.25rem;">
                        <div class="icon-box icon-box-sm" style="margin-bottom:.7rem;"><i class="fa-solid fa-bolt"></i></div>
                        <strong style="display:block;margin-bottom:.3rem;font-size:.95rem;">Efficiency</strong>
                        <p style="font-size:.88rem;margin:0;">Smooth journey from quote to claim settlement.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="chip"><i class="fa-solid fa-quote-left"></i> Our Philosophy</div>
                <h2>Why Corporate Insurance Matters</h2>
                <div class="divider"></div>
                <blockquote class="quote-box">"Security is mostly a superstition... Life is either a daring adventure, or nothing." — Helen Keller</blockquote>
                <ul class="list-check" style="margin-top:1rem;">
                    <li><i class="fa-solid fa-check"></i>Our Customers Are Our Biggest Asset</li>
                    <li><i class="fa-solid fa-check"></i>Clear, transparent procedures and processes</li>
                    <li><i class="fa-solid fa-check"></i>Innovative products and reliable, consistent service</li>
                    <li><i class="fa-solid fa-check"></i>Efficient claims and payment follow-up</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container cta-inner">
        <h2>Start Your Coverage Journey Today</h2>
        <p>Get in touch for a free risk assessment and expert recommendation on the right coverage for your business.</p>
        <div class="btn-row">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane"></i> Request a Quote</a>
            <a href="{{ route('products') }}" class="btn btn-ghost-light btn-lg">View All Products</a>
        </div>
    </div>
</section>

@endsection
