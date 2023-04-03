@extends('layouts.main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @push('title')
        
  
    <title>Contact</title>
    @endpush
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
</head>
<body>
  @section('main-section')
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="contact-mf">
                <div id="contact" class="box-shadow-full">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="title-box-2">
                        <h2 class="title-left">
                          Send Message to Us
                        </h2>
                      </div>
                      <div>
                        <form action="{{url('/')}}/contact" method="post">
                         @csrf
                            <div class="row">
                            <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                              </div>
                            </div>
                            <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                              </div>
                            </div>
                            <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                              </div>
                            </div>
                           
                            <div class="col-md-12 text-center">
                              <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                   
          
      </section>
      @endsection
</body>
</html>