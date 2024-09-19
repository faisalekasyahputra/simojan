 <!-- Footer -->
 <div class="container-fluid border-top border-primary"></div>
 <div class="container bg-dark">
     <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-4 py-5  align-items-center">
         <div class="col mb-3">
             <a class="p-2 d-flex flex-column justify-content-center link-underline link-underline-opacity-0" href="<?= base_url('index.php') ?>">
                 <img class="img-fluid object-fit-cover p-1 mb-2" src="<?= base_url('assets/img/logo.png') ?>" alt="logo-pupr" width="70px">

                 <p class="text-white">© 2024</p>
             </a>

         </div>
         <div class="col">

         </div>


         <div class="col mb-3 align-items-end text-white text-end">
             <h5 class="text-capitalize fw-bold primary-color mb-3">Lebih Dekat Dengan Kami</h5>
             <ul class="nav flex-column text-end">

                 <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white"> Semarang<i class="fa-brands fa-instagram ms-2 primary-color"></i> </a></li>
                 <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Semarang<i class="fab fa-whatsapp ms-2 primary-color"></i> </a></li>
                 <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">089089089089<i class="fas fa-phone ms-2 primary-color"></i> </a></li>

             </ul>
         </div>
         <div class="col">

             <iframe class="rounded p-0 m-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31681.844558521956!2d110.37666311083986!3d-6.982095699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4e6c180093%3A0x531adf6c563f8039!2sKantor%20Walikota%20Semarang!5e0!3m2!1sid!2sid!4v1726713923071!5m2!1sid!2sid" width="100%" height="150px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

         </div>

     </footer>
 </div>
 <footer class="bg-dark text-light text-center ">

     <p class="m-0 p-1">&copy; Pemerintah Kota Semarang ,SIMOJAN Pro.</p>
 </footer>



 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <!-- Initialize Swiper -->
 <script>
     var swiper = new Swiper(".mySwiper", {
         effect: "coverflow",
         grabCursor: true,
         centeredSlides: true,
         slidesPerView: 3,
         spaceBetween: 30,
         loop: true,
         coverflowEffect: {
             rotate: 50,
             stretch: 0,
             depth: 100,
             modifier: 1,
             slideShadows: true,
         },
         pagination: {
             el: ".swiper-pagination",
             clickable: true,

         },
         navigation: {
             nextEl: ".swiper-button-next",
             prevEl: ".swiper-button-prev",
         },
     });
 </script>

 <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script>
     AOS.init();
 </script>
 <!-- Add Bootstrap JS from a CDN (Optional) -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>


 <script src="<?= base_url('assets/bootstrap/dist/js/bootstrap.min.js') ?>"></script>

 <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
 <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
 <script>
     new DataTable('#example');
     new DataTable('#tabel2');
     new DataTable('#tabeldetail');
 </script>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 <script src="<?= base_url('assets/js/grafik.js') ?>"></script>
 <script src="<?= base_url('assets/js/grafikTiang.js') ?>"></script>
 <script src="<?= base_url('assets/js/os.js') ?>"></script>
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 <script>
     $(document).ready(function() {
         $('.slc1').select2();
         $('.slc2').select2();
         $('.slc3').select2();
     });
 </script>