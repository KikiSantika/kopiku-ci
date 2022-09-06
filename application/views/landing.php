<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="<?php echo base_url()?>resourses/bootsrap/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
  
<!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
      <div class="container position-relative py-2">
        <a class="navbar-brand position-absolute" href="#"><img src="<?php echo base_url('resourses/img/logo.png');?>" height="55px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto">
            <a class="nav-link" aria-current="page" href="#about">About</a>
            <a class="nav-link" href="#our-coffee">Our Coffee</a>
            <a class="nav-link" href="#instagram">Instagram</a>
            <a class="nav-link" href="#location">Location</a>
            <a class="nav-link" href="#gallery">Gallery</a>
          </div>
        </div>
        <div class="position-absolute d-flex align-items-center" style="right:0; top: 0; bottom:0">
          <a class="btn btn-primary rounded-0" href="https://grandjatijunction.sawala.xyz/contact/"> 
            Order Now        
          </a>
        </div>
      </div>
    </nav>


<header class="container pt-5">
    <h1 class="text-center"> Boost your day with <br> a cup of coffee </h1>
    <div class="d-flex justify-content-center">
         <img src="<?php echo base_url('resourses/img/hero2.png');?>">
</div>
</header>
<section>
    <div> 
        <div class ="row">
            <div class="col-6"> 
                <img height="600px" src="<?php echo base_url('resourses/img/hero3.png')?>">
            </div>
            <div class="col-6">
            <p>Aliquet arcu in etiam ornare eget libero, felis mi eget. Pulvinar sollicitudin lacus, lacus, hendrerit elit etiam. Tempus neque, vel sit morbi at interdum odio aenean. Auctor a pellentesque est dictum. Ullamcorper vel interdum nibh in ultricies amet. Suspendisse sed posuere sit ut aenean massa. Auctor a lorem pellentesque est dictum. Ullamcorper vel interdum nibh in ultricies amets uspendisse.</p>
            <button type = "button">READ MORE</button>
            </div>
            
