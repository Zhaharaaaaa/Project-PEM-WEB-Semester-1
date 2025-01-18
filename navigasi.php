<!-- Navigasi menggunakan bootstrap navbar offcanvas -->
<nav class="navbar navbar-expand-lg fixed-top" >
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php?hal=home"><img src="./img/logo.png" alt="logo" width="32" height="32" class="d-inline-block align-text-top rounded mx-2"/><span class="fw-bold ">Konveru</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Konveru</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link mx-lg-2 " aria-current="page" href="index.php?hal=home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="index.php?hal=team">Team Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2" href="index.php?hal=konversi">Konversi</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2" href="index.php?hal=faq">FAQ</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2" href="index.php?hal=contact">Contact</a>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>