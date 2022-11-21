 
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('admin')}}">
              <span data-feather="home"></span>
              <i class="fa-solid fa-user-secret"></i> Admin
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('dashboard')}}">
              <span data-feather="home"></span><i class="fa-solid fa-house"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('hotel')}}">
            <span data-feather="file"></span><i class="fa-solid fa-hotel"></i>
              Hotel
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user')}}">
              <span data-feather="file"></span><i class="fa-solid fa-user-group"></i>
              Users
  
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('guest')}}">
              <span data-feather="file"></span><i class="fa-solid fa-user-group"></i>
              Guest
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('room_type')}}">
              <span data-feather="file"></span>
              <i class="fa-solid fa-building-columns"></i>
              Room_type
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('rooms')}}">
              <span data-feather="file"></span>
              <i class="fa-solid fa-house-chimney"></i>
              Rooms
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('booking')}}">
              <span data-feather="file"></span>
              Booking
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('amenities')}}">
              <span data-feather="file"><i class="fa-solid fa-user-group"></i>
              Amenities
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('payment')}}">
              <span data-feather="file"></span><i class="fa-duotone fa-dollar-sign"></i>
              Payment
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('reports')}}">
              <span data-feather="file"></span><i class="fa-solid fa-user-group"></i>
              Reports
            </a>
          </li>
    </nav>