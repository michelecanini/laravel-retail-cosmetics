<script>
export default {
    name: 'AppFooter',
}
</script>

<template lang="">
    
    <!-- section footer -->
    <div class="footer container-fluid bg-dark">
        <section class="container-xl px-3 px-md-4 px-lg-5 mt-2 py-5 ">

            <div class="footer_menu text-center"> 
                <span class="me-5 ml-5"><a href="#"> Chi Siamo </a></span><i class=""></i> 
                <span class="me-5 ml-5"><a href="#"> Il Team </a></span><i class=""></i> 
                <span class="me-5 ml-5"><a href="#"> FAQ </a> </span><i class=""></i> 
                <span class="me-5 ml-5"><a href="#"> Shop Perfumes </a></span> <i class=""></i> 
                <span class="me-5 ml-5"><a href="#"> Contatti </a></span> 
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="info_menu mt-5 text-center">
                        <ul class=""> 
                            <li class=""><span class="">+39 300 000 0000</span></li> 
                            <li class=""><span class="">Viale Centrale 10, 00100 Roma, ITA</span></li> 
                            <li class=""><a href="#"><span class="">info@retailcosmetics.com</span></a></li> 
                            <li class=""><span class="">Lun-Ven: 09:30 - 18:00</span></li> 
                        </ul> 
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="mt-5">
                        <h1 class="col-sm-12 mt-5 text-white text-center mb-5">RETAIL COSMETICS</h1>
                    </div>
                    <div class="text-center icons_menu">
                        <span class="p-4"><a href="#"><i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i></a></span>
                        <span class="p-4"><a href="#"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a></span>
                        <span class="p-4"><a href="#"><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a></span>
                        <span class="p-4"><a href="#"><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a></span>
                    </div>
                </div>

                <div class="col-sm-3 privacy_menu">
                    <div class="player justify-content-end mt-5 text-white text-center">
                        <p>INFORMATIVA PRIVACY</p>
                        <p><a href="#">Privacy Policy</a></p>
                        <p><a href="#">Cookie Policy</a></p>
                        <p><a href="#">Termini e Condizioni</a></p>
                    </div>
                </div>

            </div>
        </section>
    </div>

</template>

<style scoped>

.footer_menu {
    font-size: 18px;
    font-weight: bold;
    color: white;
    margin-bottom: 30px;
}

.privacy_menu {
    font-size: 15px;
    font-weight: bold;
    color: white;
}

.info_menu {
    font-size: 15px;
    font-weight: bold;
    color: white;
}

.icons_menu {
    font-size: 16px;
}

.footer {
   min-height: 350px;
}

a {
    color: inherit;
    text-decoration: none;
}

a:hover {
    text-decoration: none;
}

ul li {
    list-style: none;
    margin-bottom: 10px
}

</style>