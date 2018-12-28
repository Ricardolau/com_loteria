CREATE TABLE IF NOT EXISTS `#__comprobacionLoteria` (
  `id` integer(10) UNSIGNED NOT NULL auto_increment,
  `numeroParticipacion`  integer NOT NULL DEFAULT '0',
  `cantidadJugada` integer NOT NULL default '0',
  `published` tinyint(1) NOT NULL default '0',
  `publish_up` datetime NOT NULL default '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` integer NOT NULL default '0',
  `access` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `params` text NOT NULL,
  `created` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(10) unsigned NOT NULL default '0',
  `created_by_alias` varchar(255) NOT NULL default '',
  `modified` datetime NOT NULL default '0000-00-00 00:00:00',
  `modified_by` int(10) unsigned NOT NULL default '0',
 
  PRIMARY KEY  (`id`),
  KEY `idx_access` (`access`),
  KEY `idx_state` (`published`),
  KEY `idx_createdby` (`created_by`)

)  DEFAULT CHARSET=utf8;

