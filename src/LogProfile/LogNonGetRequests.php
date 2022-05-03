<?php

namespace whereof\think\HttpLogger\LogProfile;

use think\Request;
use whereof\think\HttpLogger\LogProfile;

class LogNonGetRequests  implements LogProfile
{
    /**
     * @param Request $request
     * @return bool
     */
    public function shouldLogRequest(Request $request): bool
    {
        return in_array(strtolower($request->method()), ['post', 'put', 'patch', 'delete']);
    }
}