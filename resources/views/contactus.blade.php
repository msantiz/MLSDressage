@extends('layouts.app')

@section('content')

<div class="bigbox">

    <!-- HERO -->
    <section class="hero">
        <h1 class="hero-title">Contact</h1>
        <p class="hero-subtitle">
            Let’s connect. Whether it's training, partnerships, or digital work.
        </p>
    </section>

   <!-- CONTACT INFO -->
<section class="contact-section">

    <div class="contact-grid">

        <div class="contact-item">
            <i class="fas fa-map-marker-alt contact-icon"></i>
            <h3>Location</h3>
            <p>Renaissance Equestrian Center</p>
        </div>

        <div class="contact-item">
            <i class="fas fa-phone contact-icon"></i>
            <h3>Phone</h3>
            <p>(734) 358-8017</p>
        </div>

        <div class="contact-item">
            <i class="fas fa-envelope contact-icon"></i>
            <h3>Email</h3>
            <p>mlsdressage@gmail.com</p>
        </div>

        <div class="contact-item">
            <i class="fas fa-share-alt contact-icon"></i>
            <h3>Social</h3>

            <div class="social-links">
                <a href="https://www.instagram.com/mlsdressage/" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="https://www.tiktok.com/@mlsdressage" target="_blank" aria-label="TikTok">
                    <i class="fab fa-tiktok"></i>
                </a>

                <a href="https://www.facebook.com/mlsdressage" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
        </div>

    </div>

</section>

    <!-- MAP -->
    <section class="map-section">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2956.4151887978405!2d-83.8689755883471!3d42.18418937108966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883cb994475a9c71%3A0x1fa2cc09e7d37153!2sRenaissance%20Equestrian%20Center!5e0!3m2!1sen!2sus!4v1752179102202!5m2!1sen!2sus"
            allowfullscreen
            loading="lazy">
        </iframe>
    </section>

    <!-- FORM -->
    <section class="form-section">

        <h2 class="section-title">Send a Message</h2>

        <form method="post" action="{{ route('contact.send') }}" class="contact-form">

            @csrf

            <div class="form-group">
                <label>Name*</label>
                <input type="text" name="firstname" required maxlength="100" pattern="[A-Za-z\s\-\']+">
            </div>

            <div class="form-group">
                <label>Email*</label>
                <input type="email" name="email" required maxlength="255">
            </div>

            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" maxlength="20" pattern="[0-9+\-\s()]*">
            </div>

            <div class="form-group">
                <label>Message*</label>
                <textarea name="message" required maxlength="1000"></textarea>
            </div>

            <div class="form-submit">
                <button type="submit" class="btn">Submit</button>
            </div>

        </form>

    </section>

</div>

@endsection
