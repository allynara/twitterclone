{"filter":false,"title":"RedirectIfAuthenticated.php","tooltip":"/kadai-tasklist/app/Http/Middleware/RedirectIfAuthenticated.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":25,"column":1},"end":{"row":25,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":174,"mode":"ace/mode/php"}},"hash":"799c1f51f9ec70b354d0e6c51e5ff0b5917ace9b","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":17,"column":6},"end":{"row":24,"column":5},"action":"remove","lines":[" public function handle($request, Closure $next, $guard = null)","    {","        if (Auth::guard($guard)->check()) {","            return redirect('/');","        }","","        return $next($request);","    }"],"id":4},{"start":{"row":17,"column":6},"end":{"row":24,"column":5},"action":"insert","lines":["    public function handle($request, Closure $next, $guard = null)","    {","        if (Auth::guard($guard)->check()) {","            return redirect('/home');","        }","","        return $next($request);","    }"]}],[{"start":{"row":20,"column":33},"end":{"row":20,"column":34},"action":"remove","lines":["e"],"id":5},{"start":{"row":20,"column":32},"end":{"row":20,"column":33},"action":"remove","lines":["m"]},{"start":{"row":20,"column":31},"end":{"row":20,"column":32},"action":"remove","lines":["o"]},{"start":{"row":20,"column":30},"end":{"row":20,"column":31},"action":"remove","lines":["h"]}],[{"start":{"row":17,"column":10},"end":{"row":24,"column":5},"action":"remove","lines":["public function handle($request, Closure $next, $guard = null)","    {","        if (Auth::guard($guard)->check()) {","            return redirect('/');","        }","","        return $next($request);","    }"],"id":9},{"start":{"row":17,"column":10},"end":{"row":24,"column":5},"action":"insert","lines":["    public function handle($request, Closure $next, $guard = null)","    {","        if (Auth::guard($guard)->check()) {","            return redirect('/home');","        }","","        return $next($request);","    }"]}],[{"start":{"row":20,"column":33},"end":{"row":20,"column":34},"action":"remove","lines":["e"],"id":10},{"start":{"row":20,"column":32},"end":{"row":20,"column":33},"action":"remove","lines":["m"]},{"start":{"row":20,"column":31},"end":{"row":20,"column":32},"action":"remove","lines":["o"]},{"start":{"row":20,"column":30},"end":{"row":20,"column":31},"action":"remove","lines":["h"]}]]},"timestamp":1528946433850}