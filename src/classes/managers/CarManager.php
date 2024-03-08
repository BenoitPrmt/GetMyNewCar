<?php

class CarManager extends Manager
{

    public function __construct(PDO $database_connection, string $table)
    {
        parent::__construct($database_connection, $table);
    }

    public function createOne(object $data): int
    {
        if ($data instanceof Car) {
            $query = "INSERT INTO cars (brand, model, price, kilometers, date, image, user_id, is_sold) VALUES (:brand, :model, :price, :kilometers, :date, :image, :user_id, :is_sold)";
            $response = $this->bdd->prepare($query);
            $response->execute([
                'brand' => $data->getBrand(),
                'model' => $data->getModel(),
                'price' => $data->getPrice(),
                'kilometers' => $data->getKilometers(),
                'date' => $data->getYear(),
                'image' => $data->getImage(),
                'user_id' => $data->getUserId(),
                'is_sold' => (int)$data->getIsSold()
            ]);
        }

        $data->setId($this->bdd->lastInsertId());
        return $this->bdd->lastInsertId();
    }

    public function editOne(object $data): void
    {
        $query = "UPDATE car SET brand = :brand, model = :model, price = :price, kilometers = :kilometers, date = :date, image = :image, user_id = :userId, is_sold = :isSold WHERE id = :id";
        $response = $this->bdd->prepare($query);
        $response->execute([
            'brand' => $data->getBrand(),
            'model' => $data->getModel(),
            'price' => $data->getPrice(),
            'kilometers' => $data->getKilometers(),
            'date' => $data->getDate(),
            'image' => $data->getImage(),
            'userId' => $data->getUserId(),
            'isSold' => (int)$data->getIsSold(),
            'id' => $data->getId(),
        ]);
    }
}