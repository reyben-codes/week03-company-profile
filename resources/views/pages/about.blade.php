@extends('layouts.app')

@section('title', 'About | NexaTech Solutions')

@section('content')
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">ABOUT NEXATECH</span>
        <h1>Building technology with purpose.</h1>
        <p>We are a fictional startup created for the ITST 302 Week 3 Laravel MVC laboratory activity.</p>
    </div>
</section>

<section class="section">
    <div class="container two-col">
        <div>
            <span class="eyebrow">OUR HISTORY</span>
            <h2>From an idea to a digital partner.</h2>
            <p>NexaTech Solutions began with a simple goal: make useful technology more accessible to growing organizations. Our team brings together development, design, and IT problem-solving skills to create dependable digital experiences.</p>
            <p>Today, we focus on projects where thoughtful planning, clean implementation, and maintainability matter.</p>
        </div>
        <div class="timeline">
            <div><strong>2024</strong><p>Concept and team formation.</p></div>
            <div><strong>2025</strong><p>First digital solutions launched.</p></div>
            <div><strong>2026</strong><p>Expanded services and cloud-ready development.</p></div>
        </div>
    </div>
</section>

<section class="section muted">
    <div class="container cards-3">
        <article class="info-card"><span class="card-icon">🎯</span><h3>Mission</h3><p>To deliver practical, accessible, and maintainable technology solutions that create measurable value for organizations.</p></article>
        <article class="info-card"><span class="card-icon">🔭</span><h3>Vision</h3><p>To become a trusted technology partner known for thoughtful digital products and dependable IT services.</p></article>
        <article class="info-card"><span class="card-icon">💡</span><h3>Core Values</h3><p>Integrity, continuous learning, collaboration, user empathy, quality, and responsible innovation.</p></article>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading"><span class="eyebrow">OUR TEAM</span><h2>People behind the work.</h2></div>
        <div class="team-grid">
            <article class="team-card"><div class="avatar">AM</div><h3>Alex Mendoza</h3><p>Chief Executive Officer</p></article>
            <article class="team-card"><div class="avatar">JR</div><h3>Jamie Reyes</h3><p>Lead Software Developer</p></article>
            <article class="team-card"><div class="avatar">SK</div><h3>Sam Kim</h3><p>UI/UX Designer</p></article>
            <article class="team-card"><div class="avatar">DL</div><h3>Dani Lim</h3><p>IT Consultant</p></article>
        </div>
    </div>
</section>
@endsection