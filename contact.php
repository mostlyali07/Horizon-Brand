<!DOCTYPE html>
<html lang="en">

<head>
<?php include "./includes/head.php"?>   
    <title>Horizon Publishing</title>
</head>

<body>
<?php include "./includes/header.php"?>
    <!---------------- First Section Start ---------------->
    <div class="main-bannerr">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 banner-left d-flex align-items-center text-center">
                    <div>
                        <h1> 
                            <span style="color: #f58b01;"> Contac Us</span> 
                           
                        </h1>
                        <p>
                            Successful book marketing takes time, effort, and dedication. By utilizing a variety of marketing strategies and consistent effort, we can increase your book's visibility and reach the horizon of success.
                        </p>
                        <button class="btns-one" type="submit"><i class="fa-solid fa-cube"></i>&nbsp; Call Us
                            Now</button>&nbsp;&nbsp;
                        <button class="btns-two" type="submit"><i class="fa-solid fa-file-signature"></i>&nbsp;
                            Chat Now</button>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>

    <!---------------- First Section End ---------------->
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-md-6">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="your-name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="your-name" placeholder="John Doe" required>
                    </div>
                    <div class="col-md-6">
                        <label for="your-email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="your-email" placeholder="john45@example.com" required>
                    </div>
                    <div class="col-6">
                        <label for="phone-number" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="phone-number" placeholder="+123 4567 890" required>
                    </div>
                    <div class="col-6">
                        <label for="website-url" class="form-label">Website URL</label>
                        <input type="text" class="form-control" id="website-url" placeholder="www.example.com">
                    </div>
                    <div class="col-md-12">
                        <label for="services" class="form-label">Services</label>
                        <select id="services" class="form-select" required>
                            <option disabled value selected>Please Select a Service</option>
                            <option>Search Engine Optimization (SEO)</option>
                            <option>Google Ads Management</option>
                            <option>Social Media Marketing</option>
                            <option>Website Design & Development</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btns-nine">SEND MESSAGE</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d759.1515829954502!2d-79.99130175700542!3d40.43971653679224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8834f159448327f3%3A0xe55122d29ec5ddd8!2sSouthwestern%20Pennsylvania%20Commission!5e0!3m2!1sen!2s!4v1681819660415!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

<div class="div-clr">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="cont-divs">
                    <i class="fa-solid fa-location-dot"></i>
                    <h6 class="fw-bold">Mailing Address</h6>
                    <a href="">445 S. Figueroa Street, 31st Floor, <br> Los Angeles, CA 90071</a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="cont-divs">
                    <i class="fa-solid fa-envelope"></i>
                    <h6 class="fw-bold">Mail</h6>
                    <a href="mailto:">admin@gmail.com</a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="cont-divs">
                    <i class="fa-regular fa-clock"></i>
                    <h6 class="fw-bold">Office Hours</h6>
                    <a href="">Week Days: 10:00 – 22:00 <br>
                        Sunday: Close</a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="cont-divs">
                    <i class="fa-solid fa-phone"></i>
                    <h6 class="fw-bold">Phone</h6>
                    <a href="tel:1234567890">+123-4567-890</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <!---------------- Second Section Start ---------------->
        <!-- <div class="container ">
            <div class="row">
                <div class="col-md-2"></div>
    <div class="col-md-8 singup-clr px-5">
        <h2 class="text-clrr text-center py-4">SIGN UP TO GET FREE CONSULTANCY</h2>
        <form class="row g-4">
            <div class="col-md-6">
                            <input type="text" class="form-control f-clr" id="first-name" placeholder="First Name" required>
                        </div>
                        <div class="col-6">
                            <input type="tel" class="form-control f-clr" id="phone-number" placeholder="Phone Number" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control f-clr" id="your-email" placeholder="Email" required>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control f-clr" id="website-url" placeholder="Website">
                        </div>
                        <div class="col-md-6">
                            <select id="services" class="form-select f-clr" >
                                <option disabled value selected>Desired Services</option>
                                <option>Search Engine Optimization (SEO)</option>
                                <option>Google Ads Management</option>
                                <option>Social Media Marketing</option>
                                <option>Website Design & Development</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control f-clr" id="publication-date" placeholder="General Genre Category">
                        </div>

                        <div class="col-2 text-end">
                            <button type="submit" class="btns-signup">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
        </div>
        </div> -->
    <!-- <div class="container py-5">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="./img/double-book.png" alt="double-book-img" class="Images-main">
            </div>
            <div class="col-md-6 right-side-panel d-flex align-items-center">
                <div>
                    <h2 class="font-h2">
                        STEP INTO A WORLD OF<br> POSSIBILITY WITH OUR BOOK<br> PUBLISHING SERVICES.
                    </h2>
                    <p>
