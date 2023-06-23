<!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand fw-bolder display-1 text-uppercase" href="http://localhost/e-commerce/">Е-продавница</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 text-center">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="http://localhost/e-commerce/">Почетна</a></li>
                    <?php if(isset($_SESSION["user"])): ?>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/e-commerce/pages/profile.php">Профил</a></li>
                    <li class="nav-item links"><a class="nav-link" href="http://localhost/e-commerce/pages/search.php">Претражи</a></li>
                    <?php endif; ?>
                </ul>
                <?php 
                    if(isset($_SESSION["user"])): ?>
                    <a class="links" href="http://localhost/e-commerce/pages/cart.php">
                        <div class="d-flex justify-content-center text-center mb-2">
                        <button id="card-btn" class="btn btn-outline-dark" type="button">
                            <i class="bi-cart-fill me-1"></i>     
                                Корпа
                                <span class="badge bg-dark text-white ms-1 rounded-pill">0 $</span>
                            </button>
                        </div>
                    </a>
                    <form method="post" class="d-flex justify-content-center text-center">
                        <button type="submit" name="logout" class="btn btn-danger px-2 mx-3">Излогуј се</button>
                    </form>
                <?php
                    elseif(!isset($_SESSION['user'])): 
                ?>
                <div class="d-flex flex-column flex-lg-row gap-sm-3 gap-lg-5 text-center">
                    <a class="nav-link links" href="#login">Пријави се</a>
                    <a class="nav-link links" href="#register">Направи налог</a>
                </div>
                <?php
                    endif;
                ?>
            </div>
        </div>
    </nav>

    <style>
        #card-btn:hover {
            .links {
                color: white;
            }
        }
        .links {
            text-decoration: none;
            color: black;
        }
        .links:hover {
            border-bottom: 1px solid blue;
            color: blue;
        }
    </style>