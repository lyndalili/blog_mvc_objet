<?php 
class coreModel extends core
{ 
    protected $pdo;

public function __construct(){
    try {
        $dns = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
        $options= array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . DB_CHARSET,
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO ::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_OBJ
        );
    $this->pdo = new PDO($dns,DB_USER, DB_PASSWORD, $options );//charge le pdo
    //var_dump($this);
    
    }catch(Exception $e){
        die ("connexion a MYSQL impossible! : ". $e->getMessage());
    }
    
    
}

public function coreCount($table, $where = ""){
  
  try {
    $query =  "SELECT count(*) AS nombre 
    FROM " . $table;
if ($where != ""){
   $query .= " WHERE " . $where;
}
  //die ($query) ;
$req =$this->pdo->query($query);
    //$req->setFetchMode(PDO::FETCH_OBJ);
    $data = $req->fetch();

    $req->closeCursor();
    return (int) $data->nombre;
 } catch (Exception $e) {
   return false;
 }
}
public function coreAll($table, $where = ""){
  
    try {
      $query =  "SELECT * 
      FROM " . $table;
  if ($where != ""){
     $query .= " WHERE " . $where;
  }
    //die ($query) ;
  $req =$this->pdo->query($query);
      //$req->setFetchMode(PDO::FETCH_OBJ);
      $data = $req->fetchAll();
  
      $req->closeCursor();
      return $data;
   } catch (Exception $e) {
     return false;
   }
  }
  
  }
