  <?php
    class Database{
        public static function connect(){
            $db = new mysqli('localhost', 'root', '', 'db_blog');
            $db->query("SET NAMES 'utf8'");
            return $db;
        }
    }