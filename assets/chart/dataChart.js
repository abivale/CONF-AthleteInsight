// import { Chart } from 'chart.js/auto';
// import Chart from 'chart.js/auto'

const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'radar',
  data: {
    labels: ['SHO', 'PAS', 'PHY', 'DEF', 'DRI', 'PAC'],
    datasets: [{
      label: 'Poin',
      data: [99, 97, 88, 41, 97, 97],
      borderWidth: 3
    }]
  },
  options: {
    plugins: {    
      legend: {
          labels: {
               // This more specific font property overrides the global property
              font: {
                  size: 20
              }
          },

      },
    },
    scales: {
      r: {
          pointLabels: {
              font: {
                  size: 20
              }
          }
      }
    }
  }
});