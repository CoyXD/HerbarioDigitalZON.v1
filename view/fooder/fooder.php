<style>
.footer{
    background-color: #1D293F;
}

.footer__title{
    font-weight: 300;
    font-size: 2rem;
    margin-bottom: 30px;
}

.footer__title, .footer__newsletter{
    color: #fff;
}


.footer__container{
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #fff;
    padding-bottom: 60px;
}

.nav--footer{
    padding-bottom: 20px;
    display: grid;
    gap: 1em;
    grid-auto-flow: row;
    height: 100%;
}

.nav__link--footer{
    display: flex;
    margin: 0;
    margin-right: 20px;
    flex-wrap: wrap;
}

.footer__inputs{
    margin-top: 10px;
    display: flex;
    overflow: hidden;
}

.footer__input{
    background-color: #fff;
    height: 50px;
    display: block;
    padding-left: 10px;
    border-radius: 6px;
    font-size: 1rem;
    outline: none;
    border: none;
    margin-right: 16px;
}

.footer__submit{
    margin-left: auto;
    display: inline-block;
    height: 50px;
    padding: 0 20px ;
    background-color: #2091F9;
    border: none;
    font-size: 1rem;
    color: #fff;
    border-radius: 6px;
    cursor: pointer;
}

.footer__copy{
    --padding-container: 30px 0;
    text-align: center;
    color: #fff;
}

.footer__copyright{
    font-weight: 300;
}

.footer__icons{
    margin-bottom: 10px;
}

.footer__img{
    width: 30px;
}

/* Media queries */

@media (max-width:800px){
    .nav__menu{
        display: block;
    }

    .nav__link--menu{
        position: fixed;
        background-color: #000;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        z-index: 100;
        opacity: 0;
        pointer-events: none;
        transition: .7s opacity;
    }

    .nav__link--show{
        --show: block;
        opacity:1 ;
        pointer-events: unset;
    }

    .nav__close{
        position: absolute;
        top: 30px;
        right: 30px;
        width: 30px;
        cursor: pointer;
    }

    .hero__title{
        font-size: 2.5rem;
    }


    .about__main{
        gap: 2em;
    }

    .about__icons:last-of-type{
        grid-column: 1/-1;
    }


    .knowledge__container{
        grid-template-columns: 1fr;
        grid-template-rows: max-content 1fr;
        gap: 3em;
        text-align: center;
    }

    .knowledge__picture{
        grid-row: 1/2;
        justify-self: center;
    }

    .testimony__container{
        grid-template-columns: 30px 1fr 30px;
    }

    .testimony__body{
        grid-template-columns: 1fr;
        grid-template-rows: max-content max-content;
        gap: 3em;
        justify-items:center ;
    }


    .testimony__img{
        width: 200px;
        height: 200px;
        
    }

    .questions__copy{
        width: 100%;
    }

    .footer__container{
        flex-wrap: wrap;
    }

    .nav--footer{
        width: 100%;
        justify-items: center;
    }

    .nav__link--footer{
        width: 100%;
        justify-content: space-evenly;
        margin: 0;
    }

    .footer__form{
        width: 100%;
        justify-content: space-evenly;
    }

    .footer__input{
        flex: 1;
    }

}

@media (max-width:600px){
    .hero__title{
        font-size: 2rem;
    }

    .hero__paragraph{
        font-size: 1rem;
    }

    .subtitle{
        font-size: 1.8rem;
    }

    .price__element{
        width: 90%;
    }

    .price__element--best{
        width: 90%;
        /* padding: 40px; */
    }

    .price__price{
        font-size: 2rem;
    }

    .testimony{
        --padding-container: 60px 0;
    }

    .testimony__container{
        grid-template-columns: 28px 1fr 28px;
        gap: .9em;
    }

    .testimony__arrow{
        width: 100%;
    }

    .testimony__course{
        margin-top: 15px;
    }

    .questions__title{
        font-size: 1rem;
    }

    .footer__title{
        justify-self: start;
        margin-bottom: 15px;
    }

    .nav--footer{
        padding-bottom: 60px;
    }

    .nav__link--footer{
        justify-content: space-between;
    }

    .footer__inputs{
        flex-wrap: wrap;
    }

    .footer__input{
        flex-basis: 100%;
        margin: 0;
        margin-bottom: 16px;
    }

    .footer__submit{
        margin-right: auto;
        margin-left: 0;
        

        /* 
        margin:0;
        width: 100%;
        */
    }
}


.seccion-perfil-usuario .perfil-usuario-body,
.seccion-perfil-usuario {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
}

