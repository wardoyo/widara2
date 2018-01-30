<?php
use yii\helpers\Html;
?>

<!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../views/uploads/images/1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../views/uploads/images/2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../views/uploads/images/3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <?= Html::img('@web/img/left.png', ['alt'=>'left']);?>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <?= Html::img('@web/img/right.png', ['alt'=>'right']);?>
                <span class="sr-only">Next</span>
            </a>
    </div>

    <!-- About -->
    <section class="about-section" id="about">
        <div class="container">

            <div class="row justify-content-md-center title-section">
                <div class="col-md-8">
                    <h2>Tentang Widara</h2>
                    <div class="line gradient"></div>
                    <p>Apapun kebutuhan Anda, bisnis akuntansi & perbankan, mining, pengembangan hard & soft skill,
                        maupun managerial, Kami siap melayani Anda. </p>
                </div>
            </div>
        
            <div class="row mt-5 align-items-center">
                <div class="col-md-4">
                    <h4>Program Benefits</h4>
                    <div class="d-flex flex-row">
                        <div class="p-2 align-self-center">
                            <i class="fa fa-plus-square-o fa-lg" aria-hidden="true"></i>
                        </div>
                        <div class="p-2 align-self-center">Big Time Pay-off</div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-2 align-self-center">
                            <i class="fa fa-plus-square-o fa-lg" aria-hidden="true"></i>
                        </div>
                        <div class="p-2 align-self-center">Active</div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-2 align-self-center">
                            <i class="fa fa-plus-square-o fa-lg" aria-hidden="true"></i>
                        </div>
                        <div class="p-2 align-self-center">Skillfull</div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-2 align-self-center">
                            <i class="fa fa-plus-square-o fa-lg" aria-hidden="true"></i>
                        </div>
                        <div class="p-2 align-self-center">Productive</div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-2 align-self-center">
                            <i class="fa fa-plus-square-o fa-lg" aria-hidden="true"></i>
                        </div>
                        <div class="p-2 align-self-center">Profitable</div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-2 align-self-center">
                            <i class="fa fa-plus-square-o fa-lg" aria-hidden="true"></i>
                        </div>
                        <div class="p-2 align-self-center">Hit The Target</div>
                    </div>
                </div>

                <div class="col-md-8">
                  
                        <div class="p-2">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                                pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                                Cras dapibus.
                            </p>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                            <div class="p-2 align-self-center">
                                <footer class="blockquote-footer">Someone famous in
                                    <cite title="Source Title">Source Title</cite>
                                </footer>
                            </div>
                            <div class="p-2 align-self-center">
                                <?= Html::img('@web/img/ceo.jpg', ['alt'=>'', 'width'=>'64', 'height'=>'64', 'class'=>'img-fluid rounded-circle']);?>
                            </div>
                        </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Call to action -->
    <section class="call-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2>Lorem Ipsum Dolor Sit ?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                    <a class="btn btn-outline-primary" href="#contact" role="button">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Section -->
    <section class="program-section" id="program">
        <div class="container">

            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <h2>Program Widara</h2>
                    <div class="line gradient"></div>
                    <p>Apapun kebutuhan Anda, bisnis akuntansi & perbankan, mining, pengembangan hard & soft skill, maupun managerial, Kami
                    siap melayani Anda. </p>
                </div>
            </div>


            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="d-flex flex-column">
                        <div class="p-2">
                            <svg class="icon icon-canvas">
                                <use xlink:href="../views/site/icons/wicon.svg#team" />
                            </svg>
                        </div>
                        <div class="p-2"><h4>Training Program</h4></div>
                        <div class="p-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column">
                        <div class="p-2">
                            <svg class="icon icon-canvas">
                                <use xlink:href="../views/site/icons/wicon.svg#teamwork" />
                            </svg>
                        </div>
                        <div class="p-2"><h4>Gathering</h4></div>
                        <div class="p-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column">
                        <div class="p-2">
                            <svg class="icon icon-canvas">
                                <use xlink:href='../views/site/icons/wicon.svg#worldwide' />
                            </svg>
                        </div>
                        <div class="p-2"><h4>Pension Program</h4></div>
                        <div class="p-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="schedule-section" id="schedule">
        <div class="container">

            <div class="row justify-content-md-start">
                <div class="col-md-4">
                    <div class="d-inline-flex">
                        <h4>Jadwal Pelatihan</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <div class="d-flex flex-column">
                
                    <div class="p-2">
                        <div class="panel-schedule p-4">
                             <div class="d-md-inline-flex">
                                <div class="px-4">No</div>
                                <div class="px-4"><span class="badge badge-pill badge-dark">Tanggal</span></div>
                                <div class="px-4">Lorem Ipsum Dolor Sit Amet</div>
                                <div class="px-4">Kategori</div>
                             </div>
                        </div>
                    </div>

                    <div class="p-2">
                        <div class="panel-schedule p-4">
                            <div class="d-md-inline-flex">
                                <div class="px-4">No</div>
                                <div class="px-4"><span class="badge badge-pill badge-dark">Tanggal</span></div>
                                <div class="px-4">Lorem Ipsum Dolor Sit Amet</div>
                                <div class="px-4">Kategori</div>
                            </div>
                        </div>
                    </div>

                    <div class="p-2">
                        <div class="panel-schedule p-4">
                            <div class="d-md-inline-flex">
                                <div class="px-4">No</div>
                                <div class="px-4"><span class="badge badge-pill badge-dark">Tanggal</span></div>
                                <div class="px-4">Lorem Ipsum Dolor Sit Amet</div>
                                <div class="px-4">Kategori</div>
                            </div>
                        </div>
                    </div>

                    <div class="p-2">
                        <div class="panel-schedule p-4">
                            <div class="d-md-inline-flex">
                                <div class="px-4">No</div>
                                <div class="px-4"><span class="badge badge-pill badge-dark">Tanggal</span></div>
                                <div class="px-4">Lorem Ipsum Dolor Sit Amet</div>
                                <div class="px-4">Kategori</div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
            </div>

            <div class="row justify-content-center">
                  
                        <div class="mt-4">
                            <a class="btn btn-outline-primary" href="schedule.html" role="button">Selengkapnya</a>
                        </div>
                  
            </div>

        </div>
    </section>

    <section class="blog-section" id="blog">
        <div class="container">

            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <h2>Blog</h2>
                    <div class="line gradient"></div>
                    <p>Lorem Ipsum Dolor Sit Amet.</p>
                </div>
            </div>
            

            <div class="row justify-content-center">

                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="http://via.placeholder.com/350x200" alt="Card image cap">
                        <div class="card-body">
                            <a href="single.html">
                                <h5 class="card-title">Card title</h5>
                            </a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="http://via.placeholder.com/350x200" alt="Card image cap">
                        <div class="card-body">
                            <a href="single.html">
                                <h5 class="card-title">Card title</h5>
                            </a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="http://via.placeholder.com/350x200" alt="Card image cap">
                        <div class="card-body">
                            <a href="single.html">
                                <h5 class="card-title">Card title</h5>
                            </a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center">
            
                <div class="mt-3">
                    <a class="btn btn-outline-primary" href="blog.html" role="button">Selengkapnya</a>
                </div>
            
            </div>

        </div>
    </section>

    <section class="contact-section" id="contact">
        <div class="container">

            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <h2>Kontak</h2>
                    <div class="line gradient"></div>
                    <p>Lorem Ipsum Dolor Sit Amet.</p>
                </div>
            </div>

        

            <div class="row mt-5">
                <div class="col">
                    <form id="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Name</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Email</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Email" value="" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom03">Subject</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Subject" value="" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="exampleFormControlTextarea1">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-secondary" type="submit">Submit form</button>
                    </form>
                </div>
            </div>

        </div>
    </section>