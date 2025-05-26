@extends('homelayout')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Hotel-management</title> -->
  @section('title', 'Hotel-management')

</head>

<body>




  <main>
    @section("slider")
    <!-- slider start -->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner " data-bs-interval="2000">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="img/abs1.jpg" class="d-block w-100" alt="welcome image" style="height:350px ;">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="img/abs2.jpg" class="d-block w-100" alt="welcome image" style="height:350px; ">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="img/abs5.jpg" class="d-block w-100" alt="welcome image" style="height:350px;">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="img/abs4.jpg" class="d-block w-100" alt="welcome image" style="height:350px;">
      </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- slider end -->
  @endsection

    @section("main")


      <div class="container">


        <!--Services section --->

        <div class="container my-4" id="service">
        <h3 class="text-center border-bottom  ">Services</h3>

        @foreach ($servicedata as $data )


        <div class="row  my-2 mt-4 hover-bg ">
          <div class="col-md-4 col-sm-1 col-sm-12 mb-md-4">
          <img src="{{ asset('storage/image/'.$data->service_image) }}" alt="parkingservices"
            class="serviceimage img-fluid rounded-2 mt-4" style="height: 300px; width:300px;">

          </div>
          <div class="col-md-8 col-sm-12  ">
          <h4 class="text-secondary ">{{ $data->title }}</h4>
          <p>{{ $data->detail }}</p>
          </div>

        </div>
        @endforeach



        </div>

        <!--Services section end --->


      <!-- Gallery Section -->
  <div class="container my-4" id="gallery">
    <h3 class="text-center border-bottom">Gallery</h3>
    <div class="row mt-4">
      @foreach ($roomtypesdata as $room)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
          <div class="card rounded-3 shadow-sm">
            <a href="#" data-bs-toggle="modal" data-bs-target="#imgModal{{ $room->id }}">
              <img src="{{ asset('storage/image/' . $room->category_image[0]) }}" class="card-img-top" alt="room image">
            </a>
            <div class="card-body text-center">
              <h5>{{ $room->title }}</h5>
              <p>{{ $room->detail }}</p>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="imgModal{{ $room->id }}" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-body">
                <div id="carouselRoom{{ $room->id }}" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    @foreach ($room->category_image as $index => $img)
                      <div class="carousel-item @if($index == 0) active @endif">
                        <img src="{{ asset('storage/image/' . $img) }}" class="d-block w-100" alt="room image">
                      </div>
                    @endforeach
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselRoom{{ $room->id }}" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselRoom{{ $room->id }}" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

      @endforeach
    </div>
  </div>






      </div>






      </main>


    @endsection
</body>

</html>