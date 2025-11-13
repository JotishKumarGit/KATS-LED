
<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="enquiryModalLabel">Product Enquiry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="enquiryForm">
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="enquiryName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="enquiryName" placeholder="Your Name" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="enquiryEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="enquiryEmail" placeholder="you@example.com"
                            required>
                    </div>

                    <!-- Message -->
                    <div class="mb-3">
                        <label for="enquiryMessage" class="form-label">Message</label>
                        <textarea class="form-control" id="enquiryMessage" rows="4" placeholder="Your message here..."
                            required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn  w-100">Submit Enquiry</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Enquery Modal  -->
<script>
    document.getElementById("enquiryForm").addEventListener("submit", function (e) {
        e.preventDefault();

        const name = document.getElementById("enquiryName").value.trim();
        const email = document.getElementById("enquiryEmail").value.trim();
        const message = document.getElementById("enquiryMessage").value.trim();

        const fullMessage = `Name: ${name}%0AEmail: ${email}%0AMessage: ${message}`;

        const phoneNumber = "+919850205065";
        const whatsappURL = `https://wa.me/${phoneNumber}?text=${fullMessage}`;

        window.open(whatsappURL, "_blank");

        // Clear form
        this.reset();

        // Close modal (if using modal)
        const enquiryModal = bootstrap.Modal.getInstance(document.getElementById('enquiryModal'));
        if (enquiryModal) {
            enquiryModal.hide();
        }
    });
</script>

<!-- This is send what message  -->
<script>
    function whatsappForm(e) {
        e.preventDefault();

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const subject = document.getElementById("subject").value.trim();
        const message = document.getElementById("message").value.trim();

        const phoneNumber = "919850205065"; // remove '+'

        const whatsappMessage = `Name: ${name}%0AEmail: ${email}%0ASubject: ${subject}%0AMessage: ${message}`;

        const whatsappURL = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;

        window.open(whatsappURL, "_blank");
    }
</script>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>25/2, NANDED PHATA,SINHAGAD RD , PUNE India</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 9850205065</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>katsengg@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="mb-0">09.00 AM - 12.00 PM</p>
                </div>     -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">Home</a>
                    <a class="btn btn-link" href="">About</a>
                    <a class="btn btn-link" href="">Contact</a>
                    <a class="btn btn-link" href="">Products</a>
                    <a class="btn btn-link" href="">Services</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Don’t miss the light — subscribe now and stay informed with everything new in the world of smart lighting.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">KATS LED</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://trade4export.com/">Trade4Export</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>


