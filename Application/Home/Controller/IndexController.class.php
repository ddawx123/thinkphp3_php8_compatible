<?php
namespace Home\Controller;

class IndexController extends BaseController
{
    public function index()
    {
        $this->api_return([
            'current_php_runtime' => PHP_VERSION,
            'using_platform' => PHP_OS
        ], 'Self-test is fine.');
    }
}