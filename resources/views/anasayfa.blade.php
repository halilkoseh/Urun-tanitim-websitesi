<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra Sistem</title>
    <link rel="icon" href="images/unnamed-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojione/4.5.0/emojione.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand navbar-logo" href="#anasayfa">
                    <img src="images/unnamed-removebg-preview1.png" alt="logo" class="logo-1">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <i class="fa-solid fa-bars" style="color: #000000;"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"> <a class="nav-link" data-scroll-nav="0" href="#anasayfa">Anasayfa</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-scroll-nav="1" href="#about">Hakkımızda</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-scroll-nav="2" href="#service">Hizmetler</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-scroll-nav="5" href="#sss">SSS</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-scroll-nav="4" href="#refrance">Referanslar</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-scroll-nav="6" href="#iletisim">İletişim</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="https://extrasistem.com/register">Kayıt Ol | Giriş Yap</a> </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('anasayfa') }}">
                                <img src="https://media.istockphoto.com/id/1053420278/tr/vekt%C3%B6r/t%C3%BCrk-bayra%C4%9F%C4%B1-do%C4%9Fru-oranlar%C4%B1-vekt%C3%B6r.jpg?s=612x612&w=0&k=20&c=tm7M6ziGeCG3G_GLzaEyY5kBYGYd1dSKZXlUdPKXSds="
                                    alt="Türk Bayrağı" height="17" width="29">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('flag') }}">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_the_United_Kingdom_%283-5%29.svg/640px-Flag_of_the_United_Kingdom_%283-5%29.svg.png"
                                    alt="İngiltere Bayrağı" height="16" width="28">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var navbarItems = document.querySelectorAll('.navbar-nav .nav-link');
                navbarItems.forEach(function (item) {
                    item.addEventListener('click', function () {
                        var navbarCollapse = document.querySelector('.navbar-collapse');
                        navbarCollapse.classList.remove('show');
                    });
                });
            });
        </script>

<section class="banner" data-scroll-index='0' id="anasayfa">
    <div class="banner-overlay">
        <video autoplay loop muted class="banner-video">
            <source src="images/1477080_People_Business_3840x2160 (1).mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>


        <div class="container">
            <!-- İçerikler buraya gelecek -->
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="banner-text">
                        <h2 class="white"><br><br>Yönetimde Artık Kargaşaya Mahal Yok </h2>
                        <br>
                        <h5 class="white">Şirketinizi bir arada yönetin, <br>verimliliği yapay zeka destekli <a
                                href="http://extrasistem.com" target="_blank" rel="dofollow"
                                class="weblink">Extra Sistem</a>'de
                            buluşturun!</h5>
                        <p class="banner-text white">Extra Sistem, işletmelerin insan kaynakları yönetimini
                            kolaylaştıran bir
                            yazılım çözümüdür. <br> <br> Bu güçlü bir insan kaynakları uygulaması ile personel
                            takibi, izin
                            yönetimi, performans değerlendirmesi, bordro hesaplama ve puantaj süreçleri tek bir
                            yerden
                            yönetebilir, iş verimliliğinizi artırabilirsiniz. <br> <br> Mobil uygulama ve Web
                            sitesi ile
                            her zaman her yerde
                            erişilebilir. İşletmenizin büyümesine ve başarısına katkıda bulunur. Her şey tek bir
                            yazılımda ...
                        </p>
                        <ul>
                            <li><a href="https://apps.apple.com/app/id6476713470"><img src="images/appstore.png"
                                        class="wow fadeInUp" data-wow-delay="0.4s" /></a></li>
                            <li><a href="https://play.google.com/store/apps/details?id=com.mfeteknoloji"><img
                                        src="images/playstore.png" class="wow fadeInUp" data-wow-delay="0.7s" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <img src="images/iphone-screen.png" class="img-fluid wow fadeInUp" height="500" width="500" />
                </div>
            </div>
        </div>
    </div>
    <span class="svg-wave"> </span>
</section>










  <section class="about section-padding prelative" data-scroll-index='1' id="about" style="background-color: #F5F5F7">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectioner-header text-center">
            <h3>Hakkımızda</h3>
            <span class="line"></span>
            <p>
              Extra Sistem, işletmelerin personel yönetimini kolaylaştırmayı amaçlayan bir mobil uygulamadır. Güçlü
              özelliklere ve kullanıcı dostu arayüze sahiptir. <br> <br> Personelin izin durumu, performans
              değerlendirmeleri gibi birçok önemli bilgiyi anlık olarak takip etme imkanı sunar, iş verimliliğini
              artırmaya yönelik ideal bir çözümdür.
              <br> <br> Extra Sistem, MFE Teknoloji A.Ş. tarafından geliştirilen güçlü bir insan kaynakları çözümüdür.
            </p>
          </div>
          <div class="section-content text-center">
            <div class="row">
              <div class="col-md-4">
                <div class="icon-box wow fadeInUp" data-wow-delay="0.2s"> <i class="fa fa-life-ring"
                    aria-hidden="true"></i>
                  <h5>Destek</h5>
                  <p>Entegrasyon, eğitim, güvenlik ve güncellemeler ile daima yanınızdayız.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="icon-box wow fadeInUp" data-wow-delay="0.4s"> <i class="fa fa-mobile"
                    aria-hidden="true"></i>
                  <h5>Çapraz Platform </h5>
                  <p> Mobil uygulama ile her zaman her yerde kolayca erişim sağlayabilirsiniz.
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="icon-box wow fadeInUp" data-wow-delay="0.6s"> <i class="fa fa-bolt" aria-hidden="true"></i>
                  <h5>Hızlı</h5>
                  <p>Verimliliği artırın ve iş süreçlerinizi hızlandırın..</p>
                </div>
              </div>

        </div>
      </div>
    </div>
  </section>



