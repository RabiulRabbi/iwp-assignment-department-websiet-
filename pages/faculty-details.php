<?php include("./includes/html-header.php"); ?>

<body>
    <?php include("./topheader.php"); ?>
    <?php include("./navbar.php"); ?>

    <div class="carousel-faculty">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div> -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/image1 - Copy.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Faculty of Science & Engineering</h1>
                    </div>
                    <div class="carousel-overlay"></div>
                </div>
                <div class="carousel-item">
                    <img src="./images/image1 - Copy.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Software Lab</h1>
                    </div>
                    <div class="carousel-overlay"></div>
                </div>
                <div class="carousel-item">
                    <img src="./images/image1 - Copy.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Hardware Lab</h1>
                    </div>
                    <div class="carousel-overlay"></div>
                </div>
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
    <!-- departments -->
    <div class="card-section" style="padding-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="faculty col-md-4">
                    <a href="./cse.php">
                        <div style=" box-shadow: -1px -1px 7px 7px rgba(0,0,0,0.17); box-sizing: border-box;" class="card p-2 mb-5 bg-body rounded">
                            <img class="card-img-top"><img style="border-radius: 10px;padding: 10px;" src="./images/University/software-lab.jpg" alt=" Card image cap">
                            <div class="card-body">
                                <h5 style="color: #fff; text-align: center; background-color: #5475e5;padding: 10px; border-radius: 5px;" class="card-title ">Computer Science & Engineering</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="faculty col-md-4">
                    <a href="./cse.php">
                        <div style=" box-shadow: -1px -1px 7px 7px rgba(0,0,0,0.17); box-sizing: border-box;" class="card p-2 mb-5 bg-body rounded">
                            <img class="card-img-top"><img style="border-radius: 10px;padding: 10px;" src="./images/University/eee.jpg" alt=" Card image cap">
                            <div class="card-body">
                                <h5 style="color: #fff; text-align: center; background-color: #5475e5;padding: 10px; border-radius: 5px;" class="card-title ">Electrical & Electronic Engineering</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="faculty col-md-4">
                    <a href="./cse.php">
                        <div style=" box-shadow: -1px -1px 7px 7px rgba(0,0,0,0.17); box-sizing: border-box;" class="card p-2 mb-5 bg-body rounded">
                            <img class="card-img-top"><img style="border-radius: 10px;padding: 10px;" src="./images/University/ese.jpg" alt=" Card image cap">
                            <div class="card-body">
                                <h5 style="color: #fff; text-align: center; background-color: #5475e5;padding: 10px; border-radius: 5px;" class="card-title ">Environmental Science & Engineering</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="faculty col-md-4">
                    <a href="./cse.php">
                        <div style=" box-shadow: -1px -1px 7px 7px rgba(0,0,0,0.17); box-sizing: border-box;" class="card p-2 mb-5 bg-body rounded">
                            <img class="card-img-top"><img style="border-radius: 10px;padding: 10px;" src="./images/University/stst.jpg" alt=" Card image cap">
                            <div class="card-body">
                                <h5 style="color: #fff; text-align: center; background-color: #5475e5;padding: 10px; border-radius: 5px;" class="card-title ">Statistics</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>