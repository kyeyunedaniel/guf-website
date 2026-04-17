<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GUF Agency Ltd | Corporate Insurance Agency</title>
    <meta
        name="description"
        content="GUF Agency Ltd is a licensed corporate insurance agency in Uganda delivering expert guidance and tailored insurance solutions for businesses, organizations, and individuals."
    >
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=sora:400,500,600,700,800|newsreader:500,600,700" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        :root {
            --bg: #eff4f8;
            --ink: #0d1d2f;
            --muted: #45576d;
            --brand: #005f7b;
            --brand-deep: #012f45;
            --brand-soft: #eaf8ff;
            --accent: #f3a55c;
            --surface: #ffffff;
            --line: #d6e0ea;
            --radius-lg: 28px;
            --radius-md: 18px;
            --shadow-soft: 0 26px 56px rgba(12, 38, 69, 0.13);
            --shadow-card: 0 16px 30px rgba(8, 33, 61, 0.08);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: "Sora", "Segoe UI", sans-serif;
            line-height: 1.65;
            color: var(--ink);
            background:
                radial-gradient(900px 500px at 0% 8%, rgba(0, 95, 123, 0.18), transparent 52%),
                radial-gradient(600px 360px at 92% 12%, rgba(243, 165, 92, 0.22), transparent 55%),
                linear-gradient(155deg, #edf4fb 0%, #eef3f7 55%, #e4edf6 100%);
        }

        .container {
            width: min(1160px, 92%);
            margin: 0 auto;
        }

        section {
            padding: 4.7rem 0;
        }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 30;
            backdrop-filter: blur(10px);
            background: rgba(239, 244, 248, 0.87);
            border-bottom: 1px solid rgba(214, 224, 234, 0.75);
        }

        .site-header .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding: 0.82rem 0;
        }

        .logo {
            display: inline-flex;
            align-items: center;
            gap: 0.7rem;
            text-decoration: none;
            color: var(--ink);
            font-weight: 800;
            letter-spacing: 0.02em;
        }

        .logo-mark {
            width: 2.35rem;
            height: 2.35rem;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: linear-gradient(145deg, var(--brand), #0e7ea1);
            color: #fff;
            box-shadow: 0 12px 24px rgba(0, 95, 123, 0.36);
        }

        .main-nav {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            gap: 0.85rem;
            font-size: 0.88rem;
        }

        .main-nav a {
            text-decoration: none;
            color: var(--muted);
            padding: 0.35rem 0.65rem;
            border-radius: 999px;
            transition: color 0.25s ease, background 0.25s ease;
        }

        .main-nav a:hover {
            color: var(--brand-deep);
            background: rgba(0, 95, 123, 0.08);
        }

        .header-cta {
            text-decoration: none;
            color: #fff;
            background: linear-gradient(140deg, #005f7b, #0c7fa3);
            border-radius: 999px;
            padding: 0.58rem 1rem;
            font-size: 0.84rem;
            font-weight: 700;
            box-shadow: 0 12px 22px rgba(0, 95, 123, 0.28);
        }

        .hero {
            padding: 5.3rem 0 3.3rem;
            position: relative;
            overflow: hidden;
        }

        .hero::before,
        .hero::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
        }

        .hero::before {
            width: 520px;
            height: 520px;
            right: -220px;
            top: -180px;
            background: radial-gradient(circle, rgba(243, 165, 92, 0.25) 0%, rgba(243, 165, 92, 0) 70%);
        }

        .hero::after {
            width: 540px;
            height: 540px;
            left: -240px;
            bottom: -280px;
            background: radial-gradient(circle, rgba(0, 95, 123, 0.22) 0%, rgba(0, 95, 123, 0) 72%);
        }

        .hero-shell {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: 1.12fr 0.88fr;
            gap: 1.25rem;
            align-items: stretch;
        }

        .hero-primary,
        .hero-secondary {
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-soft);
        }

        .hero-primary {
            background: linear-gradient(135deg, #012f45 0%, #045a75 58%, #0e7b9f 100%);
            color: #fff;
            padding: 3rem;
            position: relative;
            overflow: hidden;
            animation: riseIn 0.78s ease both;
        }

        .hero-primary::after {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            right: -70px;
            bottom: -110px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.26) 0%, rgba(255, 255, 255, 0) 72%);
        }

        .hero-secondary {
            background: rgba(255, 255, 255, 0.86);
            border: 1px solid rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(6px);
            padding: 1.35rem;
            display: grid;
            gap: 1rem;
            animation: riseIn 0.9s ease both;
            animation-delay: 0.08s;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            font-size: 0.76rem;
            font-weight: 700;
            color: rgba(255, 255, 255, 0.78);
        }

        h1,
        .section-title,
        .quote p {
            font-family: "Newsreader", Georgia, serif;
            line-height: 1.08;
        }

        h1 {
            margin: 0.95rem 0 1rem;
            font-size: clamp(2.2rem, 4vw, 3.6rem);
            max-width: 14ch;
        }

        .hero-lead {
            margin: 0;
            max-width: 56ch;
            color: rgba(255, 255, 255, 0.86);
            font-size: 1.03rem;
        }

        .hero-tagline {
            margin-top: 1rem;
            color: #fff;
            font-weight: 700;
        }

        .hero-actions {
            margin-top: 1.7rem;
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
        }

        .btn {
            text-decoration: none;
            border-radius: 999px;
            padding: 0.8rem 1.3rem;
            font-size: 0.94rem;
            font-weight: 700;
            border: 1px solid transparent;
            transition: transform 0.24s ease, box-shadow 0.24s ease, background 0.24s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-primary {
            color: #fff;
            background: linear-gradient(145deg, #f3a55c, #ffbc7f);
            box-shadow: 0 12px 24px rgba(243, 165, 92, 0.32);
        }

        .btn-primary:hover {
            box-shadow: 0 15px 26px rgba(243, 165, 92, 0.38);
        }

        .btn-secondary {
            color: #fff;
            border-color: rgba(255, 255, 255, 0.75);
            background: rgba(255, 255, 255, 0.09);
        }

        .quick-card {
            border: 1px solid var(--line);
            border-radius: var(--radius-md);
            background: linear-gradient(170deg, #ffffff, #f8fbff);
            padding: 1.15rem;
            box-shadow: var(--shadow-card);
        }

        .quick-card h3 {
            margin: 0;
            color: var(--brand-deep);
            font-size: 1rem;
        }

        .quick-card p {
            margin: 0.55rem 0 0;
            color: var(--muted);
            font-size: 0.92rem;
        }

        .stat-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 0.6rem;
        }

        .stat {
            border-radius: 14px;
            background: #f4faff;
            border: 1px solid #d6ecf8;
            padding: 0.88rem;
        }

        .stat strong {
            display: block;
            line-height: 1;
            margin-bottom: 0.3rem;
            color: var(--brand-deep);
            font-size: 1.14rem;
        }

        .stat span {
            display: block;
            font-size: 0.82rem;
            color: var(--muted);
        }

        .trust-band {
            margin-top: 1.25rem;
            background: #fff;
            border: 1px solid var(--line);
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-card);
            padding: 0.7rem;
        }

        .trust-band ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 0.5rem;
        }

        .trust-band li {
            border-radius: 12px;
            padding: 0.7rem;
            background: #f6fbff;
            border: 1px solid #dceaf4;
            text-align: center;
            font-size: 0.82rem;
            color: var(--brand-deep);
            font-weight: 600;
        }

        .section-heading {
            margin-bottom: 1.55rem;
            max-width: 72ch;
        }

        .section-heading p {
            margin: 0.55rem 0 0;
            color: var(--muted);
        }

        .section-title {
            margin: 0;
            font-size: clamp(1.8rem, 3.1vw, 2.7rem);
        }

        .split {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
        }

        .panel,
        .quote,
        .product,
        .cta-band {
            border-radius: var(--radius-md);
        }

        .panel {
            border: 1px solid var(--line);
            background: rgba(255, 255, 255, 0.93);
            box-shadow: var(--shadow-card);
            padding: 1.45rem;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .panel:hover,
        .product:hover {
            transform: translateY(-3px);
            box-shadow: 0 22px 32px rgba(8, 33, 61, 0.13);
        }

        .panel h3,
        .product h4 {
            margin: 0 0 0.62rem;
            color: var(--brand-deep);
        }

        .panel p,
        .product p {
            margin: 0;
            color: var(--muted);
        }

        .quote {
            padding: 1.9rem;
            background: linear-gradient(135deg, #012f45, #045c79 55%, #0f789c);
            color: #fff;
            box-shadow: var(--shadow-soft);
        }

        .quote p {
            margin: 0 0 1rem;
            font-size: 1.45rem;
            color: #f8fcff;
        }

        .quote span {
            color: rgba(255, 255, 255, 0.78);
            font-size: 0.93rem;
        }

        .pill-list,
        .clean-list,
        .contact-list,
        .client-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .pill-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.55rem;
        }

        .pill-list li {
            border-radius: 999px;
            background: linear-gradient(145deg, #f5fbff, #ffffff);
            border: 1px solid #dce9f3;
            color: var(--brand-deep);
            font-size: 0.86rem;
            font-weight: 700;
            padding: 0.44rem 0.86rem;
        }

        .clean-list li {
            border-radius: 12px;
            border: 1px solid var(--line);
            background: #fff;
            color: var(--muted);
            padding: 0.7rem 0.85rem;
        }

        .clean-list li + li {
            margin-top: 0.55rem;
        }

        .clean-list strong,
        .contact-list strong {
            color: var(--ink);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 0.72rem;
        }

        .product {
            border: 1px solid var(--line);
            background: linear-gradient(165deg, #ffffff, #f7fbff);
            box-shadow: var(--shadow-card);
            padding: 1rem;
            transition: transform 0.22s ease, box-shadow 0.22s ease;
        }

        .product h4 {
            font-size: 0.98rem;
        }

        .product p {
            font-size: 0.9rem;
        }

        .cta-band {
            position: relative;
            overflow: hidden;
            background: linear-gradient(126deg, #012f45 0%, #0a5876 52%, #1982a6 100%);
            color: #f7fcff;
            padding: 2rem;
            box-shadow: var(--shadow-soft);
        }

        .cta-band::after {
            content: "";
            position: absolute;
            right: -110px;
            top: -90px;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.34) 0%, rgba(255, 255, 255, 0) 72%);
        }

        .cta-band h3 {
            margin: 0;
            font-size: 1.55rem;
        }

        .cta-band p {
            margin: 0.9rem 0 0;
            max-width: 65ch;
            color: rgba(247, 252, 255, 0.89);
        }

        .cta-band .hero-actions {
            margin-top: 1.3rem;
        }

        .cta-band .btn-secondary {
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(255, 255, 255, 0.76);
            color: #fff;
        }

        .client-list {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 0.68rem;
        }

        .client-list li {
            border: 1px solid var(--line);
            border-radius: 12px;
            background: #fff;
            padding: 0.8rem;
            font-size: 0.92rem;
            color: var(--ink);
            box-shadow: 0 8px 18px rgba(8, 33, 61, 0.06);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
        }

        .contact-list li + li {
            margin-top: 0.5rem;
        }

        .contact-list a {
            color: var(--ink);
            text-decoration-color: rgba(13, 29, 47, 0.3);
        }

        footer {
            border-top: 1px solid var(--line);
            color: var(--muted);
            font-size: 0.93rem;
            padding: 1.5rem 0 2.3rem;
        }

        .reveal {
            animation: riseIn 0.75s ease both;
        }

        .reveal[data-delay="1"] {
            animation-delay: 0.08s;
        }

        .reveal[data-delay="2"] {
            animation-delay: 0.15s;
        }

        .reveal[data-delay="3"] {
            animation-delay: 0.22s;
        }

        @keyframes riseIn {
            from {
                opacity: 0;
                transform: translateY(18px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 1060px) {
            .hero-shell,
            .split,
            .contact-grid,
            .products-grid {
                grid-template-columns: 1fr;
            }

            .trust-band ul {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .stat-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .products-grid {
                gap: 0.9rem;
            }
        }

        @media (max-width: 760px) {
            .main-nav {
                display: none;
            }

            .header-cta {
                display: none;
            }

            .hero {
                padding-top: 4.3rem;
            }

            .hero-primary {
                padding: 2rem;
            }

            .client-list,
            .trust-band ul,
            .stat-grid {
                grid-template-columns: 1fr;
            }

            section {
                padding: 3.8rem 0;
            }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="container">
            <a href="#home" class="logo" aria-label="GUF Agency home">
                <span class="logo-mark" aria-hidden="true">G</span>
                <span>GUF Agency Ltd</span>
            </a>
            <nav class="main-nav" aria-label="Main navigation">
                <a href="#about">About</a>
                <a href="#leadership">Leadership</a>
                <a href="#services">Services</a>
                <a href="#products">Products</a>
                <a href="#contact">Contact</a>
            </nav>
            <a class="header-cta" href="#contact">Request Consultation</a>
        </div>
    </header>

    <main>
        <section class="hero" id="home">
            <div class="container hero-shell">
                <article class="hero-primary">
                    <span class="eyebrow">Licensed Corporate Insurance Agency</span>
                    <h1>Your Trusted Corporate Insurance Partner</h1>
                    <p class="hero-lead">Providing expert guidance and tailored insurance solutions to protect your business, assets, and future.</p>
                    <p class="hero-tagline">Our Customers, Our Priority</p>
                    <div class="hero-actions">
                        <a class="btn btn-primary" href="#contact">Get a Quote</a>
                        <a class="btn btn-secondary" href="#services">Explore Services</a>
                    </div>
                </article>

                <aside class="hero-secondary" aria-label="Company highlights">
                    <article class="quick-card">
                        <h3>Fully Registered and Licensed</h3>
                        <p>Incorporated in 2023 under the Companies Act and regulated by the Insurance Regulatory Authority of Uganda.</p>
                    </article>
                    <article class="quick-card">
                        <h3>Independent Advisory</h3>
                        <p>We provide unbiased guidance to secure optimal protection and value for each client profile.</p>
                    </article>
                    <div class="stat-grid" aria-label="Highlights">
                        <div class="stat"><strong>2023</strong><span>Incorporated</span></div>
                        <div class="stat"><strong>14+</strong><span>Product Lines</span></div>
                        <div class="stat"><strong>3</strong><span>Direct Contact Lines</span></div>
                    </div>
                </aside>
            </div>

            <div class="container trust-band reveal" data-delay="1" aria-label="Trust statements">
                <ul>
                    <li>Licensed and regulated in Uganda</li>
                    <li>Claims advocacy from quote to payout</li>
                    <li>Corporate and individual advisory support</li>
                    <li>Free risk assessment at client premises</li>
                </ul>
            </div>
        </section>

        <section id="about">
            <div class="container">
                <div class="section-heading reveal">
                    <h2 class="section-title">About Us</h2>
                    <p>GUF Agency Ltd is a licensed corporate insurance agency committed to operational excellence, transparency, and accountability.</p>
                </div>
                <div class="split">
                    <article class="panel reveal" data-delay="1">
                        <h3>Company Overview</h3>
                        <p>
                            As a fully incorporated entity licensed and regulated by the Insurance Regulatory Authority of Uganda and operating under an insurance company, we are committed to operational excellence, transparency, and accountability.
                        </p>
                    </article>
                    <article class="panel reveal" data-delay="2">
                        <h3>About GUF Agency</h3>
                        <p>
                            We provide expert guidance and tailored solutions to businesses, organizations, corporate firms, government bodies, and individuals seeking comprehensive coverage. Our network of top-tier insurance providers helps us negotiate competitive rates and terms.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section id="leadership">
            <div class="container split">
                <article class="quote reveal">
                    <p>"Imagine a life free from worry. Let us help you transfer risk to the right corporate insurance partner and secure your future so you can focus on what truly matters."</p>
                    <strong>Muganga Lydia</strong><br>
                    <span>Principal Officer</span>
                </article>
                <article class="panel reveal" data-delay="1">
                    <h3>Leadership Message</h3>
                    <p>
                        At GUF Agency, we understand that worry is a natural response to life's uncertainties. We are committed to helping clients gain peace of mind through the right coverage and support, from policy selection to claims guidance.
                    </p>
                </article>
            </div>
        </section>

        <section id="vision">
            <div class="container">
                <div class="section-heading reveal">
                    <h2 class="section-title">Vision, Mission and Strategic Focus</h2>
                    <p>We are focused on customer-centered corporate insurance advisory built on trust and performance.</p>
                </div>
                <div class="split">
                    <article class="panel reveal" data-delay="1">
                        <h3>Vision</h3>
                        <p>To be the most effective and efficient corporate insurance agents in customer satisfaction in Uganda.</p>
                    </article>
                    <article class="panel reveal" data-delay="2">
                        <h3>Mission</h3>
                        <p>To attract, train, and identify customer corporate insurance needs.</p>
                    </article>
                    <article class="panel reveal" data-delay="2">
                        <h3>Core Values</h3>
                        <ul class="pill-list">
                            <li>Teamwork</li>
                            <li>Reliability</li>
                            <li>Efficiency</li>
                            <li>Passion</li>
                            <li>People</li>
                            <li>Performance</li>
                        </ul>
                    </article>
                    <article class="panel reveal" data-delay="3">
                        <h3>Primary Objective and Role</h3>
                        <p>We provide unbiased advice and guidance as intermediaries between clients and insurance providers, ensuring optimal corporate insurance coverage and value.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="container">
                <div class="section-heading reveal">
                    <h2 class="section-title">Products and Service Mandate</h2>
                    <p>GUF Agency's mandate is to provide cradle-to-grave corporate insurance solutions for customers.</p>
                </div>
                <div class="split">
                    <article class="panel reveal" data-delay="1">
                        <h3>Service Offerings</h3>
                        <ul class="clean-list">
                            <li><strong>Corporate Insurance Company Selection:</strong> We select the most suitable insurance company based on coverage, pricing, and claims handling.</li>
                            <li><strong>Policy Placement and Management:</strong> We facilitate policy placement and manage insurance programs on behalf of our clients.</li>
                            <li><strong>Claims Advocacy:</strong> We ensure fair and prompt claims settlements for our clients.</li>
                        </ul>
                    </article>
                    <article class="panel reveal" data-delay="2">
                        <h3>Client Benefit Proposition</h3>
                        <ul class="clean-list">
                            <li><strong>Expert Guidance:</strong> Experienced advice to cover client needs and risks in all areas.</li>
                            <li><strong>Competitive Pricing:</strong> Negotiated rates and terms for optimal value.</li>
                            <li><strong>Personalized Service:</strong> Dedicated support and prompt attention.</li>
                            <li><strong>Efficiency and Effectiveness:</strong> A seamless and hassle-free experience from quote to claim.</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section id="why-insurance">
            <div class="container split">
                <article class="panel reveal">
                    <h3>Why Corporate Insurance</h3>
                    <p>
                        "Security is mostly a superstition... Life is either a daring adventure, or nothing."<br>
                        <strong>Helen Keller</strong>
                    </p>
                    <ul class="clean-list" style="margin-top: 1rem;">
                        <li>Our customers are our biggest asset, and their happiness is our promise.</li>
                        <li>Clear procedures and processes.</li>
                        <li>Minimum rates as per the insurance partner.</li>
                        <li>Innovative products and reliable service.</li>
                        <li>Efficient follow-up on client payment claims.</li>
                        <li>Highly trained staff to reinforce skills and competencies.</li>
                    </ul>
                </article>
                <article class="panel reveal" data-delay="1">
                    <h3>Insurance Partner</h3>
                    <p>We are proud to partner with <strong>Mayfair Insurance Uganda</strong>, a reputable and trusted provider.</p>
                    <p style="margin-top: 0.75rem;">However, as corporate insurance agents, we remain unbiased and committed to advising clients on the best insurance solutions available in the market for optimal coverage and value.</p>
                </article>
            </div>
        </section>

        <section id="products">
            <div class="container">
                <div class="section-heading reveal">
                    <h2 class="section-title">Insurance Products</h2>
                    <p>Comprehensive protection options for businesses, projects, operations, and people.</p>
                </div>
                <div class="products-grid">
                    <article class="product reveal" data-delay="1"><h4>Motor Comprehensive Insurance</h4><p>Covers vehicle damage, third-party liabilities, theft, and related risks.</p></article>
                    <article class="product reveal" data-delay="1"><h4>Bonds</h4><p>Performance Bonds, Customs Bonds (CB6), and RCTG Bonds for contract and transit security.</p></article>
                    <article class="product reveal" data-delay="1"><h4>Contractors All Risks Insurance</h4><p>Protects against project-related damages, losses, and liabilities.</p></article>
                    <article class="product reveal" data-delay="2"><h4>Money Insurance</h4><p>Covers loss or theft of money, securities, and valuables.</p></article>
                    <article class="product reveal" data-delay="2"><h4>Fire Insurance</h4><p>Protection against losses caused by fire, explosions, and related perils.</p></article>
                    <article class="product reveal" data-delay="2"><h4>Burglary Insurance</h4><p>Covers theft, burglary, and housebreaking losses.</p></article>
                    <article class="product reveal" data-delay="2"><h4>Travel Insurance</h4><p>Coverage for trip disruptions, emergencies, and travel-related losses.</p></article>
                    <article class="product reveal" data-delay="2"><h4>Agriculture Insurance</h4><p>Protects against crop failures, livestock deaths, and agricultural risks.</p></article>
                    <article class="product reveal" data-delay="3"><h4>Marine Insurance</h4><p>Coverage for ships, cargo, and other marine assets.</p></article>
                    <article class="product reveal" data-delay="3"><h4>Machinery and Equipment Insurance</h4><p>Protection against breakdowns, damage, and downtime losses.</p></article>
                    <article class="product reveal" data-delay="3"><h4>Group and Personal Accident Insurance</h4><p>Financial support for injuries, disabilities, and accidental deaths.</p></article>
                    <article class="product reveal" data-delay="3"><h4>Goods in Transit Insurance</h4><p>Coverage for loss or damage to goods during transportation.</p></article>
                    <article class="product reveal" data-delay="3"><h4>Public Liability Insurance</h4><p>Protects against third-party injury, damage, and loss claims.</p></article>
                    <article class="product reveal" data-delay="3"><h4>Workmen Compensation Insurance</h4><p>Coverage for employee work-related injuries, illnesses, and deaths.</p></article>
                </div>
            </div>
        </section>

        <section id="promise">
            <div class="container">
                <article class="cta-band reveal">
                    <h3>Customer Promise</h3>
                    <p>We deliver exceptional customer service through fast responses, regular policy updates, continuous education, claims support, and free risk assessments at client premises.</p>
                    <div class="hero-actions">
                        <a class="btn btn-primary" href="#contact">Start With a Free Risk Assessment</a>
                        <a class="btn btn-secondary" href="#contact">Talk to Our Team</a>
                    </div>
                </article>
            </div>
        </section>

        <section id="clients">
            <div class="container">
                <div class="section-heading reveal">
                    <h2 class="section-title">Our Clients</h2>
                    <p>Trusted by businesses across different sectors.</p>
                </div>
                <ul class="client-list">
                    <li>Suppliers World Ltd</li>
                    <li>Cadam Enterprises</li>
                    <li>Maybach Motors</li>
                    <li>Kheri Group / Be Forward</li>
                    <li>Future Holdings Co. Ltd</li>
                    <li>Kampala Modernity Ltd</li>
                    <li>Inward African Forwarders Ltd</li>
                    <li>FFICD Ltd</li>
                    <li>Xcusive Cuttings Ltd</li>
                    <li>Mogo Micro-Finance</li>
                    <li>Among others</li>
                </ul>
            </div>
        </section>

        <section id="contact">
            <div class="container contact-grid">
                <article class="panel reveal">
                    <h3>Contact Information</h3>
                    <ul class="contact-list">
                        <li><strong>Address:</strong> P.O. Box 140782 Kampala, Uganda</li>
                        <li>Plot 30 Conrad House, Jinja Road</li>
                        <li>2nd Floor, Room No. 2</li>
                        <li><strong>Phone:</strong> +256 772 588 426</li>
                        <li>+256 701 588 426</li>
                        <li>+256 701 890 451</li>
                    </ul>
                </article>
                <article class="panel reveal" data-delay="1">
                    <h3>Email Contacts</h3>
                    <ul class="contact-list">
                        <li>
                            <strong>General Email:</strong>
                            <a href="mailto:business@gufagency.com">business@gufagency.com</a>
                        </li>
                        <li>
                            <strong>Principal Email:</strong>
                            <a href="mailto:mugangalydia@gmail.com">mugangalydia@gmail.com</a>
                        </li>
                    </ul>
                    <p style="margin-top: 0.9rem; color: var(--muted);">For inquiries, quotations, and risk advisory support, contact our team and we will respond promptly.</p>
                </article>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">Our Customers, Our Priority</div>
    </footer>
</body>
</html>
