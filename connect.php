<?php
/* Copyright (c) 2013, St�phane Petitcolas
This file is part of CookieViz

CookieViz is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

CookieViz is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with CookieViz.  If not, see <http://www.gnu.org/licenses/>.
*/

$fichier="..\..\soft\.install";
$fp = fopen($fichier,'r');
$mdp = fgets($fp);
fclose($fp);

$link = mysql_connect('localhost', 'root', $mdp) or die('Impossible de se connecter : ' . mysql_error());
mysql_select_db('CookieViz') or die('Impossible de s�lectionner la base de donn�es');
?>