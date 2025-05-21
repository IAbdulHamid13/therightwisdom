@extends('layouts.app')

@section('title', 'Psychiatry Services - The Right Wisdom')

@section('content')
<div class="service-detail-container">
    <h1>Psychiatry Services</h1>
    
    <div class="service-hero">
        <img src="{{ asset('images/outside.jpg') }}" alt="Psychiatry Services at The Right Wisdom" class="service-image">
        <div class="service-intro">
            <p>
                Our psychiatry department offers comprehensive mental health services for individuals 
                facing various psychological challenges. Our experienced psychiatrists provide 
                evidence-based assessment, diagnosis, and treatment with compassion and understanding.
            </p>
        </div>
    </div>
    
    <div class="service-offerings">
        <h2>Our Psychiatry Services Include:</h2>
        
        <div class="service-grid">
            <div class="service-item">
                <h3>Psychiatric Evaluation</h3>
                <p>Comprehensive assessment to understand your mental health concerns and develop an appropriate treatment plan.</p>
            </div>
            
            <div class="service-item">
                <h3>Medication Management</h3>
                <p>Expert prescription and monitoring of psychiatric medications to effectively manage symptoms.</p>
            </div>
            
            <div class="service-item">
                <h3>Treatment for Mood Disorders</h3>
                <p>Specialized care for depression, bipolar disorder, and other mood-related conditions.</p>
            </div>
            
            <div class="service-item">
                <h3>Anxiety Disorder Treatment</h3>
                <p>Effective approaches for managing generalized anxiety, panic disorder, social anxiety, and phobias.</p>
            </div>
            
            <div class="service-item">
                <h3>ADHD Management</h3>
                <p>Diagnosis and treatment of attention-deficit/hyperactivity disorder in both children and adults.</p>
            </div>
            
            <div class="service-item">
                <h3>Consultation Services</h3>
                <p>Professional consultation with other healthcare providers to ensure coordinated care.</p>
            </div>
        </div>
    </div>
    
    <div class="service-cta">
        <h2>Take the First Step Toward Mental Wellness</h2>
        <p>Our psychiatry team is here to support you on your journey to better mental health.</p>
        <a href="{{ route('home') }}#request-appointment" class="cta-button">Schedule a Consultation</a>
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