{"filter":false,"title":"navbar.blade.php","tooltip":"/tasklist/resources/views/commons/navbar.blade.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":20,"column":9},"action":"remove","lines":["<header>","    <nav class=\"navbar navbar-inverse navbar-static-top\">","        <div class=\"container\">","            <div class=\"navbar-header\">","                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">","                    <span class=\"sr-only\">Toggle navigation</span>","                    <span class=\"icon-bar\"></span>","                    <span class=\"icon-bar\"></span>","                    <span class=\"icon-bar\"></span>","                </button>","                <a class=\"navbar-brand\" href=\"/\">Microposts</a>","            </div>","            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">","                   <ul class=\"nav navbar-nav navbar-right\">","                    <li>{!! link_to_route('signup.get', 'Signup') !!}</li>","                    <li><a href=\"#\">Login</a></li>","                </ul>","            </div>","        </div>","    </nav>","</header>"],"id":3},{"start":{"row":0,"column":0},"end":{"row":32,"column":9},"action":"insert","lines":["<header>","    <nav class=\"navbar navbar-inverse navbar-static-top\">","        <div class=\"container\">","            <div class=\"navbar-header\">","                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">","                    <span class=\"sr-only\">Toggle navigation</span>","                    <span class=\"icon-bar\"></span>","                    <span class=\"icon-bar\"></span>","                    <span class=\"icon-bar\"></span>","                </button>","                <a class=\"navbar-brand\" href=\"/\">Microposts</a>","            </div>","            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">","                <ul class=\"nav navbar-nav navbar-right\">","                    @if (Auth::check())","                        <li><a href=\"#\">Users</a></li>","                        <li class=\"dropdown\">","                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ Auth::user()->name }} <span class=\"caret\"></span></a>","                            <ul class=\"dropdown-menu\">","                                <li><a href=\"#\">My profile</a></li>","                                <li role=\"separator\" class=\"divider\"></li>","                                <li>{!! link_to_route('logout.get', 'Logout') !!}</li>","                            </ul>","                        </li>","                    @else","                        <li>{!! link_to_route('signup.get', 'Signup') !!}</li>","                        <li>{!! link_to_route('login', 'Login') !!}</li>","                    @endif","                </ul>","            </div>","        </div>","    </nav>","</header>"]}],[{"start":{"row":15,"column":24},"end":{"row":15,"column":54},"action":"remove","lines":["<li><a href=\"#\">Users</a></li>"],"id":4},{"start":{"row":15,"column":20},"end":{"row":15,"column":24},"action":"remove","lines":["    "]},{"start":{"row":15,"column":16},"end":{"row":15,"column":20},"action":"remove","lines":["    "]},{"start":{"row":15,"column":12},"end":{"row":15,"column":16},"action":"remove","lines":["    "]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":12},"end":{"row":15,"column":12},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1529291488961,"hash":"3c633b4969f6812a8780faaec608d787b6be9025"}