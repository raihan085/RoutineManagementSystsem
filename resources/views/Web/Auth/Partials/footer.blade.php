<footer class="site-footer mt-5">
    <div class="footer-top bg-dark text-dark-0_6 pt-5 paddingBottom-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 mt-5">
                    <img src="{{ asset('Web\Logo\SUST.png') }}" alt="Logo" width="50">
                    <h5 class="text-light mt-2">Shahjalal University of Science & Technology</h5>
                    <div class="margin-y-20">
                        <p class="text-justify">
                            Shahjalal University of Science and Technology also known as SUST is a state supported university located in Sylhet, Bangladesh. It is the 8th oldest university in Bangladesh and the first university to adopt American credit system in the country.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5">
                    <h4 class="h5 text-dark">Contact Us</h4>
                    <div class="width-3rem bg-primary height-3 mt-3"></div>
                    <ul class="list-unstyled marginTop-40">
                        <li class="mb-3"><i class="ti-email mr-3"></i> <a href="mailto:rms@sust.edu">rms@sust.edu</a></li>
                        <li class="mb-3">
                            <div class="media">
                                <i class="ti-location-pin mt-2 mr-3"></i>
                                <div class="media-body">
                                    <span><strong>Shahjalal University of Science and Technology</strong><br>
                                            Kumargaon, Sylhet-3114, Bangladesh
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>


            </div> <!-- END row-->
        </div> <!-- END container-->
    </div> <!-- END footer-top-->

    <div class="footer-bottom bg-black-0_9 py-5 text-center">
        <div class="container">
            <p class="text-white-0_5 mb-0">&copy; {{ \Carbon\Carbon::now()->format('Y') }} CSE, SUST. All rights reserved.</p>
            <p class="text-white-0_5 mb-0">Developed with <i class="fa fa-heart heart"></i> by: MD Shahidul Islam</p>
        </div>
    </div>  <!-- END footer-bottom-->
</footer> <!-- END site-footer -->
