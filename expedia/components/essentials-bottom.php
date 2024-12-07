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

        $('#footer a').on('mouseenter', function() {
            $(this).removeClass('text-black') && $(this).addClass('web-font-2 transition');
        }).mouseleave(function() {
            $(this).addClass('text-black') && $(this).removeClass('web-font-2 transition');
        });

        $('.chooseOptions .btn').on('click', function() {
            $(this).css({
                'background-color': '#ffc107',
            }).siblings().css({
                'background-color': '#fff',
            });

            let travelInfo = $(this).attr('id');
            $('#search-category').val(travelInfo);

        });

        $('#myAccount-info .login-form').siblings().hide();
        $('#myAccount-info .login-form .signup-page').css({
            'cursor': 'pointer'
        });
        $('#myAccount-info .login-form .signup-page').on('click', function() {
            $('#myAccount-info .signup-form').siblings().hide();
            $('#myAccount-info .signup-form').fadeIn();
        });

        $('#myAccount-info #login-form-data').on('submit', function(event) {
            event.preventDefault();
            if ($('#login-email').val() == '' || $('#pass').val() == '') {
                $('.login-popup').html(`
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <p class="fw-semibold">All fields required!</p>
                        <button type="button" class="btn-close shadow-none border-0" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    `);
            } else {
                $.ajax({
                    url: '../operations/login-verify.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('.login-popup').html(`
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <p class="fw-semibold">${response}</p>
                                <button type="button" class="btn-close shadow-none border-0" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `);
                    },
                    error: function(xhr, status, error) {
                        $('.login-popup').html(`
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p class="fw-semibold pb-0">${response}</p>
                            <button type="button" class="btn-close shadow-none border-0" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        `);
                    }
                });
            }

        });

        $('#myAccount-info #signup-form-data').on('submit', function(event) {
            event.preventDefault();
            if ($('#signup-firstname').val() == '' || $('#signup-lastname').val() == '' || $('#signup-mob').val() == '' || $('#signup-email').val() == '' || $('#signup-pass').val() == '' || $('#signup-address').val() == '') {
                $('#showAlert').html(`
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <p class="fw-semibold">All fields required</p>
                        <button type="button" class="btn-close shadow-none border-0" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    `);
            } else {
                $.ajax({
                    url: '../operations/signup-verify.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#showAlert').html(`                    
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p class="fw-semibold">Congratulations! You are successfully signup to Expedia. Now you can login.</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        `);
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    },
                    error: function(xhr, status, error) {
                        $('#showAlert').html(`
                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                <p class="fw-semibold">An error occured!</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                         `);
                    }
                });
            }
        });
    });
</script>

</body>

</html>