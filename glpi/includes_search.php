<?php
/*
 ----------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2005 by the INDEPNET Development Team.
 
 http://indepnet.net/   http://glpi.indepnet.org
 ----------------------------------------------------------------------

 LICENSE

	This file is part of GLPI.

    GLPI is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    GLPI is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with GLPI; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 ------------------------------------------------------------------------
*/

// ----------------------------------------------------------------------
// Original Author of file: Julien Dombre
// Purpose of file:
// ----------------------------------------------------------------------
 
$LINK_ID_TABLE=array(
		COMPUTER_TYPE=> "glpi_computers",
		NETWORKING_TYPE => "glpi_networking",
		PRINTER_TYPE => "glpi_printers",
		MONITOR_TYPE => "glpi_monitors",
		PERIPHERAL_TYPE => "glpi_peripherals",
		SOFTWARE_TYPE => "glpi_software",
		CONTACT_TYPE => "glpi_contacts",
		ENTERPRISE_TYPE => "glpi_enterprises",
		INFOCOM_TYPE => "glpi_infocoms",
		CONTRACT_TYPE => "glpi_contracts",
		CARTRIDGE_TYPE => "glpi_cartridges_type",
		TYPEDOC_TYPE => "glpi_type_docs",
		DOCUMENT_TYPE => "glpi_docs",
		KNOWBASE_TYPE => "glpi_kbitems",
		USER_TYPE => "glpi_users",
		TRACKING_TYPE => "glpi_tracking",
		CONSUMABLE_TYPE => "glpi_consumables_type",
		CONSUMABLE_ITEM_TYPE => "glpi_consumables",
		CARTRIDGE_ITEM_TYPE => "glpi_cartridges",
		LICENSE_TYPE => "glpi_licenses",
);

$INFOFORM_PAGES=array( 
		COMPUTER_TYPE=> "computers/computers-info-form.php",
		NETWORKING_TYPE => "networking/networking-info-form.php",
		PRINTER_TYPE => "printers/printers-info-form.php",
		MONITOR_TYPE => "monitors/monitors-info-form.php",
		PERIPHERAL_TYPE => "peripherals/peripherals-info-form.php",
		SOFTWARE_TYPE => "software/software-info-form.php",
		CONTACT_TYPE => "contacts/contacts-info-form.php",
		ENTERPRISE_TYPE => "enterprises/enterprises-info-form.php",
		INFOCOM_TYPE => "infocoms/infocoms-info-form.php",
		CONTRACT_TYPE => "contracts/contracts-info-form.php",
		CARTRIDGE_TYPE => "cartriges/cartridges-info-form.php",
		TYPEDOC_TYPE => "typedocs/typedocs-info-form.php",
		DOCUMENT_TYPE => "documents/documents-info-form.php",
		KNOWBASE_TYPE => "knowbase/knowbase-info-form.php",
		USER_TYPE => "users/users-info-form.php",
		TRACKING_TYPE => "????",
		CONSUMABLE_TYPE => "consumables/consumables-info-form.php",
		CONSUMABLE_ITEM_TYPE => "??",
		CARTRIDGE_ITEM_TYPE => "??",
		LICENSE_TYPE => "??",
);

