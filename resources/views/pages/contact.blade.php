@extends('layouts.app')

@section('title', 'Contact | NexaTech Solutions')

@section('content')
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">GET IN TOUCH</span>
        <h1>Let's talk about your next project.</h1>
        <p>The contact form below is UI-only as required by the laboratory activity.</p>
    </div>
</section>

<section class="section">
    <div class="container contact-grid">
        <div class="contact-details">
            <h2>Contact Information</h2>
            <div class="contact-item"><span>📍</span><div><strong>Address</strong><p>Santa Cruz, Laguna, Philippines</p></div></div>
            <div class="contact-item"><span>✉️</span><div><strong>Email</strong><p>hello@nexatech.example</p></div></div>
            <div class="contact-item"><span>📞</span><div><strong>Phone</strong><p>+63 912 345 6789</p></div></div>
            <div class="contact-item"><span>🌐</span><div><strong>Social Media</strong><p>Facebook • LinkedIn • GitHub</p></div></div>
        </div>

        <form class="contact-form" action="#" method="POST" onsubmit="return false;">
            <label for="name">Full Name</label>
            <input id="name" type="text" placeholder="Your name">

            <label for="email">Email Address</label>
            <input id="email" type="email" placeholder="you@example.com">

            <label for="subject">Subject</label>
            <input id="subject" type="text" placeholder="How can we help?">

            <label for="message">Message</label>
            <textarea id="message" rows="6" placeholder="Tell us about your project..."></textarea>

            <button class="btn btn-primary" type="submit">Send Message</button>
            <small>This is a UI-only form and does not submit data.</small>
        </form>
    </div>
</section>
@endsection