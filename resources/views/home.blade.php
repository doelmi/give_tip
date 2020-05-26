<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="{{$siteDescription}}">
    <meta name="author" content="{{$siteAuthor}}">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="{{$siteName}}" /> <!-- website name -->
    <meta property="og:site" content="{{$siteLink}}" /> <!-- website link -->
	<meta property="og:title" content="{{$siteTitle}}"/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="{{$siteDescription}}" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="{{$siteImage}}" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="{{$siteUrl}}" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="{{$siteType}}" />

    <!-- Website Title -->
    <title>{{$siteTitle}}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ url('css/swiper.css') }}" rel="stylesheet">
	<link href="{{ url('css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ url('css/styles.css') }}" rel="stylesheet">

	<!-- Favicon  -->
    <link rel="icon" href="{{ url('images/favicon.png') }}">
</head>
<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="{{url()}}"><img src="images/logo.svg" alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">Tip</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#pricing">Other</a>
                </li>
            </ul>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">{{$siteName}}</span> {{$siteTitle}}</h1>
                            <p class="p-large">{{$siteDescription}}</p>
                            <a class="btn-solid-lg page-scroll" href="#services">TIP NOW</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/header-teamwork.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Send Tip</h2>
                    <p class="p-heading p-large">You can give tip via many payment method such as: Bank Virtual Account, Retail Store and QRIS</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            {{-- <h4 class="card-title">Market Analysis</h4> --}}
                            <p>After you fill this form, you will be redirected payment gateway page (using <a href="https://s.doelmi.id/fITjE" target="_blank">Ipaymu</a>). IDR Only.</p>
                            <!-- Contact Form -->
                            <form id="tipForm" data-toggle="validator" data-focus="false" method="POST" action="#">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="canonym" name="canonym">
                                    <label class="custom-control-label" for="canonym">Tip as Anonymous</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control-input" id="cname" required name="cname" autocomplete="off">
                                    <label class="label-control" for="cname">Username<span class="text-danger">*</span></label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control-input" id="cphone" required name="cphone" autocomplete="off" onkeypress="return isNumberKey(event)" minlength="5" min="1">
                                    <label class="label-control" for="cphone">Phone<span class="text-danger">*</span></label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control-input" id="cemail" name="cemail" autocomplete="off">
                                    <label class="label-control" for="cemail">Email</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control-input" id="ctip" required name="ctip" autocomplete="off" onkeypress="return isNumberKey(event)" minlength="4" min="5000">
                                    <label class="label-control" for="ctip">Tip Nominal [IDR]<span class="text-danger">*</span> <small>(Min. 5000)</small></label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control-submit-button">SEND TIP</button>
                                </div>
                                <div class="form-message">
                                    <div id="cmsgSubmit" class="text-center hidden"></div>
                                </div>
                            </form>
                            <!-- End Contact Form -->
                        </div>
                    </div>
                    <!-- end of card -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->

    <!-- Pricing -->
    <div id="pricing" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Other Tipping Methods</h2>
                    <p class="p-heading p-large">Other than payment methods on top, you can also tipping via these methods.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">PayPal</div>
                            <div class="card-subtitle">Tip me via PayPal</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="value"><i class="fab fa-paypal"></i></span>
                            </div>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="https://s.doelmi.id/8iacp" target="_blank">Tip via PayPal</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Streamlabs</div>
                            <div class="card-subtitle">Tip me via Streamlabs</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="value"><i class="fa fa-heart"></i></span>
                            </div>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="https://s.doelmi.id/Otlkf" target="_blank">Tip via Streamlabs</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card">
                        <div class="label">
                            <p class="best-value">Coming soon</p>
                        </div>
                        <div class="card-body">
                            <div class="card-title">Other</div>
                            <div class="card-subtitle">More tip method in future.</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="value"><i class="fa fa-tasks"></i></span>
                            </div>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="javascript:void(0)" disabled>Coming Soon</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>About Doelmi</h4>
                        <p class="m-0">
                            <span> <i class="fa fa-laptop pr-1"></i></span>
                            Human being, Programming and Engineering
                        </p>
                        <p class="m-0">
                            <span><i class="fa fa-paint-brush pr-1"></i></span>
                            Designer wannabe
                        </p>
                        <p class="m-0">
                            <span><i class="fa fa-star pr-1"></i></span>
                            I do not choose support life, support life choose me~
                        </p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Main Site <a class="turquoise" target="_blank" href="https://s.doelmi.id/GcPC6">DOELMI.ID</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Short URL at <a class="turquoise" target="_blank" href="https://s.doelmi.id">S.DOELMI.ID</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="{{$facebookUrl}}" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="{{$twitterUrl}}" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        {{-- <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google-plus-g fa-stack-1x"></i>
                            </a>
                        </span> --}}
                        <span class="fa-stack">
                            <a href="{{$instagramUrl}}" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="{{$linkedInUrl}}" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © {{date('Y')}} <a href="javascript:void(0)">{{$siteName}}</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->

    @if ($isset)
    <!-- Modal -->
    <div class="modal fade" id="modalNotif" tabindex="-1" role="dialog" aria-labelledby="modalNotif" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalNotifTitle">
                @if ($success)
                Transaction Success
                @else
                Transaction Failed
                @endif
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body text-center">
                @if ($success)
                <p style="font-size: 5rem" class="text-success"><i class="fa fa-check-circle"></i></p>
                <p>
                    Thank you for giving tip. I wish I can be better everyday.
                </p>
                @else
                <p style="font-size: 5rem" class="text-danger"><i class="fa fa-times-circle"></i></p>
                <p>
                    Sorry your transaction failed. Please try again.
                </p>
                @endif
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
        </div>
    </div>
    @endif

    <!-- Scripts -->
    <script src="{{ url('js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ url('js/popper.min.js') }}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ url('js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ url('js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ url('js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ url('js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ url('js/validator.min.js') }}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ url('js/scripts.js') }}"></script> <!-- Custom scripts -->
    <script>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31
            && (charCode < 48 || charCode > 57))
            return false;
            return true;
        }

        $( document ).ready(function() {
            @if ($isset)
            $('#modalNotif').modal('show');
            @endif
            $('#canonym').change(function(){
                const c = this.checked;
                const tempValue = {
                    cname: localStorage.getItem('cname'),
                    cphone: localStorage.getItem('cphone'),
                    cemail: localStorage.getItem('cemail')
                }
                if (c) {
                    localStorage.setItem('cname', $('input[name=cname]').val())
                    localStorage.setItem('cphone', $('input[name=cphone]').val())
                    localStorage.setItem('cemail', $('input[name=cemail]').val())
                    $('input[name=cname]').val('Anonymous').attr('readonly', 'readonly').addClass('notEmpty').focus().blur()
                    $('input[name=cphone]').val('081{{date("dmYH")}}').attr('readonly', 'readonly').addClass('notEmpty').focus().blur()
                    $('input[name=cemail]').val('anonim@doelmi.id').attr('readonly', 'readonly').addClass('notEmpty').focus().blur()
                    $('input[name=ctip]').focus()
                } else {
                    $('input[name=cname]').val(tempValue.cname).removeAttr('readonly').focus().blur()
                    if (tempValue.cname.length == 0) $('input[name=cname]').removeClass('notEmpty')
                    $('input[name=cphone]').val(tempValue.cphone).removeAttr('readonly').focus().blur()
                    if (tempValue.cphone.length == 0) $('input[name=cphone]').removeClass('notEmpty')
                    $('input[name=cemail]').val(tempValue.cemail).removeAttr('readonly').focus().blur()
                    if (tempValue.cemail.length === 0) $('input[name=cemail]').removeClass('notEmpty')
                }
            });

            $('#tipForm').submit(function(e) {
                e.preventDefault()
                let values = {};
                for (const field of $(this).serializeArray()) {
                    values[field.name] = field.value;
                }

                $('#cmsgSubmit').html('')

                if (values.cname.length == 0 || values.cphone.length == 0 || values.ctip.length == 0) {
                    return $('#cmsgSubmit').html('Please fill all required fields!')
                } else if (values.ctip < 5000) {
                    return $('#cmsgSubmit').html('Tip Nonimal should be more than / equal to 5000 (five thousands)')
                }

                $('.spinner-wrapper').show();

                $.post( "{{route('home.store')}}", values, function( data ) {
                    setTimeout(() => {
                        const url = data.result_data.session_url;
                        window.location.replace(url);
                    }, 500);
                }).fail(function (jqXHR, textStatus, error) {
                    setTimeout(() => {
                        $('.spinner-wrapper').hide();
                        $('#cmsgSubmit').html(jqXHR.responseJSON.message);
                    }, 500);
                })
            });
        });
    </script>
</body>
</html>
