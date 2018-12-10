<?php
/**
 * Created by PhpStorm.
 * User: abdul
 * Date: 12/10/2018
 * Time: 2:02 PM
 */
namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


trait ExceptionTrait {
    public function apiException($request,$e) {
        if($e instanceof ModelNotFoundException){
            return response()->json([
                'errors' => 'Product Model not Found'
            ],Response::HTTP_NOT_FOUND);
            //Symfony\Component\HttpFoundation\Response;
        }
        if($e instanceof NotFoundHttpException){
            return response()->json([
                'errors' => 'Incorrect Route'
            ],Response::HTTP_NOT_FOUND);
            //Symfony\Component\HttpFoundation\Response;
        }
        return parent::render($request,$e);
    }
}
