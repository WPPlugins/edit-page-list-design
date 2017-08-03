<?
/*
Plugin Name: Edit Page, List Design
Plugin URI: http://wordpress.org/extend/plugins/edit-page-list-design/
Description: An alternative "Edit Page" list design. Makes it easier to get an overview of the page list. Just activate, nothing else.
Version: 0.1.0
Author: Henrik Urlund
Author URI: http://codework.dk/referencer/wp-plugins/

Copyright 2007 Simon Wheatley

This script is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This script is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/

function pa_admin_css()
{
    if(!strpos($_SERVER["PHP_SELF"], "edit-pages.php")) :
        
        return null;
        
    else :
        
        echo '
        <style type="text/css" media="screen">
        .column-date, #screen-options-link-wrap {
            display: none;
        }
        
        .widefat tbody th.check-column {
            padding: 7px 0 7px;
        }
        .row-actions {
            float: right;
            margin: -19px 5px 0px 0px;
        }
        </style>
        ';
        
    endif;
}

add_action('admin_head', 'pa_admin_css');
?>