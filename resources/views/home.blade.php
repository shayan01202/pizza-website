@extends('layouts.app')

@section('title', 'Pizza Pie - Home')

@section('content')
    <!-- Home Section-->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Pizza Taste</h1>
            <h2>The tasty pizza of <br> your choice</h2>
            <a href="#menu" class="btn">View Menu</a>
        </div>
        <div class="home-img">
            <img src="{{ asset('images/1stimages.avif') }}" alt="Delicious Pizza">
        </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="{{ asset('images/2ndimage.jpg') }}" alt="About Us">
        </div>
        <div class="about-text">
            <span>About Us</span>
            <h2>We make good and <br> tasty pizzas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut quo iure rem ducimus tenetur deserunt commodi doloribus, quibusdam vel fuga?</p>
            <a href="#" class="btn">Learn More</a>
        </div>
    </section>

    <!-- Menu -->
    <section class="menu" id="menu">
        <div class="heading">
            <span>Menu</span>
            <h2>Tasty menu of the week</h2>
        </div>
        <div class="menu-container">
            <!-- Box 1 -->
            <div class="box">
                <div class="box-img">
                    <img src="{{ asset('images/3rdimage.avif') }}" alt="Cheese Pizza">
                </div>
                <h2>Cheese Pizza</h2>
                <h3>Tasty Food</h3>
                <span>₹300.0</span>
                <i class='bx bx-cart-alt'></i>
            </div>
            <!-- Box 2 -->
            <div class="box">
                <div class="box-img">
                    <img src="{{ asset('images/4thimage.avif') }}" alt="Tropical Pizza">
                </div>
                <h2>Tropical Pizza</h2>
                <h3>Tasty Food</h3>
                <span>₹350.0</span>
                <i class='bx bx-cart-alt'></i>
            </div>
            <!-- Box 3 -->
            <div class="box">
                <div class="box-img">
                    <img src="{{ asset('images/5thimage.jpg') }}" alt="Mecaroni Pizza">
                </div>
                <h2>Mecaroni Pizza</h2>
                <h3>Tasty Food</h3>
                <span>₹250.0</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>
    </section>

    <!-- Service -->
    <section class="services" id="services">
        <div class="heading">
            <span>Services</span>
            <h2>We provide best food services</h2>
        </div>

        <div class="servives-container">
            <!-- Box 1 -->
            <div class="s-box">
                <img src="{{ asset('images/6thimage.jpeg') }}" alt="Order Service">
                <h3>You Order</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit ea fugiat esse tempore ipsum temporibus.</p>
            </div>
            <!-- Box 2 -->
            <div class="s-box">
                <img src="{{ asset('images/7thimage.jpeg') }}" alt="Shipping Service">
                <h3>Shipping</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit ea fugiat esse tempore ipsum temporibus.</p>
            </div>
            <!-- Box 3 -->
            <div class="s-box">
                <img src="{{ asset('images/8thimage.webp') }}" alt="Delivery Service">
                <h3>Delivered</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit ea fugiat esse tempore ipsum temporibus.</p>
            </div>
        </div>
    </section>

    <!-- Connect -->
    <section class="connect">
        <div class="connect-text">
            <span>Let's Talk</span>
            <h2>Connect now</h2>
        </div>
        <a href="#contact" class="btn">Contact Us</a>
    </section>

    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="contact-box">
            <h3>Pizza Pie</h3>
            <span>Connect With Us</span>
            <div class="social">
                <a href="https://github.com/shayan01202"><i class='bx bxl-github'></i></a>
                <a href="https://www.linkedin.com/in/md-shahfahad-khan-192b51221/"><i class='bx bxl-linkedin'></i></a>
                <!-- <a href="https://www.instagram.com/khn_nishu09/"><i class='bx bxl-instagram'></i></a> -->
            </div>
        </div>
        <div class="contact-box">
            <h3>Menu Links</h3>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#services">Service</a></li>
            <li><a href="#contact">Contact</a></li>
        </div>
        <div class="contact-box">
            <h3>Quick Links</h3>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#privacy-policy">Privacy Policy</a></li>
            <li><a href="#disclaimer">Disclaimer</a></li>
            <li><a href="#terms-of-use">Terms Of Use</a></li>
        </div>
        <div class="contact-box address">
            <h3>Contact</h3>
            <i class='bx bxs-map'><span>unnamed road, Sahibzada Ajit Singh Nagar, Dao Majra - 140104, Punjab, India</span></i>
            <i class='bx bxs-phone'><span>+91 8928530995</span></i>
            <i class='bx bxs-envelope' onclick="openEmail()"><span>shayan09019@gmail.com</span></i>
        </div>
    </section>
    <div style="text-align: center; padding: 20px; background: var(--main-color); color: white; margin-top: 20px;">
    <h3>Developed by Shayan and Khan</h3>
</div>
@endsection