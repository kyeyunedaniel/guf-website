@extends('layouts.app')
@section('title', 'Contact | GUF Agency Ltd')
@section('description', 'Contact GUF Agency Ltd for corporate insurance quotes, advisory support, and risk assessment services in Uganda.')
@section('content')

<section class="page-hero-light">
    <div class="container">
        <div class="phl-grid">
            <div>
                <div class="chip" style="margin-bottom:1rem;"><i class="fa-solid fa-paper-plane"></i> Contact Us</div>
                <h1>Let's Protect Your Business</h1>
                <p class="phl-lead">Reach out for quotes, policy guidance, claims support, and free risk assessment at your business premises.</p>
                <p style="color:#00b4b4;font-weight:700;font-size:1rem;"><i class="fa-solid fa-quote-left" style="font-size:.85em;margin-right:.4rem;"></i>Our Customers, Our Priority</p>
            </div>
            <div class="phl-img">
                <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=1200&q=80" alt="Insurance consultation" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="section section-white" style="padding:88px 0;">
    <div class="container">
        <div class="grid-2" style="gap:3rem;align-items:start;">

            <div>
                <div class="chip" style="margin-bottom:1.25rem;"><i class="fa-solid fa-address-card"></i> Reach Us Directly</div>

                @php
                $details = [
                    ['location-dot','Office Address',['P.O. Box 140782 Kampala, Uganda','Plot 30 Conrad House, Jinja Road','2nd Floor, Room No. 2']],
                    ['phone','Phone Numbers',['+256 772 588 426','+256 701 588 426','+256 701 890 451']],
                    ['envelope','Email Addresses',['business@gufagency.com','mugangalydia@gmail.com']],
                ];
                @endphp
                @foreach($details as $d)
                <div style="display:flex;gap:1rem;margin-bottom:1.5rem;align-items:flex-start;">
                    <div style="width:44px;height:44px;flex-shrink:0;background:#e8f5f5;border-radius:12px;display:flex;align-items:center;justify-content:center;color:#00b4b4;font-size:1rem;">
                        <i class="fa-solid fa-{{ $d[0] }}"></i>
                    </div>
                    <div style="display:flex;flex-direction:column;gap:.2rem;">
                        <strong style="font-size:.88rem;font-weight:700;color:#0d1f3c;">{{ $d[1] }}</strong>
                        @foreach($d[2] as $line)
                        <span style="font-size:.875rem;color:#546e8a;">{{ $line }}</span>
                        @endforeach
                    </div>
                </div>
                @endforeach

                <div style="background:#eef4ff;border:1.5px solid #c8d8ff;border-radius:14px;padding:1.25rem 1.5rem;margin-top:1.5rem;display:flex;align-items:center;gap:.75rem;">
                    <div class="icon-box" style="flex-shrink:0;"><i class="fa-solid fa-shield-halved"></i></div>
                    <div>
                        <strong style="display:block;font-size:.92rem;color:#0d1f3c;">IRA Licensed Agency</strong>
                        <span style="font-size:.82rem;color:#788fa8;">Insurance Regulatory Authority of Uganda</span>
                    </div>
                </div>
            </div>

            <article style="background:#f7fbff;border:1.5px solid #e4eef8;border-radius:20px;padding:2rem;">
                <h3 style="color:#0d1f3c;margin-bottom:.25rem;">Send Us a Message</h3>
                <p style="font-size:.92rem;color:#788fa8;margin-bottom:1.5rem;">Our team will get back to you with guidance tailored to your insurance needs.</p>

                @if (session('status'))
                    <div class="alert-success" role="status">{{ session('status') }}</div>
                @endif
                @if ($errors->any())
                    <div class="error-box" role="alert">
                        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
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
                    <button type="submit" class="btn-teal" style="width:100%;margin-top:.5rem;justify-content:center;"><i class="fa-solid fa-paper-plane"></i> Send Message</button>
                </form>
            </article>
        </div>
    </div>
</section>

@endsection
