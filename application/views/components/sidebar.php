<?php
    $currentconditions = $this->currentconditions;
?>
<!-- Sidebar -->
<div class="container-fluid px-3 text-center">
    <p class="mt-3">
        <a href="<?= site_url('home') ?>">
            <img width="100px" src="<?= base_url('assets/images/cloud-day.png') ?>">
        </a>
    </p>
    <p class="h2 mt-4"><?= $this->session->location_localized_name ?></p>
    <p><span><?= $this->day ?></span><span class="text-muted">, <?= $this->time ?></span> <small class="text-muted"><i class="fa fa-info-circle fa text-sm-left" data-toggle="tooltip" data-placement="bottom" title="Waktu setempat. Data ditampilkan per 5 menit."></i></small></p>
    
    <div class="row justify-content-center">
        <img src="https://www.accuweather.com/images/weathericons/<?= $currentconditions['WeatherIcon'] ?>.svg" class="my-4 mx-3" width="150" alt="<?= $currentconditions['WeatherText'] ?>" />
    </div>

    <p class="h1 mb-3"><?= $currentconditions['Temperature']['Metric']['Value'] ?>°C</p>
    <p><!-- 🌩  --><?= $currentconditions['WeatherText'] ?></p>

    <p class="mt-auto text-muted">
        <small>Klik <a href="<?= site_url('credit') ?>">di sini</a> untuk mengetahui pengembang web ini.</small>
    </p>
</div>
<!-- /#sidebar-wrapper -->