#
# DUMP FILE
#
# Database is ported from MS Access
#------------------------------------------------------------------
# Created using "MS Access to MySQL" form http://www.bullzip.com
# Program Version 5.5.282
#
# OPTIONS:
#   sourcefilename=C:/AlexC/Documents/HSTech/[Proposal]/ACDeptMgmtCtl (kk20200831.accdb
#   sourceusername=
#   sourcepassword=
#   sourcesystemdatabase=
#   destinationdatabase=movedb
#   storageengine=InnoDB
#   dropdatabase=0
#   createtables=1
#   unicode=1
#   autocommit=1
#   transferdefaultvalues=1
#   transferindexes=1
#   transferautonumbers=1
#   transferrecords=1
#   columnlist=1
#   tableprefix=
#   negativeboolean=0
#   ignorelargeblobs=0
#   memotype=LONGTEXT
#   datetimetype=DATETIME
#

CREATE DATABASE IF NOT EXISTS `movedb`;
USE `movedb`;

#
# Table structure for table 'Allocation'
#

DROP TABLE IF EXISTS `Allocation`;

CREATE TABLE `Allocation` (
  `JobCode` VARCHAR(12) NOT NULL, 
  `Done` TINYINT(1) DEFAULT 0, 
  `DNRecvDate` DATETIME, 
  `Paid` TINYINT(1) DEFAULT 0, 
  `MSPctI` DOUBLE NULL DEFAULT 0, 
  `MSEntitledAmount1` DECIMAL(19,4), 
  `MSPaidDateI` DATETIME, 
  `MSPctII` DOUBLE NULL DEFAULT 0, 
  `MSAcMgrII` VARCHAR(3), 
  `MSEntitledAmount2` DECIMAL(19,4), 
  `MSPaidDateII` DATETIME, 
  `SIBSOverallPct` DOUBLE NULL DEFAULT 0, 
  `SIBSS1SetPct` DOUBLE NULL DEFAULT 0, 
  `SIBSS1AdjPct` DOUBLE NULL DEFAULT 0, 
  `SIBSS1CSFtr` DOUBLE NULL DEFAULT 0, 
  `SIBSS1EntitledAmount` DECIMAL(19,4), 
  `SIBSS1PaidDate` DATETIME, 
  `SIBSS2SetPct` DOUBLE NULL DEFAULT 0, 
  `SIBSS2AdjPct` DOUBLE NULL DEFAULT 0, 
  `SIBSS2CSFtr` DOUBLE NULL DEFAULT 0, 
  `SIBSS2EntitledAmount` DECIMAL(19,4), 
  `SIBSS2PaidDate` DATETIME, 
  `SIBSS3SetPct` DOUBLE NULL DEFAULT 0, 
  `SIBSS3CSFtr` DOUBLE NULL DEFAULT 0, 
  `SIBSS3Staff1Pct` DOUBLE NULL DEFAULT 0, 
  `SIBSS3Staff1EntitledAmount` DECIMAL(19,4), 
  `SIBSS3Staff1PaidDate` DATETIME, 
  `SIBSS3Staff2Pct` DOUBLE NULL DEFAULT 0, 
  `SIBSS3Staff2EntitledAmount` DECIMAL(19,4), 
  `SIBSS3Staff2PaidDate` DATETIME, 
  `SIBSS4SetPct` DOUBLE NULL DEFAULT 0, 
  `SIBSS4AdjPct` DOUBLE NULL DEFAULT 0, 
  `SIBSS4CSFtr` DOUBLE NULL DEFAULT 0, 
  `SIBSS4EntitledAmount` DECIMAL(19,4), 
  `SIBSS4PaidDate` DATETIME, 
  `SIBSS5SetPct` DOUBLE NULL DEFAULT 0, 
  `SIBSS5AdjPct` DOUBLE NULL DEFAULT 0, 
  `SIBSS5CSFtr` DOUBLE NULL DEFAULT 0, 
  `SIBSS5EntitledAmount` DECIMAL(19,4), 
  `SIBSS5PaidDate` DATETIME, 
  `MSSIBSRemarks` VARCHAR(150), 
  INDEX (`JobCode`), 
  PRIMARY KEY (`JobCode`)
) ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'Allocation'
#

