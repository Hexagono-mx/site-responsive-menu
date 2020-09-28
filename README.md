# Site responsive header menu

### This package is not supported.
This package generates a bootstrap-flex based horizontal responsive menu blade component for standard sites.

This repository is for private and particular use, if it is of your use you can use it freely but Hexagono will not support its functionality. This repository is not intended to be for general use, so its characteristics and scope may be limited.

---

# Pagina de contacto para sitio
###Este paquete no tiene soporte. 

Este paquete genera un componente blade con función de menú responsivo horizontal basado en bootstrap-flex para sitios estándar. 

Este repositorio es con fines de uso privado y particular, si es de tu utilidad puedes usarlo libremente pero Hexagono no dara soporte sobre su funcionalidad. Este repositotorio no pretende ser de uso general, por lo que pude que sus caracteristicas y alcances esten  limitados.

---

## Example code to inti menu:
``` HTML
<x-main-menu data-logo="{{asset('img/logo.svg')}}"
             data-container="container"
             data-fixed="true"
             data-whatsapp="811 123 987"
             data-phone="81 9876 1234"
             data-facebook="http://facebook.com"
             data-twitter="http://twitter.com"
             data-instagram="http://instagram.com"
             data-youtube="http://youtube.com"
             data-scripts="script">
    <ul class="">
        <li class="active"><a href="">Inicio</a></li>
        <li class=""><a href="">Quienes Somos</a></li>
        <li class=""><a href="">Servicios</a>
            <ul class="">
                <li class=""><a href="">Sub Link 1</a></li>
                <li class=""><a href="">Sub Link 2</a></li>
                <li class=""><a href="">Sub Link 3</a></li>
                <li class=""><a href="">Sub Link 4</a></li>
                <li class=""><a href="">Sub Link 5</a></li>
            </ul>
        </li>
        <li class=""><a href="">Contacto</a></li>
    </ul>
</x-main-menu>
```
