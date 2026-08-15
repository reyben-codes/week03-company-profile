@extends('layouts.app')

@section('title', 'Services | NexaTech Solutions')

@section('content')
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">WHAT WE DO</span>
        <h1>Services designed for modern businesses.</h1>
        <p>Six core services demonstrate dynamic Blade rendering from controller data.</p>
    </div>
</section>

<section class="section">
    <div class="container services-grid">
        @foreach ($services as $service)
            <article class="service-card">
                <div class="service-icon">
                    @if (!empty($service['icon_image']))
                        <img src="{{ asset($service['icon_image']) }}" alt="{{ $service['title'] }}">
                    @else
                        {{ $service['icon'] }}
                    @endif
                </div>
                <h2>{{ $service['title'] }}</h2>
                <p>{{ $service['description'] }}</p>
                <a href="{{ route('contact') }}">Discuss a project →</a>
            </article>
        @endforeach
    </div>
</section>

<section class="cta">
    <div class="container cta-inner">
        <div><span class="eyebrow">NEED HELP?</span><h2>Let's find the right service for you.</h2></div>
        <a class="btn btn-light" href="{{ route('contact') }}">Start a Conversation →</a>
    </div>
</section>
@endsection