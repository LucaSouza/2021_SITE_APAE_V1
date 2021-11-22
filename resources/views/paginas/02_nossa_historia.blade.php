@extends('bases.01_base_01')

<!--SECTION MENU PAGINA PRINCIPAL-->
@section('menu')
  @include('menus.01_menu')
@stop

@section('conteudo')
<div class="row container-titulo-section container-sem-slide">
    <div class="col-12">
      <h1 class="titulo-section-nossa-historia">Nossa história</h1>
      <h4 class="sub-titulo-section">que linda história</h4>
    </div>
</div>
<div class="swiper-container swiper-container-historia row">
    <!--Timeline carousel-->
      <section class="swiper-wrapper">
            <!--Timeline item-->
            <div class="swiper-slide timeline-carousel__item">
               <div class="timeline-carousel__image">
                  <div class="media-wrapper media-wrapper--overlay" style="background: url(img/jardim.jpg) center center; background-size:cover;"></div>
               </div>
               <div class="timeline-carousel__item-inner">
                  <span class="year">1914</span>
                  <span class="month">June 28</span>
                  <p>Assassination of Archduke Franz Ferdinand of Austria, heir to the Austro-Hungarian throne,
                    who was killed in Sarajevo along with his wife Duchess Sophie by Bosnian Serb Gavrilo Princip.
                    Assassination of Archduke Franz Ferdinand of Austria, heir to the Austro-Hungarian throne, who was
                    Assassination of Archduke Franz Ferdinand of Austria, heir to the Austro-Hungarian throne, who was killed in Sarajevo along with his wife Duchess Sophie by Bosnian Serb Gavrilo Princip.
                    killed in Sarajevo along with his wife Duchess Sophie by Bosnian Serb Gavrilo Princip.
                  </p>
               </div>
            </div>
            <!--/Timeline item-->

            <!--Timeline item-->
            <div class="swiper-slide timeline-carousel__item">
               <div class="timeline-carousel__image">
                  <div class="media-wrapper media-wrapper--overlay" style="background: url(img/992.png) center center; background-size:cover;"></div>
               </div>
               <div class="timeline-carousel__item-inner">
                 <span class="year">1914</span>
                  <span class="month">July 5</span>
                  <p>Austria-Hungary seeks German support for a war against Serbia in case of Russian militarism. Germany gives assurances of support.</p>
                  <!--<a href="#" class="read-more">Read more</a>-->
               </div>
            </div>
            <!--/Timeline item-->

            <!--Timeline item-->
            <div class="swiper-slide timeline-carousel__item">
               <div class="timeline-carousel__image">
                  <div class="media-wrapper media-wrapper--overlay" style="background: url(img/artesanato-02.jpg) center center; background-size:cover;"></div>
               </div>
               <div class="timeline-carousel__item-inner">
                  <span class="year">1915</span>
                  <span class="month">January 2</span>
                  <p>The Russian offensive in the Carpathians begins. It will continue until April 12. </p>
                  <!--<a href="#" class="read-more">Read more</a>-->
               </div>
            </div>
            <!--/Timeline item-->

            <!--Timeline item-->
            <div class="swiper-slide timeline-carousel__item">
               <div class="timeline-carousel__image">
                  <div class="media-wrapper media-wrapper--overlay" style="background:url(img/editado-68.jpg) center center; background-size:cover;"></div>
               </div>
               <div class="timeline-carousel__item-inner">
                  <span class="year">1915</span>
                  <span class="month">January 18–19 </span>
                  <p>Battle of Jassin. </p>
                  <!--<a href="#" class="read-more">Read more</a>-->
               </div>
            </div>
            <!--/Timeline item-->

            <!--Timeline item-->
            <div class="swiper-slide timeline-carousel__item">
               <div class="timeline-carousel__image">
                  <div class="media-wrapper media-wrapper--overlay" style="background:url(img/equoterapia.jpg) center center; background-size:cover;"></div>
               </div>
               <div class="timeline-carousel__item-inner">
                  <span class="year">1916</span>
                  <span class="month">January 5–17</span>
                  <p>Austro-Hungarian offensive against Montenegro, which capitulates. </p>
                  <!--<a href="#" class="read-more">Read more</a>-->
               </div>
            </div>
            <!--/Timeline item-->

            <!--Timeline item-->
            <div class="swiper-slide timeline-carousel__item">
               <div class="timeline-carousel__image">
                  <div class="media-wrapper media-wrapper--overlay" style="background: url('https://kidskonnect.com/wp-content/uploads/2010/10/Approaching_Omaha.jpg') center center; background-size:cover;"></div>
               </div>
               <div class="timeline-carousel__item-inner">
                  <span class="year">1916</span>
                  <span class="month">January 6–7 </span>
                  <p>Battle of Mojkovac. </p>
                  <!--<a href="#" class="read-more">Read more</a>-->
               </div>
            </div>
            <!--/Timeline item-->
      </section>
<!--Timeline carousel-->
<!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-historia"></div>
  </div>
</div>
@stop
<!--SECTION CONTEUDO PAGINA PRINCIPAL-->

<!--SECTION FOOTER PAGINA PRINCIPAL-->
@section('footer')
  @include('bases.01_base_01_rodape')
@stop