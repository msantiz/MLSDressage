@extends('layouts.app')

@section('content')

<div class="bigbox">

    <!-- HERO -->
    <section class="hero">
        <h1 class="hero-title">Projects & Work</h1>
        <p class="hero-subtitle">
            Creative work, partnerships, and digital projects built with purpose.
        </p>
    </section>

    <!-- INTRO -->
    <section class="projects-intro">
        <p>
        MLS Dressage extends beyond the arena into writing, media, and digital work. 
        These projects reflect a commitment to thoughtful storytelling, ethical sport, 
        and meaningful impact.
        </p>
    </section>

    <!-- PROJECT CARDS -->
    <section class="projects-grid">

        <!-- Project 1 -->
        <div class="project-card">
            <h3>Dressage Discussions</h3>
            <p>
            Educational writing on training, welfare, and horse health, designed to be 
            accessible and practical for riders at all levels.
            </p>
            <a href="https://dressagediscussions.home.blog/" target="_blank">Visit Blog →</a>
        </div>

        <!-- Project 2 -->
        <div class="project-card">
            <h3>Sponsorship & Media</h3>
            <p>
            Brand partnerships and collaborations aligned with purpose-driven sport 
            and storytelling.
            </p>
            <a href="/sponsorships">View Media →</a>
        </div>

        <!-- Project 3 -->
        <div class="project-card">
            <h3>Digital Services</h3>
            <p>
            Web design, content writing, and fractional support for small businesses 
            and equestrian professionals.
            </p>
            <a href="https://drive.google.com/file/d/1RPdEMsPVmisz89l2HPXnv5lOjTjjn7T2/view?usp=sharing" target="_blank">View my Portfolio →</a>
        </div>

    </section>

    <!-- CTA -->
    <section class="projects-cta">
        <h2>Let’s Work Together</h2>
        <p>
        If you are interested in partnerships, media, or digital work, I would love to connect.
        </p>

        <div class="cta-buttons">
            <a href="/contactus" class="btn">Contact Me</a>
            <a href="/sponsorships" class="btn btn-outline">Sponsorship & Media</a>
        </div>
    </section>

</div>

@endsection
