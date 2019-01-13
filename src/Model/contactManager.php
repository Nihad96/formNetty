<?php
namespace Model;
use Model\Contact;



class contactManager extends AbstractManager {

    const TABLE = 'index';

    public function __construct($pdo) {
        parent::__construct(self::TABLE, $pdo);
    }


    public function insert(Contact $contact): int {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (nom, prenom, tel, email, ville) VALUES (:lastname, :firstname, :number, :email, :town)");
        $statement->bindValue('lastname', $contact->getNom(), \PDO::PARAM_STR);
        $statement->bindValue('firstname', $contact->getPrenom(), \PDO::PARAM_STR);
        $statement->bindValue('number', $contact->getTel(), \PDO::PARAM_STR);
        $statement->bindValue('email', $contact->getEmail(), \PDO::PARAM_STR);
        $statement->bindValue('town', $contact->getVille(), \PDO::PARAM_STR);

        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }


    public function delete($contact)
    {
        $statement = $this->pdo->prepare("DELETE FROM " . self::TABLE . " WHERE id = :id");
        $statement ->bindValue('id', $contact->getId(), \PDO::PARAM_INT);
        return $statement->execute();
    }

}

?>