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
                    <h1 class="display-4 fw-bolder">Ваша корпа</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Помоћ доступна 24/7</p>
                    <p class="lead fw-normal text-white-50 mb-0">e-prodavnica@gmail.com</p>
                </div>
            </div>
        </header>
        <!-- Section 1 -->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php 
                        if("Ima nesto u korpi"):
                    ?>
                    <!-- Cards -->
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Име продукта</h5>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                                <div class="text-center">
                                    На стању: 20
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Наручи / Купљено <!-- Ovo je dinamicno u zavisnosti od statusa narucene stavke --></a></div> 
                            </div>
                        </div>
                    </div>
                    <? elseif("Nema nista u korpi"): ?>
                        <div class="h3 fw-bolder py-5 my-5 text-black">
                            Тренутно немате ништа у вашој корпи
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <?php 
            include "../components/footer.php";
        ?>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
