{"filter":false,"title":"RedirectIfAuthenticated.php","tooltip":"/microposts/app/Http/Middleware/RedirectIfAuthenticated.php","undoManager":{"mark":6,"position":6,"stack":[[{"start":{"row":17,"column":1},"end":{"row":25,"column":1},"action":"remove","lines":["   public function handle($request, Closure $next, $guard = null)","    {","        if (Auth::guard($guard)->check()) {","            return redirect('/home');","        }","","        return $next($request);","    }","}"],"id":2},{"start":{"row":17,"column":1},"end":{"row":24,"column":5},"action":"insert","lines":["    public function handle($request, Closure $next, $guard = null)","    {","        if (Auth::guard($guard)->check()) {","            return redirect('/home');","        }","","        return $next($request);","    }"]}],[{"start":{"row":24,"column":5},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":4},"end":{"row":26,"column":0},"action":"insert","lines":["",""]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":20,"column":33},"end":{"row":20,"column":34},"action":"remove","lines":["e"],"id":4},{"start":{"row":20,"column":32},"end":{"row":20,"column":33},"action":"remove","lines":["m"]},{"start":{"row":20,"column":31},"end":{"row":20,"column":32},"action":"remove","lines":["o"]},{"start":{"row":20,"column":30},"end":{"row":20,"column":31},"action":"remove","lines":["h"]}],[{"start":{"row":17,"column":2},"end":{"row":27,"column":0},"action":"remove","lines":["   public function handle($request, Closure $next, $guard = null)","    {","        if (Auth::guard($guard)->check()) {","            return redirect('/');","        }","","        return $next($request);","    }","    ","    ",""],"id":6},{"start":{"row":17,"column":2},"end":{"row":24,"column":5},"action":"insert","lines":["    public function handle($request, Closure $next, $guard = null)","    {","        if (Auth::guard($guard)->check()) {","            return redirect('/home');","        }","","        return $next($request);","    }"]}],[{"start":{"row":20,"column":33},"end":{"row":20,"column":34},"action":"remove","lines":["e"],"id":7},{"start":{"row":20,"column":32},"end":{"row":20,"column":33},"action":"remove","lines":["m"]},{"start":{"row":20,"column":31},"end":{"row":20,"column":32},"action":"remove","lines":["o"]},{"start":{"row":20,"column":30},"end":{"row":20,"column":31},"action":"remove","lines":["h"]}],[{"start":{"row":24,"column":5},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":4},"end":{"row":25,"column":5},"action":"insert","lines":["}"]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":25,"column":1},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":9}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":26,"column":0},"end":{"row":26,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":18,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1529371655604,"hash":"23adbc4d63e15e9bbdaf77042bf68c706c1f14aa"}