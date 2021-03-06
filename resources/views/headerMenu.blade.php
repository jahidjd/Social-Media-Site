<header id="header">
    <nav class="navbar navbar-default navbar-fixed-top menu">
      <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index-register.html"><img src="{{url('frontAssets/images/logo.png')}}"
              alt="logo" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right main-menu">

            <li class="dropdown"><a href="{{route('newsfeed')}}">News Feed</a></li>
            <li class="dropdown"><a href="{{route('profile')}}">Profile</a></li>
            <li class="dropdown"><a href="{{route('findFriend')}}">Find Friends</a></li>
            <?php 
              if(!empty($user)){?>

                 <li class="dropdown">
                   <form action="{{route('logout')}}" method="post">
                     @csrf
                     <input type="submit" class="btn btn-default" value="logout">
                   </form>
                 </li>
              <?php } ?>
          </ul>
          <form class="navbar-form navbar-right hidden-sm">
            <div class="form-group">
              <i class="icon ion-android-search"></i>
              <input type="text" class="form-control" placeholder="Search friends, photos, videos">
            </div>
          </form>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
  </header>