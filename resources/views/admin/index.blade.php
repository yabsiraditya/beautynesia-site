<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard | Beautynesia</title>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- Navbar --}}
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col items-start justify-start">
          <!-- Page content here -->
          <div class="navbar bg-base-200 shadow-md">
            <label for="my-drawer-2" class="btn btn-circle swap swap-rotate lg:hidden">
                <!-- this hidden checkbox controls the state -->
                <input type="checkbox" />
              
                <!-- hamburger icon -->
                <svg
                  class="swap-off fill-current"
                  xmlns="http://www.w3.org/2000/svg"
                  width="32"
                  height="32"
                  viewBox="0 0 512 512">
                  <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
                </svg>
              
                <!-- close icon -->
                <svg
                  class="swap-on fill-current"
                  xmlns="http://www.w3.org/2000/svg"
                  width="32"
                  height="32"
                  viewBox="0 0 512 512">
                  <polygon
                    points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
                </svg>
              </label>
            <div class="container mx-auto flex justify-end">
                <ul class="menu menu-horizontal py-3 flex items-center">
                    <li>
                        <a>
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <input type="submit" class="font-medium" value="Logout">
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
        <div class="drawer-side">
          <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
          <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
            <!-- Sidebar content here -->
            <h1 class="text-2xl font-bold text-center p-3 mb-3">Admin Dashboard</h1>
            <li><a>Dashboard</a></li>
            <li><a>Dashboard</a></li>
            <li><a>Dashboard</a></li>
            <li><a>Dashboard</a></li>
          </ul>
        </div>
      </div>
</body>
</html>