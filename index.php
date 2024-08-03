
    <?php 
        include "config/connection.php";
        

        $stmt = $conectar -> prepare("SELECT * FROM posts ORDER BY id DESC");
        $stmt -> execute();

        $results = $stmt->fetchALL(PDO::FETCH_ASSOC);

        include('header.php'); 
    ?>



    <!-- Carroseul -->
    <section>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/banner-1.jpg" id="imgBanner" class="d-block w-100" alt="carrousel">
                    </div>
                    <div class="carousel-item active">
                        <img src="images/banner-1.jpg" id="imgBanner" class="d-block w-100" alt="carrousel">
                    </div>
                    <div class="carousel-item active">
                        <img src="images/banner-1.jpg" id="imgBanner" class="d-block w-100" alt="carrousel">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    
    <!-- CARDS -->
    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php foreach($results as $post): ?>

                <div class="col gy-5">
                    <div class="card">
                    <img src="<?=$post['image']?>" class="card-img-top" alt="..." height=300>
                        <div class="card-body">
                            <h5 class="card-title max-lines2 "><?=$post['title']?></h5>
                            <p class="max-lines"><?=$post['description']?></p>
                            <a class="eyes-card" href="viewPost.php?id=<?=$post['id']?>">
                                <i class="fas fa-eye check-icon">Ver</i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <div class="col gy-5">
                    <div class="card">
                    <img src="images/card1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>

              

            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>