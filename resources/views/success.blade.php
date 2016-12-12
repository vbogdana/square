
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
                <div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-color: #0a0a0a" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
                    <div class="breadTxt breadSingle">
                        <h2> <?php echo $success ?></h2>
                        <p>
                            <?php if ($success == 'Your reservation was successful!') {
                                echo "You will receive a confirmation message very soon.";
                            } ?>
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