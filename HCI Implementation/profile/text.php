

   <!-- Compiled and minified CSS -->
    
<div class="" style="display: none">
  <div class="">
    <nav>
      <div class="">
        <div class="">
          <a href="#" class="">Text to speech example</a>
        </div>
      </div>
    </nav>
  </div>
  <form class="">
    <div class="">
      <label>Choose voice</label>
      <select id=""></select>
    </div>
    <div class="">
      <div class="">
        <label>Rate</label>
        <p class="">
          <input type="range" id="rate" min="1" max="100" value="10" />
        </p>
      </div>
      <div class="">
        <label>Pitch</label>
        <p class="">
          <input type="range" id="pitch" min="0" max="2" value="1" />
        </p>
      </div>
      <div class="">
        <p class="">N.B. Rate and Pitch only work with native voice.</p>
      </div>
    </div>
    <div class="">
      <div class="">
        <textarea id="" class=""></textarea>
        <label class="">Write message</label>
      </div>
    </div>
    <a href="#" id="" class="">Speak</a>
  </form>  
</div>

<div id="modal1" class="modal">
  <h4>Speech Synthesis not supported</h4>
  <p>Your browser does not support speech synthesis.</p>
  <p>We recommend you use Google Chrome.</p>
  <div class="action-bar">
    <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Close</a>
  </div>
</div>


<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script type="text/javascript">
            $(function(){
  if ('speechSynthesis' in window) {
    speechSynthesis.onvoiceschanged = function() {
      var $voicelist = $('#voices');

      if($voicelist.find('option').length == 0) {
        speechSynthesis.getVoices().forEach(function(voice, index) {
          var $option = $('<option>')
          .val(index)
          .html(voice.name + (voice.default ? ' (default)' :''));

          $voicelist.append($option);
        });

        $voicelist.material_select();
      }
    }

    $(document).on("click",".appDetails", function () {
      if($(this).is("input")){
          var text = $(this).attr('placeholder');
          
      }
      else {
          var text = $(this).html(); // or var clickedBtnID = this.id
      }
      
      var msg = new SpeechSynthesisUtterance();
      var voices = window.speechSynthesis.getVoices();
      msg.voice = voices[$('#voices').val()];
      msg.rate = $('#rate').val() / 10;
      msg.pitch = $('#pitch').val();
      msg.text = text;

      msg.onend = function(e) {
        console.log('Finished in ' + event.elapsedTime + ' seconds.');
      };

      speechSynthesis.speak(msg);
      
    });

  
    

  } else {
    $('#modal1').openModal();
  }
});

            function applySound(){
              $('input').addClass('appDetails');
              $('span').addClass('appDetails');
              $('label').addClass('appDetails');
              $('p').addClass('appDetails');
              $('h1').addClass('appDetails');
              $('h2').addClass('appDetails');
              $('h3').addClass('appDetails');
              $('h4').addClass('appDetails');
              $('a').addClass('appDetails');
              $('button').addClass('appDetails');
            }


            function removeSound(){
              $('#appDetails').removeClass('appDetails');
             
            }
       $(document).ready
       (function() {
           applySound();
        });    

    </script>