# 0 records

#
# Table structure for table 'ASUser'
#

DROP TABLE IF EXISTS `ASUser`;

CREATE TABLE `ASUser` (
  `ID` INTEGER NOT NULL AUTO_INCREMENT, 
  `UserName` VARCHAR(255), 
  `UserPW` VARCHAR(255), 
  `UMenu` TINYINT(1) DEFAULT 0, 
  `MMenu` TINYINT(1) DEFAULT 0, 
  `QMenu` TINYINT(1) DEFAULT 0, 
  `UClient` TINYINT(1) DEFAULT 0, 
  `UJob` TINYINT(1) DEFAULT 0, 
  `UJobProg` TINYINT(1) DEFAULT 0, 
  `UAlloc` TINYINT(1) DEFAULT 0, 
  `QClient` TINYINT(1) DEFAULT 0, 
  `QJob` TINYINT(1) DEFAULT 0, 
  `QJobProg` TINYINT(1) DEFAULT 0, 
  `QAlloc` TINYINT(1) DEFAULT 0, 
  `UJobProgSuperUser` TINYINT(1) DEFAULT 0, 
  `UAllocSuperUser` TINYINT(1) DEFAULT 0, 
  PRIMARY KEY (`ID`)
) ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'ASUser'
#

INSERT INTO `ASUser` (`ID`, `UserName`, `UserPW`, `UMenu`, `MMenu`, `QMenu`, `UClient`, `UJob`, `UJobProg`, `UAlloc`, `QClient`, `QJob`, `QJobProg`, `QAlloc`, `UJobProgSuperUser`, `UAllocSuperUser`) VALUES (1, 'KK', 'it140567', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `ASUser` (`ID`, `UserName`, `UserPW`, `UMenu`, `MMenu`, `QMenu`, `UClient`, `UJob`, `UJobProg`, `UAlloc`, `QClient`, `QJob`, `QJobProg`, `QAlloc`, `UJobProgSuperUser`, `UAllocSuperUser`) VALUES (2, 'admin', 'it140567', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `ASUser` (`ID`, `UserName`, `UserPW`, `UMenu`, `MMenu`, `QMenu`, `UClient`, `UJob`, `UJobProg`, `UAlloc`, `QClient`, `QJob`, `QJobProg`, `QAlloc`, `UJobProgSuperUser`, `UAllocSuperUser`) VALUES (3, 'asstaff', '111222', 1, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0);
INSERT INTO `ASUser` (`ID`, `UserName`, `UserPW`, `UMenu`, `MMenu`, `QMenu`, `UClient`, `UJob`, `UJobProg`, `UAlloc`, `QClient`, `QJob`, `QJobProg`, `QAlloc`, `UJobProgSuperUser`, `UAllocSuperUser`) VALUES (4, 'asexec', '111222', 1, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0, 1, 0);
INSERT INTO `ASUser` (`ID`, `UserName`, `UserPW`, `UMenu`, `MMenu`, `QMenu`, `UClient`, `UJob`, `UJobProg`, `UAlloc`, `QClient`, `QJob`, `QJobProg`, `QAlloc`, `UJobProgSuperUser`, `UAllocSuperUser`) VALUES (5, 'Liza', 'it140567', 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0);
# 5 records

#
# Table structure for table 'ClientMtn'
#

DROP TABLE IF EXISTS `ClientMtn`;

CREATE TABLE `ClientMtn` (
  `ClientCode1` VARCHAR(4) NOT NULL, 
  `ClientCode2` VARCHAR(4), 
  `ClientCode3` VARCHAR(3) NOT NULL, 
  `ClientName` VARCHAR(6) NOT NULL, 
  `ClientLegalEntity` VARCHAR(3) NOT NULL, 
  `ClientJurisdiction` VARCHAR(3) NOT NULL, 
  `DateOfIncorp` DATETIME, 
  `NormalYearEndDate` DATETIME NOT NULL, 
  `NonTaxDeadlineNature` VARCHAR(4) NOT NULL, 
  `NonTaxDeadlineDate` DATETIME, 
  `LastClientStatus` VARCHAR(4) NOT NULL, 
  `LastClientStatusDate` DATETIME, 
  `AcMgr` VARCHAR(3) NOT NULL, 
  INDEX (`ClientCode1`), 
  PRIMARY KEY (`ClientCode1`)
) ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'ClientMtn'
#

# 0 records

#
# Table structure for table 'JobMtn'
#

DROP TABLE IF EXISTS `JobMtn`;

CREATE TABLE `JobMtn` (
  `ID` INTEGER AUTO_INCREMENT, 
  `RecordDate` DATETIME DEFAULT CURRENT_TIMESTAMP, 
  `ClientCode1` VARCHAR(4) NOT NULL, 
  `JobNature` VARCHAR(7) NOT NULL, 
  `JobPeriodFrom` DATETIME, 
  `JobPeriodTo` DATETIME NOT NULL, 
  `OfficialDeadline` DATETIME NOT NULL, 
  `JobNo` INTEGER NOT NULL DEFAULT 0, 
  `QuotationVia` VARCHAR(12), 
  `QuotationSentDate` DATETIME, 
  `QuotationProposedFee` DECIMAL(19,4), 
  `QuotationConfirmedDate` DATETIME, 
  `QuotationAgreedFee` DECIMAL(19,4) NOT NULL, 
  `JobCode` VARCHAR(12), 
  `WorkingDeadline` DATETIME NOT NULL, 
  `JobDeadline` DATETIME NOT NULL, 
  UNIQUE (`ID`), 
  INDEX (`JobCode`)
) ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'JobMtn'
#

# 0 records

#
# Table structure for table 'JobProg'
#

DROP TABLE IF EXISTS `JobProg`;

CREATE TABLE `JobProg` (
  `JobCode` VARCHAR(12) NOT NULL, 
  `S1DCDocRequestVia` VARCHAR(12), 
  `S1DCDocRequestDate` DATETIME, 
  `S1DCDocReceivedToHKO1stDate` DATETIME, 
  `S1DCDocReceivedToHKO2ndDate` DATETIME, 
  `S1DCDocReceivedLastdate80` DATETIME, 
  `S1DCDocReceivedToHKOContent` VARCHAR(200), 
  `S1DCStaff` VARCHAR(4), 
  `S1DCok` TINYINT(1) DEFAULT 0, 
  `S2DDOfficeHandled` VARCHAR(3), 
  `S2DDDocTsfvia` VARCHAR(10), 
  `S2DDDocTsfArrivalDate` DATETIME, 
  `S2DDBreifingDate` DATETIME, 
  `S2DDStaff` VARCHAR(4), 
  `S2DDok` TINYINT(1) DEFAULT 0, 
  `S3ACCommenceDate` DATETIME, 
  `S3ACStaff1` VARCHAR(4), 
  `S3ACStaff2` VARCHAR(4), 
  `S3ACInfoOutstanding1st` DATETIME, 
  `S3ACInfoOutstanding1stReply` DATETIME, 
  `S3ACInfoOutstanding2nd` DATETIME, 
  `S3ACInfoOutstanding2ndReply` DATETIME, 
  `S3ACStaff3` VARCHAR(4), 
  `S3ACDraftFSDate` DATETIME, 
  `S3ACStaff4` VARCHAR(4), 
  `S3ACok` TINYINT(1) DEFAULT 0, 
  `S4FSR1stReviewDate` DATETIME, 
  `S4FSR1stReviewAmendedDate` DATETIME, 
  `S4FSR2ndReviewDate` DATETIME, 
  `S4FSR2ndReviewAmendedDate` DATETIME, 
  `S4FSRStaff` VARCHAR(4), 
  `S4FSRok` TINYINT(1) DEFAULT 0, 
  `S5FSFChecklistSignoffBy` VARCHAR(4), 
  `S5FSFChecklistSignoffDate` DATETIME, 
  `S5FSFFSPrintedBy` VARCHAR(4), 
  `S5FSFFSPrintedDate` DATETIME, 
  `S5FSFDNIssuedBy` VARCHAR(4), 
  `S5FSFDNNoxx` VARCHAR(12), 
  `S5FSFDNDatexx` DATETIME, 
  `S5FSFDNAmountxx` DECIMAL(19,4), 
  `S5FSFFSPackeSentBy` VARCHAR(4), 
  `S5FSFFSPackeSentDate` DATETIME, 
  `S5FSFNoOfQFrClient` INTEGER, 
  `S5FSFok` TINYINT(1) DEFAULT 0, 
  `S6DFPackedUpClientDoc` TINYINT(1) DEFAULT 0, 
  `S6DFPackedUpSoftcopy` TINYINT(1) DEFAULT 0, 
  `S6DFPackedUpHardcopy` TINYINT(1) DEFAULT 0, 
  `S6DFFiledDoc` TINYINT(1) DEFAULT 0, 
  `S6DFFiledDate` DATETIME, 
  `S6DFFiledStaff` VARCHAR(3), 
  `S6DFDocLoc` VARCHAR(10), 
  `S6DFok` TINYINT(1) DEFAULT 0, 
  `SRDRHKODate` DATETIME, 
  `SRDRStoreLoc` VARCHAR(10), 
  `SRDRDocDespatchedTo` VARCHAR(50), 
  `SRDRDocDespatchedInviteDate` DATETIME, 
  `SRDRDocDespatchedDeliveryDate` DATETIME, 
  `SRDRDocDespatchedDeliveryStaff` VARCHAR(4), 
  `SRDRok` TINYINT(1) DEFAULT 0, 
  `Remarks1` VARCHAR(200), 
  `Remarks2` VARCHAR(10), 
  PRIMARY KEY (`JobCode`)
) ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'JobProg'
#

# 0 records

#
# Table structure for table 'ListAcMgr'
#

DROP TABLE IF EXISTS `ListAcMgr`;

CREATE TABLE `ListAcMgr` (
  `AcMgr` VARCHAR(3) NOT NULL, 
  PRIMARY KEY (`AcMgr`)
) ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'ListAcMgr'
#

INSERT INTO `ListAcMgr` (`AcMgr`) VALUES ('-');
INSERT INTO `ListAcMgr` (`AcMgr`) VALUES ('KK');
INSERT INTO `ListAcMgr` (`AcMgr`) VALUES ('SC');
# 3 records

#
# Table structure for table 'ListDocLoc'
#

DROP TABLE IF EXISTS `ListDocLoc`;

CREATE TABLE `ListDocLoc` (
  `DocLoc` VARCHAR(10) NOT NULL, 
  PRIMARY KEY (`DocLoc`)
) ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'ListDocLoc'
#

INSERT INTO `ListDocLoc` (`DocLoc`) VALUES ('GZO');
INSERT INTO `ListDocLoc` (`DocLoc`) VALUES ('HKO as');
INSERT INTO `ListDocLoc` (`DocLoc`) VALUES ('HKO oa');
INSERT INTO `ListDocLoc` (`DocLoc`) VALUES ('HKO wh');
INSERT INTO `ListDocLoc` (`DocLoc`) VALUES ('Oth');
INSERT INTO `ListDocLoc` (`DocLoc`) VALUES ('SZO');
# 6 records

#
# Table structure for table 'ListSentOutVia'
#

DROP TABLE IF EXISTS `ListSentOutVia`;

CREATE TABLE `ListSentOutVia` (
  `SentOutMeans` VARCHAR(12) NOT NULL, 
  PRIMARY KEY (`SentOutMeans`)
) ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'ListSentOutVia'
#

INSERT INTO `ListSentOutVia` (`SentOutMeans`) VALUES ('-');
INSERT INTO `ListSentOutVia` (`SentOutMeans`) VALUES ('Email');
INSERT INTO `ListSentOutVia` (`SentOutMeans`) VALUES ('Fax');
INSERT INTO `ListSentOutVia` (`SentOutMeans`) VALUES ('Oth');
INSERT INTO `ListSentOutVia` (`SentOutMeans`) VALUES ('Wechat …');
# 5 records

#
# Table structure for table 'ListStaffList'
#

DROP TABLE IF EXISTS `ListStaffList`;

CREATE TABLE `ListStaffList` (
  `StaffCode` VARCHAR(4) NOT NULL, 
  `StaffName` VARCHAR(15), 
  PRIMARY KEY (`StaffCode`), 
  INDEX (`StaffCode`)
) ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'ListStaffList'
#

INSERT INTO `ListStaffList` (`StaffCode`, `StaffName`) VALUES ('BL', NULL);
INSERT INTO `ListStaffList` (`StaffCode`, `StaffName`) VALUES ('CL', NULL);
INSERT INTO `ListStaffList` (`StaffCode`, `StaffName`) VALUES ('GZ1', 'Bonnie');
INSERT INTO `ListStaffList` (`StaffCode`, `StaffName`) VALUES ('GZ2', 'Jone');
INSERT INTO `ListStaffList` (`StaffCode`, `StaffName`) VALUES ('GZ3', 'Feng');
INSERT INTO `ListStaffList` (`StaffCode`, `StaffName`) VALUES ('GZ4', 'Naya');
INSERT INTO `ListStaffList` (`StaffCode`, `StaffName`) VALUES ('HK1', 'Ivan');
INSERT INTO `ListStaffList` (`StaffCode`, `StaffName`) VALUES ('HK2', 'Rita');
INSERT INTO `ListStaffList` (`StaffCode`, `StaffName`) VALUES ('HK3', 'Connie D');
INSERT INTO `ListStaffList` (`StaffCode`, `StaffName`) VALUES ('HK4', 'Alex');
INSERT INTO `ListStaffList` (`StaffCode`, `StaffName`) VALUES ('KK', NULL);
INSERT INTO `ListStaffList` (`StaffCode`, `StaffName`) VALUES ('SC', NULL);
INSERT INTO `ListStaffList` (`StaffCode`, `StaffName`) VALUES ('SZ1', 'Happy');
INSERT INTO `ListStaffList` (`StaffCode`, `StaffName`) VALUES ('SZ2', 'Stella');
INSERT INTO `ListStaffList` (`StaffCode`, `StaffName`) VALUES ('SZ3', 'Karen');
# 15 records

#
# Table structure for table 'LoginHistory'
#

DROP TABLE IF EXISTS `LoginHistory`;

CREATE TABLE `LoginHistory` (
  `ID` INTEGER NOT NULL AUTO_INCREMENT, 
  `UserName` VARCHAR(255), 
  `LoginTime` DATETIME, 
  PRIMARY KEY (`ID`)
) ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'LoginHistory'
#

INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (1, 'KK', '2018-12-15 00:27:16');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (2, 'asstaff', '2018-12-15 00:28:26');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (3, 'KK', '2018-12-15 00:29:22');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (4, 'KK', '2018-12-15 00:42:11');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (5, 'KK', '2018-12-15 00:43:12');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (6, 'KK', '2018-12-15 00:46:36');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (7, 'KK', '2018-12-15 00:46:52');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (8, 'KK', '2018-12-21 15:20:20');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (9, 'KK', '2018-12-21 15:22:35');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (10, 'KK', '2018-12-21 15:27:47');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (11, 'KK', '2018-12-21 15:36:09');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (12, 'KK', '2018-12-21 15:38:32');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (13, 'KK', '2018-12-21 15:50:54');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (14, 'KK', '2018-12-21 15:52:35');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (15, 'KK', '2018-12-21 16:33:44');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (16, 'KK', '2018-12-21 16:35:50');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (17, 'KK', '2018-12-21 16:39:48');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (18, 'KK', '2018-12-21 16:43:31');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (19, 'Admin', '2018-12-21 16:44:32');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (20, 'KK', '2018-12-21 16:52:43');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (21, 'Admin', '2018-12-21 16:53:25');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (22, 'KK', '2018-12-21 16:54:02');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (23, 'KK', '2018-12-21 16:56:56');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (24, 'KK', '2018-12-21 16:57:42');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (25, 'KK', '2018-12-21 16:59:00');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (26, 'KK', '2018-12-21 17:16:16');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (27, 'KK', '2018-12-21 17:18:36');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (28, 'Admin', '2018-12-21 17:20:37');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (29, 'KK', '2018-12-21 17:25:05');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (30, 'KK', '2018-12-21 22:16:53');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (31, 'Admin', '2018-12-21 22:19:45');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (32, 'KK', '2018-12-21 22:28:36');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (33, 'KK', '2018-12-21 22:38:13');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (34, 'KK', '2018-12-21 22:40:45');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (35, 'KK', '2018-12-21 22:44:41');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (36, 'Admin', '2018-12-21 22:54:00');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (37, 'Admin', '2018-12-21 23:00:00');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (38, 'KK', '2018-12-21 23:01:02');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (39, 'KK', '2018-12-21 23:04:53');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (40, 'KK', '2018-12-21 23:14:21');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (41, 'KK', '2018-12-24 09:22:37');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (42, 'KK', '2018-12-24 10:26:43');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (43, 'KK', '2018-12-24 10:28:01');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (44, 'KK', '2018-12-24 10:29:20');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (45, 'KK', '2018-12-24 10:41:16');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (46, 'KK', '2018-12-24 10:43:26');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (47, 'KK', '2018-12-24 10:46:46');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (48, 'KK', '2018-12-24 10:49:33');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (49, 'KK', '2018-12-24 10:53:38');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (50, 'KK', '2018-12-24 10:54:56');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (51, 'KK', '2018-12-24 11:00:00');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (52, 'KK', '2018-12-24 11:02:31');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (53, 'KK', '2018-12-24 11:03:48');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (54, 'KK', '2018-12-24 11:06:20');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (55, 'KK', '2018-12-24 11:13:29');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (56, 'KK', '2018-12-28 16:56:46');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (57, 'KK', '2018-12-31 10:36:00');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (58, 'KK', '2018-12-31 10:44:30');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (59, 'KK', '2018-12-31 10:45:04');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (60, 'KK', '2018-12-31 10:45:55');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (61, 'KK', '2018-12-31 10:46:17');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (62, 'KK', '2018-12-31 10:54:42');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (63, 'KK', '2018-12-31 10:55:27');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (64, 'KK', '2018-12-31 11:22:31');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (65, 'KK', '2018-12-31 11:25:21');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (66, 'KK', '2018-12-31 11:27:33');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (67, 'KK', '2018-12-31 11:27:55');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (68, 'KK', '2018-12-31 11:28:20');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (69, 'KK', '2018-12-31 15:33:49');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (70, 'KK', '2018-12-31 15:52:32');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (71, 'KK', '2018-12-31 15:54:13');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (72, 'KK', '2018-12-31 23:41:46');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (73, 'KK', '2018-12-31 23:42:59');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (74, 'KK', '2018-12-31 23:51:58');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (75, 'KK', '2019-01-01 09:11:36');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (76, 'KK', '2019-01-02 00:20:49');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (77, 'KK', '2019-01-02 00:30:25');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (78, 'KK', '2019-02-01 12:56:52');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (79, 'KK', '2019-02-01 14:55:27');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (80, 'KK', '2019-02-01 14:56:54');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (81, 'KK', '2019-02-01 15:03:32');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (82, 'KK', '2019-02-01 15:12:06');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (83, 'KK', '2019-02-01 15:12:24');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (84, 'KK', '2019-02-01 15:13:05');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (85, 'KK', '2019-02-01 15:16:54');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (86, 'KK', '2019-02-01 15:18:44');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (87, 'KK', '2019-02-01 16:52:50');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (88, 'KK', '2019-02-01 16:55:19');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (89, 'KK', '2019-02-01 16:59:13');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (90, 'KK', '2019-02-01 17:01:49');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (91, 'KK', '2019-02-01 17:03:57');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (92, 'KK', '2019-02-01 17:09:39');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (93, 'KK', '2019-02-01 17:10:32');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (94, 'KK', '2019-02-01 17:12:05');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (95, 'KK', '2019-02-01 17:12:46');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (96, 'KK', '2019-02-01 17:13:18');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (97, 'KK', '2019-02-01 17:13:38');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (98, 'KK', '2019-02-01 17:18:00');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (99, 'KK', '2019-02-02 00:01:57');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (100, 'KK', '2019-02-02 00:05:30');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (101, 'KK', '2019-02-02 00:13:43');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (102, 'KK', '2019-02-02 00:18:13');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (103, 'KK', '2019-02-06 11:04:54');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (104, 'KK', '2019-02-06 16:49:03');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (105, 'KK', '2019-02-06 16:54:18');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (106, 'admin', '2019-02-06 19:13:13');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (107, 'admin', '2019-02-06 19:20:43');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (108, 'kk', '2019-02-09 16:15:00');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (109, 'kk', '2019-02-09 16:18:11');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (110, 'kk', '2019-02-09 17:47:15');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (111, 'kk', '2019-02-09 17:48:15');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (112, 'kk', '2019-02-09 18:39:42');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (113, 'kk', '2019-02-09 18:47:28');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (114, 'kk', '2019-02-09 18:49:17');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (115, 'kk', '2019-02-09 18:56:26');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (116, 'kk', '2019-02-09 19:02:10');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (117, 'kk', '2019-02-09 19:03:09');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (118, 'kk', '2019-02-09 22:32:22');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (119, 'kk', '2019-02-10 17:59:35');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (120, 'kk', '2019-02-10 18:04:38');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (121, 'kk', '2019-02-10 18:06:53');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (122, 'kk', '2019-02-10 18:07:25');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (123, 'kk', '2019-02-10 18:10:04');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (124, 'kk', '2019-02-10 19:48:37');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (125, 'kk', '2019-02-11 20:02:26');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (126, 'kk', '2019-02-11 22:03:04');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (127, 'kk', '2019-02-11 22:32:38');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (128, 'kk', '2019-02-12 00:32:13');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (129, 'kk', '2019-02-12 16:17:58');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (130, 'kk', '2019-02-12 16:22:19');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (131, 'kk', '2019-02-12 16:45:50');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (132, 'kk', '2019-02-12 22:11:04');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (133, 'kk', '2019-02-12 22:31:59');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (134, 'kk', '2019-02-13 00:26:28');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (135, 'kk', '2019-02-13 16:58:18');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (136, 'kk', '2019-02-13 21:40:31');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (137, 'kk', '2019-02-13 22:20:15');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (138, 'kk', '2019-02-13 22:22:53');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (139, 'kk', '2019-02-14 15:58:15');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (140, 'kk', '2019-02-14 22:37:32');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (141, 'kk', '2019-02-14 22:44:07');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (142, 'kk', '2019-02-15 14:20:04');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (143, 'kk', '2019-02-15 14:30:39');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (144, 'kk', '2019-02-15 17:11:25');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (145, 'kk', '2019-02-15 22:15:38');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (146, 'kk', '2019-02-15 23:01:30');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (147, 'kk', '2019-02-17 15:20:07');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (148, 'kk', '2019-02-17 15:54:03');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (149, 'kk', '2019-02-17 16:03:18');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (150, 'kk', '2019-02-17 16:06:55');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (151, 'kk', '2019-02-17 16:33:35');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (152, 'kk', '2019-02-17 20:53:07');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (153, 'kk', '2019-02-18 00:25:32');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (154, 'kk', '2019-02-18 00:45:57');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (155, 'kk', '2019-02-20 00:02:08');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (156, 'kk', '2019-02-20 01:02:38');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (157, 'kk', '2019-02-20 01:08:17');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (158, 'kk', '2019-02-20 22:36:36');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (159, 'kk', '2019-02-20 22:44:06');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (160, 'kk', '2019-02-20 22:45:18');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (161, 'kk', '2019-02-22 21:38:19');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (162, 'kk', '2019-02-24 17:34:06');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (163, 'kk', '2019-02-24 21:31:26');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (164, 'kk', '2019-02-27 00:40:28');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (165, 'kk', '2019-02-27 00:40:56');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (166, 'kk', '2019-02-27 00:44:53');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (167, 'kk', '2019-02-27 22:36:40');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (168, 'kk', '2019-02-27 22:37:31');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (169, 'kk', '2019-02-27 22:38:41');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (170, 'kk', '2019-02-27 22:39:31');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (171, 'kk', '2019-02-27 22:51:00');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (172, 'kk', '2019-02-27 23:00:35');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (173, 'kk', '2019-02-28 00:44:00');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (174, 'kk', '2019-03-01 00:30:07');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (175, 'kk', '2019-03-10 20:40:32');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (176, 'kk', '2019-03-10 20:58:27');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (177, 'kk', '2019-03-10 21:19:46');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (178, 'kk', '2019-03-10 21:30:19');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (179, 'kk', '2019-03-10 21:32:10');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (180, 'kk', '2019-03-10 21:34:11');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (181, 'kk', '2019-03-11 14:09:04');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (182, 'kk', '2019-03-11 17:32:41');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (183, 'kk', '2019-03-24 17:15:57');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (184, 'kk', '2019-03-24 17:30:24');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (185, 'kk', '2019-03-24 19:52:47');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (186, 'kk', '2019-03-24 19:53:26');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (187, 'kk', '2019-03-24 20:04:27');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (188, 'kk', '2019-03-24 20:57:28');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (189, 'kk', '2019-03-24 20:57:54');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (190, 'kk', '2019-03-26 21:49:07');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (191, 'kk', '2019-03-26 22:07:36');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (192, 'kk', '2019-03-26 22:08:52');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (193, 'kk', '2019-03-26 22:13:19');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (194, 'kk', '2019-03-26 22:17:16');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (195, 'kk', '2019-03-26 22:31:08');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (196, 'kk', '2019-03-26 22:47:46');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (197, 'kk', '2019-03-27 00:35:41');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (198, 'kk', '2019-03-27 00:44:38');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (199, 'kk', '2019-03-27 00:50:00');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (200, 'kk', '2019-03-27 00:53:10');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (201, 'kk', '2019-03-27 00:57:59');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (202, 'kk', '2019-03-27 11:15:01');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (203, 'kk', '2019-03-27 11:17:14');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (204, 'kk', '2019-03-27 11:39:22');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (205, 'kk', '2019-03-27 12:01:59');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (206, 'kk', '2019-03-27 12:10:42');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (207, 'kk', '2019-03-27 14:20:41');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (208, 'kk', '2019-03-28 00:14:54');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (209, 'kk', '2019-03-28 00:26:04');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (210, 'kk', '2019-03-28 00:40:59');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (211, 'kk', '2019-03-28 14:25:06');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (212, 'fna', '2019-03-28 14:29:52');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (213, 'fna', '2019-03-29 00:25:18');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (214, 'kk', '2019-03-29 00:28:56');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (215, 'kk', '2019-03-29 00:38:03');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (216, 'kk', '2019-03-29 00:47:43');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (217, 'kk', '2019-03-29 01:02:54');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (218, 'kk', '2019-03-29 01:04:41');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (219, 'kk', '2019-03-30 00:02:32');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (220, 'kk', '2019-03-30 13:55:21');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (221, 'kk', '2019-03-30 15:19:06');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (222, 'kk', '2019-03-30 16:14:41');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (223, 'fna', '2019-03-30 16:41:03');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (224, 'kk', '2019-03-30 16:45:22');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (225, 'kk', '2019-03-30 17:00:00');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (226, 'kk', '2019-03-30 17:03:57');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (227, 'kk', '2019-03-30 17:19:35');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (228, 'fna', '2019-03-30 17:21:59');
INSERT INTO `LoginHistory` (`ID`, `UserName`, `LoginTime`) VALUES (229, 'kk', '2019-03-30 17:41:34');
# 229 records

#
# Table structure for table 'SysParam'
#

DROP TABLE IF EXISTS `SysParam`;

CREATE TABLE `SysParam` (
  `ID` INTEGER NOT NULL AUTO_INCREMENT, 
  `ParamType` VARCHAR(255), 
  `ParamValue` VARCHAR(255), 
  PRIMARY KEY (`ID`)
) ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'SysParam'
#

INSERT INTO `SysParam` (`ID`, `ParamType`, `ParamValue`) VALUES (1, 'YearStartDay', '0401');
# 1 records

