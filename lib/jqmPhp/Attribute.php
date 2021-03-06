<?php

declare(strict_types=1);

/*
 *  jqmPhp - HTML code generator for jQuery Mobile Framework
 *  Copyright (C) 2011  Bruno Maia
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace jqmPhp;

/**
 * This class represents an attribute of an HTML tag.
 *
 * @author Bruno Maia <brunoleaomaia@gmail.com>
 * @copyright Copyright (c) 2011, Bruno Maia
 * @license http://www.gnu.org/licenses/gpl.html GNU Public License
 * @package jqmPhp
 * @version 0.03
 * @since 0.01
 * @link http://www.jqmphp.com/ jqmPhp Website
 * @link http://code.google.com/p/jqmphp/ jqmPhp Project Website
 * @link http://www.jquerymobile.com jQuery Mobile Website
 */
class Attribute
{
    private $_name;
    private $_value;
    private $_allowBlank;

    /**
     *
     * @param string $name
     * @param string $value
     * @param boolean $allowBlank
     */
    public function __construct($name, $value = '', $allowBlank = false)
    {
        $this->_name = $name;
        $this->_value = $value;
        $this->_allowBlank = $allowBlank;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $string = '';
        if ($this->value() != '' || ($this->value() == '' && $this->allowBlank())) {
            $string = $this->name() . '="' . $this->value() . '"';
        }

        return $string;
    }

    /**
     * Gets and sets the attribute value property.
     * @param string $value
     * @return string|self
     */
    public function value()
    {
        if (func_num_args() === 0) {
            return $this->_value;
        }
        $this->_value = func_get_arg(0);

        return $this;
    }

    /**
     * Gets and sets the allowBlank property.
     * If the allowBlank is false and the value property is empty no code is generated.
     * @param boolean $allow
     * @return bool|self
     */
    public function allowBlank()
    {
        if (func_num_args() === 0) {
            return $this->_allowBlank;
        }
        $this->_allowBlank = func_get_arg(0);

        return $this;
    }

    /**
     * Gets and sets the attribute name property.
     *
     * @param string $value
     * @return string|Attribute
     */
    public function name()
    {
        if (func_num_args() === 0) {
            return $this->_name;
        }

        $this->_name = func_get_arg(0);

        return $this;
    }
}
