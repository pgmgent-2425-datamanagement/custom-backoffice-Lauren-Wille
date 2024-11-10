

<h1>Backoffice</h1>
<p>Welcome to this backoffice project.</p>

<div class="d-sm-flex justify-content-md-between">
    <div style="width: 500px; ">
        <canvas id="chartOne"></canvas>
    </div>
    
    <div style="width: 500px; ">
        <canvas id="chartTwo"></canvas>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<?php 
    // ---------- chart 1 ----------
    $names = [];
    $values = [];

    foreach ($publishersWithGames as $publisher) {
        $names[] = $publisher->name;
        $values[] = $publisher->game_count;
    }

    $namesJson = json_encode($names);
    $valuesJson = json_encode($values);

    // ---------- chart 2 ----------
    $months = [];
    $count_releases = [];

    foreach ($gamesByMonth as $item) {
        $months[] = $item->month;
    }

    foreach ($gamesByMonth as $item) {
        $count_releases[] = $item->releases;
    }

    $monthsJson = json_encode($months);
    $count_releasesJson = json_encode($count_releases);
?>

<script>
    // ---------- chart 1 ----------
    const chartOne = document.getElementById('chartOne');

/*     console.log(<?php $namesJson; ?>);
    console.log(<?php  $valuesJson; ?>); */

    new Chart(chartOne, {
        type: 'bar',
        data: {
        labels: <?php echo $namesJson; ?>, 
        datasets: [{
            label: '# of Games',
            data: <?php echo $valuesJson; ?>,  
            borderWidth: 1
        }]
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    });

    // ---------- chart 2 ----------
    const chartTwo = document.getElementById('chartTwo');

    console.log(<?php $monthsJson; ?>);
    console.log(<?php  $count_releasesJson; ?>);

  new Chart(chartTwo, {
        type: 'line',
        data: {
        labels: <?php echo $monthsJson; ?>, 
        datasets: [{
            label: '# of monthly game releases',
            data: <?php echo $count_releasesJson; ?>,  
            borderColor: '#dc3545',
            fill: false
        }]
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    }); 
</script>
