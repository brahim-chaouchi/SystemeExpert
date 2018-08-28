            <li class="treeview {{$active == "Dashboard" ? "active" : ""}}">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo route("index", Array(), false); ?>"><i class="fa {{$dot == "Dashboard v1" ? "fa-dot-circle-o" : "fa-circle-o"}}"></i> Dashboard v1</a></li>
              </ul>
            </li>
