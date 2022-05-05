<?php

namespace App;
use App\Models\Language;
use Carbon\Carbon;

class Helper
{
    private static $folder = 'client/images/';

    public static function uploadFile($oldImg, $image, $basePath)
    {
        $fileName = null;

        if (!is_null($oldImg)) {
            $oldFilePath = public_path(self::$folder . $basePath . '/' . $oldImg);
            $fileName = $oldImg;
        }

        if (!is_null($image)) {
            $time = Carbon::now()->format('Y-m-d-h-i-s');
            $fileName = $time . uniqid() . '.' . pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
            $image->move(self::$folder . $basePath, $fileName);

            if (isset($oldFilePath)) {
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }
        }

        return $fileName;
    }

    public static function removeFile($image, $basePath)
    {
        $oldFilePath = public_path(self::$folder . $basePath . '/' . $image);

        if (isset($oldFilePath)) {
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }
    }
}
