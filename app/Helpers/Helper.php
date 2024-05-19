<?php
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

if (!function_exists("sizeList")) {
    function sizeList()
    {
        return  [
            's' => 'Small',
            'm' => 'Medium',
            'l' => 'Large',
            'xl' => 'Extra Large',
        ];
    }
}

if (!function_exists("colorList")) {
    function colorList()
    {
        return  [
            'red' => 'Red',
            'green' => 'Green',
            'blue' => 'Blue',
            'yellow' => 'Yellow',
        ];
    }
}

if (!function_exists("fileUpload")) {
    function fileUpload($file, $folderName)
    {
        $extension = $file->getClientOriginalExtension();
        $file_name = rand(000,999).time() . '.' . $extension;
        $file_name = str_replace(' ', '_', $file_name);
        Storage::disk('local')
            ->put('uploads/' . $folderName . '/' . $file_name, file_get_contents($file->getRealPath()));

        return 'uploads/' . $folderName.'/'.$file_name;
    }
}
