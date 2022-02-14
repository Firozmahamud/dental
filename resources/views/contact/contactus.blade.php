<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
    
    <title>Dental Plus</title>
</head>
<body>
    @include('sweetalert::alert')

  <!-- Menubar Section -->
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-12">
                <div class="row">
                  <div class="col-xl-5 col-md-4">
                    <div class="menubar menubar-expand">
                      <div class="logo"><a href="{{route('index')}}"><img src="{{asset('public/logo/image/')}}/{{  $contact->image }}"width="auto" height="auto" alt="" ></a></div>
                    </div>
                  </div>
                    <div class="col-xl-7 col-md-8 navbar-items-menu">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                          <i class="fa fa-phone-volume"></i>
                          <h6>Call Us</h6>
                          <p>{{$contact->phone}}</p>
        
                      </li>
                      <li class="nav-item">
                          <i class="fa fa-envelope"></i>
                          <h6>Support Help Line</h6>
                          <p>{{$contact->email}}</p>
        
                      </li>
                      <li class="nav-item">
                          <i class="fa fa-map-marker-alt"></i>
                          <h6>Get In Touch Now</h6>
                          <p>{{$contact->address}}</p>
        
                      </li>
        
                    </ul>
                  </div>
                  </div>
                </div>
                </div>
                </div>
                <br>

