<?php

/*
 * This file is part of Icicle, a library for writing asynchronous code in PHP using coroutines built with awaitables.
 *
 * @copyright 2014-2015 Aaron Piotrowski. All rights reserved.
 * @license MIT See the LICENSE file that was distributed with this source code for more information.
 */

namespace Icicle\Loop\Watcher;

interface Watcher
{
    /**
     * An unreferenced event will allow the event loop to exit if no other watchers are pending.
     */
    public function unreference();

    /**
     * Adds a reference to the event, causing the event loop to continue to run as long as the watcher is still pending.
     */
    public function reference();
}
