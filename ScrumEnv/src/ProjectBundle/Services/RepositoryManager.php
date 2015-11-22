<?php
namespace ProjectBundle\Services;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lsw\ApiCallerBundle\Call\HttpGetJson;
use Lsw\ApiCallerBundle\Helper\Curl;
use Lsw\ApiCallerBundle\Caller\LoggingApiCaller;

class RepositoryManager extends Controller
{ 
    public function getCommitsAction($owner, $repo)
    {
        $url = 'https://api.github.com/repos/'.$owner.'/'.$repo.'/commits';
        $parameters = array();
        $log =  new LoggingApiCaller(array());
        $get = new HttpGetJson($url, $parameters);
        $output = $log->call($get);
        return $output;
    }
    public function commitsByTaskAction($taskId)
    {
        return "";
    }
}
