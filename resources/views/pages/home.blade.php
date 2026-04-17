@extends('layouts.app')

@section('title', 'Home | GUF Agency Ltd')
@section('description', 'Your trusted corporate insurance partner in Uganda. IRA-licensed, client-first advisory and tailored insurance solutions for businesses.')

@section('content')

<style>
    /* ── HOME PAGE OVERRIDES ── */
    .hero-light {
        background: linear-gradient(160deg, #eef4ff 0%, #f5f9ff 50%, #e8f5f5 100%);
        padding: 90px 0 80px;
        overflow: hidden;
        position: relative;
    }
    .hero-light::before {
        content: '';
        position: absolute;
        width: 600px; height: 600px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(0,82,204,0.06) 0%, transparent 70%);
        top: -100px; right: -100px;
        pointer-events: none;
    }
    .hero-light::after {
        content: '';
        position: absolute;
        width: 400px; height: 400px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(0,180,180,0.07) 0%, transparent 70%);
        bottom: -80px; left: 80px;
        pointer-events: none;
    }
    .hero-light-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
        position: relative;
        z-index: 2;
    }
    .hero-light-tag {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(0,82,204,0.08);
        border: 1px solid rgba(0,82,204,0.15);
        color: var(--brand);
        padding: 0.4rem 1rem;
        border-radius: 999px;
        font-size: 0.78rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
        letter-spacing: 0.02em;
    }
    .hero-light h1 {
        font-size: clamp(2.4rem, 4.5vw, 3.6rem);
        line-height: 1.12;
        color: #0d1f3c;
        margin-bottom: 1.25rem;
        font-weight: 800;
    }
    .hero-light h1 em {
        font-style: normal;
        color: var(--brand);
    }
    .hero-light .hero-sub {
        font-size: 1.1rem;
        color: #546e8a;
        line-height: 1.7;
        max-width: 520px;
        margin-bottom: 2.25rem;
    }
    .hero-light-actions {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        align-items: center;
        margin-bottom: 2.5rem;
    }
    .btn-teal {
        background: #00b4b4;
        color: #fff;
        border-color: #00b4b4;
        border-radius: var(--radius-md);
        padding: 0.9rem 1.85rem;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.2s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    .btn-teal:hover { background: #009a9a; border-color: #009a9a; transform: translateY(-2px); box-shadow: 0 8px 20px rgba(0,180,180,0.25); }
    .btn-outline-navy {
        background: transparent;
        color: #0d1f3c;
        border: 1.5px solid #c8d8e8;
        border-radius: var(--radius-md);
        padding: 0.9rem 1.85rem;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.2s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    .btn-outline-navy:hover { border-color: var(--brand); color: var(--brand); background: var(--brand-ultra-light); }
    .hero-trust-pills {
        display: flex;
        gap: 1.5rem;
        flex-wrap: wrap;
    }
    .trust-pill {
        display: flex;
        align-items: center;
        gap: 0.45rem;
        font-size: 0.82rem;
        font-weight: 600;
        color: #546e8a;
    }
    .trust-pill i { color: #00b4b4; font-size: 0.9rem; }
    .hero-visual {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }
    .hero-visual .main-img {
        width: 90%;
        aspect-ratio: 4 / 3;
        max-height: 520px;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 30px 80px rgba(0,30,80,0.12);
        position: relative;
    }
    .hero-visual .main-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }
    .hero-float-card {
        position: absolute;
        background: #fff;
        border-radius: 16px;
        padding: 1rem 1.25rem;
        box-shadow: 0 10px 40px rgba(0,30,80,0.12);
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    .hero-float-card.fc-bottom {
        bottom: -20px; left: -10px;
        border-left: 4px solid #00b4b4;
    }
    .hero-float-card.fc-top {
        top: 20px; left: -30px;
        flex-direction: column;
        align-items: flex-start;
        padding: 1rem 1.25rem;
    }
    .fc-icon {
        width: 36px; height: 36px;
        border-radius: 10px;
        background: #e8f5f5;
        color: #00b4b4;
        display: flex; align-items: center; justify-content: center;
        font-size: 1rem;
        flex-shrink: 0;
    }
    .fc-text strong { display: block; font-size: 0.85rem; font-weight: 700; color: #0d1f3c; }
    .fc-text span { font-size: 0.75rem; color: #788fa8; }

    /* ── STATS BAR ── */
    .stats-bar {
        background: linear-gradient(180deg, #f8fbff 0%, #ffffff 100%);
        border-top: 1px solid #dbe7f5;
        border-bottom: 1px solid #dbe7f5;
        padding: 2rem 0;
    }
    .stats-bar-inner {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        background: #fff;
        border: 1.5px solid #cfdff2;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,30,80,0.06);
    }
    .sbi {
        text-align: center;
        padding: 1.3rem 1rem 1.1rem;
        border-right: 2px solid #d7e5f7;
        position: relative;
    }
    .sbi:last-child { border-right: none; }
    .sbi::before {
        content: '';
        width: 34px;
        height: 3px;
        border-radius: 999px;
        background: #bfd4ef;
        position: absolute;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
    }
    .sbi strong {
        display: block;
        font-size: 2rem;
        font-weight: 800;
        color: var(--brand);
        line-height: 1.1;
        margin-top: 0.25rem;
    }
    .sbi span {
        font-size: 0.8rem;
        color: #4f6782;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        font-weight: 700;
    }

    /* ── ABOUT ── */
    .about-section { padding: 88px 0 56px; }
    .about-img-wrap {
        position: relative;
    }
    .about-img-wrap img {
        width: 100%;
        height: 480px;
        object-fit: cover;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,30,80,0.1);
    }
    .about-badge-float {
        position: absolute;
        bottom: 28px; right: -18px;
        background: #fff;
        border-radius: 14px;
        padding: 1.1rem 1.4rem;
        box-shadow: 0 10px 30px rgba(0,30,80,0.12);
        border-left: 4px solid var(--brand);
        text-align: center;
        min-width: 130px;
    }
    .about-badge-float .abf-num { font-size: 1.6rem; font-weight: 900; color: var(--brand); line-height: 1; }
    .about-badge-float .abf-lbl { font-size: 0.75rem; font-weight: 700; color: #546e8a; margin-top: 2px; }
    .check-list { list-style: none; padding: 0; margin: 1.5rem 0 2rem; display: grid; gap: 0.9rem; }
    .check-list li {
        display: flex; align-items: flex-start; gap: 10px;
        color: #374f6b; font-weight: 500; font-size: 0.95rem;
    }
    .check-list li .ci {
        width: 22px; height: 22px; border-radius: 50%;
        background: #e0f7f7; color: #00b4b4;
        display: flex; align-items: center; justify-content: center;
        font-size: 0.7rem; flex-shrink: 0; margin-top: 2px;
    }

    /* ── SERVICES TAB ── */
    .services-section { background: #f7fbff; padding: 64px 0 96px; }
    .svc-layout {
        display: grid;
        grid-template-columns: 260px 1fr;
        gap: 3rem;
        align-items: start;
    }
    .svc-tabs {
        display: flex;
        flex-direction: column;
        gap: 0.4rem;
    }
    .svc-tab {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.85rem 1.1rem;
        border-radius: 10px;
        cursor: pointer;
        border: 1px solid #d7e5f5;
        background: transparent;
        text-align: left;
        font-family: inherit;
        font-size: 0.9rem;
        font-weight: 500;
        color: #788fa8;
        transition: all 0.2s ease;
        position: relative;
    }
    .svc-tab::before {
        content: '';
        position: absolute;
        left: 0; top: 20%; bottom: 20%;
        width: 3px;
        border-radius: 3px;
        background: transparent;
        transition: background 0.2s;
    }
    .svc-tab:hover { background: #e8f0fe; color: var(--brand); border-color: #b7cde8; }
    .svc-tab.active {
        background: #fff;
        color: #0d1f3c;
        font-weight: 700;
        border-color: #a8c3e3;
        box-shadow: 0 4px 16px rgba(0,30,80,0.08);
    }
    .svc-tab.active::before { background: var(--brand); }
    .svc-tab i { font-size: 1rem; color: inherit; }
    .svc-panel { display: none; }
    .svc-panel.active { display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center; }
    .svc-panel-img {
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 12px 40px rgba(0,30,80,0.1);
    }
    .svc-panel-img img { width: 100%; height: 320px; object-fit: cover; display: block; }
    .svc-panel-body .overline {
        font-size: 0.72rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: #00b4b4;
        margin-bottom: 0.6rem;
        display: block;
    }
    .svc-panel-body h3 { font-size: 1.7rem; color: #0d1f3c; margin-bottom: 1rem; line-height: 1.25; }
    .svc-panel-body p { color: #546e8a; font-size: 0.95rem; line-height: 1.75; margin-bottom: 1.5rem; }

    /* ── PARTNERS ── */
    .partners-section { padding: 68px 0 52px; background: #fff; }
    .partners-showcase {
        background: linear-gradient(180deg, #f8fbff 0%, #ffffff 100%);
        border: 1.5px solid #d9e6f5;
        border-radius: 22px;
        padding: 1.1rem;
        box-shadow: 0 14px 36px rgba(0,30,80,0.08);
    }
    .partner-feature {
        background: linear-gradient(135deg, #003380 0%, #0052cc 58%, #0f7fe5 100%);
        border-radius: 16px;
        padding: 1.35rem 1.35rem 1.15rem;
        color: #fff;
        margin-bottom: 0.9rem;
        position: relative;
        overflow: hidden;
    }
    .partner-feature::before {
        content: '';
        position: absolute;
        width: 180px;
        height: 180px;
        border-radius: 50%;
        background: rgba(255,255,255,0.1);
        top: -70px;
        right: -50px;
    }
    .partner-feature .pf-overline {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        background: rgba(255,255,255,0.16);
        border: 1px solid rgba(255,255,255,0.3);
        border-radius: 999px;
        padding: 0.25rem 0.6rem;
        font-size: 0.7rem;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        font-weight: 700;
        margin-bottom: 0.7rem;
    }
    .partner-feature h3 {
        color: #fff;
        font-size: 1.15rem;
        margin-bottom: 0.35rem;
        line-height: 1.25;
    }
    .partner-feature p {
        color: rgba(255,255,255,0.88);
        margin: 0;
        font-size: 0.85rem;
        line-height: 1.6;
        max-width: 32ch;
    }
    .partners-strip {
        display: grid;
        grid-template-columns: 1fr;
        gap: 0.75rem;
    }
    .partner-card {
        background: #fff;
        border: 1.5px solid #dbe8f7;
        border-radius: 14px;
        padding: 0.95rem 1rem;
        display: flex;
        align-items: center;
        gap: 0.8rem;
        transition: all 0.2s ease;
    }
    .partner-card:hover {
        transform: translateY(-4px);
        border-color: var(--brand);
        box-shadow: 0 12px 28px rgba(0,30,80,0.08);
    }
    .partner-icon {
        width: 42px;
        height: 42px;
        border-radius: 11px;
        background: #eef4ff;
        color: var(--brand);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
        flex-shrink: 0;
    }
    .partner-card strong { display: block; color: #0d1f3c; font-size: 0.92rem; }
    .partner-card span { color: #627a94; font-size: 0.8rem; }

    /* ── PROCESS ── */
    .process-section { padding: 58px 0 82px; background: #fff; }
    .process-steps {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        padding-top: 2.1rem;
        position: relative;
    }
    .process-steps::before {
        content: '';
        position: absolute;
        top: 58px; left: calc(16.66% + 20px); right: calc(16.66% + 20px);
        height: 2px;
        background: linear-gradient(90deg, #c8d8e8 0%, var(--brand) 50%, #c8d8e8 100%);
        z-index: 0;
    }
    .step-box {
        background: #f7fbff;
        border-radius: 18px;
        padding: 2rem 1.5rem;
        text-align: center;
        position: relative;
        border: 1.5px solid #e4eef8;
        transition: all 0.25s ease;
    }
    .step-box:hover { transform: translateY(-6px); box-shadow: 0 16px 40px rgba(0,30,80,0.08); border-color: var(--brand); }
    .step-number {
        width: 44px; height: 44px;
        border-radius: 50%;
        background: #fff;
        border: 2px solid var(--brand);
        color: var(--brand);
        font-weight: 800;
        font-size: 1rem;
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto 1.25rem;
        position: relative; z-index: 2;
    }
    .step-icon {
        width: 52px; height: 52px;
        border-radius: 14px;
        background: rgba(0,82,204,0.08);
        color: var(--brand);
        font-size: 1.3rem;
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto 1rem;
    }
    .step-box h3 { font-size: 1.1rem; color: #0d1f3c; margin-bottom: 0.6rem; }
    .step-box p { font-size: 0.87rem; color: #788fa8; line-height: 1.65; }

    /* ── CTA BAND ── */
    .cta-band {
        background: linear-gradient(135deg, #003380 0%, #0052CC 60%, #0070e0 100%);
        border-radius: 24px;
        margin: 0 32px 60px;
        padding: 72px 48px;
        color: #fff;
        position: relative;
        overflow: hidden;
        text-align: center;
    }
    .cta-band::before {
        content: '';
        position: absolute;
        width: 500px; height: 500px;
        border-radius: 50%;
        background: rgba(255,255,255,0.04);
        top: -200px; right: -100px;
    }
    .cta-band::after {
        content: '';
        position: absolute;
        width: 300px; height: 300px;
        border-radius: 50%;
        background: rgba(255,255,255,0.04);
        bottom: -100px; left: 50px;
    }
    .cta-band h2 { font-size: 2.25rem; color: #fff; margin-bottom: 1rem; }
    .cta-band p { font-size: 1.05rem; opacity: 0.88; max-width: 640px; margin: 0 auto 2.25rem; line-height: 1.7; }
    .cta-band-actions { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2; }
    .btn-white { background: #fff; color: var(--brand); border: none; border-radius: var(--radius-md); padding: 0.95rem 2rem; font-weight: 700; font-size: 0.95rem; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem; transition: all 0.2s; }
    .btn-white:hover { background: #eef4ff; transform: translateY(-2px); box-shadow: 0 10px 24px rgba(0,0,0,0.15); }
    .btn-outline-white { background: transparent; border: 1.5px solid rgba(255,255,255,0.4); color: #fff; border-radius: var(--radius-md); padding: 0.95rem 2rem; font-weight: 600; font-size: 0.95rem; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem; transition: all 0.2s; }
    .btn-outline-white:hover { background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.7); }

    /* ── RESPONSIVE ── */
    @media (max-width: 900px) {
        .hero-light-grid { grid-template-columns: 1fr; gap: 2.5rem; }
        .hero-visual { justify-content: center; }
        .hero-visual .main-img { width: 100%; }
        .hero-float-card.fc-top { display: none; }
        .svc-layout { grid-template-columns: 1fr; }
        .svc-tabs { flex-direction: row; flex-wrap: wrap; gap: 0.5rem; }
        .svc-panel.active { grid-template-columns: 1fr; }
        .partners-strip { grid-template-columns: 1fr; }
        .process-steps { grid-template-columns: 1fr; }
        .process-steps::before { display: none; }
        .stats-bar-inner { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .sbi { border-right: 2px solid #d7e5f7; border-bottom: 2px solid #d7e5f7; }
        .sbi:nth-child(2n) { border-right: none; }
        .sbi:nth-last-child(-n+2) { border-bottom: none; }
        .partners-section { padding: 52px 0 40px; }
        .partners-showcase { padding: 0.9rem; }
        .process-section { padding: 48px 0 64px; }
        .process-steps { padding-top: 1.5rem; }
        .cta-band { margin: 0 16px 48px; padding: 48px 24px; }
        .about-section { padding: 72px 0 42px; }
        .services-section { padding: 52px 0 76px; }
        .about-section .grid-2 { grid-template-columns: 1fr; }
        .about-badge-float { right: 10px; }
    }
    @media (max-width: 560px) {
        .stats-bar-inner { grid-template-columns: 1fr; }
        .sbi { border-right: none; border-bottom: 2px solid #d7e5f7; }
        .sbi:last-child { border-bottom: none; }
    }
</style>

{{-- ═══════════════════════════════════════
     HERO — LIGHT, MODERN & CLEAN
═══════════════════════════════════════ --}}
<section class="hero-light">
    <div class="container">
        <div class="hero-light-grid">
            <div>
                <div class="hero-light-tag">
                    <i class="fa-solid fa-shield-halved"></i>
                    IRA Licensed &bull; Corporate Insurance Uganda
                </div>
                <h1>Smart insurance for a <em>happier</em> business.</h1>
                <p class="hero-sub">
                    We work with Uganda's leading insurers to secure coverage tailored to your corporate needs — Motor, Construction, Liability, Bonds and more.
                </p>
                <div class="hero-light-actions">
                    <a href="{{ route('contact') }}" class="btn-teal">
                        <i class="fa-solid fa-comments"></i> Talk to us
                    </a>
                    <a href="{{ route('services') }}" class="btn-outline-navy">
                        Explore Services <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div class="hero-trust-pills">
                    <span class="trust-pill"><i class="fa-solid fa-circle-check"></i> IRA Regulated</span>
                    <span class="trust-pill"><i class="fa-solid fa-circle-check"></i> 14+ Products</span>
                    <span class="trust-pill"><i class="fa-solid fa-circle-check"></i> Client-First</span>
                    <span class="trust-pill"><i class="fa-solid fa-circle-check"></i> Mayfair Partner</span>
                </div>
            </div>

            <div class="hero-visual">
                <div class="main-img">
                    <img src="{{ asset('images/cover_image.png') }}" alt="Insurance advisory cover image">
                </div>
                <div class="hero-float-card fc-bottom">
                    <div class="fc-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <div class="fc-text">
                        <strong>IRA Certified</strong>
                        <span>Licensed Agency Uganda</span>
                    </div>
                </div>
                <div class="hero-float-card fc-top">
                    <div class="fc-icon" style="background: #eef4ff; color: var(--brand);"><i class="fa-solid fa-star"></i></div>
                    <div class="fc-text">
                        <strong>100+ Clients</strong>
                        <span>Trusted corporate partners</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     STATS BAR
═══════════════════════════════════════ --}}
<div class="stats-bar">
    <div class="container">
        <div class="stats-bar-inner">
            @php $stats = [['2023','Licensed Since'],['14+','Insurance Products'],['10+','Corporate Clients'],['IRA','Regulated & Certified']]; @endphp
            @foreach($stats as $s)
                <div class="sbi">
                    <strong>{{ $s[0] }}</strong>
                    <span>{{ $s[1] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════
     ABOUT — WHO WE ARE
═══════════════════════════════════════ --}}
<section class="about-section">
    <div class="container">
        <div class="grid-2" style="gap: 5rem; align-items: center;">
            <div class="about-img-wrap">
                <img src="{{ asset('images/handshake.jpg') }}" alt="Black business professionals shaking hands in a corporate setting">
                <div class="about-badge-float">
                    <div class="abf-num">IRA</div>
                    <div class="abf-lbl">Certified Partner</div>
                </div>
            </div>
            <div>
                <div class="chip" style="margin-bottom: 1rem;"><i class="fa-solid fa-building"></i> Who We Are</div>
                <h2 style="font-size: 2.25rem; color: #0d1f3c; line-height: 1.2; margin-bottom: 1rem;">
                    A Licensed Agency Built for <span style="color: var(--brand);">Corporate Uganda</span>
                </h2>
                <p style="color: #546e8a; font-size: 1rem; line-height: 1.75; margin-bottom: 0.5rem;">
                    GUF Agency Ltd is a fully incorporated, IRA-licensed corporate insurance agency dedicated to delivering expert, unbiased advisory — putting client interests first in every recommendation we make.
                </p>
                <ul class="check-list">
                    @foreach(['Incorporated under the Companies Act','Regulated by Insurance Regulatory Authority Uganda','Independent advisory — client interests always first','Preferred partner of Mayfair Insurance'] as $item)
                        <li>
                            <div class="ci"><i class="fa-solid fa-check"></i></div>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
                <div class="btn-row">
                    <a href="{{ route('about') }}" class="btn btn-primary">About GUF Agency</a>
                    <a href="{{ route('leadership') }}" class="btn btn-outline">Leadership Message</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     OUR SERVICES — TABBED LAYOUT
     (mirrors the screenshot's sidebar nav)
═══════════════════════════════════════ --}}
<section class="services-section">
    <div class="container">
        <div class="section-header text-center" style="margin-bottom: 3rem;">
            <div class="chip" style="margin: 0 auto 0.85rem;"><i class="fa-solid fa-umbrella"></i> Our Services</div>
            <h2 style="color: #0d1f3c;">What We Cover</h2>
            <div class="divider divider-center"></div>
            <p class="lead">Select a category to learn how GUF Agency protects your business.</p>
        </div>

        <div class="svc-layout">
            {{-- Sidebar tabs --}}
            <nav class="svc-tabs" role="tablist" aria-label="Insurance services">
                @php
                    $svcItems = [
                        ['id' => 'motor',        'label' => 'Motor & Fleet',          'icon' => 'car'],
                        ['id' => 'construction', 'label' => 'Construction & Bonds',   'icon' => 'helmet-safety'],
                        ['id' => 'liability',    'label' => 'Liability & Assets',      'icon' => 'building-shield'],
                        ['id' => 'fire',         'label' => 'Fire & Property',         'icon' => 'fire'],
                        ['id' => 'workman',      'label' => "Workmen's Compensation",  'icon' => 'person-digging'],
                    ];
                @endphp
                @foreach($svcItems as $i => $svc)
                    <button
                        class="svc-tab {{ $i === 0 ? 'active' : '' }}"
                        onclick="switchSvc('{{ $svc['id'] }}')"
                        id="tab-{{ $svc['id'] }}"
                        role="tab"
                        aria-selected="{{ $i === 0 ? 'true' : 'false' }}"
                        aria-controls="panel-{{ $svc['id'] }}"
                    >
                        <i class="fa-solid fa-{{ $svc['icon'] }}"></i>
                        {{ $svc['label'] }}
                    </button>
                @endforeach
                <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #e4eef8;">
                    <a href="{{ route('products') }}" class="svc-tab" style="color: var(--brand); font-weight: 700;">
                        <i class="fa-solid fa-grid-2"></i> View All 14 Products
                    </a>
                </div>
            </nav>

            {{-- Panels --}}
            <div class="svc-panels">
                @php
                    $panels = [
                        ['id' => 'motor',        'title' => 'Motor & Fleet Insurance',        'sub' => 'Motor & Fleet',       'img' => asset('images/fleet.jpg'), 'body' => 'Comprehensive coverage for corporate vehicles and entire fleets. We secure competitive motor policies that keep your operations moving — covering own damage, third-party liability, fire and theft.'],
                        ['id' => 'construction', 'title' => 'Construction & Performance Bonds','sub' => 'Construction',        'img' => asset('images/construction.jpg'), 'body' => "Project-specific cover including contractors all risk, plant & equipment, and surety bonds that satisfy tender requirements across Uganda's infrastructure sector."],
                        ['id' => 'liability',    'title' => 'Liability & Asset Insurance',    'sub' => 'Liability',           'img' => asset('images/liability-assets.jpg'), 'body' => 'Public liability, product liability and asset all-risk policies to safeguard your balance sheet from unforeseen legal claims and property damage.'],
                        ['id' => 'fire',         'title' => 'Fire & Property Insurance',      'sub' => 'Fire & Property',     'img' => asset('images/fire-and-property.jpg'), 'body' => 'Protect your premises, stock, equipment and business interruption exposure against fire, lightning, explosion and allied perils.'],
                        ['id' => 'workman',      'title' => "Workmen's Compensation",         'sub' => "Workmen's Comp",      'img' => asset('images/worksmen-compensation.jpg'), 'body' => 'Statutory and enhanced cover for your workforce against occupational injuries and illnesses — ensuring compliance and protecting both employer and employee.'],
                    ];
                @endphp
                @foreach($panels as $i => $panel)
                    <div class="svc-panel {{ $i === 0 ? 'active' : '' }}" id="panel-{{ $panel['id'] }}" role="tabpanel" aria-labelledby="tab-{{ $panel['id'] }}">
                        <div class="svc-panel-img">
                            <img src="{{ $panel['img'] }}" alt="{{ $panel['title'] }}">
                        </div>
                        <div class="svc-panel-body">
                            <span class="overline">{{ $panel['sub'] }}</span>
                            <h3>{{ $panel['title'] }}</h3>
                            <p>{{ $panel['body'] }}</p>
                            <a href="{{ route('contact') }}" class="btn-teal" style="font-size: 0.9rem; padding: 0.75rem 1.5rem;">
                                <i class="fa-solid fa-paper-plane"></i> Request a Quote
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     PARTNERS
═══════════════════════════════════════ --}}
<section class="partners-section">
    <div class="container">
        <div class="grid-2" style="gap: 2rem; align-items: center;">
            <div>
                <div class="chip" style="margin-bottom: 1rem;"><i class="fa-solid fa-handshake"></i> Our Partners</div>
                <h2 style="font-size: 2.15rem; color: #0d1f3c; line-height: 1.2; margin-bottom: 0.8rem;">
                    Backed by Trusted Insurance Partners
                </h2>
                <p style="color: #546e8a; font-size: 0.97rem; line-height: 1.75; margin-bottom: 0;">
                    We collaborate with reliable insurers to secure competitive coverage, prompt claims support, and long-term protection for our clients.
                </p>
            </div>
            <div class="partners-strip">
                @php
                    $partners = [
                        ['building-columns', 'Mayfair Insurance Uganda', 'Authorized partner insurer'],
                        ['shield-halved', 'IRA Regulatory Framework', 'Licensed and compliant advisory'],
                        ['scale-balanced', 'Independent Market Access', 'Objective, client-first recommendations'],
                    ];
                @endphp
                @foreach($partners as $partner)
                    <div class="partner-card">
                        <div class="partner-icon"><i class="fa-solid fa-{{ $partner[0] }}"></i></div>
                        <div>
                            <strong>{{ $partner[1] }}</strong>
                            <span>{{ $partner[2] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="btn-row" style="margin-top: 1.4rem;">
            <a href="{{ route('partners') }}" class="btn btn-primary">View Partner Details</a>
            <a href="{{ route('contact') }}" class="btn btn-outline">Speak to an Advisor</a>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     HOW IT WORKS — 3 STEPS
═══════════════════════════════════════ --}}
<section class="process-section">
    <div class="container">
        <div class="section-header text-center">
            <div class="chip"><i class="fa-solid fa-diagram-project"></i> Simple Process</div>
            <h2 style="color: #0d1f3c;">How It Works</h2>
            <div class="divider divider-center"></div>
            <p class="lead">Getting the right coverage takes three simple steps.</p>
        </div>
        <div class="process-steps">
            @php
                $steps = [
                    ['1', 'comments', 'Tell Us Your Needs', 'Share your business details and risk profile with our advisors — in person, by phone, or via our contact form.'],
                    ['2', 'magnifying-glass-chart', 'We Assess & Advise', 'We evaluate your risks, compare policies across Uganda\'s insurer market, and recommend the most suitable cover.'],
                    ['3', 'shield-halved', 'Get Covered', 'We place your policy and manage it end-to-end — renewals, documentation, and claims advocacy included.'],
                ];
            @endphp
            @foreach($steps as $step)
                <div class="step-box">
                    <div class="step-number">{{ $step[0] }}</div>
                    <div class="step-icon"><i class="fa-solid fa-{{ $step[1] }}"></i></div>
                    <h3>{{ $step[2] }}</h3>
                    <p>{{ $step[3] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════
     CTA BAND
═══════════════════════════════════════ --}}
<div class="cta-band">
    <h2>Speak with a <span style="text-decoration: underline; text-decoration-color: rgba(255,255,255,0.4);">Corporate Expert</span> Today</h2>
    <p>Request a free on-site risk assessment. Our team will identify your exposures and recommend the right coverage — no obligation, no pressure.</p>
    <div class="cta-band-actions">
        <a href="{{ route('contact') }}" class="btn-white">
            <i class="fa-solid fa-paper-plane"></i> Get a Free Quote
        </a>
        <a href="{{ route('services') }}" class="btn-outline-white">
            Explore Our Services
        </a>
    </div>
</div>

<script>
function switchSvc(id) {
    document.querySelectorAll('.svc-tab').forEach(function(t) {
        t.classList.remove('active');
        t.setAttribute('aria-selected', 'false');
    });
    document.querySelectorAll('.svc-panel').forEach(function(p) {
        p.classList.remove('active');
    });
    var tab = document.getElementById('tab-' + id);
    var panel = document.getElementById('panel-' + id);
    if (tab) { tab.classList.add('active'); tab.setAttribute('aria-selected', 'true'); }
    if (panel) { panel.classList.add('active'); }
}
</script>

@endsection