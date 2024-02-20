<section class="client_section layout_padding" id="refrance" style="background-color: #f5f5f7;">
    <div class="container">
       <div class="row" data-scroll-index="4">
          <div class="col-md-12">
             <div class="sectioner-header text-center black">
                <h2>
                   <br />
                   <br />
                   Müşterilerimiz
                </h2>
                <span class="line"></span>
                <p>Extra Sistem'de müşteri memnuniyeti önceliklidir, en iyisi olmayı hedefler, insan kaynaklarına önem verir, sürekli gelişimi amaçlar ve çevre bilinciyle sorumluluk taşır.</p>
             </div>
             <div id="carouselExampleControls" class="section-content" data-ride="carousel">
                <div class="carousel-inner">
                   <div class="carousel-item active">
                      <div class="detail-box">
                         <h4>TOC Grup A.Ş</h4>
                         <p><br /></p>
                         <p>
                            <strong class="custom-color">
                            Personel bilgilerini güvenli bir şekilde saklamamızı, izin yönetimini hızlıca yapmamızı sağlıyor. <br />
                            Verimliliği artırıyor, kullanımı kolay ve destek ekibi hızlı.
                            </strong>
                         </p>
                         <img src="{{ asset('images/tocgrup.png') }}" alt="" />
                      </div>
                   </div>
                   <div class="carousel-item">
                      <div class="detail-box">
                         <h4>MFE Teknoloji A.Ş.</h4>
                         <p><br /></p>
                         <<style>
                            .custom-color {
                                color: #818992;
                            }
                        </style>

                        <p>
                            <strong class="custom-color">İnsan kaynakları ve muhasebe işleyişinde hayal ettiğimiz dijital dönüşümü gerçekleştirdik, <br />
                            teşekkürler Extra Sistem ...</strong>
                        </p>

                         <img src="{{ asset('images/mfeteknoloji.png') }}" alt="" />
                      </div>
                   </div>
                </div>
                <a class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
             </div>
          </div>
       </div>
    </div>
 </section>
 <div class="logos">
    <div class="logos-slide">
       <img src="{{ asset('images/tocgrup1.png') }}" width="100" height="70" />
       <img src="{{ asset('images/demirtaşsistemlogo.png') }}" width="140" height="110" />
       <img src="{{ asset('images/extrasistemlogo.png') }}" alt="Client 1 Logo" width="100" height="90" />
    </div>
 </div>
 <script>
    for (var i = 0; i < 10; i++) {
        var copy = document.querySelector(".logos-slide").cloneNode(true);
        document.querySelector(".logos").appendChild(copy);
    }
 </script>
 <p>
    <br />
    <span class="line"></span><br />
 </p>
