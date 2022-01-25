<?php $page = 'titulinis'; ?>
<!-- HEADER -->
<?php include_once ('../app/views/header.php'); ?>
<main>


<!-- HERO -->
    <section class="hero-image">
        <div class="hero-text">
            <p>Rankų darbo<br>macramé dekoracijos iš lino</p>
            <h1>Kurkime namų<br>jaukumą kartu</h1>
            <button class="hero-button" onclick="window.location.href='parduotuve.php'">Pasisemkite idėjų</button>
        </div>
    </section>
<!-- HERO pabaiga-->



<!-- POPULIARIAUSI -->
<section class="populiariausi">

    <div class="container">

        <div class="section-heading">
            <h2>Populiariausi gaminiai</h2>
            <p>Nedidelis akcentas, kuris neabejotinai įneš šilumos ir jaukumo į jūsų namus. Arba bus graži dovana artimam asmeniui iškart atkeliausianti dailiame įpakavime. </p>
        </div>
        
        <div class="trys-prekes flex-container">

            <div class="preke">
                <div class="zoom-hover">
                    <img src="../app/images/populiariausi3.jpg" alt="Lininiai padėkliukai" width="240">
                </div>
                <p>Lininiai padėkliukai</p>
                <p>18 EUR</p>
            </div>

            <div class="preke">
                <div class="zoom-hover">                        
                    <img src="../app/images/populiariausi2.jpg" alt="Gėlių kabyklė" width="240">
                </div>
                <p>Lininė gėlių kabyklė</p>
                <p>25 EUR</p>
            </div>
            
            <div class="preke">
                <div class="zoom-hover">                        
                    <img src="../app/images/populiariausi7.jpg" alt="Lininis krepšiukas" width="240">
                </div>
                <p>Lininis krepšiukas</p>
                <p>35 EUR</p>
            </div>

        </div>

    </div>

</section>
<!-- POPULIARIAUSI pabaiga -->



<!-- INDIVIDUALŪS UŽSAKYMAI -->
<section class="ind-uzsakymai"> 

    <div class="ind-uzsakymai-text">
        <p>Įsivaizduojate šiek tiek kitaip?</p>
        <h1>Įgyvendinkime<br>jūsų idėją</h1>
        <button class="hero-button" onclick="window.location.href='individualus-uzsakymai.php'">Pamatykite galeriją<br>ir sužinokite daugiau</button>
    </div>

</section>
<!-- INDIVIDUALŪS UŽSAKYMAI pabaiga-->



<!-- YPATINGOS -->
<section class="populiariausi">

    <div class="container">

        <div class="section-heading">
            <h2>Ypatingos dekoracijos</h2>
            <p>Šios dekoracijos - mūsų pasididžiavimas, sulaukiančios daugiausiai jūsų dėmesio ir komplimentų. Gyvybės medeliai dažniausiai užsakomi kaip ypatinga dovana vestuvių, įkurtuvių, jubiliejaus ar naujo šeimos nario atėjimo proga. O mamos ir vaiko dekoracija įprasmins jautrų ir ypatingą tarpusavio ryšį.</p>
        </div>  

        <div class="trys-prekes flex-container">

            <div class="preke">
                <div class="zoom-hover">
                    <img src="../app/images/populiariausi1.jpg" alt="Gyvybės medelis" width="240">
                </div>
                <p>Dekoracija "Gyvybės medelis"</p>
                <p>95 EUR</p>
            </div>

            <div class="preke">
                <div class="zoom-hover">                        
                    <img src="../app/images/populiariausi6.jpg" alt="Gyvybės medelis" width="240">
                </div>
                <p>Dekoracija "Gyvybės medis"</p>
                <p>150 EUR</p>
            </div>
            
            <div class="preke">
                <div class="zoom-hover">                        
                    <img src="../app/images/populiariausi5.jpg" alt="Mama ir vaikas" width="240">
                </div>
                <p>Dekoracija "Mama ir vaikas"</p>
                <p>100 EUR</p>
            </div>

        </div>
        
    </div>

</section>
<!-- YPATINGOS dekoracijos -->



<!-- ATSILIEPIMAI -->
<section class="atsiliepimai">
    
    <div class="section-heading">
        <h2>Atsiliepimai</h2>
    </div>

    <div id="myCarousel" class="carousel"></div>
    
</section>
<!-- ATSILIEPIMAI pabaiga-->



<!-- INSTAGRAM FEED -->
<section class="instagram-feed">
    <div class="container flex-container">
        
        <div class="section-heading">
            <h2>Susitikime instagrame</h2>
            <p><em>Sekite <a href="https://www.instagram.com/linenknots" target="_blank">@linenknots</a></em></p>
        </div>
    <!-- SnapWidget.com -->
        <div class="snapwidget">
            <script src="https://snapwidget.com/js/snapwidget.js"></script>
            <iframe src="https://snapwidget.com/embed/976981" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
        </div>

    </div>
</section>
<!-- INSTAGRAM FEED pabaiga-->



<!-- NAUJIENLAIŠKIS -->
<div class="naujienlaiskis">
    <div class="container flex-container">
        <h3>Norite visas naujienas apie prekes ar nuolaidas gauti pirmieji?</h3>
        <p>Užsiregistruokite naujienlaiškiui ir gaukite 10% nuolaidos kodą savo pirmajam apsipirkimui!</p>
        <form class="flex-container">
            <input type="email" name="email" placeholder="Įveskite savo el. paštą" required>
            <button type="submit" name="submit-btn">Registruotis</button>
        </form>
    </div>
</div>  
<!-- NAUJIENLAIŠKIS pabaiga-->



</main>

<!-- FOOTER -->
<?php include_once ('../app/views/footer.php'); ?>
 
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="../app/js/carousel.js"></script> 


</body>

</html>