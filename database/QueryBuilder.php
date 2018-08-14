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
        $_POST = str_replace('T', ' ', $_POST);
        $id = $_POST['id'];
        unset($_POST['id']);

        $variables = "";
        
        foreach($_POST as $key =>  $element) {
            $variables.= $key . "='" . $element . "', " ;
        }  

        $variables = substr($variables, 0, -2);
        $sql = "UPDATE {$table} SET {$variables} WHERE id = '{$id}'";
        $query = $this->pdo->prepare($sql);
        $query->execute();

    }

    public function getOne($table, $id, $model = "")
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table} WHERE id='{$id}'");
        $query->execute();
        if($model) {
            return $query->fetch(\PDO::FETCH_CLASS, $model);
        } else {
            return $query->fetch(\PDO::FETCH_OBJ);
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
        $query = $this->pdo->prepare("DELETE FROM {$table} WHERE id='{$id}'");
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