$SEARCH_OPTION=array(
COMPUTER_TYPE => array(	1 => array(	"table" => "glpi_computers", 
				 	"field" => "name",
					"name" => $lang["computers"][7],
				),
			2 => array(	"table" => "glpi_computers", 
					"field" => "ID",
					"name" => $lang["computers"][31],
				),
			3 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"name" => $lang["computers"][10],
				),
			4 => array(	"table" => "glpi_type_computers", 
					"field" => "name",
					"name" => $lang["computers"][8],
				),
			5 => array(	"table" => "glpi_dropdown_model", 
					"field" => "name",
					"name" => $lang["computers"][50],
				),
			6 => array(	"table" => "glpi_dropdown_os", 
					"field" => "name",
					"name" => $lang["computers"][9],
				),
			7 => array(	"table" => "glpi_device_processor", 
					"field" => "designation",
					"name" => $lang["computers"][21],
				),
			8 => array(	"table" => "glpi_computers", 
					"field" => "serial",
					"name" => $lang["computers"][17],
				),
			9 => array(	"table" => "glpi_computers", 
					"field" => "otherserial",
					"name" => $lang["computers"][18],
				),
			10 => array(	"table" => "glpi_device_ram", 
					"field" => "designation",
					"name" => $lang["computers"][23],
				),
			11 => array(	"table" => "glpi_device_iface", 
					"field" => "designation",
					"name" => $lang["computers"][26],
				),
			12 => array(	"table" => "glpi_device_sndcard", 
					"field" => "designation",
					"name" => $lang["computers"][33],
				),
			13 => array(	"table" => "glpi_device_gfxcard", 
					"field" => "designation",
					"name" => $lang["computers"][34],
				),
			14 => array(	"table" => "glpi_device_moboard", 
					"field" => "designation",
					"name" => $lang["computers"][35],
				),
			15 => array(	"table" => "glpi_device_hdd", 
					"field" => "designation",
					"name" => $lang["computers"][36],
				),
			16 => array(	"table" => "glpi_computers", 
					"field" => "comments",
					"name" => $lang["computers"][19],
				),
			17 => array(	"table" => "glpi_computers", 
					"field" => "contact",
					"name" => $lang["computers"][16],
				),
			18 => array(	"table" => "glpi_computers", 
					"field" => "contact_num",
					"name" => $lang["computers"][15],
				),
			19 => array(	"table" => "glpi_computers", 
					"field" => "date_mod",
					"name" => $lang["computers"][11],
				),
			20 => array(	"table" => "glpi_networking_ports", 
					"field" => "ifaddr",
					"name" => $lang["networking"][14],
				),
			21 => array(	"table" => "glpi_networking_ports", 
					"field" => "ifmac",
					"name" => $lang["networking"][15],
				),
			22 => array(	"table" => "glpi_dropdown_netpoint", 
					"field" => "name",
					"name" => $lang["networking"][51],
				),
			23 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"name" => $lang["common"][5],
				),
			24 => array(	"table" => "glpi_users", 
					"field" => "name",
					"name" => $lang["common"][10],
				),
			25 => array(	"table" => "glpi_infocoms", 
					"field" => "num_immo",
					"name" => $lang["financial"][20],
				),
			26 => array(	"table" => "glpi_infocoms", 
					"field" => "num_commande",
					"name" => $lang["financial"][18],
				),
			27 => array(	"table" => "glpi_infocoms", 
					"field" => "bon_livraison",
					"name" => $lang["financial"][19],
				),
			28 => array(	"table" => "glpi_infocoms", 
					"field" => "facture",
					"name" => $lang["financial"][82],
				),
			29 => array(	"table" => "glpi_contracts", 
					"field" => "name",
					"name" => $lang["financial"][27]." ".$lang["financial"][1],
				),
			30 => array(	"table" => "glpi_contracts", 
					"field" => "num",
					"name" => $lang["financial"][4]." ".$lang["financial"][1],
				),
			31 => array(	"table" => "glpi_dropdown_state", 
					"field" => "name",
					"name" => $lang["state"][0],
				),
		),
