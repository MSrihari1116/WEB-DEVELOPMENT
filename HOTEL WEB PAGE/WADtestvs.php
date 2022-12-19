<?php
    include('navbar.php');
?>


    <section class="section-intro">
        <header>

            <h1 id="welcome1">PRESENTA</h1>

        </header>

        <div class="link-to-book-wrapper">
            <a class="link-to-book"
               href="loginreg.php">LOGIN</a>
        </div>
        <!--quick login-->

<?php
    if(!isset($_SESSION['user']))
        {
            include('quickloginbtn.php');
        }
?>        

    </section>


    <!----Section body-->
    <section class="about-section">
        <article>
            <h3 font family="Times New Roman">
                Although a great restaurant experience must include great food, a bad restaurant experience can be achieved through bad service alone.
            </h3><br><br>


            <p>
                Although the skills aren’t hard to learn, finding the happiness
            </p>

        </article>
    </section>

    <!--CorouselImg-->
    <div id="carouselExampleControls"
         class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn1.goibibo.com/voy_mmt/t_fs/htl-imgs/202107191902506712-31d23d94f3a811eba9d50a58a9feac02.jpg"
                     class="d-block w-100" alt="food">
            </div>
            <div class="carousel-item">
                <img src="https://cdn1.goibibo.com/voy_mmt/t_fs/htl-imgs/202107191902506712-2fccf412f3a811eb8e270a58a9feac02.jpg"
                     class="d-block w-100" alt="food">
            </div>
            <div class="carousel-item">
                <img src="https://cdn1.goibibo.com/voy_ing/t_fs/30306c40f3a811eb9fb60a58a9feac02.jpg"
                     class="d-block w-100" alt="food">
            </div>
        </div>
        <a class="carousel-control-prev"
           href="#carouselExampleControls"
           role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"
                  aria-hidden="true">
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next"
           href="#carouselExampleControls"
           role="button" data-slide="next">
            <span class="carousel-control-next-icon"
                  aria-hidden="true">
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
 

    <!--Footer-->

<?php
    include('footer.php');
?>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous">
    </script>




</body>

</html>