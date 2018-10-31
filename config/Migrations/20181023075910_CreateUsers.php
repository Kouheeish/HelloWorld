<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn("name", "string", [
          "default"=>null,
          "limit" =>255,
          "null"=>true,
        ]);
        $table->addColumn("password", "string", [
          "default"=>null,
          "limit" =>255,
          "null"=>true,
        ]);
        $table->addColumn("hobby_id", "integer",[
          "null"=>false,
        ]);

        $table->addColumn("created", "datetime", [
          "default"=>null,
          "null"=>true,
        ]);
        $table->addColumn("modified", "datetime", [
          "default"=>null,
          "null"=>true,
        ]);
        $table->create();

        
        $table = $this->table("hobbies");
        $table->addColumn("name", "string", [
          "default"=>null,
          "limit" =>255,
          "null"=>true,
        ]);
        $table->addColumn("created", "datetime", [
          "default"=>null,
          "null"=>true,
        ]);
        $table->addColumn("modified", "datetime", [
          "default"=>null,
          "null"=>true,
        ]);
        $table->create();
}
}
