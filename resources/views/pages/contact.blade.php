@extends('layouts.app')

@section('title', 'Contact | GUF Agency Ltd')
@section('description', 'Contact GUF Agency Ltd for corporate insurance quotes, advisory support, and risk assessment services in Uganda.')

@section('content')

<section class="page-hero">
    <div class="container page-hero-grid">
        <div>
            <div class="chip"><i class="fa-solid fa-paper-plane"></i> Contact Us</div>
            <h1>Let's Protect Your Business</h1>
            <p class="lead">Reach out for quotes, policy guidance, claims support, and free risk assessment at your business premises.</p>
            <p style="color:var(--brand-lt);font-weight:600;font-size:1.05rem;"><i class="fa-solid fa-quote-left" style="font-size:.85em;margin-right:.4rem;"></i>Our Customers, Our Priority</p>
        </div>
        <div>
            <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=1200&q=80" alt="Insurance consultation documents on office desk" loading="lazy">
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="grid-2" style="gap:2.5rem;align-items:start;">

            <div>
                <div class="chip" style="margin-bottom:1.25rem;"><i class="fa-solid fa-address-card"></i> Reach Us Directly</div>
                <div class="contact-detail-item">
                    <div class="contact-detail-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="contact-detail-text">
                        <strong>Office Address</strong>
                        <span>P.O. Box 140782 Kampala, Uganda</span>
                        <span>Plot 30 Conrad House, Jinja Road</span>
                        <span>2nd Floor, Room No. 2</span>
                    </div>
                </div>
                <div class="contact-detail-item">
                    <div class="contact-detail-icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="contact-detail-text">
                        <strong>Phone Numbers</strong>
                        <a href="tel:+256772588426">+256 772 588 426</a>
                        <a href="tel:+256701588426">+256 701 588 426</a>
                        <a href="tel:+256701890451">+256 701 890 451</a>
                    </div>
                </div>
                <div class="contact-detail-item">
                    <div class="contact-detail-icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="contact-detail-text">
                        <strong>Email Addresses</strong>
                        <a href="mailto:business@gufagency.com">business@gufagency.com</a>
                        <a href="mailto:mugangalydia@gmail.com">mugangalydia@gmail.com</a>
                    </div>
                </div>
                <div class="card card-brand" style="margin-top:1.5rem;padding:1.25rem 1.5rem;">
                    <div style="display:flex;align-items:center;gap:.75rem;">
                        <div class="icon-box icon-box-sm"><i class="fa-solid fa-shield-halved"></i></div>
                        <div>
                            <strong style="display:block;font-size:.92rem;">IRA Licensed Agency</strong>
                            <span style="font-size:.82rem;color:var(--t-muted);">Insurance Regulatory Authority of Uganda</span>
                        </div>
                    </div>
                </div>
            </div>

            <article class="card">
                <h3 style="margin-bottom:.25rem;">Send Us a Message</h3>
                <p style="font-size:.92rem;color:var(--t-muted);margin-bottom:1.5rem;">Our team will get back to you with guidance tailored to your insurance needs.</p>

                @if (session('status'))
                    <div class="alert alert-success" role="status">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="error-box" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="field">
                            <label for="name">Full Name</label>
                            <input id="name" name="name" type="text" placeholder="Your full name" value="{{ old('name') }}" required>
                        </div>
                        <div class="field">
                            <label for="email">Email Address</label>
                            <input id="email" name="email" type="email" placeholder="you@company.com" value="{{ old('email') }}" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="field">
                            <label for="phone">Phone Number</label>
                            <input id="phone" name="phone" type="tel" placeholder="+256 ..." value="{{ old('phone') }}">
                        </div>
                        <div class="field">
                            <label for="subject">Subject</label>
                            <input id="subject" name="subject" type="text" placeholder="e.g. Fleet insurance quote" value="{{ old('subject') }}">
                        </div>
                    </div>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Tell us what coverage you need or the nature of your inquiry..." required>{{ old('message') }}</textarea>
                    </div>

                    <div class="checkbox-field">
                        <input id="agree_privacy" name="agree_privacy" type="checkbox" value="1" {{ old('agree_privacy') ? 'checked' : '' }} required>
                        <label for="agree_privacy" style="margin:0;font-weight:500;color:inherit;">
                            I agree to the processing of my information in line with the
                            <a href="{{ route('privacy-policy') }}">Privacy Policy</a>.
                        </label>
                    </div>

                    <div class="checkbox-field">
                        <input id="agree_marketing" name="agree_marketing" type="checkbox" value="1" {{ old('agree_marketing') ? 'checked' : '' }}>
                        <label for="agree_marketing" style="margin:0;font-weight:500;color:inherit;">
                            I would like to receive service updates and educational insurance content.
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg" style="width:100%;margin-top:.5rem;"><i class="fa-solid fa-paper-plane"></i> Send Message</button>
                </form>
            </article>

        </div>
    </div>
</section>

@endsection
