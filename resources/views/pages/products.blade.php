@extends('layouts.app')
@section('title', 'Products | GUF Agency Ltd')
@section('description', 'Explore GUF Agency Ltd insurance products including motor, bonds, liability, marine, fire, agriculture, and more.')
@section('content')

<section class="page-hero-light">
    <div class="container">
        <div class="phl-grid">
            <div>
                <div class="chip" style="margin-bottom:1rem;"><i class="fa-solid fa-umbrella"></i> Insurance Products</div>
                <h1>Comprehensive Corporate Insurance Coverage</h1>
                <p class="phl-lead">Explore our full product range designed to protect vehicles, projects, goods, people, operations, and business assets across Uganda.</p>
                <div class="btn-row">
                    <a href="{{ route('contact') }}" class="btn-teal"><i class="fa-solid fa-paper-plane"></i> Request Product Guidance</a>
                    <a href="{{ route('services') }}" class="btn-outline-navy">Our Services <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="phl-img">
                <img src="https://images.pexels.com/photos/6801648/pexels-photo-6801648.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Business insurance consultation" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="section section-white" style="padding:88px 0;">
    <div class="container">
        <div class="section-header text-center" style="margin-bottom:3rem;">
            <div class="chip" style="margin:0 auto .85rem;"><i class="fa-solid fa-list"></i> Full Product Range</div>
            <h2 style="color:#0d1f3c;">14 Insurance Products Available</h2>
            <div class="divider divider-center"></div>
            <p class="lead" style="color:#546e8a;">Click any product to learn more about coverage details.</p>
        </div>

        <div class="grid-2" style="gap:.6rem;">
            @php
            $products = [
                ['car','Motor Comprehensive Insurance','Covers damages to vehicles, third-party liabilities, theft, and related risks. Ideal for commercial fleets and individual corporate vehicles.'],
                ['file-contract','Bonds (Performance, Customs CB6, RCTG)','Guarantees project completion and secures customs and transit obligations. Essential for contractors and freight operators.'],
                ['helmet-safety','Contractors All Risks Insurance','Covers construction-related damages, losses, and third-party liabilities during project execution.'],
                ['money-bill-wave','Money Insurance','Protects against loss or theft of money, securities, and other valuables on or off premises.'],
                ['fire-flame-curved','Fire Insurance','Covers losses caused by fire, explosions, lightning, and other defined perils affecting business property.'],
                ['door-open','Burglary Insurance','Protects against losses caused by theft, burglary, and housebreaking at business premises.'],
                ['plane','Travel Insurance','Provides protection against cancellations, medical emergencies abroad, and luggage loss during business travel.'],
                ['seedling','Agriculture Insurance','Covers crop failures, livestock deaths, and agriculture-related risks to protect farming operations.'],
                ['ship','Marine Insurance','Protects ships, cargo, and marine assets against transit, storage, and maritime-related risks.'],
                ['gears','Machinery & Equipment Insurance','Covers damage, losses, and unexpected breakdowns of industrial machinery and equipment.'],
                ['users','Group & Personal Accident Insurance','Provides financial support for accidental injuries, permanent disabilities, or deaths affecting staff.'],
                ['truck','Goods in Transit Insurance','Covers losses or damages to cargo and goods during road, rail, or air transportation.'],
                ['shield-halved','Public Liability Insurance','Protects businesses against third-party claims for bodily injury or property damage from business operations.'],
                ['hard-hat','Workmen Compensation Insurance','Provides employee compensation for work-related injuries, occupational illnesses, and deaths.'],
            ];
            @endphp
            @foreach($products as $p)
            <details style="background:#fff;border:1.5px solid #e4eef8;border-radius:12px;overflow:hidden;transition:border-color .2s,box-shadow .2s;" class="accordion-item">
                <summary style="list-style:none;padding:1rem 1.25rem;cursor:pointer;font-weight:600;font-size:.92rem;display:flex;align-items:center;justify-content:space-between;user-select:none;">
                    <span><i class="fa-solid fa-{{ $p[0] }}" style="color:var(--brand);margin-right:.6rem;"></i>{{ $p[1] }}</span>
                </summary>
                <div style="padding:0 1.25rem 1rem;font-size:.88rem;color:#546e8a;line-height:1.65;border-top:1px solid #e4eef8;padding-top:.85rem;">{{ $p[2] }}</div>
            </details>
            @endforeach
        </div>
    </div>
</section>

<div class="cta-band">
    <h2>Not Sure Which Product You Need?</h2>
    <p>Our advisors will assess your business risks and recommend the right combination of coverage products.</p>
    <div class="cta-band-actions">
        <a href="{{ route('contact') }}" class="btn-white"><i class="fa-solid fa-paper-plane"></i> Talk to an Advisor</a>
        <a href="{{ route('services') }}" class="btn-outline-white">Our Advisory Services</a>
    </div>
</div>

@endsection
