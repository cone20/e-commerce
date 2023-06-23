<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Е-продавница</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../styles.css" rel="stylesheet" />
        <link href="../main.css" rel="stylesheet" />
    </head>
    <body>
        <?php 
            require "../components/navbar.php";
        ?>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Ваш профил</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Помоћ доступна 24/7</p>
                    <p class="lead fw-normal text-white-50 mb-0">e-prodavnica@gmail.com</p>
                </div>
            </div>
            <?php 
                include "../components/profile.php";
            ?>
        </header>
        <!-- Admin panel -->
        <?php 
            if(isset($_SESSION['admin'])):
        ?>
            <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5 text-center">
                    <section id="register" class="w-100 d-flex justify-content-center">
                        <div class="container h-auto w-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                    <d class="" style="border-radius: 1rem;">
                                        <h3 class="display-6 mb-5 fw-bolder">Унеси нови продукт</h3>
                                        <form method="post" class="d-flex flex-column gap-3">
                                            <input type="text" name="name" class="inputs2" placeholder="Име продукта" required />
                                            <input type="text" name="price" class="inputs2" placeholder="Цена" required />
                                            <input type="number" name="quantity" class="inputs2" placeholder="Количина" required />
                                            <button class="btn btn-dark btn-lg btn-block" type="submit" name="new_product">Унеси продукт</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        <?php
            endif;
        ?>
        <!-- Footer-->
        <?php 
            include "../components/footer.php";
        ?>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
