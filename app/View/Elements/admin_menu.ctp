<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dsprog CRM</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp; Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Mensagens <span class="label label-success">42</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li class="dropdown">
				      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuários <b class="caret"></b></a>
				        <ul class="dropdown-menu">
                	<li><a href="#">Usuários</a></li>
                	<li><a href="#">Grupos</a></li>
                	<li><a href="#">Permissões</a></li>
                </ul>
            </li>
          </ul>
          <!-- menu da direita -->
          <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $this->Session->read('Auth.User.username'); ?> &nbsp;<span class="label label-danger">42</span></a></li>
              <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Configurações</a></li>
              <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-off"></span> Sair', '/admin/logout', array('escape' => false)); ?>"></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</div>