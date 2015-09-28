<?php
/**
 * Created by PhpStorm.
 * User: vasilepop
 * Date: 8/10/15
 * Time: 5:35 PM
 */

function renderImage($imageResource, $imageType)
{
    switch ($imageType) {
        case 'jpg':
        case 'jpeg':
            header('Content-type: image/jpeg');
            imagejpeg($imageResource);
            break;
        case 'png':
            header('Content-type: image/png');
            imagepng($imageResource);
            break;
        default:
            throw new DomainException('Unknown image type: ' . $imageType);
            break;
    }
    imagedestroy($imageResource);
}

renderImage("me.jpg","jpg");
renderImage("me","png");
renderImage("me","ico");