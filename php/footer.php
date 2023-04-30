 <!-- map area start -->
    <div id="map">
	
	</div>
    <!-- map area end -->
    <!-- contact area start -->
    <div class="contact-area bg-theme">
        <div class="container">
            <section class="contact-inner" id="contact">
                <div class="section-title text-black">
                    <h2>Contact US</h2>
                </div>
                <div class="contact-flex-container">
                    <div class="contact-address">
                        <h4 class="contact-title">Address</h4>
                        <p> </p>
                        <ul>
                            <li class="h-addres"><i class="fa fa-home"></i>New Ashok Nager <br>Delhi,India</li>
                            <li><i class="fa fa-phone"></i>+91 9149260839</li>
                            <li><i class="fa fa-envelope"></i>ssp9448@gmail.com</li>
                        </ul>
                    </div>
                    <div class="contact-form">
                        <h4 class="contact-title">Get In Touch</h4>
                        <form action="../lib/action.php" method="post">
                            <input type="text" class="input" name="name" placeholder="Your Name *">
                            <input type="email" class="input" name="email" placeholder="Your Email address*">
                            <input type="text" class="input" name="subject" placeholder="Your Subject*">
                            <textarea name="msg" class="input" id="msg" placeholder="Your Message*"></textarea>
							<input type="hidden" name="act" value="save_contact"/>
                            <input type="submit" id="send" value="Send">
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- contact area end -->
    <!-- footer area start -->
    <footer>
        <div class="footer-area bg-theme ptb--50">
            <div class="container">
                <div class="footer-inner">
                    <ul class="fsocial">
                        <li><a href="https://www.facebook.com/ssp9448"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/sanjeev-kumar-50a98417a/"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                     <p class="copy-right"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | www.bvrsoftware.com <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Sanjeev kumar</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
    <!-- google map activation start-->
    <script>
        function initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 40.674, lng: -73.945},
          zoom: 12,
          styles: [
              {
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#f5f5f5"
                  }
                ]
              },
              {
                "elementType": "labels",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "elementType": "labels.icon",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#616161"
                  }
                ]
              },
              {
                "elementType": "labels.text.stroke",
                "stylers": [
                  {
                    "color": "#f5f5f5"
                  }
                ]
              },
              {
                "featureType": "administrative.land_parcel",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#bdbdbd"
                  }
                ]
              },
              {
                "featureType": "administrative.neighborhood",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#eeeeee"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#757575"
                  }
                ]
              },
              {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#e5e5e5"
                  }
                ]
              },
              {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#9e9e9e"
                  }
                ]
              },
              {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#ffffff"
                  }
                ]
              },
              {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#757575"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#dadada"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#616161"
                  }
                ]
              },
              {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#9e9e9e"
                  }
                ]
              },
              {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#e5e5e5"
                  }
                ]
              },
              {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#eeeeee"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#c9c9c9"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#9e9e9e"
                  }
                ]
              }
            ]
        });
      }
    </script>
    <!-- google map activation end -->
    <!-- Scripts -->
    <script src="../assets/js/jquery-3.2.0.min.js"></script>
    <script src="../assets/js/jquery-ui.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="../assets/js/raindrops.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBO_5h890WNShs_YLGivCBfs2U89qXR-7Y&callback=initMap"></script>
    <script src="../assets/js/theme.js"></script>
	<script src="../assets/js/validation.js"></script>
</body>

</html>