            <li class="treeview {{$active == "Dashboard" ? "active" : ""}}">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo route("index", Array(), false); ?>"><i class="fa {{$dot == "Dashboard v1" ? "fa-dot-circle-o" : "fa-circle-o"}}"></i> Dashboard v1</a></li>
              </ul>
            </li>
            <li class="treeview {{$active == "Question" ? "active" : ""}}">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Question</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo route("question.new", Array(), false); ?>"><i class="fa {{$dot == "New" ? "fa-dot-circle-o" : "fa-circle-o"}}"></i> New</a></li>
                <li><a href="<?php echo route("question.list", Array(), false); ?>"><i class="fa {{$dot == "List" ? "fa-dot-circle-o" : "fa-circle-o"}}"></i> List</a></li>
              </ul>
            </li>
            <li class="treeview {{$active == "Possibilite" ? "active" : ""}}">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Possibilite</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo route("possibilite.new", Array(), false); ?>"><i class="fa {{$dot == "New" ? "fa-dot-circle-o" : "fa-circle-o"}}"></i> New</a></li>
                <li><a href="<?php echo route("possibilite.list", Array(), false); ?>"><i class="fa {{$dot == "List" ? "fa-dot-circle-o" : "fa-circle-o"}}"></i> List</a></li>
              </ul>
            </li>
            <li class="treeview {{$active == "Reponse" ? "active" : ""}}">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Reponse</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo route("reponse.new", Array(), false); ?>"><i class="fa {{$dot == "New" ? "fa-dot-circle-o" : "fa-circle-o"}}"></i> New</a></li>
                <li><a href="<?php echo route("reponse.list", Array(), false); ?>"><i class="fa {{$dot == "List" ? "fa-dot-circle-o" : "fa-circle-o"}}"></i> List</a></li>
              </ul>
            </li>
            <li class="treeview {{$active == "Probleme" ? "active" : ""}}">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Probleme</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo route("probleme.new", Array(), false); ?>"><i class="fa {{$dot == "New" ? "fa-dot-circle-o" : "fa-circle-o"}}"></i> New</a></li>
                <li><a href="<?php echo route("probleme.list", Array(), false); ?>"><i class="fa {{$dot == "List" ? "fa-dot-circle-o" : "fa-circle-o"}}"></i> List</a></li>
              </ul>
            </li>
