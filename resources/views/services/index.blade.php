@extends('layouts.app')

@section('title', 'Our Services - The Right Wisdom')

@section('content')
<div class="services-container">
    <h1>Our Services</h1>
    
    <p class="services-intro">
        At The Right Wisdom, we offer a comprehensive range of healthcare services to meet your needs. 
        Our team of experienced professionals is dedicated to providing high-quality care in a comfortable environment.
    </p>
    
    <div class="services-grid">
        <div class="service-card">
            <h2>Dental Services</h2>
            <p>Comprehensive dental care for the whole family, from routine check-ups to advanced procedures.</p>
            <a href="{{ route('services.dental') }}" class="service-link">Learn More</a>
        </div>
        
        <div class="service-card">
            <h2>Psychiatry Services</h2>
            <p>Professional mental health assessment, diagnosis, and treatment with a focus on medication management.</p>
            <a href="{{ route('services.psychiatry') }}" class="service-link">Learn More</a>
        </div>
        
        <div class="service-card">
            <h2>Psychology Services</h2>
            <p>Therapeutic approaches to help you navigate life's challenges and improve your mental wellbeing.</p>
            <a href="{{ route('services.psychology') }}" class="service-link">Learn More</a>
        </div>
        
        <div class="service-card disabled">
            <h2>Medical Services</h2>
            <p>Coming soon! Our medical services department is currently under development.</p>
            <span class="service-link disabled">Under Construction</span>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .services-container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 0 1rem;
    }
    
    .services-container h1 {
        color: #4b5441;
        text-align: center;
        margin-bottom: 1.5rem;
        font-size: 2.5rem;
    }
    
    .services-intro {
        text-align: center;
        margin-bottom: 3rem;
        font-size: 1.1rem;
        color: #333;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
    }
    
    .service-card {
        background-color: #fff;
        border-radius: 10px;
        padding: 2rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }
    
    .service-card h2 {
        color: #4b5441;
        margin-bottom: 1rem;
        font-size: 1.5rem;
    }
    
    .service-card p {
        color: #555;
        margin-bottom: 1.5rem;
        line-height: 1.6;
    }
    
    .service-link {
        display: inline-block;
        padding: 0.5rem 1rem;
        background-color: #4b5441;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }
    
    .service-link:hover {
        background-color: #5d6551;
    }
    
    .service-card.disabled {
        opacity: 0.7;
        cursor: not-allowed;
    }
    
    .service-link.disabled {
        background-color: #999;
        cursor: not-allowed;
    }
    
    .service-link.disabled:hover {
        background-color: #999;
    }
</style>
@endsection