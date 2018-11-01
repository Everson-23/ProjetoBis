<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Bis</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/icon2.png">
  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
  <link rel="stylesheet" type="text/css" href="css.css">
  <link rel="stylesheet" type="text/css" href="fili.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 <footer class="footer-distributed" id="co" style="position: relative;margin-top:80px; background-color:#0B4C5F">
        <div class="footer-left" id="">
            <p>
                <script>
                    (function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
                <center>
                    <div class="fb-page" data-href="https://www.facebook.com/bancobis/?ref=bookmarks" data-tabs="timeline"
                        data-height="150" data-width="300" data-small-header="true" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/bancobis/?ref=bookmarks" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/bancobis/?ref=bookmarks">BIS - Banco de Informatização e
                                Serviços</a></blockquote>
                    </div>
                </center>
            </p>
            <br>
            <p class="footer-company-name" id="tp" style="margin-left:108px;">BIS - Banco de Informatização e Serviços
                &copy; 2018</p>
        </div>
        <div class="footer-center">
            <div> <i class="fa fa-map-marker"></i>
                <p><span>Avenida IX, 91-A<br> Maracanaú / CE</span></p>
            </div>
            <div> <i class="fa fa-phone"></i>
                <p><span>85 8553-2430</span></p>
            </div>
            <div> <i class="fa fa-envelope"></i>
                <p><span>bis@bis.eti.br</span></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about" align="justify"> <span>Sobre a Empresa</span> O BIS – Foi instituído em
                1996 e vem prestando serviços na área de consultoria, desenvolvimento de sistema e parcerias em
                hardware e redes </p>
            <div class="footer-icons"> <a href="https://www.facebook.com/bancobis/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/?lang=pt-br" target="_blank"><i class="fa fa-twitter" title="A caminho"></i></a>
                <a href="https://github.com/" target="_blank"><i class="fa fa-github" title="A caminho"></i></a>
                <a href="https://www.instagram.com/contabis/" target="_blank"><i class="fa fa-instagram"></i></a> </div>
        </div>
    </footer>
    <div class="col-lg-12"> </div>
    </div>
    </footer>

    <!--Script do button top-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

  <div class="container">
    <div class="box">
       <span class="glyphicon glyphicon-menu-up" title="Voltar ao topo" style=" font-size: 45px;"></span>
    </div>
  </div>

  <script>
 $(document).ready(function(){
    $('.box').hide();

      $(window).scroll(function(){
         if($(this).scrollTop()>0){
            $('.box').fadeIn();
         }else{
            $('.box').fadeOut();
         }
    });
      $('.box').click(function(){
            $("html,body").animate({
                scrollTop:0
            },2000);     
        });
 });
  </script>