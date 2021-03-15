<li class="menu-item {{ (request()->is('dashboard/stok-barang*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
  <a href="/dashboard/stok-barang" class="menu-link">
    <span class="menu-icon">
      <i class="menu-icon fab fa-dropbox"></i>
    </span>
    <span class="menu-text"> Stok Barang </span>
  </a>
</li>

<li class="menu-item menu-item-submenu {{ (request()->is('dashboard/data*')) ? 'menu-item-active menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
  <a href="javascript:;" class="menu-link menu-toggle">
    <span class="menu-icon">
      <i class="menu-icon fas far fa-clone"></i>
    </span>
    <span class="menu-text"> Master Data </span>
    <i class="menu-arrow"></i>
  </a>
  <div class="menu-submenu">
    <i class="menu-arrow"></i>
    <ul class="menu-subnav">
      <li class="menu-item {{ (request()->is('dashboard/data/supplier*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/data/supplier" class="menu-link">
          <i class="menu-bullet menu-bullet-dot">
            <span></span>
          </i>
          <span class="menu-text"> Supplier </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/data/jenis-barang*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/data/jenis-barang" class="menu-link">
          <i class="menu-bullet menu-bullet-dot">
            <span></span>
          </i>
          <span class="menu-text"> Jenis Barang </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/data/merk-barang*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/data/merk-barang" class="menu-link">
          <i class="menu-bullet menu-bullet-dot">
            <span></span>
          </i>
          <span class="menu-text"> Merk Barang </span>
        </a>
      </li>
    </ul>
  </div>
</li>
