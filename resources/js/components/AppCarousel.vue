<script>
  export default {
    
  }
</script>

<template>
    <div class="container-fluid ">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" style="margin: auto;">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="https://images2.alphacoders.com/641/641458.jpg" style="width:100%; height: 480px; object-fit:cover;">
        <div class="carousel-caption">
          <!--<h1>Hugo Boss</h1> 
          <p>BOSS Bottled</p> --> 
        </div>
      </div>

      <div class="item">
        <img src="https://www.parfumscaron.com/cdn/shop/collections/fcfa2f1696f65069ea1d4b00014a133b_1920x760_crop_center.jpg?v=1699271707" style="width:100%; height: 480px; object-fit:cover;">
        <div class="carousel-caption">
          <!--<h1>Hugo Boss</h1> 
          <p>BOSS Bottled</p> --> 
        </div>
      </div>
    
      <div class="item">
        <img src="https://images3.alphacoders.com/641/thumb-1920-641462.jpg" style="width:100%; height: 480px; object-fit:cover;">
        <div class="carousel-caption">
          <!--<h1>Hugo Boss</h1> 
          <p>BOSS Bottled</p> -->
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</template>



<style scoped>
.container-fluid{
    --bs-gutter-x: 0rem;;
}

</style>