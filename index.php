<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- link of fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- link of fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- another link of fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/849925705c.js" crossorigin="anonymous"></script>
    <!-- link of jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- link of css of owlcarousle  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Lko Property Wale - Unlocking Your Dream Home</title>
    <!--link of google search console-->
    <meta name="google-site-verification" content="2VGHbUqofEsGCV7ykUEgbSIRtiaSgBQQecbcJIdjdg4" />
    <!-- code for meta -->
    <meta
        content="copywale.com, copuwale - buy notebooks at low price, school copies, copies at low price, online school copies, school copies store near me, best school copie seller near me, school notebook, notebooks, school notebooks store near me, school notebook at low price, school notebook at best price, online school notbook store, best school notebook store, copywale, copywale.com, best school notebook at low price, best school notebook, affordable notebook"
        name="keywords">
    <meta
        content="Looking for affordable school notebooks? Check out our wide selection of high-quality notebooks at unbeatable prices. Shop now and save!"
        name="description">

    <!-- code for icon -->
    <link rel="icon" href="./images/icon.png" type="image/gif" sizes="20x20">
    <!-- link of css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- internal css -->
    <style>
    #mainContainerOfMobileResponsive {
        background-color: orangered;
        width: fit-content;
        color: white;
        font-size: 20px;
        cursor: pointer;
        writing-mode: vertical-rl;
        position: fixed;
        z-index: 10;
        margin-top: 414px;
        border-radius: 10px;
        border: 1px solid white;
        box-shadow: 0px 0px 10px grey;
        display: none;
    }

    #mainContainerOfMobileResponsive p {
        padding: 22px 7px 5px 7px;
        letter-spacing: 2px;
        letter-spacing: 2px;
        font-weight: bolder;
    }

    /* code for spinner */
    #loader {
        display: none;
        border: 5px solid #f3f3f3;
        border-top: 5px solid green;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        animation: spin 2s linear infinite;
        position: relative;
        left: 45%;
        transform: translate(-50%, -50%);
    }

    #sitevisitLoader {
        display:none;
        border: 5px solid #f3f3f3;
        border-top: 5px solid green;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        animation: spin 2s linear infinite;
        position: relative;
        left: 45%;
        transform: translate(-50%, -50%);
    }

    #response {
        color: green;
        margin-left: 10%;
    }

    #sitevisitResponse {
        color: orangered;
        margin-left: 10%;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* code for mobile responsive code */
    @media (max-width:960px) {

        #mainContainerOfMobileResponsive {
            display: block;
        }

        .hideAtResponsive {
            display: none;
        }

    }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <!-- code for navbar starts here -->
    <nav>
        <div class="menu-icon">
            <span class="fas fa-bars"></span>
        </div>
        <div class="logo">
            <img src="./images/logo.png" alt="copywale.com" id="allpustakLogo">
        </div>
        <form action="" method="GET">
            <input type="search" class="search-data" name="searchData"
                placeholder="What Type Of Property Do You Want..." required minlength="3">
            <button type="submit" name="searchItem" class="fas fa-search"></button>
        </form>
        <div class="nav-items">
            <li style="margin-top: 7px;">
                <a href="./PHP/propertysale.php" target="_blank" id="myOrder" class="hideAtResponsive">Sell Property <i class="fa-solid fa-house"
                        style="color: #f4f7fa;"></i></a>
            </li>
            <li style="margin-top: 7px;">
                <a href="#services" class="hideAtResponsive contact" data-toggle="modal" data-target="#contact">Contact
                </a>
            </li>
            <div class="dropdown hideAtResponsive">
                <li id="account" class="dropbtn"><a href="#"> <span class="fas fa-user"></span></a></li>
                <div class="dropdown-content">
                    <a href="./PHP/account.php" class="borderWhite">Sign-In <i class="fa fa-sign-in"></i></a>
                    <a href="#" class="borderWhite">My Property <i class="fa-solid fa-house"></i></a>
                </div>
            </div>
        </div>
        <div class="search-icon">
            <span class="fas fa-support"></span>
        </div>
        <div class="cancel-icon">
            <span class="fas fa-times"></span>
        </div>
    </nav>
    <!-- code for mobile responsive navbar -->
    <div class="showHideResponsiveNavbar">
        <div class="tab">
            <div class="button">
                <button class="mobileClassBtnSell">Sell Property <i class="fa-solid fa-house"
                        style="color: #f4f7fa;"></i></button>
            </div>

            <div class="button">
                <span class="fas fa-user userMobileResponsive"></span>
            </div>
            <div class="button">
                <button class="mobileClassBtnBuy" data-toggle="modal" data-target="#contact">Contact <i
                        class="fa-solid fa-phone" style="color: #f9fafb;"></i></button>
            </div>
        </div>
    </div>
    <!-- code for contact modal -->
    <!-- Modal -->
    <div class="modal fade" id="contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Fell Free To Contact Us - Lko Propertywale</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="myContactForm">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Name</label>
                            <input type="text" class="form-control" name="name" id="formGroupExampleInput"
                                placeholder="Name" minlength="3" maxlength="25" required>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Phone</label>
                            <input type="text" class="form-control" name="phone" id="formGroupExampleInput"
                                placeholder="Phone No" pattern="[7-9]{1}[0-9]{9}"
                                title="Invalid Number or Not Include +91" required>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Message</label>
                            <textarea class="form-control" name="msg" id="formGroupExampleInput"
                                style="width:100%;height:120px;" placeholder="Write Message..." required></textarea>
                        </div>

                </div>
                <div class="container mt-2 mb-2">
                    <div class="row">
                        <div id="loader"></div>
                        <div id="response"></div>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" style="background-color:'green'">Send <i
                            class="fa-sharp fa-regular fa-paper-plane" style="color: #f4f5f6;"></i> </button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- CODE FOR CAROUSLE -->
    <div class="mainDiv">
        <!-- main div -->

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/headerHero_1.png" class="d-block w-100 heroCaroulsImages"
                        alt="school notebook's at low price">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/headerHero_2.png" class="d-block w-100 heroCaroulsImages"
                        alt="online notebook seller">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div> copySetSize
                <div class="carousel-item">
                    <img src="./images/headerHero_3.png" class="d-block w-100 heroCaroulsImages"
                        alt="best notebook seller in lucknow">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>

        <!-- CODE FOR BANNER -->
        <div class="container mt-4">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="./images/poster_One.png" alt="copywale offser's" class="offerBannerStyling">
                    </div>
                    <div class="item">
                        <img src="./images/secondBanner.jpg" alt="copywale delivery offser's"
                            class="offerBannerStyling">
                    </div>
                    <div class="item">
                        <img src="./images/thirdBanner.jpg" alt="copywale discount offser's" class="offerBannerStyling">
                    </div>
                    <div class="item">
                        <img src="./images/fourthBanner.jpg" alt="copywale discount offser's"
                            class="offerBannerStyling">
                    </div>
                    <div class="item">
                        <img src="./images/fifithBanner.jpg" alt="copywale best offser's" class="offerBannerStyling">
                    </div>
                </div>
            </div>
        </div>
        <!-- code for heading of latest property -->
        <h1 class="text-center d-flex justify-content-center latestBooksHeading">Latest Property</h1>

        <!-- code for cards  -->
        <div class="container mt-xl-5 mt-md-4 mt-sm-4 mt-4">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 columnWidthSizeSet">
                    <div class="row">

                        <!-- PHP CODE FOR FETCHING ALL THE COPIES FROM THE DATABASE -->
                        <?php
                        require('./PHP/config.php');
                        $myQuery = "SELECT * FROM `propertydata` ORDER BY RAND ()";
                        $runquey = mysqli_query($conn, $myQuery);
                        foreach ($runquey as $getAceess) {
                        ?>

                        <div
                            class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center marginTocol">
                            <a href="./PHP/moredetails.php?propertyId=<?php echo $getAceess['S.No'] ?>" target="_blank"
                                style="text-decoration:none;">
                                <div class="card" style="width: 18rem;">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($getAceess['ImgOne']); ?>"
                                        class="card-img-top copySetSize" alt="..." />

                                    <div class="card-body">
                                        <h5 class="card-title copyTitleTextSizeSet">
                                            <?php echo ($getAceess['TitleProperty']) ?>
                                        </h5>
                                        <small style="margin-top:0px;"> <?php echo ($getAceess['Area']) ?></small>
                                        <p class="card-text copyPriceStyle"><i>&#8377;</i>
                                            <?php echo ($getAceess['PropertyPrice']) ?>
                                        </p>
                            </a>

                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#siteVisit">
                                <i class="fa-solid fa-phone" style="color: #f9fafb;"></i> Book Site Visit </button>

                        </div>
                    </div>
                </div>

                <?php
                        }
            ?>

            </div>
        </div>
    </div>
    </div>


    <!-- code for visit site form -->
    <div class="modal fade" id="siteVisit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book Site Visit- Lko Propertywale</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="sitevisitForm">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Name</label>
                            <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Name"
                                minlength="3" maxlength="25" required>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Phone</label>
                            <input type="text" class="form-control" name="phone" id="formGroupExampleInput" placeholder="Phone No"
                                pattern="[7-9]{1}[0-9]{9}" title="Invalid Number or Not Include +91" required>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Address</label>
                            <input type="text" class="form-control" name="address" id="formGroupExampleInput" placeholder="Address"
                                minlength="5" required>
                        </div>


                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="formGroupExampleInput">Date</label>
                                    <input type="date" class="form-control" name="date" id="formGroupExampleInput" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="formGroupExampleInput">Time</label>
                                    <input type="time" class="form-control" name="time" id="formGroupExampleInput" required>
                                </div>
                            </div>
                        </div>


                </div>
                <div class="container mt-2 mb-2">
                    <div class="row">
                        <div id="sitevisitLoader"></div>
                        <div id="sitevisitResponse"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" style="background-color:'green'">Confirm <i
                            class="fa-sharp fa-regular fa-paper-plane" style="color: #f4f5f6;"></i> </button>
                </div>
                </form>
            </div>
        </div>
    </div>



    <div class="container-fluid footerCOntainer">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <h4 class="marginContent">About Us</h4>
                <hr class="marginContent">
                <p class="marginContent">Lko Propertwale is an Lucknow's fastest growing real-estate company. It is
                    started in 2020, and they serve there service's to more than 150+ happy people.</p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <h4 class="marginContent">Quick Links</h4>
                <hr class="marginContent">
                <ul id="footerUl">
                    <li><b><a href="tel:7985840510" class="marginContent" style="color:white !important;">+91 -
                                7985840510</a></b></li>
                    <li class="marginContent"><a href="#">Contact Us</a></li>
                    <li class="marginContent"><a href="#">Support</a></li>
                    <li class="marginContent"><a href="#">Term & Conditions</a></li>
                </ul>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <h4 class="marginContent">Follow Us</h4>
                <hr class="marginContent">
                <a href="#" class="fa fa-facebook marginContent faPadding"></a>
                <a href="#" class="fa fa-twitter faPadding"></a>
                <a href="#" class="fa fa-instagram faPadding"></a>
                <a href="#" class="fa fa-youtube faPadding"></a>
            </div>
        </div>
    </div>


    <!-- main div -->
    </div>
    <!-- code for footer -->
    <footer>
        <strong>All Rights Reserved &#169; lko propertwale 2020 - 2023</strong>
    </footer>

    <!-- link of jquery -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- cdn of owl carousle js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- link of js -->

    <script src="./js/script.js"></script>
</body>

</html>