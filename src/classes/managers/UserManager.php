<?php

class UserManager extends Manager {

    public function __construct(PDO $database_connection, string $table)
    {
        parent::__construct($database_connection, $table);
    }

    public function createOne(object $data): int
    {
        if($data instanceof User) {
            $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
            $response = $this->bdd->prepare($query);
            $response->execute([
                'username' => $data->getUsername(),
                'email' => $data->getEmail(),
                'password' => $data->getPassword(),
            ]);
        }
        $data->setId($this->bdd->lastInsertId());
        return $this->bdd->lastInsertId();
    }

    public function editOne(object $data): void
    {
        $query = "UPDATE users SET username = :username, email = :email, password = :password WHERE id = :id";
        $response = $this->bdd->prepare($query);
        $response->execute([
            'username' => $data->getUsername(),
            'email' => $data->getEmail(),
            'password' => $data->getPassword(),
            'id' => $data->getId(),
        ]);
    }
}