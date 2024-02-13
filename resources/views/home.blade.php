<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet"
    />
  </head>
  <body>
    @auth
    <div class="grid-container">
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined"> menu </span>
        </div>
        <div class="header-left">
          <span class="material-icons-outlined"> search </span>
        </div>
        <div class="header-right">
          <span class="material-icons-outlined">notifications</span>
          <span class="material-icons-outlined">email</span>
          <span class="material-icons-outlined">account_circle</span>
          <form action="/logout" method="post">
            @csrf
            <button>Logout</button>
          </form>
        </div>
      </header>
      
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">shopping_cart</span>STORE
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()"
          >close</span
          >
        </div>
        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <span class="material-icons-outlined"> dashboard </span> Dashboard
          </li>
          <li class="sidebar-list-item">
            <span class="material-icons-outlined"> inventory_2 </span> Products
          </li>
          <li class="sidebar-list-item">
            <span class="material-icons-outlined"> category </span> Categories
          </li>
          <li class="sidebar-list-item">
            <span class="material-icons-outlined"> groups </span> Customers
          </li>
          <li class="sidebar-list-item">
            <span class="material-icons-outlined"> fact_check </span> Inventory
          </li>
          <li class="sidebar-list-item">
            <span class="material-icons-outlined"> poll </span> Reports
          </li>
          <li class="sidebar-list-item">
            <span class="material-icons-outlined"> settings </span> Settings
          </li>
        </ul>
      </aside>
      
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
  