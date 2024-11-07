

<h1>Backoffice</h1>
<p>Welcome to this backoffice project.</p>

<div style="width: 800px; "><canvas id="chartOne"></canvas></div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<?php 
    $names = [];
    $values = [];

    foreach ($publishersWithGames as $publisher) {
        $names[] = $publisher->name;
    }

    foreach ($publishersWithGames as $publisher) {
        $values[] = $publisher->game_count;
    }

    // Print the array of names
    $namesJson = json_encode($names);
    $valuesJson = json_encode($values);

?>

<script>
  const chartOne = document.getElementById('chartOne');

  console.log(<?php $namesJson; ?>);
    console.log(<?php  $valuesJson; ?>);

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
</script>
