
@extends('layouts.master')

@section('scripts')

@stop

@section('breadcrumb')
<!-- =============== START BREADCRUMB ================ -->
<section class="no-mb">
    <div class="row">
        <div class="col-sm-12">
            <div class="before-FullscreenSlider"></div>
            <div class="breadcrumb-fullscreen-parent phone-menu-bg">
                <div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image:url(<?php echo url("") ?>/images/bgnocu.jpg); background-color: #0a0a0a" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
                    <div class="breadTxt breadSingle">
                        <h2> 
                            <?php if ($result == 'fail') {
                                    echo "We are very sorry, but Your reservation wasn't successful!";
                                } else if ($result == 'success') {
                                    echo "Your reservation was successful!";
                                } 
                            ?>
                        </h2>
                        <p>
                            <?php if ($result == 'fail') {
                                    echo "Please try again shortly, or contact us by phone: +381 69 20 10 110 (SMS, WhatsApp and Viber).";
                                } else if ($result == 'success') {
                                    echo "You will receive a confirmation message very soon.";
                                } 
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =============== END BREADCRUMB ================ -->

@stop

@section('content')

@stop