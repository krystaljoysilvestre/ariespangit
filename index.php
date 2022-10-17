<?php
    include "./../includes/access-initializations.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BGCI Directory</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <?php echo BASE_URL; ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Bayani Gourmet Cuisine</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/Profile.png" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#directory">Directory</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#socialmedia">Social Media</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About Us</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- User Actions -->
            <div style="position: fixed;top: 0;right: 0;">
                <div style="position:relative;">
                    <div class="dropdown">
                        <button class="btn btn-secondary btn-lg dropdown-toggle fa-solid fa-bars" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <?php if( !isset($_SESSION['user_data']) || is_string($_SESSION['user_data']) ) { ?>
                            <li><a class="dropdown-item" href="../login">Login</a></li>
                            <?php } else { ?>
                            <li><a class="dropdown-item" href="../auth/logout">Logout</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Home-->
            <section class="resume-section" id="home">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                         BGCI
                        <span class="text-primary">Directory</span>
                    </h1>
                    <div class="subheading mb-5">
                        <h3 class="mb-0">REMINDER</h3>
                    </div>
                    <p class="lead mb-5">This directory is for the exclusive use of Bayani Gourmet Cuisine Inc. employees.
                        Dissemination to persons outside of the organization is strictly prohibited.</p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Directory-->
            <section class="resume-section" id="directory">
                <div class="resume-section-content">
                    <h2 class="mb-5">Directory</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Filing of Leave</h3>
                            <div class="subheading mb-3">Leave of Absence Form</div>
                            <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfXW2KoaeFKZRkhUh1ejGwJ1ZlL8tvtfUdCJra0adQKfeWDgg/viewform" target="_blank">Form</a></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"></span></div>
                    </div>
                    <hr>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Chart</h3>
                            <div class="subheading mb-3">Organizational Chart</div>
                            <p><a href="https://drive.google.com/drive/folders/1fo3r0ICwZEWPo9JR2tiwC3mQd2rRURQ8" target="_blank">View</a></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"></span></div>
                    </div>
                    <hr>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">HR Policies</h3>
                            <div class="subheading mb-3">Please Read</div>
                            <p><a href="https://drive.google.com/file/d/198RbFMXELWYqeVMQ9nwz2m9Qq9ucSpjM/view?usp=sharing" target="_blank">Policies</a></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"></span></div>
                    </div>
                    <hr>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Employee Emails</h3>
                            <div class="subheading mb-3">Employee Directory</div>
                            <p><a href="https://docs.google.com/spreadsheets/d/1FW8q3lZEqeU84xXxTKG21vt14MvcoGK_/edit?usp=sharing&ouid=117219158481258434671&rtpof=true&sd=true" target="_blank">Emails</a></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"></span></div>
                    </div>
                    <hr>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">IT Tuesdays</h3>
                            <div class="subheading mb-3">Summary</div>
                            <p><a href="https://sites.google.com/lunagroup.ph/it-tuesdays/home" target="_blank">Review</a></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"></span></div>
                    </div>
                    <hr>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                           
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary"></span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Contact Numbers</h3>
                        <div class="subheading mb-3">Landline</div>
                        <p><b>HEAD OFFICE</b> - (028) 647-9412</p>
                        <p><b>MANAGERS OFFICE</b> - (028) 552-9722</p>
                        <p><b>LA LUNA CAFE</b> - (028) 293-7655</p>
                        <p><b>WHITE HOUSE</b> - (028) 293-2860</p>
                        <div class="subheading mb-3">Mobile</div>
                        <p><b>LA LUNA CAFE</b> - +63 969 090 6137</p>
                        <p><b>LUNAXY</b> - +63 966 214 8327</p>
                        <p><b>LUNTIAN</b> - +63 995 349 2967</p>
                        <p><b>WHITE HOUSE</b> - +63 960 322 4823</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary"></span></div>
                </div>
                <hr>
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Brand Emails</h3>
                        <div class="subheading mb-0">Head Office</div>
                        <p>admin@lunagroup.ph</a></p>
                        <div class="subheading mb-0">Bayani Gourmet</div>
                        <p>bayanigourmet@lunagroup.ph</a></p>
                        <div class="subheading mb-0">The Vault</div>
                        <p>membersonly@lunagroup.ph</a></p>
                        <div class="subheading mb-0">Lunaxy</div>
                        <p>info@lunaxy.ph</a></p>
                        <div class="subheading mb-0">La Luna Cafe</div>
                        <p>lalunacafe@lunagroup.ph</a></p>
                        <div class="subheading mb-0">White House</div>
                        <p>whitehouse@lunagroup.ph</a></p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary"></span></div>
                </div>
                </section>
                <hr class="m-0" />
                 <!-- Social Media Accounts-->
            <section class="resume-section" id="socialmedia">
                <div class="resume-section-content">
                <h2 class="mb-5">Social Media Accounts</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">BAYANI GOURMET CUISINE INC.</h3>
                        <p><b>Instagram - </b><a target="_blank" href="https://www.instagram.com/bayanigourmet/">https://www.instagram.com/bayanigourmet/</a></p>
                        <p><b>Facebook - </b><a taget="_blank" href="https://www.facebook.com/bayanigourmet">https://www.facebook.com/bayanigourmet</a></p>
                        <p><b>Website - </b><a target ="_blank"href="https://bayanigourmet.ph/">https://bayanigourmet.ph</a></p>
                        <hr>
                        <h3 class="mb-0">LUNA CAFÉ</h3>
                        <p><b>Instagram - </b><a target ="_blank" href="https://www.instagram.com/luna.cafeph/">https://www.instagram.com/luna.cafeph</a></p>
                        <p><b>Facebook - </b><a target ="_blank" href="https://www.facebook.com/luna.cafephilippines">https://www.facebook.com/luna.cafephilippines</a></p>
                        <p><b>Website - </b><a target ="_blank" href="https://lunacafe.ph/">https://lunacafe.ph/</a></p>
                        <h3 class="mb-0">LA LUNA CAFÉ</h3>
                        <p><b>Instagram - </b><a target ="_blank" href="https://www.instagram.com/la_lunacafe/">https://www.instagram.com/la_lunacafe/</a></p>
                        <p><b>Facebook - </b><a target ="_blank" href="https://www.facebook.com/LaLunaCafeTaguig">https://www.facebook.com/LaLunaCafeTaguig</a></p>
                        <p><b>Website - </b><a target ="_blank" href="https://lalunacafe.ph/">https://lalunacafe.ph/</a></p>
                        <p><b>TikTok - </b><a target ="_blank" href="https://www.tiktok.com/@la_lunacafe/">https://www.tiktok.com/@la_lunacafe/</a></p>
                        <h3 class="mb-0">LUNTIAN</h3>
                        <p><b> Instagram - </b><a target ="_blank" href="https://www.instagram.com/luntianbylunacafe/">https://www.instagram.com/luntianbylunacafe/</a></p>
                        <p><b> Facebook - </b><a target ="_blank" href="http://facebook.com/luntianbylunacafe">http://facebook.com/luntianbylunacafe</a></p>
                        <p><b> Website - </b><a target ="_blank" href="https://luntianbylunacafe.ph/">https://luntianbylunacafe.ph/</a></p>
                        <h3 class="mb-0">WHITE HOUSE TAGUIG</h3>
                        <p><b>Instagram - </b><a target ="_blank" href="https://luntianbylunacafe.ph/">https://luntianbylunacafe.ph/</a></p>
                        <p><b>Facebook - </b><a target ="_blank" href="https://www.facebook.com/whitehousetaguig">https://www.facebook.com/whitehousetaguig</a></p>
                        <h3 class="mb-0">LUNAXY</h3>
                        <p><b>Instagram - </b><a target="_blank" href="https://www.instagram.com/lunaxyph/">https://www.instagram.com/lunaxyph/</a></p>
                        <p><b>Facebook - </b><a target="_blank"href="https://www.facebook.com/lunaXyph">https://www.facebook.com/lunaXyph</a></p>
                        <p><b>Website - </b><a target="_blank"href=" https://lunaxy.ph/">https://lunaxy.ph/</a></p>
                        <h3 class="mb-0">PHILIPPINE ART NATION</h3>
                        <p><b>Instagram - </b><a target ="_blank" href="https://www.instagram.com/philippineartnation/"> https://www.instagram.com/philippineartnation/</a></p>
                
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary"></span></div>
                </div>
                </section>
                <hr class="m-0" />
                <!-- About Us-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                <h2 class="mb-5">About Us</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                         <h3 class="mb-0">Contact Details</Details></h3>
                        <div class="subheading mb-3">Email Address</Address></div>
                        <p>admin@lunagroup.ph</p>
                        <div class="subheading mb-3">Contact Numbers</Address></div>
                        <p><b>ARIES</b> - +639360519432</p>
                        <p><b>PHILIP</b> - +639260465731</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"></span></div>
                    </div>

                    
                    <marquee behavior="scroll" direction="left"><p>If symptoms persist, consult your IT.</p></marquee>         
                   <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>