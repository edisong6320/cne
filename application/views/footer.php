<?php if ($this->session->flashdata("confirmacion")): ?>
  <script type="text/javascript">
    toastr.success("<?php echo $this->session->flashdata("confirmacion"); ?>",'',{"positionClass":"toast-bottom-right"});
  </script>
  <?php   $this->session->set_flashdata("confirmacion","") ?>
<?php endif; ?>

<?php if ($this->session->flashdata("error")): ?>
  <script type="text/javascript">
    toastr.error("<?php echo $this->session->flashdata("error"); ?>");
  </script>
  <?php   $this->session->set_flashdata("error","") ?>
<?php endif; ?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 text-center">
                    <h4 class="text-white mb-4">Nuestra oficina</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Av. 6 de Diciembre N33-122 y Bosmediano</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(593-2) 381-5410 ext 10 – 11 – 12</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>secretariageneral@cne.gob.ec</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                  <h4 class="text-white mb-4">Nuestras redes sociales</h4>
                  <div class="d-flex pt-2 text-center">
                      <a class="btn btn-square btn-outline-light rounded-circle" href="https://twitter.com/cnegobec"><i class="fab fa-twitter"></i></a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                      <a class="btn btn-square btn-outline-light rounded-circle" href="https://www.facebook.com/cnegobec"><i class="fab fa-facebook-f"></i></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                      <a class="btn btn-square btn-outline-light rounded-circle" href="https://www.youtube.com/c/2012cne"><i class="fab fa-youtube"></i></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                      <a class="btn btn-square btn-outline-light rounded-circle" href="https://www.instagram.com/cnegobec/"><i class="fab fa-instagram"></i></a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <img width="200px" src="<?php echo base_url() ?>/assets/images/ecuador.png" alt="">
                </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="<?php echo site_url() ?>">Consejo Nacional Electoral</a>, Todos los derechos reservados.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <p>Realizado por: Edison Guanoquiza</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plantilla/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plantilla/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plantilla/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plantilla/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plantilla/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plantilla/lib/parallax/parallax.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plantilla/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plantilla/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url(); ?>assets/plantilla/js/main.js"></script>
</body>

</html>
