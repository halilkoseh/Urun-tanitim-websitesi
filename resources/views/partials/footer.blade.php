<section class="info_section layout_padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="info_detail">
                    <div style="text-align: center;">
                        <h4 style="color: #ffffff; font-size: 24px; margin-bottom: 20px;"></h4>
                        <img src="{{ asset('images/unnamed-removebg-preview.png') }}" style="height: 150px; width: 150px; border-radius: 50%;" />
                    </div>
                    <div style="text-align: center; margin-top: 20px;">
                        <a href="https://twitter.com/extrasistem" style="margin-right: 10px;">
                            <img src="{{ asset('images/twitter.png') }}" alt="Twitter Icon" height="25" />
                        </a>
                        <a href="https://www.instagram.com/extrasistem/" style="margin-right: 10px;">
                            <img src="{{ asset('images/instagram.png') }}" alt="Instagram Icon" height="25" />
                        </a>
                        <a href="https://www.youtube.com/@extrasistem" style="margin-right: 10px;">
                            <img src="{{ asset('images/youtube.png') }}" alt="YouTube Icon" style="color: #ff0000; font-size: 12px; height: 25px;" />
                        </a>
                        <a href="https://www.linkedin.com/company/101549029/admin/feed/posts/">
                            <img src="{{ asset('images/pngwing.com (3).png') }}" alt="LinkedIn Icon" height="27" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_contact">
                    <h4>
                        <br />
                        <br />
                        Bize Ulaşım
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
                        <br />
                        <br />
                        Site Haritası
                    </h4>
                    <div class="info_links">
                        <a class="active" href="#anasayfa">
                            <img src="{{ asset('images/nav-bullet.png') }}" alt="" />
                            Anasayfa
                        </a>
                        <a class="" href="https://extrasistem.com">
                            <img src="{{ asset('images/nav-bullet.png') }}" alt="" />
                            Sisteme Giriş
                        </a>
                        <a class="" href="{{route('flag')}}">
                            <img src="{{ asset('images/nav-bullet.png') }}" alt="" />
                            Kayıt Ol | Giriş Yap
                        </a>
                        <a class="" href="    ce.html">
                            <img src="{{ asset('images/nav-bullet.png') }}" alt="" />
                            Destek | Geri Bildirim
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-0">
                <h4>
                    <br />
                    <br />
                    Haberdar Olayım <br />
                </h4>
                <form action="{{ route('subcontroller.store') }}" method="post">
                    @csrf
                    <input type="text" placeholder="E-Mail Giriniz" name="eposta" required />
                    <button type="submit">
                        Bültene Kayıt Ol
                    </button>
                    <br />
                    <br />
                    <span style="color: #b9c1c9;">ㅤㅤ</span>
                </form>
            </div>
        </div>
        <footer class="footer_section">
            <div class="container">
                <p>
                    Telif Hakkı © 2024 Extra Sistem & MFE Teknoloji A.Ş. Tüm hakları saklıdır.
                </p>
            </div>
        </footer>
    </div>
</section>
