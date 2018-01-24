<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Blog', 'icon' => 'file-text', 'url' => ['/tb-blog']],
                    ['label' => 'Jadwal', 'icon' => 'calendar', 'url' => ['/tb-jadwal']],
                    ['label' => 'Kategori', 'icon' => 'list-alt', 'url' => ['/tb-kategori']],
                    ['label' => 'Pesan', 'icon' => 'envelope-o', 'url' => ['/tb-pesan']],
                    ['label' => 'Profile', 'icon' => 'users', 'url' => ['/tb-profile']],
                    ['label' => 'Program', 'icon' => 'calendar-check-o', 'url' => ['/tb-program']],
                    ['label' => 'Slide', 'icon' => 'sliders', 'url' => ['/tb-slide']],
                    ['label' => 'User', 'icon' => 'user', 'url' => ['/tb-user']],
                    
                ],
            ]
        ) ?>

    </section>

</aside>
