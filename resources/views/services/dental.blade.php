@extends('layouts.app')

@section('title', 'Dental Services - The Right Wisdom')

@section('content')
<div class="service-detail-container">
    <h1>Dental Services</h1>
    
    <div class="service-hero">
        <img src="{{ asset('images/Dentist room.jpg') }}" alt="Dental Services at The Right Wisdom" class="service-image">
        <div class="service-intro">
            <p>
                Our dental department provides comprehensive care for patients of all ages. 
                Led by Dr. Kester Emamdee, our team is committed to delivering exceptional 
                dental services in a comfortable and welcoming environment.
            </p>
        </div>
    </div>
    
    <div class="service-offerings">
        <h2>Our Dental Services Include:</h2>
        
        <div class="service-grid">
            <div class="service-item">
                <h3>Preventive Care</h3>
                <p>Regular check-ups, cleanings, fluoride treatments, and sealants to maintain optimal oral health.</p>
            </div>
            
            <div class="service-item">
                <h3>Restorative Dentistry</h3>
                <p>Fillings, crowns, bridges, and dentures to restore function and aesthetics to damaged teeth.</p>
            </div>
            
            <div class="service-item">
                <h3>Cosmetic Dentistry</h3>
                <p>Teeth whitening, veneers, and bonding to enhance your smile's appearance.</p>
            </div>
            
            <div class="service-item">
                <h3>Oral Surgery</h3>
                <p>Extractions, including wisdom teeth removal, performed with care and precision.</p>
            </div>
            
            <div class="service-item">
                <h3>Pediatric Dentistry</h3>
                <p>Child-friendly dental care to establish good oral health habits from an early age.</p>
            </div>
            
            <div class="service-item">
                <h3>Emergency Dental Care</h3>
                <p>Prompt attention for dental emergencies to alleviate pain and prevent further complications.</p>
            </div>
        </div>
    </div>
    
    <div class="service-cta">
        <h2>Schedule Your Dental Appointment Today</h2>
        <p>Experience the difference of personalized dental care at The Right Wisdom.</p>
        <a href="{{ route('home') }}#request-appointment" class="cta-button">Contact Us</a>
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