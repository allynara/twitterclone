{"filter":false,"title":"2018_06_13_121457_create_kadai-tasklist_table.php","tooltip":"/kadai-tasklist/database/migrations/2018_06_13_121457_create_kadai-tasklist_table.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":13,"column":3},"end":{"row":29,"column":5},"action":"remove","lines":[" public function up()","    {","        Schema::create('kadai-tasklist', function (Blueprint $table) {","            $table->increments('id');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('kadai-tasklist');","    }"],"id":2},{"start":{"row":13,"column":3},"end":{"row":29,"column":5},"action":"insert","lines":["  public function up()","    {","        Schema::create('microposts', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('user_id')->unsigned()->index();","            $table->string('content');","            $table->timestamps();","","            // Foreign key constraint","            $table->foreign('user_id')->references('id')->on('users');","        });","    }","","    public function down()","    {","        Schema::dropIfExists('microposts');","    }"]}]]},"ace":{"folds":[],"scrolltop":309,"scrollleft":0,"selection":{"start":{"row":29,"column":5},"end":{"row":29,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528859788322,"hash":"3583d537f9872ede60dfbd635d70411bb873f485"}