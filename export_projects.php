<?php

// define filename
$filename = 'Projects.csv';

// define array of files to ignore when scanning directory
$notUploads = array();
$notUploads = [".", "..",".DS_Store"];

// Search upload directory for uploads and sort descending
$uploads = scandir('uploads', SCANDIR_SORT_DESCENDING);
// Exclude bad/not files from upload
$uploadedFiles = array();
$uploadedFiles = array_diff($uploads, $notUploads);

// define latest upload
$latestUploadName = $uploadedFiles[0];

// define latest file
$latestFileDirectory = "uploads/";
$latestFile = $latestFileDirectory . $latestUploadName;

// define example file
$exampleFileDirectory = "example_files/";
$exampleFile = $exampleFileDirectory . 'IXN_Test_Example.csv';

// if latest upload does not exist, download example file
if (!is_file($latestFile)) {

    // prepare headers
    header('HTTP/1.1 200 OK');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Expires: 0');
    header('Content-Type: text/csv; charset=utf-8');
    header("Content-Disposition: attachment; filename=$filename");
    header('Content-Length: ' . filesize($exampleFile));
    // output file and exit
    ob_clean();
    flush();
    readfile($exampleFile);
    exit;

} else { // if latest file exists, download that instead

    // prepare headers
    header('HTTP/1.1 200 OK');
    header('Pragma: public');
    header('Expires: 0');
    header('Content-Type: text/csv; charset=utf-8');
    header("Content-Disposition: attachment; filename=$filename");
    header('Content-Length: ' . filesize($latestFile));
    // output file and exit
    ob_clean();
    flush();
    readfile($latestFile);
    exit;

}

?>
