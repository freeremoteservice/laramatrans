<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrustAuto GmbH - Sicherer Autokauf mit persönlichem Berater</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Grundlegende Styles - Modernisiertes Business Design */
        :root {
            --primary: #0f172a;
            --secondary: #1e293b;
            --accent: #3b82f6;
            --accent-light: #60a5fa;
            --accent-dark: #2563eb;
            --text: #f8fafc;
            --text-light: #cbd5e1;
            --border: #334155;
            --shadow: 0 10px 25px rgba(0,0,0,0.3);
            --shadow-light: 0 5px 15px rgba(0,0,0,0.2);
            --transition: all 0.3s ease;
            --radius: 12px;
            --radius-sm: 8px;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', 'Segoe UI', system-ui, sans-serif;
            line-height: 1.6;
            color: var(--text);
            background-color: var(--primary);
            font-size: 16px;
            overflow-x: hidden;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header - Modernisiert */
        header {
            background-color: rgba(15, 23, 42, 0.95);
            color: var(--text);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow);
            border-bottom: 1px solid var(--border);
            backdrop-filter: blur(10px);
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text);
        }
        
        .logo-icon {
            color: var(--accent);
            font-size: 2rem;
        }
        
        .logo span {
            color: var(--accent-light);
            font-size: 0.9rem;
            font-weight: 400;
            vertical-align: super;
            margin-left: 0.3rem;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 2rem;
        }
        
        nav ul li a {
            color: var(--text);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            padding: 0.5rem 0;
            position: relative;
            font-size: 1rem;
        }
        
        nav ul li a:hover {
            color: var(--accent-light);
        }
        
        nav ul li a.active {
            color: var(--accent-light);
        }
        
        nav ul li a.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--accent-light);
        }
        
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--text);
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        /* Hero Section - Modernisiert */
        .hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.9) 0%, rgba(30, 41, 59, 0.8) 100%), url('https://images.unsplash.com/photo-1486496572940-2bb2341fdbdf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: var(--text);
            padding: 7rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 30% 50%, rgba(59, 130, 246, 0.2) 0%, transparent 50%);
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            font-weight: 700;
            position: relative;
        }
        
        .hero p {
            font-size: 1.3rem;
            max-width: 800px;
            margin: 0 auto 3rem;
            color: var(--text-light);
            line-height: 1.6;
        }
        
        .btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            background-color: var(--accent);
            color: white;
            text-decoration: none;
            border-radius: var(--radius);
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            font-size: 1.1rem;
            box-shadow: var(--shadow-light);
        }
        
        .btn:hover {
            background-color: var(--accent-dark);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }
        
        .btn-secondary {
            background-color: transparent;
            border: 2px solid var(--accent-light);
            margin-left: 1rem;
        }
        
        .btn-secondary:hover {
            background-color: rgba(96, 165, 250, 0.1);
        }
        
        /* Business Highlights */
        .business-highlights {
            background-color: var(--secondary);
            padding: 5rem 0;
        }
        
        .highlight-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
        }
        
        .highlight-card {
            background: var(--primary);
            padding: 2.5rem 2rem;
            border-radius: var(--radius);
            border-left: 4px solid var(--accent);
            transition: var(--transition);
            box-shadow: var(--shadow-light);
            position: relative;
            overflow: hidden;
        }
        
        .highlight-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.05) 0%, transparent 100%);
            z-index: 0;
        }
        
        .highlight-card:hover {
            transform: translateY(-8px);
            border-left-color: var(--accent-light);
            box-shadow: var(--shadow);
        }
        
        .highlight-card h3 {
            color: var(--text);
            margin-bottom: 1rem;
            font-size: 1.4rem;
            font-weight: 600;
            position: relative;
        }
        
        .highlight-card p {
            color: var(--text-light);
            line-height: 1.6;
            position: relative;
        }
        
        /* Trust Section - Modernisiert */
        .trust-section {
            padding: 6rem 0;
            background-color: var(--primary);
            position: relative;
        }
        
        .trust-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 70% 30%, rgba(59, 130, 246, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--text);
            margin-bottom: 1rem;
            font-weight: 700;
        }
        
        .section-title p {
            color: var(--text-light);
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.2rem;
            line-height: 1.6;
        }
        
        .trust-process {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
            margin-bottom: 4rem;
            position: relative;
        }
        
        .process-step {
            text-align: center;
            padding: 2.5rem 2rem;
            border-radius: var(--radius);
            background: var(--secondary);
            transition: var(--transition);
            border: 1px solid var(--border);
            position: relative;
            box-shadow: var(--shadow-light);
        }
        
        .process-step:hover {
            transform: translateY(-8px);
            border-color: var(--accent);
            box-shadow: var(--shadow);
        }
        
        .advisor-badge {
            background-color: var(--accent);
            color: white;
            padding: 0.5rem 1.2rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 1.5rem;
            box-shadow: var(--shadow-light);
        }
        
        .step-number {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
            box-shadow: var(--shadow-light);
        }
        
        .step-title {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            color: var(--text);
            font-weight: 600;
        }
        
        .process-step p {
            color: var(--text-light);
            line-height: 1.6;
        }
        
        /* Services Section - Modernisiert */
        .services-section {
            background-color: var(--secondary);
            padding: 6rem 0;
            position: relative;
        }
        
        .services-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 30% 70%, rgba(59, 130, 246, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
        }
        
        .service-card {
            background-color: var(--primary);
            border-radius: var(--radius);
            padding: 2.5rem 2rem;
            transition: var(--transition);
            border: 1px solid var(--border);
            box-shadow: var(--shadow-light);
            position: relative;
            overflow: hidden;
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.05) 0%, transparent 100%);
            z-index: 0;
        }
        
        .service-card:hover {
            transform: translateY(-8px);
            border-color: var(--accent);
            box-shadow: var(--shadow);
        }
        
        .service-header {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .service-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1.5rem;
            color: white;
            font-size: 1.2rem;
            box-shadow: var(--shadow-light);
        }
        
        .service-content h3 {
            color: var(--text);
            margin-bottom: 1rem;
            font-size: 1.4rem;
            font-weight: 600;
        }
        
        .service-content p {
            color: var(--text-light);
            line-height: 1.6;
        }
        
        /* Transport Specialization Section */
        .specialization-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            position: relative;
            overflow: hidden;
        }
        
        .specialization-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(59, 130, 246, 0.05)" d="M0,0 L100,0 L100,100 L0,100 Z"></path></svg>');
            background-size: cover;
        }
        
        .specialization-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        .specialization-content {
            max-width: 900px;
        }
        
        .specialization-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--text);
            font-weight: 700;
        }
        
        .specialization-content p {
            color: var(--text-light);
            margin-bottom: 1.5rem;
            line-height: 1.6;
            font-size: 1.1rem;
        }
        
        .specialization-features {
            margin-top: 3rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .specialization-feature {
            background: var(--primary);
            padding: 2rem;
            border-radius: var(--radius);
            border: 1px solid var(--border);
            transition: var(--transition);
            box-shadow: var(--shadow-light);
        }
        
        .specialization-feature:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }
        
        .specialization-feature i {
            color: var(--accent);
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .specialization-feature h4 {
            color: var(--text);
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        
        .specialization-feature p {
            color: var(--text-light);
            margin: 0;
            font-size: 1rem;
        }
        
        .certification-note {
            margin-top: 3rem;
            background: rgba(59, 130, 246, 0.1);
            border-left: 4px solid var(--accent);
            padding: 1.5rem;
            border-radius: var(--radius-sm);
            text-align: left;
            max-width: 700px;
        }
        
        .certification-note p {
            color: var(--text-light);
            margin: 0;
            font-size: 1rem;
        }
        
        .certification-note strong {
            color: var(--accent-light);
        }
        
        /* Reviews Section */
        .reviews-section {
            padding: 6rem 0;
            background-color: var(--secondary);
            position: relative;
        }
        
        .reviews-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 70% 30%, rgba(59, 130, 246, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .reviews-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
            margin-top: 3rem;
        }
        
        .review-card {
            background: var(--primary);
            padding: 2.5rem 2rem;
            border-radius: var(--radius);
            border: 1px solid var(--border);
            transition: var(--transition);
            box-shadow: var(--shadow-light);
            position: relative;
            overflow: hidden;
        }
        
        .review-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.05) 0%, transparent 100%);
            z-index: 0;
        }
        
        .review-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }
        
        .review-header {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .review-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1.5rem;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            box-shadow: var(--shadow-light);
        }
        
        .review-info h4 {
            color: var(--text);
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }
        
        .review-info p {
            color: var(--text-light);
            font-size: 0.9rem;
            margin: 0;
        }
        
        .review-stars {
            color: #fbbf24;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }
        
        .review-text {
            color: var(--text-light);
            line-height: 1.6;
            font-style: italic;
            position: relative;
        }
        
        .us-army-badge {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 4px;
            font-size: 0.7rem;
            font-weight: 600;
            display: inline-block;
            margin-left: 0.5rem;
        }
        
        /* Tracking Section - Modernisiert */
        .tracking-section {
            padding: 6rem 0;
            background-color: var(--primary);
            position: relative;
        }
        
        .tracking-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 70% 70%, rgba(59, 130, 246, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .tracking-container {
            max-width: 800px;
            margin: 0 auto;
            background: var(--secondary);
            border-radius: var(--radius);
            padding: 3.5rem;
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
            position: relative;
        }
        
        .tracking-form {
            margin-top: 2.5rem;
        }
        
        .form-group {
            margin-bottom: 1.8rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.8rem;
            font-weight: 600;
            color: var(--text);
            font-size: 1.1rem;
        }
        
        .form-group input {
            width: 100%;
            padding: 1.2rem;
            border: 1px solid var(--border);
            border-radius: var(--radius-sm);
            font-size: 1rem;
            transition: var(--transition);
            background: var(--primary);
            color: var(--text);
        }
        
        .form-group input:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }
        
        .tracking-example {
            font-size: 0.9rem;
            color: var(--text-light);
            margin-top: 0.5rem;
        }
        
        .checkbox-group {
            display: flex;
            align-items: flex-start;
            margin-bottom: 2rem;
        }
        
        .checkbox-group input {
            margin-right: 0.8rem;
            margin-top: 0.2rem;
        }
        
        .checkbox-group label {
            font-size: 0.95rem;
            font-weight: normal;
            color: var(--text-light);
        }
        
        .checkbox-group a {
            color: var(--accent-light);
            text-decoration: none;
        }
        
        .checkbox-group a:hover {
            text-decoration: underline;
        }
        
        .business-contact {
            margin-top: 3rem;
            padding-top: 2.5rem;
            border-top: 1px solid var(--border);
        }
        
        .business-contact h3 {
            color: var(--text);
            margin-bottom: 1.2rem;
            font-size: 1.4rem;
        }
        
        .business-contact p {
            color: var(--text-light);
            margin-bottom: 1.2rem;
            line-height: 1.6;
        }
        
        /* FAQ Section - Modernisiert */
        .faq-section {
            padding: 6rem 0;
            background-color: var(--secondary);
            position: relative;
        }
        
        .faq-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 30% 30%, rgba(59, 130, 246, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .faq-container {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .faq-item {
            margin-bottom: 1.2rem;
            border-radius: var(--radius);
            overflow: hidden;
            border: 1px solid var(--border);
            background: var(--primary);
            box-shadow: var(--shadow-light);
            transition: var(--transition);
        }
        
        .faq-item:hover {
            box-shadow: var(--shadow);
        }
        
        .faq-question {
            background: var(--primary);
            padding: 1.8rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: var(--text);
            transition: var(--transition);
            font-size: 1.2rem;
        }
        
        .faq-question:hover {
            background: var(--secondary);
        }
        
        .faq-question::after {
            content: '+';
            font-size: 1.8rem;
            transition: var(--transition);
            color: var(--accent-light);
        }
        
        .faq-question.active::after {
            content: '-';
            transform: rotate(180deg);
        }
        
        .faq-answer {
            padding: 0 1.8rem;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }
        
        .faq-answer.active {
            padding: 0 1.8rem 1.8rem;
            max-height: 1000px;
        }
        
        .faq-answer p {
            color: var(--text-light);
            line-height: 1.6;
        }
        
        /* CTA Section - Modernisiert */
        .cta-section {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%);
            color: white;
            padding: 6rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L1000,0 L1000,1000 L0,1000 Z"></path></svg>');
            background-size: cover;
        }
        
        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            position: relative;
        }
        
        .cta-section p {
            max-width: 700px;
            margin: 0 auto 3rem;
            font-size: 1.2rem;
            opacity: 0.95;
            line-height: 1.6;
            position: relative;
        }
        
        .cta-btn {
            background: white;
            color: var(--accent);
            padding: 1.2rem 2.5rem;
            border-radius: var(--radius);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            display: inline-block;
            box-shadow: var(--shadow);
            position: relative;
        }
        
        .cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        /* Footer - Modernisiert */
        footer {
            background-color: var(--primary);
            color: var(--text);
            padding: 5rem 0 2rem;
            border-top: 1px solid var(--border);
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3.5rem;
            margin-bottom: 3rem;
        }
        
        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            color: var(--text);
            font-weight: 600;
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 0.8rem;
        }
        
        .footer-column ul li a {
            color: var(--text-light);
            text-decoration: none;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .footer-column ul li a:hover {
            color: var(--accent-light);
            transform: translateX(5px);
        }
        
        .footer-column ul li a i {
            font-size: 0.8rem;
        }
        
        .company-info {
            border-top: 1px solid var(--border);
            padding-top: 2.5rem;
            text-align: center;
        }
        
        .company-info p {
            color: var(--text-light);
            margin-bottom: 0.8rem;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 2.5rem;
            border-top: 1px solid var(--border);
            color: var(--text-light);
            font-size: 0.9rem;
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--accent);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: var(--shadow);
            transition: var(--transition);
            opacity: 0;
            visibility: hidden;
            z-index: 999;
        }
        
        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background: var(--accent-dark);
            transform: translateY(-3px);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                text-align: center;
            }
            
            .logo {
                margin-bottom: 1rem;
            }
            
            nav ul {
                flex-direction: column;
                width: 100%;
            }
            
            nav ul li {
                margin: 0.5rem 0;
            }
            
            .mobile-menu-btn {
                display: block;
                position: absolute;
                top: 1rem;
                right: 1rem;
            }
            
            .hero {
                padding: 5rem 0;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .btn-container {
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }
            
            .btn-secondary {
                margin-left: 0;
            }
            
            .tracking-container {
                padding: 2.5rem 1.5rem;
            }
            
            .service-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .service-icon {
                margin-bottom: 1rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .cta-section h2 {
                font-size: 2rem;
            }
            
            .specialization-features {
                grid-template-columns: 1fr;
            }
            
            .reviews-grid {
                grid-template-columns: 1fr;
            }
        }
        
        /* Animationen */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in-up {
            animation: fadeInUp 0.8s ease forwards;
        }
        
        .delay-1 {
            animation-delay: 0.2s;
        }
        
        .delay-2 {
            animation-delay: 0.4s;
        }
        
        .delay-3 {
            animation-delay: 0.6s;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <i class="fas fa-car logo-icon"></i>
                TrustAuto<span>GmbH</span>
            </div>
            <button class="mobile-menu-btn" id="mobileMenuBtn">☰</button>
            <nav id="mainNav">
                <ul>
                    <li><a href="#home" class="nav-link active">Startseite</a></li>
                    <li><a href="#services" class="nav-link">Leistungen</a></li>
                    <li><a href="#process" class="nav-link">Prozess</a></li>
                    <li><a href="#specialization" class="nav-link">Transport-Services</a></li>
                    <li><a href="#reviews" class="nav-link">Bewertungen</a></li>
                    <li><a href="#tracking" class="nav-link">Sendungsverfolgung</a></li>
                    <li><a href="#faq" class="nav-link">FAQ</a></li>
                    <li><a href="#contact" class="nav-link">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <h1 class="fade-in-up">TrustAuto GmbH – Ihr Partner für sicheren Autokauf</h1>
            <p class="fade-in-up delay-1">Als professioneller Treuhanddienstleister bieten wir Ihnen maximale Sicherheit beim Fahrzeugkauf mit persönlichem Berater – von der Auswahl bis zur Übergabe. <strong>Inklusive 14-tägiger Testphase mit kostenloser Rückgabe!</strong></p>
            <div class="btn-container fade-in-up delay-2">
                <a href="#contact" class="btn">Kostenlose Erstberatung</a>
                <a href="#process" class="btn btn-secondary">Unser Prozess</a>
            </div>
        </div>
    </section>

    <!-- Business Highlights -->
    <section class="business-highlights">
        <div class="container">
            <div class="highlight-grid">
                <div class="highlight-card fade-in-up">
                    <h3><i class="fas fa-award"></i> Zertifizierte Expertise</h3>
                    <p>Als GmbH handeln wir mit der gebotenen Sorgfalt und unterliegen strengen Qualitätsstandards für maximale Rechtssicherheit.</p>
                </div>
                <div class="highlight-card fade-in-up delay-1">
                    <h3><i class="fas fa-user-tie"></i> Persönlicher Berater</h3>
                    <p>Jeder Kunde erhält einen festen Ansprechpartner, der Sie während des gesamten Kaufprozesses professionell begleitet.</p>
                </div>
                <div class="highlight-card fade-in-up delay-2">
                    <h3><i class="fas fa-undo-alt"></i> 14-Tage Rückgaberecht</h3>
                    <p>Testen Sie Ihr Fahrzeug 14 Tage lang in aller Ruhe. Bei Nichtgefallen können Sie es kostenlos zurückgeben - vollständige Transparenz und Sicherheit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Section -->
    <section class="trust-section" id="process">
        <div class="container">
            <div class="section-title">
                <h2 class="fade-in-up">Unser 4-Stufen-Prozess</h2>
                <p class="fade-in-up delay-1">Durch unser strukturiertes Vorgehen garantieren wir Ihnen einen sicheren und transparenten Fahrzeugkauf.</p>
            </div>
            
            <div class="trust-process">
                <div class="process-step fade-in-up">
                    <div class="advisor-badge">Mit Berater</div>
                    <div class="step-number">1</div>
                    <h3 class="step-title">Beratung & Auswahl</h3>
                    <p>Ihr persönlicher Berater analysiert Ihre Anforderungen und unterstützt bei der Fahrzeugauswahl.</p>
                </div>
                
                <div class="process-step fade-in-up delay-1">
                    <div class="advisor-badge">Mit Berater</div>
                    <div class="step-number">2</div>
                    <h3 class="step-title">Kaufabwicklung</h3>
                    <p>Professionelle Verhandlungen, Vertragsprüfung und sichere Dokumentenabwicklung.</p>
                </div>
                
                <div class="process-step fade-in-up delay-2">
                    <div class="advisor-badge">Mit Berater</div>
                    <div class="step-number">3</div>
                    <h3 class="step-title">Qualitätssicherung</h3>
                    <p>Umfassende Fahrzeugprüfung und überwachte Zahlungsabwicklung über unser Treuhandkonto.</p>
                </div>
                
                <div class="process-step fade-in-up delay-3">
                    <div class="advisor-badge">Mit Berater</div>
                    <div class="step-number">4</div>
                    <h3 class="step-title">Lieferung & Testphase</h3>
                    <p>Professioneller Transport und persönliche Übergabe. <strong>Plus 14 Tage Testphase mit kostenloser Rückgabegarantie!</strong></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="container">
            <div class="section-title">
                <h2 class="fade-in-up">Unsere Geschäftsleistungen</h2>
                <p class="fade-in-up delay-1">Umfassende Services für einen sorgenfreien Fahrzeugkauf – von der Beratung bis zur Übergabe.</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card fade-in-up">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="service-content">
                            <h3>Fahrzeugbewertung</h3>
                            <p>Professionelle Begutachtung und Bewertung durch zertifizierte Sachverständige. Umfassende technische und optische Prüfung für maximale Transparenz.</p>
                        </div>
                    </div>
                </div>
                
                <div class="service-card fade-in-up delay-1">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="service-content">
                            <h3>Treuhandservice</h3>
                            <p>Sichere Verwahrung Ihrer Zahlung bis zur erfolgreichen Fahrzeugübergabe. Vollständige finanzielle Absicherung durch gesonderte Treuhandkonten.</p>
                        </div>
                    </div>
                </div>
                
                <div class="service-card fade-in-up delay-2">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-undo-alt"></i>
                        </div>
                        <div class="service-content">
                            <h3>14-Tage Rückgaberecht</h3>
                            <p>Testen Sie Ihr Fahrzeug 14 Tage lang in aller Ruhe. Bei Nichtgefallen kostenlose Rückgabe - ohne versteckte Kosten oder Komplikationen.</p>
                        </div>
                    </div>
                </div>
                
                <div class="service-card fade-in-up">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="service-content">
                            <h3>Logistik & Transport</h3>
                            <p>Professionelle Transportorganisation mit vollständiger Versicherung. Inklusive spezieller Transportlösungen für anspruchsvolle Lieferungen.</p>
                        </div>
                    </div>
                </div>
                
                <div class="service-card fade-in-up delay-1">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="service-content">
                            <h3>Persönliche Betreuung</h3>
                            <p>Dedizierter Ansprechpartner für den gesamten Kaufprozess. Individuelle Beratung und Begleitung von der ersten Kontaktaufnahme bis zur Übergabe.</p>
                        </div>
                    </div>
                </div>
                
                <div class="service-card fade-in-up delay-2">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="service-content">
                            <h3>Risikomanagement</h3>
                            <p>Umfassende Absicherung gegen finanzielle und rechtliche Risiken. Proaktive Identifikation und Minimierung potentieller Problemstellungen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Transport Specialization Section -->
    <section class="specialization-section" id="specialization">
        <div class="container">
            <div class="specialization-container">
                <div class="specialization-content">
                    <h2 class="fade-in-up">Spezialisierte Transportlösungen</h2>
                    <p class="fade-in-up delay-1">Wir bieten maßgeschneiderte Transportdienstleistungen für anspruchsvolle Fahrzeuglieferungen. Unsere Expertise umfasst auch spezielle Transportanforderungen mit vollständiger behördlicher Abwicklung.</p>
                    
                    <div class="specialization-features">
                        <div class="specialization-feature fade-in-up">
                            <i class="fas fa-home"></i>
                            <div>
                                <h4>Direktlieferung zu Privatpersonen</h4>
                                <p>Wir liefern Fahrzeuge sicher und zuverlässig direkt zu Ihnen nach Hause. Vollumfängliche Abwicklung aller Formalitäten für einen reibungslosen Prozess.</p>
                            </div>
                        </div>
                        
                        <div class="specialization-feature fade-in-up delay-1">
                            <i class="fas fa-undo-alt"></i>
                            <div>
                                <h4>14-Tage Testphase</h4>
                                <p>Testen Sie das gelieferte Fahrzeug 14 Tage lang in Ruhe. Bei Nichtgefallen kostenlose Rückgabe - Ihr Geld ist während der Testphase sicher verwahrt.</p>
                            </div>
                        </div>
                        
                        <div class="specialization-feature fade-in-up delay-2">
                            <i class="fas fa-shield-alt"></i>
                            <div>
                                <h4>Vollständig versichert</h4>
                                <p>Alle unsere Transporte sind umfassend versichert. Maximale Sicherheit für Ihr Fahrzeug während des gesamten Transportprozesses.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="certification-note fade-in-up delay-3">
                        <p><strong>Hinweis:</strong> Wir sind auch für spezielle Transportanforderungen zertifiziert, inklusive Fahrzeuglieferungen von und zu US-Stützpunkten mit direkter Zustellung zu Privatpersonen.</p>
                    </div>
                    
                    <a href="#contact" class="btn fade-in-up delay-3" style="margin-top: 3rem;">Transport anfragen</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="reviews-section" id="reviews">
        <div class="container">
            <div class="section-title">
                <h2 class="fade-in-up">Kundenbewertungen</h2>
                <p class="fade-in-up delay-1">Das sagen unsere zufriedenen Kunden über unsere Dienstleistungen</p>
            </div>
            
            <div class="reviews-grid">
                <div class="review-card fade-in-up">
                    <div class="review-header">
                        <div class="review-avatar">MJ</div>
                        <div class="review-info">
                            <h4>Mike Johnson <span class="us-army-badge">US Army</span></h4>
                            <p>Ramstein Air Base</p>
                        </div>
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="review-text">
                        "TrustAuto hat meinen BMW X5 von Ramstein aus verkauft, während ich bereits zurück in den USA war. Der Prozess war reibungslos und die Kommunikation ausgezeichnet. Das Geld war innerhalb von 3 Tagen auf meinem Konto. Absolut empfehlenswert für Soldaten, die ihr Auto verkaufen müssen!"
                    </div>
                </div>
                
                <div class="review-card fade-in-up delay-1">
                    <div class="review-header">
                        <div class="review-avatar">AK</div>
                        <div class="review-info">
                            <h4>Anna Keller</h4>
                            <p>Hamburg</p>
                        </div>
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="review-text">
                        "Die 14-tägige Testphase hat mir die Sicherheit gegeben, die ich brauchte. Habe den Mercedes eine Woche lang getestet und war vollkommen zufrieden. Sollte ich jemals wieder ein Auto kaufen, nur über TrustAuto!"
                    </div>
                </div>
                
                <div class="review-card fade-in-up delay-2">
                    <div class="review-header">
                        <div class="review-avatar">SW</div>
                        <div class="review-info">
                            <h4>Sarah Williams <span class="us-army-badge">US Army</span></h4>
                            <p>Ehemals stationiert in Kaiserslautern</p>
                        </div>
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="review-text">
                        "Perfekter Service! Habe mein Auto über TrustAuto verkauft, nachdem ich versetzt wurde. Der persönliche Berater hat alles organisiert - von der Abholung in Ramstein bis zur vollständigen Abwicklung. Kein Stress, kein Papierkram, einfach professionell. Vielen Dank!"
                    </div>
                </div>
                
                <div class="review-card fade-in-up delay-3">
                    <div class="review-header">
                        <div class="review-avatar">JM</div>
                        <div class="review-info">
                            <h4>James Miller <span class="us-army-badge">US Army</span></h4>
                            <p>Ehemals Ramstein Air Base</p>
                        </div>
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="review-text">
                        "Als ich unerwartet versetzt wurde, dachte ich, ich müsste mein Auto unter Wert verkaufen. TrustAuto hat mir den besten Preis besorgt und alles abgewickelt, während ich schon in Texas war. Besonders beeindruckt hat mich die transparente Kommunikation über den gesamten Prozess."
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tracking Section -->
    <section class="tracking-section" id="tracking">
        <div class="container">
            <div class="section-title">
                <h2 class="fade-in-up">Sendungsverfolgung</h2>
                <p class="fade-in-up delay-1">Verfolgen Sie den Status Ihres Fahrzeugtransports in Echtzeit.</p>
            </div>
            
            <div class="tracking-container fade-in-up">
                <p>Als TrustAuto GmbH bieten wir Ihnen vollständige Transparenz über jeden Schritt des Transportprozesses - von der Abholung bis zur Lieferung direkt zu Ihnen.</p>
                
                <div class="tracking-form">
                    <div class="form-group">
                        <label for="tracking-number">Sendungsnummer eingeben:</label>
                        <input type="text" id="tracking-number" placeholder="Beispiel: TRUST4UX51457C5">
                        <div class="tracking-example">Beispiel: TRUST4UX51457C5</div>
                    </div>
                    
                    <div class="checkbox-group">
                        <input type="checkbox" id="agree-terms">
                        <label for="agree-terms">Ich akzeptiere die <a href="#">AGB der TrustAuto GmbH</a></label>
                    </div>
                    
                    <button class="btn" id="track-btn">Status abfragen</button>
                </div>
                
                <div class="business-contact">
                    <h3>Persönlicher Support</h3>
                    <p>Ihr persönlicher Berater steht Ihnen für Rückfragen jederzeit zur Verfügung. Kontaktieren Sie uns für eine individuelle Beratung - auch zur 14-tägigen Testphase.</p>
                    <p>TrustAuto GmbH – Ihr zuverlässiger Partner für sicheren Autokauf.</p>
                    <a href="mailto:service@trustauto-gmbh.de" class="btn btn-secondary">Berater kontaktieren</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq">
        <div class="container">
            <div class="section-title">
                <h2 class="fade-in-up">Häufig gestellte Fragen</h2>
                <p class="fade-in-up delay-1">Antworten auf die wichtigsten Fragen zu unseren Services.</p>
            </div>
            
            <div class="faq-container">
                <div class="faq-item fade-in-up">
                    <div class="faq-question">Welche Vorteile bietet die TrustAuto GmbH als Unternehmen?</div>
                    <div class="faq-answer">
                        <p>Als GmbH handeln wir mit der gebotenen rechtlichen Sorgfalt und unterliegen strengen Compliance-Richtlinien. Dies bietet Ihnen maximale Sicherheit und Verlässlichkeit. Zudem verfügen wir über zertifizierte Prozesse und versicherte Services.</p>
                    </div>
                </div>
                
                <div class="faq-item fade-in-up delay-1">
                    <div class="faq-question">Wie funktioniert die 14-tägige Testphase?</div>
                    <div class="faq-answer">
                        <p>Nach Erhalt Ihres Fahrzeugs haben Sie 14 Tage Zeit, es in aller Ruhe zu testen. Sie können das Fahrzeug unter realen Bedingungen fahren und prüfen. Sollte es Ihnen nicht gefallen oder sollten Mängel auftreten, können Sie es kostenlos zurückgeben. Ihr Geld wird während dieser Zeit auf unserem Treuhandkonto verwahrt und erst nach Ablauf der Testphase an den Verkäufer freigegeben.</p>
                    </div>
                </div>
                
                <div class="faq-item fade-in-up delay-2">
                    <div class="faq-question">Sind die Services versichert?</div>
                    <div class="faq-answer">
                        <p>Ja, alle unsere Leistungen sind umfassend versichert. Dies beinhaltet Transportversicherungen, Haftpflichtversicherungen und weitere Absicherungen zum Schutz Ihrer Interessen.</p>
                    </div>
                </div>
                
                <div class="faq-item fade-in-up delay-1">
                    <div class="faq-question">Bieten Sie spezielle Transportdienstleistungen an?</div>
                    <div class="faq-answer">
                        <p>Ja, wir bieten maßgeschneiderte Transportlösungen für verschiedene Anforderungen, inklusive spezieller Lieferungen mit behördlichen Genehmigungen. Kontaktieren Sie uns für eine individuelle Beratung zu Ihren Transportbedürfnissen.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" id="contact">
        <div class="container">
            <h2 class="fade-in-up">Starten Sie Ihren sicheren Autokauf</h2>
            <p class="fade-in-up delay-1">Vereinbaren Sie ein unverbindliches Beratungsgespräch mit unserem Expertenteam. Wir zeigen Ihnen, wie Sie von unseren professionellen Services profitieren - inklusive 14-tägiger Testphase mit kostenloser Rückgabe.</p>
            <a href="mailto:kontakt@trustauto-gmbh.de" class="cta-btn fade-in-up delay-2">Jetzt Termin vereinbaren</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>TrustAuto GmbH</h3>
                    <p>Ihr professioneller Partner für sicheren Fahrzeugkauf mit Treuhandservice und persönlicher Betreuung.</p>
                </div>
                
                <div class="footer-column">
                    <h3>Leistungen</h3>
                    <ul>
                        <li><a href="#services"><i class="fas fa-chevron-right"></i> Treuhandservice</a></li>
                        <li><a href="#process"><i class="fas fa-chevron-right"></i> Kaufabwicklung</a></li>
                        <li><a href="#specialization"><i class="fas fa-chevron-right"></i> Transport-Services</a></li>
                        <li><a href="#tracking"><i class="fas fa-chevron-right"></i> Sendungsverfolgung</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Unternehmen</h3>
                    <ul>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Über uns</a></li>
                        <li><a href="#contact"><i class="fas fa-chevron-right"></i> Kontakt</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Karriere</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Partner</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Rechtliches</h3>
                    <ul>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Impressum</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Datenschutz</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> AGB</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Widerrufsrecht</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="company-info">
                <p><strong>TrustAuto GmbH</strong></p>
                <p>Musterstraße 123 • 10115 Berlin</p>
                <p>Telefon: +49 (0) 30 12345678 • E-Mail: info@trustauto-gmbh.de</p>
                <p>Geschäftsführer: Max Mustermann • Handelsregister: HRB 123456</p>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 TrustAuto GmbH. Alle Rechte vorbehalten.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </a>

    <script>
        // Mobile Menu Toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            document.getElementById('mainNav').classList.toggle('active');
        });

        // Navigation
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Update active nav link
                document.querySelectorAll('.nav-link').forEach(item => {
                    item.classList.remove('active');
                });
                this.classList.add('active');
                
                // Close mobile menu if open
                document.getElementById('mainNav').classList.remove('active');
                
                // Scroll to section
                const targetId = this.getAttribute('href');
                if(targetId !== '#') {
                    // Special handling for Startseite (home)
                    if(targetId === '#home') {
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                    } else {
                        document.querySelector(targetId).scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const isActive = question.classList.contains('active');
                
                // Close all other FAQs
                document.querySelectorAll('.faq-question').forEach(q => {
                    if (q !== question) {
                        q.classList.remove('active');
                        q.nextElementSibling.classList.remove('active');
                    }
                });
                
                // Toggle current FAQ
                if (!isActive) {
                    question.classList.add('active');
                    answer.classList.add('active');
                } else {
                    question.classList.remove('active');
                    answer.classList.remove('active');
                }
            });
        });

        // Tracking Functionality
        document.getElementById('track-btn').addEventListener('click', function() {
            const trackingNumber = document.getElementById('tracking-number').value.trim();
            const agreeTerms = document.getElementById('agree-terms').checked;
            
            if (!trackingNumber) {
                alert('Bitte geben Sie eine Sendungsnummer ein.');
                return;
            }
            
            if (!agreeTerms) {
                alert('Bitte akzeptieren Sie die AGB der TrustAuto GmbH.');
                return;
            }
            
            // Display tracking results
            alert('Sendungsstatus wird abgefragt...\n\nTrustAuto GmbH gewährleistet professionelle Abwicklung Ihrer Sendung.');
            
            // Simulate API call delay
            this.textContent = 'Wird geladen...';
            this.disabled = true;
            
            setTimeout(() => {
                this.textContent = 'Status abfragen';
                this.disabled = false;
            }, 1500);
        });

        // Enter key support for tracking input
        document.getElementById('tracking-number').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                document.getElementById('track-btn').click();
            }
        });

        // Back to Top Button
        const backToTopButton = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('visible');
            } else {
                backToTopButton.classList.remove('visible');
            }
        });
        
        backToTopButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Scroll Animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in-up');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-up').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>