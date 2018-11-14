<?php
include('inc/pdo.php');
include('inc/functions.php');
include('inc/requests.php');


$title = 'Accueil';
include('inc/header.php');?>
    <section class="section1">
        <h2>Bienvenue sur <span id="gris">vact</span><span id="vert">ualise</span></h2>
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="http://lorempixel.com/400/200/" />
                </li>
                <li>
                    <img src="http://lorempixel.com/400/200/sport/1" />
                </li>
                <li>
                    <img src="http://lorempixel.com/400/200/sport/2" />
                </li>
            </ul>
        </div>
    </section>


    <div class="wrap">
        <div id="content">
            <section class="section2">
                <p>Pourquoi le carnet de vaccination électronique ?</p>
                <ul>
                    <li>Simple, pratique et gratuit</li>
                    <li>Centralisez les vaccins de toute la famille</li>
                    <li>Confidentiel et sécurisé</li>
                    <li>Independant des firmes pharmaceutiques</li>
                </ul>
<!--                <a href="http://www.vaccinesafetynet.org/#gsc.tab=0" target="_blank">-->
<!--                    <img src="asset/img/vaccine_safety_net.png" alt="Vaccine Safety Net Member">-->
<!--                </a>-->
            </section>
        </div>
    </div>


<?php include('inc/footer.php');
