<?php

namespace AppBundle\Tank\RPC;

use Gos\Bundle\WebSocketBundle\Router\WampRequest;
use Gos\Bundle\WebSocketBundle\RPC\RpcInterface;
use Ratchet\ConnectionInterface;

/**
 * Created by PhpStorm.
 * User: migueltardugno
 * Date: 29/04/2017
 * Time: 12:35
 */
class TestCommandRPC implements RpcInterface
{
    const STOP_TANK = 1020;
    const FORDWARD_ENGINE = 1;
    const BACK_ENGINE    = 2;
    const LEFT_ENGINE = 1;
    const RIGHT_ENGINE = 2;

    /**
     * Adds the params together
     *
     * Note: $conn isnt used here, but contains the connection of the person making this request.
     *
     * @param ConnectionInterface $connection
     * @param WampRequest $request
     * @param array $params
     * @return int
     */
    public function addFunc(ConnectionInterface $connection, WampRequest $request, $params)
    {
        return array("result" => array_sum($params));
    }

    /**
     * Name of RPC, use for pubsub router (see step3)
     *
     * @return string
     */
    public function getName ()
    {
        return 'acme.rpc';
    }


}