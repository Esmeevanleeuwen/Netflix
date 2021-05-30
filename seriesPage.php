<!DOCTYPE html>
<html lang="en">
  <head>
    <html lang="en"></html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Netflix</title>
  </head>

  <body>
    <header id="myHeader">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <div class="navbar" id="myNavbar">
        <img class="logo" src="./images/logo.png" src="index.html">
        <img class="logoR" src="./images/logosmall.jpg" src="index.html">
          <div class="navbaritems">
            <a href="index.html">Homepagina</a>
            <a href="#actie">Actie</a>
            <a href="#specials">Specials</a> 
            <a href="filter.html">Filter</a>
          </div>
        <div class="search-container">
          <form>
            <input type="text" placeholder="Titels, persone, genres " name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
      </div>

      <!--verander van normaal naar responsive-->
      <script>
        function myFunction() {
          var x = document.getElementById("myNavbar");
          if (x.className === "navbar") {
            x.className += " responsive";
          } else {
            x.className = "navbar";
          }
          if (window.pageYOffset > sticky) {
          header.classList.add("sticky");
          } else {
          header.classList.remove("sticky");
          }
        }
      </script>
    </header>
        
    <div class="homevideo">
      <iframe width="100%" height="600px" src="https://www.youtube.com/embed/c4LtoWQaLxk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      
    </div>

    <main class="content">
      <h2 class="film">Populair</h2>
        <div class="slide">
          <img class="films" src="./films/avatar.JPG">
          <img class="films" src="./films/bazar.JPG">
          <img class="films" src="./films/blood.JPG">
          <img class="films" src="./films/breathe.JPG">
          <img class="films" src="./films/bridgerton.JPG">
          <img class="films" src="./films/jessica.JPG">
          <img class="films" src="./films/avatar.JPG">
          <img class="films" src="./films/bazar.JPG">
          <img class="films" src="./films/blood.JPG">
          <img class="films" src="./films/breathe.JPG">
          <img class="films" src="./films/bridgerton.JPG">
          <img class="films" src="./films/jessica.JPG">
        </div>
            
        <div id="drama">
          <h2 class="film">Drama</h2>
          <div class="slide">             
            <img class="films" src="./films/davinchie.JPG">               
            <img class="films" src="./films/divirgent.JPG">
            <img class="films" src="./films/dragon.JPG">
            <img class="films" src="./films/giver.JPG">
            <img class="films" src="./films/littlewomen.JPG">
            <img class="films" src="./films/casa.JPG">
            <img class="films" src="./films/davinchie.JPG">
            <img class="films" src="./films/divirgent.JPG">
            <img class="films" src="./films/dragon.JPG">
            <img class="films" src="./films/giver.JPG">
            <img class="films" src="./films/littlewomen.JPG">
            <img class="films" src="./films/casa.JPG">
          </div>
        </div>  

        <div>
          <h2 class="film">Spannende films</h2>
          <div class="slide">
            <img class="films" src="./films/nowyouseeme.JPG" id="myBtn">
            <img class="films" src="./films/ocean.JPG">
            <img class="films" src="./films/sightless.JPG">
            <img class="films" src="./films/spinning.JPG">
            <img class="films" src="./films/zodiac.JPG">
            <img class="films" src="./films/san.JPG">
            <img class="films" src="./films/nowyouseeme.JPG">
            <img class="films" src="./films/ocean.JPG">
            <img class="films" src="./films/sightless.JPG">
            <img class="films" src="./films/spinning.JPG">
            <img class="films" src="./films/zodiac.JPG">
            <img class="films" src="./films/san.JPG">
          </div>
        </div>
             
        <div id="actie">
          <h2 class="film">Actie films</h2>
          <div class="slide">
            <img class="films" src="./films/batman.JPG">
            <img class="films" src="./films/fast.JPG">
            <img class="films" src="./films/fast2.JPG">
            <img class="films ext" src="./films/spider.JPG">
            <img class="films ext" src="./films/fast3.JPG">
            <img class="films ext" src="./films/timeless.JPG">
            <img class="films" src="./films/batman.JPG">
            <img class="films" src="./films/fast.JPG">
            <img class="films" src="./films/fast2.JPG">
            <img class="films ext" src="./films/spider.JPG">
            <img class="films ext" src="./films/fast3.JPG">
            <img class="films ext" src="./films/timeless.JPG">
          </div>
        </div>   

        <div id="specials">
          <h2 class="film">Specials</h2>
          <div class="slide">
            <img class="specials" src="./films/avatar.JPG">
            <img class="specials" src="./films/bazar.JPG">
            <img class="specials" src="./films/blood.JPG">
            <img class="specials" src="./films/breathe.JPG">
            <img class="specials" src="./films/bridgerton.JPG">
            <img class="specials" src="./films/jessica.JPG">
            <img class="specials" src="./films/avatar.JPG">
            <img class="specials" src="./films/bazar.JPG">
            <img class="specials" src="./films/blood.JPG">
            <img class="specials" src="./films/breathe.JPG">
            <img class="specials" src="./films/bridgerton.JPG">
            <img class="specials" src="./films/jessica.JPG">
          </div>
        </div>

        <div>
          <h2 class="film">Drama</h2>
          <div class="slide">             
            <img class="films" src="./films/davinchie.JPG">               
            <img class="films" src="./films/divirgent.JPG">
            <img class="films" src="./films/dragon.JPG">
            <img class="films" src="./films/giver.JPG">
            <img class="films" src="./films/littlewomen.JPG">
            <img class="films" src="./films/casa.JPG">
            <img class="films" src="./films/davinchie.JPG">
            <img class="films" src="./films/divirgent.JPG">
            <img class="films" src="./films/dragon.JPG">
            <img class="films" src="./films/giver.JPG">
            <img class="films" src="./films/littlewomen.JPG">
            <img class="films" src="./films/casa.JPG">
          </div>
        </div>  

        <div>
          <h2 class="film">Spannende films</h2>
          <div class="slide">
            <img class="films" src="./films/nowyouseeme.JPG">
            <img class="films" src="./films/ocean.JPG">
            <img class="films" src="./films/sightless.JPG">
            <img class="films" src="./films/spinning.JPG">
            <img class="films" src="./films/zodiac.JPG">
            <img class="films" src="./films/san.JPG">
            <img class="films" src="./films/nowyouseeme.JPG">
            <img class="films" src="./films/ocean.JPG">
            <img class="films" src="./films/sightless.JPG">
            <img class="films" src="./films/spinning.JPG">
            <img class="films" src="./films/zodiac.JPG">
            <img class="films" src="./films/san.JPG">
          </div>
        </div>  

        <div>
          <h2 class="film">Actie films</h2>
          <div class="slide">
            <img class="films" src="./films/batman.JPG">
            <img class="films" src="./films/fast.JPG">
            <img class="films" src="./films/fast2.JPG">
            <img class="films ext" src="./films/spider.JPG">
            <img class="films ext" src="./films/fast3.JPG">
            <img class="films ext" src="./films/timeless.JPG">
            <img class="films" src="./films/batman.JPG">
            <img class="films" src="./films/fast.JPG">
            <img class="films" src="./films/fast2.JPG">
            <img class="films ext" src="./films/spider.JPG">
            <img class="films ext" src="./films/fast3.JPG">
            <img class="films ext" src="./films/timeless.JPG">
          </div> 
        </div>

        <div id="myModal" class="modal">
          <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/u_diRgwPCS8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        <div class="modal-body">
          <br>
          <div class="info">
            <p>Goochelaars in Las Vegas spelen Robin Hood. Minder afgezaagd dus dan de gebruikelijke Vegas-show.</p>
          </div>
          <br>
          <div class="meer-zoals-dit">
            <h3>Meer zoals dit</h3>
            <div class="row">
              <div class="column">
                <div class="card">
                  <img class="voorgesteld" src="./films/ocean.JPG" alt="">
                </div>
          </div>
  
              <div class="column">
                <div class="card">
                  <img class="voorgesteld" src="./films/ocean.JPG" alt="">
                </div>
              </div>
                        
              <div class="column">
                <div class="card">
                  <img class="voorgesteld" src="./films/ocean.JPG" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>

        <span style= "padding: 46px; margin: 75px;"></span>

        <div class="modal-footer">
          <h3 class="over"> Over Now You See Me </h3>
          <div>
            <p class="inline grey">Regisseur:</p> <p class="inline">Louis Leterrier</p>
          </div>
          <div>
            <p class="inline grey">Cast:</p> <p class="inline"> Jesse Eisenberg, Mark Ruffalo, Woody Harrelson, Mélanie Laurent, Isla Fisher, Dave Franco, Michael Caine, Morgan Freeman, Common, Michael Kelly </p>
          </div>
          <div>
            <p class="inline grey">Schrijver:</p> <p class="inline">Boaz Yakin, Edward Ricourt, Ed Solomon</p>
          </div>
          <div>
            <p class="inline grey">Genres:</p> <p class="inline">Misdaadfilms, Misdaadthrillers, Thrillerfilms, Mysteries</p>
          </div>
          <div>
            <p class="inline grey">Deze titel is:</p> <p class="inline">Spannend, Meeslepend</p>
          </div>
          <div>
            <p class="inline grey">Leeftijdsclassificatie:</p> <p class="inline"> Bevat uitingen van geweld, Kan angst en spanningen veroorzaken. Geschikt voor 12 jaar en ouder</p>
          </div>
        </div>
      </div>    
    </main>

    <footer>
      <ul>
        <li>Netflix</li>
        <li>Helpcenterum</li>
        <li>Nederland, the netherlands</li>
        <li>3911, 0315</li>
      </ul>
      <ul>
        <li>Vacatures</li>
        <li>Privacy</li>
        <li>Contact</li>
        <li>Audioscriptie</li>
      </ul>
      <ul>
        <li>Blog</a></li>
        <li>Werk</a></li>
        <li>Prive beleid</a></li>
        <li>Contact</a></li>
      </ul>
      <ul>
        <li><img src="./images/logosmall.jpg"class="logosmall" alt="logo"></li>
        <li>&copy; 1997-2021 Netflix, Inc. </li>
      </ul>
    </footer>

    <script>
      // Pak de modal
      var modal = document.getElementById("myModal");
            
      // De knop die de modal opent
      var btn = document.getElementById("myBtn");
            
      // Het <span> element dat de modal sluit
      var span = document.getElementsByClassName("close")[0];
            
      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }
            
      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }
            
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
      }
    </script>

    <script>
      window.onscroll = function() {myFunction()};

      // Pak de header
      var header = document.getElementById("myHeader");
      
      // Pak de start positie van de header
      var sticky = header.offsetTop;
    </script>
  </body>
</html>
