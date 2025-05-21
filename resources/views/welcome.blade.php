<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Right Wisdom</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    @extends('layouts.app')

    @section('title', 'The Right Wisdom - Home')

    @section('content')
    <!-- Doctor Information (Blank for now) -->
    <section id="doctor-info">
        <h2>Meet Our Doctors</h2>
        <div class="doctor-card">
            <img src="images/Kester Emamdee and co.jpg" alt="Dr. Kester Emamdee and Co" class="doctor-image">
            <div class="doctor-details">
                <h3>Dr. Kester Emamdee</h3>
                <p>
                    Dr. Kester Emamdee is a highly skilled professional with years of experience in delivering exceptional dental care.
                    Dedicated to patient satisfaction, Dr. Emamdee specializes in restorative dentistry and oral health education.
                </p>
            </div>
        </div>
    </section>

    <!-- Slideshow of Pictures (Placeholder for now) -->
    <section id="slideshow">
        <div class="container">
            <h2>Our Work</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($sliders as $key => $slider)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ asset($slider->url) }}" class="d-block w-100" alt="{{ $slider->title }}">
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Ticker Tape of Reviews -->
    <div class="ticker-tape">
        <div class="ticker-content">
            <p>"Best dental care I've had in years!" - John Doe</p>
            <p>"Excellent service, highly recommend!" - Jane Smith</p>
            <p>"The staff was amazing, and the facility was top-notch." - Mike Johnson</p>
            <p style="color: blue;"> "Replace with real reviews!" ~ Isa Abdul-Hamid</p>
        </div>
    </div>

    <!-- Google Map Embed -->
    <section id="google-map">
        <h2>Find Us</h2>
        <iframe src="https://maps.google.com/maps?q=1%20Pine%20Avenue%2C%20Munroe%20Road%2C%20Cunupia%2C%20Trinidad%20%26%20Tobago&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>

    <!-- Call Now Section -->
    <section id="call-now">
        <h2>Call Now</h2>
        <p>For immediate assistance, call us at <strong>782-8191</strong></p>
        <a href="tel:+1 868-782-8191" class="call-btn">Call Now</a>
    </section>

    <!-- Request an Appointment Section -->
    <section id="request-appointment">
        <p>Your appointment request is subject to confirmation. Our office will contact you to finalize the details.</p>
        <h2>Request an Appointment</h2>
        <form action="/submit-appointment" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="date" name="date" required>
            <textarea name="message" placeholder="Additional Details"></textarea>
            <button type="submit">Submit Request</button>
        </form>
    </section>
    @endsection

    @section('scripts')
    <script>
        // Any page-specific JavaScript can go here
    </script>
    @endsection

