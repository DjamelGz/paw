<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/etudiant.css">
    <title>Student Space</title>
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <h1>Welcome, [Student's Name]</h1>
        <a href="logout.php" class="logout">Log Out</a>
    </div>

    <!-- Container Section -->
    <div class="container">
        <h2>Your Document Requests</h2>

        <!-- Table for Viewing Requests -->
        <table>
            <thead>
                <tr>
                    <th>File Name</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Submission Date</th>
                </tr>
            </thead>
         <!--SSSSSSS   <tbody>
                
                <?php
                // Assuming you have a variable $student_requests which contains requests data from the database.
                foreach ($student_requests as $request) {
                    echo "<tr>
                            <td>{$request['filename']}</td>
                            <td>{$request['filetype']}</td>
                            <td>{$request['status']}</td>
                            <td>{$request['date_de_Depot']}</td>
                          </tr>";
                }
                ?>
                
                <?php if (empty($student_requests)): ?>
                    <tr>
                        <td colspan="4">No requests found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>-->
        </table>

        <!-- Form for Submitting a New Request -->
        <div class="new-request">
            <h2>Nouvelle Demande</h2>
            <form>
                <label for="request-type">Type de Demande</label>
                <select id="request-type">
                    <option value="certificate">Certificat de scolarité</option>
                    <option value="transcript">Relevé de notes</option>
                    <option value="attestation">Attestation de conduite</option>
                </select>

                <label for="reason">Motif de la Demande</label>
                <textarea id="reason" placeholder="Expliquez pourquoi vous faites cette demande..."></textarea>
                <button type="submit">Soumettre la Demande</button>
            </form>
        </div>
        
    </div>
</body>
</html>