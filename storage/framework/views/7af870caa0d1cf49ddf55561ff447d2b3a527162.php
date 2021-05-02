<!-- Top -->
<div class="top-style border-bottom">
    <nav class="navbar navbar-light justify-content-between">
        <div class="container">
            <a class="navbar-brand">
                <div class="top-right">
                    <i class="fas fa-mobile-alt"></i>
                    <span>Hotline:</span>
                    <span class="top-mg-right"><b><?php echo $contact[4]['link']; ?><?php //echo $contact[4]['link']; ?></b></span>
                    <i class="fas fa-envelope"></i>
                    <span>Email:</span>
                    <span><?php echo $contact[3]['link']; ?><?php //echo $contact[3]['link']; ?></span>
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
<?php /**PATH D:\git\reiwalaravel\resources\views/components/header.blade.php ENDPATH**/ ?>