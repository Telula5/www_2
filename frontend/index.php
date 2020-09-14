<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Отзывчивый лендинг</title>
<!--шрифты-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!--bootstrap  and style -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js "></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://atuin.ru/demo/animate.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">








    <!-- my style-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <div class="cursor "> </div>
    <div class="cursor-follower blue"></div>


</head>
<body id="particles-js"  class="scroll-body" style="  width:100%; background-size: 100%; background-repeat: no-repeat; background-position: 50% 50%;">
<!--<div  id="particles-js" style=" background-color: #1c1c1c; width:100%; background-size: 100%; background-repeat: no-repeat; background-position: 50% 50%;"--->
    <div class="count-particles">
        <div  id="particles-js-canvas-el"  style="width: 100%; min-height: 100%; z-index:-6;" >





<!-- Modal -->
<div class="modalm  animated bounceInLeft" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <span aria-hidden="true">Подписка оформлена!</span>
    <button type="button" class="btn  closmail btn-secondary" data-dismiss="modal">Закрыть</button>
</div>


	<header >
        <div class="mail animated  slideInLeft"><i class="fa fa-envelope " aria-hidden="true"></i> <h3><a  href="mailto: telula@icloud.com"> <p>Напишите нам</p></a></h3>
        </div>
       <div class="home__navigation">
		<nav>
            <ul>


			<li><a id="anchor1Link"  href= "#anchor1">Мы предлагаем</a></li>
			<li><a id= "anchor2Link" href="#anchor2">О нас</a></li>
			<li><a id= "anchor3Link"  href="#anchor3">Наши контакты</a></li>
            </ul>
		</nav>
        </div>

	</header>


	<section class="present" >

		<div class="background-image" style="background-image: url(assets/img/laptop.jpg);"></div>
		<h1 style="z-index: 7;">Мы любим то что мы делаем </h1>
		<h3>Разрабатываем веб-сайты  сайты, соответствующие целям и задачам Вашего бизнеса и интересов. От сайтов- визиток до блогов и интернет-магазинов.</h3>
		<a id="anchor2Link2" href="#anchor2" class="btn">Подробнее о нас</a>


	</section>


	<section class="our-work"  id="anchor1"><!-- внутри анимации не виден!-->

        <div class="spacer s2"></div>
        <div id="trigger1" class="spacer s0"></div>
        <div id="reveal1" class="box2  visible">
		<h3 class="title  anchor1"  id="anchor1" >Что мы предлагаем</h3>
		<p>Потребности у каждого клиента или бизнесы клиентов - разные, поэтому из-за различий в объеме работы цены от одного проекта к другому могут сильно отличаться. Существуют 4 самых востребованых типа проектов:</p>
        </div>
        <div class="spacer s2"></div>
        <hr>
		<ul class="grid project-list">
		<!--	<li class="small" style="background-image: url(assets/img/coast.jpg);"><p> eu.</p></li>
			<li class="large" style="background-image: url(assets/img/island.jpg);"></li>
			<li class="large" style="background-image: url(assets/img/balloon.jpg);"><p>elit. Sed aliquam dictum sapien, id sagittis augue malesuada eu.</p></li>
			<li class="small" style="background-image: url(assets/img/mountain.jpg);"></li>
			  -->

        </ul>

        <!-- <div class="modal" class="modal bounceIn">
          <!--   <div class="close_modal">+</div>
             <div class="modal_txt">
                 <div class="project-name"></div>
               <p class="project-description"> </p>
             </div>
         </div>-->

     </section>


     <section class="features">
         <div class="spacer s3"></div>
         <div id="trigger2" class="spacer s0"></div>
         <div id="reveal2" class="box2  visible">

         <h3 class="title ">Услуги и сервис</h3>


         <p >Мы создаем для вас стиль вашего присутствия в Интернете с помощью  схемы, элементов, макета и вашего сайта. Мы тесно сотрудничаем с вами, не забывая о ваших клиентах и воплощая ваши идеи в цифровой платформе.
         </p>
         </div>
         <div class="spacer s3"></div>
         <hr>

         <ul class="grid">
             <li>
                 <i class="fa fa-laptop" aria-hidden="true"></i>
                 <h4>Консультация</h4>
                 <p>Поможем определиться при выборе сайта и наполнения. Выберем необходимую платформу, фрейм-ворк или сделаем по вашему макету.</p>
             </li>
             <li>
                 <i class="fa fa-cubes"aria-hidden="true"></i>
                 <h4>Создание сайта</h4>
                 <p>Создадим  сайт на WordPress, Битрикс   которыми вы можете управлять самостоятельно без каких-либо навыков программирования или дизайна.</p>
             </li>
             <li>
                 <i class="fa fa-desktop" aria-hidden="true"></i>
                 <h4>Перенос и апгрейд</h4>
                 <p>Если у Вас уже имеется сайт - поможем его обновить и обсудим возможные улучшения. </p>
             </li>
         </ul>
     </section>


     <section class="reviews" id="about">
         <h3 class="title" id="anchor2">немного о нас:</h3>
         <div class="spacer s1"></div>
         <div id="trigger3" class="spacer s0"></div>

         <div class="quote   jumbotron"">
         <div id="animate1" class="box1 "><img src="img/chapa.jpg"></div>



         <p class="author"> Чапа — наш менеджер по связям с общественностью</p>

         <div class="spacer s1"></div>

         <p class="quote">Она напоминает нам делать перерывы, улыбаться в дедлайны и вдохновляет нас в процессе работы. Можно с уверенностью сказать, что она любит людей и завершение любого нашего проекта, так в честь него обязательно получает вкусняшку.</p>
         <p class="author"></p>

         <p class="quote">Мы предлагаем индивидуальные или готовые решения. Почасовая, ежемесячная или фиксированная ставка. Вы выбираете то, что удобнее для вас.</p>
         <p class="quote">Успех вашего сайта зависит от качества его контента и от того как часто он обновляется. Предложим систему управления контентом, которая позволит Вам производить обновления быстро.</p>


     </section>


     <section class="contact " id="contacts">

                 <h3 >Подпишитесь на новости</h3>
                     <p> Подпишитесь на наши новости!<br>Спама не будет</p>
                 <hr>
                 <span class="error-text"></span>
                 <form id="newsletter" action="admin/newsletter.php" method="POST"  >
                     <input type="email"  name="email"  id="email" class="email" placeholder="Email">
                     <button class="submit btn" type="submit">Подписаться </button>
                 </form>




     </section>
     <div class="map" style ="background-image: linear-gradient(to top, rgb(50,54,56) 0%, rgba(164,170,177,0) 100%), url(/frontend/assets/img/map.png) ">
 <footer class="title anchor" id="anchor3">
     <a id="anchor1Link2" href="#anchor1">Мы предлагаем</a>
     <a id="anchor2Link2" href="#anchor2">О нас</a>
    <!-- <a id="anchor3Link2" href="#anchor3">Наши контакты</a>-->

		<h3>Контакты</h3>
		<p><i class="fa fa-phone" aria-hidden="true"></i><a href="tel: +79261470304"><br>+7(926)147-03-04</a> <br><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto: telula@icloud.com">Написать</a></p>
		<p><? echo date ("Y") ;?>  © </p>




	</footer>
    <!--    <div id="cls_ctnr">
            <div id="cls_pop">
                <span class="cls_close" onclick="document.getElementById('cls_ctnr').style.display='none'; return false;">X</span>
                <h4>Как? Уже уходите?</h4>
              <p>Мои коллеги будут опечалены...</p>
            </div>
        </div>-->

        <div id="cls_ctnr">
            <div id="cls_pop">
                <a  id="setCookie" class="cls_close" href="#" title="Закрыть" onclick="document.getElementById('cls_ctnr').style.display='none'; return false;">X</a>
                <h4>Как? Уже уходите?</h4>
                <p>Мои коллеги будут опечалены.</p>
            </div>
        </div>

    </div>
        </div>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script type='text/javascript' src='TweenMax.js'></script>
    <script type='text/javascript' src='TweenLite.js'></script>

