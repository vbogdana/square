<!DOCTYPE html>
<!--
    Tutorial za Laravel templates https://laravel.com/docs/5.3/blade
    Tutorial za Laravel strukturu direktorijuma https://laravel.com/docs/5.3/structure
-->
<html>
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <!-- metatagovi -->
        <meta name="description" content="Belgrade Luxury offers services for VIP party travelers without hidden costs in Belgrade, Serbia. Five stars apartments, luxury vehicles, VIP entrance and tables in clubs and restaurants, free premium drinks, etc... Full service from arrival to departure, for one price." />
        <meta name="keywords" content="belgrade stag, belgrade bachelor, belgrade bachelor party, serbian clubs, serbian nightlife, serbian bachelor, serbian stag, belgrade bars, belgrade restaurants, belgrade vip, party concierge, belgrade accommodation, lounge bars">
        
        <link rel="shortcut icon" href="<?php echo url("") ?>/images/"  type="image/x-icon" /> 
        <title>   </title>
        
        <!-- 
            css i js fajlovi za menu, container i footer (treba ih napisati)
            ovde treba da budu navedeni svi css i js fajlovi zajednicki za sve stranice
            skladiste se u folderu public/css i public/js (u odnosu na root)        
        -->
        <!-- Include style sheets common for all pages -->
        <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/footer.style.css" />
        <!-- Include jQuery -->
        <!--<script type="text/javascript" src="js/jquery-3.1.1.js"></script>-->        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo url('/') ?>/js/jquery.mobile-1.4.5.js"></script>
        <!-- Include the YT API Library -->
        <script type='text/javascript' src='http://www.youtube.com/iframe_api'></script>
        <!-- Include scripts common for all pages -->
        <!-- za svaku stranicu treba definisati sekciju scripts koja uvozi css i js fajlove potrebne za tu stranicu -->
        @yield('scripts')
    </head>

    <body>
              
        <!-- menu se definise ovde jer ce biti isti za sve stranice -->
        @section('sidebar')
        
        
        @show
        
        <!-- 
            za svaku stranicu treba definisati content sekciju (sadrzaj)
            sve slike se skladiste u storage/app/images folderu
            svi css i js fajlovi u public/css i public/js
            za kontrolere pogledati na google-u gde tacno stoje
            za svaku novu stranicu obavezno dodati rutu u routes/web.php fajlu
        -->      
        <div class="container">
            
            
            @yield('content')
            
            
            
            
        </div>
        
        <!-- footer se definise ovde jer ce biti isti za sve stranice -->
        @section ('footer')
        
        
        
        
        @show
        
    </body>
</html>
