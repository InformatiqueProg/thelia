<?php

/*************************************************************************************/
/*                                                                                   */
/*      Thelia	                                                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*	    email : info@thelia.net                                                      */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      This program is free software; you can redistribute it and/or modify         */
/*      it under the terms of the GNU General Public License as published by         */
/*      the Free Software Foundation; either version 3 of the License                */
/*                                                                                   */
/*      This program is distributed in the hope that it will be useful,              */
/*      but WITHOUT ANY WARRANTY; without even the implied warranty of               */
/*      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the                */
/*      GNU General Public License for more details.                                 */
/*                                                                                   */
/*      You should have received a copy of the GNU General Public License            */
/*	    along with this program. If not, see <http://www.gnu.org/licenses/>.         */
/*                                                                                   */
/*************************************************************************************/

namespace Thelia\Module;

use Symfony\Component\DependencyInjection\ContainerAware;

abstract class BaseModule extends ContainerAware
{
    const CLASSIC_MODULE_TYPE = 1;
    const DELIVERY_MODULE_TYPE = 2;
    const PAYMENT_MODULE_TYPE = 3;

    public function __construct()
    {

    }

    protected function activate()
    {

    }

    public function hasContainer()
    {
        return null === $this->container;
    }

    public function getContainer()
    {
        if ($this->hasContainer() === false) {
            throw new \RuntimeException("Sorry, container his not available in this context");
        }

        return $this->container;
    }

    abstract public function install();
    abstract public function destroy();

}