.seccion-perfil-usuario .perfil-usuario-header {
    width: 100%;
    display: flex;
    justify-content: center;
    background: linear-gradient(#B873FF, transparent);
    margin-bottom: 1.25rem;
}

.seccion-perfil-usuario .perfil-usuario-portada {
    display: block;
    position: relative;
    width: 90%;
    height: 17rem;
    background-image: linear-gradient(45deg, #BC3CFF, #317FFF);
    border-radius: 0 0 20px 20px;
    /*
    background-image: url('http://localhost/multimedia/png/user-portada-3.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    */
}

.seccion-perfil-usuario .perfil-usuario-portada .boton-portada {
    position: absolute;
    top: 1rem;
    right: 1rem;
    border: 0;
    border-radius: 8px;
    padding: 12px 25px;
    background-color: rgba(0, 0, 0, .5);
    color: #fff;
    cursor: pointer;
}

.seccion-perfil-usuario .perfil-usuario-portada .boton-portada i {
    margin-right: 1rem;
}

.seccion-perfil-usuario .perfil-usuario-avatar {
    display: flex;
    width: 180px;
    height: 180px;
    align-items: center;
    justify-content: center;
    border: 7px solid #FFFFFF;
    background-color: #DFE5F2;
    border-radius: 50%;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    position: absolute;
    bottom: -40px;
    left: calc(50% - 90px);
    z-index: 1;
}

.seccion-perfil-usuario .perfil-usuario-avatar img {
    width: 100%;
    position: relative;
    border-radius: 50%;
}

.seccion-perfil-usuario .perfil-usuario-avatar .boton-avatar {
    position: absolute;
    left: -2px;
    top: -2px;
    border: 0;
    background-color: #fff;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    width: 45px;
    height: 45px;
    border-radius: 50%;
    cursor: pointer;
}

.seccion-perfil-usuario .perfil-usuario-body {
    width: 70%;
    position: relative;
    max-width: 750px;
}

.seccion-perfil-usuario .perfil-usuario-body .titulo {
    display: block;
    width: 100%;
    font-size: 1.75em;
    margin-bottom: 0.5rem;
}

.seccion-perfil-usuario .perfil-usuario-body .texto {
    color: #848484;
    font-size: 0.95em;
}

.seccion-perfil-usuario .perfil-usuario-footer,
.seccion-perfil-usuario .perfil-usuario-bio {
    display: flex;
    flex-wrap: wrap;
    padding: 1.5rem 2rem;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    background-color: #fff;
    border-radius: 15px;
    width: 100%;
}

.seccion-perfil-usuario .perfil-usuario-bio {
    margin-bottom: 1.25rem;
    text-align: center;
}

.seccion-perfil-usuario .lista-datos {
    width: 50%;
    list-style: none;
}

.seccion-perfil-usuario .lista-datos li {
    padding: 5px 0;
}

.seccion-perfil-usuario .lista-datos li>.icono {
    margin-right: 1rem;
    font-size: 1.2rem;
    vertical-align: middle;
}

.seccion-perfil-usuario .redes-sociales {
    position: absolute;
    right: calc(0px - 50px - 1rem);
    top: 0;
    display: flex;
    flex-direction: column;
}

.seccion-perfil-usuario .redes-sociales .boton-redes {
    border: 0;
    background-color: #fff;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    color: #fff;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    font-size: 1.3rem;
}

.seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
    margin-top: .5rem;
}

.seccion-perfil-usuario .boton-redes.facebook {
    background-color: #5955FF;
}

.seccion-perfil-usuario .boton-redes.twitter {
    background-color: #35E1BF;
}

.seccion-perfil-usuario .boton-redes.instagram {
    background: linear-gradient(45deg, #FF2DFD, #40A7FF);
}

/* adactacion a dispositivos */
@media (max-width: 750px) {
    .seccion-perfil-usuario .lista-datos {
        width: 100%;
    }

    .seccion-perfil-usuario .perfil-usuario-portada,
    .seccion-perfil-usuario .perfil-usuario-body {
        width: 95%;
    }

    .seccion-perfil-usuario .redes-sociales {
        position: relative;
        flex-direction: row;
        width: 100%;
        left: 0;
        text-align: center;
        margin-top: 1rem;
        margin-bottom: 1rem;
        align-items: center;
        justify-content: center
    }

    .seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
        margin-left: 1rem;
        margin-top: 0;
    }
}
</style>



<footer class="footer">
    <section class="footer__container container">
        <nav class="nav nav--footer">
            <h2 class="footer__title">ITSZ.</h2>

            <ul class="nav__link nav__link--footer">
                <li class="nav__items">
                    <a href="#" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Galeria</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Acerca de</a>
                </li>
            </ul>
        </nav>

        <form class="footer__form" action="https://formspree.io/f/mknkkrkj" method="POST">
            <h2 class="footer__newsletter">Registrate en la pagina!</h2>
            <div class="footer__inputs">
                <input type="email" placeholder="Email:" class="footer__input" name="_replyto">
                <input type="submit" value="Registrate" class="footer__submit">
            </div>
        </form>
    </section>

    <section class="footer__copy container">
        <div class="footer__social">
            <a href="#" class="footer__icons"><img src="./images/facebook.svg" class="footer__img"></a>
            <a href="#" class="footer__icons"><img src="./images/twitter.svg" class="footer__img"></a>
            <a href="#" class="footer__icons"><img src="./images/youtube.svg" class="footer__img"></a>
        </div>

        <h3 class="footer__copyright">Derechos reservados &copy; Luis Estudillo</h3>
    </section>
</footer>