NETWORKING_TYPE => array(
			1 => array(	"table" => "glpi_networking", 
					"field" => "name",
					"name" => $lang["networking"][0],
				),
			2 => array(	"table" => "glpi_networking", 
					"field" => "ID",
					"name" => $lang["networking"][50],
				),
			3 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"name" => $lang["networking"][1],
				),
			4 => array(	"table" => "glpi_type_networking", 
					"field" => "name",
					"name" => $lang["networking"][2],
				),
			5 => array(	"table" => "glpi_networking", 
					"field" => "serial",
					"name" => $lang["networking"][6],
				),
			6 => array(	"table" => "glpi_networking", 
					"field" => "otherserial",
					"name" => $lang["networking"][7],
				),
			7 => array(	"table" => "glpi_networking", 
					"field" => "contact",
					"name" => $lang["networking"][3],
				),
			8 => array(	"table" => "glpi_networking", 
					"field" => "contact_num",
					"name" => $lang["networking"][4],
				),
			9 => array(	"table" => "glpi_networking", 
					"field" => "date_mod",
					"name" => $lang["networking"][9],
				),
			10 => array(	"table" => "glpi_networking", 
					"field" => "comments",
					"name" => $lang["networking"][8],
				),
			11 => array(	"table" => "glpi_dropdown_firmware", 
					"field" => "name",
					"name" => $lang["networking"][49],
				),
			20 => array(	"table" => "glpi_networking_ports", 
					"field" => "ifaddr",
					"name" => $lang["networking"][14],
				),
			21 => array(	"table" => "glpi_networking_ports", 
					"field" => "ifmac",
					"name" => $lang["networking"][15],
				),
			22 => array(	"table" => "glpi_dropdown_netpoint", 
					"field" => "name",
					"name" => $lang["networking"][51],
				),
			23 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"name" => $lang["common"][5],
				),
			24 => array(	"table" => "glpi_users", 
					"field" => "name",
					"name" => $lang["common"][10],
				),
			25 => array(	"table" => "glpi_infocoms", 
					"field" => "num_immo",
					"name" => $lang["financial"][20],
				),
			26 => array(	"table" => "glpi_infocoms", 
					"field" => "num_commande",
					"name" => $lang["financial"][18],
				),
			27 => array(	"table" => "glpi_infocoms", 
					"field" => "bon_livraison",
					"name" => $lang["financial"][19],
				),
			28 => array(	"table" => "glpi_infocoms", 
					"field" => "facture",
					"name" => $lang["financial"][82],
				),
			29 => array(	"table" => "glpi_contracts", 
					"field" => "name",
					"name" => $lang["financial"][27]." ".$lang["financial"][1],
				),
			30 => array(	"table" => "glpi_contracts", 
					"field" => "num",
					"name" => $lang["financial"][4]." ".$lang["financial"][1],
				),
			31 => array(	"table" => "glpi_dropdown_state", 
					"field" => "name",
					"name" => $lang["state"][0],
				),
		),
PRINTER_TYPE => array(
			1 => array(	"table" => "glpi_printers", 
					"field" => "name",
					"name" => $lang["printers"][5],
				),
			2 => array(	"table" => "glpi_printers", 
					"field" => "ID",
					"name" => $lang["printers"][19],
				),
			3 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"name" => $lang["printers"][10],
				),
			4 => array(	"table" => "glpi_type_printers", 
					"field" => "name",
					"name" => $lang["printers"][9],
				),
			5 => array(	"table" => "glpi_printers", 
					"field" => "serial",
					"name" => $lang["printers"][10],
				),
			6 => array(	"table" => "glpi_printers", 
					"field" => "otherserial",
					"name" => $lang["printers"][11],
				),
			7 => array(	"table" => "glpi_printers", 
					"field" => "contact",
					"name" => $lang["printers"][8],
				),
			8 => array(	"table" => "glpi_printers", 
					"field" => "contact_num",
					"name" => $lang["printers"][7],
				),
			9 => array(	"table" => "glpi_printers", 
					"field" => "date_mod",
					"name" => $lang["printers"][16],
				),
			10 => array(	"table" => "glpi_printers", 
					"field" => "comments",
					"name" => $lang["printers"][12],
				),
			20 => array(	"table" => "glpi_networking_ports", 
					"field" => "ifaddr",
					"name" => $lang["networking"][14],
				),
			21 => array(	"table" => "glpi_networking_ports", 
					"field" => "ifmac",
					"name" => $lang["networking"][15],
				),
			22 => array(	"table" => "glpi_dropdown_netpoint", 
					"field" => "name",
					"name" => $lang["networking"][51],
				),
			23 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"name" => $lang["common"][5],
				),
			24 => array(	"table" => "glpi_users", 
					"field" => "name",
					"name" => $lang["common"][10],
				),
			25 => array(	"table" => "glpi_infocoms", 
					"field" => "num_immo",
					"name" => $lang["financial"][20],
				),
			26 => array(	"table" => "glpi_infocoms", 
					"field" => "num_commande",
					"name" => $lang["financial"][18],
				),
			27 => array(	"table" => "glpi_infocoms", 
					"field" => "bon_livraison",
					"name" => $lang["financial"][19],
				),
			28 => array(	"table" => "glpi_infocoms", 
					"field" => "facture",
					"name" => $lang["financial"][82],
				),
			29 => array(	"table" => "glpi_contracts", 
					"field" => "name",
					"name" => $lang["financial"][27]." ".$lang["financial"][1],
				),
			30 => array(	"table" => "glpi_contracts", 
					"field" => "num",
					"name" => $lang["financial"][4]." ".$lang["financial"][1],
				),
			31 => array(	"table" => "glpi_dropdown_state", 
					"field" => "name",
					"name" => $lang["state"][0],
				),
		),