<!--<script type="text/javascript" src="jquery.scrollmagic.min.js"></script>-->

    <script type='text/javascript' src='https://coreymade.design/wp-content/themes/coreymade/js/waypoints.js?ver=1'></script>
    <script type='text/javascript' src='https://coreymade.design/wp-content/themes/coreymade/js/scrollmagic.js?ver=1'></script>
    <script type='text/javascript' src='https://coreymade.design/wp-content/themes/coreymade/js/scrollmagic-gsap.js?ver=1'></script>
    <script type='text/javascript' src='https://coreymade.design/wp-content/themes/coreymade/js/scroll-plugin.js?ver=1'></script>
    <script type='text/javascript' src='https://coreymade.design/wp-content/themes/coreymade/js/three.min.js?ver=1'></script>
    <script type='text/javascript' src='https://coreymade.design/wp-content/themes/coreymade/js/CSSPlugin.min.js?ver=1'></script>
    <script type='text/javascript' src='https://coreymade.design/wp-content/themes/coreymade/js/EasePack.min.js?ver=1'></script>
    <script type='text/javascript' src='https://coreymade.design/wp-content/themes/coreymade/js/dat-gui.min.js?ver=1'></script>
    <script type="text/javascript" src="debug.addIndicators.js"></script>

<!--<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
<script src="stats.min.js"></script>


<!--<script src="stats.js"></script>-->

<script src="particles.min.js"></script>
<script src="app.js"></script>

    <script  src="assets/script.js"></script>
    <script src="assets/jquery.cookie.js"></script>






</body>

</html>
