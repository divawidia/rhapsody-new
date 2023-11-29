<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function storeFile(array $data, string $arrayKey, string $storePath, string $defaultImage){
        if (array_key_exists($arrayKey, $data)){
            $data[$arrayKey] = $data[$arrayKey]->store($storePath, 'public');
        }else{
            $data[$arrayKey] = $defaultImage;
        }
        return  $data[$arrayKey];
    }

    public function updateFile(array $data, string $arrayKey, string $storePath, $previousImage){
        if (array_key_exists($arrayKey, $data)){
            if ($previousImage != null){
                if ($previousImage != 'images/undefined-user.png' || $previousImage != 'images/video-preview.png'){
                    $this->deleteFile($previousImage);
                }
            }
            $data[$arrayKey] = $data[$arrayKey]->store($storePath, 'public');
        }else{
            $data[$arrayKey] = $previousImage;
        }
        return  $data[$arrayKey];
    }
    public function deleteFile($image): void
    {
        if ($image != null && Storage::disk('public')->exists($image) && $image != 'images/undefined-user.png' && $image != 'images/video-preview.png'){
            Storage::disk('public')->delete($image);
        }
    }
    public function buttonTooltips($route, $btnColor, $tooltipsTitle, $btnIcon)
    {
        return '<a class="btn btn-sm '.$btnColor.'" href="' . $route . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="'.$tooltipsTitle.'">
                    <i class="bx '.$btnIcon.'"></i>
                </a>';
    }
    public function formButtonTooltips($route, $btnColor, $tooltipsTitle, $btnIcon, $method)
    {
        return '<form action="' . $route . '" method="POST" >
                    ' . method_field($method) . csrf_field() . '
                    <button type="submit" class="btn btn-sm '.$btnColor.'" data-bs-toggle="tooltip" data-bs-placement="bottom" title="'.$tooltipsTitle.'">
                        <i class="bx '.$btnIcon.'"></i>
                    </button>
                </form>';
    }
    public function convertDateTime($timestamp)
    {
        $date = strtotime($timestamp);
        return date('l, M d, Y - h:i A',$date);
    }
}
