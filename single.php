<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>My Awesome Weblog</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand order-md-2" href="index.php">PHP-WEBLOG</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav order-md-1">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> دسته 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> دسته 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> دسته 3</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-3">

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-8 mb-4">
                    <div class="container">
                        <div class="row">

                            <div>
                                <img src="./img/1.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="p-3">

                                <div class="d-flex align-items-center">
                                    <h2>لورم ایپسوم 1</h2>
                                    <div class="mr-2">
                                        <span class="badge badge-secondary">دسته 2</span>
                                    </div>
                                </div>
                                <p class="text-justify">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                </p>

                                <p> نویسنده : شاهین محمدی </p>
                            </div>

                        </div>
                        <hr>

                        <!-- Commentes -->
                        <div class="row">
                            <div class="col-12">

                                <form method="post">
                                    <div class="form-group">
                                        <label for="name">نام</label>
                                        <input type="name" name="name" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="comment">متن کامنت</label>
                                        <textarea name="comment" class="form-control" rows="5"></textarea>
                                    </div>

                                    <button type="submit" name="post_comment" class="btn btn-outline-primary">ارسال</button>
                                </form>

                            </div>
                        </div>
                        <hr>
                        <div class="row p-md-3">

                            <p>تعداد کامنت : 3</p>

                            <div class="col-12 mb-3">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <img src="./img/boy.svg" width="70" height="70" class="rounded-circle" alt="Cinque Terre">

                                            <div class="mr-3">
                                                <h5 class="card-title"> علی </h5>
                                            </div>
                                        </div>

                                        <p class="card-text pt-3 pr-3">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <div class="card bg-light">

                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <img src="./img/boy.svg" width="70" height="70" class="rounded-circle" alt="Cinque Terre">

                                            <div class="mr-3">
                                                <h5 class="card-title"> محمد </h5>
                                            </div>
                                        </div>

                                        <p class="card-text pt-3 pr-3">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <div class="card bg-light">

                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <img src="./img/boy.svg" width="70" height="70" class="rounded-circle" alt="Cinque Terre">

                                            <div class="mr-3">
                                                <h5 class="card-title"> صادق </h5>
                                            </div>
                                        </div>

                                        <p class="card-text pt-3 pr-3">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-md-4 mb-3">

                    <div class="card bg-light mb-3">
                        <div class="card-body">
                            <h5 class="card-title">جستجو در وبلاگ</h5>
                            <form action="search.php" method="get">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend order-2">
                                        <button class="btn btn-outline-primary" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <input name="search" type="text" class="form-control" placeholder="جستجو ...">
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="list-group mb-3">
                        <a href="#" class="list-group-item list-group-item-action active">
                            دسته بندی ها
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            دسته 1
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            دسته 2
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            دسته 3
                        </a>
                    </div>


                    <div class="card bg-light mb-3 p-3">
                        <div class="card-body">

                            <form method="post">
                                <div class="form-group">
                                    <label for="name">نام</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="نام خود را وارد کنید.">

                                </div>
                                <div class="form-group">
                                    <label for="email">ایمیل</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="ایمیل خود را وارد کنید.">
                                </div>

                                <button type="submit" name="subscribe" class="btn btn-outline-primary btn-block">ارسال</button>
                            </form>
                        </div>
                    </div>

                    <div class="card p-3">
                        <div class="card-body">
                            <h3> درباره ما </h2>
                                <p class="text-justify">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center text-white bg-dark py-4">
        <div class="container">
            <div class="row flex-column">
                <div>
                    <p class="">کلیه حقوق و محتوای این سایت متعلق به امیر شماس می باشد</p>
                </div>
                <div>
                    <a href="#"><i class="fab fa-facebook fa-2x text-white"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-2x text-white mr-2"></i></a>
                    <a href="#"><i class="fab fa-telegram fa-2x text-white mr-2"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>