<!-- header -->
<header>
  <div id="containerHeader" class="d-flex justify-content-between align-items-center py-2 px-5 position-relative">
    <!-- parte sinistra -->
    <img class="position-absolute" src="{{ Vite::asset('resources/img/logoBoolflix.png') }}"alt="logo-BoolFlix">
        <div id="sxHeader" class="d-flex justify-content-between align-items-center">
            <!-- navbar -->
            <nav>
                <div class="justify-content-between align-items-center">
                    <a class="col" href="#">
                        <span class="text-capitalize">home</span>
                    </a>
                    <a class="col" href="#">
                        <span class="text-capitalize">serie TV</span>
                    </a>
                    <a class="col" href="#">
                        <span class="text-capitalize">film</span>
                    </a>
                    <a class="col" href="#">
                        <span>Nuovi e popolari</span>
                    </a>
                    <a class="col" href="#">
                        <span>La mia lista</span>
                    </a>
                    <a class="col" href="#">
                        <span>Sfoglia per lingua</span>
                    </a>
                </div>
            </nav>
        </div>
        <!-- parte destra -->
        <div id="dxHeader" class="d-flex justify-content-between align-items-center">
            <!-- comonente search bar -->
            <div class="d-flex">
                <input class="form-control me-2"  type="search" placeholder="Search     Film/TV-Series" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </div>

            <i class="fa-solid fa-magnifying-glass mx-2 p-2 rounded-circle"></i>
            <span class="text-capitalize mx-2">bambini</span>
            <i class="fa-regular fa-bell mx-2"></i>
            <img class="mx-2" src="{{ Vite::asset('resources/img/accountNetflix.png') }}    " alt="">
            <i class="fa-solid fa-caret-down mx-2"></i>
        </div>
    </div>
</header>