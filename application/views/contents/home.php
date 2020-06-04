<?php
    $currentconditions = $this->currentconditions;
?>

<div class="row mx-n2">
    <!-- Data dari sidebar -->
    <div class="col-sm-12 p-2 d-md-none">
        <div class="row h-100 bg-white m-0 p-3 rounded-theme-md justify-content-between">
            <div class="col align-self-center">
                <p class="m-0 display-4"><?= $currentconditions['Temperature']['Metric']['Value'] ?>°C</p>
                <p class="m-0">Bandung <span class="text-muted">· Senin, <?= $currentconditions['LocalObservationDateTime'] ?></span></p>
            </div>
            <div class="m-0 align-self-center">
                <div class="col m-0">
                    <img src="https://www.accuweather.com/images/weathericons/<?= $currentconditions['WeatherIcon'] ?>.svg" class="" height="80" alt="<?= $currentconditions['WeatherText'] ?>" />
                    <p class="m-0 mt-1 text-center"><?= $currentconditions['WeatherText'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mx-n2">
    <!-- Indices -->
    <div class="col-lg-6 col-md-12 p-2">
        <div class="row h-100 bg-white m-0 p-3 rounded-theme-md">
            <p class="mb-0">Indices</p>
        </div>
    </div>
    
    <!-- Apa ya namanya -->
    <div class="col-lg-6 col-md-12 p-2">
        <div class="row h-100 bg-white m-0 p-3 rounded-theme-md">
            <p class="mb-0">Cek tanggal yang cuacanya cerah</p>
        </div>
    </div>
</div>

<!-- Sorotan Hari Ini -->
<div class="row d-flex justify-content-between mx-0 mt-4 mb-2">
    <div><p class="font-weight-bold mb-0">Sorotan Hari Ini</p></div>
    <div><a href="<?= site_url('home/today') ?>" class="text-muted">Detail perjam ➡</a></div>
</div><!--  -->
<div class="row mx-n2">
    <div class="col-sm-4 col-md-4 col-lg-3 p-2">
        <div class="h-100 col col-12 bg-white p-4 rounded-theme-lg">
            <p class="text-muted">Indeks UV</p>
            <p class="h1"><?= $currentconditions['UVIndex'] ?></p>
            <p class="mb-0"><!-- 👌 --> <?= $currentconditions['UVIndexText'] ?></p>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3 p-2">
        <div class="h-100 col col-12 bg-white p-4 rounded-theme-lg">
            <p class="text-muted text">Angin</p>
            <div class="row px-3">
                <p class="h1"><?= $currentconditions['Wind']['Speed']['Metric']['Value'] ?></p>
                <p class="align-self-end mb-2 ml-1">km/jam</p>
            </div>
            <p class="mb-0"><!-- ⬇ --> <?= $currentconditions['Wind']['Direction']['Degrees'] ?></p>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3 p-2">
        <div class="h-100 col col-12 bg-white p-4 rounded-theme-lg">
            <p class="text-muted">Kelembaban</p>
            <p class="h1"><?= $currentconditions['RelativeHumidity'] ?></p>
            <p class="mb-0"><!-- 👎  <?= $currentconditions ?> --></p>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3 p-2">
        <div class="h-100 col col-12 bg-white p-4 rounded-theme-lg">
            <p class="text-muted">Terasa seperti</p>
            <p class="h1"><?= $currentconditions['RealFeelTemperature']['Metric']['Value'] ?>°C</p>
        </div>
    </div>
</div>

<!-- Cuaca Dalam Lima Hari -->
<div class="row d-flex justify-content-between mx-0 mt-4 mb-2">
    <div><p class="font-weight-bold mb-0">Cuaca Dalam Lima Hari</p></div>
</div>
<div class="row mx-n2">
    <?php
        $forecasts_5day = $this->forecasts_5day['DailyForecasts'];
        for ($row=0; $row<count($forecasts_5day); $row++) { ?>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 p-2">
                <div class="h-100 col col-12 bg-white p-3 rounded-theme-md">
                    <p class="mb-2 text-center text-muted"><?= $forecasts_5day[$row]['Date'] ?></p>
                    <div class="row justify-content-center">
                        <img src="https://www.accuweather.com/images/weathericons/<?= $forecasts_5day[$row]['Day']['Icon'] ?>.svg" class="mb-2" width="50" alt="<?= $forecasts_5day[$row]['Day']['IconPhrase'] ?>" />
                    </div>
                    <p class="text-center mb-1"><?= $forecasts_5day[$row]['Day']['IconPhrase'] ?></p>
                    <div class="row m-0 justify-content-center">
                        <p class="mb-0 mr-1"><?= ($forecasts_5day[$row]['Temperature']['Maximum']['Value'] + $forecasts_5day[$row]['Temperature']['Minimum']['Value']) / 2 ?>°C</p>
                        <p class="mb-0 text-muted"><?= ($forecasts_5day[$row]['RealFeelTemperature']['Maximum']['Value'] + $forecasts_5day[$row]['RealFeelTemperature']['Minimum']['Value']) / 2 ?>°C</p>
                    </div>
                </div>
            </div>
            <?php
        }
    ?>
</div>