

<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Nuestros Veterinarios</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        
         
      @foreach($doctor as $doctors)

        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="doctorimagen/{{$doctors->imagen}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$doctors->nombre}}</p>
              <span class="text-sm text-grey">{{$doctors->especialidad}}</span>
              
            </div>
            <div class="star-widget">
           <input type="radio" name="rate"  id="rate-5">
           <label for="rate-5" class="fas fa-star"></label>

           <input type="radio" name="rate"  id="rate-4">
           <label for="rate-4" class="fas fa-star"></label>

           <input type="radio" name="rate"  id="rate-3">
           <label for="rate-3" class="fas fa-star"></label>

           <input type="radio" name="rate"  id="rate-2">
           <label for="rate-2" class="fas fa-star"></label>

           <input type="radio" name="rate"  id="rate-1">
           <label for="rate-1" class="fas fa-star"></label>
            </div>
            
            
              
            
            
          </div>
        </div>

        @endforeach

        
      </div>
    </div>
  </div>