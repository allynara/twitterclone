{"filter":false,"title":"LoginController.php","tooltip":"/kadai-tasklist/app/Http/Controllers/Auth/LoginController.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":0,"column":29},"action":"remove","lines":[" protected $redirectTo = '/';"],"id":4},{"start":{"row":0,"column":0},"end":{"row":38,"column":1},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers\\Auth;","","use App\\Http\\Controllers\\Controller;","use Illuminate\\Foundation\\Auth\\AuthenticatesUsers;","","class LoginController extends Controller","{","    /*","    |--------------------------------------------------------------------------","    | Login Controller","    |--------------------------------------------------------------------------","    |","    | This controller handles authenticating users for the application and","    | redirecting them to your home screen. The controller uses a trait","    | to conveniently provide its functionality to your applications.","    |","    */","","    use AuthenticatesUsers;","","    /**","     * Where to redirect users after login.","     *","     * @var string","     */","    protected $redirectTo = '/';","","    /**","     * Create a new controller instance.","     *","     * @return void","     */","    public function __construct()","    {","        $this->middleware('guest')->except('logout');","    }","}"]}]]},"ace":{"folds":[],"scrolltop":232.5,"scrollleft":0,"selection":{"start":{"row":25,"column":18},"end":{"row":25,"column":18},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":16,"state":"php-comment","mode":"ace/mode/php"}},"timestamp":1529034139428,"hash":"0836ca7a598d72daf239cfa1740fa18535968894"}