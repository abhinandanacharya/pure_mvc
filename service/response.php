<?php

class Response {
    public function success_200($data = [],$message = ''){
        $response = array();
        $response['status'] = 200;
        $response['message'] = ($message != '')? $message : "End with success response. OK";
        $response['data'] = $data;
        return $response;
    }
    public function failure_400($data = [],$message = ''){
        $response = array();
        $response['status'] = 400;
        $response['message'] = ($message != '')? $message : "End with error response";
        $response['data'] = $data;
        return $response;
    }
    public function failure_401($data = [],$message = ''){
        $response = array();
        $response['status'] = 401;
        $response['message'] = ($message != '')? $message : "End with error response";
        $response['data'] = $data;
        return $response;
    }
    public function failure_404($data = [],$message = ''){
        $response = array();
        $response['status'] = 404;
        $response['message'] = ($message != '')? $message : "Not found 404";
        $response['data'] = $data;
        return $response;
    }
    public function failure_500($data = [],$message = ''){
        $response = array();
        $response['status'] = 500;
        $response['message'] = ($message != '')? $message : "Internal server error";
        $response['data'] = $data;
        return $response;
    }
    public function failure_304($data = [],$message = ''){
        $response = array();
        $response['status'] = 304;
        $response['message'] = ($message != '')? $message : "End with warning response";
        $response['data'] = $data;
        return $response;
    }
    public function failure_422($data = [],$message = ''){
        $response = array();
        $response['status'] = 422;
        $response['message'] = ($message != '')? $message : "Unauthorized 422";
        $response['data'] = $data;
        return $response;
    }
}


?>