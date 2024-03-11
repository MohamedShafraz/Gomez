-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2024 at 06:01 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gomez_hc`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceptrequest`
--

DROP TABLE IF EXISTS `acceptrequest`;
CREATE TABLE IF NOT EXISTS `acceptrequest` (
  `requestnumber` int NOT NULL AUTO_INCREMENT,
  `patientid` int NOT NULL,
  `test` varchar(40) NOT NULL,
  `requestdate` varchar(40) NOT NULL,
  `paymentamount` varchar(40) NOT NULL,
  `paymentlink` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `requestime` varchar(40) NOT NULL,
  PRIMARY KEY (`requestnumber`),
  UNIQUE KEY `patientid` (`patientid`,`date_time`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `acceptrequest`
--

INSERT INTO `acceptrequest` (`requestnumber`, `patientid`, `test`, `requestdate`, `paymentamount`, `paymentlink`, `date_time`, `requestime`) VALUES
(3, 415, 'sndjkf', '2023-11-07', '5161', 'http://localhost/Gomez/View/labassistant/labassistant/lab_payments.php', '0000-00-00 00:00:00', '05:55'),
(4, 416, 'sndjkf', '2023-11-07', '5161', 'http://localhost/Gomez/View/labassistant/labassistant/lab_payments.php', '2023-11-21 22:19:36', '05:55'),
(5, 417, 'sndjkf', '2023-11-07', '5161', 'http://localhost/Gomez/View/labassistant/labassistant/lab_payments.php', '2023-11-15 22:19:56', '05:55'),
(6, 418, 'sndjkf', '2023-11-07', '5161', 'http://localhost/Gomez/View/labassistant/labassistant/lab_payments.php', '2023-11-23 22:20:09', '05:55');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `refence_No` int NOT NULL,
  `Appointment_Id` int NOT NULL AUTO_INCREMENT,
  `Doctor_name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Date` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Appointment_Time` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Age` int NOT NULL,
  `Nic_No` int NOT NULL,
  `Days_left` int NOT NULL,
  `Total_Amount` double NOT NULL,
  `Patient_ID` int NOT NULL,
  `Payment` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pending',
  `doctor_id` int NOT NULL,
  UNIQUE KEY `Appointment_Id` (`Appointment_Id`),
  KEY `reference_No` (`refence_No`) USING BTREE,
  KEY `doctor_ibfk_2` (`doctor_id`),
  KEY `patient_ibfk_3` (`Patient_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`refence_No`, `Appointment_Id`, `Doctor_name`, `Date`, `Appointment_Time`, `Name`, `Age`, `Nic_No`, `Days_left`, `Total_Amount`, `Patient_ID`, `Payment`, `doctor_id`) VALUES
(0, 7, 'Sajini', '08/11/2023', '11.00 AM', '', 0, 0, 0, 0, 7, 'Pending', 3),
(0, 8, 'Sajini', '08/11/2023','09.10 AM', '', 0, 0, 0, 0, 8, 'Pending', 3),
(0, 9, 'Sajini', '08/11/2023', '11.00 AM', '', 0, 0, 0, 0, 10, 'Pending', 3),
(0, 10, 'Shamath', '03/15/2024', '12.00 AM', 'sam', 23, 2147483647, 0, 0, 7, 'Pending', 4);

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
CREATE TABLE IF NOT EXISTS `contact_form` (
  `name` text NOT NULL,
  `mobile` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`name`, `mobile`, `email`, `message`) VALUES
('1', 0, '', ''),
('1', 454545, 'samaralagannthayaparan@gmail.com', 'jhvhvhvu'),
('1', 454545, 'samaralagannthayaparan@gmail.com', 'jhvhvhvu'),
('1', 454545, 'samaralagannthayaparan@gmail.com', 'jhvhvhvu'),
('1', 454545, 'samaralagannthayaparan@gmail.com', 'jhvhvhvu'),
('1', 454545, 'samaralagannthayaparan@gmail.com', 'jhvhvhvu'),
('1', 454545, 'samaralagannthayaparan@gmail.com', 'jhvhvhvu'),
('1', 0, '', ''),
('1', 0, '', ''),
('1', 0, '', ''),
('1', 0, '', ''),
('1', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `Doctor_id` int NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `age` int DEFAULT NULL,
  `gender` set('Male','Female') DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `Specialization` varchar(45) NOT NULL,
  `phonenumber` int NOT NULL,
  `NIC` bigint NOT NULL,
  `Username` varchar(20) NOT NULL,
  PRIMARY KEY (`Doctor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`Doctor_id`, `fullname`, `age`, `gender`, `email`, `Specialization`, `phonenumber`, `NIC`, `Username`) VALUES
(3, 'Sajini', 30, 'Female', 'Saj@live.com', 'Family Medicine', 777123456, 200072500741, 'Saj'),
(4, 'Shamath', 40, 'Male', 'shamath@gmail.com', 'Heart specialist', 766414957, 200124900065, 'shamath');

-- --------------------------------------------------------

--
-- Table structure for table `gm_admin`
--

DROP TABLE IF EXISTS `gm_admin`;
CREATE TABLE IF NOT EXISTS `gm_admin` (
  `GM_AD_ID` int NOT NULL AUTO_INCREMENT,
  `GM_AD_Name` varchar(45) NOT NULL,
  `GM_AD_Phone_Number` int NOT NULL,
  `GM_AD_User_Name` varchar(45) NOT NULL,
  `GM_AD_Profile_Picture` mediumblob NOT NULL,
  `GM_AD_Security_Question` text NOT NULL,
  `GM_AD_Security_Question_Answer` date NOT NULL,
  PRIMARY KEY (`GM_AD_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gm_admin`
--

INSERT INTO `gm_admin` (`GM_AD_ID`, `GM_AD_Name`, `GM_AD_Phone_Number`, `GM_AD_User_Name`, `GM_AD_Profile_Picture`, `GM_AD_Security_Question`, `GM_AD_Security_Question_Answer`) VALUES
(1, 'Mohamed Shafraz', 777123789, 'Shaf', 0xffd8ffe000104a46494600010100000100010000ffdb008400090607100f1015101210151515151515151515151515151515151615161715151515181d2820181d251d151521312125292b2e2e2e171f3338332c37282d2e2b010a0a0a0e0d0e181010172b1d1d1d2d2d2b2d2d2b2e2d2d2d2d2d2d2d352b2b2d2d2d2e2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2b2d2b2d2d2dffc000110800b7011303012200021101031101ffc4001c0000030003010101000000000000000000000102030506040708ffc4003e1000020102040305060403060700000000000102031104122131054151062261718107133291a1b114c1d1f04252821533627292e1234353a2b2c2f1ffc400190101010101010100000000000000000000000102030405ffc400221101000202020105010100000000000000000102031121311204134151617114ffda000c03010002110311003f00fa944a44a2d1a6148b44a2900d14848a4034521229055229128a20a43424340521890d00d0c468fb53dabc2f0da6e556779daf1a516b3cef7b5972d9eaedb3e806f467c638cfb6aa925970b858c1f39d679d73b25185bc35ccfc8e1e7dbae22ea7e21e2eab6e6ef1cf3506b47654d3cb04b6eea4fc59746dfa7c0f82f0ef6d18da2b255a34abd9fc7ac24e3d1db4bf8db9ec7d6bb1bdaec3715a2ea51bc650b2a94e5f141bdb55a493b3b35d3934d1343a00000a62000000000000000000180860000040c05700ad1229128a46985c4b4422d0148a24a403452121a0aa452121a20a29128a01a1890c0d376c38f478760ea621d9c92b538b76cd37f0afbb7e099f9978cf12ad8aa92ab5a72a95656bcddbcb925e492b6c958ee3db671ef7d8efc3a7ddc324adc9d59a52949af04e2bd1f538bece605e23134e2dd96657bf45cbf7d46f51b588dce9b8e0dd82c5d78c6568c232b3bc9fd6c6de7ecbaa27ae257a537fa9f50c1d1518a4b65a23d5563a6c793debcbdb18290f8ae33d9be2a116e13a73b2d177a2df9723d9ec43172a3c5bdcc9b8e7a5529b83bddce36924fc56496e7d49c5f4395fecc8e178f60f19182cb5e53a53bad2355d3946335fe269dbfa5f53a62cb369d4b9e6c3158dd5f5f1808eef30180008060020000001000c043000000000003468a44a2d159522d108b40522912861549948945a440d14894520291489181486848a407e5ef697dde2f8c57ff9bf494212ff00dbe87afd9c56a54ea4eb54cd27156a708c5ca526ef7cab6d12ddd96a74bed07b1aeae3b195eed394a3553bac9eed51a5177bdb572f79cec947c49f65d8074d5585486b78eebaded6f44be672c978f19876c78ed1312f6e3bb455e7274e76c2432b966528ceb492695bf961ba7cf73491e3589f791586c6d59a96a9545179acda7adb6ba677989ecb46725513b495eddd8bd1ff000bcc9dd6cf93d11e6afc13dd34e738a96d16a2ae9be89b6afe8718b44474f4784ccf6e76af69f894611738528d3729c3dfc6f252708c9fc3b46f95abddea8f3767f8956c5d6a32ad899d58c6bd39c614a9de778495a74f2c7569c95d59ab5efa5cec7155704a94b0752a45e4845ce39939435cca727ca5759afd4f2f04e07eeea46b51aeef1778cb2d26d297c493c9b346ab7889eb4cdf1db5dedddf662be2ea42a3c4a8a6aac9534ad9d534a36555c7b8e6a5993cba686e4c586a11a71cb1bdaf27ab6db7293949b6fab6dfa994f4bc8602180000800004c00040030000018800600203488a44a291595a2d108b405228945053452121a20a452251480a4344a29014862430383edfe2f0f4b134a962a6a14b134dc6327a25528cd3719cb64a4aa46d7d3b8faa3c1869c233bc64a4bf9a3b3b3b27e3ba36ded8782fe2f84d6cb4d4aa51b55a7a6a945af7b6b6bfdde7d3c8d052a51a3469a8fc3920fd32afd11e6cd5889dfdbd786f331a9f874d2c434aeba1cc627b4143deba536a5369dd49d9457afe87bd631c9654ed6b7adf5e679387534e553ba94a526e4e4adb68acf99c23b7a3f8e76a6069cf3659cf2c9c9da9d2a924f35ef793f88ddf66f1f9ebaa0b74a39b471e692bc5eb17aad3c8f063f0724da78b71e918a4ede6dbf146e3b1f47de62e946f9b2acce7cda85ece5eb97e68edaf262f35ac70fa90080f53e798c430a04000048c004002018080060218000001a445a31c4b4561911488452606445231a6520ab4cb46345a22a914894302868430290c9461c66361463793f25cdf90197139724b3d9c72cb327aa71b6a9ae963825878d4a592d6b7c36e4972371c6388d4ab1ca9658bdd3de4b926fea78306d256e879bd445b8e387abd36b9e797238ac455c3cdc7972e9fbd8d657c74d3cf1579377c926ed7b79dadaec767c5b06aa2d95ce671bc3e51bdf55fbb1c2b677b55a18c71b8baca318669cb4518b496addb56ecb7ddd8fb0f617b333c141d4af28baf38a8b516dc6105aa826f777d5bf05d2ef9aec1e16d88a6edd5dfca2dfe87d38f5e3e636f265dc4e8c648ceae2631200a6048c0004000c40200000018c90b80c0570034a8b4628b2d32b0c88a4c84520ab455c8430322654598d1682ad32d18d16882c99cd455d8a53495df23595e6e77ccdf9276b7aadcb11b499556c6549df2f763b27a5df8ddf2f43c118a6da77cdbbcdacbcefd055f0fd2524d6cd49a6bd79fadcf055c54a1fdf5dc13d2b455a74fc6a47a7f8969d55b53ac433b7bea47a9e4c460efac5d99e9a388534e2da6d5b67a493f8651f0767e4d31d1e9f27d5115a5c44e71d26b4eabf346b319276ea9ecd733b09524d6c6b711c1a136dc1b83e767cfab4f47ea8f3dfd356798e1debea2d1c4f2e72b62aa61e9bab4eea71cae296efbcaf15e32575ea7630ed3d4a2d42b53ce9fc3522d47378493d14be499aea1c2257bcaa66b6ddd8afb25a9ef960a138e46aead6b3358f1cd6352ce4c9169dc37bc378cd0c45d425692f8a1359671f38bfbaba3607cef1dc3a706a507de8fc127d3fe9cfac5fd0d9767f8ebbeb74ad69425fc324ecedd35ba7cb67b33a4d3e9cf6ecc0c542bc66af177b3b3ea9f46b9192e61a30100005c1880040201d805715c0602b826055c057003488b4624cb8b2b0c88b4634cb415699442280a4522132d302d168c68b44579f884ec92eafedffd3c12919b89cbbc97457f9b7fa1e572bf9adfa9d6b1c3128a926b67e8ff0053cb56ba6ecfbb2e57e7f949175137b4daf2b3fa34cc1570f524acf2545d24b2bf9abafa1b46b1a74aa655a2bdd2e4aff128bfe57652f0cb2ea6ef06db4d3dd3baf5d6ebc2f73458ba3520d4945f75e91934d6af54a77b795ecfaae6b61c271b9e9a7e71f1eecda4bea4921bb8eba8a70e68c74a7a1e88c8cb4f24aa5a5ae97d9f5f06668c93d1e8ff007b18b1f47341db96a8c182c42945296eb9f4f303db3a77d1a39fc7e1552a8e4b69eefc6d95fcd65ff42ea74319f27b9e0e3b4af4afd1dbe7a7decfd0412f4702e2195b6f69b57f95933a6b9f3de19536d974b5dbfb591d8f08c5668e4d745a5f7b7892f5f95acb640485ce6d1dc4261700010000804c02e17109b028090034c99713122d1586545a31a2d055a291099405229320a40644cb4634526456a71f52d5da7ce31fdfccc3529df9d9ad9afb333f1ea69384edbbc8fd758dfd55bd4f353ab38e8e2e51eab75e68eb5e989629fbe5bc212f14dc5fcb5261965a4a195f252d1bf277b33614e5196cfd1ab172a69ad63a7a1ada69ada904ae9a9ae5de8b92b74babb4be9e069a11fc3c9a8eb194b3475bdaf77257f07f91d54528e89dd74dede4f91afe2f845529b9283cebbcb4b666b978f4bf88dae98e8576fe5a9eea754e73055babd79ee6d69561303697ba34b87769ca1f23df4710af666b31d2c95d4b932412f7d2c4dbbb2e5b3fc8cb8b5ef294e2b77176f3e5f53c9895cc8a38ab6e15a7e1952e977a4972ba4e3f4fcce9303899536bbca4b95b73915898d1ad560da518c9caf7d3249296b7d15aed79246f7854a759664b24394a4bbf2f1517f0af197fa519bdeb58e5694b5a7876985c429ae8f999ae727560a2ef7936acd372774faae9e86ff8763d565d24b75f9af03cd5cd5b4ea1def86d58dbd817105ceae42e02b8000985c4c0420b8807719200699168c51664469cd95329331a65a22b2228c69949855a2d18d329303222918d32d0560e2749ce8ca2b7b5d79a775f635784af9927d55cde2671bc7f8cd3e194ead4a91be59455185ed9e555b708df92be6bbd6ca2f7d8b59d24c37f52a4631cd36a2b6bbd2edec9757fbb12aa5fe187f54eebd5477f47639be17567524ab566a5564b97c14d3fe0a69fc2b6bbddf33a0a358f35fd4cef557aabe9b51bb33a84b9cedfe5492fadfee3cb6fe297cff2d8acd7460aaec729c96fb748c75fa72bc5dac3d66a52494af28b7a5f5ef2b783fba32e0f1aa5b2979db43dfc469bab28c538295f473867495b5b2bad745ccf451ecf4656756ace7e17c90ff4c2da7836cf5533c78f3db85b04f971d3cf271a90728359a3ab5d7a9e5e25888ca10a975e3fbf4fa1d650c3469c6d18a496892564bc918ead25257c975e287bfaf84f63f5cfceaa715e478ebbd3737f2a10e705f24cc75303424ad2a7169dd3ba566ba7d49fe88fa6bfcffae1f03c05e3311efead497bb5954230b25514758ce4ddf9b76d3927d0e9e9fbea73714b346fdd926aeffccb933671a14e3a28c52e5a09cd2dbe5f91e4bda6dccbd3488ac6a1e59e76be1b79bfd2e60a152ad297bcccb327b46f6b7477dccb89c5a4b735988c53e4fa1cba9dc3a771a7d030b88556119ada4afe5d57cccb7345d90c4e7c3db9c67256e89eabeecdd9f46b3b8897cebc6a66157105c5734c8b92d8d92d809b15c192e411570233a00ad3c4b4cc49971669cd9a2cb4cc49991322ad328845261568a4cc6996981910d32132901911c77b4ceced3c761929b9251926dc5ea9acca2f5d1fc525fd475e99188a2aa42507b4935fee07cf382d574e31a52966714966695e5656bbf1d0ea7093ba395c65074b47a4949af95ee8dbf08c5e648f166a785bf25f430dfce9fb0dfc5935224c351ceaa8ee61a796542ed37ba775e0cf4ac4cd6d97d57fb9e2af8f8ae66bebf14489bd2cc6db4c6712ae9371845f93b37e49e9f538eabdbbab19fbbab9a93bfc33497c9ecfcd1b49e3e52bd8c3f828cf5a969785b41e469ecc1f195556953ea8f54eacada4ae7258fe054536e9c9d197274da4baeb0f85fc8d52e2789c34ad3929c794e3a3f58f5f2653a7715715517f0bd8f3fe3daf89335184e38dc5377b3d9b4d5edbd8f57f6a45ae46661634f5cb882628574f5d0d6d5c747f951e0c5e253da56f05a226976eefb398e8c6b460b6a89af549b4fe8fe675c7cbfb06e55b1716aed535294df2574e3157eb77f467d3cf661df8f2f167d797077015c573b381882e2013131b25b0100bf7b0c2b45165c59862cca99a61991699862cca9906445231a65019132918933226156994998ca405a293210c0e63b57c3bbeab6b95e8edca5d7e8bd51ce70caf2a737756599e5eb97af86a775da393584aad6f957fe48f98e3715386269534efce76e6a4ac97a6e63253cebfc75c393c2dfd7d1b015f324cbc561d54e76673582c6ba7a5f47b7999715c465ba678b6fa1e3be5eac670e56f88d255a2a0f564d6e36f55735b88e2129ead5972328d8cb194e3ccf2d7e2fca29b35552a4526e4fe6ec8f32c6393b528ff0053dbd173375a4dba62d688edefab886fbd5659574b9abad8f75d7fc18da29d9c9ab3f48f2f366d309c1dd496795e4d276f06f43d581e14a8d5775dda968b5f67f3fb9eaa60d76f3df3ef8874becedc6b60e587ab153509bd24b32b4b6dfc549fa9b0afd8ac249de2ea43c2324d7fdc9bfa9aeec65274713529f29c5bf58b56fa391d99b9ac4f6e3e531d34d83ec7e0e1ab8ca7fe7969f28d8dcd1e1d420b2c68d34ba2847f4d4a8b32a622b11d413699ee4a85185356842315bda315157f245dc405455c5710807713602086d90d8db25b0a77026e0073d19196120034c32c596980019132ae0040d32e2c000b4ca4c0029948002bc9c5945d0a8a5b6495fe47ccf8250f7b5e75a5d5d800d55258e78e9c6b4946d6becc8e218da9fcb9573775f40039db0d6676ed5cd7ac69a5fc4cdb7b1329547fc5f2b001631d63e13dcb4fcb2e1f08dbd5dfcf5377c3705aab5800dc43132e9f0d4945592ff73cdc4a3b780c0db0f7f0d9dab539f56aff00d5171fbb4755700395bb6a05cc94e63022b2058000570b80005c5700025b21b0020570001b1fffd9, 'When you met them', '2018-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `lab_assistants`
--

DROP TABLE IF EXISTS `lab_assistants`;
CREATE TABLE IF NOT EXISTS `lab_assistants` (
  `id` int NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `gender` set('Male','Female') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(45) NOT NULL,
  `NIC` bigint NOT NULL,
  `phonenumber` int NOT NULL,
  KEY ` lab_assistants_ibfk_2` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lab_assistants`
--

INSERT INTO `lab_assistants` (`id`, `fullname`, `gender`, `email`, `NIC`, `phonenumber`) VALUES
(6, 'Bhagya', 'Female', 'Bhag@live.com', 200187500274, 755123456);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `profilepicture` blob,
  `password` varchar(64) NOT NULL,
  `registration_date` date DEFAULT NULL,
  `age` smallint DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phonenumber` bigint DEFAULT NULL,
  `nic` varchar(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `guardianName` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `guardianPhone` int DEFAULT NULL,
  `guardianaddress` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `guardiannic` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `type` varchar(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`ID`, `username`, `profilepicture`, `password`, `registration_date`, `age`, `email`, `gender`, `address`, `phonenumber`, `nic`, `name`, `guardianName`, `guardianPhone`, `guardianaddress`, `guardiannic`, `type`) VALUES
(7, 'Sam', 0x69636f6e2e706e67, '075781df9cd7c79b4802a5807e40d0dd', NULL, 18, 'sam@live.com', 'Male', '17/71,kings road, colombo 6', 777123456, '200126200277', 'Sam', NULL, NULL, NULL, NULL, 'register'),
(8, 'Sham', 0x69636f6e2e706e67, '1ab0bd3dca4d3c69d1e3662b0cf5fd4b', NULL, 18, 'sam@live.com', 'Male', '18 kings road trincomalee', 777123456, '200126200277', 'Sham', NULL, NULL, NULL, NULL, 'register'),
(10, 'hello', 0x69636f6e2e706e67, 'f3b6e1995314986a85e69c2ec2df0356', NULL, 0, 'hello@live.com', 'Male', '12,Prince road, Wellawatte', 7771245678, '200134704158', 'hello', NULL, NULL, NULL, NULL, 'register'),
(14, 'sami1', '', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 18, 'samar@gmail.com', 'Male', 'colombo', 766414945, '200124900076', 'sami1', NULL, NULL, NULL, NULL, 'register'),
(15, 'sam34', '', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 18, 'sam@gmail.com', 'Male', 'colombo', 766414598, '200124900076', 'sam3', NULL, NULL, NULL, NULL, 'register');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

DROP TABLE IF EXISTS `prescription`;
CREATE TABLE IF NOT EXISTS `prescription` (
  `prescriptionnumber` int NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `age` int NOT NULL,
  `patientid` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `decease` varchar(30) NOT NULL,
  `prescription` varchar(100) NOT NULL,
  `labtesting` varchar(250) NOT NULL,
  `otherremarks` varchar(300) NOT NULL,
  PRIMARY KEY (`prescriptionnumber`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prescriptionnumber`, `name`, `age`, `patientid`, `decease`, `prescription`, `labtesting`, `otherremarks`) VALUES
(1, '[value-2]', 0, '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]'),
(2, 'who', 25, 'test', 'hemophelia', 'take+counselling', 'none', 'meet,good,counsellor'),
(4, 'dfd', 5, '53531', 'sdfnj', 'mdsf', 'sdlm', 'dsmlkfmdsfk'),
(5, 'df', 5, '53531', 'sdfnj', 'mdsf', 'sdlm', 'dsmlkfmdsfk'),
(23, 'sajini', 25, '30', 'fever', 'pandol', 'none', '');

-- --------------------------------------------------------

--
-- Table structure for table `receptionists`
--

DROP TABLE IF EXISTS `receptionists`;
CREATE TABLE IF NOT EXISTS `receptionists` (
  `receptionist_id` int NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `age` int DEFAULT NULL,
  `gender` set('Male','Female') DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `Specialization` varchar(45) NOT NULL,
  `phonenumber` int NOT NULL,
  `NIC` bigint NOT NULL,
  PRIMARY KEY (`receptionist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `receptionists`
--

INSERT INTO `receptionists` (`receptionist_id`, `fullname`, `age`, `gender`, `email`, `Specialization`, `phonenumber`, `NIC`) VALUES
(5, 'Tharo', 25, '', 'Tharo@live.com', 'MLT', 777124715, 200168100452);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `No` int NOT NULL AUTO_INCREMENT,
  `Description` varchar(45) NOT NULL,
  `Time` varchar(45) NOT NULL,
  `Date` varchar(45) NOT NULL,
  PRIMARY KEY (`No`),
  UNIQUE KEY `Description` (`Description`,`Time`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`No`, `Description`, `Time`, `Date`) VALUES
(2, 'tets7', '06/11/2023', '08/11/2023'),
(12, 'Guide', '05/11/2023', '05/11/2023'),
(15, 'Client Meeting', '09.10 AM', '05/11/2023'),
(16, 'Board Meeting', '09.10 AM', '05/11/2023'),
(17, 'tets3', '08/11/2023', '08/11/2023'),
(18, 'Test', '09.10 AM', '05/11/2023');

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

DROP TABLE IF EXISTS `user_db`;
CREATE TABLE IF NOT EXISTS `user_db` (
  `User_Id` int NOT NULL AUTO_INCREMENT,
  `Password` varchar(64) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `usertype` varchar(15) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Profilepicture` blob,
  PRIMARY KEY (`User_Id`),
  UNIQUE KEY `User_Id` (`User_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`User_Id`, `Password`, `Email`, `usertype`, `Username`, `Profilepicture`) VALUES
(1, '46421e9957e7052289ea5dc9799b594e', 'Shaf@live.com', 'Admin', 'Shaf', ''),
(3, 'e50d792a9b56474621d92010fecfc676', 'Saj@live.com', 'Doctor', 'Saj', ''),
(4, '209c4922b75252f5e1ad60ad860af30b', 'Malsh@live.com', 'Nurse', 'Malsh', ''),
(5, '15469bf2bd9e4406957bceb90a9b4b9d', 'Tharo@live.com', 'Receiptionist', 'Tharo', ''),
(6, '09a8198091045ee1cde7ba7237cd175e', 'Bhag@live.com', 'Lab-Assistant', 'Bhag', ''),
(7, '075781df9cd7c79b4802a5807e40d0dd', 'sam@live.com', 'Patient', 'Sam', ''),
(8, '1ab0bd3dca4d3c69d1e3662b0cf5fd4b', 'sam@live.com', 'Patient', 'Sham', ''),
(10, 'f3b6e1995314986a85e69c2ec2df0356', 'hello@live.com', 'Patient', 'hello', ''),
(14, '81dc9bdb52d04dc20036dbd8313ed055', 'samar@gmail.com', 'Patient', 'sami1', ''),
(15, '81dc9bdb52d04dc20036dbd8313ed055', 'sam@gmail.com', 'Patient', 'sam34', ''),
(16, '46421e9957e7052289ea5dc9799b594e', 'Shaf@live.com', 'Owner', 'Lak', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `doctor_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`Doctor_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `patient_ibfk_3` FOREIGN KEY (`Patient_ID`) REFERENCES `patients` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`Doctor_id`) REFERENCES `user_db` (`User_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gm_admin`
--
ALTER TABLE `gm_admin`
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`GM_AD_ID`) REFERENCES `user_db` (`User_Id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `lab_assistants`
--
ALTER TABLE `lab_assistants`
  ADD CONSTRAINT ` lab_assistants_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user_db` (`User_Id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `user_db` (`User_Id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `receptionists`
--
ALTER TABLE `receptionists`
  ADD CONSTRAINT `receptionists_ibfk_2` FOREIGN KEY (`receptionist_id`) REFERENCES `user_db` (`User_Id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
