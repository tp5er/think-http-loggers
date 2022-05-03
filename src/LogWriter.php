<?php

namespace whereof\think\HttpLogger;

use think\Request;

interface LogWriter
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function logRequest(Request $request);
}