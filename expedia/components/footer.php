    <footer id="footer" class="position-relative">
        <div class="container-fluid px-5">
            <div class="row px-3">
                <div class="col-md-3">
                    <div class="card border-0 bg-transparent">
                        <div class="card-body px-0 pb-0">
                            <h6 class="fw-semibold mb-3">Expedia</h6>
                            <ul class="ps-0">
                                <a href="" class="text-black">
                                    <li class="text-capitalize mb-1">about expedia</li>
                                </a>
                                <a href="" class="text-black">
                                    <li class="text-capitalize mb-1">jobs</li>
                                </a>
                                <a href="" class="text-black display-none display">
                                    <li class="text-capitalize mb-1">investors relations</li>
                                </a>
                                <a href="" class="text-black display-none display">
                                    <li class="text-capitalize mb-1">advertising</li>
                                </a>
                                <a href="" class="text-black display-none display">
                                    <li class="text-capitalize">media room</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 bg-transparent">
                        <div class="card-body pb-0">
                            <h6 class="fw-semibold mb-3">Expedia Sitemaps</h6>
                            <ul class="ps-0">
                                <a href="" class="text-black">
                                    <li class="text-capitalize mb-1">hotel sitemap</li>
                                </a>
                                <a href="" class="text-black">
                                    <li class="text-capitalize mb-1">flights sitemap</li>
                                </a>
                                <a href="" class="text-black display-none display">
                                    <li class="text-capitalize mb-1">vacations sitemap</li>
                                </a>
                                <a href="" class="text-black display-none display">
                                    <li class="text-capitalize mb-1">rental cars sitemap</li>
                                </a>
                                <a href="" class="text-black display-none display">
                                    <li class="text-capitalize">cruises sitemap</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 bg-transparent">
                        <div class="card-body pb-0">
                            <h6 class="fw-semibold mb-3">Partner Services</h6>
                            <ul class="ps-0">
                                <a href="" class="text-black">
                                    <li class="text-capitalize mb-1">add a hotel</li>
                                </a>
                                <a href="" class="text-black">
                                    <li class="text-capitalize mb-1">become an affiliate</li>
                                </a>
                                <a href="" class="text-black display-none display">
                                    <li class="text-capitalize mb-1">travel agents</li>
                                </a>
                                <a href="" class="text-black display-none display">
                                    <li class="text-capitalize mb-1">affliate program</li>
                                </a>
                                <a href="" class="text-black display-none display">
                                    <li class="text-capitalize">expedia private label</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 bg-transparent">
                        <div class="card-body pb-0">
                            <h6 class="fw-semibold mb-3">Partner Servises</h6>
                            <ul class="ps-0">
                                <a href="" class="text-black">
                                    <li class="text-capitalize mb-1">egencia business travel</li>
                                </a>
                                <a href="" class="text-black">
                                    <li class="text-capitalize mb-1">hotels.com</li>
                                </a>
                                <a href="" class="text-black display-none display">
                                    <li class="text-capitalize mb-1">venere</li>
                                </a>
                                <a href="" class="text-black display-none display">
                                    <li class="text-capitalize mb-1">hotwire</li>
                                </a>
                                <a href="" class="text-black display-none display">
                                    <li class="text-capitalize">citysearch</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 d-flex justify-content-center align-items-center">
            <button type="button" id="show-footer-content" class="btn border-0 text-black shadow px-3 py-2 rounded-circle"><i class="fa-solid fa-plus"></i></button>
        </div>
        <div class="container-fluid px-5 py-3">
            <p class="text-center">Expedia, Inc. is not responsible for content on external Web sites. @<?php echo date('Y') ?> Expedia, Inc. All rights reserved</p>
        </div>
    </footer>



    <!-- jqury cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- slick js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() {
            $('#submit-region').on('click', function() {
                let Inputvalue = $('#choosen-text').val();
                $('.region-text').text(Inputvalue);
            });

            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 2,
                arrows: true,
                dots: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 2,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.multiple-items').find('button').addClass('shadow rounded-circle');

            $(window).scroll(function() {
                let scroll = $(window).scrollTop();
                if (scroll > 1) {
                    $('.navbar').addClass('bg-black');
                } else {
                    $('.navbar').removeClass('bg-black');
                }
            });
            $('#show-footer-content').on('click', function() {
                let Plus = $(this).find('.fa-solid');
                Plus.toggleClass('fa-plus fa-minus');
                $('#footer').find('a.display').toggleClass('display-none');
            });

            $('#footer a').on('mouseenter', function(){
                $(this).removeClass('text-black') && $(this).addClass('web-font-2 transition');
            }).mouseleave(function(){
                $(this).addClass('text-black') && $(this).removeClass('web-font-2 transition');
            });

        });
    </script>

    </body>

    </html>