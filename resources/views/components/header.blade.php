<!-- Top -->
<div class="top-style border-bottom">
    <nav class="navbar navbar-light justify-content-between">
        <div class="container">
            <a class="navbar-brand">
                <div class="top-right">
                    <i class="fas fa-mobile-alt"></i>
                    <span>Hotline:</span>
                    <span class="top-mg-right"><b><?php //echo $contact[4]['link']; ?></b></span>
                    <i class="fas fa-envelope"></i>
                    <span>Email:</span>
                    <span><?php //echo $contact[3]['link']; ?></span>
                </div>
            </a>
            <form action="" method="GET" class="form-inline my-2 my-lg-0" style="right: 0px;">
                <div class="top-search-all">
                    <input type="text" name="action" value="post" hidden>
                    <input type="text" name="type" value="search" hidden>
                    <input class="top-search" id="search-input" type="search" name="value" placeholder="Tìm Kiếm"
                        aria-label="Search">
                    <button class="top-btn-search" id="action-search" type="submit"><i
                            class="fas fa-search"></i></button>
                </div>
            </form>

        </div>
    </nav>
</div>
<!-- Nav -->
<nav class="navbar navbar-expand-sm navbar-light bg-white sticky-top pos-nav">
    <div class="container">
        <a class="navbar-brand" href="{{ asset('images/ReiwaHouse_logo_final.svg') }}">
            <img src="{{ asset('images/ReiwaHouse_logo_final.svg') }}" alt="logo" width="150" height="100"
                class="img-fluid">
        </a>
        <button class="navbar-toggler" id="click-nav" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <x-navbar :result="$result"/>
            </ul>
        </div>
    </div>
</nav>
