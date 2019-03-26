<?php
/**
 * This file is part of Phiremock.
 *
 * Phiremock is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Phiremock is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Phiremock.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Mcustiel\Phiremock\Client\Utils;

use Mcustiel\Phiremock\Domain\Options\ScenarioState;

abstract class ResponseBuilder
{
    /** @var ScenarioState */
    private $scenarioState;

    /**
     * @param string $scenarioState
     *
     * @return \Mcustiel\Phiremock\Client\Utils\ResponseBuilder
     */
    public function andSetScenarioStateTo($scenarioState)
    {
        $this->scenarioState = new ScenarioState($scenarioState);

        return $this;
    }

    /** @return \Mcustiel\Phiremock\Domain\Options\ScenarioState */
    protected function getScenarioState()
    {
        return $this->scenarioState;
    }
}
