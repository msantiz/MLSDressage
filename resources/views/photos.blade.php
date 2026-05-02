@extends('layouts.app')

@section('content')

<div class="bigbox">

    <!-- HERO -->
    <section class="hero">
        <h1 class="hero-title">Photo Gallery</h1>
        <p class="hero-subtitle">
            A look into the journey — training, competition, and moments along the way.
        </p>
    </section>

    <!-- GALLERY -->
    <section class="section">

        <div class="gallery-grid">

            <!-- ROW 1 -->
            <img src="/images/IMG_3173.jpg" onclick="openModal();currentSlide(1)" class="gallery-img">
            <img src="/images/TEAM-034.jpg" onclick="openModal();currentSlide(2)" class="gallery-img">
            <img src="/images/IMG_7472.JPG" onclick="openModal();currentSlide(3)" class="gallery-img">
            <img src="/images/EQUE3090.jpg" onclick="openModal();currentSlide(4)" class="gallery-img">

            <!-- ROW 2 -->
            <img src="/images/IMG_2164.jpg" onclick="openModal();currentSlide(5)" class="gallery-img">
            <img src="/images/iceland.png" onclick="openModal();currentSlide(6)" class="gallery-img">
            <img src="/images/EQUE0832.jpg" onclick="openModal();currentSlide(7)" class="gallery-img">
            <img src="/images/IMG_8010.jpg" onclick="openModal();currentSlide(8)" class="gallery-img">

            <!-- ROW 3 -->
            <img src="/images/EQUE1513.jpg" onclick="openModal();currentSlide(9)" class="gallery-img">
            <img src="/images/IMG_5314.JPG" onclick="openModal();currentSlide(10)" class="gallery-img">
            <img src="/images/IMG_3781.jpg" onclick="openModal();currentSlide(11)" class="gallery-img">
            <img src="/images/IMG_5821.jpg" onclick="openModal();currentSlide(12)" class="gallery-img">

            <!-- ROW 4 -->
            <img src="/images/mi.jpg" onclick="openModal();currentSlide(13)" class="gallery-img">
            <img src="/images/IMG_5765.jpg" onclick="openModal();currentSlide(14)" class="gallery-img">
            <img src="/images/ferdiexc.png" onclick="openModal();currentSlide(15)" class="gallery-img">
            <img src="/images/cinderlendon.jpg" onclick="openModal();currentSlide(16)" class="gallery-img">

            <!-- ROW 5 -->
            <img src="/images/IMG_3174.jpg" onclick="openModal();currentSlide(17)" class="gallery-img">
            <img src="/images/EQUE2699.jpg" onclick="openModal();currentSlide(18)" class="gallery-img">
            <img src="/images/IMG_1191.png" onclick="openModal();currentSlide(19)" class="gallery-img">
            <img src="/images/IMG_9742.jpg" onclick="openModal();currentSlide(20)" class="gallery-img">

        </div>

    </section>

</div>

<!-- MODAL (unchanged logic) -->
<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>

    <div class="modal-content">

        <!-- KEEP ALL YOUR EXISTING SLIDES EXACTLY AS THEY WERE -->
        <!-- (copy your modal slides here unchanged) -->

    </div>
</div>

@endsection