<?php 

// The database class, has all the methods for interacting with the database

class databaseObject{
    protected $connection;
    public $error;

    // Constructor class, attempts a connection using the credentials and the default options 
    public function __construct($host, $username, $password, $database){
        $dataSourceName = "mysql:host=$host;dbname=$database;charset=utf8mb4";
        $options = [
            PDO::ATTR_EMULATE_PREPARES   => false,  // use real statements
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //enable errors as exception
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //fetch are associative
        ];

        try {
            $this->connection = new PDO($dataSourceName, $username, $password, $options);
        } catch (Exception $e) {
            error_log($e->getMessage());
            $this->error =  $e->getMessage(); //Error  
        }

    }

    // returns an array of news items from the database query
    public function getNews(){
        try {
            $query = $this->connection->prepare('SELECT title,content,slug,featured_image, post_type, color, published_on, first_name ,last_name, profile_picture FROM news JOIN editors ON news.created_by = editors.id ORDER BY published_on DESC LIMIT 3');
            $query->execute();
            $results = $query->fetchAll();
            return $results;
        } catch (Exception $e) {
            error_log($e->getMessage());
            $this->error =  $e->getMessage(); //Error  
        }
    }

}

?>