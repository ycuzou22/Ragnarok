<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
<header>
    <div class="logo-container">
        <img src="assets/ragnar.gif" alt="ragnar" class="logo">
        <i style="color:yellow">
        <?php
            session_start();
            if (isset($_SESSION['prenom'])) {
                echo $_SESSION['prenom'];
            }
        ?>
        </i>
    </div>
    <ul class="navlist">
        <li><a href="#Comments">Comments</a></li>
        <li><a href="#Characters">Characters</a></li>
        <li><a href="#Weapons">Weapons</a></li>
        <li><a href="about.html">About</a></li>
        <?php
            if (isset($_SESSION['prenom'])) {
                echo '<li><a href="logout.php">Disconnect</a></li>';
            } else {
                echo '<li><a href="http://127.0.0.1/siteTP/connexion.php">Connect !</a></li>';
            }
        ?>
    </ul>
    <div class="bx bx-menu" id="menu-icon"></div>
</header>
    <section class="hero">
        <div class="hero-text">
            <h1 class="princip">RAGNA</h1>
            <p>Welcome to the most popular adventure game of the decade! Ragnar the Viking and his friends are waiting for you!</p>
            <a href="https://www.youtube.com/watch?v=QdBZY2fkU-0" class="ctaa" target="_blank"><i class="ri-play-fill"></i>Watch Trailer</a>
        </div>
        <div class="hero-img">
            <img src="assets/duo3.png"  alt="">
        </div>
    </section>
    <div class="scroll-down">
        <a href="#"><i class="ri-arrow-down-s-line"></i></a>
    </div>
    <script src="https://unpkg.com/scrollreveal"></script>
    <button class="back-to-top" onclick="scrollToTop()"><i class="ri-arrow-up-s-line"></i></button>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/photo.js"></script>
    <script src="js/totop.js"></script>

    <div class="container">
        <h2 class="heading" id="Characters">CHARACTERS</h2>                                                                                                                                                                                                                                                                                                                                                                                                                                          
        <div class="gallery">
    
            <div class="gallery-item">
                <a href="character_details.php?character_id=1&character_name=Ragnar le viking&character_description=Lui c'est Ragnar le vikings. Plus courageux que 100 personnes réunis !">
                <img class="gallery-image" src="assets/ragnar_le_viking.webp" alt="personnage principal" title="ragnar_le_viking">
                </a>
            </div>
    
            <div class="gallery-item">
                <img class="gallery-image" src="assets/vide.webp" alt="sunset behind San Francisco city skyline">
            </div>
    
            <div class="gallery-item">
                <img class="gallery-image" src="assets/vide.webp" alt="people holding umbrellas on a busy street at night lit by street lights and illuminated signs in Tokyo, Japan">
            </div>
    
            <div class="gallery-item">
                <img class="gallery-image" src="assets/vide.webp" alt="car interior from central back seat position showing driver and blurred view through windscreen of a busy road at night">
            </div>
    
            <div class="gallery-item">
                <img class="gallery-image" src="assets/vide.webp" alt="back view of woman wearing a backpack and beanie waiting to cross the road on a busy street at night in New York City, USA">
            </div>
    
            <div class="gallery-item">
                <img class="gallery-image" src="assets/vide.webp" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="heading" id="Weapons">WEAPONS</h2>                                                                                                                                                                                                                                                                                                                                                                                                                                        
        <div class="gallery">
    
            <div class="gallery-item">
                <a href="character_details.php?character_id=2&character_name=StormBreaker&character_description=Cette arme légendaire permet d'apprivoiser le tonnerre !">
                <img class="gallery-image" src="assets/Cracker.jpg" alt="personnage principal" title="stormbreaber">
                </a>
            </div>
    
            <div class="gallery-item">
                <a href="character_details.php?character_id=3&character_name=Royal&character_description=Cette arme a appartenu au Roi des Vikings. Sa puissance est inégalée !">
                <img class="gallery-image" src="assets/royal.jpg" alt="royal" title="royal">
                </a>
            </div>
    
            <div class="gallery-item">
                <a href="character_details.php?character_id=4&character_name=Lightning&character_description=Parfaite pour dompter la foudre !">
                <img class="gallery-image" src="assets/tonnerre.jpg" alt="lightning" title="lightning">
                </a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const galleryItems = document.querySelectorAll('.gallery-item img');
            galleryItems.forEach(item => {
                item.addEventListener('click', function () {
                    const characterId = this.id;
                    const characterDescription = this.getAttribute('data-description');
                    <?php echo "session_start();"; ?>
                    <?php echo " \$_SESSION['character_id'] = '$characterId';"; ?>
                    <?php echo " \$_SESSION['character_description'] = '$characterDescription';"; ?>
                    window.location.href = 'character_details.php';
                });
            });
        });
    </script>
    
    <footer>
    <div class="container">
        <h2 class="heading" id="Comments">COMMENTS</h2>     
        <div class="parent_section">
            <section class="head">
                <button class="reviews"><p class="button_text">Write a review</p></button>
            </section>
            <section class="tab">
                <section class="bord">
                    <div class="comment">
                        <p class="names">Samantha D.</p>
                        <p>"Best strategy game i have played so far !"</p>
                    </div>
                    <p class="date">Posted on August 14, 2023</p>
                </section>
                <section class="bord">
                    <div class="comment">
                        <p class="names">Alex M.</p>
                        <p>"Ragnar is so cool dude. I love his art style and his story. what a great character !"</p>
                    </div>
                        <p class="date">Posted on August 15, 2023</p>
                </section>
        
                <section class="bord">
                    <div class="comment">
                        <p class="names">Ethan R.</p>
                        <p>"How do I beat Celestia ? i am dying dude ! she is so fucking annoying holy."</p>
                    </div>
                        <p class="date">Posted on August 16, 2023</p>
                </section>
        
                <section class="bord">
                    <div class="comment">
                        <p class="names">Olivia P.</p>
                        <p>"StormBreaker is the best weapon. Change my mind."</p>
                    </div>
                        <p class="date">Posted on August 17, 2023</p>
                </section>
        
                <section class="bord">
                    <div class="comment">
                        <p class="names">Liam K.</p>
                        <p>"I love Ragna"</p>
                    </div>
                        <p class="date">Posted on August 18, 2023</p>
                </section>
        
                <section class="bord">
                    <div class="comment">
                        <p class="names">Ava H.</p>
                        <p>"I didn't know that i can fly with royal ! what a banger weapon !"</p>
                    </div>
                        <p class="date">Posted on August 19, 2023</p>
                </section>
            </section>
        </div>
        </div>
    </footer>
</body>
</html>
