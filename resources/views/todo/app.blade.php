

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
          <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link
            href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
            rel="stylesheet"
        />
        <link href="bahan/css/styles.css" rel="stylesheet" />
        <script
            src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
            crossorigin="anonymous"
        ></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/awal">antarkilat</a>
            <!-- Sidebar Toggle-->
            <button
                class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
                id="sidebarToggle"
                href="#!"
            >
                <i class="fas fa-bars"></i>
            </button>
            <!-- Navbar Search-->
            <form
                class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"
            >
                <div class="input-group">
                    <input
                        class="form-control"
                        type="text"
                        placeholder="Search for..."
                        aria-label="Search for..."
                        aria-describedby="btnNavbarSearch"
                    />
                    <button
                        class="btn btn-primary"
                        id="btnNavbarSearch"
                        type="button"
                    >
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        id="navbarDropdown"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        ><i class="fas fa-user fa-fw"></i
                    ></a>
                    <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdown"
                    >
                        <li>
                            <a class="dropdown-item" href="/ahok">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#!">Activity Log</a>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav
                    class="sb-sidenav accordion sb-sidenav-dark"
                    id="sidenavAccordion"
                >
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="/awal">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-tachometer-alt"></i>
                                </div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a
                                class="nav-link collapsed"
                                href="#"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseLayouts"
                                aria-expanded="false"
                                aria-controls="collapseLayouts"
                            >
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-columns"></i>
                                </div>
                                Data
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div
                                class="collapse"
                                id="collapseLayouts"
                                aria-labelledby="headingOne"
                                data-bs-parent="#sidenavAccordion"
                            >
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/todo"
                                        >Proses data</a
                                    >
                                    <a
                                        class="nav-link"
                                        href="layout-sidenav-light.html"
                                        >tabel data</a
                                    >
                                </nav>
                            </div>

                            <div
                                class="collapse"
                                id="collapsePages"
                                aria-labelledby="headingTwo"
                                data-bs-parent="#sidenavAccordion"
                            >
                                <nav
                                    class="sb-sidenav-menu-nested nav accordion"
                                    id="sidenavAccordionPages"
                                >
                                    <a
                                        class="nav-link collapsed"
                                        href="#"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#pagesCollapseAuth"
                                        aria-expanded="false"
                                        aria-controls="pagesCollapseAuth"
                                    >
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                    </a>
                                    <div
                                        class="collapse"
                                        id="pagesCollapseAuth"
                                        aria-labelledby="headingOne"
                                        data-bs-parent="#sidenavAccordionPages"
                                    >
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="/loginn"
                                                >Login</a
                                            >
                                            <a
                                                class="nav-link"
                                                href="/registerr"
                                                >Register</a
                                            >
                                            <a
                                                class="nav-link"
                                                href="password.html"
                                                >Forgot Password</a
                                            >
                                        </nav>
                                    </div>
                                    <a
                                        class="nav-link collapsed"
                                        href="#"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#pagesCollapseError"
                                        aria-expanded="false"
                                        aria-controls="pagesCollapseError"
                                    >
                                        Error
                                        <div class="sb-sidenav-collapse-arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                    </a>
                                    <div
                                        class="collapse"
                                        id="pagesCollapseError"
                                        aria-labelledby="headingOne"
                                        data-bs-parent="#sidenavAccordionPages"
                                    >
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html"
                                                >401 Page</a
                                            >
                                            <a class="nav-link" href="404.html"
                                                >404 Page</a
                                            >
                                            <a class="nav-link" href="500.html"
                                                >500 Page</a
                                            >
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                        <div class="container mt-4">
                            <!-- 01. Content-->
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                 <div class="card mb-3">
                                    <div class="card-body">
                                        @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                            
                                        
                                            
                                        @endif
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                            
                                        @endif
                    
                    
                                        <!-- 02. Form input data -->
                                        <form id="todo-form" action="{{ route('todo.post') }}" method="post">
                                            @csrf   
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="task" id="todo-input"
                                                    placeholder="masukan resi paket" required value="{{ old('task') }}">
                                                <button class="btn btn-primary" type="submit">
                                                    Simpan
                                                </button>
                                            </div>
                                        </form>
                                      </div>
                                    </div>
                                    <div class="card-body">
                                        <!-- 03. Form input data -->
                                        <form id="todo-form" action="{{ url('/todo') }}" method="post">
                                            @csrf   
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="task" id="todo-input"
                                                    placeholder="masukan kode post" required>
                                                <button class="btn btn-primary" type="submit">
                                                    Simpan
                                                </button>
                                            </div>
                                        </form>
                                      </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            
                                           
                                            <ul class="list-group mb-4" id="todo-list">
                                                @foreach ($data as $item)
                                                    
                                                
                                                <!-- 04. Display Data -->
                                                
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span class="task-text">{{ $item->task }}</span>
                                                    <input type="text" class="form-control edit-input" style="display: none;"
                                                        value="{{ $item->task }}">
                                                    <div class="btn-group">
                                                        <form action="{{ route('todo.delete',['id'=>$item->id]) }}" method="POST" onsubmit="return confirm('apakah anda yakin??')">
                                                            
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger btn-sm delete-btn">✕</button>
                                                        </form>
                                                        <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse-{{ $loop->index }}" aria-expanded="false">✎</button>
                                                    </div>
                                                </li>
                                                <!-- 05. Update Data -->
                                                <li class="list-group-item collapse" id="collapse-{{ $loop->index }}">
                                                    <form action="{{ route('todo.update',['id'=>$item->id]) }}" method="POST">
                                                        @csrf
                                                        @method('put')
                                                        <div>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="task"
                                                                    value="{{ $item->task }}">
                                                                <button class="btn btn-outline-primary" type="submit">Update</button>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="radio px-2">
                                                                <label>
                                                                    <input type="radio" value="1" name="is_done" {{ $item->is_done=='1'?'checked':'' }}> Selesai
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" value="0" name="is_done" {{ $item->is_done=='0'?'checked':'' }}> Belum
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </li>
                                                @endforeach
                                            </ul>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </main>
                
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"
        ></script>
        <script src="bahan/js/scripts.js"></script>
        <script
            src="bahan/assets/://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
            crossorigin="anonymous"
        ></script>
        <script src="bahan/assets/demo/chabahan/rt-area-demo.js"></script>
        <script src="bahan/assets/demo/chart-bar-demo.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
            crossorigin="anonymous"
        ></script>
        <script src="bahan/js/datatables-simple-demo.js"></script>
         <!-- Bootstrap JS Bundle (popper.js included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
    </script>
    </body>
</html>
