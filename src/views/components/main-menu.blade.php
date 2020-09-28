<header id="hexagono-header" class="hexagono-header @if(isset($dataFixed) && $dataFixed == 'true') fixed @endif">
    <div class="d-flex justify-content-between align-items-center
        @if (isset($dataContainer) && $dataContainer == 'fluid') container-fluid @else container @endif">
        <div class="brand">
            <img src="{{asset('img/logo-ancho-blanco.png')}}" alt="">
        </div>
        <div class="menu" id="menu">
            <div class="sm-menu-closer">
                <button onclick="closeMenu()"><i class="fas fa-times fa-2x"></i></button>
            </div>
            <nav id="nav">
                @if ((isset($dataFacebook) && $dataFacebook != "") || (isset($dataTwitter) && $dataTwitter != "") || (isset($dataInstagram) && $dataInstagram != "") || (isset($dataYoutube) && $dataYoutube != ""))
                <div class="redes">
                    <span>Síguenos</span>
                    @if (isset($dataFacebook) && $dataFacebook != "")<a href="{{$dataFacebook}}" target="_blank" title="Facebook" class=""><i class="fab fa-facebook"></i></a>@endif
                    @if (isset($dataTwitter) && $dataTwitter != "")<a href="{{$dataTwitter}}" target="_blank" title="Twitter" class=""><i class="fab fa-twitter"></i></a>@endif
                    @if (isset($dataInstagram) && $dataInstagram != "")<a href="{{$dataInstagram}}" target="_blank" title="Instagram" class=""><i class="fab fa-instagram"></i></a>@endif
                    @if (isset($dataYoutube) && $dataYoutube != "")<a href="{{$dataYoutube}}" target="_blank" title="YouTube" class=""><i class="fab fa-youtube"></i></a>@endif
                </div>
                @endif

                {{$slot}}

                @if (isset($dataWhatsapp) && $dataWhatsapp != "")
                <a href="https://wa.me/521{{(str_replace([" ", "-", "."], "", $dataWhatsapp))}}" class="fast-phone-contact d-flex align-items-center" target="_blank">
                    <div>
                        <span>WhatsApp</span>
                        <strong>{{$dataWhatsapp}}</strong>
                    </div>
                    <i class="fab fa-whatsapp"></i>
                </a>
                @endif
                @if (isset($dataPhone) && $dataPhone != "")
                <a href="tel:{{(str_replace([" ", "-", "."], "", $dataPhone))}}" class="fast-phone-contact d-flex align-items-center" target="_blank">
                    <div>
                        <span>Llamanos</span>
                        <strong>{{$dataPhone}}</strong>
                    </div>
                    <i class="fas fa-mobile-alt"></i>
                </a>
                @endif
            </nav>
        </div>
        <div class="sm-menu-trigger">
            <button onclick="openMenu()"><i class="fas fa-bars fa-2x"></i></button>
        </div>
    </div>
</header>
@if (!isset($dataScripts) || $dataScripts == 'inline')
<script !src="">
    function openMenu() {
        document.getElementById('menu').classList.add('open');
    }
    function closeMenu() {
        document.getElementById('menu').classList.remove('open');
    }
    function submenuFormater() {
        var uls = document.getElementById('nav').getElementsByTagName('ul');
        for (var index in uls) {
            let parent = uls[index].parentNode;
            if (parent != undefined) {
                if (parent.tagName == 'LI') {
                    parent.classList.add('parent-node');
                    parent.onclick = function () {
                        if (parent.classList.contains('open')) {
                            parent.classList.remove('open');
                        } else {
                            parent.classList.add('open');
                        }
                    }
                }
            }
        }
    }
    document.addEventListener("DOMContentLoaded", function(event) {
        submenuFormater();
        window.addEventListener('scroll', function(e) {
            var headerHeight = document.getElementById('hexagono-header').offsetHeight;
            if (window.scrollY >= headerHeight) {
                document.getElementById('hexagono-header').classList.add('gofix');
                document.body.style.paddingTop = headerHeight + 'px';
            } else {
                document.getElementById('hexagono-header').classList.remove('gofix');
                document.body.style.paddingTop = 0;
            }
        });
    });
</script>
@endif