<!-- Pricing Table -->
<section class="pricing-table section" style="background-color: #fff">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2><br> <br> Güçlü iş süreçleri için <span style="color:#343A40;">Extra Sistem</span> yanınızda</h2>
                    <span class="line"></span>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Table -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="single-table">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="icon">
                            <i class="fa-sharp fa-solid fa-clipboard-list"></i>                             </div>
                        <h4 class="title"></h4>
                        <div class="price">
                            <p class="amount">Planlama<span></span></p>
                        </div>
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li><strong> Puantajı tek ekranda takip edin</li>
                        <li>İzin süreçlerini kolayca yönetin</li>
                        <li></i> <br>Çalışan bilgilerini tek bir yerde toplayın <br>    </strong></li>


                    </ul>

                    <!-- Table Bottom -->
                </div>
            </div>
            <!-- End Single Table-->
            <!-- Single Table -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="single-table">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="icon">
                            <i class="fa-solid fa-user-check"></i>                        </div>
                        <h4 class="title"></h4>
                        <div class="price">
                            <p class="amount">Takip Etme<span></span></p>
                        </div>
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li><strong> tıkla tüm vardiyayı düzene sokun<br></li>
                        <li>Bilgilerinizi tek tıkla raporlayın</li>
                        <li></i> <br> Performans değerlendirme raporları <br><br> </strong></li>

                    </ul>

                    <!-- Table Bottom -->
                </div>
            </div>
            <!-- End Single Table-->
            <!-- Single Table -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="single-table">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="icon">
                            <i class="fa-solid fa-sitemap"></i>                        </div>
                        <h4 class="title"></h4>
                        <div class="price">
                            <p class="amount">Organizasyon<span></span></p>
                        </div>
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li><strong>Kullanıcı Yönetimi ve Yetkilendirme</</li>
                        <li>İşe Alım ve İşe Yerleştirme Yönetimi</li>
                        <li></i>İş Sağlığı Güvenliği ve SGK Belge Dökümleri Yönetimi</strong></li>

                    </ul>

                    <!-- Table Bottom -->
                </div>
            </div>
            <!-- End Single Table-->
        </div>
    </div>
</section>
<!--/ End Pricing Table -->




 <p>  <br>

 </p>

  <section class="feature section-padding" data-scroll-index='2' id="service" style="background-color: #F5F5F7">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectioner-header text-center">
            <h3>Hizmetler</h3>
            <span class="line"></span>
            <p> Şirketinizi bir arada yönetin, başarıyı tek bir <strong>Extra Sistem </strong>'de buluşturun! <br> Her
              şey tek bir yazılımda
            </p>
          </div>
          <div class="section-content text-center">
            <div class="row">
              <div class="col-md-4 col-sm-12">
                <div class="media single-feature wow fadeInUp" data-wow-delay="0.2s">

                  <div class="media-body text-right media-right-margin">
                    <h5>İşe Alım ve İstihdam Yönetimi</h5>
                    <p>İşe alım süreçlerini düzenleme, aday havuzunu genişletme, mülakatları planlama ve işe alım
                      raporları görüntüleme.</p>
                  </div>
                  <div class="media-right icon-border"> <i class="fa fa-handshake-o larger-icon" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="media single-feature wow fadeInUp" data-wow-delay="0.4s">


                  <div class="media-body text-right media-right-margin">
                    <h5>Personel Bilgi Yönetimi</h5>
                    <p>Çalışan bilgilerini güncel tutma, personel dosyaları oluşturma, iletişim bilgilerini, eğitim
                      durumlarını, yetkinlikleri ve sertifikaları takip etme.</p>
                  </div>
                  <div class="media-right icon-border">
                    <i class="fa fa-address-card larger-icon" aria-hidden="true"></i>
                  </div>
                </div>


                <div class="media single-feature wow fadeInUp" data-wow-delay="0.6s">
                  <div class="media-body text-right media-right-margin">


                    <h5>İzin ve Performans Yönetimi</h5>
                    <p>Çalışan gelişimini değerlendirme, performans yönetimini güçlendirme, hedefleri belirleme, geri
                      bildirim alma , izin takibi ve ödüllendirme.</p>
                  </div>
                  <div class="media-right icon-border">
                    <i class="fa fa-calendar-minus-o larger-icon" aria-hidden="true"></i>
                  </div>
                </div>
              </div>


              <div class="col-md-4 d-none d-md-block d-lg-block"> <br> <br> <br> <br> <br> <br>
                <div class="feature-mobile"> <img src="images/iphone-screen-with-shadow.png"
                    class="img-fluid wow fadeInUp" /> </div>
              </div>
              <div class="col-md-4 d-block d-md-none">
                <div class="feature-mobile"> <img src="images/iphone-screen-with-shadow.png"
                    class="img-fluid wow fadeInUp" /> <br> <br> <br> </div>
              </div>


              <div class="col-md-4 col-sm-12">
                <div class="media single-feature wow fadeInUp" data-wow-delay="0.2s">
                  <div class="media-left icon-border media-right-margin">

                    <i class="fa fa-line-chart larger-icon" aria-hidden="true"></i>
                  </div>

                  <div class="media-body text-left">
                    <h5>Bordro ve İnsan Kaynakları Analitikleri</h5>
                    <p> Çalışan maaşlarının maliyet hesaplamasını yapma, yasal uyumluluğu sağlama, İK raporları ve iş
                      gücü maliyetini sunma, verileri analiz etme.</p>
                  </div>
                </div>




                <div class="media single-feature wow fadeInUp" data-wow-delay="0.4s">
                  <div class="media-left icon-border media-right-margin">
                    <i class="fa fa-cubes larger-icon" aria-hidden="true"></i>
                  </div>
                  <div class="media-body text-left">
                    <h5>Eğitim ve Gelişim Takibi</h5>
                    <p>Çalışanların eğitim ihtiyaçlarını belirleme, planlar oluşturma, eğitimleri takip etme, sonuçları
                      değerlendirme ve raporları görüntüleme.</p>
                  </div>
                </div>




                <div class="media single-feature wow fadeInUp" data-wow-delay="0.6s">
                  <div class="media-left icon-border media-right-margin">
                    <i class="fa fa-mobile larger-icon"></i>
                  </div>
                  <div class="media-body text-left">
                    <h5>Mobil Uygulama</h5>
                    <p>Mobil uygulama ve Web sitesi ile her zaman her yerde kolayca erişim sağlayabilme.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  </head>


  <section class="video-section prelative text-center white">
    <div class="section-padding video-overlay">
      <div class="container">
        <h3>Tanıtımı İzle </h3>
        <br><br>
        <i class="fa fa-play" id="video-icon" aria-hidden="true"></i>
        <div class="video-popup">
          <div class="video-src">
            <div class="iframe-src">
              <iframe src="images/WhatsApp Video 2024-02-12 saat 18.55.19_4c1c60bb.mp4" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Add jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- SIKÇA SORULAN SORULAR -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    .answer {
        display: none;
    }
    .active .plus-icon::after {
        content: "🗘";
    }
    .question.active .plus-icon::after {
        content: "      ";
    }
