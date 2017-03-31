    <div class="footer_wrapper clearfix">
        <footer class="footer" itemscope itemtype="http://schema.org/WPFooter">
            <div class="footer_text">
                <span itemscope itemtype="http://schema.org/Organization">
                    <link itemprop="additionalType" href="http://www.productontology.org/id/Destination_marketing_organization" />
                    <div class="company_name">
                        <span itemprop="legalName" class="company">
                            King's Green Cleaning
                        </span>
                        <span class="divider m_hide">
                            |
                        </span>
                        <span itemprop="description" class="tagline">
                            Green Cleaning Cleaning Solutions for Your Home
                        </span>
                    </div>
                    <div class="address">
                        <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <span itemprop="streetAddress">
                                1802 N. Shartel
                                <span class="m_hide">
                                    ,
                                </span>
                            </span>
                            <span class="city_state">
                                <span itemprop="addressLocality">
                                    Oklahoma City
                                </span>
                                ,
                                <span itemprop="addressRegion">
                                    OK
                                </span>
                                <span itemprop="postalCode">
                                    73103
                                </span>
                            </span>
                        </span>
                        <span class="contact_numbers">
                            <span class="divider m_hide">
                                |
                            </span>
                            <span class="phone">
                                <span itemprop="telephone">
                                    <a href="tel:4055496862">(405) 549-6862</a>
                                </span>
                            </span>
                        </span>
                    </div>
                </span>
            </div>
            <div class="fineprint">
                <span class="copyright">
                    Copyright &copy;
                    <span itemprop="copyrightYear">
                        2017
                    </span>
                    <span itemprop="copyrightHolder">
                        King's Green Cleaning
                    </span>
                    .
                </span>
                <span class="credits">
                    &nbsp;
                </span>
            </div>
            <div class="footer_logos">
                &nbsp;
            </div>
        </footer>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/resources/js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="/resources/js/plugins.js"></script>
    <script src="/resources/js/main.js"></script>
    <script src="/resources/js/lightbox.js"></script>
    <script src="/resources/js/jquery.easing.1.3.js"></script>
    <script src="/resources/js/jquery.bxslider.min.js"></script>

    <script type="text/javascript">
        lightbox.option({
            'alwaysShowNavOnTouchDevices': true
        });

        function toggleSlides(){
            $('.toggler').click(function(e){
                var id=$(this).attr('id');
                var widgetId=id.substring(id.indexOf('-')+1,id.length);
                $('#'+widgetId).slideToggle();
                $(this).toggleClass('sliderExpanded');
                $('.closeSlider').click(function(){
                    $(this).parent().hide('slow');
                    var relatedToggler='toggler-'+$(this).parent().attr('id');
                    $('#'+relatedToggler).removeClass('sliderExpanded');
                });
            });
        };
        $(function(){
            toggleSlides();
        });
    </script>

    <script>
        $(document).ready(function(){
            $('.bxslider').bxSlider({
                mode: 'horizontal', /* options horizontal, vertical, fade */
                speed: 500, /* default is 500 */
                startSlide: 0, /* default is 0 */
                randomStart: false, /* default is false */
                easing: '', /* default is NULL, options are linear, ease, ease-in, ease-out, ease-in-out, cubic-bezier(n,n,n,n)*/
                captions: false, /* default is false */
                responsive: true, /* default is true. disable if you need to use fixed-width sliders */
                pager: false,
                controls: false,
                auto: true,
                pause: 4000,
                autoStart: true,
                autoHover: true
            });
            $('#ad_slider').bxSlider({
                mode: 'horizontal', /* options horizontal, vertical, fade */
                speed: 500, /* default is 500 */
                startSlide: 0, /* default is 0 */
                randomStart: true, /* default is false */
                easing: '', /* default is NULL, options are linear, ease, ease-in, ease-out, ease-in-out, cubic-bezier(n,n,n,n)*/
                captions: false, /* default is false */
                responsive: true, /* default is true. disable if you need to use fixed-width sliders */
                pager: false,
                controls: false,
                auto: true,
                pause: 4000,
                autoStart: true,
                autoHover: true
            });
        });
    </script>