Our book publishing services are enough to make it possible for your manuscript to become a published & even a best seller book. Collaborate with our book publishing specialists for an optimal book publishing plan tailored for your book.
                    </p>

                    <button class="btns-three" type="submit">READ MORE&nbsp;  <i class="fa-solid fa-book-open"></i></button>

                </div>

            </div>

        </div>
    </div> -->
    
    <!---------------- Second Section End ---------------->

    <!---------------- Third Section Start ---------------->
    <!-- <div class="back-color">
        <div class="container ">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10 newsl-form">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <p>
                                IS YOUR BOOK THE NEXT BESTSELLER?
                            </p>
                            <h2>
                                Get a free consult
                            </h2>
                            <p>
                                This is the only way to find out
                            </p>
                        
                            <form class="row form-inline">
                                  
                                        <div class="col-md-3">
                                            <input type="text" class="form-control inlinefm" id="inlineFormName" placeholder="Name">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="email" class="form-control inlinefm" id="inlineFormEmail" placeholder="Email">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control inlinefm" id="inlineFormNumber" placeholder="Number">
                                        </div>
                                        <div class="col-md-3">
                                            <button type="submit" class="btns-inlinef"><i class="fa-solid fa-paper-plane a-clr"></i></button>
                                        </div>

                            </form>
                        </div> -->
                        <!-- <div class="col-md-2"></div> -->
                    <!-- </div>     
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
    </div> -->
    <!---------------- Third Section End ---------------->
    <!---------------- Fourth Section Start ---------------->
    <!-- <div class="gallery-main">
        <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="font-h2">CHECK OUR PORTFOLIO</h2>
                <p class="font-p">Best sellers supported by our personalized marketing and promotional campaigns.</p>
            </div>
        </div>
    </div>
        <div>
            <div class="gallery">
                <img class="img-s" src="./img/book-red.png" alt="">
                <img class="img-s" src="./img/book-brown.png" alt="">
                <img class="img-s" src="./img/book-blue.png" alt="">
            </div>
            <div class="gallery">
                <img class="img-s" src="./img/book-tea.png" alt="">
                <img class="img-s" src="./img/book-green.png" alt="">
                <img class="img-s" src="./img/book-grey.png" alt="">

            </div>
        </div>
        <div class="container text-center p-5">
            <p class="font-p">We help generate a buzz among for your Our rnarketing includes tours, book video trailers,<br>
                social media campaigns, bmk signings and other promoti onal activities.</p>
            <button class="btns-three" type="submit">VIEW MORE&nbsp;  <i class="fa-solid fa-book-open"></i></button>
        </div>
    </div> -->
    <!---------------- Fourth Section End ---------------->

    <!---------------- Fifth Section End ---------------->
    <!-- <div class="video-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center ">
                    <div class="youtube-back">
                        <video autoplay controls poster="./img/poster.png" class="youtube">
                            <source src="./img/Trailer.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center p-3">
        <p class="font-p">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been<br>
            the industry's standard dummy text ever since the 1500s.</p>
        <button class="btns-three" type="submit">VIEW MORE&nbsp;  <i class="fa-solid fa-book-open"></i></button>
    </div> -->
    <!-- <div class="container py-5">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="./img/audio-book.png" alt="double-book-img" class="Images-main">
            </div>
            <div class="col-md-6 right-side-panel d-flex align-items-center">
                <div>
                    <h2 class="font-h2">
                        Audio Book Publishing
                    </h2>
                    <p class="font-p">
                        Enjoy working with a team of professionals for your audio book
                        narration, audible audio book creation, audio book publishing on
                        Amazon.<br><br />
                        Our audio book consultants help you learn the process from
                        audiobook narration, selection of voiceover till the publishing &
                        distribution.<br><br />
                        Distribute your audiobook globally using our audiobook publishing plans
                    </p>
                    <button class="btns-three" type="submit">VIEW PLANS &nbsp;  <i class="fa-solid fa-book-open"></i></button>
                </div>
            </div>
        </div>
    </div> -->
    <!---------------- Fifth Section End ---------------->

