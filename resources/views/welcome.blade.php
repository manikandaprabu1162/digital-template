<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DigitalAssets Pro - Premium Digital Resources Marketplace</title>
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #6C63FF;
            --secondary: #FF6584;
            --accent: #36D1DC;
            --success: #4CC9F0;
            --warning: #FF9A00;
            --info: #00B4D8;
            --dark: #1A1A2E;
            --light: #F8F9FA;
            --gradient-primary: linear-gradient(135deg, #6C63FF 0%, #36D1DC 100%);
            --gradient-secondary: linear-gradient(135deg, #FF6584 0%, #FF9A00 100%);
            --gradient-accent: linear-gradient(135deg, #8338EC 0%, #3A86FF 100%);
            --gradient-dark: linear-gradient(135deg, #1A1A2E 0%, #16213E 100%);
            --gradient-rainbow: linear-gradient(90deg, #FF9A8B 0%, #FF6A88 25%, #FF99AC 50%, #A18CD1 75%, #FBC2EB 100%);
            --shadow-light: 0 5px 15px rgba(0,0,0,0.08);
            --shadow-medium: 0 8px 25px rgba(0,0,0,0.12);
            --shadow-heavy: 0 15px 35px rgba(0,0,0,0.15);
            --glow-primary: 0 0 15px rgba(108, 99, 255, 0.3);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: var(--dark);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
        }
        
        /* Navigation - Mobile First */
        .navbar {
            padding: 1rem 0;
            background: rgba(255, 255, 255, 0.98) !important;
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow-light);
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            padding: 0.7rem 0;
        }
        
        .navbar-brand {
            font-weight: 800;
            font-size: 1.5rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand i {
            margin-right: 6px;
            font-size: 1.3rem;
        }
        
        .navbar-toggler {
            border: none;
            padding: 4px 8px;
            font-size: 1.2rem;
        }
        
        .navbar-toggler:focus {
            box-shadow: none;
        }
        
        .nav-link {
            font-weight: 500;
            margin: 5px 0;
            position: relative;
            color: var(--dark) !important;
            transition: all 0.3s ease;
            padding: 8px 0 !important;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient-primary);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        .navbar-nav {
            padding: 1rem 0;
        }
        
        /* Buttons - Mobile Optimized */
        .btn-primary-custom {
            background: var(--gradient-primary);
            color: white;
            border: none;
            padding: 10px 20px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-light);
            font-size: 0.9rem;
            display: inline-block;
            text-align: center;
            width: 100%;
            max-width: 200px;
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-medium), var(--glow-primary);
        }
        
        .btn-secondary-custom {
            background: var(--gradient-secondary);
            color: white;
            border: none;
            padding: 10px 20px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-light);
            font-size: 0.9rem;
            display: inline-block;
            text-align: center;
            width: 100%;
            max-width: 200px;
        }
        
        .btn-secondary-custom:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-medium);
        }
        
        /* Hero Section - Mobile First */
        .hero-section {
            background: var(--gradient-dark);
            color: white;
            padding: 120px 0 60px;
            position: relative;
            overflow: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .hero-bg-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(108, 99, 255, 0.1) 0%, transparent 15%),
                radial-gradient(circle at 90% 10%, rgba(255, 101, 132, 0.1) 0%, transparent 15%),
                radial-gradient(circle at 50% 90%, rgba(54, 209, 220, 0.1) 0%, transparent 15%);
            z-index: 1;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }
        
        .hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 1.2rem;
            background: linear-gradient(90deg, #fff 0%, #a5b4fc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1.2;
        }
        
        .hero-subtitle {
            font-size: 1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            max-width: 100%;
        }
        
        .hero-badge {
            display: inline-block;
            background: var(--gradient-rainbow);
            color: white;
            padding: 6px 16px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.8rem;
            margin-bottom: 1.5rem;
            box-shadow: var(--shadow-light);
        }
        
        .hero-buttons {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .hero-stats {
            display: flex;
            justify-content: space-around;
            gap: 1rem;
            margin-top: 2rem;
            flex-wrap: wrap;
        }
        
        .hero-stat {
            text-align: center;
            flex: 1;
            min-width: 100px;
        }
        
        .hero-stat-number {
            font-size: 1.8rem;
            font-weight: 700;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1;
        }
        
        .hero-stat-label {
            font-size: 0.8rem;
            opacity: 0.8;
            margin-top: 5px;
        }
        
        /* Floating Elements - Mobile Optimized */
        .floating-element {
            position: absolute;
            border-radius: 50%;
            background: var(--gradient-primary);
            opacity: 0.1;
            z-index: 1;
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-element:nth-child(1) {
            width: 60px;
            height: 60px;
            top: 15%;
            left: 5%;
            animation-delay: 0s;
        }
        
        .floating-element:nth-child(2) {
            width: 80px;
            height: 80px;
            top: 65%;
            left: 3%;
            animation-delay: 2s;
        }
        
        .floating-element:nth-child(3) {
            width: 50px;
            height: 50px;
            top: 25%;
            right: 5%;
            animation-delay: 4s;
        }
        
        .floating-element:nth-child(4) {
            width: 70px;
            height: 70px;
            top: 75%;
            right: 8%;
            animation-delay: 1s;
        }
        
        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-15px) rotate(5deg);
            }
            100% {
                transform: translateY(0) rotate(0deg);
            }
        }
        
        /* Section Titles - Mobile First */
        .section-title {
            font-weight: 800;
            margin-bottom: 2rem;
            position: relative;
            display: inline-block;
            font-size: 1.8rem;
            text-align: center;
            width: 100%;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--gradient-primary);
            border-radius: 2px;
        }
        
        .section-subtitle {
            font-size: 1rem;
            color: #6c757d;
            max-width: 100%;
            margin: 0 auto 3rem;
            text-align: center;
        }
        
        /* Feature Cards - Mobile First */
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: var(--shadow-light);
            transition: all 0.3s ease;
            height: 100%;
            border: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
            margin-bottom: 1.5rem;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gradient-primary);
            z-index: 2;
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-heavy);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            background: var(--gradient-primary);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.2rem;
            color: white;
            font-size: 1.5rem;
            box-shadow: var(--shadow-light);
            transition: all 0.3s ease;
        }
        
        .feature-card:hover .feature-icon {
            transform: scale(1.05);
            background: var(--gradient-secondary);
        }
        
        .feature-card h4 {
            font-weight: 700;
            margin-bottom: 0.8rem;
            color: var(--dark);
            font-size: 1.2rem;
        }
        
        .feature-card p {
            color: #6c757d;
            margin-bottom: 1.2rem;
            font-size: 0.9rem;
        }
        
        /* Category Cards - Mobile First */
        .category-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow-light);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            margin-bottom: 1.5rem;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }
        
        .category-img {
            height: 140px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2.5rem;
            position: relative;
            overflow: hidden;
        }
        
        .category-img::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.2);
        }
        
        .category-html {
            background: linear-gradient(135deg, #E44D26 0%, #F16529 100%);
        }
        
        .category-css {
            background: linear-gradient(135deg, #264DE4 0%, #2965F1 100%);
        }
        
        .category-laravel {
            background: linear-gradient(135deg, #FF2D20 0%, #FF5E3A 100%);
        }
        
        .category-js {
            background: linear-gradient(135deg, #F7DF1E 0%, #FFE94A 100%);
        }
        
        .category-react {
            background: linear-gradient(135deg, #61DAFB 0%, #83D0F2 100%);
        }
        
        .category-vue {
            background: linear-gradient(135deg, #41B883 0%, #6AD1A5 100%);
        }
        
        .category-mobile {
            background: linear-gradient(135deg, #9C27B0 0%, #BA68C8 100%);
        }
        
        .category-ui {
            background: linear-gradient(135deg, #00BCD4 0%, #4DD0E1 100%);
        }
        
        .category-content {
            padding: 1.2rem;
        }
        
        .category-content h5 {
            font-weight: 700;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }
        
        .category-count {
            display: inline-block;
            background: var(--gradient-primary);
            color: white;
            padding: 3px 10px;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        /* Stats Section - Mobile First */
        .stats-section {
            background: var(--gradient-dark);
            color: white;
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }
        
        .stat-item {
            text-align: center;
            position: relative;
            z-index: 2;
            margin-bottom: 2rem;
        }
        
        .stat-icon {
            width: 60px;
            height: 60px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            color: white;
            backdrop-filter: blur(10px);
        }
        
        .stat-number {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            background: linear-gradient(90deg, #fff 0%, #a5b4fc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1;
        }
        
        .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        /* Testimonials - Mobile First */
        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: var(--shadow-light);
            position: relative;
            margin-top: 1.5rem;
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }
        
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: -15px;
            left: 15px;
            font-size: 4rem;
            color: var(--primary);
            opacity: 0.2;
            font-family: Georgia, serif;
            line-height: 1;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.2rem;
            position: relative;
            z-index: 2;
            font-size: 0.95rem;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            margin-right: 12px;
            font-size: 1.2rem;
            box-shadow: var(--shadow-light);
        }
        
        /* Pricing Cards - Mobile First */
        .pricing-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: var(--shadow-light);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        
        .pricing-card.popular {
            border: 2px solid var(--primary);
            box-shadow: var(--shadow-medium), var(--glow-primary);
        }
        
        .pricing-card.popular::before {
            content: 'MOST POPULAR';
            position: absolute;
            top: 15px;
            right: -30px;
            background: var(--gradient-primary);
            color: white;
            padding: 4px 35px;
            font-size: 0.7rem;
            font-weight: 600;
            transform: rotate(45deg);
        }
        
        .pricing-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }
        
        .pricing-header {
            margin-bottom: 1.5rem;
        }
        
        .pricing-name {
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }
        
        .pricing-price {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1;
        }
        
        .pricing-period {
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .pricing-features {
            list-style: none;
            padding: 0;
            margin-bottom: 1.5rem;
        }
        
        .pricing-features li {
            padding: 6px 0;
            border-bottom: 1px solid #f1f1f1;
            font-size: 0.9rem;
        }
        
        .pricing-features li:last-child {
            border-bottom: none;
        }
        
        .pricing-features li i {
            color: var(--success);
            margin-right: 8px;
        }
        
        /* CTA Section - Mobile First */
        .cta-section {
            background: var(--gradient-primary);
            color: white;
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }
        
        .cta-title {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 1.2rem;
            text-align: center;
        }
        
        .cta-subtitle {
            font-size: 1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            text-align: center;
        }
        
        .cta-buttons {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            align-items: center;
        }
        
        /* Footer - Mobile First */
        .footer {
            background: var(--gradient-dark);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer h5 {
            margin-bottom: 1.2rem;
            font-weight: 700;
            position: relative;
            display: inline-block;
            font-size: 1.1rem;
        }
        
        .footer h5::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            width: 30px;
            height: 2px;
            background: var(--gradient-primary);
            border-radius: 1px;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
            margin-bottom: 2rem;
        }
        
        .footer-links li {
            margin-bottom: 0.6rem;
        }
        
        .footer-links a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            font-size: 0.9rem;
        }
        
        .footer-links a i {
            margin-right: 6px;
            font-size: 0.7rem;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 3px;
        }
        
        .social-links {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 2rem;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            color: white;
            transition: all 0.3s ease;
            font-size: 1rem;
        }
        
        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 15px;
            margin-top: 30px;
            text-align: center;
            color: rgba(255,255,255,0.6);
            font-size: 0.8rem;
        }
        
        /* Animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease;
        }
        
        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Tablet Styles */
        @media (min-width: 768px) {
            .hero-title {
                font-size: 2.8rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .hero-buttons {
                flex-direction: row;
                justify-content: center;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .section-subtitle {
                font-size: 1.1rem;
            }
            
            .feature-card {
                padding: 2rem;
            }
            
            .category-img {
                height: 160px;
            }
            
            .pricing-card {
                padding: 2rem;
            }
            
            .cta-title {
                font-size: 2.5rem;
            }
            
            .cta-buttons {
                flex-direction: row;
                justify-content: center;
            }
        }
        
        /* Desktop Styles */
        @media (min-width: 992px) {
            .navbar-brand {
                font-size: 1.8rem;
            }
            
            .nav-link {
                margin: 0 10px;
                padding: 8px 0 !important;
            }
            
            .navbar-nav {
                padding: 0;
            }
            
            .hero-section {
                padding: 150px 0 100px;
                text-align: left;
            }
            
            .hero-content {
                text-align: left;
            }
            
            .hero-title {
                font-size: 3.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
                max-width: 600px;
            }
            
            .hero-buttons {
                justify-content: flex-start;
            }
            
            .hero-stats {
                justify-content: flex-start;
                gap: 2rem;
            }
            
            .section-title {
                font-size: 2.5rem;
                text-align: center;
            }
            
            .section-title::after {
                left: 0;
                transform: none;
            }
            
            .section-subtitle {
                max-width: 700px;
            }
            
            .feature-card {
                margin-bottom: 0;
            }
            
            .category-card {
                margin-bottom: 0;
            }
            
            .stat-item {
                margin-bottom: 0;
            }
            
            .testimonial-card {
                margin-bottom: 0;
            }
            
            .pricing-card {
                margin-bottom: 0;
            }
            
            .pricing-card.popular {
                transform: scale(1.05);
            }
            
            .pricing-card.popular:hover {
                transform: scale(1.05) translateY(-5px);
            }
            
            .cta-title {
                font-size: 3rem;
            }
            
            .footer-links {
                margin-bottom: 0;
            }
        }
        
        /* Large Desktop Styles */
        @media (min-width: 1200px) {
            .hero-title {
                font-size: 4rem;
            }
            
            .floating-element:nth-child(1) {
                width: 100px;
                height: 100px;
                top: 20%;
                left: 10%;
            }
            
            .floating-element:nth-child(2) {
                width: 150px;
                height: 150px;
                top: 60%;
                left: 5%;
            }
            
            .floating-element:nth-child(3) {
                width: 80px;
                height: 80px;
                top: 30%;
                right: 10%;
            }
            
            .floating-element:nth-child(4) {
                width: 120px;
                height: 120px;
                top: 70%;
                right: 15%;
            }
            
            .category-img {
                height: 200px;
            }
        }
        
        /* Extra Small Devices */
        @media (max-width: 575px) {
            .container {
                padding-left: 15px;
                padding-right: 15px;
            }
            
            .hero-title {
                font-size: 1.8rem;
            }
            
            .hero-stat-number {
                font-size: 1.5rem;
            }
            
            .section-title {
                font-size: 1.6rem;
            }
            
            .feature-card {
                padding: 1.2rem;
            }
            
            .category-content {
                padding: 1rem;
            }
            
            .testimonial-card {
                padding: 1.2rem;
            }
            
            .pricing-card {
                padding: 1.2rem;
            }
            
            .cta-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-gem"></i> DigitalAssets
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Marketplace</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">For Creators</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <div class="d-flex flex-column flex-lg-row gap-2 mt-3 mt-lg-0">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-primary">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary-custom">Get Started</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-bg-pattern"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <span class="hero-badge">
                            <i class="fas fa-bolt me-2"></i> 10,000+ Premium Digital Assets
                        </span>
                        <h1 class="hero-title">The Ultimate Digital Assets Marketplace</h1>
                        <p class="hero-subtitle">Discover, download, and sell high-quality digital assets. From HTML templates to complete Laravel projects, we have everything you need to accelerate your development.</p>
                        <div class="hero-buttons">
                            <a href="#" class="btn btn-primary-custom">Explore Marketplace</a>
                            <a href="#" class="btn btn-secondary-custom">Become a Creator</a>
                        </div>
                        
                        <div class="hero-stats">
                            <div class="hero-stat">
                                <div class="hero-stat-number">10K+</div>
                                <div class="hero-stat-label">Digital Assets</div>
                            </div>
                            <div class="hero-stat">
                                <div class="hero-stat-number">25K+</div>
                                <div class="hero-stat-label">Happy Customers</div>
                            </div>
                            <div class="hero-stat">
                                <div class="hero-stat-number">1.5K+</div>
                                <div class="hero-stat-label">Creative Authors</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block">
                    <div class="mt-5 mt-lg-0">
                        <div class="feature-icon mx-auto">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3 class="text-white">Premium Quality Assets</h3>
                        <p class="text-white-50">All assets are reviewed for quality and compatibility</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container py-5">
            <h2 class="section-title animate-on-scroll">Why Choose DigitalAssets?</h2>
            <p class="section-subtitle animate-on-scroll">We provide everything you need to accelerate your development process and create amazing digital products.</p>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card animate-on-scroll">
                        <div class="feature-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h4>Lightning Fast</h4>
                        <p>Instant downloads and quick access to all your purchased assets with no delays or waiting times.</p>
                        <a href="#" class="text-primary fw-bold">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card animate-on-scroll">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Quality Guaranteed</h4>
                        <p>All assets are thoroughly reviewed by our team to ensure high quality and professional standards.</p>
                        <a href="#" class="text-primary fw-bold">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card animate-on-scroll">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Vibrant Community</h4>
                        <p>Join thousands of developers and designers sharing, collaborating, and growing together.</p>
                        <a href="#" class="text-primary fw-bold">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card animate-on-scroll">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4>24/7 Support</h4>
                        <p>Get help whenever you need it with our round-the-clock customer support team.</p>
                        <a href="#" class="text-primary fw-bold">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <h2 class="section-title animate-on-scroll">Popular Categories</h2>
            <p class="section-subtitle animate-on-scroll">Browse through our extensive collection of digital assets across various categories.</p>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="category-card animate-on-scroll">
                        <div class="category-img category-html">
                            <i class="fab fa-html5"></i>
                        </div>
                        <div class="category-content">
                            <h5>HTML Templates</h5>
                            <p class="text-muted mb-2">Responsive, modern HTML templates for any project.</p>
                            <span class="category-count">1,200+ Assets</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="category-card animate-on-scroll">
                        <div class="category-img category-css">
                            <i class="fab fa-css3-alt"></i>
                        </div>
                        <div class="category-content">
                            <h5>CSS Frameworks</h5>
                            <p class="text-muted mb-2">Custom CSS frameworks and UI kits.</p>
                            <span class="category-count">850+ Assets</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="category-card animate-on-scroll">
                        <div class="category-img category-laravel">
                            <i class="fab fa-laravel"></i>
                        </div>
                        <div class="category-content">
                            <h5>Laravel Projects</h5>
                            <p class="text-muted mb-2">Complete Laravel applications and packages.</p>
                            <span class="category-count">500+ Assets</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="category-card animate-on-scroll">
                        <div class="category-img category-js">
                            <i class="fab fa-js"></i>
                        </div>
                        <div class="category-content">
                            <h5>JavaScript Libraries</h5>
                            <p class="text-muted mb-2">Custom JS plugins and interactive components.</p>
                            <span class="category-count">900+ Assets</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="category-card animate-on-scroll">
                        <div class="category-img category-react">
                            <i class="fab fa-react"></i>
                        </div>
                        <div class="category-content">
                            <h5>React Components</h5>
                            <p class="text-muted mb-2">Reusable React components and templates.</p>
                            <span class="category-count">700+ Assets</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="category-card animate-on-scroll">
                        <div class="category-img category-vue">
                            <i class="fab fa-vuejs"></i>
                        </div>
                        <div class="category-content">
                            <h5>Vue.js Templates</h5>
                            <p class="text-muted mb-2">Vue.js applications and component libraries.</p>
                            <span class="category-count">450+ Assets</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="category-card animate-on-scroll">
                        <div class="category-img category-mobile">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="category-content">
                            <h5>Mobile Apps</h5>
                            <p class="text-muted mb-2">iOS and Android app templates.</p>
                            <span class="category-count">600+ Assets</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="category-card animate-on-scroll">
                        <div class="category-img category-ui">
                            <i class="fas fa-palette"></i>
                        </div>
                        <div class="category-content">
                            <h5>UI/UX Kits</h5>
                            <p class="text-muted mb-2">Design systems and user interface kits.</p>
                            <span class="category-count">1,000+ Assets</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="hero-bg-pattern"></div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="stat-item animate-on-scroll">
                        <div class="stat-icon">
                            <i class="fas fa-download"></i>
                        </div>
                        <div class="stat-number">500K+</div>
                        <div class="stat-label">Total Downloads</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item animate-on-scroll">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-number">25K+</div>
                        <div class="stat-label">Happy Customers</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item animate-on-scroll">
                        <div class="stat-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="stat-number">1.5K+</div>
                        <div class="stat-label">Creative Authors</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item animate-on-scroll">
                        <div class="stat-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Satisfaction Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5">
        <div class="container py-5">
            <h2 class="section-title animate-on-scroll">What Our Users Say</h2>
            <p class="section-subtitle animate-on-scroll">Hear from developers and designers who have transformed their workflow with DigitalAssets.</p>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card animate-on-scroll">
                        <p class="testimonial-text">"DigitalAssets has completely transformed my workflow. I found the perfect Laravel admin panel that saved me weeks of development time. The quality is exceptional!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">JS</div>
                            <div>
                                <h6 class="mb-0">John Smith</h6>
                                <small class="text-muted">Full Stack Developer</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card animate-on-scroll">
                        <p class="testimonial-text">"As a UI/UX designer, I regularly download HTML templates from DigitalAssets. The quality is consistently excellent and the support is fantastic. Highly recommended!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">SJ</div>
                            <div>
                                <h6 class="mb-0">Sarah Johnson</h6>
                                <small class="text-muted">UI/UX Designer</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card animate-on-scroll">
                        <p class="testimonial-text">"I started selling my CSS frameworks on DigitalAssets six months ago. It's now my primary source of income. The platform is incredibly creator-friendly!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">MD</div>
                            <div>
                                <h6 class="mb-0">Michael Davis</h6>
                                <small class="text-muted">CSS Framework Author</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="hero-bg-pattern"></div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="cta-title animate-on-scroll">Ready to Start Your Digital Assets Journey?</h2>
                    <p class="cta-subtitle animate-on-scroll">Join thousands of developers and designers who are already creating, sharing, and earning with DigitalAssets.</p>
                    <div class="cta-buttons">
                        <a href="#" class="btn btn-light">Browse Assets</a>
                        <a href="#" class="btn btn-outline-light">Become a Creator</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5>DigitalAssets</h5>
                    <p class="mb-4">The premier marketplace for high-quality digital assets. Download, create, and sell with our community of developers and designers.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5>Marketplace</h5>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> All Assets</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> HTML Templates</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> CSS Frameworks</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Laravel Projects</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Mobile Apps</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5>For Creators</h5>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Become a Creator</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Creator Guidelines</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Pricing Plans</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Resource Center</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Success Stories</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5>Support</h5>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Help Center</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> FAQs</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Documentation</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Community Forum</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5>Company</h5>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Careers</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Blog</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Press</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Affiliate Program</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 DigitalAssets. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Animate on scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.animate-on-scroll');
            
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 100;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('animated');
                }
            });
        }
        
        window.addEventListener('scroll', animateOnScroll);
        // Initial check
        animateOnScroll();
    </script>
</body>
</html>