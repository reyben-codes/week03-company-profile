@extends('layouts.app')

@section('title', 'Home | NexaTech Solutions')

@section('content')
<section class="hero">
    <div class="container hero-grid">
        <div>
            <span class="eyebrow">INNOVATION • DESIGN • TECHNOLOGY</span>
            <h1>Technology that helps your business <span class="gradient-text">move forward.</span></h1>
            <p class="hero-copy">NexaTech Solutions creates practical digital products and IT services that help organizations work smarter, connect with customers, and grow with confidence.</p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="{{ route('services') }}">Explore Services →</a>
                <a class="btn btn-secondary" href="{{ route('about') }}">Learn About Us</a>
            </div>
        </div>
        <div class="hero-card">
            <div class="orb orb-one"></div>
            <div class="orb orb-two"></div>
            <div class="tech-card">
                <span>01</span>
                <strong>Build</strong>
                <p>Reliable digital solutions.</p>
            </div>
            <div class="tech-card offset">
                <span>02</span>
                <strong>Connect</strong>
                <p>Better experiences for users.</p>
            </div>
            <div class="tech-card">
                <span>03</span>
                <strong>Grow</strong>
                <p>Technology that scales.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">WHO WE ARE</span>
            <h2>Digital solutions with a human approach.</h2>
            <p>We combine development, design, and IT expertise to turn business goals into useful digital experiences.</p>
        </div>

        <div class="feature-grid">
            <article class="feature-card"><span>01</span><h3>Practical</h3><p>We focus on solutions that solve real problems instead of adding unnecessary complexity.</p></article>
            <article class="feature-card"><span>02</span><h3>Scalable</h3><p>Our approach keeps future growth in mind, from the first page to larger systems.</p></article>
            <article class="feature-card"><span>03</span><h3>User-focused</h3><p>We design around the people who actually use the technology every day.</p></article>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container cta-inner">
        <div><span class="eyebrow">LET'S BUILD</span><h2>Have a digital idea?</h2><p>Let's turn it into something useful.</p></div>
        <a class="btn btn-light" href="{{ route('contact') }}">Contact Us →</a>
    </div>
</section>
@endsection