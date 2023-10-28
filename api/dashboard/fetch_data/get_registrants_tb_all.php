


<?php
// Include database connection
require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');

$columns = array(
    'mpi.plp_id',
    'mpi.last_name',
    'mpi.middle_name',
    'mpi.first_name',
    'mpi.gender',
    'mpi.dob',
    'mpi.nib_number',
    'mpi.constituency',
    'mpi.affiliated_branch',
    'mpi.membership_type',
    'mpi.priority',
    'mpi.date',
    'maci.email_address',
    'maci.mobile_number',
    'maci.telephone_number',
    'maci.street_address',
    'maci.house_number',
    'maci.emergency_contact_name',
    'maci.emergency_contact_relationship',
    'maci.emergency_contact_telephone_number'
);

// SQL query
$sql = "SELECT " . implode(", ", $columns) . "
        FROM members_profile_information mpi
        JOIN members_address_contact_information maci ON mpi.plp_id = maci.plp_id
        JOIN system_queues sq ON mpi.plp_id = sq.id
        WHERE sq.duplicate = 'O'";

// Execute the SQL query and fetch data
// You will need to replace these lines with your database connection code
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Return the data as JSON
echo json_encode($data);
?>