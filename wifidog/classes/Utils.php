<?php
  /********************************************************************\
   * This program is free software; you can redistribute it and/or    *
   * modify it under the terms of the GNU General Public License as   *
   * published by the Free Software Foundation; either version 2 of   *
   * the License, or (at your option) any later version.              *
   *                                                                  *
   * This program is distributed in the hope that it will be useful,  *
   * but WITHOUT ANY WARRANTY; without even the implied warranty of   *
   * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the    *
   * GNU General Public License for more details.                     *
   *                                                                  *
   * You should have received a copy of the GNU General Public License*
   * along with this program; if not, contact:                        *
   *                                                                  *
   * Free Software Foundation           Voice:  +1-617-542-5942       *
   * 59 Temple Place - Suite 330        Fax:    +1-617-542-2652       *
   * Boston, MA  02111-1307,  USA       gnu@gnu.org                   *
   *                                                                  *
   \********************************************************************/
  /**@file Utils.php
   * @author Copyright (C) 2005 Philippe April
   */

class Utils
{
	static function convertBytesToWords($bytes) {
	    if ($bytes > 1024*1024*1024)
	        return round($bytes/(1024*1024*1024),1) . "G";
	    if ($bytes > 1024*1024)
	        return round($bytes/(1024*1024),1) . "M";
	    if ($bytes > 1024)
	        return round($bytes/(1024),1) . "K";
	}
	
	static function convertSecondsToWords($seconds) {
	    $r = '';
	    if ($seconds >  60*60*24*365.25) {
	        $amount = floor($seconds/(60*60*24*365.25));
	        if ($amount != 0)
	            $r .= " {$amount}y";
	        $seconds -= ($amount*60*60*24*365.25);
	    }
	    if ($seconds > 60*60*24) {
	        $amount = floor($seconds/(60*60*24));
	        if ($amount != 0)
	            $r .= " {$amount}d";
	        $seconds -= ($amount*60*60*24);
	    }
	    if ($seconds > 60*60) {
	        $amount = floor($seconds/(60*60));
	        if ($amount != 0)
	            $r .= " {$amount}h";
	        $seconds -= ($amount*60*60);
	    }
	    if ($seconds > 60) {
	        $amount = floor($seconds/60);
	        if ($amount != 0)
	            $r .= " {$amount}m";
	        $seconds -= ($amount*60);
	    }
	    if ($seconds != 0) {
	        $r .= " {$seconds}s";
	    }
	    trim($r);
	    return $r;
	}
}

?>