<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Extra Sistem</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<!-- Bootstrap Icons CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<!-- Font Google -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon" type="image/x-icon" href="images/unnamed-removebg-preview.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="style.css" />

<!-- Fontawesome CDN Link -->
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
/>
<script src="https://www.youtube.com/iframe_api"></script>

<style>
  .modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    justify-content: center;
    align-items: center;
  }

  .modal-content {
    width: 300px;
    height: 600px;
    margin: auto;
    position: relative;
  }

  .close {
    color: #fff;
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 20px;
    cursor: pointer;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 5px;
    z-index: 1;
  }

  .larger-icon {
    font-size: 24px; /* Adjust the size as needed */
}


.popup {
  display: none;
  position: absolute;
  top: 520%;
  right: 50%;
  transform: translate(50%, -50%); /* Yatayda 50%, dikeyde -50% kaydır */
  background-color: white;
  padding: 20px;
  border: 1px solid black;
  z-index: 9999; /* Sayfanın içeriğinin üstünde olması için */
}



.tick-icon {
  width: 50px;
  height: 50px;
  margin-bottom: 10px;
}
.navbar {
      background-color: #ffffff; /* Arka plan rengi */
    }

    .navbar-brand img {
      max-height: 50px; /* Logo yüksekliği */
    }

    .navbar-nav .nav-link {
      color: #333333; /* Link rengi */
      font-weight: bold; /* Kalın font */
    }

    .navbar-nav .nav-link:hover {
      color: #007bff; /* Hover rengi */
    }

    .navbar-nav .nav-item .active {
  font-weight: bold;
}


</style>

</head>

<body>




<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="myNavbar">
    <div class="container">
      <a class="navbar-brand" href="#anasayfa">
        <img src="images/unnamed-removebg-preview.png" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="#anasayfa">AnaSayfa</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#about">Hakkımızda</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#service">Hizmetler</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#refrance">Referanslar</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#sss">SSS</a> </li>
          <li class="nav-item"> <a class="nav-link iletisim-link" href="#iletisim">İletişim</a> </li> <!-- İletişim linki için özel sınıf eklendi -->
        </ul>
      </div>
    </div>
  </nav>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- End Navbar -->
<!-------Banner Start------->
<section class="banner" data-scroll-index='0' id="anasayfa">
  <div class="banner-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div class="banner-text">
            <h2 class="white">Yönetimde Aradığınız Sistem</h2>
<br>
            <h5 class="white">Şirketinizi bir arada yönetin, <br>verimliliği  yapay zeka destekli <a href="http://extrasistem.com" target="_blank" rel="dofollow" class="weblink">Extra Sistem</a>'de buluşturun!</h5>




            <p class="banner-text white">Extra Sistem, işletmelerin insan kaynakları yönetimini kolaylaştıran bir yazılım çözümüdür. <br> <br> Bu güçlü bir insan kaynakları uygulaması ile personel takibi, izin yönetimi, performans değerlendirmesi, bordro hesaplama ve puantaj süreçleri tek bir yerden yönetebilir, iş verimliliğinizi artırabilirsiniz. <br> <br> Mobil uygulama ve Web sitesi ile her zaman her yerde erişilebilir. İşletmenizin büyümesine ve başarısına katkıda bulunur. Her şey tek bir yazılımda ...

            </p>
            <ul>
              <li><a href="https://apps.apple.com/app/id6476713470"><img src="images/appstore.png" class="wow fadeInUp" data-wow-delay="0.4s"/></a></li>
              <li><a href="https://play.google.com/store/apps/details?id=com.mfeteknoloji"><img src="images/playstore.png" class="wow fadeInUp" data-wow-delay="0.7s"/></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <img src="images/iphone-screen.png" class="img-fluid wow fadeInUp" height="500" width="500" />
        </div>
                  </div>
    </div>
  </div>
  <span class="svg-wave"> </span> </section>

<!-------Banner End------->

<!-------About End------->

