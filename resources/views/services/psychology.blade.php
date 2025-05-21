@extends('layouts.app')

@section('title', 'Psychology Services - The Right Wisdom')

@section('content')
<div class="service-detail-container">
    <h1>Psychology Services</h1>

    <div class="service-hero">
        <img src="{{ asset('images/Kester Emamdee and co.jpg') }}" alt="Psychology Services at The Right Wisdom" class="service-image">
        <div class="service-intro">
            <p>
                Our psychology department provides therapeutic support for individuals, couples, and families
                facing emotional and behavioral challenges. Our licensed psychologists use evidence-based
                approaches to help you develop coping strategies and improve your quality of life.
            </p>
        </div>
    </div>

    <div class="service-offerings">
        <h2>Our Psychology Services Include:</h2>

        <div class="service-grid">
            <div class="service-item">
                <h3>Individual Therapy</h3>
                <p>One-on-one sessions to address personal challenges, develop coping skills, and work toward your goals.</p>
            </div>

            <div class="service-item">
                <h3>Couples Counseling</h3>
                <p>Support for partners seeking to improve communication, resolve conflicts, and strengthen their relationship.</p>
            </div>

            <div class="service-item">
                <h3>Family Therapy</h3>
                <p>Guidance for families working through challenges and improving family dynamics.</p>
            </div>

            <div class="service-item">
                <h3>Cognitive Behavioral Therapy (CBT)</h3>
                <p>Evidence-based approach to identify and change negative thought patterns and behaviors.</p>
            </div>

            <div class="service-item">
                <h3>Trauma-Focused Therapy</h3>
                <p>Specialized treatment for individuals who have experienced traumatic events.</p>
            </div>

            <div class="service-item">
                <h3>Psychological Assessment</h3>
                <p>Comprehensive evaluations to better understand cognitive functioning, personality, and emotional well-being.</p>
            </div>
        </div>
    </div>

    <div class="service-cta">
        <h2>Begin Your Healing Journey Today</h2>
        <p>Our psychology team is committed to providing a safe, supportive environment for your personal growth.</p>
        <a href="{{ route('home') }}#request-appointment" class="cta-button">Book Your Session</a>
    </div>
</div>
@endsection

@section('styles')
<style>
    .service-detail-container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 0 1rem;
    }

    .service-detail-container h1 {
        color: #4b5441;
        text-align: center;
        margin-bottom: 2rem;
        font-size: 2.5rem;
    }

    .service-hero {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        align-items: center;
        margin-bottom: 3rem;
    }

    .service-image {
        flex: 1;
        min-width: 300px;
        max-width: 600px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .service-intro {
        flex: 1;
        min-width: 300px;
    }

    .service-intro p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #333;
    }

    .service-offerings {
        margin-bottom: 3rem;
    }

    .service-offerings h2 {
        color: #4b5441;
        margin-bottom: 1.5rem;
        font-size: 1.8rem;
        text-align: center;
    }

    .service-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
    }

    .service-item {
        background-color: #fff;
        border-radius: 8px;
        padding: 1.5rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .service-item:hover {
        transform: translateY(-5px);
    }

    .service-item h3 {
        color: #4b5441;
        margin-bottom: 0.5rem;
        font-size: 1.3rem;
    }

    .service-item p {
        color: #555;
        line-height: 1.5;
    }

    .service-cta {
        background-color: #f9f9f9;
        padding: 2rem;
        border-radius: 10px;
        text-align: center;
    }

    .service-cta h2 {
        color: #4b5441;
        margin-bottom: 1rem;
        font-size: 1.8rem;
    }

    .service-cta p {
        margin-bottom: 1.5rem;
        font-size: 1.1rem;
    }

    .cta-button {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        background-color: #4b5441;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .cta-button:hover {
        background-color: #5d6551;
    }
</style>
@endsection