<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .rodape {
        width: 100%;
    }

    .redes-sociais, .area-contato, .localizacao {
        width: 33.333%;
        border-top:solid 1px #ccc;
        float: left;
        text-align: center;
        background-color: #f8f8f8;
        height: 250px;
    }

    .redes-sociais, .area-contato, .localizacao p, span {
        color: #333333;
    }

    .redes-sociais img {
        margin: 0px 15px 0px 15px;
    }

    .fa {
        padding: 20px;
        font-size: 30px;
        width: 30px;
        text-align: center;
        text-decoration: none;
        border-radius: 50%;
    }

    .fa:hover {
        opacity: 0.7;
    }

    .fa-facebook {
        background: #3B5998;
        color: white;
    }

    .fa-twitter {
        background: #55ACEE;
        color: white;
    }

    .fa-instagram {
        background: #E1306C;
        color: white;
    }

    .mapouter {
        /* position:relative;
        text-align:right; */
        margin: auto;
        height:300px;
        width:300px;
    }

    .gmap_canvas {
        overflow:hidden;
        background:none!important;
        height:300px;
        width:300px;
    }
</style>

<div class="rodape">
    <div class="redes-sociais">
        <h2>Redes sociais</h2>
        <a href="https://www.facebook.com/Novo-Mundo-1434817126542075/" class="fa fa-facebook" target=”_blank”></a>
        <a href="https://www.instagram.com/novomundooficial/" class="fa fa-instagram" target=”_blank”></a>
        <a href="https://twitter.com/novomundo" class="fa fa-twitter" target=”_blank”></a>
    </div>
    <div class="area-contato">
        <h2>Contato</h2>
        <span>Copyright 2022 - Novo Mundo S.A. - CNPJ: 01.534.080/0001-28</span>
        <br>
        <span>Alameda dos Flamboyants, 101, Qd. QC 03, Lt. 01, Sítio Bernardo Sayão, Goiânia - GO, CEP: 74680-200</span>
        <br>
        <span>(62) 3501-1000</span>
    </div>
    <div class="localizacao">
        <h2>Localização</h2>
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe src="https://maps.google.com/maps?q=novo%20mundo%20matriz&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    width="300" height="170" id="gmap_canvas" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://fmovies-online.net"></a>
                <br>
                <a href="https://www.embedgooglemap.net"></a>
            </div>
        </div>
    </div>
</div>