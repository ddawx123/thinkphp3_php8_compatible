<?php
/**
 * Base Controller
 * @package DingStudio/Base
 * @subpackage Base/Controller
 * @author David Ding
 * @version 1.0
 */
namespace Home\Controller;

use Think\Controller;

class BaseController extends Controller\RestController
{
    /**
     * Hit non-defined action & controller response
     * @return void
     */
    public function _empty()
    {
        $this->api_return(null, '404 Not Found. (Requested action was not declared by developer)', 404);
    }

    /**
     * Standard Unified API Response Output
     * @param array|null $data
     * @param string $msg
     * @param int $code
     * @return void
     */
    public function api_return(array $data = null, string $msg = 'Undefined message', int $code = 200)
    {
        $this->ajaxReturn([
            'code' => $code,
            'msg' => $msg,
            'data' => $data
        ], 'json');
    }
}