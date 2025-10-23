<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Princess Touch</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="Contact.css">
    <link href="https://fonts.googleapis.com/css?family=Aboreto" rel="stylesheet">
    <link rel="icon" href="images/trylogo.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    

        
    
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light py-3">
        <div class="container">
            <a class="navbar-brand fw-bolder fs-2" href="#">PRINCESS TOUCH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-6 gap-4">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Trending</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contact.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="About.php">About Us</a></li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="SEARCH.png" alt="" class="icon">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="CARTTTT.png" alt="" class="icon">
                        </a>

                    <li class="nav-item"><a class="nav-link" href="#">Log in</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <hr class="navbar-line">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-5 contact-section"
                style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: 20px;">
                <img src="IPHONE.png" alt="Phone Icon" class="contact-icon"
                    style="width: 50px; height: 50px; margin-bottom: 10px;">
                <h6 class="mb-1">PHONE</h6>
                <p class="mb-0">0995 2737 231</p>
                <p class="mb-0">MONDAY TO SATURDAY</p>
                <p>8AM - 8PM UTC -8</p>
            </div>
            <div class="col-md-5 contact-section"
                style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: 20px;">
                <img src="EMAILLL.png" alt="Gmail Icon" class="contact-icon"
                    style="width: 50px; height: 50px; margin-bottom: 10px;">
                <h6 class="mb-1">MAIL</h6>
                <p>princesstouch@gmail.com</p>
            </div>
        </div>

        <hr class="navbar-line">
        <div class="form-container">
            <br>
            <br>
            <h5 class="text-center mb-4">BOOK AN APPOINTMENT AT PRINCESS TOUCH</h5>
            <br>
            <form>
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control rounded-3" placeholder="FIRST NAME" required />
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control rounded-3" placeholder="LAST NAME" required />
                    </div>
                </div>
                <div class="mb-3">
                    <input type="tel" class="form-control rounded-3" placeholder="PHONE" required />
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control rounded-3" placeholder="YOUR EMAIL ADDRESS" required />
                </div>
                <div class="mb-3">
                    <select class="form-select rounded-3" required>
                        <option value="" selected disabled>SELECT SERVICE APPOINTMENT</option>
                        <option>Service 1</option>
                        <option>Service 2</option>
                        <option>Service 3</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control rounded-3" required />
                </div>
                <div class="mb-3">
                    <textarea class="form-control rounded-3" rows="2"
                        placeholder="YOUR MESSAGE SPECIAL REQUEST"></textarea>
                </div>
            </form>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-submit"
                style="background-color: #D48787; color: white; border: none; opacity: 1; border-radius: 100px;">Book
                now!</button>
        </div>
        </form>
    </div>
    <footer class="footer-section mt-5">
        <div class="footer-content container py-5">
            <div class="row align-items-center justify-content-between text-white">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <h4><span class="fw-bold">Princess Touch</span> offers gentle yet luxurious skincare made with
                        nature’s finest ingredients and backed by science. Our mission is to illuminate, nourish, and
                        restore your natural glow — helping every skin type feel confident, radiant, and cared for.</h4>
                    <button class="footer-btn mt-4">Explore more</button>
                </div>

                <div class="col-lg-4 text-lg-end">
                    <ul class="list-unstyled mb-4">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Trending</a></li>
                    </ul>

                    <ul class="list-unstyled social-links">
                        <li><a href="#">Facebook ↗</a></li>
                        <li><a href="#">Instagram ↗</a></li>
                        <li><a href="#">Twitter ↗</a></li>
                    </ul>
                </div>
            </div>

            <hr class="footer-line mt-4 mb-3">
            <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between text-white-50 small">
                <a href="#"><span>Terms of Service</span></a>
                <span>© 2025 Princess Touch. All rights reserved.</span>
                <a href="#"><span>Privacy Policy</span></a>
            </div>
        </div>
    </footer>

    <script src="js/bootstrap.js"></script>

    <script>
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const faqItem = button.parentElement;
                faqItem.classList.toggle('active');
            });
        });
    </script>
</body>

</html>