<script>
        $(document).ready(function(){
          $("a").on('click', function(event) {
        
            if (this.hash !== "") {
        
              event.preventDefault();
        
              // Store hash
              var hash = this.hash;
        
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){
        
                window.location.hash = hash;
              });
            } // End if
          });
        });
    </script>


    <script type="text/javascript">
        // $(document).ready(function ($) {
        //     $('.qualquer').magnificPopup({
        //         type: 'image',
  
        //         // To invoke the popup
        //         // using the 'a' tag
        //         delegate: 'a',
  
        //         // Enable the gallery
        //         gallery: {
        //             enabled: true
        //         }
        //     });
        // });
        $('.qualquer').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                  enabled:true
                }
            });
        });
        
        $('#myModal').on('shown.bs.modal', function () {
          $('#myInput').trigger('focus')
        });
        
        $('#terms').on('shown.bs.modal', function () {
          $('#myInput').trigger('focus')
        });
    </script>
    
    <script>
      var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>