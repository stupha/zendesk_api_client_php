<?php

namespace Zendesk\API\Resources;

/**
 * The Automations class exposes methods seen at http://developer.zendesk.com/documentation/rest_api/automations.html
 *
 * @package Zendesk\API
 */
class Automations extends ResourceAbstract
{

    const OBJ_NAME = 'automation';
    const OBJ_NAME_PLURAL = 'automations';


    protected function setUpRoutes()
    {
        parent::setUpRoutes();

        $this->setRoute('findActive', "{$this->resourceName}/active.json");
    }

    /**
     * List all active Automations
     *
     * @param array $params
     *
     * @throws \Exception
     * @return mixed
     */
    public function findActive(array $params = [])
    {
        return $this->client->get($this->getRoute(__FUNCTION__), $params);
    }
}
