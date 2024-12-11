<x-admin-layout style="background-color:blue">
    
  <link rel="stylesheet" type="text/css" href="{{asset('/Assets/style3.css')}}"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              {{ __('Dashboard') }}
          </h2>
  </x-slot>
  
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        // Load Charts and the corechart and barchart packages.
        google.charts.load('current', {'packages':['corechart']});
  
        // Draw the pie chart and bar chart when Charts is loaded.
        google.charts.setOnLoadCallback(drawChart);
  
        function drawChart() {
  
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Topping');
          data.addColumn('number', 'Slices');
          data.addRows([
            ['Boys', 670],
            ['Girl', 560],
          //   ['Olives', 1],
          //   ['Zucchini', 1],
          //   ['Pepperoni', 2]
          ]);
  
          var piechart_options = {title:'Pie Chart: Student at Harford',
                         width:400,
                         height:300};
          var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
          piechart.draw(data, piechart_options);
  
          var barchart_options = {title:'Barchart: Teacher at Harford',
                         width:400,
                         height:300,
                         legend: 'none'};
          var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
          barchart.draw(data, barchart_options);
        }
      </script>
  
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Teacher', 'Student'],
            ['Sekip',     300],
            ['Citra Wisata',      700],
            ['Karya',  500],
            ['Marendal', 600],
            ['Garu',    450]
          ]);
  
          var options = {
            title: 'Branches',
            pieHole: 0.4,
          };
  
          var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
          chart.draw(data, options);
        }
      </script>
  <!-- table -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['table']});
        google.charts.setOnLoadCallback(drawTable);
  
        function drawTable() {
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Name');
          data.addColumn('number', 'Salary');
          data.addColumn('boolean', 'Full Time Employee');
          data.addRows([
            ['Mike',  {v: 10000, f: '$10,000'}, true],
            ['Jim',   {v:8000,   f: '$8,000'},  false],
            ['Alice', {v: 12500, f: '$12,500'}, true],
            ['Bob',   {v: 7000,  f: '$7,000'},  true]
          ]);
  
          var table = new google.visualization.Table(document.getElementById('table_div'));
  
          table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
        }
      </script>
      
      
  <!--Sidebar-->
  
  <input type="checkbox" id="check">
      <label for="check">
      <i class="fa fa-bars" id="btn"></i>
      <i class="fa fa-times" id="cancle"></i>
      </label>
  
      <div class="sidebar" style="height:100%; margin-top:1px; position:relative">
      <header><img src="{{asset('/ava.png')}}" style="margin-left:60px;" />
      <p>Admin</p>
      </header>
  <ul>
      <li class="list"><a href="/mydashboard" class="active"><i class="fa fa-chart-line"></i>My Dashboard</a></li>
      <li class="list2"><a href="/branches"><i class="fa fa-building"></i>Branches</a></li>
      <li class="list3"><a href="/teachersdata"><i class="fa fa-chalkboard-teacher"></i>Teachers</a></li>
      <li class="list4"><a href="/studentsdata"><i class="fas fa-graduation-cap"></i>My Students</a></li>
      <li class="list5"><a href="/announcement"><i class="fa fa-bullhorn"></i>Announcement</a></li>
      <li class="list6"><a href="/calender"><i class="fas fa-calendar"></i>Calendar</a></li>
      <li class="list7"><a href="/labpro"><i class="fas fa-music"></i>LAB Program</a></li>
      </ul> 
  </div>
  
  
          <!--Table and divs that hold the pie charts-->
      <table class="columns" style="margin:-600px 0 0 370px; position:relative;">
        <tr>
          <td><div id="piechart_div" style="border: 1px solid #ccc; "></div></td>
          <td><div id="barchart_div" style="border: 1px solid #ccc; margin-left:20px;"></div></td>
        </tr>
      </table>
      <!-- bar -->
      <div id="donutchart" style="width: 830px; height: 250px; margin:30px 0 0 370px;"></div>
  </div>
  
  
  
  <script>
  // Get the elements with class="column"
  var elements = document.getElementsByClassName("column");
  
  // Declare a loop variable
  var i;
  
  // List View
  function listView() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.width = "100%";
    }
  }
  
  // Grid View
  function gridView() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.width = "50%";
    }
  }
  
  /* Optional: Add active class to the current button (highlight it) */
  var container = document.getElementById("btnContainer");
  var btns = container.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
  </script>
  
      
  
      
  </x-admin-layout>
  