<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.admin.log.repository' shared service.

return $this->services['prestashop.core.admin.log.repository'] = new \PrestaShopBundle\Entity\Repository\LogRepository(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'nmww_', ${($_ = isset($this->services['prestashop.core.query.doctrine_search_criteria_applicator']) ? $this->services['prestashop.core.query.doctrine_search_criteria_applicator'] : ($this->services['prestashop.core.query.doctrine_search_criteria_applicator'] = new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator())) && false ?: '_'});
