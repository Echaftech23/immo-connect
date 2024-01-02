// ApexCharts options and config
window.addEventListener("load", function() {
    let options = {
      // set the labels option to true to show the labels on the X and Y axis
      xaxis: {
        show: true,
        categories: ['01 Feb', '02 Feb', '03 Feb', '04 Feb', '05 Feb', '06 Feb', '07 Feb'],// , '08 Feb', '09 Feb', '10 Feb','11 Feb', '12 Feb', '13 Feb', '14 Feb', '15 Feb', '16 Feb', '17 Feb' , '18 Feb', '19 Feb', '20 Feb', '21 Feb', '22 Feb', '23 Feb', '24 Feb', '25 Feb', '26 Feb', '27 Feb' , '28 Feb', '29 Fe', '30 Feb'
        labels: {
          show: true,
          style: {
            fontFamily: "Inter, sans-serif",
            cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
          }
        },
        axisBorder: {
          show: false,
        },
        axisTicks: {
          show: false,
        },
      },
      yaxis: {
        show: true,
        labels: {
          show: true,
          style: {
            fontFamily: "Inter, sans-serif",
            cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
          },
          formatter: function (value) {
            return value + 'K';
          }
        }
      },
      series: [
        {
          name: "Developer Edition",
          data: [100, 80, 100, 90, 100, 100, 120],//, 90, 70 , 75, 60, 68, 60, 70, 69, 80, 85, 90, 100, 110, 100, 95, 100, 120, 80, 89, 100, 92,90, 100
          color: "#1A56DB",
        },
        // {
        //   name: "Designer Edition",
        //   data: [43, 13, 65, 12, 42, 73],
        //   color: "#7E3BF2",
        
        // },
      ],
      chart: {
        sparkline: {
          enabled: false
        },
        height: "100%",
        width: "100%",
        type: "area",
        fontFamily: "Inter, sans-serif",
        dropShadow: {
          enabled: false,
        },
        toolbar: {
          show: false,
        },
      },
      tooltip: {
        enabled: true,
        x: {
          show: false,
        },
      },
      fill: {
        type: "gradient",
        gradient: {
          opacityFrom: 0.55,
          opacityTo: 0,
          shade: "#1C64F2",
          gradientToColors: ["#1C64F2"],
        },
      },
      dataLabels: {
        enabled: false,
      },
      stroke: {
        width: 3,
      },
      legend: {
        show: false
      },
      grid: {
        show: false,
      },
    }

    if (document.getElementById("labels-chart") && typeof ApexCharts !== 'undefined') {
      const chart = new ApexCharts(document.getElementById("labels-chart"), options);
      chart.render();
    }
  });