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
                <li class="nav-item"> <a class="nav-link" data-scroll-nav="2" href="#service">Hİzmetler</a> </li>
                <li class="nav-item"> <a class="nav-link" data-scroll-nav="5" href="#sss">SSS</a> </li>
                <li class="nav-item"> <a class="nav-link" data-scroll-nav="4" href="#refrance">MÜŞTERİLERİMİZ</a> </li>
                <li class="nav-item"> <a class="nav-link" data-scroll-nav="6" href="#iletisim">İletİşİm</a> </li>
                <li class="nav-item"> <a class="nav-link" href="https://extrasistem.com/register">Kayıt Ol | GİRİŞ Yap</a> </li>
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
