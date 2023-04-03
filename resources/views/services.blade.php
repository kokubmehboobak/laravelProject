
@extends('layouts.main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @push('title')
        
  
    <title>Services</title>
    @endpush
    <style>.services .icon-box {
        text-align: center;
        padding: 80px 20px;
        transition: all ease-in-out 0.3s;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
      }
      
      .services .icon-box .icon {
        margin: 0 auto;
        width: 64px;
        height: 64px;
        background: #cc1616;
        transition: all 0.3s ease-out 0s;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        transform-style: preserve-3d;
      }
      
      .services .icon-box .icon i {
        color: #fff;
        font-size: 28px;
      }
      
      .services .icon-box .icon::before {
        position: absolute;
        content: "";
        left: -8px;
        top: -8px;
        height: 100%;
        width: 100%;
        background: #fce5e5;
        transition: all 0.3s ease-out 0s;
        transform: translateZ(-1px);
      }
      
      .services .icon-box h4 {
        font-weight: 700;
        margin-bottom: 15px;
        font-size: 24px;
      }
      
      .services .icon-box h4 a {
        color: #191919;
      }
      
      .services .icon-box p {
        line-height: 24px;
        font-size: 14px;
        margin-bottom: 0;
      }
      
      .services .icon-box:hover {
        background: #cc1616;
        border-color: #cc1616;
        padding: 70px 20px 90px 20px;
      }
      
      .services .icon-box:hover .icon {
        background: #fff;
      }
      
      .services .icon-box:hover .icon i {
        color: #cc1616;
      }
      
      .services .icon-box:hover .icon::before {
        background: #e82d2d;
      }
      
      .services .icon-box:hover h4 a,
      .services .icon-box:hover p {
        color: #fff;
      }
      </style>
</head>
<body>

    @section('main-section')
    <section id="services" class="services">
        <div class="container">
  
          <div class="section-title">
            <span>Services</span>
            <h2>Services</h2>
            <p>Discover our comprehensive range of services designed to meet all your needs</p>
          </div>
  
          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
              <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4><a href="">Web Development</a></h4>
                <p>Designing and building websites using various programming languages and frameworks, such as HTML, CSS, JavaScript, React, Angular, and Django.</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4><a href="">Mobile App Development</a></h4>
                <p>Developing mobile applications for various platforms, such as iOS and Android, using programming languages such as Java, Swift, and Kotlin.</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4><a href="">Quality Assurance and Testing</a></h4>
                <p>Ensuring that software products meet quality standards and perform as expected by testing them thoroughly, identifying and fixing bugs, and providing feedback to the development team.</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4><a href="">Software Development</a></h4>
                <p>Building software applications that run on desktop computers, servers, or other devices, using programming languages such as Java, Python, and C#.</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-slideshow"></i></div>
                <h4><a href="">DevOps </a></h4>
                <p>A set of practices that combine software development and IT operations to shorten the development life cycle and provide faster and more reliable software delivery.</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-arch"></i></div>
                <h4><a href="">Cloud Computing</a></h4>
                <p>Providing access to computing resources such as servers, storage, databases, and software over the internet, without the need for on-premises infrastructure</p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
    @endsection
</body>
</html>