</style>


<div class="faq-section" data-scroll-index='5'>
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="section-title">
                <h2>Sıkça Sorulan  <span class="accent-color">Sorular</span></h2>
                <span class="line"></span>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-6">
             <div class="faq-image">
                <img src="images/about-img.jpg" alt="Description of the image" style="height: 305px; width: 450px;">
            </div>
            <p> <br> </p>
          </div>
          <div class="col-md-6">
             <div class="faq-list">
                <div class="faq-item">
                   <div class="question">
                      <h5><span class="plus-icon">⮞</span> Extra Sistem nasıl çalışır ve nasıl kullanılır?</h5>
                   </div>
                   <div class="answer">
                      <p>Sistem, bir web tabanlı arayüz üzerinden erişilebilir. Yöneticiler ve çalışanlar belirli yetkilendirmeler doğrultusunda giriş yapabilir ve ilgili işlevleri kullanabilir. Kullanıcı dostu bir arayüzle tasarlanmıştır ve genellikle bir eğitim gerektirmez.</p>
                   </div>
                </div>
                <div class="faq-item">
                   <div class="question">
                      <h5><span class="plus-icon">⮞</span>  Extra Sistem hangi tür işletmeler için uygundur?</h5>
                   </div>
                   <div class="answer">
                      <p>Bu sistem, çeşitli endüstrilerde faaliyet gösteren ve çalışanlarının takibini ve yönetimini kolaylaştırmak isteyen her türlü işletme için uygundur. Örneğin, perakende, inşaat, sağlık, lojistik, otelcilik gibi sektörlerde kullanılabilir.</p>
                   </div>
                </div>
                <div class="faq-item">
                   <div class="question">
                      <h5><span class="plus-icon">⮞</span>  İzin süreçlerini nasıl yönetebilirim?</h5>
                   </div>
                   <div class="answer">
                      <p>Sistem, çalışanların izin taleplerini kolayca yapmalarını ve yöneticilerin bu talepleri onaylamasını veya reddetmesini sağlar. İzin dengesi, kullanılan izinlerin izlenmesi ve raporlanması gibi özellikler de bulunur.</p>
                   </div>
                </div>
                <div class="faq-item">
                   <div class="question">
                      <h5><span class="plus-icon">⮞</span> Ne tür bilgileri Extra Sistem ile takip edebilirim?</h5>
                   </div>
                   <div class="answer">
                      <p>Sistem, çalışan bilgileri, izinler, puantaj, performans değerlendirmeleri, vardiya düzenlemeleri, raporlar ve daha fazlasını takip etmenizi sağlar.</p>
                   </div>
                </div>
                <div class="faq-item">
                   <div class="question">
                      <h5><span class="plus-icon">⮞</span>Çalışan bilgilerini  güvenli  şekilde saklıyorsunuz?</h5>
                   </div>
                   <div class="answer">
                      <p>Sistem, güvenlik standartlarına uygun bir şekilde tasarlanmış ve veri güvenliğini sağlamak için gerekli önlemler alınmıştır. Veritabanı şifrelemesi, erişim kontrolü ve diğer güvenlik önlemleri kullanılır.</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>









<section class="download section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center white">
          <h3>Mobil Uygulamamızı Edinin</h3>
          <span class="line"></span>
          <p class="white"><a href="https://extrasistem.com"><span style="color: rgb(255, 255, 255);"> <br> <br>Extra Sistem</span></a> 'i
            tüm uygulama mağazalarından indirebilirsiniz.</p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="section-content text-center">
          <ul>
            <li><a href="https://apps.apple.com/app/id6476713470"><img src="images/appstore.png"
                  class="wow fadeInUp" data-wow-delay="0.4s" /></a></li>
            <li><a href="https://play.google.com/store/apps/details?id=com.mfeteknoloji"><img
                  src="images/playstore.png" class="wow fadeInUp" data-wow-delay="0.7s" /></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


    <section class="client_section layout_padding"  id="refrance" style="background-color: #F5F5F7">


        <div class="container">
            <div class="row"  data-scroll-index='4'>
              <div class="col-md-12">
                <div class="sectioner-header text-center black">
                  <h2><br> <br>Referanslar</h2>
                  <span class="line"></span>
                  <p>Extra Sistem'de müşteri memnuniyeti önceliklidir, en iyisi olmayı hedefler, insan kaynaklarına önem verir, sürekli gelişimi amaçlar ve çevre bilinciyle sorumluluk taşır.</p>
                </div>
                <div id="carouselExampleControls" class="section-content" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="detail-box">
                        <h4>TOC Grup  A.Ş</h4>
                        <p> <br> </p>

                        <p><strong> Personel bilgilerini güvenli bir şekilde saklamamızı, izin yönetimini hızlıca yapmamızı sağlıyor. <br>Verimliliği artırıyor, kullanımı kolay ve destek ekibi hızlı. </strong></p>


                        <img src="images/user1.png" alt="">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="detail-box">
                        <h4>MFE Teknoloji A.Ş.</h4>
                        <p> <br> </p>

                        <p><strong>İnsan kaynakları ve muhasebe işleyişinde hayal ettiğimiz dijital dönüşümü gerçekleştirdik, <br>teşekkürler Extra Sistem ... <br>
