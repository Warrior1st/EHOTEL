<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ehotel</title>
    <link rel ="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="reservation.html"><span> E</span>hotel</a>
        </div>
        <ul class="menu">
            <li> <a href="reservation.html"> Accueil</a></li>
            <li> <a href="#Reserver"> Reservation</a></li>
            <li> <a href="inscription.html">S'inscrire</a></li>
            <li> <a href="#contact"> A propos</a></li>

        </ul>
        <style>
            button {
              display: inline-block;
              background-color: #29d9d5;
              border-radius: 10px;
              border: 2px double #cccccc;
              color: #eeeeee;
              text-align: center;
              font-size: 10px;
              padding: 10px;
              width: 100px;
              transition: all 0.5s;
              cursor: pointer;
              margin: 5px;
            } 
          </style>
        </head>
        <body>
        
    
            <button onclick="window.location.href='http://localhost/EHOTEL/connexion.html'">LOGIN</button>
    </header>
    <!--acceuil section-->
    <section id="home">
        <h2> nous suivre</h2>
        <h4>reserver en toute confiance</h4>
        <p>pour un sejour agreable.</p>
        <p> vous satisfaire est notre devoir.</p>
        <a href="#" class="btn-reservation"> Réserver Maintenant</a>
        
    </section>
    <!--A propos section-->
    <section id="Reserver">
        <h1 class="title"> Reserver</h1>
        <div class="img-desc">
            <div class="center">
                <div class="find_room">
                    <form action="reservation.php" method="post">
                        <div>
                            <label>hotel</label>
                            <input type="text" name="hotel" placeholder="entrez un hotel">
                        </div>
                        <div>
                            <label>emplacement</label>
                            <input type="text" name="adresse" placeholder="entrez un emplacement">
                        </div>
                        <div>
                            <label>caracteristique</label>
                            <input type="text" name="caracteristique" placeholder="entrez une caracteristique" >
                        </div>
                            <input type="submit" value="voir">
                    </form>
                    <?php
                    session_start();
                    if(isset($_SESSION['hotels'])) {
                        $hotels = $_SESSION['hotels'];
                        foreach($hotels as $hotel) {
                            echo "<p>Name: " . $hotel['name'] . "</p>";
                            echo "<p>Phone: " . $hotel['phone'] . "</p>";
                        }
                        unset($_SESSION['hotels']);
                    }
                    ?>
                </div>
            </div>
            
        </div>
        
           
    </section>
    <!--section reservation-->
    <section id="popular-reservation">
        <h1 class="title"> reservations populaires</h1>
        <div class=" content">
             <!--box-->
            <div class="box">
                <img src="images/auberge.png" alt="">
                <div class="content">
                    <div>
                        <h4>Auberge</h4>
                        <p>se detendre fait toujours du bien</p>
                        <p>Des hôtels servis avec style</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!--box-->
             <!--box-->
             <div class="box">
                <img src="images/casino.png" alt="">
                <div class="content">
                    <div>
                        <h4>Casino</h4>
                        <p>se detendre fait toujours du bien</p>
                        <p>Des hôtels servis avec style</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!--box-->
             <!--box-->
             <div class="box">
                <img src="images/luxe.png" alt="">
                <div class="content">
                    <div>
                        <h4>Luxe</h4>
                        <p>se detendre fait toujours du bien</p>
                        <p>Des hôtels servis avec style</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!--box-->
             <!--box-->
             <div class="box">
                <img src="images/ephemere.JPG" alt="">
                <div class="content">
                    <div>
                        <h4>Ephemere</h4>
                        <p>se detendre fait toujours du bien</p>
                        <p>Des hôtels servis avec style</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!--box-->
            <!--box-->
            <div class="box">
                <img src="images/passage.png" alt="">
                <div class="content">
                    <div>
                        <h4>Passage</h4>
                        <p>se detendre fait toujours du bien</p>
                        <p>Des hôtels servis avec style</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!--box-->
            <!--box-->
            <div class="box">
                <img src="images/economique.png" alt="">
                <div class="content">
                    <div>
                        <h4>Economie</h4>
                        <p>se detendre fait toujours du bien</p>
                        <p>Des hôtels servis avec style</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
            </div>
            <!--box-->
            
        </div>
    </section>
    <!--contact section-->
    <section id="contact">
        <h1 class="title"> Contact</h1>
        <form action="">
            <div class="left-right">
                <div class="left">
                    <label>Nom Complet</label>
                    <input type="text">
                    <label>Objet</label>
                    <input type="text">
                    <label>Email</label>
                    <input type="text">
                    <label>Message</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    
                </div>
                <div class="right">
                    <label>Numero</label>
                    <input type="text">
                    <label>Date</label>
                    <input type="text">
                    <label>Autres Details</label>
                    <input type="text">
                    <label>Adresse</label>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d22640.448747666098!2d-79.46775745!3d43.73956195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sca!4v1679264037256!5m2!1sfr!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <button>Envoyer</button>
        </form>
    </section>
    
    
</body>
</html>