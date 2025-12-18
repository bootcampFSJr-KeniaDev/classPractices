<?php

require_once "../config/database.php";

class TaskModel{
    public int $id;
    public string $title;
    public string $description;
    public string $date;
    public string $status;
    public int $id_employee;

    public function __construct($title, $description, $id_employee){
        $this->title = $title;
        $this->description = $description;
        $this->date = date('Y-m-d');
        $this->status = 'Pendiente';
        $this->id_employee = $id_employee;
    }

    public static function all(){
        $pdo = Connection::getInstance()->getConnection();
        //$query = $pdo->prepare("SELECT * FROM tasks");
        $query = $pdo->query("SELECT tasks.id_task, tasks.title, tasks.description, tasks.status, employees.name as employee FROM tasks INNER JOIN employees ON tasks.id_employee = employees.id_employee");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function save(){
        $pdo = Connection::getInstance()->getConnection();
        $query = $pdo->prepare("INSERT INTO tasks(title, description, date, status, id_employee) VALUES (?,?,?,?,?)");

        $result = $query->execute(["$this->title","$this->description","$this->date",$this->status,"$this->id_employee"]);
        return $result;
    }

    public static function update($id_task, $title, $description){
        $pdo = Connection::getInstance()->getConnection();
        $query = $pdo->prepare("UPDATE tasks SET title = ?, description = ? WHERE id_task = ?");

        $result = $query->execute(["$title","$description",$id_task]);
        return $result;
    }

}