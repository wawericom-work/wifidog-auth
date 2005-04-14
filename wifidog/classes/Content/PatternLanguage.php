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
/**@file PatternLanguage.php
 * @author Copyright (C) 2005 Benoit Grégoire <bock@step.polymtl.ca>,
 * Technologies Coeus inc.
 */
require_once BASEPATH.'classes/Content/ContentGroup.php';

/** Pattern Language is a location-aware fiction project by Kate Armstrong that attaches patterns of narrative to individuals as they move through the city of Montreal. Each person's path is logged in the system and compiled into a document that can be read online. The work is meant to engage with the rhythms of the city: by evolving according to the patterns of an individual, each story forms both a map or trace of movement and a fabric of sound. 

Pattern Language is activated through the login system of the Ile Sans Fils network. Once a user subscribes to Pattern Language , a piece of the story is delivered whenever s/he logs into the ISF wireless network using a WiFi-enabled laptop or mobile device. 
Narrative fragments associated with each hotspot correspond to the point of view of one character, so that repeatedly logging into the system from a single hotspot will produce a narrative from a single point of view, while moving between hotspots will insert new characters and perspectives into the text. 

Users may choose to actively engage Pattern Language  by deliberately travelling between points in the city in order to generate narrative activity, or they may decide to have Pattern Language  running in the background as they go about their regular activities, only stopping to read their document now and then over a period of time. Users have the option of setting the project to expire automatically after one day, one week, or one month, or they may manually terminate their involvement in the project at any point.
 
Once the fragments have been delivered they are compiled in real time into a document that is unique to each participant. Each individual narrative is archived and viewable online. Users may read the documents they have generated or those that have been generated by others. Participation in Pattern Language  is limited to those using the system in Montreal, although narratives generated by participants may be read by anyone visiting the website. 
 */
class PatternLanguage extends ContentGroup
{
	function __construct($content_id)
	{
		parent :: __construct($content_id);
	}

	/** Display the narrative
	 * @param $user The user who's narrative you want to grab
	 * @return the archive page HTML */
	public function displayNarrative(User $user)
	{
		return "<h1>displayNarrative(): WRITEME</h1>";
	}
	
	/** Get the list of all narratives
	 * @param $user The user who's narrative you want to grab
	 * @return the archive page HTML */
	public function getNarrativeList()
	{
		return "<h1>displayNarrative(): WRITEME</h1>";
	}

} // End class
?>