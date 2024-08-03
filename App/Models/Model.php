<?php

namespace App\Models;

use mysqli;

class Model
{

    protected $db_host = DB_HOST;
    protected $db_user = DB_USER;
    protected $db_pass = DB_PASS;
    protected $db_name = DB_NAME;
    protected $connection;
    protected $query;
    protected $table;
    protected $sql;
    protected $querySaved;

    public function __construct()
    {
        $this->connection();
    }

    public function connection()
    {
        $this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

        if ($this->connection->connect_error){
            die('Error de conexion'. $this->connection->connect_error);
        }
    }

    public function query($sql, $data = [], $params = null)
    {

        if ($data){

            if ($params ==null){

                $params = str_repeat('s', count($data));
            }

            $stmt = $this->connection->prepare($sql);
            $stmt->bind_param($params, ...$data);
            $stmt->execute();

            $this->query = $stmt->get_result();
        } else {
            $this->query = $this->connection->query($sql);
        }

        return $this;
    }
    public function first()
    {
        return $this->query->fetch_assoc();
    }

    public function get()
    {
        return $this->query->fetch_all(MYSQLI_ASSOC);
    }

    public function all()
    {
        $sql = "SELECT * FROM {$this->table}";

        $this->query($sql)->get();
    }

    public function find($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = {$id}";

        return $this->query($sql)->first();
    }

    public function where($column, $operator, $value = null)
    {

        if ($value == null) {
            $value = $operator;
            $operator = '=';
        }

        $sql = "SELECT * FROM {$this->table} WHERE $column {$operator} ?";

        $this->querySaved = $sql;
        
        $this->query($sql, [$value]);

        return $this;
    }

    public function orderBy($column, $order = 'ASC')
    {
        $sql = "{$this->querySaved} ORDER BY {$column} {$order}";

        $this->query($sql);

        return $this;
    }

    public function create($data)
    {
        $columns = array_keys($data);
        $columns = "" . implode(", ", $columns) . "";

        $values = array_values($data);

        $sql = "INSERT INTO {$this->table} ({$columns}) VALUES (" . str_repeat('?, ', count($data) - 1) . "?)";

        $this->query($sql, $values);
    }

    public function update($id, $data)
    {
        foreach ($data as $key => $value) {
            $fields[] = "{$key} = '{$value}'";
        }

        $sql = "UPDATE {$this->table} SET " . implode(', ', $fields) . " WHERE id = {$id}";

        $this->query($sql);

        return $this->find($id);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = {$id}";

        $this->query($sql);
    }
}