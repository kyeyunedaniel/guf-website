@extends('layouts.app')

@section('title', 'Products | GUF Agency Ltd')
@section('description', 'Explore GUF Agency Ltd insurance products including motor, bonds, liability, marine, fire, agriculture, and more.')

@section('content')

<section class="page-hero">
    <div class="container page-hero-grid">
        <div>
            <div class="chip"><i class="fa-solid fa-umbrella"></i> Insurance Products</div>
            <h1>Comprehensive Corporate Insurance Coverage</h1>
            <p class="lead">Explore our full product range designed to protect vehicles, projects, goods, people, operations, and business assets.</p>
            <div class="btn-row">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane"></i> Request Product Guidance</a>
                <a href="{{ route('services') }}" class="btn btn-ghost-light btn-lg">Our Services</a>
            </div>
        </div>
        <div>
            <img src="https://images.pexels.com/photos/6801648/pexels-photo-6801648.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Business insurance documents consultation" loading="lazy">
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header text-center">
            <div class="chip"><i class="fa-solid fa-list"></i> Full Product Range</div>
            <h2>14 Insurance Products Available</h2>
            <div class="divider divider-center"></div>
            <p class="lead">Click any product to learn more about coverage details.</p>
        </div>

        <div class="grid-2" style="gap:.55rem;">
            <details class="accordion-item">
                <summary><span><i class="fa-solid fa-car" style="color:var(--brand);margin-right:.6rem;"></i>Motor Comprehensive Insurance</span></summary>
                <div class="accordion-body">Covers damages to vehicles, third-party liabilities, theft, and related risks. Ideal for commercial fleets and individual corporate vehicles.</div>
            </details>
            <details class="accordion-item">
                <summary><span><i class="fa-solid fa-file-contract" style="color:var(--brand);margin-right:.6rem;"></i>Bonds (Performance, Customs CB6, RCTG)</span></summary>
                <div class="accordion-body">Guarantees project completion and secures customs and transit obligations. Essential for contractors and freight operators.</div>
            </details>
            <details class="accordion-item">
                <summary><span><i class="fa-solid fa-helmet-safety" style="color:var(--brand);margin-right:.6rem;"></i>Contractors All Risks Insurance</span></summary>
                <div class="accordion-body">Covers construction-related damages, losses, and third-party liabilities during project execution.</div>
            </details>
            <details class="accordion-item">
                <summary><span><i class="fa-solid fa-money-bill-wave" style="color:var(--brand);margin-right:.6rem;"></i>Money Insurance</span></summary>
                <div class="accordion-body">Protects against loss or theft of money, securities, and other valuables on or off premises.</div>
            </details>
            <details class="accordion-item">
                <summary><span><i class="fa-solid fa-fire-flame-curved" style="color:var(--brand);margin-right:.6rem;"></i>Fire Insurance</span></summary>
                <div class="accordion-body">Covers losses caused by fire, explosions, lightning, and other defined perils affecting business property.</div>
            </details>
            <details class="accordion-item">
                <summary><span><i class="fa-solid fa-door-open" style="color:var(--brand);margin-right:.6rem;"></i>Burglary Insurance</span></summary>
                <div class="accordion-body">Protects against losses caused by theft, burglary, and housebreaking at business premises.</div>
            </details>
            <details class="accordion-item">
                <summary><span><i class="fa-solid fa-plane" style="color:var(--brand);margin-right:.6rem;"></i>Travel Insurance</span></summary>
                <div class="accordion-body">Provides protection against cancellations, medical emergencies abroad, and luggage loss during business travel.</div>
            </details>
            <details class="accordion-item">
                <summary><span><i class="fa-solid fa-seedling" style="color:var(--brand);margin-right:.6rem;"></i>Agriculture Insurance</span></summary>
                <div class="accordion-body">Covers crop failures, livestock deaths, and agriculture-related risks to protect farming operations.</div>
            </details>
            <details class="accordion-item">
                <summary><span><i class="fa-solid fa-ship" style="color:var(--brand);margin-right:.6rem;"></i>Marine Insurance</span></summary>
                <div class="accordion-body">Protects ships, cargo, and marine assets against transit, storage, and maritime-related risks.</div>
            </details>
            <details class="accordion-item">
                <summary><span><i class="fa-solid fa-gears" style="color:var(--brand);margin-right:.6rem;"></i>Machinery &amp; Equipment Insurance</span></summary>
                <div class="accordion-body">Covers damage, losses, and unexpected breakdowns of industrial machinery and equipment.</div>
            </details>
            <details class="accordion-item">
                <summary><span><i class="fa-solid fa-users" style="color:var(--brand);margin-right:.6rem;"></i>Group &amp; Personal Accident Insurance</span></summary>
                <div class="accordion-body">Provides financial support for accidental injuries, permanent disabilities, or deaths affecting staff and individuals.</div>
            </details>
            <details class="accordion-item">
                <summary><span><i class="fa-solid fa-truck" style="color:var(--brand);margin-right:.6rem;"></i>Goods in Transit Insurance</span></summary>
                <div class="accordion-body">Covers losses or damages to cargo and goods during road, rail, or air transportation.</div>
            </details>
            <details class="accordion-item">
                <summary><span><i class="fa-solid fa-shield-halved" style="color:var(--brand);margin-right:.6rem;"></i>Public Liability Insurance</span></summary>
                <div class="accordion-body">Protects businesses against third-party claims for bodily injury or property damage arising from business operations.</div>
            </details>
            <details class="accordion-item">
                <summary><span><i class="fa-solid fa-hard-hat" style="color:var(--brand);margin-right:.6rem;"></i>Workmen Compensation Insurance</span></summary>
                <div class="accordion-body">Provides employee compensation for work-related injuries, occupational illnesses, and deaths.</div>
            </details>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container cta-inner">
        <h2>Not Sure Which Product You Need?</h2>
        <p>Our advisors will assess your business risks and recommend the right combination of coverage products.</p>
        <div class="btn-row">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane"></i> Talk to an Advisor</a>
            <a href="{{ route('services') }}" class="btn btn-ghost-light btn-lg">Our Advisory Services</a>
        </div>
    </div>
</section>

@endsection