MONITOR_TYPE => array(
			1 => array(	"table" => "glpi_monitors", 
					"field" => "name",
					"name" => $lang["monitors"][5],
				),
			2 => array(	"table" => "glpi_monitors", 
					"field" => "ID",
					"name" => $lang["monitors"][23],
				),
			3 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"name" => $lang["monitors"][6],
				),
			4 => array(	"table" => "glpi_type_monitors", 
					"field" => "name",
					"name" => $lang["monitors"][9],
				),
			5 => array(	"table" => "glpi_monitors", 
					"field" => "serial",
					"name" => $lang["monitors"][10],
				),
			6 => array(	"table" => "glpi_monitors", 
					"field" => "otherserial",
					"name" => $lang["monitors"][11],
				),
			7 => array(	"table" => "glpi_monitors", 
					"field" => "contact",
					"name" => $lang["monitors"][8],
				),
			8 => array(	"table" => "glpi_monitors", 
					"field" => "contact_num",
					"name" => $lang["monitors"][7],
				),
			9 => array(	"table" => "glpi_monitors", 
					"field" => "date_mod",
					"name" => $lang["monitors"][16],
				),
			10 => array(	"table" => "glpi_monitors", 
					"field" => "comments",
					"name" => $lang["monitors"][12],
				),
			23 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"name" => $lang["common"][5],
				),
			24 => array(	"table" => "glpi_users", 
					"field" => "name",
					"name" => $lang["common"][10],
				),
			25 => array(	"table" => "glpi_infocoms", 
					"field" => "num_immo",
					"name" => $lang["financial"][20],
				),
			26 => array(	"table" => "glpi_infocoms", 
					"field" => "num_commande",
					"name" => $lang["financial"][18],
				),
			27 => array(	"table" => "glpi_infocoms", 
					"field" => "bon_livraison",
					"name" => $lang["financial"][19],
				),
			28 => array(	"table" => "glpi_infocoms", 
					"field" => "facture",
					"name" => $lang["financial"][82],
				),
			29 => array(	"table" => "glpi_contracts", 
					"field" => "name",
					"name" => $lang["financial"][27]." ".$lang["financial"][1],
				),
			30 => array(	"table" => "glpi_contracts", 
					"field" => "num",
					"name" => $lang["financial"][4]." ".$lang["financial"][1],
				),
			31 => array(	"table" => "glpi_dropdown_state", 
					"field" => "name",
					"name" => $lang["state"][0],
				),
		),
