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
 ~ If not, see <http://www.gnu.org/licenses/> 2018.05.31                                                                                                                                                                                                    ~
 ~                                                                                                                                                                                                                                                          ~
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/

    namespace CR\Objects;

    /**
     * Tournament Object
     * @method string           getTag()
     * @method string           getType() "passwordProtected", "open"
     * @method string           getStatus() "inPreparation", "inProgress", "ended"
     * @method string|null      getCreatorTag() (Optional)
     * @method Player|null      getCreator() (Optional)
     * @method string           getName()
     * @method string|null      getDescription() (Optional)
     * @method int|null         getCapacity() (Optional)
     * @method int              getPlayerCount()
     * @method int              getMaxCapacity()
     * @method int              getPreparationDuration()
     * @method int              getDuration()
     * @method int              getCreateTime()
     * @method int|null         getStartTime()
     * @method int|null         getEndTime()
     * @method Player[]|null    getMembers() (Optional)
     */
    class Tournament extends BaseObject
    {
        /**
         * {@inheritdoc}
         */
        public function primaryKey ()
        {
            return "";
        }

        /**
         * {@inheritdoc}
         */
        public function relations ()
        {
            return [
                "creator" => Player::class,
                "members" => Player::class,
            ];
        }
    }

