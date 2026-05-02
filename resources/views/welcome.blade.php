@extends('layouts.app')

@section('content')

<div class="bigbox">

    <!-- HERO -->
    <section class="hero">
        <h1 class="hero-title">Dressage with Purpose</h1>
        <p class="hero-subtitle">
            Sport. Advocacy. Creative Work. Built with intention.
        </p>
    </section>

    <!-- SLIDESHOW -->
    <section class="slideshow-section">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="/images/Ferdie-main-page copy.jpg" alt="">
            </div>

            <div class="mySlides fade">
                <img src="/images/IMG_6367.jpg" alt="">
            </div>

            <div class="mySlides fade">
                <img src="/images/IMG_3802.jpg" alt="">
            </div>

        </div>

        <div class="dots">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="section">
        <h2 class="section-title">Meet Mara</h2>

        <p class="section-text">
            I am a competitive dressage rider based at Renaissance Equestrian Center in Saline, Michigan and a proud member of the Palestine Equestrian Federation.
            I am currently training toward Grand Prix with the long-term goal of competing internationally under the Palestinian flag.
        </p>

        <p class="section-text">
            MLS Dressage began as a training platform, but has evolved into something larger —
            a mission-driven brand that blends sport, advocacy, writing, digital work, and community-building.
        </p>

        <p class="section-text">
            I believe sport should stand for something.
        </p>
    </section>

    <div class="divider">֎</div>

    <!-- WHAT I DO -->
    <section class="section">
        <h2 class="section-title">What MLS Dressage Represents</h2>

        <div class="cards">

            <div class="card">
                <h3>High-Level Dressage</h3>
                <p>
                    Classical training focused on longevity, welfare, and performance at the upper levels.
                </p>
            </div>

            <div class="card">
                <h3>Advocacy Through Sport</h3>
                <p>
                    Using equestrian sport as a platform to raise awareness and represent Palestine internationally.
                </p>
            </div>

            <div class="card">
                <h3>Creative & Digital Work</h3>
                <p>
                    Writing, media, web design, and fractional support work that fund long-term riding goals and support small businesses.
                </p>
            </div>

        </div>
    </section>

    <div class="divider">֎</div>

    <!-- FEATURED PROJECTS -->
    <section class="section">
        <h2 class="section-title">Featured Projects</h2>

        <div class="cards">

            <a class="card card-link" href="https://dressagediscussions.home.blog/" target="_blank">
                <h3>Dressage Discussions</h3>
                <p>
                    Educational writing on training, welfare, and horse health.
                </p>
                <span class="card-cta">Visit Blog →</span>
            </a>

            <a class="card card-link" href="/sponsorships">
                <h3>Sponsorship & Media</h3>
                <p>
                    Brand partnerships and collaborations aligned with purpose-driven sport.
                </p>
                <span class="card-cta">View Media →</span>
            </a>

            <a class="card card-link" href="/contactus">
                <h3>Digital Services</h3>
                <p>
                    Web design, content writing, and fractional support work.
                </p>
                <span class="card-cta">Work With Me →</span>
            </a>

        </div>
    </section>

    <div class="divider">֎</div>

    <!-- CTA -->
    <section class="section cta">
        <h2 class="section-title">Let’s Build Something Meaningful</h2>

        <p class="cta-text">
            Whether you’re interested in sponsorship, media collaboration, digital work, or supporting the mission —
            I would love to connect.
        </p>

        <div class="cta-buttons">
            <a class="btn" href="/contactus">Contact Me</a>
            <a class="btn btn-outline" href="/sponsorships">Sponsorship & Media</a>
        </div>
    </section>

</div>

@endsection
