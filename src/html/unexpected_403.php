<html>

<head>
   <style>
      @import url('https://fonts.googleapis.com/css?family=Press+Start+2P');


      html,
      body {
         width: 100%;
         height: 100%;
         margin: 0;
      }

      * {
         font-family: 'Press Start 2P', cursive;
         box-sizing: border-box;
      }

      #app {
         padding: 1rem;
         background: black;
         display: flex;
         height: 100%;
         justify-content: center;
         align-items: center;
         color: #54FE55;
         text-shadow: 0px 0px 10px;
         font-size: 6rem;
         flex-direction: column;

      }

      #app .txt {
         font-size: 1.8rem;
         text-align: center;
      }

      @keyframes blink {
         0% {
            opacity: 0
         }

         49% {
            opacity: 0
         }

         50% {
            opacity: 1
         }

         100% {
            opacity: 1
         }
      }

      .blink {
         animation-name: blink;
         animation-duration: 1s;
         animation-iteration-count: infinite;
      }
   </style>
</head>

<body>
   <div id="app">
      <div>403</div>
      <div class="txt">
         Unexpected action detected! <br>
         <span style="font-size:10px;">Please contact our help desk with request id <b>
               <?= $_SERVER['REQUEST_ID'] ?>
            </b>, sorry :( <span class="blink">_</span><br /></spa>

      </div>
   </div>
</body>

</html>