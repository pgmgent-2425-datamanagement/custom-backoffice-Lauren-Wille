<script>
  const chartOne = document.getElementById('chartOne');

  new Chart(chartOne, {
    type: 'bar',
    data: {
      labels: <?php $names ?>,
      datasets: [{
        label: '# of Games',
        data: <?php $values ?>,
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

