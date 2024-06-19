<?php 
include_once 'userinfo.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dynamic website</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cricket World</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contcat Us</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/ms3.avif" class="d-block w-100" alt="first image">
                <div class="carousel-caption d-none d-md-block">
                    <h4>MS Dhoni</h4>
                    <p>Mahendra Singh Dhoni, often called MS Dhoni, is a cricket legend. Born on July 7, 1981, in Ranchi, India, he rose from humble beginnings to become one of cricket's greatest captains and wicketkeepers. Known for his calm demeanor and sharp cricketing mind, Dhoni led India to numerous victories, including the 2007 T20 World Cup and the 2011 ODI World Cup. His leadership, cool finishing skills, and dedication have left an indelible mark on the sport. Even after retiring from international cricket in 2020, Dhoni continues to inspire millions through his contributions to the game.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/virat1.webp" class="d-block w-100" alt="second image">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Virat Kohli</h4>
                    <p>Virat Kohli's cricket journey is inspiring. He began in Delhi, rose through the ranks, and made his India debut in 2008. Kohli's fierce determination and skill made him a standout batsman. He led India to many victories, setting records and winning hearts worldwide. As captain, his leadership was marked by aggression and passion. Kohli's journey is a testament to hard work, talent, and an unwavering love for the game.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/rahul.jpg" class="d-block w-100" alt="third image">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Kl Rahul</h4>
                    <p>KL Rahul's cricket journey is a tale of talent and perseverance. Born in Mangalore, India, he showed promise early. He made his first-class debut for Karnataka in 2010. His consistent performances earned him a spot in the Indian Test team in 2014. 
                       Rahul's adaptability across formats became evident as he excelled in Tests, ODIs, and T20s. Known for his elegant stroke play and versatility, he has played key innings in crucial matches. Overcoming injuries and form slumps, Rahul has emerged as a reliable top-order batsman and occasional wicketkeeper. His journey is marked by resilience and continuous evolution as a cricketer.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center" id="about">About Us</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-12">
                    <img src="images/dhoni.jpg" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-7 col-md-7 col-12">
                    <h2 class="display-8">I am Ms Dhoni</h2>
                    <p class="py-1" style="color: black; ">MS Dhoni, a cricket legend, rose from a small-town boy to India's most successful captain. Known for his calm demeanor, sharp cricketing mind, and extraordinary finishing skills, he led India to numerous victories, including the 2007 T20 World Cup, the 2010 and 2016 Asia Cups, and the 2011 ICC World Cup. Dhoni's leadership, innovative strategies, and match-winning performances have left an indelible mark on cricket history. His legacy continues to inspire aspiring cricketers worldwide.</p>
                    <a href="about.php" class="btn btn-success">Check More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center" id="services">Our Services</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card-group">
                        <div class="card">
                            <img src="images/ms.avif" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Ms Dhoni</h5>
                                <p class="card-text">MS Dhoni, a cricket legend, rose from a small-town boy to India's most successful captain. Known for his calm demeanor, sharp cricketing mind, and extraordinary finishing skills, he led India to numerous victories, including the 2007 T20 World Cup, the 2010 and 2016 Asia Cups, and the 2011 ICC World Cup. Dhoni's leadership, innovative strategies, and match-winning performances have left an indelible mark on cricket history. His legacy continues to inspire aspiring cricketers worldwide.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card-group">
                        <div class="card">
                            <img src="images/rohit.webp" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Rohit Sharma</h5>
                                <p class="card-text">Rohit Sharma's cricket journey is marked by immense talent and perseverance. Starting his career in domestic cricket, Rohit quickly rose through the ranks with his elegant batting style.His  breakthrough came when he scored a double century in an ODI, showcasing his potential. As the captain of the Mumbai Indians in the IPL, he led the team to multiple titles, cementing his leadership skills. Rohit became an integral part of the Indian national team, known for his explosive batting and consistency.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card-group">
                        <div class="card">
                            <img src="images/bumrah.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Jasprit Bumrah</h5>
                                <p class="card-text">Jasprit Bumrah's cricket journey is a tale of hard work and perseverance. Starting in Gujarat, he faced many challenges but never gave up. His unique bowling action and consistent pace set him apart.
Debuting for India in 2016, Bumrah quickly became a key player. His skill in delivering yorkers made him a feared bowler in limited-overs cricket. Success followed in Tests too, where he played crucial roles in overseas victories. His story inspires many young cricketers worldwide.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center" id="gallery">Our Gallery</h2><br><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/dhoni.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/dhoni2.avif" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/dhoni3.png" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/virat.webp" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/virat1.webp" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/virat.webp" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/rahul.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/rahul4.avif" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/rahul5.jpg" class="img-fluid pb-4">
                    </div>
                </div>
            </div>
    </section>

    <section class="my-4">
        <div class="py-5">
            <h2 class="text-center" id="contact">Contact Us</h2>
            <div class="w-50 m-auto">
                <form action="index.php" method="POST" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="name" style="margin-top: 15px;">Name</label>
                        <input type="text" name="name" id="name" autocomplete="off" class="form-control" placeholder="Enter Your Name" required>
                        <div class="invalid-feedback">
                            Please enter a valid name.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" style="margin-top: 15px;">Email</label>
                        <input type="email" name="email" id="email" autocomplete="off" class="form-control" placeholder="Enter Your Email" required>
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" style="margin-top: 15px;">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" class="form-control" placeholder="Enter Your Password" required>
                        <div class="invalid-feedback">
                            Please enter a password.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cpassword" style="margin-top: 15px;">Confirm Password</label>
                        <input type="password" name="cpassword" id="cpassword" autocomplete="off" class="form-control" placeholder="Enter Your Confirm Password" required>
                        <div class="invalid-feedback">
                            Please confirm your password.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mobile" style="margin-top: 15px;">Mobile Number</label>
                        <input type="text" name="mobile" id="mobile" autocomplete="off" class="form-control" placeholder="Enter Your Mobile Number" required>
                        <div class="invalid-feedback">
                            Please enter your mobile number.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message" style="margin-top: 15px;">Message</label>
                        <textarea class="form-control" name="message" id="message" placeholder="Enter Your Message.." required></textarea>
                        <div class="invalid-feedback">
                            Please enter your message.
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success" style="margin-top: 15px;">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <p class="p-3 bg-dark text-white text-center">@2024 shatrudhansharma4622</p>
    </footer>
    <!-- <script>
        setTimeout(function() {
            window.location.href = "index.php";
        }, 5000); // 5 seconds delay
    </script> -->

    <script>
        // Bootstrap validation script
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>