</strong></p>
                        <img src="images/channels4_profile-removebg-preview.png" alt="">
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev"  role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next"  role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>

      </section>




      <section class="clients">
        <div class="container">
            <div class="client-logos">
            <img src="images/unnamed-removebg-preview - Kopya (2).png" alt="Client 1 Logo" width="100" height="90">
            <img src="images/channels4_profile-removebg-preview (3).png" alt="Client 2 Logo" width="90"  height="90">
            <img src="images/demirtassistem_logo-photoaidcom-invert-removebg-preview.png" width="140" alt="Client 3 Logo"  height="110">
            <img src="images/ALKAR_YENI_LOGO_MUTFAGINIZDAKI_ZENGINLIK_1691490722_1704281397-removebg-preview.png" width="140"  height="90" alt="Client 4 Logo">

        </div>
      </section>



      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="script.js"></script>

      <script>
        $(document).ready(function(){
            $(".faq-item .answer").hide();

            $(".faq-item .question").click(function(){
                $(this).toggleClass('active').next('.answer').slideToggle();
                if ($(this).hasClass('active')) {
                    $(this).find('.plus-icon').text('🗘'); // Tıklandığında
                } else {
                    $(this).find('.plus-icon').text('⮞'); // Kapatıldığında
                }
                $(".faq-item .question").not(this).removeClass('active').next('.answer').slideUp();
            });
        });
        </script>

     <style>
         .carousel-item {
             opacity: 0;
             transition: opacity 1s ease;
         }

         .carousel-item.active {
             opacity: 1;
         }
     </style>

     <script>
         document.addEventListener("DOMContentLoaded", function() {
             var carouselItems = document.querySelectorAll('.carousel-item');
             var currentIndex = 0;
             var intervalId;

             function slideNext() {
                 carouselItems[currentIndex].classList.remove('active');
                 carouselItems[currentIndex].style.opacity = 0; // Instantly set opacity to 0
                 currentIndex = (currentIndex === carouselItems.length - 1) ? 0 : currentIndex + 1;
                 carouselItems[currentIndex].classList.add('active');
                 setTimeout(function() {
                     carouselItems[currentIndex].style.opacity = 1; // Fade in after a longer delay
                 }, 500); // Adjust delay as needed
             }

             function slidePrev() {
                 carouselItems[currentIndex].classList.remove('active');
                 carouselItems[currentIndex].style.opacity = 0; // Instantly set opacity to 0
                 currentIndex = (currentIndex === 0) ? carouselItems.length - 1 : currentIndex - 1;
                 carouselItems[currentIndex].classList.add('active');
                 setTimeout(function() {
                     carouselItems[currentIndex].style.opacity = 1; // Fade in after a longer delay
                 }, 500); // Adjust delay as needed
             }

             document.querySelector('.carousel-control-prev').addEventListener('click', function() {
                 slidePrev();
                 clearInterval(intervalId); // Stop automatic sliding when user clicks prev button
             });

             document.querySelector('.carousel-control-next').addEventListener('click', function() {
                 slideNext();
                 clearInterval(intervalId); // Stop automatic sliding when user clicks next button
             });

             // Start automatic sliding
             intervalId = setInterval(slideNext, 5000); // Slide every 5 seconds
         });
     </script>




      <p>   <br>
         <span class="line"></span><br>  </p>




        <div id="service" class="three_box">
            <div class="container">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Soft-box">
                    <i><img src="images/service1.png" alt="Service 1" /></i>
                    <h3>Hedefler ve Stratejiler</h3>
                    <p>   Yol haritanızı daima koruyarak hedeflerinize ulaşmanızı sağlayan bir rehber  ön plana çıkar.</p>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Soft-box">
                    <i><img src="images/service2.png" alt="Service 2" /></i>
                    <h3>Kaynak Yönetimi</h3>
                    <p>İşletmenin finansal ve insan kaynakları gibi kritik kaynaklarını etkin bir şekilde yönetmeyi sağlar.  </p>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Soft-box">
                    <i><img src="images/service3.png" alt="Service 3" /></i>
                    <h3>Veri Yönetimi</h3>
                    <p>İşletmenin  veri yönetimine dayalı olan süreçlerini kolaylaştırır. Veri tabanı ve güvenliği  gibi temel bileşenleri içerir.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    var elementsToShow = document.querySelectorAll('.col-xl-4');

    function loop() {
        elementsToShow.forEach(function(element) {
            if (isElementInViewport(element)) {
                element.classList.add('animate');
            } else {
                element.classList.remove('animate');
            }
        });

        scroll(loop);
    }

    loop();

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function scroll(callback) {
        window.addEventListener('scroll', callback);
    }
});
</script>




    <section class="contact section-padding" data-scroll-index='6' id="iletisim">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="sectioner-header text-center">
                <h3>Bizimle İletişime Geçin</h3>
                <span class="line"></span>
                <p>Her konuda size yardımcı olabilmek adına, ürün ve hizmetlerimizle ilgili öneri ve taleplerinizi değerlendirmek için buradayız. Tüm çözüm kanallarımızla sizlere en kısa sürede yanıt verebilmek amacıyla bize dilediğiniz yöntemle ulaşabilir, tüm sorularınıza hızlıca çözüm bulabilirsiniz</p>
              </div>
              <div class="section-content">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-8">
                    <form id="contact_form" method="post" action="{{ route('newcontroller.store') }}">
                      @csrf
                      <div class="row">
                        <div class="col">
                          <input type="text" id="your_name" class="form-input w-100" name="nameSurname" placeholder="Adınız ve Soyadınız" required>
                        </div>
                        <div class="col">
                          <input type="email" id="email" class="form-input w-100" name="email" placeholder="E-Mail Adresiniz" required>
                        </div>
                      </div>
                      <input type="text" id="subject" class="form-input w-100" name="title" placeholder="Konuyu Giriniz">
                      <textarea class="form-input w-100" id="message" placeholder="Mesajınızı bırakınız, en kısa sürede geri dönüş yapacağız." name="message"></textarea>
                      <button id="submitBtn" class="btn-grad w-100 text-uppercase" name="button">Gönderㅤ<i class="fa-regular fa-paper-plane"></i></button>
                    </form>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-4">

                    <div class="col-md-6">
                        <div class="map_container" style="width: 330px;">
                            <div class="map" style="border: 2px solid#6C757D; border-radius: 10px; overflow: hidden;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.15416949897!2d29.11114417652935!3d41.021882918586336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa504bba49687%3A0x7aad4c2252c6f958!2sMFE%20Teknoloji%20A.%C5%9E.!5e0!3m2!1str!2str!4v1707667782349!5m2!1str!2str" width="330" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



    <div id="popup" class="popup" align="center">
      <img src="images/pngwing.com (1).png" alt="Tik İşareti" class="tick-icon">
      <p>Mesajınız alınmıştır, teşekkür ederiz.</p>
    </div>



    <section class="info_section layout_padding2">


        <div class="container">


          <div class="row">




            <div class="col-md-3">
                <div class="info_detail">
                    <div style="text-align: center;">
                        <h4 style="color: #ffffff; font-size: 24px; margin-bottom: 20px;">   </h4>
                        <img src="images/unnamed-removebg-preview.png" style="height: 150px; width: 150px; border-radius: 50%;">
                    </div>
                    <div style="text-align: center; margin-top: 20px;">




                        <a href="https://twitter.com/extrasistem" style="margin-right: 10px;">
                            <img src="images/twitterr.png" alt="Twitter Icon" height="25">
                        </a>

                        <a href="https://www.instagram.com/extrasistem/" style="margin-right: 10px;">
                            <img src="images/instagrammm.png" alt="Instagram Icon" height="25">
                        </a>
                        <a href="https://www.youtube.com/@extrasistem" style="margin-right: 10px;">
                            <img src="images/youtubee.png" alt="YouTube Icon"
                                style="color: #FF0000; font-size: 12px; height:25px;">
                        </a>



                        <a href="https://www.linkedin.com/company/101549029/admin/feed/posts/">
                            <img src="images/pngwing.com (3).png" alt="LinkedIn Icon" height="27">
                        </a>








                    </div>
                </div>
            </div>



            <div class="col-md-3">




              <div class="info_contact">

                <h4>           <br>  <br>Bize Ulaşım
                </h4>
                <div class="contact_link_box">
                  <a href="">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                        Atakent, Mithatpaşa Cd. No:116 Istanbul Ümraniye 34670

                    </span>
                  </a>
                  <a href="">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                      (0216) 232 26 56
                    </span>
                  </a>
                  <a href="">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                        info@extrasistem.com
                    </span>
                  </a>
                </div>

              </div>

              <style>
                .info_social {
                    text-align: center;
                }
            </style>



            </div>
            <div class="col-md-3">
              <div class="info_link_box">
                <h4>
                    <br><br> Site Haritası
                </h4>
                <div class="info_links">
                  <a class="active" href="#anasayfa">
                    <img src="images/nav-bullet.png" alt="">
                    Anasayfa
                  </a>
                  <a class="" href="https://extrasistem.com">
                    <img src="images/nav-bullet.png" alt="">
                    Sisteme Giriş
                  </a>
                  <a class="" href="{{route('flag')}}">
                    <img src="images/nav-bullet.png" alt="">
                    Kayıt Ol | Giriş Yap
                  </a>
                  <a class="" href="price.html">
                    <img src="images/nav-bullet.png" alt="">
                    Destek | Geri Bildirim

                  </a>


                  </a>
                </div>
              </div>
            </div>






            <div class="col-md-3 mb-0">
              <h4>
                <br><br>   Haberdar Olayım <br>
              </h4>





              <form action="{{ route('subcontroller.store') }}" method="post">
                @csrf
                <input type="text" placeholder="E-Mail Giriniz" name="eposta" required/>
                <button type="submit">
                    Bültene Kayıt Ol
                </button>
                <br> <br><span style="color:#B9C1C9">ㅤㅤ</span>
            </form>










            </div>

          </div>

        </div>


      </section>

      <footer class="footer_section">
        <div class="container">
          <p>
            Telif Hakkı © 2024 Extra Sistem & MFE Teknoloji A.Ş.  Tüm hakları saklıdır.
        </div>
      </footer>


      {{-- <footer class="footer">
        <div id="button"></div>
        <div id="container">
          <div id="cont">
            <div class="footer_center">

            </div>
          </div>
        </div>

      </footer> --}}


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

      <script>
        function openVideoPopup() {
          var modal = document.getElementById('videoModal');
          modal.style.display = 'block';


          var videoContainer = document.getElementById('videoContainer');
          videoContainer.innerHTML = '<video id="popupVideo" width="100%" height="100%" controls muted>\
                                  <source src="images/videoplayback.mp4" type="video/mp4">\
                                  Your browser does not support the video tag.\
                                  </video>';
        }

        function closeVideoPopup() {
          var modal = document.getElementById('videoModal');
          var videoContainer = document.getElementById('videoContainer');

          modal.style.display = 'none';

          videoContainer.innerHTML = '';
        }
      </script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
        $(document).ready(function () {
          $('#myNavbar a').on('click', function () {
            $('#myNavbar').find('.active').removeClass('active');
            $(this).addClass('active');
          });
        });
      </script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script>
        document.addEventListener("DOMContentLoaded", function () {

          document.getElementById('popup').style.display = 'block';

          setTimeout(function () {
            document.getElementById('popup').style.display = 'none';
          }, 3000);
        });
      </script>


     <script src="https://www.youtube.com/iframe_api"></script>


      <div class="cookie-popup" id="cookiePopup">
        <p>Sitemizde teknik     olarak zorunlu olan çerezler kullanılmakta ve sizlere daha iyi bir hizmet sunabilmek için
          işlenmektedir. <br>
          Detaylı bilgi için <a
            href="https://www.kvkk.gov.tr/SharedFolderServer/CMSFiles/fb193dbb-b159-4221-8a7b-3addc083d33f.pdf"
            style="color:#ACADAF;">KVKK Aydınlatma Metni</a>'ni inceleyebilirsiniz.</p>
        <button class="cookie-btn" onclick="acceptCookies()">Anladım, kabul ediyorum</button>
      </div>
      <script>
        function getCookie(name) {
          let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
          return matches ? decodeURIComponent(matches[1]) : undefined;
        }

        function setCookie(name, value, options = {}) {
          options = {
            path: '/',
            ...options
          };

          if (options.expires instanceof Date) {
            options.expires = options.expires.toUTCString();
          }

          let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

          for (let optionKey in options) {
            updatedCookie += "; " + optionKey;
            let optionValue = options[optionKey];
            if (optionValue !== true) {
              updatedCookie += "=" + optionValue;
            }
          }

          document.cookie = updatedCookie;
        }

        function acceptCookies() {
          setCookie('acceptedCookies', 'true', {expires: new Date(Date.now() + 365 * 24 * 60 * 60 * 1000)});
          document.getElementById('cookiePopup').style.display = 'none';
        }

        window.onload = function () {
          if (!getCookie('acceptedCookies')) {
            document.getElementById('cookiePopup').style.display = 'block';
          }
        }
      </script>

      <script>
          (function (e) {"use strict"; var t = "ScrollIt", n = "1.0.3"; var r = {upKey: 38, downKey: 40, easing: "linear", scrollTime: 600, activeClass: "active", onPageChange: null, topOffset: 0}; e.scrollIt = function (t) {var n = e.extend(r, t), i = 0, s = e("[data-scroll-index]:last").attr("data-scroll-index"); var o = function (t) {if (t < 0 || t > s) return; var r = e("[data-scroll-index=" + t + "]").offset().top + n.topOffset + 1; e("html,body").animate({scrollTop: r, easing: n.easing}, n.scrollTime)}; var u = function (t) {var n = e(t.target).closest("[data-scroll-nav]").attr("data-scroll-nav") || e(t.target).closest("[data-scroll-goto]").attr("data-scroll-goto"); o(parseInt(n))}; var a = function (t) {var r = t.which; if (e("html,body").is(":animated") && (r == n.upKey || r == n.downKey)) {return false} if (r == n.upKey && i > 0) {o(parseInt(i) - 1); return false} else if (r == n.downKey && i < s) {o(parseInt(i) + 1); return false} return true}; var f = function (t) {if (n.onPageChange && t && i != t) n.onPageChange(t); i = t; e("[data-scroll-nav]").removeClass(n.activeClass); e("[data-scroll-nav=" + t + "]").addClass(n.activeClass)}; var l = function () {var t = e(window).scrollTop(); var r = e("[data-scroll-index]").filter(function (r, i) {return t >= e(i).offset().top + n.topOffset && t < e(i).offset().top + n.topOffset + e(i).outerHeight()}); var i = r.first().attr("data-scroll-index"); f(i)}; e(window).on("scroll", l).scroll(); e(window).on("keydown", a); e("body").on("click", "[data-scroll-nav], [data-scroll-goto]", function (e) {e.preventDefault(); u(e)})}})(jQuery)

      </script>



      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
      <!-- scrollIt js -->

      <script src="scrollIt.min.js"></script>
      <script src="wow.min.js"></script>

      <script>
        wow = new WOW();
        wow.init();
        $(document).ready(function (e) {

          $('#video-icon').on('click', function (e) {
            e.preventDefault();
            $('.video-popup').css('display', 'flex');
            $('.iframe-src').slideDown();
          });
          $('.video-popup').on('click', function (e) {
            var $target = e.target.nodeName;
            var video_src = $(this).find('iframe').attr('src');
            if ($target != 'IFRAME') {
              $('.video-popup').fadeOut();
              $('.iframe-src').slideUp();
              $('.video-popup iframe').attr('src', " ");
              $('.video-popup iframe').attr('src', video_src);
            }
          });

          $('.slider').bxSlider({
            pager: false
          });
        });

        $(window).on("scroll", function () {

          var bodyScroll = $(window).scrollTop(),
            navbar = $(".navbar");

          if (bodyScroll > 50) {
            $('.navbar-logo img').attr('src', 'images/unnamed-removebg-preview1.png');
            navbar.addClass("nav-scroll");

          } else {
            $('.navbar-logo img').attr('src', 'images/unnamed-removebg-preview1.png');
            navbar.removeClass("nav-scroll");
          }

        });
        $(window).on("load", function () {
          var bodyScroll = $(window).scrollTop(),
            navbar = $(".navbar");

          if (bodyScroll > 50) {
            $('.navbar-logo img').attr('src', 'images/unnamed-removebg-preview1.png');
            navbar.addClass("nav-scroll");
          } else {
            $('.navbar-logo img').attr('src', 'images/unnamed-removebg-preview1.png');
            navbar.removeClass("nav-scroll");
          }

          $.scrollIt({

            easing: 'swing',      // the easing function for animation
            scrollTime: 900,       // how long (in ms) the animation takes
            activeClass: 'active', // class given to the active nav element
            onPageChange: null,    // function(pageIndex) that is called when page is changed
            topOffset: -63
          });
        });

      </script>

      <script>
        (function () {var a, b, c, d, e, f = function (a, b) {return function () {return a.apply(b, arguments)}}, g = [].indexOf || function (a) {for (var b = 0, c = this.length; c > b; b++)if (b in this && this[b] === a) return b; return -1}; b = function () {function a() { } return a.prototype.extend = function (a, b) {var c, d; for (c in b) d = b[c], null == a[c] && (a[c] = d); return a}, a.prototype.isMobile = function (a) {return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a)}, a.prototype.createEvent = function (a, b, c, d) {var e; return null == b && (b = !1), null == c && (c = !1), null == d && (d = null), null != document.createEvent ? (e = document.createEvent("CustomEvent"), e.initCustomEvent(a, b, c, d)) : null != document.createEventObject ? (e = document.createEventObject(), e.eventType = a) : e.eventName = a, e}, a.prototype.emitEvent = function (a, b) {return null != a.dispatchEvent ? a.dispatchEvent(b) : b in (null != a) ? a[b]() : "on" + b in (null != a) ? a["on" + b]() : void 0}, a.prototype.addEvent = function (a, b, c) {return null != a.addEventListener ? a.addEventListener(b, c, !1) : null != a.attachEvent ? a.attachEvent("on" + b, c) : a[b] = c}, a.prototype.removeEvent = function (a, b, c) {return null != a.removeEventListener ? a.removeEventListener(b, c, !1) : null != a.detachEvent ? a.detachEvent("on" + b, c) : delete a[b]}, a.prototype.innerHeight = function () {return "innerHeight" in window ? window.innerHeight : document.documentElement.clientHeight}, a}(), c = this.WeakMap || this.MozWeakMap || (c = function () {function a() {this.keys = [], this.values = []} return a.prototype.get = function (a) {var b, c, d, e, f; for (f = this.keys, b = d = 0, e = f.length; e > d; b = ++d)if (c = f[b], c === a) return this.values[b]}, a.prototype.set = function (a, b) {var c, d, e, f, g; for (g = this.keys, c = e = 0, f = g.length; f > e; c = ++e)if (d = g[c], d === a) return void (this.values[c] = b); return this.keys.push(a), this.values.push(b)}, a}()), a = this.MutationObserver || this.WebkitMutationObserver || this.MozMutationObserver || (a = function () {function a() {"undefined" != typeof console && null !== console && console.warn("MutationObserver is not supported by your browser."), "undefined" != typeof console && null !== console && console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content.")} return a.notSupported = !0, a.prototype.observe = function () { }, a}()), d = this.getComputedStyle || function (a, b) {return this.getPropertyValue = function (b) {var c; return "float" === b && (b = "styleFloat"), e.test(b) && b.replace(e, function (a, b) {return b.toUpperCase()}), (null != (c = a.currentStyle) ? c[b] : void 0) || null}, this}, e = /(\-([a-z]){1})/g, this.WOW = function () {function e(a) {null == a && (a = {}), this.scrollCallback = f(this.scrollCallback, this), this.scrollHandler = f(this.scrollHandler, this), this.resetAnimation = f(this.resetAnimation, this), this.start = f(this.start, this), this.scrolled = !0, this.config = this.util().extend(a, this.defaults), null != a.scrollContainer && (this.config.scrollContainer = document.querySelector(a.scrollContainer)), this.animationNameCache = new c, this.wowEvent = this.util().createEvent(this.config.boxClass)} return e.prototype.defaults = {boxClass: "wow", animateClass: "animated", offset: 0, mobile: !0, live: !0, callback: null, scrollContainer: null}, e.prototype.init = function () {var a; return this.element = window.document.documentElement, "interactive" === (a = document.readyState) || "complete" === a ? this.start() : this.util().addEvent(document, "DOMContentLoaded", this.start), this.finished = []}, e.prototype.start = function () {var b, c, d, e; if (this.stopped = !1, this.boxes = function () {var a, c, d, e; for (d = this.element.querySelectorAll("." + this.config.boxClass), e = [], a = 0, c = d.length; c > a; a++)b = d[a], e.push(b); return e}.call(this), this.all = function () {var a, c, d, e; for (d = this.boxes, e = [], a = 0, c = d.length; c > a; a++)b = d[a], e.push(b); return e}.call(this), this.boxes.length) if (this.disabled()) this.resetStyle(); else for (e = this.boxes, c = 0, d = e.length; d > c; c++)b = e[c], this.applyStyle(b, !0); return this.disabled() || (this.util().addEvent(this.config.scrollContainer || window, "scroll", this.scrollHandler), this.util().addEvent(window, "resize", this.scrollHandler), this.interval = setInterval(this.scrollCallback, 50)), this.config.live ? new a(function (a) {return function (b) {var c, d, e, f, g; for (g = [], c = 0, d = b.length; d > c; c++)f = b[c], g.push(function () {var a, b, c, d; for (c = f.addedNodes || [], d = [], a = 0, b = c.length; b > a; a++)e = c[a], d.push(this.doSync(e)); return d}.call(a)); return g}}(this)).observe(document.body, {childList: !0, subtree: !0}) : void 0}, e.prototype.stop = function () {return this.stopped = !0, this.util().removeEvent(this.config.scrollContainer || window, "scroll", this.scrollHandler), this.util().removeEvent(window, "resize", this.scrollHandler), null != this.interval ? clearInterval(this.interval) : void 0}, e.prototype.sync = function (b) {return a.notSupported ? this.doSync(this.element) : void 0}, e.prototype.doSync = function (a) {var b, c, d, e, f; if (null == a && (a = this.element), 1 === a.nodeType) {for (a = a.parentNode || a, e = a.querySelectorAll("." + this.config.boxClass), f = [], c = 0, d = e.length; d > c; c++)b = e[c], g.call(this.all, b) < 0 ? (this.boxes.push(b), this.all.push(b), this.stopped || this.disabled() ? this.resetStyle() : this.applyStyle(b, !0), f.push(this.scrolled = !0)) : f.push(void 0); return f} }, e.prototype.show = function (a) {return this.applyStyle(a), a.className = a.className + " " + this.config.animateClass, null != this.config.callback && this.config.callback(a), this.util().emitEvent(a, this.wowEvent), this.util().addEvent(a, "animationend", this.resetAnimation), this.util().addEvent(a, "oanimationend", this.resetAnimation), this.util().addEvent(a, "webkitAnimationEnd", this.resetAnimation), this.util().addEvent(a, "MSAnimationEnd", this.resetAnimation), a}, e.prototype.applyStyle = function (a, b) {var c, d, e; return d = a.getAttribute("data-wow-duration"), c = a.getAttribute("data-wow-delay"), e = a.getAttribute("data-wow-iteration"), this.animate(function (f) {return function () {return f.customStyle(a, b, d, c, e)}}(this))}, e.prototype.animate = function () {return "requestAnimationFrame" in window ? function (a) {return window.requestAnimationFrame(a)} : function (a) {return a()}}(), e.prototype.resetStyle = function () {var a, b, c, d, e; for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++)a = d[b], e.push(a.style.visibility = "visible"); return e}, e.prototype.resetAnimation = function (a) {var b; return a.type.toLowerCase().indexOf("animationend") >= 0 ? (b = a.target || a.srcElement, b.className = b.className.replace(this.config.animateClass, "").trim()) : void 0}, e.prototype.customStyle = function (a, b, c, d, e) {return b && this.cacheAnimationName(a), a.style.visibility = b ? "hidden" : "visible", c && this.vendorSet(a.style, {animationDuration: c}), d && this.vendorSet(a.style, {animationDelay: d}), e && this.vendorSet(a.style, {animationIterationCount: e}), this.vendorSet(a.style, {animationName: b ? "none" : this.cachedAnimationName(a)}), a}, e.prototype.vendors = ["moz", "webkit"], e.prototype.vendorSet = function (a, b) {var c, d, e, f; d = []; for (c in b) e = b[c], a["" + c] = e, d.push(function () {var b, d, g, h; for (g = this.vendors, h = [], b = 0, d = g.length; d > b; b++)f = g[b], h.push(a["" + f + c.charAt(0).toUpperCase() + c.substr(1)] = e); return h}.call(this)); return d}, e.prototype.vendorCSS = function (a, b) {var c, e, f, g, h, i; for (h = d(a), g = h.getPropertyCSSValue(b), f = this.vendors, c = 0, e = f.length; e > c; c++)i = f[c], g = g || h.getPropertyCSSValue("-" + i + "-" + b); return g}, e.prototype.animationName = function (a) {var b; try {b = this.vendorCSS(a, "animation-name").cssText} catch (c) {b = d(a).getPropertyValue("animation-name")} return "none" === b ? "" : b}, e.prototype.cacheAnimationName = function (a) {return this.animationNameCache.set(a, this.animationName(a))}, e.prototype.cachedAnimationName = function (a) {return this.animationNameCache.get(a)}, e.prototype.scrollHandler = function () {return this.scrolled = !0}, e.prototype.scrollCallback = function () {var a; return !this.scrolled || (this.scrolled = !1, this.boxes = function () {var b, c, d, e; for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++)a = d[b], a && (this.isVisible(a) ? this.show(a) : e.push(a)); return e}.call(this), this.boxes.length || this.config.live) ? void 0 : this.stop()}, e.prototype.offsetTop = function (a) {for (var b; void 0 === a.offsetTop;)a = a.parentNode; for (b = a.offsetTop; a = a.offsetParent;)b += a.offsetTop; return b}, e.prototype.isVisible = function (a) {var b, c, d, e, f; return c = a.getAttribute("data-wow-offset") || this.config.offset, f = this.config.scrollContainer && this.config.scrollContainer.scrollTop || window.pageYOffset, e = f + Math.min(this.element.clientHeight, this.util().innerHeight()) - c, d = this.offsetTop(a), b = d + a.clientHeight, e >= d && b >= f}, e.prototype.util = function () {return null != this._util ? this._util : this._util = new b}, e.prototype.disabled = function () {return !this.config.mobile && this.util().isMobile(navigator.userAgent)}, e}()}).call(this);
      </script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>





<button
  type="button"
  class="btn btn-danger btn-floating btn-lg"
  id="btn-back-to-top"
>
  <i class="fas fa-arrow-up"></i>
</button>

<script>

let mybutton = document.getElementById("btn-back-to-top");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  const threshold = 50;
  if (document.body.scrollTop > threshold || document.documentElement.scrollTop > threshold) {
    mybutton.style.bottom = "83px";
  } else {
    mybutton.style.bottom = "-50px";
  }
}

mybutton.addEventListener("click", backToTop);

function backToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}
</script>
  </body>


</html>