</body>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-color: #fdfef8;
        color: #000;
    }

    nav {
        background-color: #fdfef8;
        color: #4b5441;
        padding: 1rem 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #444638;
    }

    .logo {
        font-size: 1.5rem;
        font-weight: bold;
        color: #4b5441;
    }

    .menu {
        display: flex;
        align-items: center;
        gap: 2rem;
    }

    nav a {
        color: #4b5441;
        text-decoration: none;
        font-weight: bold;
        position: relative;
        padding: 0.5rem 1rem;
    }

    nav a:hover {
        color: #454739;
    }

    .ticker-tape {
        background-color: #4b5441;
        color: #fff;
        overflow: hidden;
        white-space: nowrap;
        padding: 1rem 0;
        position: relative;
    }

    .ticker-content {
        display: inline-block;
        animation: ticker 15s linear infinite;
    }

    .ticker-content p {
        display: inline;
        margin-right: 3rem;
    }

    @keyframes ticker {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    #request-appointment,
    #call-now,
    #google-map,
    #doctor-info {
        padding: 2rem;
        margin: 2rem 0;
        background-color: #ffffff;
        border-radius: 1rem;
    }

    #request-appointment form input,
    #request-appointment form textarea {
        width: 100%;
        padding: 1rem;
        margin: 0.5rem 0;
        border: 1px solid #ddd;
        border-radius: 0.5rem;
    }

    .call-btn {
        padding: 0.75rem 1.5rem;
        background-color: #4b5441;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .call-btn:hover {
        background-color: #5d6551;
    }

    footer {
        padding: 2rem;
        background-color: #fdfef8;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .social-icon {
        margin-right: 1rem;
        text-decoration: none;
        color: #4b5441;
    }

    .social-icon:hover {
        color: #454739;
    }

    .hours {
        font-size: 1.1rem;
    }

    #google-map iframe {
        width: 100%;
        height: 400px;
        border: 0;
    }

    #doctor-info p {
        font-size: 1.2rem;
        color: #4b5441;
    }

    .rounded-menu {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #fdfef8;
        border: 1px solid #4b5441;
        border-radius: 2rem;
        padding: 0.5rem 1.5rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        gap: 2rem;
        position: relative;
        /* Ensure dropdown aligns properly */
    }

    .rounded-menu a {
        color: #4b5441;
        font-weight: bold;
        text-decoration: none;
        padding: 0.5rem 1rem;
        border-radius: 1rem;
        transition: background-color 0.3s, color 0.3s;
    }

    .rounded-menu a:hover {
        background-color: #4b5441;
        color: #ffffff;
    }

    /* Dropdown container */
    .dropdown {
        position: relative;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        /* Position below the dropdown-toggle */
        left: 0;
        background-color: #fdfef8;
        border: 1px solid #4b5441;
        border-radius: 0.5rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 0.5rem 0;
        min-width: 200px;
        z-index: 1000;
    }

    /* Dropdown menu items */
    .dropdown-menu a {
        display: block;
        padding: 0.5rem 1rem;
        color: #4b5441;
        text-decoration: none;
        font-weight: normal;
        border-radius: 0.5rem;
    }

    .dropdown-menu a:hover {
        background-color: #4b5441;
        color: #ffffff;
    }

    /* Show dropdown on hover */
    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .card {
        position: relative;
        display: inline-block;
        padding: 1rem;
        background-color: #fdfef8;
        border: 1px solid #4b5441;
        border-radius: 1rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        cursor: pointer;
    }

    .card:hover {
        transform: scale(1.05);
        /* Slight zoom on hover */
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        /* Stronger shadow on hover */
    }

    .popup {
        position: absolute;
        top: 50%;
        left: 100%;
        /* Places the popup to the right */
        transform: translateY(-50%);
    }


    .popup[x-show="true"] {
        opacity: 1;
        pointer-events: auto;
        /* Re-enable clicks when visible */
    }

    .popup-content {
        background-color: #fff;
        /* Ensure good contrast */
        border: 1px solid #000;
        /* Temporary for visibility */
    }


    .close-btn {
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
        background-color: transparent;
        border: none;
        color: #4b5441;
        font-size: 1.2rem;
        font-weight: bold;
        cursor: pointer;
        transition: color 0.2s ease;
    }

    .close-btn:hover {
        color: #ff5c5c;
        /* Highlight color on hover */
    }

    /* Slideshow Container */
    #slideshow {
        padding: 2rem 0;
        background-color: #f8f8f8;
    }

    .carousel {
        position: relative;
        overflow: hidden;
        border-radius: 1rem;
        max-width: 800px;
        margin: 0 auto;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .carousel-slide {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        opacity: 0;
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .carousel-slide img {
        width: 100%;
        border-radius: 1rem;
        object-fit: cover;
        max-height: 400px;
    }

    .carousel-slide.active {
        display: block;
        opacity: 1;
        z-index: 2;
    }

    .carousel-caption {
        position: absolute;
        bottom: 1rem;
        left: 1rem;
        color: white;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.8);
        background-color: rgba(0, 0, 0, 0.5);
        padding: 1rem;
        border-radius: 0.5rem;
        max-width: 80%;
    }

    .carousel-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        font-size: 2rem;
        font-weight: bold;
        cursor: pointer;
        padding: 0.5rem 1rem;
        border-radius: 50%;
        z-index: 3;
        transition: background-color 0.3s ease;
    }

    .carousel-control.prev {
        left: 1rem;
    }

    .carousel-control.next {
        right: 1rem;
    }

    .carousel-control:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    #request-appointment {
        padding: 2rem;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    #request-appointment p {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 1rem;
        text-align: center;
    }

    #request-appointment h2 {
        font-size: 1.5rem;
        text-align: center;
        margin-bottom: 1.5rem;
        color: #333;
    }

    #request-appointment form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        align-items: center;
    }

    #request-appointment input,
    #request-appointment textarea {
        width: 80%;
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
    }

    button {
        padding: 0.75rem 1.5rem;
        background-color: #4b5441;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #5d6551;
    }

    .card {
        width: fit-content;
        height: fit-content;
        background-color: rgb(238, 238, 238);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 25px 25px;
        gap: 20px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.055);
    }

    /* for all social containers*/
    .socialContainer {
        width: 52px;
        height: 52px;
        background-color: rgb(44, 44, 44);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        transition-duration: .3s;
    }

    /* instagram*/
    .containerOne:hover {
        background-color: #d62976;
        transition-duration: .3s;
    }

    /* facebook */
    .containerTwo:hover {
        background-color: #1877F2;
        /* Facebook's official blue */
        transition-duration: 0.3s;
    }


    /* linkdin*/
    .containerThree:hover {
        background-color: #0072b1;
        transition-duration: .3s;
    }

    /* Whatsapp*/
    .containerFour:hover {
        background-color: #128C7E;
        transition-duration: .3s;
    }

    .socialContainer:active {
        transform: scale(0.9);
        transition-duration: .3s;
    }

    .socialSvg {
        width: 17px;
    }

    .socialSvg path {
        fill: rgb(255, 255, 255);
    }

    .socialContainer:hover .socialSvg {
        animation: slide-in-top 0.3s both;
    }

    @keyframes slide-in-top {
        0% {
            transform: translateY(-50px);
            opacity: 0;
        }

        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    #doctor-info {
        text-align: center;
        padding: 2rem;
        background-color: #f9f9f9;
        border-radius: 10px;
        margin: 2rem auto;
        max-width: 800px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    #doctor-info h2 {
        font-size: 2rem;
        margin-bottom: 1.5rem;
        color: #4b5441;
    }

    .doctor-card {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 1.5rem;
        margin-top: 1rem;
        justify-content: center;
    }

    .doctor-image {
        width: 200px;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    }

    .doctor-details {
        text-align: left;
        max-width: 500px;
    }

    .doctor-details h3 {
        font-size: 1.5rem;
        color: #4b5441;
        margin-bottom: 0.5rem;
    }

    .doctor-details p {
        font-size: 1rem;
        color: #333;
        line-height: 1.5;
    }
</style>

</html>