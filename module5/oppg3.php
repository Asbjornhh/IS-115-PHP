
Eksempel 1: Navngivning av variabler, konstanter og funksjoner
<?php
// Riktig bruk av camelCase for variabelnavn
$studentName = "Ola Nordmann";

// Riktig bruk av understrek for variabelnavn
$student_age = 25;

// Definere en konstant med store bokstaver
define("MAX_STUDENTS", 100);

// En funksjon som bruker camelCase
function calculateAverageGrade($grades) {
    $total = array_sum($grades);
    return $total / count($grades);
}
?>

Eksempel 2: Navngivning av klasser og intendering
<?php
// Riktig navngivning av klasse
class StudentProfile {
    private $name;
    private $age;

    // Contructure med riktig intendering
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Metode for å hente studentens navn
    public function getName() {
        return $this->name;
    }
}
?>

Eksempel 3: Kommentarer, bruk av klammeparentes og linjelengde

<?php
// Henter studentdata
function fetchStudentData($studentId){
    // Sjekker ID
    if ($studentId <= 0) {
        // Feilmelding
        return "Ugyldig ID";
    }

    // Eksempel på en lang linje som bør brytes opp for lesbarhet
    // $studentData = $database->query("SELECT * FROM students WHERE student_id = $studentId AND status = 'active' AND registration_date > '2022-01-01'");

    // Bryter opp den lange linjen
    $query = "SELECT * FROM students WHERE student_id = $studentId";
    $query .= " AND status = 'active' AND registration_date > '2022-01-01'";
    $studentData = $database->query($query);

    return $studentData;
}
?>
