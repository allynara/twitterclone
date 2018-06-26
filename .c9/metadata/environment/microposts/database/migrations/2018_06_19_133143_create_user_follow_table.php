{"filter":false,"title":"2018_06_19_133143_create_user_follow_table.php","tooltip":"/microposts/database/migrations/2018_06_19_133143_create_user_follow_table.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":13,"column":4},"end":{"row":31,"column":0},"action":"remove","lines":["public function up()","    {","        Schema::create('user_follow', function (Blueprint $table) {","            $table->increments('id');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('user_follow');","    }","}",""],"id":2},{"start":{"row":13,"column":4},"end":{"row":33,"column":5},"action":"insert","lines":[" public function up()","    {","        Schema::create('user_follow', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('user_id')->unsigned()->index();","            $table->integer('follow_id')->unsigned()->index();","            $table->timestamps();","","            // Foreign key setting","            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');","            $table->foreign('follow_id')->references('id')->on('users')->onDelete('cascade');","","            // Do not allow duplication of combination of user_id and follow_id","            $table->unique(['user_id', 'follow_id']);","        });","    }","","    public function down()","    {","        Schema::dropIfExists('user_follow');","    }"]}],[{"start":{"row":33,"column":5},"end":{"row":34,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":33,"column":0},"end":{"row":33,"column":1},"action":"insert","lines":["}"],"id":5}],[{"start":{"row":33,"column":1},"end":{"row":33,"column":5},"action":"remove","lines":["    "],"id":6},{"start":{"row":33,"column":1},"end":{"row":34,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":13,"column":4},"end":{"row":33,"column":1},"action":"remove","lines":[" public function up()","    {","        Schema::create('user_follow', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('user_id')->unsigned()->index();","            $table->integer('follow_id')->unsigned()->index();","            $table->timestamps();","","            // Foreign key setting","            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');","            $table->foreign('follow_id')->references('id')->on('users')->onDelete('cascade');","","            // Do not allow duplication of combination of user_id and follow_id","            $table->unique(['user_id', 'follow_id']);","        });","    }","","    public function down()","    {","        Schema::dropIfExists('user_follow');","}"],"id":7},{"start":{"row":13,"column":4},"end":{"row":29,"column":5},"action":"insert","lines":[" public function up()","    {","        Schema::create('microposts', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('user_id')->unsigned()->index();","            $table->string('content');","            $table->timestamps();","","            // Foreign key constraint","            $table->foreign('user_id')->references('id')->on('users');","        });","    }","","    public function down()","    {","        Schema::dropIfExists('microposts');","    }"]}],[{"start":{"row":13,"column":5},"end":{"row":29,"column":5},"action":"remove","lines":["public function up()","    {","        Schema::create('microposts', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('user_id')->unsigned()->index();","            $table->string('content');","            $table->timestamps();","","            // Foreign key constraint","            $table->foreign('user_id')->references('id')->on('users');","        });","    }","","    public function down()","    {","        Schema::dropIfExists('microposts');","    }"],"id":8},{"start":{"row":13,"column":5},"end":{"row":33,"column":5},"action":"insert","lines":["    public function up()","    {","        Schema::create('user_follow', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('user_id')->unsigned()->index();","            $table->integer('follow_id')->unsigned()->index();","            $table->timestamps();","","            // Foreign key setting","            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');","            $table->foreign('follow_id')->references('id')->on('users')->onDelete('cascade');","","            // Do not allow duplication of combination of user_id and follow_id","            $table->unique(['user_id', 'follow_id']);","        });","    }","","    public function down()","    {","        Schema::dropIfExists('user_follow');","    }"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":33,"column":5},"end":{"row":33,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1529385750878,"hash":"431acf24010717789646c1a170ec61f28ade2051"}