PERIPHERAL_TYPE => array(
			1 => array(	"table" => "glpi_peripherals", 
					"field" => "name",
					"name" => $lang["peripherals"][5],
				),
			2 => array(	"table" => "glpi_peripherals", 
					"field" => "ID",
					"name" => $lang["peripherals"][23],
				),
			3 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"name" => $lang["peripherals"][6],
				),
			4 => array(	"table" => "glpi_type_peripherals", 
					"field" => "name",
					"name" => $lang["peripherals"][9],
				),
			5 => array(	"table" => "glpi_peripherals", 
					"field" => "serial",
					"name" => $lang["peripherals"][10],
				),
			6 => array(	"table" => "glpi_peripherals", 
					"field" => "otherserial",
					"name" => $lang["peripherals"][11],
				),
			7 => array(	"table" => "glpi_peripherals", 
					"field" => "contact",
					"name" => $lang["peripherals"][8],
				),
			8 => array(	"table" => "glpi_peripherals", 
					"field" => "contact_num",
					"name" => $lang["peripherals"][7],
				),
			9 => array(	"table" => "glpi_peripherals", 
					"field" => "date_mod",
					"name" => $lang["peripherals"][16],
				),
			10 => array(	"table" => "glpi_peripherals", 
					"field" => "comments",
					"name" => $lang["peripherals"][12],
				),
			23 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"name" => $lang["common"][5],
				),
			24 => array(	"table" => "glpi_users", 
					"field" => "name",
					"name" => $lang["common"][10],
				),
			25 => array(	"table" => "glpi_infocoms", 
					"field" => "num_immo",
					"name" => $lang["financial"][20],
				),
			26 => array(	"table" => "glpi_infocoms", 
					"field" => "num_commande",
					"name" => $lang["financial"][18],
				),
			27 => array(	"table" => "glpi_infocoms", 
					"field" => "bon_livraison",
					"name" => $lang["financial"][19],
				),
			28 => array(	"table" => "glpi_infocoms", 
					"field" => "facture",
					"name" => $lang["financial"][82],
				),
			29 => array(	"table" => "glpi_contracts", 
					"field" => "name",
					"name" => $lang["financial"][27]." ".$lang["financial"][1],
				),
			30 => array(	"table" => "glpi_contracts", 
					"field" => "num",
					"name" => $lang["financial"][4]." ".$lang["financial"][1],
				),
			31 => array(	"table" => "glpi_dropdown_state", 
					"field" => "name",
					"name" => $lang["state"][0],
				),
		),
SOFTWARE_TYPE => array(
			1 => array(	"table" => "glpi_software", 
					"field" => "name",
					"name" => $lang["software"][2],
				),
			2 => array(	"table" => "glpi_software", 
					"field" => "ID",
					"name" => $lang["software"][1],
				),
			3 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"name" => $lang["software"][4],
				),
			4 => array(	"table" => "glpi_dropdown_os", 
					"field" => "name",
					"name" => $lang["software"][3],
				),
			5 => array(	"table" => "glpi_software", 
					"field" => "version",
					"name" => $lang["software"][5],
				),
			6 => array(	"table" => "glpi_software", 
					"field" => "comments",
					"name" => $lang["software"][6],
				),
			7 => array(	"table" => "glpi_licenses", 
					"field" => "serial",
					"name" => $lang["software"][11],
				),
			9 => array(	"table" => "glpi_software", 
					"field" => "date_mod",
					"name" => $lang["computers"][11],
				),
			23 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"name" => $lang["common"][5],
				),
			24 => array(	"table" => "glpi_users", 
					"field" => "name",
					"name" => $lang["common"][10],
				),
			25 => array(	"table" => "glpi_infocoms", 
					"field" => "num_immo",
					"name" => $lang["financial"][20],
				),
			26 => array(	"table" => "glpi_infocoms", 
					"field" => "num_commande",
					"name" => $lang["financial"][18],
				),
			27 => array(	"table" => "glpi_infocoms", 
					"field" => "bon_livraison",
					"name" => $lang["financial"][19],
				),
			28 => array(	"table" => "glpi_infocoms", 
					"field" => "facture",
					"name" => $lang["financial"][82],
				),
			29 => array(	"table" => "glpi_contracts", 
					"field" => "name",
					"name" => $lang["financial"][27]." ".$lang["financial"][1],
				),
			30 => array(	"table" => "glpi_contracts", 
					"field" => "num",
					"name" => $lang["financial"][4]." ".$lang["financial"][1],
				),
			31 => array(	"table" => "glpi_dropdown_state", 
					"field" => "name",
					"name" => $lang["state"][0],
				),
		),
