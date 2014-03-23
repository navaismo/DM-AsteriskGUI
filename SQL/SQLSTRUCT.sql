-- MySQL dump 10.13  Distrib 5.5.32, for Linux (x86_64)
--
-- Host: localhost    Database: asteriskcmp
-- ------------------------------------------------------
-- Server version	5.5.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `agents`
--

DROP TABLE IF EXISTS `agents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agents` (
  `agent_id` int(11) unsigned NOT NULL,
  `agent_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `agent_pass` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`agent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Agentes ACD';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cdr`
--

DROP TABLE IF EXISTS `cdr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cdr` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `calldate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `start` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `answer` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `clid` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `src` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `dst` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `dcontext` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `channel` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `dstchannel` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `lastapp` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `lastdata` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL DEFAULT '0',
  `billsec` int(11) NOT NULL DEFAULT '0',
  `disposition` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `amaflags` int(11) NOT NULL DEFAULT '0',
  `accountcode` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `uniqueid` varchar(149) COLLATE utf8_unicode_ci NOT NULL,
  `userfield` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `peeraccount` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `linkedid` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sequence` int(11) NOT NULL DEFAULT '0',
  `status` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `inmate_number` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `prison_id` bigint(20) NOT NULL,
  `billcode` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `rateperminute` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `totalrate` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `src` (`src`),
  KEY `start` (`start`),
  KEY `dst` (`dst`),
  KEY `accountcode` (`accountcode`),
  KEY `userfield` (`userfield`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `claves`
--

DROP TABLE IF EXISTS `claves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claves` (
  `clave_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `clave_nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `clave_clave` int(10) unsigned NOT NULL DEFAULT '0',
  `clave_local` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `clave_cel` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `clave_ldnac` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `clave_ldint` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_edit` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `user_exten` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`clave_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `followme`
--

DROP TABLE IF EXISTS `followme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `followme` (
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `musicclass` varchar(80) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default',
  `context` varchar(80) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'followme',
  `takecall` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `declinecall` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '2',
  `call_from_prompt` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `norecording_prompt` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `options_prompt` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `hold_prompt` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `status_prompt` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `sorry_prompt` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `isset` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `followme_numbers`
--

DROP TABLE IF EXISTS `followme_numbers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `followme_numbers` (
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `ordinal` int(11) unsigned NOT NULL,
  `phonenumber` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `timeout` int(11) unsigned NOT NULL,
  PRIMARY KEY (`name`,`ordinal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `iax_buddies`
--

DROP TABLE IF EXISTS `iax_buddies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iax_buddies` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `defaultuser` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `type` enum('user','peer','friend') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'friend',
  `secret` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `md5secret` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dbsecret` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transfer` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'no',
  `inkeys` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `outkey` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `auth` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'plaintext',
  `accountcode` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `callgroup` tinyint(4) NOT NULL DEFAULT '1',
  `pickupgroup` tinyint(4) NOT NULL DEFAULT '1',
  `amaflags` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default',
  `callerid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `context` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `defaultip` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `host` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'dynamic',
  `language` char(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'es',
  `mailbox` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deny` varchar(95) CHARACTER SET latin1 DEFAULT NULL,
  `permit` varchar(95) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0.0.0.0/0.0.0.0',
  `qualify` varchar(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `disallow` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'all',
  `allow` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ulaw;alaw',
  `ipaddr` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `port` int(11) unsigned DEFAULT '4569',
  `regserver` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regseconds` int(11) DEFAULT '0',
  `trunk` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `regexten` int(11) unsigned DEFAULT NULL,
  `useragent` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `videosupport` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `requirecalltoken` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `meetme`
--

DROP TABLE IF EXISTS `meetme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meetme` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `confno` char(80) NOT NULL DEFAULT '0',
  `starttime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `endtime` datetime DEFAULT NULL,
  `pin` char(20) DEFAULT NULL,
  `adminpin` char(20) DEFAULT NULL,
  `members` int(11) NOT NULL DEFAULT '0',
  `maxusers` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`confno`,`starttime`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `musiconhold`
--

DROP TABLE IF EXISTS `musiconhold`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `musiconhold` (
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `directory` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `application` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `mode` varchar(80) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `digit` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sort` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `format` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `queue_agents`
--

DROP TABLE IF EXISTS `queue_agents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `queue_agents` (
  `agent_id` int(11) unsigned NOT NULL,
  `agent_queue` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `agent_pri` tinyint(4) NOT NULL,
  PRIMARY KEY (`agent_id`,`agent_queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `queue_member_table`
--

DROP TABLE IF EXISTS `queue_member_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `queue_member_table` (
  `uniqueid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `membername` varchar(40) DEFAULT NULL,
  `queue_name` varchar(128) DEFAULT NULL,
  `interface` varchar(128) DEFAULT NULL,
  `penalty` int(11) NOT NULL DEFAULT '0',
  `paused` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uniqueid`),
  UNIQUE KEY `queue_interface` (`queue_name`,`interface`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `queue_table`
--

DROP TABLE IF EXISTS `queue_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `queue_table` (
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `musicclass` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default',
  `announce` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `context` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `timeout` int(11) DEFAULT '60',
  `monitor_type` varchar(15) CHARACTER SET latin1 DEFAULT 'MixMonitor',
  `monitor_format` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'wav',
  `queue_youarenext` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `queue_thereare` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `queue_callswaiting` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `queue_holdtime` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `queue_minutes` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `queue_seconds` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `queue_lessthan` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `queue_thankyou` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `queue_reporthold` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `announce_frequency` int(11) DEFAULT NULL,
  `announce_round_seconds` int(11) DEFAULT NULL,
  `announce_holdtime` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `announce_position` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `periodic_announce` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `periodic_announce_frequency` int(11) unsigned NOT NULL DEFAULT '60',
  `retry` int(11) DEFAULT '5',
  `ringinuse` varchar(5) CHARACTER SET latin1 NOT NULL DEFAULT 'no',
  `autofill` varchar(5) CHARACTER SET latin1 NOT NULL DEFAULT 'yes',
  `autopause` varchar(5) CHARACTER SET latin1 NOT NULL DEFAULT 'no',
  `setinterfacevar` varchar(5) CHARACTER SET latin1 NOT NULL DEFAULT 'yes',
  `wrapuptime` int(11) DEFAULT '30',
  `maxlen` int(11) DEFAULT NULL,
  `servicelevel` int(11) DEFAULT NULL,
  `strategy` varchar(128) CHARACTER SET latin1 DEFAULT 'ringall',
  `joinempty` varchar(128) CHARACTER SET latin1 DEFAULT 'no',
  `leavewhenempty` varchar(128) CHARACTER SET latin1 DEFAULT 'yes',
  `eventmemberstatus` tinyint(1) DEFAULT NULL,
  `eventwhencalled` tinyint(1) DEFAULT NULL,
  `reportholdtime` tinyint(1) DEFAULT NULL,
  `memberdelay` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `timeoutrestart` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sip_buddies`
--

DROP TABLE IF EXISTS `sip_buddies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sip_buddies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `ipaddr` varchar(45) DEFAULT NULL,
  `port` int(5) DEFAULT NULL,
  `regseconds` int(11) DEFAULT NULL,
  `defaultuser` varchar(10) DEFAULT NULL,
  `fullcontact` varchar(35) DEFAULT NULL,
  `regserver` varchar(20) DEFAULT NULL,
  `useragent` varchar(20) DEFAULT NULL,
  `lastms` int(11) DEFAULT NULL,
  `host` varchar(40) DEFAULT NULL,
  `type` enum('friend','user','peer') DEFAULT NULL,
  `context` varchar(40) DEFAULT NULL,
  `deny` varchar(40) DEFAULT '0.0.0.0/0.0.0.0',
  `permit` varchar(40) DEFAULT '0.0.0.0/0.0.0.0',
  `secret` varchar(40) DEFAULT NULL,
  `md5secret` varchar(40) DEFAULT NULL,
  `remotesecret` varchar(40) DEFAULT NULL,
  `transport` enum('udp','tcp','tls','ws','wss','udp,tcp','tcp,udp','udp,tcp,tls','udp,tcp,tls,ws','udp,tcp,tls,ws,wss') DEFAULT NULL,
  `dtmfmode` enum('rfc2833','info','shortinfo','inband','auto') DEFAULT NULL,
  `directmedia` enum('yes','no','nonat','update') DEFAULT NULL,
  `nat` enum('yes','no','force_rport','comedia','force_rport,comedia') DEFAULT NULL,
  `callgroup` varchar(40) DEFAULT NULL,
  `pickupgroup` varchar(40) DEFAULT NULL,
  `language` varchar(40) DEFAULT NULL,
  `allow` varchar(40) DEFAULT NULL,
  `disallow` varchar(40) DEFAULT NULL,
  `insecure` varchar(40) DEFAULT NULL,
  `trustrpid` enum('yes','no') DEFAULT NULL,
  `progressinband` enum('yes','no','never') DEFAULT NULL,
  `promiscredir` enum('yes','no') DEFAULT NULL,
  `useclientcode` enum('yes','no') DEFAULT NULL,
  `accountcode` varchar(40) DEFAULT NULL,
  `setvar` varchar(40) DEFAULT NULL,
  `callerid` varchar(40) DEFAULT NULL,
  `amaflags` varchar(40) DEFAULT NULL,
  `callcounter` enum('yes','no') DEFAULT NULL,
  `busylevel` int(11) DEFAULT NULL,
  `allowoverlap` enum('yes','no') DEFAULT NULL,
  `allowsubscribe` enum('yes','no') DEFAULT NULL,
  `videosupport` enum('yes','no') DEFAULT NULL,
  `maxcallbitrate` int(11) DEFAULT NULL,
  `rfc2833compensate` enum('yes','no') DEFAULT NULL,
  `mailbox` varchar(40) DEFAULT NULL,
  `session-timers` enum('accept','refuse','originate') DEFAULT NULL,
  `session-expires` int(11) DEFAULT NULL,
  `session-minse` int(11) DEFAULT NULL,
  `session-refresher` enum('uac','uas') DEFAULT NULL,
  `t38pt_usertpsource` varchar(40) DEFAULT NULL,
  `regexten` varchar(40) DEFAULT NULL,
  `fromdomain` varchar(40) DEFAULT NULL,
  `fromuser` varchar(40) DEFAULT NULL,
  `qualify` varchar(40) DEFAULT 'yes',
  `defaultip` varchar(40) DEFAULT NULL,
  `rtptimeout` int(11) DEFAULT NULL,
  `rtpholdtimeout` int(11) DEFAULT NULL,
  `sendrpid` enum('yes','no') DEFAULT NULL,
  `outboundproxy` varchar(40) DEFAULT NULL,
  `callbackextension` varchar(40) DEFAULT NULL,
  `registertrying` enum('yes','no') DEFAULT NULL,
  `timert1` int(11) DEFAULT NULL,
  `timerb` int(11) DEFAULT NULL,
  `qualifyfreq` int(11) DEFAULT NULL,
  `constantssrc` enum('yes','no') DEFAULT NULL,
  `contactpermit` varchar(40) DEFAULT NULL,
  `contactdeny` varchar(40) DEFAULT NULL,
  `usereqphone` enum('yes','no') DEFAULT NULL,
  `textsupport` enum('yes','no') DEFAULT NULL,
  `faxdetect` enum('yes','no') DEFAULT NULL,
  `buggymwi` enum('yes','no') DEFAULT NULL,
  `auth` varchar(40) DEFAULT NULL,
  `fullname` varchar(40) DEFAULT NULL,
  `trunkname` varchar(40) DEFAULT NULL,
  `cid_number` varchar(40) DEFAULT NULL,
  `callingpres` enum('allowed_not_screened','allowed_passed_screen','allowed_failed_screen','allowed','prohib_not_screened','prohib_passed_screen','prohib_failed_screen','prohib') DEFAULT NULL,
  `mohinterpret` varchar(40) DEFAULT NULL,
  `mohsuggest` varchar(40) DEFAULT NULL,
  `parkinglot` varchar(40) DEFAULT NULL,
  `hasvoicemail` enum('yes','no') DEFAULT NULL,
  `subscribemwi` enum('yes','no') DEFAULT NULL,
  `vmexten` varchar(40) DEFAULT NULL,
  `autoframing` enum('yes','no') DEFAULT NULL,
  `rtpkeepalive` int(11) DEFAULT NULL,
  `call-limit` int(11) DEFAULT NULL,
  `g726nonstandard` enum('yes','no') DEFAULT NULL,
  `ignoresdpversion` enum('yes','no') DEFAULT NULL,
  `allowtransfer` enum('yes','no') DEFAULT NULL,
  `dynamic` enum('yes','no') DEFAULT NULL,
  `encryption` enum('yes','no') DEFAULT 'no',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `ipaddr` (`ipaddr`,`port`),
  KEY `host` (`host`,`port`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `userid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` int(10) unsigned NOT NULL DEFAULT '1',
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `voicemail_users`
--

DROP TABLE IF EXISTS `voicemail_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `voicemail_users` (
  `uniqueid` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `context` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default',
  `mailbox` int(11) NOT NULL DEFAULT '0',
  `password` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullname` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pager` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tz` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'central',
  `attach` varchar(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `saycid` varchar(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `dialout` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `callback` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `review` varchar(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `operator` varchar(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `envelope` varchar(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `sayduration` varchar(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `saydurationm` tinyint(4) NOT NULL DEFAULT '1',
  `sendvoicemail` varchar(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `deletevoicemail` varchar(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `nextaftercmd` varchar(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `forcename` varchar(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `forcegreetings` varchar(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `hidefromdir` varchar(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`uniqueid`),
  KEY `mailbox_context` (`mailbox`,`context`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-03-23 15:11:50