<!-- Navbar Section -->

      <nav class="navbar-2 navbar-expand-lg">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background: black;">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('index')}}">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">PAGES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('doctor.ourdoctors')}}">OUR DOCTORS</a>  
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">BLOG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('aboutus')}}">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contactus')}}">CONTACT</a>
              </li>
              
            </ul>

            <div class="appointment">
              <a href=""><i class="fa fa-calendar-alt"></i> APPOINTMENT</a>
            </div>
          </div>
        </div>
      </nav>



      <!-- Contact Section -->
      <section class="contact">
          <div class="contact-box">
            <div class="contact-links">
              <h2>CONTACT</h2>
              <div class="links-contact">
                <div class="link-contact">
                  <a><img src="https://i.postimg.cc/m2mg2Hjm/linkedin.png" alt="linkedin"></a>
                </div>
                <div class="link-contact">
                  <a ><img src="https://i.postimg.cc/YCV2QBJg/github.png" alt="github"></a>
                </div>
                <div class="link-contact"> <a>
                  <img src="https://i.postimg.cc/W4Znvrry/codepen.png" alt="codepen"></a>
                </div>
                <div class="link-contact">
                  <a><img src="https://i.postimg.cc/NjLfyjPB/email.png" alt="email"></a>
                </div>
              </div>
            </div>
            <div class="contact-form-wrapper">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                 
            <form action="{{ route('contactus.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
              {{--  <form>  --}}
                <div class="form-item">
                  <input type="text" name="name" required="">
                  <label>Name:</label>
                </div>
                <div class="form-item">
                  <input type="text" name="email" required="">
                  <label>Email:</label>
                </div>
                <div class="form-item">
                  <textarea class="" name="message" required=""></textarea>
                  <label>Message:</label>
                </div>
                <button class="submit-btn">Send</button>  
              </form>
            </div>
          </div>
        </section>



     
      <br>
      <br>

      <!-- Footer Section -->
      <footer>
        <div class="pg-footer">
           <footer class="footer">
             <svg class="footer-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100" preserveAspectRatio="none">
               <path class="footer-wave-path" d="M851.8,100c125,0,288.3-45,348.2-64V0H0v44c3.7-1,7.3-1.9,11-2.9C80.7,22,151.7,10.8,223.5,6.3C276.7,2.9,330,4,383,9.8 c52.2,5.7,103.3,16.2,153.4,32.8C623.9,71.3,726.8,100,851.8,100z"></path>
             </svg>
             <div class="footer-content">
               <div class="footer-content-column">
                 <div class="footer-logo">
                   <a class="footer-logo-link" href="#">
                     <span class="hidden-link-text">Dental Plus</span>
                     <img src="" alt="">
                   </a>
                 </div>
                 <div class="footer-menu">
                   <h2 class="footer-menu-name"> Get Started</h2>
                   <ul id="menu-get-started" class="footer-menu-list">
                     <li class="menu-item menu-item-type-post_type menu-item-object-product">
                       <a href="#">Start</a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-product">
                       <a href="#">Documentation</a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-product">
                       <a href="#">Installation</a>
                     </li>
                   </ul>
                 </div>
               </div>
               <div class="footer-content-column">
                 <div class="footer-menu">
                   <h2 class="footer-menu-name"> Company</h2>
                   <ul id="menu-company" class="footer-menu-list">
                     <li class="menu-item menu-item-type-post_type menu-item-object-page">
                       <a href="#">Contact</a>
                     </li>
                     <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                       <a href="#">News</a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-page">
                       <a href="#">Careers</a>
                     </li>
                   </ul>
                 </div>
                 <div class="footer-menu">
                   <h2 class="footer-menu-name"> Legal</h2>
                   <ul id="menu-legal" class="footer-menu-list">
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-170434">
                       <a href="#">Privacy Notice</a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-page">
                       <a href="#">Terms of Use</a>
                     </li>
                   </ul>
                 </div>
               </div>
               <div class="footer-content-column">
                 <div class="footer-menu">
                   <h2 class="footer-menu-name"> Quick Links</h2>
                   <ul id="menu-quick-links" class="footer-menu-list">
                     <li class="menu-item menu-item-type-custom menu-item-object-custom">
                       <a target="_blank" rel="noopener noreferrer" href="#">Support Center</a>
                     </li>
                     <li class="menu-item menu-item-type-custom menu-item-object-custom">
                       <a target="_blank" rel="noopener noreferrer" href="#">Service Status</a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-page">
                       <a href="#">Security</a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-page">
                       <a href="#">Blog</a>
                     </li>
                     <li class="menu-item menu-item-type-post_type_archive menu-item-object-customer">
                       <a href="#">Customers</a></li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-page">
                       <a href="#">Reviews</a>
                     </li>
                   </ul>
                 </div>
               </div>
               <div class="footer-content-column">
                 <div class="footer-call-to-action">
                   <h2 class="footer-call-to-action-title"> Let's Chat</h2>
                   <p class="footer-call-to-action-description"> Have a support question?</p>
                   <a class="footer-call-to-action-button button" href="#" target="_self"> Get in Touch </a>
                 </div>
                 <div class="footer-call-to-action">
                   <h2 class="footer-call-to-action-title"> You Call Us</h2>
                   <p class="footer-call-to-action-link-wrapper"> <a class="footer-call-to-action-link" href="tel:0123-45XXXX" target="_self"> {{$contact->phone}} </a></p>
                 </div>
               </div>
               <div class="footer-social-links"> <svg class="footer-social-amoeba-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236 54">
                   <path class="footer-social-amoeba-path" d="M223.06,43.32c-.77-7.2,1.87-28.47-20-32.53C187.78,8,180.41,18,178.32,20.7s-5.63,10.1-4.07,16.7-.13,15.23-4.06,15.91-8.75-2.9-6.89-7S167.41,36,167.15,33a18.93,18.93,0,0,0-2.64-8.53c-3.44-5.5-8-11.19-19.12-11.19a21.64,21.64,0,0,0-18.31,9.18c-2.08,2.7-5.66,9.6-4.07,16.69s.64,14.32-6.11,13.9S108.35,46.5,112,36.54s-1.89-21.24-4-23.94S96.34,0,85.23,0,57.46,8.84,56.49,24.56s6.92,20.79,7,24.59c.07,2.75-6.43,4.16-12.92,2.38s-4-10.75-3.46-12.38c1.85-6.6-2-14-4.08-16.69a21.62,21.62,0,0,0-18.3-9.18C13.62,13.28,9.06,19,5.62,24.47A18.81,18.81,0,0,0,3,33a21.85,21.85,0,0,0,1.58,9.08,16.58,16.58,0,0,1,1.06,5A6.75,6.75,0,0,1,0,54H236C235.47,54,223.83,50.52,223.06,43.32Z"></path>
                 </svg>
               
                 <a  href="{{asset($social->linkedin)}}"class="footer-social-link linkedin" target="_blank">
                   <span class="hidden-link-text">Linkedin</span>
                   <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 30 30" style="width: 30px;">
                     <path class="footer-social-icon-path" d="M9,25H4V10h5V25z M6.501,8C5.118,8,4,6.879,4,5.499S5.12,3,6.501,3C7.879,3,9,4.121,9,5.499C9,6.879,7.879,8,6.501,8z M27,25h-4.807v-7.3c0-1.741-0.033-3.98-2.499-3.98c-2.503,0-2.888,1.896-2.888,3.854V25H12V9.989h4.614v2.051h0.065 c0.642-1.18,2.211-2.424,4.551-2.424c4.87,0,5.77,3.109,5.77,7.151C27,16.767,27,25,27,25z"></path>
                   </svg>
                 </a>
                 <a class="footer-social-link twitter" href="{{$social->twitter}}" target="_blank">
                   <span class="hidden-link-text">Twitter</span>
                   <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                     <path class="footer-social-icon-path" d="M 25.855469 5.574219 C 24.914063 5.992188 23.902344 6.273438 22.839844 6.402344 C 23.921875 5.75 24.757813 4.722656 25.148438 3.496094 C 24.132813 4.097656 23.007813 4.535156 21.8125 4.769531 C 20.855469 3.75 19.492188 3.113281 17.980469 3.113281 C 15.082031 3.113281 12.730469 5.464844 12.730469 8.363281 C 12.730469 8.773438 12.777344 9.175781 12.867188 9.558594 C 8.503906 9.339844 4.636719 7.246094 2.046875 4.070313 C 1.59375 4.847656 1.335938 5.75 1.335938 6.714844 C 1.335938 8.535156 2.261719 10.140625 3.671875 11.082031 C 2.808594 11.054688 2 10.820313 1.292969 10.425781 C 1.292969 10.449219 1.292969 10.46875 1.292969 10.492188 C 1.292969 13.035156 3.101563 15.15625 5.503906 15.640625 C 5.0625 15.761719 4.601563 15.824219 4.121094 15.824219 C 3.78125 15.824219 3.453125 15.792969 3.132813 15.730469 C 3.800781 17.8125 5.738281 19.335938 8.035156 19.375 C 6.242188 20.785156 3.976563 21.621094 1.515625 21.621094 C 1.089844 21.621094 0.675781 21.597656 0.265625 21.550781 C 2.585938 23.039063 5.347656 23.90625 8.3125 23.90625 C 17.96875 23.90625 23.25 15.90625 23.25 8.972656 C 23.25 8.742188 23.246094 8.515625 23.234375 8.289063 C 24.261719 7.554688 25.152344 6.628906 25.855469 5.574219 "></path>
                   </svg>
                 </a>
                 <a class="footer-social-link youtube" href="{{$social->youtube}}" target="_blank">
                   <span class="hidden-link-text">Youtube</span>
                   <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                     <path class="footer-social-icon-path" d="M 15 4 C 10.814 4 5.3808594 5.0488281 5.3808594 5.0488281 L 5.3671875 5.0644531 C 3.4606632 5.3693645 2 7.0076245 2 9 L 2 15 L 2 15.001953 L 2 21 L 2 21.001953 A 4 4 0 0 0 5.3769531 24.945312 L 5.3808594 24.951172 C 5.3808594 24.951172 10.814 26.001953 15 26.001953 C 19.186 26.001953 24.619141 24.951172 24.619141 24.951172 L 24.621094 24.949219 A 4 4 0 0 0 28 21.001953 L 28 21 L 28 15.001953 L 28 15 L 28 9 A 4 4 0 0 0 24.623047 5.0546875 L 24.619141 5.0488281 C 24.619141 5.0488281 19.186 4 15 4 z M 12 10.398438 L 20 15 L 12 19.601562 L 12 10.398438 z"></path>
                   </svg>
                 </a>
                 <a class="footer-social-link github" href="{{$social->github}}" target="_blank">
                   <span class="hidden-link-text">Github</span>
                   <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                     <path class="footer-social-icon-path" d="M 16 4 C 9.371094 4 4 9.371094 4 16 C 4 21.300781 7.4375 25.800781 12.207031 27.386719 C 12.808594 27.496094 13.027344 27.128906 13.027344 26.808594 C 13.027344 26.523438 13.015625 25.769531 13.011719 24.769531 C 9.671875 25.492188 8.96875 23.160156 8.96875 23.160156 C 8.421875 21.773438 7.636719 21.402344 7.636719 21.402344 C 6.546875 20.660156 7.71875 20.675781 7.71875 20.675781 C 8.921875 20.761719 9.554688 21.910156 9.554688 21.910156 C 10.625 23.746094 12.363281 23.214844 13.046875 22.910156 C 13.15625 22.132813 13.46875 21.605469 13.808594 21.304688 C 11.144531 21.003906 8.34375 19.972656 8.34375 15.375 C 8.34375 14.0625 8.8125 12.992188 9.578125 12.152344 C 9.457031 11.851563 9.042969 10.628906 9.695313 8.976563 C 9.695313 8.976563 10.703125 8.65625 12.996094 10.207031 C 13.953125 9.941406 14.980469 9.808594 16 9.804688 C 17.019531 9.808594 18.046875 9.941406 19.003906 10.207031 C 21.296875 8.65625 22.300781 8.976563 22.300781 8.976563 C 22.957031 10.628906 22.546875 11.851563 22.421875 12.152344 C 23.191406 12.992188 23.652344 14.0625 23.652344 15.375 C 23.652344 19.984375 20.847656 20.996094 18.175781 21.296875 C 18.605469 21.664063 18.988281 22.398438 18.988281 23.515625 C 18.988281 25.121094 18.976563 26.414063 18.976563 26.808594 C 18.976563 27.128906 19.191406 27.503906 19.800781 27.386719 C 24.566406 25.796875 28 21.300781 28 16 C 28 9.371094 22.628906 4 16 4 Z "></path>
                   </svg>
                 </a>
               </div>
             </div>
             <div class="footer-copyright">
               <div class="footer-copyright-wrapper">
                 <p class="footer-copyright-text">
                   <a class="footer-copyright-link" href="#" target="_self"> ©2021. | Designed By: Projukti 71. | All rights reserved. </a>
                 </p>
               </div>
             </div>
           </footer>
         </div>
     </footer>




      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    
