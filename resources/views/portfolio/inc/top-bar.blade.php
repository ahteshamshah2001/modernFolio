<!-- ==================== Start marq ==================== -->
<section class="serv-marq bord-thin-bottom">
    <div class="container-fluid ontop sub-bg rest pt-20 pb-20">
        <div class="row">
            <div class="col-12">
                <div class="main-marq light-text">
                    <div class="slide-har st1">
                        <div class="box non-strok">
                            @if (!empty($data['services']))
                                @foreach ($data['services'] as $s_key => $service)
                                    <div class="item">
                                        <h4 class="d-flex align-items-center"><span>{{ $service->title ?? '' }}</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span></h4>
                                    </div>
                                @endforeach
                            @else
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Wordpress Development</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Web App Development</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Mobile App Development</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Website Maintenance</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>React Native Development</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>eCommerce Development</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Shopify Development</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Magento Development</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Open Cart Development</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>WOO Commerce Development</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Branding Solutions</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Web Application Design</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Mobile App Design</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Logo Services Solutions</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>SEO Services Solutions</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Digital Marketing Solutions</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Content Writing Solutions</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== End marq ==================== -->
