<?php
namespace App\Database;
/**
 * Class QueryBuilder - it makes queries to database
 */
class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll($table, $model = "")
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table}");
        $query->execute();

        if($model) {
            return $query->fetchAll(\PDO::FETCH_CLASS, $model);
        } else {
            return $query->fetchAll(\PDO::FETCH_OBJ);
        }
    }

    public function addNew($table,$payload)
    {
 
        $sql = sprintf("INSERT INTO %s (%s) VALUES (%s)",
            $table,
            implode(", ", array_keys($payload)),
            ":" . implode(", :", array_keys($payload))
        );
        // dd($sql);
        $query = $this->pdo->prepare($sql); 
        // dd($query);
        $query->execute($payload);

    }
    
    public function update($table, $payload)
    {

        $dt = str_replace('T', ' ', $_POST['date_time']);
        $_POST = str_replace($_POST['date_time'], $dt, $_POST);
        $long_desc = str_replace('"', '\"', $_POST['long_desc']);
        $short_desc = str_replace('"', '\"', $_POST['short_desc']);

        $_POST = str_replace($_POST['long_desc'],$long_desc,$_POST);

        $id = $_POST['id'];
        unset($_POST['id']);

        $variables = "";
        
        foreach($_POST as $key =>  $element) {
            $variables.= $key . '="' . $element . '", ' ;
        }  

        $variables = substr($variables, 0, -2);
        $sql = "UPDATE {$table} SET {$variables} WHERE id = '{$id}'";
  
        $query = $this->pdo->prepare($sql);
        var_dump($query);
        $query->execute();

    }

    public function getOne($table, $id, $model = "")
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table} WHERE prices_id='{$id}'");
        // dd($query);
        $query->execute();
        if($model) {
            return $query->fetch(\PDO::FETCH_CLASS, $model);
        } else {
            return $query->fetch(\PDO::FETCH_OBJ);
        }
    }
    public function getAllOfEach($table, $id, $model = "")
    {   
        $query = $this->pdo->prepare("SELECT * FROM {$table}  LEFT JOIN seatings ON seatings.id = events.seatings_id LEFT JOIN prices ON prices.id = events.prices_id LEFT JOIN venues ON venues.id = events.venues_id  WHERE venues_id='$id'");
        $query->execute();
        if($model) {
            return $query->fetchAll(\PDO::FETCH_CLASS, $model);
        } else {
            return $query->fetchAll(\PDO::FETCH_OBJ);
        }
    }

    public function getOneUser($table, $email, $model = "")
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table} WHERE email='{$email}'");
        $query->execute();

        if($model) {
            return $query->fetch(\PDO::FETCH_CLASS, $model);
        } else {
            return $query->fetch(\PDO::FETCH_OBJ);
        }
    }

    public function destroy($table, $id)
    {
        $query = $this->pdo->prepare("DELETE FROM {$table} WHERE prices_id='{$id}'");

        $query->execute();
    }

    public function getAllTickets($id, $model = "")
    {
    $query = $this->pdo->prepare("SELECT *  FROM  tickets 
                                INNER JOIN venue_seating ON venue_seating.id = tickets.venue_seating_id
                                INNER JOIN seatings ON seatings.id = seatings_id 
                                INNER JOIN events ON tickets.events_id = events.id 
                                WHERE tickets.events_id = {$id}");
        $query->execute();
        
        // $query->debugDumpParams();
        if($model) {
            return $query->fetchAll(\PDO::FETCH_CLASS, $model);
        } else {
            return $query->fetchAll(\PDO::FETCH_OBJ);
        }

    }
}