<section class="about section-padding prelative" data-scroll-index='1' id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>Hakkımızda</h3>
          <span class="line"></span>
          <p>
            Extra Sistem, işletmelerin personel yönetimini kolaylaştırmayı amaçlayan bir mobil uygulamadır. Güçlü özelliklere ve kullanıcı dostu arayüze sahiptir. <br> <br> Personelin izin durumu, performans değerlendirmeleri gibi birçok önemli bilgiyi anlık olarak takip etme imkanı sunar, iş verimliliğini artırmaya yönelik ideal bir çözümdür.
        <br> <br> Extra Sistem, MFE Teknoloji A.Ş. tarafından geliştirilen güçlü bir insan kaynakları çözümüdür. </p>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-4">
              <div class="icon-box wow fadeInUp" data-wow-delay="0.2s"> <i class="fa fa-life-ring" aria-hidden="true"></i>
                <h5>Destek</h5>
                <p>Entegrasyon, eğitim, güvenlik ve güncellemeler ile daima yanınızdayız.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box wow fadeInUp" data-wow-delay="0.4s"> <i class="fa fa-mobile" aria-hidden="true"></i>
                <h5>Çapraz Platform </h5>
                <p>                Mobil uygulama ile her zaman her yerde kolayca erişim sağlayabilirsiniz.
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
          <a href="https://www.linkedin.com/company/mfeteknoloji/?feedView=" class="about-btn"> < Daha Fazla ></a> </div>
      </div>
    </div>
  </div>
</section>
<!-------About End------->

<section class="video-section prelative text-center white">
  <div class="section-padding video-overlay">
    <div class="container">
      <h2>Tanıtımı İzle</h2> <br>
      <img src="images/video-lesson.png" onclick="openVideoPopup()" width="117" height="117" muted>
      <div class="modal" id="videoModal">
        <div class="modal-content">
          <span class="close" onclick="closeVideoPopup()">&times;</span>
          <video width="100%" height="100%" controls muted>
            <source src="images/videoplayback.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </div>
</section>


<!-------Features Start------->
<section class="feature section-padding" data-scroll-index='2' id="service">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>Hizmetler</h3>
          <span class="line"></span>
          <p>    Şirketinizi bir arada yönetin, başarıyı tek bir <strong>Extra Sistem </strong>'de buluşturun! <br> Her şey tek bir yazılımda
          </p> </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.2s">

                <div class="media-body text-right media-right-margin">
                  <h5>İşe Alım ve İstihdam Yönetimi</h5>
                  <p>İşe alım süreçlerini düzenleme, aday havuzunu genişletme, mülakatları planlama ve işe alım raporları görüntüleme.</p>
                </div>
                <div class="media-right icon-border"> <i class="fa fa-handshake-o larger-icon" aria-hidden="true"></i>
                </div>
              </div>
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.4s">


                <div class="media-body text-right media-right-margin">
                  <h5>Personel Bilgi Yönetimi</h5>
                  <p>Çalışan bilgilerini güncel tutma, personel dosyaları oluşturma, iletişim bilgilerini, eğitim durumlarını, yetkinlikleri ve sertifikaları takip etme.</p>
                </div>
                <div class="media-right icon-border">
                    <i class="fa fa-address-card larger-icon" aria-hidden="true"></i>
                </div>
              </div>


              <div class="media single-feature wow fadeInUp" data-wow-delay="0.6s">
                <div class="media-body text-right media-right-margin">


                  <h5>İzin ve Performans Yönetimi</h5>
                  <p>Çalışan gelişimini değerlendirme, performans yönetimini güçlendirme, hedefleri belirleme, geri bildirim alma , izin takibi ve ödüllendirme.</p>
                </div>
                <div class="media-right icon-border">
                    <i class="fa fa-calendar-minus-o larger-icon" aria-hidden="true"></i>
                </div>
              </div>
            </div>


            <div class="col-md-4 d-none d-md-block d-lg-block"> <br> <br> <br> <br> <br> <br>
              <div class="feature-mobile"> <img src="images/iphone-screen-with-shadow.png" class="img-fluid wow fadeInUp"/> </div>
            </div>
            <div class="col-md-4 d-block d-md-none"> <!-- Change classes here -->
              <div class="feature-mobile"> <img src="images/iphone-screen-with-shadow.png" class="img-fluid wow fadeInUp"/> </div>
            </div>


            <div class="col-md-4 col-sm-12">
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.2s">
                <div class="media-left icon-border media-right-margin">

                    <i class="fa fa-line-chart larger-icon" aria-hidden="true"></i>
                </div>
                <div class="media-body text-left">
                  <h5>Bordro ve İnsan Kaynakları Analitikleri</h5>
                  <p> Çalışan maaşlarının maliyet hesaplamasını yapma, yasal uyumluluğu sağlama, İK raporları ve iş gücü maliyetini sunma, verileri analiz etme.</p>
                </div>
              </div>




              <div class="media single-feature wow fadeInUp" data-wow-delay="0.4s">
                <div class="media-left icon-border media-right-margin">
                    <i class="fa fa-cubes larger-icon" aria-hidden="true"></i> <!-- Added class "larger-icon" and changed the icon to "fa-cubes" -->
                </div>
                <div class="media-body text-left">
                    <h5>Eğitim ve Gelişim Takibi</h5>
                    <p>Çalışanların eğitim ihtiyaçlarını belirleme, planlar oluşturma, eğitimleri takip etme, sonuçları değerlendirme ve raporları görüntüleme.</p>
                </div>
            </div>




              <div class="media single-feature wow fadeInUp" data-wow-delay="0.6s">
                <div class="media-left icon-border media-right-margin">
                    <i class="fa fa-mobile larger-icon"></i> <!-- Added class "larger-icon" -->
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
<!-------Features End------->



