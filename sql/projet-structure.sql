-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 27 mars 2018 à 13:52
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--
CREATE DATABASE IF NOT EXISTS `projet` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projet`;

-- --------------------------------------------------------

--
-- Structure de la table `crea_page`
--

DROP TABLE IF EXISTS `crea_page`;
CREATE TABLE IF NOT EXISTS `crea_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `affiche` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `horaire` time NOT NULL,
  `jour` date NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_destroy` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `crea_page`
--

INSERT INTO `crea_page` (`id`, `affiche`, `titre`, `lieu`, `horaire`, `jour`, `description`, `user_id`, `date_create`, `date_destroy`) VALUES
(13, 'https://assets.catawiki.nl/assets/2015/8/7/8/d/b/8db40558-3d19-11e5-9751-b3eb21b5c862.jpg', 'Frank Zappa', 'victoire 2', '00:00:00', '2018-01-31', 'Oc opbe efa wisaja ajodur rez bilvosiw nuripo weugpo rit upe ellas ala ramumfec en wudtav zas. Nimibinuh vu osoedicu mawirkaf fij zus ovufo patlubizi zat bem pire awe eha pebzu pavjacpov. Zuija sadig fuletog fez kefaru ha bo juuvoloh namopfoz cev can ge n', 2, '2018-03-19 13:34:23', NULL),
(12, 'https://cdn.shopify.com/s/files/1/1442/6668/products/ACDC-1975-Webber-web800.jpg?v=1511784923', 'Summer Vacation Tour', 'blacksheep', '20:00:00', '2018-02-21', 'LOCK UP YOUR DAUGHTERS !!!<br />\r\nBlaaaablaablabla blaaaaaa blablaaabla..<br />\r\nBlablablablaaaaabla blaaaaabl.', 2, '2018-03-19 13:34:23', NULL),
(11, 'https://i.pinimg.com/originals/21/76/20/217620e52804d287103691efb211ada3.jpg', 'Bob Marley', 'antirouille', '21:00:00', '2018-04-01', 'Sov er lopcam win go bo tafjobe uf caku rolje cuk teimeba kib nek vujpaz mius ho. Wevasba je jo piseoje ocusow isa ro tubi gaigo nome rol sedec de lavof firedhef bejnoj ava. Uki hanoh cukje ecrevlak iwcovo vo voof bovihba uhiusreh nam me so po duzu. Ih gu', 1, '2018-03-19 13:34:23', NULL),
(10, 'https://i.pinimg.com/736x/12/19/4c/12194c156f7bbb518364d8f49b412953.jpg', 'Pink Floyd', 'antirouille', '20:45:00', '2018-07-01', 'Sov er lopcam win go bo tafjobe uf caku rolje cuk teimeba kib nek vujpaz mius ho. Wevasba je jo piseoje ocusow isa ro tubi gaigo nome rol sedec de lavof firedhef bejnoj ava. Uki hanoh cukje ecrevlak iwcovo vo voof bovihba uhiusreh nam me so po duzu. Ih gu', 1, '2018-03-19 13:34:23', NULL),
(9, 'https://7zic.fr/wp-content/uploads/2015/02/affiche-concert-james-brown.jpg', 'James Brown aka Mr.Dynamite', 'rockstore', '22:12:00', '2018-02-22', 'A show for the entire family\r\nBlalalalalbalablabalalababbalablabalbalba', 10, '2018-03-19 13:34:23', NULL),
(14, 'https://i.pinimg.com/564x/5a/3e/dd/5a3eddf377ed8204365134091002f411.jpg', 'Otis Redding', 'rockstore', '20:50:00', '2012-11-22', 'Et ral podune vi hit rohe mumbeaj bajumi zindeowa zuc irveowa ikho kiev mo doho. Sa mo zebhe je dafputhu tojaaf dujim codzitfun pavejid sesuw gahgo miatitor kezjohu baperged kodukpeh. Zicsij nub zos hacoawi koref defu ka bodu hocza fugubro hap pushakma ki', 10, '2018-03-19 13:34:23', NULL),
(15, 'https://s-media-cache-ak0.pinimg.com/originals/a7/5f/c8/a75fc8aa2dcf2c82ab3edd0a80ae64c9.jpg', 'David Bowie', 'antirouille', '20:45:00', '2015-07-03', 'performing as ZIGGY STARDUST<br />HammerSmith Odeon<br />48 Queen Caroline Steet LONDON', 1, '2018-03-19 13:34:23', NULL),
(18, 'http://sandinista.s.a.pic.centerblog.net/cd4d0a74.jpg', 'Jimi Hendrix', 'Fillmore East', '20:00:00', '1969-12-31', 'Jogvek amkeju okatuc jedta bege alwod piobufo row ge bedarjaw wiwlinha dejohas. Potman wu pehenal eb wucto di efide zonpafgec owokocu mow kutva bevemiz te bipvaeh ofo zahhohrar efejuk. Vikik dug sut ruhzigat jappuj ki zup toadonom lif igoazo to bife vozpe', 1, '2018-03-19 13:34:23', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `lieux`
--

DROP TABLE IF EXISTS `lieux`;
CREATE TABLE IF NOT EXISTS `lieux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_lieu` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `upload`
--

DROP TABLE IF EXISTS `upload`;
CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `crea_page_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `upload_nom` varchar(50) NOT NULL,
  `upload_description` varchar(255) DEFAULT NULL,
  `upload_filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `upload`
--

INSERT INTO `upload` (`id`, `crea_page_id`, `user_id`, `upload_nom`, `upload_description`, `upload_filename`) VALUES
(37, 15, 1, 'David Bowie', 'classe!\r\n', '6a9cfeb60dc56df36c718fcb12fe3959.jpg'),
(38, 15, 1, 'Bowie', '', '47f6f477f834818cdb99e9c2ad550670.jpg'),
(39, 15, 1, 'david bowie', 'noir et blanc', '2dc8fd492c1eb056c31ee8dac4deefc4.jpg'),
(40, 15, 1, 'bowie + public', 'sur scène', 'bb96984eb719536dc985b0b50067f78f.jpg'),
(41, 12, 1, 'acdc', 'horn', '0bb2cc5f03f3022123937b73e357c91c.jpg'),
(42, 12, 1, 'ACDC', 'brian et angus', 'e943238fde2a4b0266177d04b086977d.jpg'),
(43, 12, 1, 'angus solo', '', '9226d1c0ff665ba82e0cb7c00ca9642b.jpg'),
(44, 15, 1, 'cdcd', 'cdcdc', 'f61ee99dc5bb58adebc1f0dc077ee006.jpg'),
(45, 15, 1, 'dcdc', 'cdcdc', 'aee128e1cde599861035bd79ae142544.jpg'),
(46, 15, 2, 'd.bowie', '12', '9c34acf5b551a8111a68752701b1bf6e.jpg'),
(79, 13, 1, 'EilCbpkea\'', 'Fos tosoda huboc ew zowraw lukadi romav izohi co aca rodoja rekzuva junpela uv. Bib ka doocwo kiic du jukawa fuuwi pe puluko eseso sitceve newbuabu wa siw vidzil. Efhumih naddaiz cilvu gegi caanu su ico dalimiz nimta ecmin gonfar roluv. Oh ga lanurlat jig', '3141f71b328322928e58b19e51de1714.jpg'),
(49, 14, 2, 'Otis REDDING', 'on stage\r\n', 'f9e3cd9c22307a9f58c51daaebeb6199.jpg'),
(50, 13, 2, 'zappa', '', '24a94d3d88c93e213f83ff11a6812759.jpg'),
(51, 13, 2, 'F.Zappa', '', '8251fb5d4d2c6529039f07bb0e3034db.jpg'),
(52, 13, 2, 'freank zappa', '', 'a903a8f256000903a910f7579ca2b92d.jpg'),
(53, 9, 2, 'james brown', '', 'eecc21c161656469f58013faa1794ba9.jpg'),
(54, 9, 2, 'mr dynamite', '', '04eff60fa3d42a126913f2ac26270d91.jpg'),
(55, 9, 2, 'JamesBrown', 'color\r\n', 'a4dabd4d3eb57de75152b21da010faf4.jpg'),
(57, 9, 1, 'J.B', '', '3154a07b4c2bc09f7b350646ec007c18.jpg'),
(58, 10, 7, 'pink floyd', 'aarar', '7fc85c172925c19cf1efa84c5f937a7d.jpg'),
(59, 10, 7, 'David_Gilmour_and_stratocaster.jpg', '', '00e83ebb567d7f63e7f7e866476d648f.jpg'),
(60, 10, 7, 'dsotm', '', 'a0c2d905a8dfeb3708b78e16c8052134.jpg'),
(61, 10, 7, 'pink floyd12', '', '910771eba7af148b5ddb12d012e26bf1.jpg'),
(62, 10, 7, 'darkside', '', 'dd2a5eed0299d520e84922990560b705.jpg'),
(63, 10, 7, 'David_Gilmour', '', 'ba220fbac85d8f00e25214e14c2eddf8.jpg'),
(64, 18, 7, 'Taapur fyng t', 'Uk nanurmo det gazikef cewas hav kegin usupe dokro igbu wafpi tu magzicar hud. Fuzge agoab zicojli lulgite sozizus hufsafoc wikah di peclotki epo ho ducride ed ipodebej kannadriw lebasib. Huwitsuw aza cephi ew vaf gikdil lufozigub umakesih puvzater tu dur', '12e6e8652c3d8a9199f597c7dd0d66b3.jpg'),
(65, 18, 7, 'Gh um', 'Mab feznul hufar evojujo ogelacep aneikevop ijigorum afuzoti makiw om ulog butkete. Mokema joad ojuce zurad jeve be vuliuk gazmofjo tin tamok uvigoci cegcuh. Gu sovjerzow gawjojus idaic zi evu siwfikab ga zucutnig cerra ozekojaw uweto rewuvi go at. Litav ', 'f6a5ea879ad2e8979c4f6f584435b608.jpg'),
(66, 18, 7, 'Lpsn', 'Usub rowbabu ewij butomle rof curron low egicuige gubicem tuitomak ubwitir vaodeuz tilvu aweguar sansekog sig cageguem. Verohim ir vu leubope piihi rape evo ejvuike rok wuv nujjuic hile wumrubnop ah wozzemen evo. Lolobsap ku tunodogov tulasavo gejtiju sew', '588fad9bd7e08f456d11e49288de18d0.jpg'),
(67, 18, 7, 'Uiama', 'Okhob vecofebe casuuro awuopikoh tokif pimcuij utidara ah gurvasu tok lihzit welfug men zane kuuk ad da maevo. Fistejod iv vucjuga zab jajwusfat ra veped iptu niknafof ofahido cek jozjap ji to cingorec buweicu ti. Paf kelwo iw zarpo ragek bidibeg rismut l', '2be747560519040bc88ead3f2efcd7d9.jpg'),
(68, 18, 7, 'H', 'Keas relez vogad ezgigav apu je injof wuofi lufsucak owiak wozgap siundu keaz go deffu ar rah. Hotsu lasdolve fe jarso uduhe zupsusoh isvovu jek guhipaba va tefir ifaivobef juczad zohrajaw. Ras gi eszaz uw upuzoh new vazup do olagid huv tagwij mekalba uza', 'edd81b7590e057cb041dd82b515d1be9.jpg'),
(69, 18, 7, 'Aahay', 'Padpekji reliw cezwohoj wujwebov il ada su na rahinwoh kohbih sa ru foevi. Gusetil ojufepfac ebocage apru ibu cofhah eh tocom buzmiv hoccodko weh gehkagem or. Po cotihuji ulote tucam ka datuwloh ima se jundina saduf gati akoj saptesop puh ki lebawipap rac', 'd2dd9052e35e916848437a49b6d353af.png'),
(70, 18, 7, 'Iamon ut nUakiu', 'Wiluzal sinkaero isudiv vej imsukbu pufhazcu mofim ol cetu vulaguh ura to boz ewawucjen fawjo utuwav. Pofe cuguoz ilici leb ugbo bakus peape vu vusasupi lof fiapa zacoaf bod mulomvi jereskak uf fa. Lemefves je mokad mi tud ke ha eniko foir tajigos jozemot', 'b9928771f9de49473a9bd546803d2168.jpg'),
(71, 12, 7, 'Haf aouha', 'Pojus nonol nono tol kelus cadaeje eveode icfitun jel jajhu vukulsim na hoda od. Juni nekmo jo dihhut lati talu babaro dot lo wip ku veklune ril hehlete iplot lakze azihaged. Vesan zukduwiz lajvevus wor zimni vukpeho sukheuh or so azuvi casjojiw ticfed ko', '83fdb772948aee3c0a618e3afdd93bd8.jpg'),
(72, 12, 7, 'P l a', 'Lo jek tufiti ed tekaw eke howlunif pinalo cemfez pabanene fato ojonovvov. Kepev pusovul mewfaisu dotpodib esadepik petjiv ladefif kegika alne felatan tujipopo bi ovzovo oviwarnoh odcoh kihcadgeg dego. Ko hu itauko doofeta cufud ta wevujum sutfedko ibvaf ', 'ef54e980fdbb511ebff1863db1f3c517.jpg'),
(73, 12, 7, 'Yhuantah eh', 'Budavap gewen avivozko ucu uva tebgobre hukho gumu nihtodvi ajureuk fa mekbet. Jabba zeohvo bov apopowani wife ga nicvu zom gobbe vanab nimpupdi afaozufo. Zu for rogewi ragenac tasteac ire emewo cune at veisbu ekunumej irhoj muhu rel. Hezop degdedeg ekmif', 'cb2a3cda1a44beeee4df61597bd8d590.jpg'),
(74, 14, 1, 'Aanktnmti', 'Gujjijlo zod bid nazcuupe mik rup esi te vetu mibfemrik kapmebe raku av li. Wowev tudfabok godunho roras feadju garadmal hagap daluzav cog lo daacu urub jehse. Liidood wo lefvegas ulgupuj fole siasaju kisne mukacan winza par ripha nife el ave. Te fam ihsu', '30c4c1250c13c0df661ef49c94b2cc27.jpg'),
(75, 14, 1, 'Aanktnmti', 'Gujjijlo zod bid nazcuupe mik rup esi te vetu mibfemrik kapmebe raku av li. Wowev tudfabok godunho roras feadju garadmal hagap daluzav cog lo daacu urub jehse. Liidood wo lefvegas ulgupuj fole siasaju kisne mukacan winza par ripha nife el ave. Te fam ihsu', 'ac57cd8a449bf7513f1f47627d59ee9c.jpg'),
(76, 14, 1, 'Aanktnmti', 'Gujjijlo zod bid nazcuupe mik rup esi te vetu mibfemrik kapmebe raku av li. Wowev tudfabok godunho roras feadju garadmal hagap daluzav cog lo daacu urub jehse. Liidood wo lefvegas ulgupuj fole siasaju kisne mukacan winza par ripha nife el ave. Te fam ihsu', 'b4ac9f54e429cb0a5932190bf7bb3cf0.jpg'),
(77, 14, 1, 'Aanktnmti', 'Gujjijlo zod bid nazcuupe mik rup esi te vetu mibfemrik kapmebe raku av li. Wowev tudfabok godunho roras feadju garadmal hagap daluzav cog lo daacu urub jehse. Liidood wo lefvegas ulgupuj fole siasaju kisne mukacan winza par ripha nife el ave. Te fam ihsu', '322fe7a5e1ce4cefc5996b86c3b0634e.jpg'),
(78, 14, 1, 'Aanktnmti', 'Gujjijlo zod bid nazcuupe mik rup esi te vetu mibfemrik kapmebe raku av li. Wowev tudfabok godunho roras feadju garadmal hagap daluzav cog lo daacu urub jehse. Liidood wo lefvegas ulgupuj fole siasaju kisne mukacan winza par ripha nife el ave. Te fam ihsu', '333b746f729b619fd614917f395c18ea.jpg'),
(80, 13, 1, 'EilCbpkea\'', 'Fos tosoda huboc ew zowraw lukadi romav izohi co aca rodoja rekzuva junpela uv. Bib ka doocwo kiic du jukawa fuuwi pe puluko eseso sitceve newbuabu wa siw vidzil. Efhumih naddaiz cilvu gegi caanu su ico dalimiz nimta ecmin gonfar roluv. Oh ga lanurlat jig', 'f830b8c1243d374bdd13489dc841178a.jpg'),
(81, 13, 1, 'EilCbpkea\'', 'Fos tosoda huboc ew zowraw lukadi romav izohi co aca rodoja rekzuva junpela uv. Bib ka doocwo kiic du jukawa fuuwi pe puluko eseso sitceve newbuabu wa siw vidzil. Efhumih naddaiz cilvu gegi caanu su ico dalimiz nimta ecmin gonfar roluv. Oh ga lanurlat jig', '8e027bb0d5c4b1f8a3b08d4c19adeba8.jpg'),
(82, 10, 10, 'PINK PIGG', '', 'e560f1dba7cf4ddf434adc6f4a48fbd3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `autorisation` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `pseudo`, `autorisation`) VALUES
(1, 'kartoffeln@hotmail.fr', '$2y$10$2G9OHYMpwHvhUdfiFKcA1eiDEBQ3ns70Hj8NQ/thp/y23poDOjk/W', 'Ouam!', 0),
(2, 'fleffy@hotmail.fr', '$2y$10$cZtAl8IQKzKAyxfz6h8AxOTNIKpK32lu7fEzRkOV8DcwPVo8o0TP6', '', 0),
(6, 'fleffy@hotmail.fr', '$2y$10$lkO2uq/m3jTsY6KgWztBtetswYwU6jy5H4xiEI04S0KBMZdhyAJze', '', 0),
(5, 'fleffy@hotmail.fr', '$2y$10$pKNlu3dBaTndSWAkss.UjevlC09lalLwtV0EPo9S4OjI.8VSbk0pu', '', 0),
(7, 'kikite-@hotmail.fr', '$2y$10$zJVPRpdC1hEOc2mn7YOuJ.r.vaxvulBDZyoQvBzWUuPnByEnulAMe', '', 0),
(11, 'lezuwaj@ralepwe.net', '$2y$10$Sk6SNc.HTXoQoY1O8ek/buynH7Ht1OUoLN3BqmOr5SSdscP.t5kT.', 'Nulpaa tm', 0),
(14, 'cpas@hotmail.fr', '$2y$10$3lmT3xwvOnKiY0y4EWQ.N.aHTuj1fVPJw6a4piTlnva953mWo1636', 'Euuuuh', 1),
(10, 'bob@hotmail.fr', '$2y$10$pHahjmCoqhFq8rlhY.cTjeM0sYc/9/sUNxU23UM.vlYHugp.IRwwO', 'Sponge', 0),
(12, 'lezuwaj@ralepwe.net', '$2y$10$8T9k0jKwsIXC.98tn5vpPuYQCABGQoswNYSq6L8.e82bGtstCE0GO', 'Nulpaa tm', 0),
(13, 'bob@hotmail.fr', '$2y$10$zymNhncYToUjPCPqL7i7GO7kPvLFZp0tFzrdBkeW7es13AYhff5BC', '', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `crea_page`
--
ALTER TABLE `crea_page` ADD FULLTEXT KEY `search` (`titre`,`lieu`,`description`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
