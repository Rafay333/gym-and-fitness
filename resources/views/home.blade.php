@extends('layouts.app')

@section('content')
<div class="hero text-center">
    <div>
        <h1 class="display-3">Transform Your Life at FitFocus</h1>
        <p class="lead">Your journey to a healthier, stronger you starts here</p>
        <a href="/register" class="btn btn-primary btn-lg me-2">Join Now</a>
        <a href="#learn-more" class="btn btn-outline-light btn-lg">Learn More</a>
    </div>
</div>

<div class="container mt-5" id="learn-more">
    <div class="row mb-5">
        <div class="col-md-6">
            <h2>Welcome to FitFocus</h2>
            <p>At FitFocus, we believe that fitness is not just about working out – it's about transforming your life. Our state-of-the-art facilities, expert trainers, and supportive community are here to help you achieve your fitness goals, whatever they may be.</p>
            <p>Whether you're a beginner taking your first steps towards a healthier lifestyle, or an experienced athlete looking to push your limits, FitFocus has everything you need to succeed.</p>
        </div>
        <div class="col-md-6">
            <img src="https://source.unsplash.com/600x400/?gym-interior" alt="Gym Interior" class="img-fluid rounded">
        </div>
    </div>

    <h2 class="text-center mb-4">Our Services</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://source.unsplash.com/300x200/?personal-training" class="card-img-top" alt="Personal Training">
                <div class="card-body">
                    <h5 class="card-title">Personal Training</h5>
                    <p class="card-text">Our certified personal trainers will create a customized workout plan tailored to your specific goals and fitness level.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://source.unsplash.com/300x200/?group-fitness" class="card-img-top" alt="Group Classes">
                <div class="card-body">
                    <h5 class="card-title">Group Classes</h5>
                    <p class="card-text">From high-intensity interval training to yoga, our diverse range of group classes caters to all interests and fitness levels.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://source.unsplash.com/300x200/?nutrition" class="card-img-top" alt="Nutrition Counseling">
                <div class="card-body">
                    <h5 class="card-title">Nutrition Counseling</h5>
                    <p class="card-text">Our nutrition experts will help you develop a balanced diet plan to complement your fitness routine and maximize your results.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6 offset-md-3 text-center">
            <h2>Ready to Get Started?</h2>
            <p>Join FitFocus today and take the first step towards a healthier, happier you. Our friendly staff is ready to welcome you and support you on your fitness journey.</p>
            <a href="/register" class="btn btn-primary btn-lg mt-3">Sign Up Now</a>
        </div>
    </div>
</div>

<div class="bg-light py-5 mt-5">
    <div class="container">
        <h2 class="text-center mb-4">What Our Members Say</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"FitFocus has completely changed my life. The trainers are amazing and the community is so supportive. I've never felt better!"</p>
                        <footer class="blockquote-footer">Sarah J.</footer>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"The variety of classes keeps me motivated. I look forward to my workouts now, which I never thought I'd say!"</p>
                        <footer class="blockquote-footer">Mike T.</footer>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"The nutrition guidance has been a game-changer for me. I'm seeing results faster than ever before."</p>
                        <footer class="blockquote-footer">Emily R.</footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection