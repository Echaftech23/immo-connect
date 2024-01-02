<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>


<div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800">
  <div class="flex justify-between p-4 md:p-6 pb-0 md:pb-0">
    <div>
      <h5 class="leading-none text-xl font-medium text-gray-900 dark:text-white pb-2">Revenue</h5>
      
    </div>
    <div
      class="flex items-center px-2.5 py-0.5 text-base font-semibold text-center">
      
      <button
        id="dropdownDefaultButton"
        data-dropdown-toggle="lastDaysdropdown"
        data-dropdown-placement="bottom"
        class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
        type="button">
        Last 7 days
        <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
      </button>
    </div>
  </div>
  <div id="labels-chart" class="px-2.5"></div>
  <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between mt-5 p-4 md:p-6 pt-0 md:pt-0">
    <div class="flex justify-between items-center pt-5">
      
      <!-- Dropdown menu -->
      <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
            </li>
          </ul>
      </div>
    </div>
  </div>
</div>

<script>
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

</script>

<div>
    <div class="flex flex-row">
        <div class=" bg-orange-200 flex justify-center flex-col items-center w-[150px] h-[150px]">
            <h5 class=" mb-2 font-bold text-xl">5.6</h5>
            <div class="flex justify-center flex-row">
                <img src="../../public/img/Star (1).png" alt="img">
                <img src="../../public/img/Star (1).png" alt="img">
                <img src="../../public/img/Star (1).png" alt="img">
                <img src="../../public/img/Star (1).png" alt="img">
                <img class="h-5" src="../../public/img/Group 16.png" alt="img">
            </div>
            <p>Overall Rating</p>
        </div>
        
    </div>
</div>
</body>
</html>