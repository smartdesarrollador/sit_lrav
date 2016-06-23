@extends('grafico/template')

@section('content')


<div class="container body">


    <div class="main_container">

       <!-- page content -->
      <div class="" role="main">
        <div class="">
           <div class="row">

     
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Bar graph <small>Sessions</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <canvas id="mybarChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          
          </div>
        
         </div>
      <!-- /page content -->
    </div>

  </div>
       

           <br><h1>{!! $uno !!}</h1><br>
  

            <?php 


                 foreach ($users as $valor) {
                      echo $valor->enero."<br>";
                      echo $valor->febrero."<br>";
                  }

             ?>    

     
@endsection
  

 @section('scripts')
     <script>
    Chart.defaults.global.legend = {
      enabled: false
    };
 

                    
    // Bar chart
    var ctx = document.getElementById("mybarChart");
    var mybarChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
          label: '# of Votes',
          backgroundColor: "#26B99A",
          data: [
                  <?php 
                      foreach ($users as $valor) {
                           echo $valor->enero;
    
                       }

                   ?>    
                 , 30, 40, 28, 92, 50, 45]


}, {
          label: '# of Votes',
          backgroundColor: "#03586A",

            
          data: [41, 56, 25, 48, 72, 34, 12]
        }]
      },

      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    
  </script>

@endsection

    

          

          


        
  