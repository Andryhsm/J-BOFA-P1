<?php
namespace App\Service;

use Carbon\Carbon;

Class UploadService
{
    const IMAGE_UPLOAD_PATH = 'upload';
    const THUMB_PATH = 'thumb';
    public function __construct()
    {
    }
    public function upload($file,$path, $append_timestamp = true)
    {
        //dd($file);
//         $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
// 		if($append_timestamp){
// 			$image_name = $timestamp . '-' . $file->getClientOriginalName();
// 		} else {
// 			$image_name = $file->getClientOriginalName();
// 		}
// 		$image_name = str_replace([' ', ':'], '-', $image_name);
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 40; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $parts = explode('.', $file->getClientOriginalName());
        $image_name = $randomString.'.'.$parts[sizeof($parts) - 1];
        
        $file->move(public_path() .'/'.$path , $image_name);
        return $image_name;
    }
}