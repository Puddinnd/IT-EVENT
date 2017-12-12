<!doctype html>
<html lang="en">
  <head>
    <title>E-Ticket</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{ url('/icon/icon.ico') }}">
  </head>
  <body>
    <div class="content dsktop column-container">
        <!--left of screen desktop site-->
        <div class="side-navbar dsktop column">
          <!--Logo or Event name-->
          <div class="side-navbar-name">
            <h1>IT EVENT</h1>
          </div>
          <!--User Image-->
          <div class="side-navbar-user-image">
                <img src="/uploads/avatar/{{ Auth::user()->avatar }}">
          </div>
          <!--Side navigater bar menus-->
          <div class="side-navbar-menu">
                <h3 class="user-panel-name">{{ Auth::user()->name }}</h3><br>
                <p class="user-panel-2"><a href="{{ url('/admin/profile') }}"><i class="fa fa-user-o"> My Profile</i></a></p>
                <p class="user-panel-3"><a href="{{ url('/admin/edit-event')}}"><i class="fa fa-star"> Edit Event</i></a></p>
                <p class="user-panel-5"><a href="{{ url('/admin/logout') }}"><i class="fa fa-sign-out"> Log out</i></a></p>
          </div>
        </div>
        <!--main page content desktop only-->
        <div class="main dsktop column"><center>
    <div class="main dsktop">
    
        <H1 class="text-center" style="margin: 50px 0 40px 0;">My Event</H1>
        
        @foreach ($ownevents as $event)
        <div class="card d-inline-block" style="width: 20rem; margin-bottom: 20px;">
            
            <div class="page-con-delete {{ $event->id }}">
                <h3>
                    <strong>
                    Delete this event ?
                    </strong>
                </h3>
                <form action="{{ route('admin-delete-event') }}" method="post" class="d-inline-block">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                    <button class="btn btn-success btn-con-delete" type="submit"><h4>Yes</h4></button>
                </form>
                
                <button class="btn btn-danger btn-con-delete" onclick="closedeletepage({{ $event->id }})""><h4>No</h4></button>
            </div>

            <img class="img-card" src="/uploads/event_avatar/{{ $event->event_avatar }}">
            <div class="card-body" style="color: white;">
            <h4 class="card-title" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis; max-width: 22ch;">
                {{ $event->event_name}}
            </h4>
            
            <form action="{{ route('admin-get-event') }}" method="post" enctype="multipart/form-data" class="d-inline-block">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                <button type="submit" class="btn-submit" style="width: 30px;">
                    <h5>Edit Event</h5>
                </button>
            </form>

            <button class="btn-delete" onclick="opendeletepage({{ $event->id }})">
                <h5>
                    <i class="fa-trash fa-2 fa"></i>
                </h5>
            </button>
          </div>
        </div>
        @endforeach
        <br><br>
    </div>
        </div>
    </div>
    <div class="content mobile">
      <div class="head-navbar">
        <a href="#" onclick="openNav()"><i class="fa fa-bars"></i></a>
      </div>
      <div class="main-content-mobile">
          <div id="mobile-menu" class="main-content-mobile-menu">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <!--User Image-->
               <img src="/uploads/avatar/{{ Auth::user()->avatar }}"  style="width: 100px; margin-bottom: 20px;  margin-left: 75px;">
                <h5 style="text-align: center; padding-right: 15px; padding-left: 15px; color: white;">{{ Auth::user()->name }}</h5><br>
                <p class="user-panel-2"><a href="{{ url('/admin/profile') }}"><i class="fa fa-user-o"> My Profile</i></a></p>
                <p class="user-panel-3"><a href="{{ url('/admin/edit-event')}}"><i class="fa fa-star"> Edit Event</i></a></p>
                <p class="user-panel-5"><a href="{{ url('/admin/logout') }}"><i class="fa fa-sign-out"> Log out</i></a></p>rs/logout') }}"><i class="fa fa-sign-out"> Log out</i></a>
          </div>
          <div style="color: white; margin-top: -50px;">
        <H1 class="text-center" style="margin: 50px 0 40px 0;">My Event</H1>
        <center>
        @foreach ($ownevents as $event)
        <div class="card d-inline-block" style="width: 20rem; margin-bottom: 20px;">
            
            <div class="page-con-delete {{ $event->id }}">
                <h3>
                    <strong>
                    Delete this event ?
                    </strong>
                </h3>
                <form action="{{ route('admin-delete-event') }}" method="post" class="d-inline-block">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                    <button class="btn btn-success btn-con-delete" type="submit"><h4>Yes</h4></button>
                </form>
                
                <button class="btn btn-danger btn-con-delete" onclick="closedeletepage({{ $event->id }})""><h4>No</h4></button>
            </div>

            <img class="img-card" src="/uploads/event_avatar/{{ $event->event_avatar }}">
            <div class="card-body" style="color: white;">
            <h4 class="card-title" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis; max-width: 22ch;">
                {{ $event->event_name}}
            </h4>
            
            <form action="{{ route('admin-get-event') }}" method="post" enctype="multipart/form-data" class="d-inline-block">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                <button type="submit" class="btn-submit" style="width: 30px;">
                    <h5>Edit Event</h5>
                </button>
            </form>

            <button class="btn-delete" onclick="opendeletepage({{ $event->id }})">
                <h5>
                    <i class="fa-trash fa-2 fa"></i>
                </h5>
            </button>
          </div>
        </div>
        @endforeach
        <br><br>
    </center>
          </div>
      </div>
      
    </div>
    

    <!-- Optional JavaScript -->
    <script>
      function openPage(pageName, elmnt, color) {
        // Hide all elements with class="tabcontent" by default */
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
    
        // Remove the background color of all tablinks/buttons
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
    
        // Show the specific tab content
        document.getElementById(pageName).style.display = "block";
    
        // Add the specific color to the button used to open the tab content
        elmnt.style.backgroundColor = color;
    }
    
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click(); 
      </script>

      <script>
        function opendeletepage(card){
          $(('.'+card)).css('display', 'block');
        }
        function closedeletepage(card){
          $(('.'+card)).css('display', 'none');
        }
      </script>
      <script>
        function openNav() {
    document.getElementById("mobile-menu").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mobile-menu").style.width = "0";
}
      </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/81c2cd76b6.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html> 