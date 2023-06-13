<?php 
class Module2Repository
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function insertForm($office, $venue, $date, $capacity, $vacancy)
    {
        $stmt = $this->db->prepare("INSERT INTO marriagecourse (office, Venue, Date, Capacity, Vacancy) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssii", $office, $venue, $date, $capacity, $vacancy);
        
        if ($stmt->execute()) {
            echo "Form data inserted successfully!";
        } else {
            echo "Error inserting form data: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>