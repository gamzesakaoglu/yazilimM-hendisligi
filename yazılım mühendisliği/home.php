<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- css swipwer link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

   <!-- font awasome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   <!-- custom css file link -->
   <link rel="stylesheet" href="style.css">

   
</head>
<body>


    <!--header section starts -->

    <section class="header">

    <a href="home.php" class="logo">travel.</a>

    <nav class="navbar">
        <a href="home.php">anasayfa</a>
        <a href="about.php">hakkımızda</a>
        <a href="package.php">paketler</a>
        <a href="book.php">rezervasyon</a>

    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>


    </section>

    <!--header section ends -->

    <!-- home section starts-->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide slide" style="background:url(img/home-slide-1.jpg)  ">
                    <div class="content">
                        <span>keşfetmek, seyahat etmek</span>
                        <h3>dünya çapında seyahat</h3>
                        <a href="package.php" class="btn">daha fazla keşfedin</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(img/home-slide-2.jpg) ">
                    <div class="content">
                        <span>keşfetmek, seyahat etmek</span>
                        <h3>yeni yerleri keşfedin</h3>
                        <a href="package.php" class="btn">daha fazla keşfedin</a>
                    </div>
                </div>


                <div class="swiper-slide slide" style="background:url(img/home-slide-3.jpg) ">
                    <div class="content">
                        <span>keşfetmek, seyahat etmek</span>
                        <h3>turunuzu değerli kılın</h3>
                        <a href="package.php" class="btn">daha fazla keşfedin</a>
                    </div>
                </div>


            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>



    <!--home section ends-->

    <!--services section starts-->

    <section class="services">
        <hı class="heading-title"> hİzmetlerİmİz </h1>
        
        <div class="box-container">

            <div class="box">
                <img src="img/icon-1.png" alt="">
                <h3>macera</h3>
            </div>

            <div class="box">
                <img src="img/icon-2.png" alt="">
                <h3>rehber</h3>
            </div>

            <div class="box">
                <img src="img/icon-3.png" alt="">
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="img/icon-4.png" alt="">
                <h3>kamp ateşi</h3>
            </div>

            <div class="box">
                <img src="img/icon-5.png" alt="">
                <h3>arazi</h3>
            </div>

            <div class="box">
                <img src="img/icon-6.png" alt="">
                <h3>kamp</h3>
            </div>

        </div>

    </section>

    <!--services section ends-->



    <!-- home about section starts -->

    <section class="home-about">

    <div class="image">
        <img src="img/about_image1.jpg" alt="">
    </div>

    <div class="content">
        <h3>hakkımızda</h3>
        <p>Seyahat ve turizm endüstrisi, dünya genelinde önemli bir ekonomik faaliyet alanıdır ve her yıl milyonlarca insan tatil yapmak veya farklı yerleri keşfetmek için seyahat eder.Bazı en popüler tatil tercihleri şunlardır:</p>
        <p>Şehir tatili,Doğa tatili,Kültür tatili gibi tatilleri kapsamaktadır.</p>
        <a href="about.php" class="btn">daha fazla oku</a>

    </div>

    </section>

    <!-- home about section ends -->

    <!-- home packages section starts -->
    
    <section class="home-packages">

        <h1 class="heading-title">paketlerimiz</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="img/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Deniz Kıyısı Tatili</h3>
                    <p>Tatilinizi deniz kıyısında geçirmeye ne dersiniz? Harika manzara, lezzetli yemekler ve eğlenceli aktiviteler sizi bekliyor.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Gemi Tatili</h3>
                    <p>Dünyanın en güzel koylarında yelken açın, denizin özgürlüğünü keşfedin. Gemi tatili için şimdi rezervasyon yaptırın!</p>
                    <a href="book.php" class="btn">şimdi rezervasyon yap</a>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="img/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>paris sokakları</h3>
                    <p>Eiffel Kulesi'nin altında yürüyüş yapın, Seine Nehri'nde gezintiye çıkın, güzel sokakları keşfedin. Paris her yerde büyüleyici.</p>
                    <a href="book.php" class="btn">şimdi rezervasyon yap</a>
                </div>
            </div>

        </div>

        <div class="load-more"> <a href="package.php" class="btn">daha fazla yükle</a></div>

    </section>

    <!-- home packages section ends -->

    <!-- home offer section starts -->

    <section class="home-offer">
        <div class="content">
            <h3>% 50 'YE VARAN İNDİRİM</h3>
            <p>Tatil sezonu geldi ve siz hala tatil planınızı yapmadınız mı? O zaman doğru yerdesiniz! Şimdi, tatil paketlerinde %50'ye varan indirimlerden yararlanabilirsiniz. Tatil planınızı yapmak için hiçbir zaman geç değil ve size uygun birçok seçenek mevcut.</p>
            <a href="book.php" class="btn">şimdi rezervasyon yap</a>
        </div>
    </section>




    <!-- home offer section ends -->













<!--footer section starts -->
<section class="footer">
    <div class="box-container">

    <div class="box">
        <h3>hızlı linkler</h3>
        <a href="home.php">  <i class="fas fa-angle-right"></i> anasayfa</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i>hakkımızda</a>
        <a href="package.php"> <i class="fas fa-angle-right"></i>paketler</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i>rezervasyon</a>
    </div>


    <div class="box">
        <h3>extra links</h3>
        <a href="#">  <i class="fas fa-angle-right"></i> soru sorun </a>
        <a href="#">  <i class="fas fa-angle-right"></i> hakkımızda</a>
        <a href="#">  <i class="fas fa-angle-right"></i> gizlilik politikası </a>
        <a href="#">  <i class="fas fa-angle-right"></i> bize ulaşın </a>

    </div>

    <div class="box">
        <h3>contact info</h3>
        <a href="#">  <i class="fas fa-phone"></i> +90 555 555 55 55 </a>
        <a href="#">  <i class="fas fa-phone"></i> +90 555 111 22 33 </a>
        <a href="#">  <i class="fas fa-envelope"></i> gamzesaka7@gmail.com </a>
        <a href="#">  <i class="fas fa-map"></i> Turkey, Ankara - 06530  </a>

    </div>

    <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i>facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i>twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i>instagram </a>
        <a href="#"> <i class="fab fa-linkedin"></i>linkedin </a>


    </div>

    </div>

    <div class="credit"> Tasarlayan <span>Ms. Gamze Sakaoğlu</span> | tüm hakları saklıdır !</div>
   


</section>
<!--footer section ends -->










<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!--custom js file link -->
<script src="script.js"></script>

<!-- slider kısmı -->
<script>
 var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
}); 

</script>

    
</body>
</html>