<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raffles - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <?php require('inc/links.php')?>
<style>

.availability-form{
  margin-top: -50px;
  z-index: 2;
  position: relative;
}
@media screen and (max-width: 575px) {
  .availability-form{
    margin-top: 25px;
    padding: 0 35px;
  
}
}


</style>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

<!-- Carousal -->

<div class="container-fluid px-lg-4 mt-4">
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
    <?php
        $res = selectAll('carousel');
        while($row = mysqli_fetch_assoc($res))
        {
          $path = CAROUSEL_IMG_PATH;
          echo <<<data
          <div class="swiper-slide"> 
           <img src="$path$row[image]" class="w-100 d-block">
          </div>  
          data;
        }

      ?>
    </div>
  </div>
</div>

<!-- Check Availability Form -->

<div class="container availability-form">
  <div class="row">
    <div class="col-lg -12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Check-in</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Check-out</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight: 500;">Adult</label> 
           <select class="form-select shadow-none">
             <option value="1">One</option>
             <option value="2">Two</option>
             <option value="3">Three</option>
             </select>
          </div>
          <div class="col-lg-2 mb-3">
          <label class="form-label" style="font-weight: 500;">Children</label> 
           <select class="form-select shadow-none">
             <option value="1">One</option>
             <option value="2">Two</option>
             <option value="3">Three</option>
             </select>
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Select Rooms -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Select Rooms</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/img4.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Deluxe Room</h5>
          <h6 class="mb-4">₹20000 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             650 sq.ft room
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             Bathroom with bathtub
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             Sofa
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Amenities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Air conditioner
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room heater
             </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Max 3 Guests
             </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-half text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="rooms.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div> 
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/img3.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Signature Pool Facing Room</h5>
          <h6 class="mb-4">₹35000 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             860 sq.ft room 
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             Bathroom with Jacuzzi bathtub
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             Balcony 
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             Sofa
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Amenities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Air conditioner
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room heater
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Minibar
             </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Max 3 Guests
             </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="rooms.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div> 
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/img1.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Raffles Suite </h5>
          <h6 class="mb-4">₹50000 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             1200 sq.ft room
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             Living Room
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
             Sofa
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             Bathroom with Jacuzzi bathtub
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             Private Pool
             </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Amenities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Air conditioner
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room heater
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Minibar
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
              Private Butler
             </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Max 4 Guests
             </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="rooms.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div> 
    </div>

    <div class="col-lg-12 text-center mt-5">
      <a href="rooms.php" class="btn btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
    </div>
  </div>
</div>

<!-- Amenities -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Amenities</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-5 px-4">
     <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
      <div class=" align-items-center text-center mb-2">
       <img src="images/features/Swimming Pool.jpg" width="100%">
       <h5 class="mt-3 ms-3 text-center">Swimming Pool</h5>
      </div>
      
     </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
     <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
      <div class=" align-items-center mb-2">
       <img src="images/features/Bar.jpg" width="100%">
       <h5 class="mt-3 ms-3 text-center">Bar</h5>
      </div>
      
     </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
     <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
      <div class=" align-items-center mb-2">
       <img src="images/features/Spa.jpg" width="100%">
       <h5 class="mt-3 ms-3 text-center">Spa</h5>
      </div>
     
     </div>
    </div>
    <div class="col-lg-12 text-center mt-4">
      <a href="amenities.php" class="btn btn-outline-dark rounded-0 fw-bold shadow-none">More Amenities >>></a>
    </div>
  </div>
</div>

<!-- Reviews -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reviews</h2>

<div class="container mt-5">
  <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper ">

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="" width="">
          <h6 class=""><i class="bi bi-person-circle"></i> Hiren Mer</h6>
        </div>
        <p>
         Very friendly and polite staff, food and property was amazing. Overall must visit hotel but little pricey. 
        </p>
        <div class="rating">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star"></i>
        </div>
        <br>
            <div class="badge rounded-pill bg-light text-dark text-wrap">
                12/07/2023
            </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="" width="">
          <h6 class=""><i class="bi bi-person-circle"></i> Suhana</h6>
        </div>
        <p>
         Must vist for peacefull stay.
        </p>
        <div class="rating">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-half text-warning"></i>
        </div>
        <br>
              <div class="badge rounded-pill bg-light text-dark text-wrap">
                02/04/2023
              </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="" width="">
          <h6 class=""><i class="bi bi-person-circle"></i> Hetansh</h6>
        </div>
        <p>
         Not worth it too expensive. 
        </p>
        <div class="rating">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star"></i>
             <i class="bi bi-star"></i>
             <i class="bi bi-star"></i>
             <i class="bi bi-star"></i>
        </div>
        <br>
              <div class="badge rounded-pill bg-light text-dark text-wrap">
                31/12/2022
              </div>
      </div>
      
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="" width="">
          <h6 class=""><i class="bi bi-person-circle"></i> Vamika Kohli</h6>
        </div>
        <p>
         Good room services and house keeping but had an issue with vegan cuisine.
        </p>
        <div class="rating">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star"></i>
             <i class="bi bi-star"></i>
        </div>
        <br>
              <div class="badge rounded-pill bg-light text-dark text-wrap">
                30/09/2022
              </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="" width="">
          <h6 class=""><i class="bi bi-person-circle"></i> Shivam Patel</h6>
        </div>
        <p>
         One of the best stay ever eperienced.Abmience andfood is top notch. 
        </p>
        <div class="rating">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
        </div>
        <br>
              <div class="badge rounded-pill bg-light text-dark text-wrap">
                14/02/2022
              </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
    
  </div>
  
  <div class="col-lg-12 text-center mt-5">
      <a href="guestreviews.php" class="btn btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
    </div>
    
</div>

<!-- Reach us -->


<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach us</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
    <iframe class="w-100 rounded" height="320px" src="<?php echo $contact_r['iframe'] ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call us</h5>
        <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block md-2 text-decoration-none text-dark">
         <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1'] ?>
        </a>
        <br>
        <?php
        if($contact_r['pn2']!=''){
          echo<<<data
          <a href="tel: +$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]
          </a> 
          data;
        }
        ?>
        
      </div>
      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow us</h5>
        <?php 
          if($contact_r['tw']!=''){
            echo<<<data
            <a href="$contact_r[tw]" class="d-inline-block mb-3">
            <span class="badge bl-light text-dark fs-6 p-2">
              <i class="bi bi-twitter me-1"></i>Twitter
            </span>
           </a>
           <br>
           data;
          }
        ?>
        <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3">
          <span class="badge bl-light text-dark fs-6 p-2">
            <i class="bi bi-facebook me-1"></i>Facebook
          </span>
        </a>
        <br>
        <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block">
          <span class="badge bl-light text-dark fs-6 p-2">
            <i class="bi bi-instagram me-1"></i>Instagram
          </span>
         </a>
      </div>
    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>
</body>
</html>