</div>
</div>
<section id="our-coffee">
      <div class="container py-5">
        <h1 class="text-center mb-5">Our Coffee</h1>
        <div class="row mb-5" style="--bs-gutter-x: 4rem">
          <div class="col-4">
            <div class="img-card">
              <img width="100%" src="<?php echo base_url('resourses/img/coffee 1.png'); ?>">
              <div class="hover">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17 9H1M9 1V17V1Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>See Description<span>
              </div>
            </div>
            <div class="py-3 text-center"> Luwak Coffe</div>
          </div>
          <div class="col-4">
            <div class="img-card">
              <img width="100%" src="<?php echo base_url('resourses/img/coffee 2.png'); ?>">
              <div class="hover">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17 9H1M9 1V17V1Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>See Description<span>
              </div>
            </div>
            <div class="py-3 text-center">Caramel Latte</div>
          </div>
          <div class="col-4">
            <div class="img-card">
              <img width="100%" src="<?php echo base_url('resourses/img/coffee 3.png'); ?>">
              <div class="hover">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17 9H1M9 1V17V1Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>See Description<span>
              </div>
            </div>
            <div class="py-3 text-center"> Cappucino</div>
          </div>
        </div>
        <div class="text-center">
          <a class="btn btn-primary rounded-0 mt-3">ALL MENU</a>
        </div>
      </div>
    </section>
    <section id="instagram" style="background-color:#F3F4F6;">
      <div class="container py-5">
        <div class="row mb-5" style="--bs-gutter-x: 2rem; --bs-gutter-y: 2rem">
          <div class="col-4 d-flex align-items-center">
            <div>
              <h2>Lets check our <br> Instagram account</h2>
              <span class="text-gray">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.99999 6.87579C8.27968 6.87579 6.87577 8.2797 6.87577 10C6.87577 11.7203 8.27968 13.1242 9.99999 13.1242C11.7203 13.1242 13.1242 11.7203 13.1242 10C13.1242 8.2797 11.7203 6.87579 9.99999 6.87579ZM19.3703 10C19.3703 8.70626 19.382 7.42423 19.3094 6.13283C19.2367 4.63283 18.8945 3.30158 17.7976 2.2047C16.6984 1.10548 15.3695 0.765639 13.8695 0.692982C12.5758 0.620326 11.2937 0.632045 10.0023 0.632045C8.70858 0.632045 7.42655 0.620326 6.13515 0.692982C4.63515 0.765639 3.3039 1.10783 2.20702 2.2047C1.1078 3.30392 0.767958 4.63283 0.695302 6.13283C0.622645 7.42658 0.634364 8.70861 0.634364 10C0.634364 11.2914 0.622645 12.5758 0.695302 13.8672C0.767958 15.3672 1.11015 16.6985 2.20702 17.7953C3.30624 18.8945 4.63515 19.2344 6.13515 19.307C7.4289 19.3797 8.71093 19.368 10.0023 19.368C11.2961 19.368 12.5781 19.3797 13.8695 19.307C15.3695 19.2344 16.7008 18.8922 17.7976 17.7953C18.8969 16.6961 19.2367 15.3672 19.3094 13.8672C19.3844 12.5758 19.3703 11.2938 19.3703 10ZM9.99999 14.807C7.33983 14.807 5.19296 12.6602 5.19296 10C5.19296 7.33986 7.33983 5.19298 9.99999 5.19298C12.6601 5.19298 14.807 7.33986 14.807 10C14.807 12.6602 12.6601 14.807 9.99999 14.807ZM15.0039 6.11876C14.3828 6.11876 13.8812 5.6172 13.8812 4.99611C13.8812 4.37501 14.3828 3.87345 15.0039 3.87345C15.625 3.87345 16.1266 4.37501 16.1266 4.99611C16.1267 5.14359 16.0978 5.28966 16.0415 5.42595C15.9851 5.56224 15.9024 5.68607 15.7981 5.79036C15.6939 5.89464 15.57 5.97733 15.4337 6.03368C15.2974 6.09004 15.1514 6.11895 15.0039 6.11876Z" fill="#9CA3AF"/></svg>
                your-instagram
              </span>
            </div>
          </div>
          <div class="col-4">
            <img width="100%" src="<?php echo base_url('resourses/img/ig 1.png'); ?>">
          </div>
          <div class="col-4">
            <img width="100%" src="<?php echo base_url('resourses/img/ig 2.png'); ?>">
          </div>
          <div class="col-4">
            <img width="100%" src="<?php echo base_url('resourses/img/ig 3.png'); ?>">
          </div>
          <div class="col-4">
            <img width="100%" src="<?php echo base_url('resourses/img/ig 4.png'); ?>">
          </div>
          <div class="col-4">
            <img width="100%" src="<?php echo base_url('resourses/img/ig 5.png'); ?>">
          </div>
        </div>
      </div>
    </section>

    <section id="location">
      <div class="container py-5">
        <div class="row border p-5" style="--bs-border-width: 7px; --bs-gutter-x: 2rem;">
          <div class="col-6 d-flex justify-content-center">
            <img width="100%" src="<?php echo base_url('resourses/img/location.png');?>" alt="">
          </div>
          <div class="col-6 col-6 d-flex justify-content-center align-items-center">
            <div>
              <h2>Let’s come and drink</h2>
              <div class="text-muted d-flex gap-4 mt-4">
                <div>
                  <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.9375 2C10.568 2.0028 8.29633 2.94532 6.62083 4.62082C4.94533 6.29632 4.0028 8.56799 4.00001 10.9375C3.99717 12.8739 4.62968 14.7577 5.80051 16.3C5.80051 16.3 6.04426 16.6209 6.08407 16.6672L12.9375 24.75L19.7942 16.6632C19.8299 16.6201 20.0745 16.3 20.0745 16.3L20.0753 16.2976C21.2456 14.7559 21.8778 12.873 21.875 10.9375C21.8722 8.56799 20.9297 6.29632 19.2542 4.62082C17.5787 2.94532 15.307 2.0028 12.9375 2ZM12.9375 14.1875C12.2947 14.1875 11.6664 13.9969 11.1319 13.6398C10.5974 13.2827 10.1809 12.7751 9.9349 12.1812C9.68892 11.5874 9.62456 10.9339 9.74996 10.3035C9.87536 9.67302 10.1849 9.09392 10.6394 8.6394C11.0939 8.18488 11.673 7.87535 12.3035 7.74995C12.9339 7.62455 13.5874 7.68891 14.1812 7.93489C14.7751 8.18088 15.2827 8.59744 15.6398 9.1319C15.9969 9.66636 16.1875 10.2947 16.1875 10.9375C16.1864 11.7991 15.8437 12.6251 15.2344 13.2344C14.6252 13.8437 13.7991 14.1864 12.9375 14.1875Z" fill="#C8A27A"/></svg>
                </div>
                <div>
                  JL. Eros id eget dolor, non gravida lobortis sed varius. Et eget urna enim amet, platea orci arcu volutpat. In sit molestie etiam fermentum dictum venenatis elementum.</div>
                </div>
              <div class="text-muted d-flex gap-4 mt-4">
                <div>
                  <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.25 0C4.736 0 0.25 4.486 0.25 10C0.25 15.514 4.736 20 10.25 20C15.764 20 20.25 15.514 20.25 10C20.25 4.486 15.764 0 10.25 0ZM16 11H9.25V4H11.25V9H16V11Z" fill="#C8A27A"/></svg>
                </div>              
                  <div>Opens at 09.00 AM - 22.00 PM</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 <!-- Gallery -->
 <section id="gallery">
      <div class="row" style="--bs-gutter-x: 0rem;">
        <div class="col-4">
          <img width="100%" src="<?php echo base_url('resourses/img/gallery 1.png'); ?>">
        </div>
        <div class="col-4">
          <img width="100%" src="<?php echo base_url('resourses/img/gallery 2.png'); ?>">
        </div>
        <div class="col-4">
          <img width="100%" src="<?php echo base_url('resourses/img/gallery 3.png'); ?>">
        </div>
      </div>
    </section>

     <!-- Footer Banner -->
     <section style="background-color:#F3F4F6; background-image:url(<?php echo base_url('resourses/img/bg-footer.png')?>); background-position: bottom center; background-repeat: no-repeat">
      <div class="text-center" style="padding-top: 7rem; padding-bottom: 7rem;">
        <h1>Coffee with a friend is like capturing happiness in a cup.</h1>
      </div>
    </section>

    

    <script src="<?php echo base_url()?>resourses/bootsrap/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>