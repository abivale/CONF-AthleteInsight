// import { Chart } from 'chart.js/auto';
// import Chart from 'chart.js/auto'

const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Possession Game', 'Quick Counter', 'Long Ball Counter', 'Out Wide', 'Long Ball'],
    datasets: [{
      label: '2022',
      data: [60, 45, 88, 55, 74, 72],
      borderWidth: 1
    }, {
      label: '2023',
      data: [70, 35, 58, 85, 34, 52],
      borderWidth: 1
    }]
  },
  options: {
    plugins: {    
      legend: {
          labels: {
               // This more specific font property overrides the global property
              font: {
                  size: 18
              }
          },

      },
    },
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});