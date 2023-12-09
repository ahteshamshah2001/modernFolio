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
                                        <h4 class="d-flex align-items-center"><span>{{ $service->title ?? "" }}</span> <span
                                                class="fz-50 ml-50 stroke icon">*</span></h4>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== End marq ==================== -->
