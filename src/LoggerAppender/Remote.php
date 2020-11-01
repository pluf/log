<?php
/*
 * This file is part of Pluf Framework, a simple PHP Application Framework.
 * Copyright (C) 2010-2020 Phoinex Scholars Co. (http://dpq.co.ir)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace Pluf\LoggerAppender;

use Pluf;

/**
 * Posts loggs to remote server
 *
 * Fire a POST request agains a server with the payload being the
 * content of the log. The log is serialized as JSON. It is always
 * containing the current stack, so an array of log "lines".
 *
 * The configuration keys are:
 *
 * - 'log_remote_server' (localhost)
 * - 'log_remote_path' (/)
 * - 'log_remote_port' (8000)
 * - 'log_remote_headers' (array())
 */
class Remote implements \Pluf\LoggerAppender
{

    /**
     * Flush the stack to the remote server.
     *
     * @param $stack Array
     */
    public function write($message): void
    {
        $out = 'POST ' . Pluf::f('log_remote_path', '/') . ' HTTP/1.1' . "\r\n";
        $out .= 'Host: ' . Pluf::f('log_remote_server', 'localhost') . "\r\n";
        $out .= 'Host: localhost' . "\r\n";
        $out .= 'Content-Length: ' . strlen($message) . "\r\n";
        foreach (Pluf::f('log_remote_headers', array()) as $key => $val) {
            $out .= $key . ': ' . $val . "\r\n";
        }
        $out .= 'Connection: Close' . "\r\n\r\n";
        $out .= $message;
        $errno = 0;
        $errstr = '';
        $fp = fsockopen(Pluf::f('log_remote_server', 'localhost'), Pluf::f('log_remote_port', 8000), $errno, $errstr, 5);
        fwrite($fp, $out);
        fclose($fp);
    }
}
