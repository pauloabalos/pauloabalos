/*
 Navicat Premium Data Transfer

 Source Server         : root@localhost
 Source Server Type    : MySQL
 Source Server Version : 50622
 Source Host           : localhost
 Source Database       : ghstest

 Target Server Type    : MySQL
 Target Server Version : 50622
 File Encoding         : utf-8

 Date: 07/05/2015 12:22:55 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `news`
-- ----------------------------
BEGIN;
INSERT INTO `news` VALUES ('1', 'BMW has a hydrogen-powered 5 Series', 'Battery-powered EVs are in the spotlight right now, but that doesn\'t mean car manufacturers aren\'t looking at alternative fuel sources. At its \"Innovation Day\" in France, BMW unveiled a prototype 5 Series GT that uses a hydrogen fuel cell to power its electric motor. We\'ve seen the company experiment in this space before -- the Hydrogen 7 used the element to power a combustion engine -- but this is its first complete FCV package. Unlike the Hydrogen 7, which managed roughly 124 miles on hydrogen, the modified 5 Series can easily top 300. With 245 horsepower under the hood it\'s no slouch either, although we doubt it would keep pace with BMW\'s electric i8 in a drag race.', '2015-07-05 11:24:57'), ('2', 'Apple Pay reportedly reaches the UK on July 14th', 'Irked that Apple Pay is only officially slated to reach the UK sometime in July? Don\'t worry -- you might not have to wait all month to see it. Multiple retailer leaks at 9to5Mac point to Apple launching its iPhone tap-to-pay service in Old Blighty on July 14th, or soon enough that you can likely use it if you\'re off to one of the country\'s many summer music festivals. Just don\'t expect to splurge on more than a quick bite to eat while you\'re out. That £20 (soon to be £30) contactless payment cap seriously limits how much you can spend, so the British implementation won\'t be quite as convenient as it is for Americans.', '2015-07-05 11:25:17'), ('3', 'Uber narrowly evades a ban in Canada\'s largest city', 'Uber might be facing its worst nightmare in Europe, but it just got a big break in Canada. A Toronto judge has tossed out the city\'s attempt to ban Uber (and by extension, other ridesharing services) on the grounds that it\'s operating without a taxi license. It\'s all about how Uber takes customers, according to the court. Local laws require that drivers accept communication from passengers looking for a lift, but Uber doesn\'t do that -- you\'re simply sending a request that automatically pairs you up with a nearby driver. It\'s arguably a technicality (the city contends that Uber still dispatches drivers like other cab services), but the decision is enough to keep app-hailed cars moving in Canada\'s largest metropolis. The Toronto City Council now has to change bylaws if it wants to take Uber off the streets.', '2015-07-05 11:25:26'), ('4', 'More ingenious hacks for problems you didn\'t know you had', 'It\'s the Fourth of July and while that light show in the sky honors US independence, why not shine a little light on our DIY perseverance? To help celebrate this holiday, we\'ve put together a collection of (even more) ingenious hacks that incorporate party essentials: lights, nighttime, fireworks, music, drinks and a bit of wild imagination. Want to watch the celebrations on TV like it\'s still the \'80s? Will pumping up the volume help you fight fires? And just how do you innovate something as simple as sliced bread? DIY fanatics and gadget hacker extraordinaires have already done the legwork. All you need to do is sit back, relax and enjoy the (slide)show.', '2015-07-05 11:26:00');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
