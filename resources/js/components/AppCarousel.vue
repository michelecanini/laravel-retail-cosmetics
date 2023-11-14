<script>
  export default {
    
  }
</script>

<template>
  <div class="container-fluid">
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
              <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="https://images2.alphacoders.com/641/641458.jpg" class="d-block w-100" style="height: 480px; object-fit:cover;">
                  <div class="carousel-caption">
                      <!--<h1>Hugo Boss</h1> 
                      <p>BOSS Bottled</p> --> 
                  </div>
              </div>

              <div class="carousel-item">
                  <img src="https://www.parfumscaron.com/cdn/shop/collections/fcfa2f1696f65069ea1d4b00014a133b_1920x760_crop_center.jpg?v=1699271707" class="d-block w-100" style="height: 480px; object-fit:cover;">
                  <div class="carousel-caption">
                      <!--<h1>Hugo Boss</h1> 
                      <p>BOSS Bottled</p> --> 
                  </div>
              </div>
          
              <div class="carousel-item">
                  <img src="https://images3.alphacoders.com/641/thumb-1920-641462.jpg" class="d-block w-100" style="height: 480px; object-fit:cover;">
                  <div class="carousel-caption">
                      <!--<h1>Hugo Boss</h1> 
                      <p>BOSS Bottled</p> -->
                  </div>
              </div>
          </div>

          <!-- Left and right controls -->
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      </div>
  </div>
</template>




<style scoped>
.container-fluid{
    --bs-gutter-x: 0rem;;
}

.carousel-indicators {
    display: none;
}

</style>