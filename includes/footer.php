<div class="back-clr">
<div class="container ">
    <div class="row">
        <div class="text-clr col-md-12 text-center ">
            <h2 class="font-h2">REQUEST A QUOTE</h2>
            <p class="font-p">Fill in your details and we'll get to you in just a few hours.</p>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form class="row g-4">
                <div class="col-md-6">
                    <input type="text" class="form-control f-clr" id="first-name" placeholder="First Name" required>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control f-clr" id="last-name" placeholder="Last Name" required>
                </div>
                <div class="col-md-12">
                    <input type="email" class="form-control f-clr" id="your-email" placeholder="Email" required>
                </div>
                <div class="col-12">
                    <input type="tel" class="form-control f-clr" id="phone-number" placeholder="Contact Number" required>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control f-clr" id="website-url" placeholder="Website">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control f-clr" id="book-title" placeholder="Book Title">
                </div>
                <div class="col-md-6">
                    <select id="services" class="form-select f-clr" >
                        <option disabled value selected>Required Service(s)</option>
                        <option>Search Engine Optimization (SEO)</option>
                        <option>Google Ads Management</option>
                        <option>Social Media Marketing</option>
                        <option>Website Design & Development</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control f-clr" id="publication-date" placeholder="Publication Date/Projected">
                </div>
                <div class="col-md-12">
                    <textarea class="form-control f-clr" id="message" rows="3" placeholder="Message" required></textarea>
                </div>
                <div class="col-12 text-end">
                    <button type="submit" class="btns-nine">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-1"></div>
</div>
</div>
</div>

<div class="container-fluid foot-line">
        <div class="container">
        <div class="row">
            <div class="text-clr col-md-1 py-2">
                <h6 class="size-h6">Follow Us</h6>
            </div>
            <div class="col-md-2 py-2">
                <a class="foot-icons"><i class="fa-brands fa-facebook s-icons"></i></a>
                <a class="foot-icons"><i class="fa-brands fa-instagram s-icons"></i></a>
                <a class="foot-icons"><i class="fa-brands fa-twitter s-icons"></i></a>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
    </div>
<div class="container-fluid footer">
    <div class="container py-5">
        <div class="row">
            <div class="text-clr col-md-4">
                <h4>About Us</h4>
                <p class="foot-p">Horizon Book Marketing is among the premier
                    book marketing and publishing compa-
                    nies in the world. Our publicity services
                    are for both traditionally & self-published
                    authors. We have successfully published &
                    promoted books Of all genres, Widely regarded
                    as top notch book marketing in the
                    publishing industry. Our work ethic, tenacity,
                    and creativity are legendary.</p>
            </div>
            <div class="text-clr col-md-4">
                <h4>Recent Blogs</h4>
                <div class="row">
                    <div class="col-md-3">
                        <img src="./img/blog.png" alt="">
                    </div>
                    <div class="col-md-9">
                        <h5>Granite</h5>
                        <p class="foot-p">By neeraj, 2 years ago</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <img src="./img/blog1.png" alt="">
                    </div>
                    <div class="col-md-9">
                        <h5>Remodeling</h5>
                        <p class="foot-p">By alvinherndon29, 2 years ago</p>
                    </div>
                </div>
            </div>
            <div class="text-clr col-md-4">
                <h4>SingUp For Newsletter</h4>
                <form class="row g-2">
                    <div class="col-md-8">
                        <input type="text" class="form-control form-foot" id="f-first-name" placeholder="Name" >
                    </div>
                    <div class="col-md-8">
                        <input type="email" class="form-control form-foot" id="f-your-email" placeholder="Email" >
                    </div>
                    <div class="col-8">
                        <input type="tel" class="form-control form-foot" id="f-phone-number" placeholder="Contact" >
                    </div>
                    <div class="col-md-8">
                        <textarea class="form-control form-foot" id="f-message" rows="3" placeholder="Message" ></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="footer-btn">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<div class="container foot-end">
    <div class="row">
        <div class="text-clr col-md-6">
            <p>Copyright 2023 @ HORIZON BOOK MARKETING</p>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>
</div>
<script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!---------------- Footer Section End ---------------->
    <script>
        // Initialize Owl Carousel with 6 visible items
        $(document).ready(function() {
            $('.owl-seven').owlCarousel({
                items: 6,
            loop: true,
            nav: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 5
                }
            },
            dots: false
        });
    });
</script>
