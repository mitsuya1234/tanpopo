class CreateLikesTable extends Migration
{
 /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('likes', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->integer('reply_id')->unsigned();
      $table->integer('user_id')->unsigned();
      $table->timestamps();
   });
  ...
 }
}
