var coinChart=document.getElementById("doughnutChart");Chart.defaults.global.defaultFontFamily="Arial",Chart.defaults.global.defaultFontColor="#1e1e1f";var doughnutChartData={labels:["Bitcoin","Litecoin","Ripple"],datasets:[{data:[40,32,15],backgroundColor:["rgba(21, 178, 236, .9)","rgba(245, 164, 22, .9)","rgba(0, 201, 156, .9)"],hoverBackgroundColor:["rgba(21, 178, 236, .8)","rgba(245, 164, 22, .8)","rgba(0, 201, 156, .8)"],borderWidth:3}]},doughnutChartOptions={responsive:!0,tooltips:{custom:function(t){t&&(t.displayColors=!1)}},legend:{position:"bottom",labels:{usePointStyle:!0}}},doughnutChart=new Chart(coinChart,{type:"doughnut",data:doughnutChartData,options:doughnutChartOptions});