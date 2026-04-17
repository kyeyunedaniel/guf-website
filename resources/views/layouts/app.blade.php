<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GUF Agency Ltd | Corporate Insurance Partner Uganda')</title>
    <meta name="description" content="@yield('description', 'GUF Agency Ltd is a licensed corporate insurance agency offering expert risk management and tailored solutions in Uganda. IRA certified.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        /* ============================================
           PROFESSIONAL INSURANCE THEME
           Primary: #0052CC | White | Black/Grayscale
        ============================================ */
        :root {
            --brand: #0052CC;
            --brand-dark: #003D99;
            --brand-light: #b3ccff;
            --brand-ultra-light: #e8f0fe;
            --brand-lt: #80aaff;
            
            --gray-900: #111111;
            --gray-800: #1f1f1f;
            --gray-700: #2d2d2d;
            --gray-600: #4a4a4a;
            --gray-500: #6e6e6e;
            --gray-400: #9a9a9a;
            --gray-300: #c4c4c4;
            --gray-200: #e5e5e5;
            --gray-100: #f5f5f5;
            --white: #ffffff;
            
            --shadow-sm: 0 2px 8px rgba(0,0,0,0.04);
            --shadow-md: 0 8px 24px rgba(0,0,0,0.06);
            --shadow-lg: 0 16px 48px rgba(0,0,0,0.08);
            --shadow-xl: 0 24px 64px rgba(0,0,0,0.12);
            --shadow-brand: 0 8px 20px rgba(0,82,204,0.2);
            
            --radius-sm: 6px;
            --radius-md: 12px;
            --radius-lg: 20px;
            --radius-xl: 28px;
            --r-md: 12px;
            --r-lg: 20px;
            
            --transition: all 0.25s ease;
            --sh-lg: var(--shadow-lg);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--gray-800);
            background: var(--white);
            font-size: clamp(16px, 0.25vw + 15px, 18px);
            line-height: 1.55;
            -webkit-font-smoothing: antialiased;
        }

        img {
            max-width: 100%;
            height: auto;
        }
        
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 32px;
        }
        
        /* Typography */
        h1, h2, h3, h4 {
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -0.02em;
            color: var(--gray-900);
        }
        
        h1 { font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 1.25rem; }
        h2 { font-size: clamp(1.75rem, 3.5vw, 2.5rem); margin-bottom: 1rem; }
        h3 { font-size: 1.42rem; margin-bottom: 0.75rem; }
        .section-header { text-align: center; margin-bottom: 3rem; }
        .section-header .overline {
            font-size: 0.75rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            font-weight: 700;
            color: var(--brand);
            margin-bottom: 0.75rem;
            display: inline-block;
        }
        .section-header h2 { margin-bottom: 1rem; }
        .section-header .lead {
            color: var(--gray-600);
            max-width: 680px;
            margin: 0 auto;
            font-size: 1.16rem;
        }
        
        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.85rem 1.75rem;
            font-weight: 600;
            font-size: 0.95rem;
            border-radius: var(--radius-md);
            transition: var(--transition);
            cursor: pointer;
            text-decoration: none;
            border: 1.5px solid transparent;
            line-height: 1;
        }
        .btn-primary {
            background: var(--brand);
            color: #ffffff;
            border-color: var(--brand);
        }
        .btn-primary:hover {
            background: var(--brand-dark);
            border-color: var(--brand-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-brand);
        }
        .btn-outline {
            background: transparent;
            border-color: var(--gray-300);
            color: var(--gray-800);
        }
        .btn-outline:hover {
            border-color: var(--brand);
            color: var(--brand);
            background: var(--brand-ultra-light);
        }
        .btn-dark {
            background: var(--gray-900);
            color: white;
            border-color: var(--gray-900);
        }
        .btn-dark:hover {
            background: var(--gray-700);
            transform: translateY(-2px);
        }
        .btn-lg { padding: 1rem 2rem; font-size: 1rem; }
        .btn-light {
            background: #ffffff;
            color: var(--gray-900);
            border-color: #ffffff;
        }
        .btn-ghost-light {
            background: transparent;
            border-color: rgba(255,255,255,0.4);
            color: #ffffff;
        }

        .btn-row {
            display: flex;
            gap: 0.9rem;
            flex-wrap: wrap;
            align-items: center;
        }

        .chip {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.4rem 0.85rem;
            border-radius: 999px;
            font-size: 0.78rem;
            font-weight: 600;
            background: var(--brand-ultra-light);
            color: var(--gray-800);
            border: 1px solid var(--brand-light);
        }
        .chip-light {
            background: rgba(255,255,255,0.08);
            border-color: rgba(255,255,255,0.3);
            color: #ffffff;
        }

        .grid-2 {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 2rem;
        }
        .grid-3 {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 2rem;
        }

        .card {
            background: #ffffff;
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            padding: 1.5rem;
        }
        .card-brand {
            background: var(--brand-ultra-light);
            border-color: var(--brand-light);
        }

        .icon-box {
            width: 44px;
            height: 44px;
            border-radius: var(--radius-md);
            background: var(--brand-ultra-light);
            color: var(--brand-dark);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0.9rem;
        }

        .lead {
            color: var(--gray-600);
            max-width: 68ch;
            font-size: 1.04rem;
            line-height: 1.72;
        }

        .divider {
            width: 84px;
            height: 4px;
            background: var(--brand);
            border-radius: 999px;
            margin: 1rem 0;
        }
        .divider-center {
            margin-left: auto;
            margin-right: auto;
        }

        .text-center { text-align: center; }

        .list-check {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 0.75rem;
        }
        .list-check li {
            display: flex;
            gap: 0.65rem;
            align-items: flex-start;
            color: var(--gray-700);
        }
        .list-check li i {
            margin-top: 0.2rem;
            color: var(--brand);
        }

        .page-hero {
            padding: 4.5rem 0 3rem;
            background: linear-gradient(135deg, var(--gray-900) 0%, #1c2e2d 100%);
            color: #ffffff;
        }
        .page-hero h1 { color: #ffffff; }
        .page-hero .lead { color: rgba(255,255,255,0.82); }
        .page-hero-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 2.2rem;
            align-items: center;
        }
        .page-hero img {
            width: 100%;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
        }

        .section-soft {
            background: var(--gray-100);
        }

        .cta-section {
            background: var(--gray-900);
            color: #ffffff;
            padding: 4rem 1rem;
            margin: 2.5rem 0;
            border-radius: var(--radius-xl);
        }
        .cta-section h2,
        .cta-section p {
            color: #ffffff;
        }
        .cta-inner {
            text-align: center;
            max-width: 860px;
            margin: 0 auto;
        }
        
        /* Navbar */
        .navbar {
            position: sticky;
            top: 0;
            background: var(--white);
            border-bottom: 1px solid var(--gray-200);
            z-index: 1000;
            backdrop-filter: blur(10px);
            background: rgba(255,255,255,0.96);
        }
        .nav-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 74px;
        }
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .logo-icon {
            width: 40px;
            height: 40px;
            background: var(--brand);
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray-900);
            font-weight: 800;
            font-size: 1.2rem;
        }
        .logo-text h4 {
            font-size: 1.1rem;
            margin-bottom: 0;
            line-height: 1.2;
        }
        .logo-text span {
            font-size: 0.7rem;
            color: var(--gray-600);
            letter-spacing: 0.5px;
        }
        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }
        .nav-links a {
            text-decoration: none;
            color: var(--gray-700);
            font-weight: 500;
            font-size: 0.9rem;
            transition: var(--transition);
        }
        .nav-links a:hover, .nav-links a.active {
            color: var(--brand);
        }
        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--gray-800);
        }
        
        /* Hero */
        .hero {
            background: linear-gradient(135deg, var(--gray-900) 0%, #1a2a2a 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }
        .hero .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            padding-top: 5rem;
            padding-bottom: 5rem;
        }
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(0,82,204,0.12);
            padding: 0.4rem 1rem;
            border-radius: 100px;
            font-size: 0.8rem;
            font-weight: 500;
            color: var(--brand);
            margin-bottom: 1.5rem;
            border: 1px solid rgba(0,82,204,0.25);
        }
        .hero h1 {
            color: white;
            margin-bottom: 1.25rem;
        }
        .hero h1 span {
            color: var(--brand);
        }
        .hero-lead {
            font-size: 1.1rem;
            color: rgba(255,255,255,0.7);
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        .hero-stats {
            display: flex;
            gap: 2rem;
            margin-top: 2.5rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
        }
        .stat-block .number {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--brand);
            line-height: 1;
        }
        .stat-block .label {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: rgba(255,255,255,0.6);
        }
        .hero-image {
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-xl);
        }
        .hero-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        /* Trust Bar */
        .trust-bar {
            background: var(--white);
            border-bottom: 1px solid var(--gray-200);
            padding: 1.5rem 0;
        }
        .trust-grid {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }
        .trust-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--gray-600);
            font-size: 0.85rem;
            font-weight: 500;
        }
        .trust-item i {
            color: var(--brand);
            font-size: 1rem;
        }
        
        /* About Section */
        .section {
            padding: 5rem 0;
        }
        .section-gray {
            background: var(--gray-100);
        }
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }
        .about-image {
            position: relative;
        }
        .about-image img {
            width: 100%;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
        }
        .about-badge {
            position: absolute;
            bottom: -20px;
            right: -20px;
            background: var(--white);
            padding: 1rem 1.5rem;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-lg);
            border-left: 4px solid var(--brand);
        }
        .feature-list {
            list-style: none;
            margin-top: 1.5rem;
        }
        .feature-list li {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1rem;
            color: var(--gray-700);
        }
        .feature-list li i {
            color: var(--brand);
            font-size: 1rem;
            width: 20px;
        }
        
        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 1rem;
        }
        .product-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            border: 1px solid var(--gray-200);
        }
        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-lg);
            border-color: var(--brand-light);
        }
        .product-img {
            height: 200px;
            overflow: hidden;
        }
        .product-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        .product-card:hover .product-img img {
            transform: scale(1.05);
        }
        .product-content {
            padding: 1.5rem;
        }
        .product-icon {
            width: 48px;
            height: 48px;
            background: var(--brand-ultra-light);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            color: var(--brand);
            font-size: 1.3rem;
        }
        .product-content h3 {
            margin-bottom: 0.5rem;
        }
        .product-content p {
            color: var(--gray-600);
            font-size: 0.9rem;
            line-height: 1.5;
        }
        
        /* Partners Section */
        .partners-section {
            background: var(--white);
            border-top: 1px solid var(--gray-200);
            border-bottom: 1px solid var(--gray-200);
        }
        .partners-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 3rem;
            margin: 2rem 0 1rem;
        }
        .partner-logo {
            text-align: center;
            min-width: 140px;
            padding: 1rem;
            transition: var(--transition);
            opacity: 0.7;
        }
        .partner-logo:hover {
            opacity: 1;
        }
        .partner-icon {
            width: 80px;
            height: 80px;
            background: var(--gray-100);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 0.75rem;
            font-size: 2rem;
            color: var(--gray-600);
            transition: var(--transition);
        }
        .partner-logo:hover .partner-icon {
            background: var(--brand-ultra-light);
            color: var(--brand);
        }
        .partner-logo span {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--gray-700);
        }
        
        /* CTA Banner */
        .cta-banner {
            background: var(--gray-900);
            border-radius: var(--radius-xl);
            margin: 3rem 32px;
            padding: 4rem 3rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .cta-banner h2 {
            color: white;
            margin-bottom: 1rem;
        }
        .cta-banner p {
            color: rgba(255,255,255,0.7);
            max-width: 600px;
            margin: 0 auto 2rem;
        }
        .cta-banner .btn-primary {
            background: var(--brand);
            color: var(--gray-900);
        }
        
        /* Footer */
        .footer {
            background: var(--gray-100);
            padding: 4rem 0 2rem;
            border-top: 1px solid var(--gray-200);
        }
        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 2.5rem;
            margin-bottom: 3rem;
        }
        .footer-col .logo {
            margin-bottom: 1rem;
        }
        .footer-col p {
            color: var(--gray-600);
            font-size: 0.85rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }
        .footer-col h4 {
            font-size: 0.9rem;
            margin-bottom: 1.2rem;
            letter-spacing: 0.5px;
        }
        .footer-links {
            list-style: none;
        }
        .footer-links li {
            margin-bottom: 0.7rem;
        }
        .footer-links a {
            text-decoration: none;
            color: var(--gray-600);
            font-size: 0.85rem;
            transition: var(--transition);
        }
        .footer-links a:hover {
            color: var(--brand);
        }
        .contact-info li {
            display: flex;
            gap: 0.75rem;
            margin-bottom: 1rem;
            font-size: 0.85rem;
            color: var(--gray-600);
        }
        .contact-info i {
            color: var(--brand);
            width: 20px;
            margin-top: 2px;
        }
        .footer-bottom {
            border-top: 1px solid var(--gray-300);
            padding-top: 2rem;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
            font-size: 0.75rem;
            color: var(--gray-500);
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .hero .container, .about-grid, .grid-2, .grid-3, .page-hero-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            .hero .container { text-align: center; }
            .hero-stats { justify-content: center; }
            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 768px) {
            .container { padding: 0 24px; }
            .nav-links {
                display: none;
                position: absolute;
                top: 74px;
                left: 0;
                right: 0;
                background: white;
                flex-direction: column;
                padding: 1.5rem;
                border-bottom: 1px solid var(--gray-200);
                box-shadow: var(--shadow-md);
            }
            .nav-links.open {
                display: flex;
            }
            .mobile-toggle {
                display: block;
            }
            .trust-grid {
                justify-content: center;
            }
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            .cta-banner {
                margin: 2rem 16px;
                padding: 2.5rem 1.5rem;
            }
            .products-grid {
                grid-template-columns: 1fr;
            }
            .partners-grid {
                gap: 1.5rem;
            }
            .btn-row {
                width: 100%;
            }
        }
        
        /* Cookie banner */
        .cookie-banner {
            position: fixed;
            bottom: 20px;
            left: 20px;
            right: 20px;
            max-width: 480px;
            background: var(--gray-900);
            color: white;
            padding: 1.25rem;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-xl);
            z-index: 1100;
            display: none;
        }
        .cookie-banner p {
            font-size: 0.8rem;
            margin-bottom: 1rem;
            color: rgba(255,255,255,0.7);
        }
        .cookie-banner a {
            color: var(--brand);
        }
        .cookie-actions {
            display: flex;
            gap: 0.75rem;
        }
        .btn-cookie {
            padding: 0.5rem 1rem;
            font-size: 0.75rem;
            background: rgba(255,255,255,0.1);
            border: none;
            border-radius: var(--radius-sm);
            cursor: pointer;
            color: white;
        }
        .btn-cookie-primary {
            background: var(--brand);
            color: var(--gray-900);
        }

        /* =============================================
           SITE HEADER  (partials/navbar.blade.php)
        ============================================= */
        .site-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255,255,255,0.97);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--gray-200);
            transition: box-shadow 0.3s;
        }
        .site-header.scrolled { box-shadow: var(--shadow-md); }
        .hdr-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 84px;
        }
        .site-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
        .site-logo-image {
            display: block;
            height: 56px;
            width: auto;
            object-fit: contain;
        }
        .site-logo-image--footer {
            height: 82px;
        }
        .site-logo .logo-icon {
            width: 38px; height: 38px;
            background: var(--brand);
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            color: var(--gray-900);
            font-size: 1.05rem;
        }
        .site-logo .logo-name {
            font-size: 1.05rem; font-weight: 800;
            color: var(--gray-900); line-height: 1.15;
        }
        .site-logo .logo-tag {
            font-size: 0.65rem; color: var(--gray-500);
            letter-spacing: 0.04em; display: block;
        }
        .primary-nav { display: flex; align-items: center; gap: 0.15rem; }
        .nav-link {
            padding: 0.45rem 0.7rem;
            font-size: 0.93rem; font-weight: 500;
            color: var(--gray-700); text-decoration: none;
            border-radius: 6px;
            transition: color 0.2s, background 0.2s;
        }
        .nav-link:hover { color: var(--brand-dark); background: var(--brand-ultra-light); }
        .nav-link.is-active { color: var(--brand-dark); font-weight: 600; }
        .hdr-end { display: flex; align-items: center; gap: 0.75rem; }
        .btn-sm { padding: 0.55rem 1.1rem; font-size: 0.86rem; }
        .hamburger {
            display: none; flex-direction: column; gap: 5px;
            background: none; border: none; cursor: pointer; padding: 6px;
        }
        .hamburger span {
            display: block; width: 22px; height: 2px;
            background: var(--gray-800); border-radius: 2px;
            transition: transform 0.25s, opacity 0.25s;
        }
        .hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
        .hamburger.open span:nth-child(2) { opacity: 0; }
        .hamburger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

        /* =============================================
           SITE FOOTER  (partials/footer.blade.php)
        ============================================= */
        .site-footer { background: var(--gray-900); color: rgba(255,255,255,0.7); }
        .footer-main { padding: 4rem 0 3rem; }
        .footer-inner {
            display: grid;
            grid-template-columns: 1.8fr 1fr 1fr 1fr;
            gap: 2.5rem;
        }
        .footer-logo .logo-name { color: #fff; }
        .footer-logo .logo-tag { color: rgba(255,255,255,0.45); }
        .footer-tagline { font-size: 0.95rem; font-weight: 600; color: rgba(255,255,255,0.85); margin: 0.75rem 0 0.3rem; }
        .footer-reg { font-size: 0.78rem; color: var(--brand); margin-bottom: 1rem; }
        .footer-reg i { margin-right: 4px; }
        .footer-contact-list { display: flex; flex-direction: column; gap: 0.45rem; }
        .footer-contact-list a, .footer-contact-list span {
            display: flex; align-items: center; gap: 0.5rem;
            font-size: 0.82rem; color: rgba(255,255,255,0.55);
            text-decoration: none; transition: color 0.2s;
        }
        .footer-contact-list a:hover { color: var(--brand); }
        .footer-contact-list i { width: 14px; color: var(--brand); }
        h4.footer-col-title {
            font-size: 0.75rem; text-transform: uppercase;
            letter-spacing: 0.09em; color: rgba(255,255,255,0.35);
            font-weight: 700; margin-bottom: 1rem;
        }
        .footer-links-col ul { list-style: none; display: flex; flex-direction: column; gap: 0.6rem; }
        .footer-links-col ul a { font-size: 0.875rem; color: rgba(255,255,255,0.6); text-decoration: none; transition: color 0.2s; }
        .footer-links-col ul a:hover { color: var(--brand); }
        .footer-bar { border-top: 1px solid rgba(255,255,255,0.08); padding: 1.25rem 0; }
        .footer-bar-inner {
            display: flex; justify-content: space-between; align-items: center;
            gap: 1rem; flex-wrap: wrap; font-size: 0.77rem; color: rgba(255,255,255,0.3);
        }
        .footer-legal-links { display: flex; gap: 1.25rem; }
        .footer-legal-links a { color: rgba(255,255,255,0.3); text-decoration: none; transition: color 0.2s; }
        .footer-legal-links a:hover { color: var(--brand); }

        /* =============================================
           PAGE COMPONENT STYLES
        ============================================= */
        /* Accordion — products page */
        .accordion-item {
            background: #fff; border: 1px solid var(--gray-200);
            border-radius: var(--radius-md); overflow: hidden;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .accordion-item:hover { border-color: var(--brand-light); }
        .accordion-item summary {
            list-style: none; padding: 1rem 1.25rem; cursor: pointer;
            font-weight: 600; font-size: 0.92rem;
            display: flex; align-items: center; justify-content: space-between;
            user-select: none;
        }
        .accordion-item summary::-webkit-details-marker { display: none; }
        .accordion-item summary span { flex: 1; }
        .accordion-item summary::after { content: '+'; color: var(--brand); font-size: 1.3rem; font-weight: 700; line-height: 1; flex-shrink: 0; }
        .accordion-item[open] summary::after { content: '−'; }
        .accordion-item[open] { border-color: var(--brand-light); box-shadow: var(--shadow-sm); }
        .accordion-body { padding: 0 1.25rem 1rem; font-size: 0.88rem; color: var(--gray-600); line-height: 1.65; }

        /* Client tiles — clients page */
        .client-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(210px, 1fr)); gap: 1rem; margin-top: 0.5rem; }
        .client-tile {
            background: #fff; border: 1px solid var(--gray-200);
            border-radius: var(--radius-md); padding: 1.1rem 1.25rem;
            font-size: 0.9rem; font-weight: 600;
            display: flex; align-items: center; gap: 0.75rem;
            color: var(--gray-700); transition: var(--transition);
        }
        .client-tile:hover { border-color: var(--brand); color: var(--brand-dark); background: var(--brand-ultra-light); transform: translateY(-2px); }
        .client-tile i { color: var(--brand); font-size: 1rem; }

        /* Value cards — vision-mission page */
        .value-card { background: #fff; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); padding: 2rem 1.5rem; text-align: center; transition: var(--transition); }
        .value-card:hover { border-color: var(--brand); transform: translateY(-4px); box-shadow: var(--shadow-md); }
        .value-icon { width: 56px; height: 56px; background: var(--brand-ultra-light); border-radius: var(--radius-md); margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; color: var(--brand-dark); }
        .value-name { font-weight: 700; font-size: 1rem; }

        /* Leadership profile */
        .leader-profile { display: grid; grid-template-columns: auto 1fr; gap: 3.5rem; align-items: start; }
        .leader-avatar { width: 280px; height: 340px; object-fit: cover; border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); }

        /* Quote box */
        .quote-box { background: var(--brand-ultra-light); border-left: 4px solid var(--brand); padding: 1.25rem 1.5rem; border-radius: 0 var(--radius-md) var(--radius-md) 0; margin: 1.25rem 0; font-style: italic; color: var(--gray-700); line-height: 1.7; font-size: 1rem; }

        /* Partner banner card */
        .banner-card { background: linear-gradient(135deg, var(--gray-900) 0%, #0a2e2c 100%); border-radius: var(--radius-xl); padding: 3rem 2.5rem; text-align: center; color: #fff; }
        .banner-card h3 { color: #fff; font-size: 1.75rem; }
        .partner-badge { width: 64px; height: 64px; background: rgba(0,82,204,0.15); border: 2px solid rgba(0,82,204,0.3); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; color: var(--brand); }

        /* Contact detail */
        .contact-detail-item { display: flex; gap: 1rem; margin-bottom: 1.5rem; align-items: flex-start; }
        .contact-detail-icon { width: 44px; height: 44px; flex-shrink: 0; background: var(--brand-ultra-light); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; color: var(--brand-dark); font-size: 1rem; }
        .contact-detail-text { display: flex; flex-direction: column; gap: 0.2rem; }
        .contact-detail-text strong { font-size: 0.88rem; font-weight: 700; color: var(--gray-900); }
        .contact-detail-text a, .contact-detail-text span { font-size: 0.875rem; color: var(--gray-600); text-decoration: none; }
        .contact-detail-text a:hover { color: var(--brand); }

        /* Contact form */
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
        .field { display: flex; flex-direction: column; gap: 0.4rem; margin-bottom: 1rem; }
        .field label { font-size: 0.84rem; font-weight: 600; color: var(--gray-700); }
        .field input, .field textarea, .field select {
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-sm);
            padding: 0.7rem 0.9rem; font-family: inherit; font-size: 0.9rem;
            color: var(--gray-800); outline: none; width: 100%; background: #fff;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .field input:focus, .field textarea:focus { border-color: var(--brand); box-shadow: 0 0 0 3px rgba(0,82,204,0.12); }
        .field textarea { min-height: 120px; resize: vertical; }
        .checkbox-field { display: flex; gap: 0.65rem; align-items: flex-start; margin-bottom: 0.85rem; font-size: 0.85rem; color: var(--gray-700); }
        .checkbox-field input[type="checkbox"] { margin-top: 2px; accent-color: var(--brand); flex-shrink: 0; }
        .checkbox-field a { color: var(--brand); text-decoration: underline; }
        .alert-success { background: #e8f0fe; border: 1px solid #b3ccff; border-radius: var(--radius-sm); padding: 0.85rem 1rem; font-size: 0.9rem; color: #003D99; margin-bottom: 1.25rem; }
        .error-box { background: #fef2f2; border: 1px solid #fca5a5; border-radius: var(--radius-sm); padding: 0.85rem 1rem; font-size: 0.86rem; color: #991b1b; margin-bottom: 1.25rem; }
        .error-box ul { padding-left: 1.2rem; margin: 0; }

        /* Stats strip — home page */
        .stats-strip { background: #fff; border-bottom: 1px solid #eee; padding: 2rem 0; }
        .stats-grid { display: flex; justify-content: space-between; align-items: center; }
        .stat-item { flex: 1; padding: 0 1rem; border-right: 1px solid #eee; text-align: center; }
        .stat-item:last-child { border-right: none; }
        .stat-num { display: block; font-size: 2rem; font-weight: 800; color: var(--brand); }
        .stat-label { text-transform: uppercase; font-size: 0.72rem; letter-spacing: 1px; color: #666; font-weight: 600; }

        /* Hero full — home page */
        .hero-full { position: relative; overflow: hidden; }
        .hero-full__bg { position: absolute; inset: 0; background-size: cover; background-position: center; }
        .hero-full__overlay { position: absolute; inset: 0; }
        .trust-item { display: flex; align-items: center; gap: 0.6rem; color: rgba(255,255,255,0.8); font-size: 0.85rem; font-weight: 500; }
        .trust-item i { color: #5dfcd5; }

        /* Step cards — how it works */
        .step-card { background: #fff; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); padding: 2.25rem 1.75rem 1.75rem; position: relative; transition: var(--transition); }
        .step-card:hover { box-shadow: var(--shadow-md); border-color: var(--brand-light); transform: translateY(-4px); }
        .step-num { position: absolute; top: -18px; left: 1.75rem; width: 36px; height: 36px; background: var(--brand); color: var(--gray-900); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.9rem; box-shadow: 0 4px 12px rgba(0,82,204,0.4); }

        /* WhatsApp float button */
        .wa-float { position: fixed; bottom: 28px; right: 28px; z-index: 900; display: flex; align-items: center; gap: 0.6rem; background: #25d366; color: #fff; border-radius: 50px; padding: 0.75rem 1.25rem 0.75rem 0.95rem; text-decoration: none; font-weight: 700; font-size: 0.875rem; box-shadow: 0 6px 20px rgba(37,211,102,0.4); transition: all 0.25s; }
        .wa-float:hover { background: #1ebe57; transform: translateY(-3px); box-shadow: 0 10px 28px rgba(37,211,102,0.5); }
        .wa-float i { font-size: 1.25rem; }

        /* Scroll reveal */
        .reveal, .reveal-left, .reveal-right { opacity: 0; transition: opacity 0.65s ease, transform 0.65s ease; }
        .reveal { transform: translateY(24px); }
        .reveal-left { transform: translateX(-24px); }
        .reveal-right { transform: translateX(24px); }
        .reveal.visible, .reveal-left.visible, .reveal-right.visible { opacity: 1; transform: none; }
        .reveal-delay-1 { transition-delay: 0.1s; }
        .reveal-delay-2 { transition-delay: 0.2s; }
        .reveal-delay-3 { transition-delay: 0.3s; }
        .reveal-delay-4 { transition-delay: 0.4s; }

        /* =============================================
           NEW LIGHT DESIGN SYSTEM — SHARED
        ============================================= */
        /* Light page hero (replaces dark page-hero) */
        .page-hero-light {
            background: linear-gradient(160deg, #eef4ff 0%, #f5f9ff 55%, #e8f5f5 100%);
            padding: 80px 0 72px;
            position: relative;
            overflow: hidden;
        }
        .page-hero-light::before {
            content: '';
            position: absolute;
            width: 500px; height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0,82,204,0.06) 0%, transparent 70%);
            top: -120px; right: -80px;
            pointer-events: none;
        }
        .page-hero-light::after {
            content: '';
            position: absolute;
            width: 350px; height: 350px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0,180,180,0.06) 0%, transparent 70%);
            bottom: -80px; left: 60px;
            pointer-events: none;
        }
        .phl-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3.5rem;
            align-items: center;
            position: relative;
            z-index: 2;
        }
        .page-hero-light h1 {
            font-size: clamp(2rem, 4vw, 3.2rem);
            color: #0d1f3c;
            line-height: 1.15;
            margin-bottom: 1rem;
            font-weight: 800;
        }
        .page-hero-light .phl-lead {
            font-size: 1.05rem;
            color: #546e8a;
            line-height: 1.7;
            margin-bottom: 2rem;
        }
        .page-hero-light .phl-img {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 24px 64px rgba(0,30,80,0.1);
        }
        .page-hero-light .phl-img img {
            width: 100%; display: block;
            height: 380px; object-fit: cover;
        }

        /* Shared new button styles */
        .btn-teal {
            background: #00b4b4;
            color: #fff;
            border-color: #00b4b4;
            border-radius: var(--radius-md);
            padding: 0.85rem 1.75rem;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            border: 1.5px solid #00b4b4;
            cursor: pointer;
            line-height: 1;
        }
        .btn-teal:hover { background: #009a9a; border-color: #009a9a; transform: translateY(-2px); box-shadow: 0 8px 20px rgba(0,180,180,0.25); }
        .btn-outline-navy {
            background: transparent;
            color: #0d1f3c;
            border: 1.5px solid #c8d8e8;
            border-radius: var(--radius-md);
            padding: 0.85rem 1.75rem;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            line-height: 1;
        }
        .btn-outline-navy:hover { border-color: var(--brand); color: var(--brand); background: var(--brand-ultra-light); }

        /* CTA band (gradient blue) */
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
        .cta-band h2 { font-size: 2.1rem; color: #fff; margin-bottom: 1rem; }
        .cta-band p { font-size: 1rem; opacity: 0.88; max-width: 620px; margin: 0 auto 2.25rem; line-height: 1.7; }
        .cta-band-actions { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2; }
        .btn-white { background: #fff; color: var(--brand); border: 1.5px solid #fff; border-radius: var(--radius-md); padding: 0.9rem 2rem; font-weight: 700; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem; transition: all 0.2s; line-height: 1; }
        .btn-white:hover { background: #eef4ff; transform: translateY(-2px); box-shadow: 0 10px 24px rgba(0,0,0,0.15); }
        .btn-outline-white { background: transparent; border: 1.5px solid rgba(255,255,255,0.4); color: #fff; border-radius: var(--radius-md); padding: 0.9rem 2rem; font-weight: 600; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem; transition: all 0.2s; line-height: 1; }
        .btn-outline-white:hover { background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.7); }

        /* New check list (teal circles) */
        .check-list-teal { list-style: none; padding: 0; margin: 1.25rem 0 2rem; display: grid; gap: 0.85rem; }
        .check-list-teal li { display: flex; align-items: flex-start; gap: 10px; color: #374f6b; font-weight: 500; font-size: 0.95rem; }
        .check-list-teal li .ci { width: 22px; height: 22px; border-radius: 50%; background: #e0f7f7; color: #00b4b4; display: flex; align-items: center; justify-content: center; font-size: 0.7rem; flex-shrink: 0; margin-top: 2px; }

        /* Light section background */
        .section-light { background: #f7fbff; }
        .section-white { background: #fff; }

        /* Responsive overrides for partial components */
        @media (max-width: 992px) {
            .phl-grid { grid-template-columns: 1fr; gap: 2.25rem; }
            .footer-inner { grid-template-columns: 1fr 1fr; gap: 2rem; }
            .cta-band { margin: 0 18px 52px; padding: 52px 28px; }
            .leader-profile { grid-template-columns: 1fr; gap: 2rem; }
            .leader-avatar { width: 100%; max-width: 340px; height: 300px; }
        }
        @media (max-width: 768px) {
            body { font-size: 16px; }
            .phl-grid { grid-template-columns: 1fr; gap: 2rem; }
            .cta-band { margin: 0 16px 48px; padding: 48px 24px; }
            .cta-band h2 { font-size: 1.6rem; }
            .site-logo-image { height: 48px; }
            .site-logo-image--footer { height: 66px; }
            .hamburger { display: flex; }
            .primary-nav {
                flex-direction: column; align-items: stretch;
                position: absolute; top: 84px; left: 0; right: 0;
                background: rgba(255,255,255,0.98); backdrop-filter: blur(12px);
                padding: 0.75rem 1rem; border-bottom: 1px solid var(--gray-200);
                box-shadow: var(--shadow-md); transform: translateY(-8px);
                opacity: 0; pointer-events: none;
                transition: transform 0.25s, opacity 0.25s;
            }
            .primary-nav.open { transform: none; opacity: 1; pointer-events: auto; }
            .hdr-end .btn { display: none; }
            .footer-inner { grid-template-columns: 1fr 1fr; gap: 2rem; }
            .form-row { grid-template-columns: 1fr; }
            .leader-profile { grid-template-columns: 1fr; gap: 2rem; }
            .leader-avatar { width: 100%; height: 260px; }
            .client-grid { grid-template-columns: 1fr 1fr; }
            .stats-grid { flex-wrap: wrap; gap: 1rem; }
            .stat-item { border-right: none; min-width: calc(50% - 0.5rem); }
            .wa-float span { display: none; }
            .wa-float { padding: 0.9rem; border-radius: 50%; }
        }
        @media (max-width: 480px) {
            .hdr-inner { height: 76px; }
            .site-logo-image { height: 42px; }
            .primary-nav { top: 76px; }
            .footer-inner { grid-template-columns: 1fr; }
            .client-grid { grid-template-columns: 1fr; }
            .container { padding: 0 18px; }
        }
    </style>
</head>
<body>

@include('partials.navbar')

<main>
    @yield('content')
</main>

@include('partials.footer')

{{-- WhatsApp floating button --}}
<a href="https://wa.me/256772588426?text=Hello%20GUF%20Agency%2C%20I%20would%20like%20to%20enquire%20about%20insurance." class="wa-float" aria-label="Chat with us on WhatsApp" target="_blank" rel="noopener noreferrer">
    <i class="fa-brands fa-whatsapp"></i>
    <span>WhatsApp Us</span>
</a>

<!-- Cookie Banner -->
<div id="cookieBanner" class="cookie-banner">
    <p>We use essential cookies to keep this website secure and functional. By continuing, you agree to our <a href="{{ route('cookie-policy') }}">Cookie Policy</a> and <a href="{{ route('privacy-policy') }}">Privacy Policy</a>.</p>
    <div class="cookie-actions">
        <button id="acceptCookies" class="btn-cookie btn-cookie-primary">Accept All</button>
        <button id="declineCookies" class="btn-cookie">Necessary Only</button>
    </div>
</div>

<script>
    // Cookie consent
    (function () {
        var banner = document.getElementById('cookieBanner');
        var key = 'guf_cookie_consent_v2';
        if (banner && !localStorage.getItem(key)) banner.style.display = 'block';
        function setConsent(type) {
            localStorage.setItem(key, JSON.stringify({ type: type, timestamp: new Date().toISOString() }));
            if (banner) banner.style.display = 'none';
        }
        document.getElementById('acceptCookies')?.addEventListener('click', function () { setConsent('all'); });
        document.getElementById('declineCookies')?.addEventListener('click', function () { setConsent('necessary'); });
    })();

    // Scroll-reveal
    (function () {
        var els = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
        if (!els.length || !window.IntersectionObserver) {
            els.forEach(function (el) { el.style.opacity = '1'; el.style.transform = 'none'; });
            return;
        }
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); }
            });
        }, { threshold: 0.12 });
        els.forEach(function (el) { io.observe(el); });
    })();
</script>
</body>
</html>