<!-------Testimonial Start------->
<section class="testimonial section-padding" data-scroll-index='4' id="refrance">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center white">
          <h3>Referanslar</h3>
          <span class="line"></span>
          <p class="white">Extra Sistem'de müşteri memnuniyeti önceliklidir, en iyisi olmayı hedefler, insan kaynaklarına önem verir, sürekli gelişimi amaçlar ve çevre bilinciyle sorumluluk taşır.</p>
        </div>


        <div class="section-content" style="color: white;">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-sm-12">
                    <div class="slider-item">
                        <div class="test-img">
                            <img src="images/user1-photoaidcom-invert-removebg-preview.png" alt="Placeholder" width="100" height="130">
                        </div>
                        <div class="test-text">
                            <h2 class="title" style="color: white;">
                                <span>TOC Grup</span> <br>
                                <a href="https://www.tocgrup.com.tr/" target="_blank" style="color: white; text-decoration: none; font-size: 0.9em;" class="slimer">tocgrup.com.tr</a>
                            </h2>
                            <p style="color: white; font-size: 1.2em;">Catering Organizasyon Temizlik Hizmetleri A.Ş.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>











      </div>
    </div>
  </div>
</section>

<!-------Testimonial End------->

<!-------FAQ Start------->
<section class="faq section-padding prelative" data-scroll-index='5' id="sss">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>Sıkça Sorulan Sorular</h3>
          <span class="line"></span>
          <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.2s">
              <h4>Nam tellus felis, dignissim quis dui ?</h4>
              <p>Suspendisse fermentum placerat enim, at pellentesque augue. Nullam elit est, ultricies et tellus ac, euismod placerat orci. Donec commodo.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.2s">
              <h4>Mauris scelerisque, dui non faucibus vulputate ?</h4>
              <p>Sed tempus in neque ac rhoncus. Phasellus vehicula, erat tempor malesuada egestas, mauris tellus malesuada erat, at vestibulum nulla ex et lectus. Nullam elit est, ultricies et tellus ac, euismod placerat orci.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.4s">
              <h4>Nullam elit est, ultricies et tellus ac ?</h4>
              <p>Ut vestibulum euismod aliquet. Quisque nec malesuada nibh. Vivamus euismod nunc eu leo faucibus, vel elementum justo posuere. In sed varius nisi. Curabitur id porta ipsum, et vestibulum dui.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.4s">
              <h4>Suspendisse fermentum placerat enim, at pellentesque augue elit est ?</h4>
              <p>Vivamus euismod nunc eu leo faucibus, vel elementum justo posuere. In sed varius nisi.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.6s">
              <h4>Ut vestibulum euismod aliquet. Quisque nec malesuada nibh ?</h4>
              <p>Suspendisse fermentum placerat enim, at pellentesque augue. Nullam elit est, ultricies et tellus ac, euismod placerat orci. Donec commodo dapibus congue.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.6s">
              <h4>Donec commodo dapibus congue ?</h4>
              <p>Nullam elit est, ultricies et tellus ac, euismod placerat orci fermentum placerat enim, at pellentesque augue. Nullam elit est, ultricies et tellus ac, euismod placerat orci. Donec commodo dapibus congue.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-------FAQ End------->