CONTACT_TYPE => array(
			1 => array(	"table" => "glpi_contacts", 
					"field" => "name",
					"name" => $lang["financial"][27],
				),
			2 => array(	"table" => "glpi_contacts", 
					"field" => "ID",
					"name" => $lang["financial"][28],
				),
			3 => array(	"table" => "glpi_contacts", 
					"field" => "phone",
					"name" => $lang["financial"][29],
				),
			4 => array(	"table" => "glpi_contacts", 
					"field" => "phone2",
					"name" => $lang["financial"][29]." 2",
				),
			5 => array(	"table" => "glpi_contacts", 
					"field" => "fax",
					"name" => $lang["financial"][30],
				),
			6 => array(	"table" => "glpi_contacts", 
					"field" => "email",
					"name" => $lang["financial"][31],
				),
			7 => array(	"table" => "glpi_contacts", 
					"field" => "comments",
					"name" => $lang["financial"][12],
				),
			9 => array(	"table" => "glpi_dropdown_contact_type", 
					"field" => "name",
					"name" => $lang["financial"][37],
				),
		),
ENTERPRISE_TYPE => array(
			1 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"name" => $lang["financial"][27],
				),
			2 => array(	"table" => "glpi_enterprises", 
					"field" => "ID",
					"name" => $lang["financial"][28],
				),
			3 => array(	"table" => "glpi_enterprises", 
					"field" => "address",
					"name" => $lang["financial"][44],
				),
			4 => array(	"table" => "glpi_enterprises", 
					"field" => "website",
					"name" => $lang["financial"][45],
				),
			5 => array(	"table" => "glpi_enterprises", 
					"field" => "phonenumber",
					"name" => $lang["financial"][29],
				),
			6 => array(	"table" => "glpi_enterprises", 
					"field" => "fax",
					"name" => $lang["financial"][30],
				),
			7 => array(	"table" => "glpi_enterprises", 
					"field" => "comments",
					"name" => $lang["financial"][12],
				),
			9 => array(	"table" => "glpi_dropdown_enttype", 
					"field" => "name",
					"name" => $lang["financial"][79],
				),
		),
//INFOCOM_TYPE => ,
CONTRACT_TYPE => array(
			1 => array(	"table" => "glpi_contracts", 
					"field" => "name",
					"name" => $lang["financial"][27],
				),
			2 => array(	"table" => "glpi_contracts", 
					"field" => "ID",
					"name" => $lang["financial"][28],
				),
			3 => array(	"table" => "glpi_contracts", 
					"field" => "num",
					"name" => $lang["financial"][4],
				),
			4 => array(	"table" => "glpi_dropdown_contract_type", 
					"field" => "name",
					"name" => $lang["financial"][37],
				),
			5 => array(	"table" => "glpi_contracts", 
					"field" => "begin_date",
					"name" => $lang["financial"][7],
				),
			6 => array(	"table" => "glpi_contracts", 
					"field" => "duration",
					"name" => $lang["financial"][8],
				),
			7 => array(	"table" => "glpi_contracts", 
					"field" => "notice",
					"name" => $lang["financial"][10],
				),
			9 => array(	"table" => "glpi_contracts", 
					"field" => "bill_type",
					"name" => $lang["financial"][58],
				),
			10 => array(	"table" => "glpi_contracts", 
					"field" => "compta_num",
					"name" => $lang["financial"][13],
				),
		),
CARTRIDGE_TYPE => array(
			1 => array(	"table" => "glpi_cartridges_type", 
					"field" => "name",
					"name" => $lang["cartridges"][1],
				),
			2 => array(	"table" => "glpi_cartridges_type", 
					"field" => "ID",
					"name" => $lang["cartridges"][4],
				),
			3 => array(	"table" => "glpi_cartridges_type", 
					"field" => "ref",
					"name" => $lang["cartridges"][2],
				),
			4 => array(	"table" => "glpi_dropdown_cartridge_type", 
					"field" => "name",
					"name" => $lang["cartridges"][3],
				),
			5 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"name" => $lang["common"][5],
				),
			6 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"name" => $lang["cartridges"][36],
				),
			7 => array(	"table" => "glpi_users", 
					"field" => "name",
					"name" => $lang["common"][10],
				),
		),
