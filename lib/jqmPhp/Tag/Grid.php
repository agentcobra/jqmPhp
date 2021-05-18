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

namespace jqmPhp\Tag;

use jqmPhp\Collection;
use jqmPhp\Tag;

/**
 * This class represents the 'div' tag (class="ui-grid-a").
 * @class grid
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
class Grid extends Tag
{
    private $_grid;
    private $_a;
    private $_b;
    private $_c;
    private $_d;
    private $_e;

    /**
     *
     * @param string $id
     * @param string $type
     * @param array $a
     * @param array $b
     * @param array $c
     * @param array $d
     * @param array $e
     */
    public function __construct(
        $id = '',
        $type = 'a',
        array $a = array(),
        array $b = array(),
        array $c = array(),
        array $d = array(),
        array $e = array()
    ) {
        parent::__construct('div', $id);
        $this->grid($type);
        $this->_a = $this->add(new Collection($a), true);
        $this->_b = $this->add(new Collection($b), true);
        $this->_c = $this->add(new Collection($c), true);
        $this->_d = $this->add(new Collection($d), true);
        $this->_e = $this->add(new Collection($e), true);
        $this->_a->prefix('<div class="ui-block-a">')->suffix('</div>');
        $this->_b->prefix('<div class="ui-block-b">')->suffix('</div>');
        $this->_c->prefix('<div class="ui-block-c">')->suffix('</div>');
        $this->_d->prefix('<div class="ui-block-d">')->suffix('</div>');
        $this->_e->prefix('<div class="ui-block-e">')->suffix('</div>');
    }

    /**
     * Gets and sets the grid type (a, b, c, d).
     * @param string $value
     * @return string|grid
     */
    public function grid()
    {
        if (func_num_args() === 0) {
            return $this->_grid;
        }
        $type = func_get_arg(0);
        if ($type != 'a' && $type != 'b' && $type != 'c' && $type != 'd') {
            $type = 'a';
        }
        $this->_grid = $type;
        $this->attribute('class', 'ui-grid-' . $this->_grid);
        return $this;
    }

    /**
     * Gets a collection of items in the block A (class="ui-block-a").
     * @return Collection
     */
    public function blockA()
    {
        return $this->_a;
    }

    /**
     * Gets a collection of items in the block B (class="ui-block-b").
     * @return Collection
     */
    public function blockB()
    {
        return $this->_b;
    }

    /**
     * Gets a collection of items in the block C (class="ui-block-c").
     * @return Collection
     */
    public function blockC()
    {
        return $this->_c;
    }

    /**
     * Gets a collection of items in the block D (class="ui-block-d").
     * @return Collection
     */
    public function blockD()
    {
        return $this->_d;
    }

    /**
     * Gets a collection of items in the block E (class="ui-block-e").
     * @return Collection
     */
    public function blockE()
    {
        return $this->_e;
    }
}
