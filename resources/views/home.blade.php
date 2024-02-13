<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('links/links')
    <title>Document</title>
  </head>
  <body>
    @auth
    <div class="grid-container">
      @include('sidebar')
      
      <main class="main-container">
        <div class="main-title">
          <h2>Dashboard</h2>
        </div>
        <div class="main-cards">
          
          <div class="card">
            <div class="card-inner">
              <h3>Products</h3>
              <span class="material-icons-outlined"> inventory_2 </span>
            </div>
            <h1>249</h1>
          </div>
          
          <div class="card">
            <div class="card-inner">
              <h3>Categories</h3>
              <span class="material-icons-outlined"> category </span>
            </div>
            <h1>25</h1>
          </div>
          
          <div class="card">
            <div class="card-inner">
              <h3>Customers</h3>
              <span class="material-icons-outlined"> groups </span>
            </div>
            <h1>1580</h1>
          </div>
          
          <div class="card">
            <div class="card-inner">
              <h3>Alerts</h3>
              <span class="material-icons-outlined">
                notification_important
              </span>
            </div>
            <h1>56</h1>
          </div>
          
        </div>
        
        <div class="charts">
          <div class="charts-card">
            <div class="chart-title">Top 5 Products</div>
            <div id="bar-chart"></div>
          </div>
          
            <div class="charts-card">
                <div class="chart-title">Purchase and Sales Orders</div>
                <div id="area-chart"></div>
              </div>
        </div>
      </main>
    </div>
    @else
    <p>You are not logged in</p>
    @endauth
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.44.0/apexcharts.min.js"></script>
    <!-- Custom js -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
  </body>
  </html>
  