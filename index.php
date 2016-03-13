<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Serviciul EvD Security Channels va ajuta sa creati intr-un mod interactiv un canal permanent.">
    <meta name="author" content="Anonymous.">
    <meta name="keywords" content="ts3,teamspeak3,channels,free,evd-security,romania">

    <title>EvD Security - Create your channel</title>

    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/animation.css" rel="stylesheet">
		<link href="css/checkbox/orange.html" rel="stylesheet">
		<link href="css/preview.css" rel="stylesheet">
		<link href="css/authenty.css" rel="stylesheet">
	
		<!-- Font Awesome CDN -->
		<link href="netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <style type="text/css"></style></head>
  <body style="">
		
		<section id="authenty_preview" style="height: 512px;">
			<section id="signin_main" class="authenty signin-main" style="height: 512px;">
				<div class="section-content">
				  <div class="wrap">
					  <div class="container">	  
							<div class="form-wrap">
								<div class="row">
									<div id="form_1" data-animation="bounceIn" class="animated bounceIn">
										<div class="form-header">
										  <i class="fa fa-user"></i>
                                            									  </div>
									  <div class="form-main">
										  <form method="post" action="crear.php">
											  <div class="form-group"> 
									  			<input type="text" name="name" class="form-control" placeholder="Numele canalului" required="required" pattern="[a-zA-Z]{4,22}" title="Numele trebuie sa aiba intre 4 si 22 caractere, sa nu includa simboluri sau cifre." value="">
											    <input type="text" name="subname" class="form-control" placeholder="Numele sub-canalului" required="required" pattern="[a-zA-Z]{3,22}" title="Trebuie să deții obligatoriu un subcanal pentru al gestiona.Numele trebuie sa aiba intre 3 si 22 caractere, sa nu includa simboluri sau cifre." value="">
												<input type="text" name="ChannelPass" class="form-control" placeholder="Parola canalului" required="required" pattern="{4,22}" title="Parola canalului trebuie sa contina minimum 4 charactere." value="">
												<input type="text" name="idts" class="form-control" placeholder="UniqueID-ul tau" required="required" title="UniqueID-ul trebuie sa contina un minimum de 27-28 charactere." pattern="{25,50}" value="">								
											  </div>
										    <button id="signIn_1" type="submit" class="btn btn-block signin">Create your channel</button>
										  </form>	
									  </div>
										<div class="form-footer">
											<div class="row">
												<div class="col-xs-7">
													<i class="fa fa-unlock-alt"></i>
													<a href="#UniqueID" id="HowToUniqueID">Gaseste UniqueID!</a>
												</div>
												<div class="col-xs-5">
													<i class="fa fa-check"></i>
													<a href="#ListaCanale" id="CreatedChannels">Channels</a>
												</div>
											</div>
										</div>		
								  </div>
								</div>
							</div>
					  </div>
				  </div>
				</div>
			</section>

            <section id="UniqueID" class="authenty signin-alt">
				<div class="section-content">
				  <div class="wrap">
					  <div class="container">
							<div class="title" data-animation="fadeInUp">
                                <center>
                                    <p>Cum aflu UniqueID-ul meu?</p>
                                    <iframe width="853" height="480" src="https://www.youtube.com/embed/rutteRHoag0?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                </center>
							</div>
						</div>
					</div>
				</div>
			</section>

      			    <section id="ListaCanale" class="authenty password-recovery">
				        <div class="section-content">
					        <div class="wrap">
						        <div class="container">
							        <div class="form-wrap">
								        <div class="row">
									        <div class="col-xs-12 col-sm-3 brand" data-animation="fadeInUp">
										        <h2>EvD Security</h2>
										        <p>Reguli & Cerințe</p>
									        </div>
									        <div class="col-sm-1 hidden-xs">
										        <div class="horizontal-divider"></div>
									        </div>
									        <div class="col-xs-12 col-sm-8 main" data-animation="fadeInLeft" data-animation-delay=".5s">

                                                <table class="table table-bordered">
                                                      <tr class="danger">
                                                        <th>Cerințe și Reguli pentru folosirea platformei</th>
                                                      </tr>
                                  </table>
                                                <p>
													Cerințe :<br/>
													1.Platforma poate fi folosită doar de cei ce dețin gradul Trusted nivel Bronze.<br/>
													2.Doar dacă nu ați deținu un canal în precedent veți putea folosi acum platforma.<br/>
													Reguli :<br/>
													1.Canalele ce nu prezintă activitate cel mult 5 zile lucrătoare vor fi șterse automat.<br/>
													2.Numele canalelor nu vor conține cuvinte obscene sau semne ($%^&&-_/?) , vor fi șterse sau neacceptate de sistem.<br/>
													3.Se acceptă doar un singur canal pe UniQID însoțit de gradul Bronze.<br/>
													4.Cei ce simpatizează spam-ul , ne pare rău , gradul de Bronze va fi acordat de către server doar la prezența activă timp de 30 de minute pe server.<br/><br/>
                                                    Platformă activă din: 09.03.2016 <br/>
                                                    Canale create în medie/zi: 16 <br/>
                                            </p>

									        </div>
								        </div>
									
							        </div>
						        </div>
					        </div>
				        </div>
			    </section>
	</section>

	  
    <!-- js library -->
		<script src="ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.icheck.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		
		<!-- authenty js -->
		<script src="js/authenty.js"></script>
		
		<!-- preview scripts -->
		<script src="js/preview/jquery.malihu.PageScroll2id.js"></script>
		<script src="js/preview/jquery.address-1.6.min.js"></script>
		<script src="js/preview/scrollTo.min.js"></script>
		<script src="js/preview/init.js"></script>
		
		
		<!-- preview scripts -->
		<script>
			(function($) {
				
				// get full window size
				$(window).on('load resize', function(){
				    var w = $(window).width();
				    var h = $(window).height();

				    $('section').height(h);
				});		

				// scrollTo plugin
                $('#HowToUniqueID').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });
				$('#CreatedChannels').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });
				
				// set focus on input
				var firstInput = $('section').find('input[type=text], input[type=email]').filter(':visible:first');
        
				if (firstInput != null) {
            firstInput.focus();
        }
				
				$('section').waypoint(function (direction) {
					var target = $(this).find('input[type=text], input[type=email]').filter(':visible:first');
					target.focus();
				}, {
	          offset: 300
	      }).waypoint(function (direction) {
					var target = $(this).find('input[type=text], input[type=email]').filter(':visible:first');
			  	target.focus();
	      }, {
	          offset: -400
	      });
				
				
				// animation handler
				$('[data-animation-delay]').each(function () {
	          var animationDelay = $(this).data("animation-delay");
	          $(this).css({
	              "-webkit-animation-delay": animationDelay,
	              "-moz-animation-delay": animationDelay,
	              "-o-animation-delay": animationDelay,
	              "-ms-animation-delay": animationDelay,
	              "animation-delay": animationDelay
	          });
	      });
				
	      $('[data-animation]').waypoint(function (direction) {
	          if (direction == "down") {
	              $(this).addClass("animated " + $(this).data("animation"));
	          }
	      }, {
	          offset: '90%'
	      }).waypoint(function (direction) {
	          if (direction == "up") {
	              $(this).removeClass("animated " + $(this).data("animation"));
	          }
	      }, {
	          offset: '100%'
	      });
			
			})(jQuery);
		</script>
  	</body>
</html>