TYPEDOC_TYPE => array(
			1 => array(	"table" => "glpi_type_docs", 
					"field" => "name",
					"name" => $lang["document"][1],
				),
			2 => array(	"table" => "glpi_type_docs", 
					"field" => "ID",
					"name" => $lang["document"][14],
				),
			3 => array(	"table" => "glpi_type_docs", 
					"field" => "ext",
					"name" => $lang["document"][9],
				),
			4 => array(	"table" => "glpi_type_docs", 
					"field" => "mime",
					"name" => $lang["document"][4],
				),
			5 => array(	"table" => "glpi_type_docs", 
					"field" => "upload",
					"name" => $lang["document"][15],
				),
		),
DOCUMENT_TYPE => array(
			1 => array(	"table" => "glpi_docs", 
					"field" => "name",
					"name" => $lang["document"][1],
				),
			2 => array(	"table" => "glpi_docs", 
					"field" => "ID",
					"name" => $lang["document"][14],
				),
			3 => array(	"table" => "glpi_docs", 
					"field" => "filename",
					"name" => $lang["document"][2],
				),
			4 => array(	"table" => "glpi_docs", 
					"field" => "link",
					"name" => $lang["document"][33],
				),
			5 => array(	"table" => "glpi_docs", 
					"field" => "mime",
					"name" => $lang["document"][4],
				),
			6 => array(	"table" => "glpi_docs", 
					"field" => "comment",
					"name" => $lang["document"][6],
				),
			7 => array(	"table" => "glpi_dropdown_rubdocs", 
					"field" => "name",
					"name" => $lang["document"][3],
				),	
		),
//KNOWBASE_TYPE => "glpi_kbitems",
USER_TYPE => array(
			1 => array(	"table" => "glpi_users", 
					"field" => "name",
					"name" => $lang["setup"][18],
				),
			2 => array(	"table" => "glpi_users", 
					"field" => "ID",
					"name" => $lang["common"][2],
				),
			3 => array(	"table" => "glpi_users", 
					"field" => "realname",
					"name" => $lang["setup"][13],
				),
			4 => array(	"table" => "glpi_users", 
					"field" => "type",
					"name" => $lang["setup"][20],
				),
			5 => array(	"table" => "glpi_users", 
					"field" => "email",
					"name" => $lang["setup"][14],
				),
			6 => array(	"table" => "glpi_users", 
					"field" => "phone",
					"name" => $lang["setup"][15],
				),
			7 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"name" => $lang["setup"][3],
				),
		),
//TRACKING_TYPE => "glpi_tracking",
CONSUMABLE_TYPE => array(
			1 => array(	"table" => "glpi_consumables_type", 
					"field" => "name",
					"name" => $lang["consumables"][1],
				),
			2 => array(	"table" => "glpi_consumables_type", 
					"field" => "ID",
					"name" => $lang["consumables"][4],
				),
			3 => array(	"table" => "glpi_consumables_type", 
					"field" => "ref",
					"name" => $lang["consumables"][2],
				),
			4 => array(	"table" => "glpi_dropdown_consumable_type", 
					"field" => "name",
					"name" => $lang["consumables"][3],
				),
			5 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"name" => $lang["consumables"][8],
				),
			6 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"name" => $lang["consumables"][36],
				),
			7 => array(	"table" => "glpi_users", 
					"field" => "completename",
					"name" => $lang["common"][10],
				),
		),
//CONSUMABLE_ITEM_TYPE => "glpi_consumables",
//CARTRIDGE_ITEM_TYPE => "glpi_cartridges",
//LICENSE_TYPE => "glpi_licenses",

);
/*

*/
?>
