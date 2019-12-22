<?php
    
    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 ~                                                                                                                                                                                                                                                          ~
 ~ Copyright (c) 2018 by firegore (https://firegore.es) (git:firegore2)                                                                                                                                                                                     ~
 ~ This file is part of clash-royale-php.                                                                                                                                                                                                                   ~
 ~                                                                                                                                                                                                                                                          ~
 ~ clash-royale-php is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 ~ clash-royale-php is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.                                                                  ~
 ~ See the GNU Affero General Public License for more details.                                                                                                                                                                                              ~
 ~ You should have received a copy of the GNU General Public License along with clash-royale-php.                                                                                                                                                           ~
 ~ If not, see <http://www.gnu.org/licenses/> 2018.06.13                                                                                                                                                                                                    ~
 ~                                                                                                                                                                                                                                                          ~
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
    
    namespace CR\Objects\ConstantsObjects;
    
    use CR\Objects\BaseObject;

    /**
     * Class Rarity.
     *
     * @method string getName()
     * @method int    getLevelCount()
     * @method int    getRelativeLevel()
     * @method int    getMirrorRelativeLevel()
     * @method int    getCloneRelativeLevel()
     * @method int    getDonateCapacity()
     * @method int    getSortCapacity()
     * @method int    getDonateReward()
     * @method int    getDonateXp()
     * @method int    getGoldConversionValue()
     * @method int    getChanceWeight()
     * @method int    getBalanceMultiplier()
     * @method array  getUpgradeExp()
     * @method array  getUpgradeMaterialCount()
     * @method array  getUpgradeCost()
     * @method array  getPowerLevelMultiplier()
     * @method int    getRefundGems()
     */
    class Rarity extends BaseObject
    {
        /**
         * {@inheritdoc}
         */
        public function primaryKey ()
        {
            return '';
        }
        
        /**
         * {@inheritdoc}
         */
        public function relations ()
        {
            return [];
        }
    }