</body>
</html>


<style>
    

  

      /* Contact Section */
      .contact {
        background-color: #6a9ac4;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      
      .contact-box {
        width: clamp(100px, 90%, 1000px);
        margin: 80px 50px;
        display: flex;
        flex-wrap: wrap;
      }
      
      .contact-links, .contact-form-wrapper {
        width: 50%;
        padding: 8% 5% 10% 5%;
      }
      
      
      .contact-links {
        background-color: #1f2e43;
        background:
          radial-gradient(
            circle at 55% 92%, #426691 0 12%, transparent 12.2%
          ), 
          radial-gradient(
            circle at 94% 72%, #426691 0 10%, transparent 10.2%
          ), 
          radial-gradient(
            circle at 20% max(78%, 350px), #263a53 0 7%, transparent 7.2%
          ), 
          radial-gradient(
            circle at 0% 0%, #263a53 0 40%, transparent 40.2%
          ), 
          #1f2e43;
        border-radius: 10px 0 0 10px;
      }
      
      .contact-form-wrapper {
        background-color: #ffffff8f;
        border-radius: 0 10px 10px 0;
      }
      
      @media only screen and (max-width: 800px) {
        .contact-links, .contact-form-wrapper {
          width: 100%;
        }
        
        .contact-links {
          border-radius: 10px 10px 0 0;
        }
        
        .contact-form-wrapper {
          border-radius: 0 0 10px 10px;
        }
      }
      
      @media only screen and (max-width: 400px) {
        .contact-box {
          width: 95%;
          margin: 8% 5%;
        }
      }
      
      .contact h2 {
        font-family: 'Arimo', sans-serif;
        color: #fff;
        font-size: clamp(30px, 6vw, 60px);
        letter-spacing: 2px;
        text-align: center;
        transform: scale(.95, 1);
      }
      
      .links-contact {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding-top: 50px;
      }
      
      .link-contact {
        margin: 10px;
        cursor: pointer;
      }
      
      .links-contact img {
        width: 45px;
        height: 45px;
        filter: 
          hue-rotate(220deg)
          drop-shadow(2px 4px 4px #0006);
        transition: 0.2s;
        user-select: none;
      }
      
      .links-contact img:hover {
        transform: scale(1.1, 1.1);
      }
      
      .links-contact img:active {
        transform: scale(1.1, 1.1);
        filter: 
          hue-rotate(220deg)
          drop-shadow(2px 4px 4px #222)
          sepia(0.3);
      }
      
      .contact .form-item {
        position: relative;
      }
      
      .contact label, input, textarea {
        font-family: 'Poppins', sans-serif;
      }
      
      .contact  label {
        position: absolute;
        top: 10px;
        left: 2%;
        color: #999;
        font-size: clamp(14px, 1.5vw, 18px);
        pointer-events: none;
        user-select: none;
      }
      
      .contact  input, textarea {
        width: 100%;
        outline: 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 20px;
        padding: 12px;
        font-size: clamp(15px, 1.5vw, 18px);
      }
      
      .contact  input:focus+label, 
      input:valid+label, 
      textarea:focus+label, 
      textarea:valid+label {
        font-size: clamp(13px, 1.3vw, 16px);
        color: #777;
        top: -20px;
        transition: all .225s ease;
      }
      
      .contact  .submit-btn {
        background-color: #fd917e;
        filter: drop-shadow(2px 2px 3px #0003);
        color: #fff;
        font-family: "Poppins",sans-serif;
        font-size: clamp(16px, 1.6vw, 18px);
        display: block;
        padding: 12px 20px;
        margin: 2px auto;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        user-select: none;
        transition: 0.2s;
      }
      
      .contact  .submit-btn:hover {
        transform: scale(1.1, 1.1);
      }
      
      .contact  .submit-btn:active {
        transform: scale(1.1, 1.1);
        filter: sepia(0.5);
      }
      
      @media only screen and (max-width: 800px) {
        .contact   h2 {
          font-size: clamp(40px, 10vw, 60px);
        }
      }
      
      @media only screen and (max-width: 400px) {
        .contact   h2 {
          font-size: clamp(30px, 12vw, 60px);
        }
        
        .contact  .links-contact {
          padding-top: 30px;
        }
        
        .contact  img {
          width: 38px;
          height: 38px;
        }
      }


</style>