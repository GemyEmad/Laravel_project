<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.index')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

    <li class="nav-heading">Basic Data</li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Branches" data-bs-toggle="collapse" href="#">
          <i class="bi bi-reception-4"></i><span>Branches</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Branches" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.branches.index')}}">
              <i class="bi bi-circle"></i><span>All Branches</span>
            </a>
          </li>
            <a href="{{route('admin.branches.create')}}">
              <i class="bi bi-circle"></i><span>Add Branches</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.branches.edit')}}">
              <i class="bi bi-circle"></i><span>Edit Branches</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.branches.trash')}}">
              <i class="bi bi-circle"></i><span>Trash Branches</span>
            </a>
          </li>
          <li>
        </ul>
      </li><!-- End Components Nav -->

  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#deliveries" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bicycle""></i><span>Deliveries</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="deliveries" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.deliveries.index')}}">
              <i class="bi bi-circle"></i><span>All Deliveries</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.deliveries.create')}}">
              <i class="bi bi-circle"></i><span>Create Deliveries </span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.deliveries.edit')}}">
              <i class="bi bi-circle"></i><span>Edit Deliveries</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.deliveries.trash')}}">
              <i class="bi bi-circle"></i><span>Trash Deliveries</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->



 <li class="nav-heading">processes</li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#orders" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cart-fill"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="orders" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.orders.index')}}">
              <i class="bi bi-circle"></i><span>All Orders</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.orders.edit')}}">
              <i class="bi bi-circle"></i><span>Edit Orders</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.orders.create')}}">
              <i class="bi bi-circle"></i><span>Create Orders</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.orders.trash')}}">
              <i class="bi bi-circle"></i><span>Trash Orders</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#contacts" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people-fill"></i><span>Contacts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="contacts" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.contacts.index')}}">
              <i class="bi bi-circle"></i><span>All Contacts</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.contacts.edit')}}">
              <i class="bi bi-circle"></i><span>Edit Contacts</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.contacts.create')}}">
              <i class="bi bi-circle"></i><span>Create Contacts</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.contacts.trash')}}">
              <i class="bi bi-circle"></i><span>Trash Contacts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#items" data-bs-toggle="collapse" href="#">
          <i class="bi bi-diagram-3-fill"></i><span>Items</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="items" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.items.index')}}">
              <i class="bi bi-circle"></i><span>All Items</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.items.edit')}}">
              <i class="bi bi-circle"></i><span>Edit Items</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.items.create')}}">
              <i class="bi bi-circle"></i><span>Create Items</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.items.trash')}}">
              <i class="bi bi-circle"></i><span>Trash Items</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#categories" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide-fill"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="categories" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.categories.index')}}">
              <i class="bi bi-circle"></i><span>All Categories</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.categories.edit')}}">
              <i class="bi bi-circle"></i><span>Edit Categories</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.categories.create')}}">
              <i class="bi bi-circle"></i><span>Create Categories</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.categories.trash')}}">
              <i class="bi bi-circle"></i><span>Trash Categories</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-heading">Settings</li>


      {{-- ============================================================================================= --}}
<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Usres" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-circle"></i><span>Usres</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Usres" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.users.index')}}">
              <i class="bi bi-circle"></i><span>All Usres</span>
            </a>
          </li>
            <a href="{{route('admin.users.create')}}">
              <i class="bi bi-circle"></i><span>Add Usres</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.users.edit')}}">
              <i class="bi bi-circle"></i><span>Edit Usres</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.users.trash')}}">
              <i class="bi bi-circle"></i><span>Trash Usres</span>
            </a>
          </li>
          <li>
        </ul>
      </li><!-- End Components Nav -->

{{-- ============================================================================================= --}}

<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Admins" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-lines-fill"></i><span>Admins</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Admins" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.admins.index')}}">
              <i class="bi bi-circle"></i><span>All Admins</span>
            </a>
          </li>
            <a href="{{route('admin.admins.create')}}">
              <i class="bi bi-circle"></i><span>Add Admins</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.admins.edit')}}">
              <i class="bi bi-circle"></i><span>Edit Admins</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.admins.trash')}}">
              <i class="bi bi-circle"></i><span>Trash Admins</span>
            </a>
          </li>
          <li>
        </ul>
      </li><!-- End Components Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#newoffers" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-earmark-plus"></i><span>newoffers</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="newoffers" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.admins.index')}}">
              <i class="bi bi-circle"></i><span>All newoffers</span>
            </a>
          </li>
            <a href="{{route('admin.admins.create')}}">
              <i class="bi bi-circle"></i><span>Add newoffers</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.admins.edit')}}">
              <i class="bi bi-circle"></i><span>Edit newoffers</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.admins.trash')}}">
              <i class="bi bi-circle"></i><span>Trash newoffers</span>
            </a>
          </li>
          <li>
        </ul>
      </li><!-- End Components Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->


         <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.settings')}}">
          <i class="bi bi-gear-fill"></i>
          <span>Settings</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
