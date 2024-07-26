<?php
namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
class EstacionCollection extends ResourceCollection{
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}