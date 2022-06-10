<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <?php
                foreach ($produtos as $key => $value) {
                ?>
                <div class="card" style="width: 18rem;">
                    <img src="./content/<?php echo $value['image'];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value['collection'];?></h5>
                        <p class="card-text"><?php echo $value['id'];?></p>
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
        <div class="carousel-item">
        </div>
        <div class="carousel-item">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
    </div>
</div>