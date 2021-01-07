<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- MON CSS --> 

    <!-- INDEX -->
    <link rel="stylesheet" href="css/style.css">
    <!-- HEADER --> 
    <link rel="stylesheet" href="css/header.css">
    <!-- MAIN --> 
    <link rel="stylesheet" href="css/accueil.css">
    <!-- FOOTER --> 
    <link rel="stylesheet" href="css/footer.css">

    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/> 

    <!-- POPPINS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- TITRE DE MA PAGE -->
    <title>Pottery Studio</title>

</head>
<body>

    <!-- HEADER -->
    <header class="container">
        <?php require('header.php'); ?>
    </header>

    <!-- MAIN -->
    <main>

        <section class="container-fluid introduction">

            <div class="bloc_text">
                
                <div class="typewriter">
                    
                    <h2>Pottery Studio</h2>
                
                </div>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad incidunt debitis nobis doloremque enim.</p>

                <button class="btn_site"><a href="#">Boutique</a></button>

            </div>

        </section>

        <section class="container-fluid about_take">

            <div class="row">

                <div class="col-sm p-5 d-flex flex-column align-items-center justify-content-center container-fluid about_studio">

                    <h3>About Our Studio</h3>
                    <h3>About Our Studio</h3>

                    <hr class="animate__animated animate__fadeInRight">

                    <p>Aenean et facilisis justo, vitae lobortis augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In eget justo eget dolor dictum scelerisque. Ut porta tristique viverra. Donex interdum efficitur quam quis iaculis. Sed accumsan justo eget elit.</p>

                </div>

                <div class="col-sm p-5 d-flex flex-column align-items-center justify-content-center container-fluid take_class">
                    
                    <h3>Take a Class!</h3>
                    <h3>Take a Class!</h3>

                    <hr class="animate__animated animate__fadeInRight">

                    <p>
                        Intro to the Pottery Wheel <br/>
                        Intermediate Pottery Wheel <br/>
                        Beginning Sculpture <br/>
                        Advanced Surface Design <br/>
                    </p>

                    <button class="btn_site"><a href="#">All open classes</a></button>

                </div>

            </div>

        </section>

        <section class="container-fluid workshop">

            <div class="row">

                <div class="container-fluid col-xs-6 col-md-4 p-5 d-flex flex-column justify-content-center workshop_encart">

                    <h3 class="pb-2">Workshops & Guest Artists</h3>

                    <hr class="animate__animated animate__fadeInRight">

                    <p class="pt-2 pb-2">Class aptent taciti sociosqu ad litora torquent per conubia nostra. Quisque a vehicula magna. Mauris semper odio sit amet est blandit, quis pellentesque erat finibus. Duis aliquet rhoncus risus vitae porta.</p>

                    <button class="btn_site"><a href="#">Book your seat</a></button>

                </div>

                <div class="container-fluid col-xs-12 col-md-8 workshop_image"></div>

            </div>

        </section>

        <section class="container-fluid private_events">

            <div class="row">

                <div class="container-fluid col-xs-12 col-md-8 private_image"></div>

                <div class="container-fluid col-xs-6 col-md-4 p-5 d-flex flex-column justify-content-center private_encart">

                    <h3 class="pb-2">Private & Group Events</h3>

                    <hr class="animate__animated animate__fadeInRight">

                    <p class="pt-2 pb-2">Class aptent taciti sociosqu ad litora torquent per conubia nostra. Quisque a vehicula magna. Mauris semper odio sit amet est blandit, quis pellentesque erat finibus. Duis aliquet rhoncus risus vitae porta.</p>

                    <button class="btn_site"><a href="#">Become a member</a></button>

                </div>

            </div>

        </section>

        <section class="container mt-5 art_sale">

            <div class="row d-flex flex-column align-items-center justify-content-center mt-5">

                <div class="d-flex flex-column align-items-center justify-content-center mt-5 mb-3 text_encart">

                    <h3>Art For Sale</h3>

                    <hr class="animate__animated animate__fadeInRight">

                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra. Quisque a vehicula magna.</p>

                </div>

                <div class="row mb-2 mt-2 photos_encart">

                    <div class="col-sm lot lot_1">
                        
                        <img src="images/1.jpg" alt="Ensemble de pots en terre brutes">

                        <h5 class='mt-3'>Designer Headphones</h5>

                        <p>£8.00</p>
                    
                    </div>

                    <div class="col-sm lot lot_2">
                        
                        <img src="images/2.jpg" alt="Ensemble de pots en terre blanc">

                        <h5 class='mt-3'>Purple Chair</h5>

                        <p>
                            <span class="prix_barre">£10.00</span> 
                            <span class="nouveau_prix">£15.00</span>
                        </p>
                    
                    </div>

                    <div class="col-sm lot lot_3">
                        
                        <img src="images/3.jpg" alt="Deux pots en terre encastrés">

                        <h5 class='mt-3'>Purple Chair</h5>

                        <p>£87.00</p>
                    
                    </div>

                </div>

                <button class="mt-2 btn_site"><a href="#">More products</a></button>

            </div>

        </section>

        <section class="container-fluid happy_students">

            <div class="container-fluid image_happy">

                <div class="pl-4 pr-4 pt-4 pb-4 happy_encart">

                    <h3>Happy Students</h3>

                    <hr class="animate__animated animate__fadeInRight mb-3">

                    <img src="images/quote.png" width="40px" alt="Guillemet dans rond orange">

                    <p class="mt-3 citation">Danec non iaculis libero. Sed a piris sed ninc sagittis posuere. Etiam imperdiet nibh ut ex ullamcorper molestie. Mauris pellentesque augue turpis sed parttitor orci convallis.</p>

                    <br>

                    <p class="auteur">- Rakib Hasan</p>

                </div>

            </div>

        </section>


    </main>

    <!-- FOOTER --> 
    <footer class="container-fluid d-flex flex-column align-items-center">
        <?php require('footer.php'); ?>
    </footer>

    <!-- BOOTSTRAP JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            
    <!-- BOOTSTRAP JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <!-- MON JAVASCRIPT -->
    <script src="js/script.js"></script>

</body>
</html>