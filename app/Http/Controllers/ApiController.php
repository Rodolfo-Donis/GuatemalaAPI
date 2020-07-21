<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllPromotions(){

        //get dummy data
        
        $arr = array(
            array(
                "id" => "1",
                "title" => "promocion1",
                "price" => "100",
                "address" => "guatemala city",
                "latitude" => "14.6349",
                "longitude" => "90.5069",
                "created_at" => "monday",
                "updated_at" => "monday"
            ),
            array(
                "id" => "2",
                "title" => "promocion2",
                "price" => "200",
                "address" => "guatemala city",
                "latitude" => "14.6349",
                "longitude" => "90.5069",
                "created_at" => "monday",
                "updated_at" => "monday"
            ),
            array(
                "id" => "3",
                "title" => "promocion3",
                "price" => "300",
                "address" => "guatemala city",
                "latitude" => "14.6349",
                "longitude" => "90.5069",
                "created_at" => "monday",
                "updated_at" => "monday"
            ),
            array(
                "id" => "4",
                "title" => "promocion4",
                "price" => "400",
                "address" => "guatemala city",
                "latitude" => "14.6349",
                "longitude" => "90.5069",
                "created_at" => "monday",
                "updated_at" => "monday"
            ),
            array(
                "id" => "5",
                "title" => "promocion5",
                "price" => "500",
                "address" => "guatemala city",
                "latitude" => "14.6349",
                "longitude" => "90.5069",
                "created_at" => "monday",
                "updated_at" => "monday"
            ),
            
        );
        
        return response($arr,200);
    }
    public function getPromotionData($_id)
    {
               
        $arr = array(
            array(
                "id" => "1",
                "title" => "promocion1",
                "price" => "100",
                "address" => "guatemala city",
                "latitude" => "14.6349",
                "longitude" => "90.5069",
                "created_at" => "monday",
                "updated_at" => "monday"
            ),
            array(
                "id" => "2",
                "title" => "promocion2",
                "price" => "200",
                "address" => "guatemala city",
                "latitude" => "14.6349",
                "longitude" => "90.5069",
                "created_at" => "monday",
                "updated_at" => "monday"
            ),
            array(
                "id" => "3",
                "title" => "promocion3",
                "price" => "300",
                "address" => "guatemala city",
                "latitude" => "14.6349",
                "longitude" => "90.5069",
                "created_at" => "monday",
                "updated_at" => "monday"
            ),
            array(
                "id" => "4",
                "title" => "promocion4",
                "price" => "400",
                "address" => "guatemala city",
                "latitude" => "14.6349",
                "longitude" => "90.5069",
                "created_at" => "monday",
                "updated_at" => "monday"
            ),
            array(
                "id" => "5",
                "title" => "promocion5",
                "price" => "500",
                "address" => "guatemala city",
                "latitude" => "14.6349",
                "longitude" => "90.5069",
                "created_at" => "monday",
                "updated_at" => "monday"
            ),
            
        );

        //search  Id in dummy data 
        $itemFound=null;
        foreach($arr as $element =>$id)
        {
            if($_id == $id)
            {
                $itemFound = $element ;
            break;
            }
        }
            
        if(!is_null($itemFound))
        {   
            return response($itemFound,200);
        }else{
            return response()->json([
                "msg" =>"Promotion not found"
            ],404);
        }

    }
}