<!-------Contact Start------->
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


                <form id="contact_form" method="post" action="{{ route('newcontroller.store') }}" action="">
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

                  <button id="submitBtn" class="btn-grad w-100 text-uppercase" name="button">Gönder ></button>


                  <button id="hiddenBtn" style="display: none;">Hidden Button</button>



                </form>



            </div>
              <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="contact-info white">
                  <div class="contact-item media"> <i class="fa fa-mobile media-left media-right-margin"></i>
                    <div class="media-body">
                      <p class="text-uppercase">Telefon Numarası</p>
                      <p class="text-uppercase">0 536 551 58 34</p>
                    </div>
                  </div>
                  <div class="contact-item media"> <i class="fa fa-mobile media-left media-right-margin"></i>
                    <div class="media-body">
                      <p class="text-uppercase">Telefon Numarsı</p>
                      <p class="text-uppercase"><a class="text-white"> (0216) 232 26 56</a> </p>
                    </div>
                  </div>
                  <div class="contact-item media"> <i class="fa fa-envelope media-left media-right-margin"></i>
                    <div class="media-body">
                      <p class="text-uppercase">E-mail</p>
                      <p class="text-lowercase"><a class="text-white" href="mailto:info@mfeteknoloji.com ">info@mfeteknoloji.com </a> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Popup -->



<div id="popup" class="popup" align="center">
    <img src="images/pngwing.com (1).png" alt="Tik İşareti" class="tick-icon">
    <p>Mesajınız alınmıştır, teşekkür ederiz.</p>
</div>




<script>
    // Bu kod, sayfanın yüklenmesini bekler ve sonra pop-up mesajını gösterir
    document.addEventListener("DOMContentLoaded", function() {
        // Show the popup

        document.getElementById('popup').style.display = 'block';

        // Hide the popup after 3 seconds
        setTimeout(function() {
            document.getElementById('popup').style.display = 'none';
        }, 1000);
    });
</script>








<!-------Contact End------->

<!-------Download End------->
<section class="download section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center white">
          <h3>Mobil Uygulamamızı Edinin</h3>
          <span class="line"></span>
          <p class="white"><a href="https://extrasistem.com"><span style="color: black;">Extra Sistem</span></a> 'i tüm uygulama mağazalarından indirebilirsiniz.</p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="section-content text-center">
          <ul>
            <li><a href="https://apps.apple.com/app/id6476713470"><img src="images/appstore.png" class="wow fadeInUp" data-wow-delay="0.4s"/></a></li>
            <li><a href="https://play.google.com/store/apps/details?id=com.mfeteknoloji"><img src="images/playstore.png" class="wow fadeInUp" data-wow-delay="0.7s"/></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-------Download End------->

<footer class="footer-copy">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <p>2024  © Extra Sistem & MFE Teknoloji. Her hakkı saklıdır.

        </p>
      </div>
    </div>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<script>
  function openVideoPopup() {
    var modal = document.getElementById('videoModal');
    modal.style.display = 'block';

    // Create a new video element without controls and muted
    var videoContainer = document.getElementById('videoContainer');
    videoContainer.innerHTML = '<video id="popupVideo" width="100%" height="100%" controls muted>\
                                <source src="images/videoplayback.mp4" type="video/mp4">\
                                Your browser does not support the video tag.\
                                </video>';
  }

  function closeVideoPopup() {
    var modal = document.getElementById('videoModal');
    var videoContainer = document.getElementById('videoContainer');

    // Hide the modal
    modal.style.display = 'none';

    // Remove the video element from the DOM
    videoContainer.innerHTML = '';
  }
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
  $('#myNavbar a').on('click', function(){
    $('#myNavbar').find('.active').removeClass('active');
    $(this).addClass('active');
  });
});
</script>



</body>
</html>
