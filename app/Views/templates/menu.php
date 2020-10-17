<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <!-- Menu CLientes -->
        <li>
          <a href="<?= base_url ('Cliente')?>">
            <i class="fas fa-user"></i> <span>Clientes</span>
          </a>
        </li>

        <!-- Menu Productos -->
        <li class="treeview">
          <a href="#">
            <i class="fab fa-product-hunt"></i>
            <span>Productos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url ('Home')?>"><i class="fas fa-list-ol"></i> Unidades</a></li>
            <li><a href="#"><i class="fa fa-tag"></i> Lineas</a></li>
            <li><a href="#"><i class="fa fa-tag"></i> Familia</a></li>
            <li><a href="#"><i class="fa fa-tag"></i> Marca</a></li>
          </ul>
        </li>

        <!-- Menu Pedidos -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-hands-helping"></i>
            <span>Pedidos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fas fa-cart-plus"></i> Hacer pedido</a></li>
            <li><a href="#"><i class="fa fa-list-ol"></i> Lista de pedidos</a></li>
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>