<!---------------- Sixth Section Start ---------------->
<!-- <div class="testimonial">
<div class="container py-3 testimonial">
    <div class="row">
        <div class="col-md-12">
            <div class="owl-seven owl-carousel owl-theme">
                <div class="item testi">
                    <img src="./img/bset-seller.png" class="widr">
                    <h5 class="testi-slid">Our Comprehensive Services Include</h5>
                </div>
                <div class="item testi">
                    <img src="./img/bset-seller.png" class="widr">
                    <h5 class="testi-slid">Our Comprehensive Services Include</h5>
                </div>
                <div class="item testi">
                    <img src="./img/bset-seller.png" class="widr">
                    <h5 class="testi-slid">Our Comprehensive Services Include</h5>
                </div>
                <div class="item testi">
                    <img src="./img/bset-seller.png" class="widr">
                    <h5 class="testi-slid">Our Comprehensive Services Include</h5>
                </div>
                <div class="item testi">
                    <img src="./img/bset-seller.png" class="widr">
                    <h5 class="testi-slid">Our Comprehensive Services Include</h5>
                </div>
                <div class="item testi">
                    <img src="./img/bset-seller.png" class="widr">
                    <h5 class="testi-slid">Our Comprehensive Services Include</h5>
                </div>
                <div class="item testi">
                    <img src="./img/bset-seller.png" class="widr">
                    <h5 class="testi-slid">Our Comprehensive Services Include</h5>
                </div>
                <div class="item testi">
                    <img src="./img/bset-seller.png" class="widr">
                    <h5 class="testi-slid">Our Comprehensive Services Include</h5>
                </div>
            </div>
        </div>
    </div>
</div>
</div> -->


<!---------------- Sixth Section End ----------------> 


<!---------------- Seventh Section Start ---------------->
<!-- <div class="container mt-5">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4 text-center">
            <img src="./img/talk.png" alt="double-book-img" class="Images-main">
        </div>
        <div class="col-md-4 right-side-panel d-flex align-items-center">
            <div>
                <h2 class="font-h2">
                    TALK TO US.
                </h2>
                <p>
                    Our specialized consultants would love to
                    advise an optimal publishing & ntarketing
                    campaign of your book.
                </p><br><br /><br><br />
                <h2 style="color: #f58b01;">
                    8447270033
                </h2>
                <h2 style="color: #f58b01;">
                    Free design consultation
                </h2>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10 talk-f">
            <div class="row">
                <div class="col-md-8 px-5">
                    <h2 class="font-h2">
                        Book Publishing or Book Marketing?
                    </h2>
                    <p class="font-p">
                        Chat with a specialist now for a free consult.
                    </p>
                </div>
                <div class="col-md-4 text-center">

                    <button class="btns-three" type="submit">VIEW PLANS &nbsp;  <i class="fa-solid fa-book-open"></i></button>
                </div>
                <div class="col-md-2"></div>
            </div>     
        </div>
        <div class="col-md-1">
        </div>
    </div>
</div> -->

<!---------------- Seventh Section End ---------------->


<!---------------- Eighth Section Start ---------------->
<!-- <div class="back-clr">
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
</div> -->
<!---------------- Eighth Section End ---------------->

    <!---------------- Footer Section Start ---------------->
    <div class="container-fluid foot-line">
        <div class="container">
        <div class="row">
            <div class="text-clr col-md-1 py-2">
                <h6>Follow Us</h6>
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

</body>
</html>