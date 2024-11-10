<?php

namespace App\Controllers;

class FilemanagerController extends BaseController {
    public static function list($folder = '') {
        $directoryPath = BASE_DIR . '/public/images/' . $folder;

        if (is_dir($directoryPath)) {
            $allItems = scandir($directoryPath);
            
            $directories = [];
            $files = [];
    
            foreach ($allItems as $item) {
                if ($item === '.' || $item === '..') {
                    continue;
                }
                
                if (is_dir($directoryPath . '/' . $item)) {
                    $directories[] = $item;
                } else {
                    $files[] = $item;
                }
            }
    
            // Merge directories and files with directories first
            $list = array_merge($directories, $files);
        } else {
            $list = [];
        }
    
        $isSubfolder = !empty($folder);
    
        self::loadview('filemanager/list', [
            'list' => $list,
            'isSubfolder' => $isSubfolder,   
            'folder' => $folder              
        ]);
    }

    public static function delete() {
        // Get the file path from POST data
        $filePath = $_POST['filePath'] ?? '';
    
        // Construct the full path to the file
        $fileToDelete = BASE_DIR . '/public/images/' . $filePath;
    
        if (file_exists($fileToDelete) && is_file($fileToDelete)) {
            unlink($fileToDelete); 
        }
    
        header("Location: /filemanager/" . urlencode(dirname($filePath)));
        exit;
    }
     
    
}