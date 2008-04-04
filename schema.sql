-- phpMyAdmin SQL Dump
-- version 2.10.3deb1ubuntu0.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 03, 2008 at 10:16 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.3-1ubuntu6.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `3750`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `allergies`
-- 

CREATE TABLE IF NOT EXISTS `allergies` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

-- 
-- Table structure for table `allergies_items`
-- 

CREATE TABLE IF NOT EXISTS `allergies_items` (
  `allergy_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY  (`allergy_id`,`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- 
-- Table structure for table `items`
-- 

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(128) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` float(5,2) default NULL,
  `partial` varchar(128) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

-- --------------------------------------------------------

-- 
-- Table structure for table `items_nutrition`
-- 

CREATE TABLE IF NOT EXISTS `items_nutrition` (
  `item_id` int(11) NOT NULL,
  `calories` int(11) NOT NULL,
  `fat` int(11) NOT NULL,
  `saturated_fat` int(11) NOT NULL,
  `carbs` int(11) NOT NULL,
  `protien` int(11) NOT NULL,
  `fiber` int(11) NOT NULL,
  `sodium` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- 
-- Table structure for table `item_types`
-- 

CREATE TABLE IF NOT EXISTS `item_types` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

