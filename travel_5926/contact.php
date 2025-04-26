<?php include 'navbar.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Sri Lanka Travel Planner</title>
    <link rel="stylesheet" href="css/contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
   
</head>
<body>
 <!-- Hero Section -->
 <section class="hero-section">
        <div class="container">
            <h1>Contact Us</h1>
        </div>
    </section>
    <!-- Main Content -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Get in Touch</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <form  method="POST" action="save_contact.php">
                    <div class="mb-3" >
                        <label for="name" class="form-label" >Name</label>
                        <input type="text" class="form-control"  name="name" id="name" placeholder="Enter your name" >
                    </div>
                    <div class="mb-3" >
                        <label for="email" class="form-label" >Email</label>
                        <input type="email" class="form-control"  name="email" id="email" placeholder="Enter your email" >
                    </div>
                    <div class="mb-3" >
                        <label for="message" class="form-label">Message</label>
                        <textarea  class="form-control"  name="message" id="message" rows="4" placeholder="Enter your message" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6 mb-4">
                <h3>Frequently Asked Questions</h3>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is the best time to visit Sri Lanka?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The best time to visit Sri Lanka depends on which part of the country you plan to visit. The west and south coasts are best visited from December to March, while the east coast is best from April to September.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Do I need a visa to visit Sri Lanka?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, most travelers need a visa to enter Sri Lanka. You can apply for an Electronic Travel Authorization (ETA) online before your trip.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What are the top attractions in Sri Lanka?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Some of the top attractions in Sri Lanka include Sigiriya Rock Fortress, Temple of the Tooth Relic, Yala National Park, Galle Fort, Dambulla Cave Temple, and the scenic town of Ella.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="index.html" class="text-white">Home</a></li>
                        <li><a href="planyourtrip.html" class="text-white">Plan Your Trip</a></li>
                        <li><a href="Destinations.html" class="text-white">Destinations</a></li>
                        <li><a href="Localexperiences.html" class="text-white">Local Experiences</a></li>
                        <li><a href="itinerary_overview.html" class="text-white">Itinerary Overview</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <p><b>Email:</b> Kandy@gmail.com</p>
                    <p><b>Phone Number:</b> 081 2338908</p>
                </div>
                <div class="col-md-4">
                    <h3>Follow Us</h3>
                    <ul class="list-unstyled d-flex justify-content-center">
                        <li class="me-3"><a href="https://www.facebook.com" class="text-white"><i class="fab fa-facebook fa-2x"></i></a></li>
                        <li class="me-3"><a href="https://www.youtube.com" class="text-white"><i class="fab fa-youtube fa-2x"></i></a></li>
                        <li><a href="https://www.instagram.com" class="text-white"><i class="fab fa-instagram fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
            <p class="mt-3">© 2023 Sri Lanka Travel Planner. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>