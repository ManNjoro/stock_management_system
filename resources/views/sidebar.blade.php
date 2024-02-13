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
        <a href="/">
      <li class="sidebar-list-item">
            <span class="material-icons-outlined"> dashboard </span> Dashboard
        </li>
    </a>
    <a href="/products">
      <li class="sidebar-list-item">
            <span class="material-icons-outlined"> inventory_2 </span> Products
        </li>
    </a>
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