<?php
session_start();
include("connect.php");

$conn = mysqli_connect("db","shivam","shivam","login");

// Fetch the two latest uploaded images
$sql = "SELECT `image` FROM `images` ORDER BY id DESC LIMIT 10";
$result = mysqli_query($conn, $sql);

// Fetch the latest two images
$latest_images = [];
while ($row = mysqli_fetch_assoc($result)) {
    $latest_images[] = $row['image'];
}
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homex.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Netflix | Home</title>

    <style>
    .menu-list-item a {
    color: inherit; /* Use the same color as the menu item */
    text-decoration: none; /* Remove underline */
    }

    .menu-list-item a:hover {
    color: red; /* Optional: underline on hover */
    }
    </style>

</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <span class="logo"><img width="100" src="img/logo.png" alt=""></span>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    
                    <li class="menu-list-item active"><a href="">Movies</a></li>
                    <li class="menu-list-item active"><a href="">Series</a></li>
                    <li class="menu-list-item active"><a href="">Trending</a></li>
                    <li class="menu-list-item active"><a href="">Blockbuster</a></li>
                    <li class="menu-list-item active"><a href="payments.php">Pricing Plan</a></li>
                    <li class="menu-list-item active"><a href="contactus.php">Contact Us</a></li>
                    <li class="menu-list-item active"><a href="logout.php">Logout</a></li>

                </ul>
            </div>
            <div class="profile-container">
                <img class="profile-picture" src="img/PPP.png" alt="">
                <div class="profile-text-container">
                    <span class="profile-text"><?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p></span>
                    <i class="fas fa-caret-down"></i>
                </div>
                
                <div class="toggle">
                    <i class="fas fa-moon toggle-icon"></i>
                    <i class="fas fa-sun toggle-icon"></i>
                    <div class="toggle-ball"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <i class="left-menu-icon fas fa-search"></i>
        <i class="left-menu-icon fas fa-home"></i>
        <i class="left-menu-icon fas fa-users"></i>
        <i class="left-menu-icon fas fa-bookmark"></i>
        <i class="left-menu-icon fas fa-tv"></i>
        <i class="left-menu-icon fas fa-hourglass-start"></i>
        <i class="left-menu-icon fas fa-shopping-cart"></i>
    </div>
    <div class="container">
        <div class="content-container">
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/M2.png');">
            
                <h1 class="logo">Avengers: Endgame</h1>
                <p class="featured-desc">After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.</p>
                <button class="featured-button">WATCH</button>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">NEW RELEASES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="./image/<?php echo $latest_images[0]; ?>" alt="">
                        
                            <span class="movie-list-item-title">Iron Man</span>
                            <p class="movie-list-item-desc">When Tony Stark, an industrialist, is captured, he constructs a high-tech armoured suit to escape. 
                                then decides to use his suit to fight against evil forces to save the world.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="./image/<?php echo $latest_images[1]; ?>" alt="">
                        
                            <span class="movie-list-item-title">Spider Man</span>
                            <p class="movie-list-item-desc">Peter Parker tries to stop Adrian 'The Vulture' Toomes from selling weapons made with advanced 
                                Chitauri technology while trying to balance his life as an ordinary high school student.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="./image/<?php echo $latest_images[2]; ?>" alt="">
                            <span class="movie-list-item-title">Captain America</span>
                            <p class="movie-list-item-desc">During World War II, Steve Rogers decides to volunteer in an experiment that transforms his weak body. He must now battle a secret Nazi organisation headed by Johann Schmidt to defend his nation.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="./image/<?php echo $latest_images[3]; ?>" alt="">
                            <span class="movie-list-item-title">THOR</span>
                            <p class="movie-list-item-desc">Deprived of his mighty hammer Mjolnir, Thor must escape the other side of the universe to save his home, Asgard, from Hela, the goddess of death.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="./image/<?php echo $latest_images[4]; ?>" alt="">
                            <span class="movie-list-item-title">Doctor Strange</span>
                            <p class="movie-list-item-desc">In an accident, Stephen Strange, a famous neurosurgeon, loses the ability to use his hands. He goes to visit the mysterious Ancient One to heal himself and becomes a great sorcerer under her tutelage.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="./image/<?php echo $latest_images[5]; ?>" alt="">
                            <span class="movie-list-item-title">Shangchi</span>
                            <p class="movie-list-item-desc">Shang-Chi, a martial artist, lives a quiet life after he leaves his father and the shadowy Ten Rings organisation behind. Years later, he is forced to confront his past when the Ten Rings attack him.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="./image/<?php echo $latest_images[6]; ?>" alt="">
                            <span class="movie-list-item-title">Captain Marvel</span>
                            <p class="movie-list-item-desc">Amidst a mission, Vers, a Kree warrior, gets separated from her team and is stranded on Earth. However, her life takes an unusual turn after she teams up with Fury, a S.H.I.E.L.D. agent.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">TRENDING</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/M15.png" alt="">
                            <span class="movie-list-item-title">GOTG</span>
                            <p class="movie-list-item-desc">A bunch of skilled criminals led by brash adventurer Peter Quill join hands to fight a villain named Ronan the Accuser who wants to control the universe with the help of a mystical orb.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/M16.webp" alt="">
                            <span class="movie-list-item-title">Thor Ragnarok</span>
                            <p class="movie-list-item-desc">Deprived of his mighty hammer Mjolnir, Thor must escape the other side of the universe to save his home, Asgard, from Hela, the goddess of death.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/M17.jpg" alt="">
                            <span class="movie-list-item-title">Spider-Man: NWH</span>
                            <p class="movie-list-item-desc">Spider-Man seeks the help of Doctor Strange to forget his exposed secret identity as Peter Parker. However, Strange's spell goes horribly wrong, leading to unwanted guests entering their universe.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/M18.jpg" alt="">
                            <span class="movie-list-item-title">Doctor Strange: MoM</span>
                            <p class="movie-list-item-desc">Doctor Strange teams up with a mysterious teenage girl from his dreams who can travel across multiverses, to battle multiple threats, including other-universe versions of himself, which threaten to wipe out millions across the multiverse.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/M19.webp" alt="">
                            <span class="movie-list-item-title">Shang-Chi: LOTR</span>
                            <p class="movie-list-item-desc">Shang-Chi, a martial artist, lives a quiet life after he leaves his father and the shadowy Ten Rings organisation behind. Years later, he is forced to confront his past when the Ten Rings attack him.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/M27.jpg" alt="">
                            <span class="movie-list-item-title">ShangChi</span>
                            <p class="movie-list-item-desc"></p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/M3.png" alt="">
                            <span class="movie-list-item-title">Captain Marvel</span>
                            <p class="movie-list-item-desc"></p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/M101.jpg');">
                <h1 class="logo">Avengers: Infinity War</h1>
                <p class="featured-desc">The Avengers must stop Thanos, an intergalactic warlord, from getting his hands on all the infinity stones. However, Thanos is prepared to go to any lengths to carry out his insane plan.</p>
                <button class="featured-button">WATCH</button>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">MOVIES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/M25.jpg" alt="">
                            <span class="movie-list-item-title">Black-Panther</span>
                            <p class="movie-list-item-desc">After his father's death, T'Challa returns home to Wakanda to inherit his throne. However, a powerful enemy related to his family threatens to attack his nation.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/M23.jpg" alt="">
                            <span class="movie-list-item-title">Godzilla vs. Kong</span>
                            <p class="movie-list-item-desc">King Kong is transported out of his containment zone after Godzilla resurfaces and creates mayhem. Humans need his help to reach Hollow Earth and find a way to subdue the king of the monsters.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/M28.png" alt="">
                            <span class="movie-list-item-title">Thor: Love & Thunder</span>
                            <p class="movie-list-item-desc">Thor enlists the help of Valkyrie, Korg and ex-girlfriend Jane Foster to fight Gorr the God Butcher, who intends to make the gods extinct.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/M22.jpg" alt="">
                            <span class="movie-list-item-title">Ant-Man: Quantumania</span>
                            <p class="movie-list-item-desc">Ant-Man and the Wasp find themselves exploring the Quantum Realm, interacting with strange new creatures and embarking on an adventure that pushes them beyond the limits of what they thought was possible.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/M26.jpg" alt="">
                            <span class="movie-list-item-title">Spider-Man: Far From Home</span>
                            <p class="movie-list-item-desc">Peter Parker, the beloved superhero Spider-Man, faces four destructive elemental monsters while on holiday in Europe. Soon, he receives help from Mysterio, a fellow hero with mysterious origins.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/M27.jpg" alt="">
                            <span class="movie-list-item-title">Black Panther: Wakanda Forever</span>
                            <p class="movie-list-item-desc">Queen Ramonda, Shuri, M'Baku, Okoye and the Dora Milaje fight to protect their nation from intervening world powers in the wake of King T'Challa's death. As the Wakandans strive to embrace their next chapter, the heroes must band together with Nakia and Everett Ross to forge a new path for their beloved kingdom.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/M24.jpg_large" alt="">
                            <span class="movie-list-item-title">Eternals</span>
                            <p class="movie-list-item-desc">The Eternals, a race of immortal beings with superhuman powers who have secretly lived on Earth for thousands of years, reunite to battle the evil Deviants.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">WEB SERIES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/S1.jpg" alt="">
                            <span class="movie-list-item-title">WandaVision</span>
                            <p class="movie-list-item-desc">Vision and Wanda live a normal life in Westview and conceal their superpowers. However, as decades pass by, they start doubting that everything is not what it seems.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/S2.jpg" alt="">
                            <span class="movie-list-item-title">Falcon & the Winter Soldier</span>
                            <p class="movie-list-item-desc">Falcon and the Winter Soldier are a mismatched duo who team up for a global adventure that will test their survival skills -- as well as their patience.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/S3.jpeg" alt="">
                            <span class="movie-list-item-title">Loki</span>
                            <p class="movie-list-item-desc">After stealing the Tesseract, Loki comes into contact with a mysterious organization that gives him an ominous ultimatum, either fix the timeline or cease to exist completely.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/S4.jpg" alt="">
                            <span class="movie-list-item-title">What If...?</span>
                            <p class="movie-list-item-desc">Reimagining noteworthy events in the Marvel Cinematic Universe and creating a multiverse of infinite possibilities.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/S5.webp" alt="">
                            <span class="movie-list-item-title">Hawkeye</span>
                            <p class="movie-list-item-desc">Clint Barton and Kate Bishop shoot a few arrows and try to avoid becoming the target themselves.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/S6.webp" alt="">
                            <span class="movie-list-item-title">Daredevil</span>
                            <p class="movie-list-item-desc">Matt Murdock manages to overcome the challenges that he faces due to him being blind since childhood and fights criminals as a lawyer and Daredevil.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/S7.webp" alt="">
                            <span class="movie-list-item-title">Secret Invasion</span>
                            <p class="movie-list-item-desc">Nick Fury learns of a secret invasion of Earth by a faction of shapeshifting Skrulls; Fury joins his allies, and together they race against time to thwart an imminent Skrull invasion and save humanity.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>