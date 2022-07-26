<?php
include('./includes/html-header.php');
?>

<body>
    <?php
    include('./topheader.php');
    include('./navbar.php')
    ?>
    <div class="d-flex justify-content-center health">
        <h3 class="container" style="color: #FFF; margin-top: 40px; z-index: 1;">JKKNIU Medical Center</h3>
        <div class="common-overlay"></div>
    </div>
    <div class="container">
        <div style="padding-top: 10px; text-align: justify; border:1px solid black; padding: 10px; border-radius: 10px; margin: 10px 0;">
            <div class="carousel-about">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/medical/medical1.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <!-- <div class="carousel-item">
                            <img src="./images/halls/agnibina.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/halls/bangagata.jpg" class="d-block w-100" alt="...">
                        </div> -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <br>
            <div style="text-align: center;">
                <div>
                    <p class="bg-dark" style="color:#fff; font-size: 30px; font-weight:700; padding: 10px 20px; border: 1px solid #000; border-radius: 10px;">Contacts</p>
                    <h6>Medical Center: Bethar Dan</h6>
                    <h6>Medical Officer:<span style="color: darkblue;font-weight:700;">D.Shariful Islam</span></h6>
                    <h6>Email: shariful1234@gmail.com</h6>
                    <h6>Phone: 01784014307</h6>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include('./footer.php');
?>

</html>>