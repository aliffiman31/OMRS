<?php

class Module2Repository
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function insertForm($office, $venue, $date, $capacity, $vacancy,$speakerName,$MCcertificate)
{
    $stmt = $this->db->prepare("INSERT INTO marriagecourse (office, Venue, Date, Capacity, Vacancy, SpeakerName, MCCertificate) VALUES (:office, :venue, :date, :capacity, :vacancy, :speakerName, :MCcertificate)");
    $stmt->bindParam(':office', $office);
    $stmt->bindParam(':venue', $venue);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':capacity', $capacity);
    $stmt->bindParam(':vacancy', $vacancy);
    $stmt->bindParam(':speakerName', $speakerName);
    $stmt->bindParam(':MCcertificate', $MCcertificate);

    if ($stmt->execute()) {
        echo "Form data inserted successfully!";
    } else {
        echo "Error inserting form data: " . $stmt->errorInfo()[2];
    }

    $stmt->closeCursor();
}
public function getMarriageCourseData($office = null)
    {
        if ($office) {
            // Filter the data based on the selected office
            $stmt = $this->db->prepare("SELECT * FROM marriagecourse WHERE office = ?");
            $stmt->execute([$office]);
        } else {
            // Retrieve all the data
            $stmt = $this->db->query("SELECT * FROM marriagecourse");
        }

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
