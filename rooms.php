<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raffles - Rooms</title>
  <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">

  <?php require('inc/header.php'); ?>

  <div class="my-5">
    <h2 class="fw-bold h-font text-center">Our Rooms</h2>
    <div class="h-line bg-dark"></div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">Filters</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">Check Availability</h5>
                <label class="form-label">Check-in</label>
                <input type="date" class="form-control shadow-none mb-3">
                <label class="form-label">Check-out</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">Amenities</h5>
                <div class="mb-2">
                  <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f1">Amenity one</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f2">Amenity two</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f3">Amenity three</label>
                </div>
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">Guest</h5>
                <div class="d-flex">
                  <div class="me-3">
                    <label class="form-label ">Adults</label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                  <div>
                    <label class="form-label">Children</label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>

      <div class="col-lg-9 col-md-12 px-4">
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="images/rooms/img4.jpg" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Deluxe Room</h5>
              <div class="features mb-3">
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
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
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
              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Max 3 Guests
                </span>
              </div>
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
             <h6 class="mb-4">₹20000 per night</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="images/rooms/img3.jpg" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Signature Pool Facing Room</h5>
              <div class="features mb-3">
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
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
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
              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Max 3 Guests
                </span>
              </div>
            </div>
            <div class="col-md-2 text-center">
             <h6 class="mb-4">₹35000 per night</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="images/rooms/img1.jpg" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Raffles Suite</h5>
              <div class="features mb-3">
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
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
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
              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Max 4 Guests
                </span>
              </div>
            </div>
            <div class="col-md-2 text-center">
             <h6 class="mb-4">₹50000 per night</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require('inc/footer.php'); ?>
</body>

</html>