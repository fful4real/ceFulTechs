<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Fswdvxl' shared service.

return $this->privates['.service_locator.Fswdvxl'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('accountRepo' => function (): \App\Repository\CeAccountRepository {
    return ($this->privates['App\Repository\CeAccountRepository'] ?? $this->load('getCeAccountRepositoryService.php'));
}, 'manager' => function () {
    return ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php'));
}, 'order' => function (): \App\Entity\Ceorder {
    return ($this->privates['.errored..service_locator.Fswdvxl.App\Entity\Ceorder'] ?? $this->load('getCeorderService.php'));
}, 'statusRepo' => function (): \App\Repository\CeStatusRepository {
    return ($this->privates['App\Repository\CeStatusRepository'] ?? $this->load('getCeStatusRepositoryService.php'));
}));